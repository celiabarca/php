<?php
ini_set('display_errors', 1);
//iniciamos sesion
session_start();
include 'configure.php';
//metemos las variables del usuario en variables
$nom=$_SESSION['cliente']['user'];
$pass=$_SESSION['cliente']['pass'];
//cogemos el id de la tarea que lo hemos enviado en el list por el metodo get
$id=$_GET['id'];
//UPDATE `todoList`.`tareas` SET `acabada` = '0' WHERE `tareas`.`id` = 5
//preparamos la sentencia para actualizar el estado de la columna acabada
$sql='UPDATE `tareas` SET `acabada` = "1" WHERE `tareas`.`id` ="'.$id.'"';
//ejecutamos la sentencia sql
$res2=$conn->query($sql);
//redirigimos a la lista de tareas
header('Location:list.php');


 ?>
