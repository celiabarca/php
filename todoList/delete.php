<?php
//iniciamos sesion
session_start();
include 'configure.php';
//metemos las variables del usuario en variables
$nom=$_SESSION['cliente']['user'];
$pass=$_SESSION['cliente']['pass'];
//cogemos el id de la tarea que lo hemos enviado en el list por el metodo get
$id=$_GET['id'];

//"DELETE FROM `todoList`.`tareas` WHERE `tareas`.`id` = 3"
//preparamos la sentecia para eliminar una tarea
$sql='DELETE FROM `tareas` WHERE `tareas`.`id` ="'.$id.'"';
//ejecutamos la consulta
$res2=$conn->query($sql);
//redirigimos a la lista de tareas
header('Location:list.php');
 ?>
