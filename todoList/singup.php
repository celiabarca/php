<?php
//iniciamos sesion
  session_start();
  //omportamos el head
  include 'lib/head.php';
  //importamos el footer
  include 'lib/footer.php';
  //try para controlar los errores i que no le pete al usuario en la calle
  try{
    //if para comprobar que los campos que nos envian no estan vacios y que la contraseña i la comprobacion de la contraseña son iguales
  if(isset($_POST) &&
    !empty($_POST['nom']) &&
    !empty($_POST['email']) &&
    !empty($_POST['pass1']) &&
    !empty($_POST['pass2']))
  {
    if($_POST['pass1']== $_POST['pass2'])
    {
      //guardar campos en variables
      $nom=htmlspecialchars($_POST['nom']);
      $email=htmlspecialchars($_POST['email']);
      $pass=md5(htmlspecialchars($_POST['pass1']));
      //creamos una conexion a la bbdd
      $conn = new mysqli("localhost", "todolist", "linuxlinux", "todoList");
    if ($conn->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    //INSERT INTO `todoList`.`cliente` (`id`, `user`, `pass`, `email`) VALUES (NULL, 'celia', '123', 'celia@celia');
    //insertamos el user en la bbdd
    $sql="INSERT INTO `todoList`.`cliente` (`id`, `user`, `pass`, `email`) VALUES(NULL, '".$nom."','".$pass."','".$email."')";
    //ejecutamos en la conexion que tenemos creeada la secuencia sql
    $res=$conn->query($sql);

      header("Location:singin.php");
  }else{
    echo "<h1 class='bg-danger' style='margin-top:3%; '>LA CONTRASEÑA NO COINCIDE</h1>";
  }
 }
}catch(Exception $e){
  echo 'Error:'.$e;
}
?>

   <div style="margin-top:3%;">
   <form action="<?= $SERVER['PHP_SELF'];?>" method="post">
     <p>Nombre: <input type="text" class="form-control" name="nom"></p>
     <p>Email: <input type="email" class="form-control" name="email"></p>
     <p>Password: <input type="password" class="form-control" name="pass1"></p>
     <p>Repeat: <input type="password" class="form-control" name="pass2"></p>
     <input type="submit" name="enviar"class="btn btn-primary btn-block" value="enviar">
   </form>
   <h4><a href="singin.php">Ya tengo una cuenta</a></h4>
</div>
