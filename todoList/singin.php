<?php
//iniciamos sesion
  session_start();
  //omportamos el head
  include 'lib/head.php';
  //importamos el footer
  include 'lib/footer.php';
  //try para controlar los errores i que no le pete al usuario en la calle
  try{
    //if para comprobar que los campos que nos envian no estan vacios
  if(isset($_POST) &&
    !empty($_POST['nom']) &&
    !empty($_POST['pass']))
  {
//guardar campos en variables
       $nom=htmlspecialchars($_POST['nom']);
       $pass=md5(htmlspecialchars($_POST['pass']));
       //creamos una conexion a la bbdd
       $conn = new mysqli("localhost", "todolist", "linuxlinux", "todoList");
       if ($conn->connect_errno) {
           echo "Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
       }
       //esta es una consulta para comprobar que hay un user con el nombre y la contraseña igual que la que nos casa el user
      $sql="SELECT *FROM cliente WHERE user='$nom' && pass='$pass'";
      //ejecutamos la consulta
      $res2=$conn->query($sql);

//num row para saber cuantos valeres devuelve la sentencia sql
      if($res2->num_rows>=1)
      {
        //metemos en las variables de sesion el nombre i el pass si coincide con los de a bbdd
        $_SESSION['cliente']['pass']=$pass;
        $_SESSION['cliente']['user']=$nom;
        //como todo esta correcto vamos a si lista de tareas
        header("Location:list.php");
      }else {
        echo "<h1 class='bg-danger' style='margin-top:3%; '>EL USUARIO NO EXISTE</h1>";
      }
  }
} catch (Exception $e) {
  echo $e -> getMessage();
}
?>

   <div style="margin-top:3%;">
<form action="<?= $SERVER['PHP_SELF'];?>" method="post">
  <p>Nombre: <input type="text" class="form-control" name="nom"></p>
  <p>Password: <input type="password" class="form-control" name="pass"></p>
  <input type="submit" name="enviar"class="btn btn-primary btn-block" value="enviar">
</form>

</div>
