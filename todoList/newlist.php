<?php
//iniciamos sesion
session_start();
//incluimos los dos ficheros head i footer
include 'lib/headRegistro.php';
include 'lib/footer.php';
//metemos los datos del usuario en variables
$nom=$_SESSION['cliente']['user'];
$pass=$_SESSION['cliente']['pass'];
//utilizamos el try para que si pasa algo no le salte el error feo al usuario
try
{
//comprobamos que los datos que nos pasan no estan vacios
  if(isset($_POST) &&
     !empty($_POST['titulo'])&&
     !empty($_POST['tarea'])&&
     !empty($_POST['fechaIni'])&&
     !empty($_POST['fechaFin']))
  {
//metemos los datos que nos da el usuario en variables
    $titulo=$_POST['titulo'];
    $tarea=$_POST['tarea'];
    $fechaIni=$_POST['fechaIni'];
    $fechaFin=$_POST['fechaFin'];
//creamso una conexion
    $conn = new mysqli("localhost", "todolist", "linuxlinux", "todoList");
    if ($conn->connect_errno) {
        echo "Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
    }
//hacemos un select para sacar el id del usuario para poder assignarlo a la variable
    $sql="SELECT id FROM cliente WHERE user='$nom' && pass='$pass'";
//ejecutamos la consulta
    $res2=$conn->query($sql);
    //metemos el id en una variable
    $idClient=$res2->fetch_assoc();
    //INSERT INTO `todoList`.`tareas` (`id`, `fecha_fin`, `fecha_ini`, `tarea`, `titulo`, `id_cliente`) VALUES (NULL, '2017-11-15', '2017-11-22', 'matar a frisar', 'gokutareas', '4');
//creamos la sentencia para poder insertar tareas
    $sql1="INSERT INTO `todoList`.`tareas` (`id`, `fecha_fin`, `fecha_ini`, `tarea`, `titulo`, `id_cliente`) VALUES (NULL,'".$fechaFin."','".$fechaIni."','".$tarea."','".$titulo."','".$idClient['id']."')";
//ejecutamos la sentencia que hemos creado antes
    $res3=$conn->query($sql1);
//redirigimos al fichero donde estan las lista de las tareas
  header("Location:list.php");
  }
}catch (Exception $e) {
  echo $e -> getMessage();
}
?>
  <div style="margin-top:3%;">
<form action="<?= $SERVER['PHP_SELF'];?>" method="post">
 <p>Titulo: <input type="text" class="form-control" name="titulo"></p>
 <p>Tarea: <textarea  class="form-control" name="tarea"></textarea></p>
 <p>Fecha Inicio: <input type="text" class="form-control" name="fechaIni"></p>
 <p>Fecha Fin: <input type="text" class="form-control" name="fechaFin"></p>
 <input type="submit" name="enviar"class="btn btn-primary btn-block" value="enviar">
</form>
</div>
