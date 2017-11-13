<?php
//iniciamos sesion
session_start();
//metemos las variables del usuario en variables
$nom=$_SESSION['cliente']['user'];
$pass=$_SESSION['cliente']['pass'];
//cogemos el id de la tarea que lo hemos enviado en el list por el metodo get
$id=$_GET['id'];
//creamos una conexion
$conn = new mysqli("localhost", "todolist", "linuxlinux", "todoList");
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
}
//"DELETE FROM `todoList`.`tareas` WHERE `tareas`.`id` = 3"
//preparamos la sentecia para eliminar una tarea
$sql='DELETE FROM `todoList`.`tareas` WHERE `tareas`.`id` ="'.$id.'"';
//ejecutamos la consulta
$res2=$conn->query($sql);
//redirigimos a la lista de tareas
header('Location:list.php');
 ?>
