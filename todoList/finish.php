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
//UPDATE `todoList`.`tareas` SET `acabada` = '0' WHERE `tareas`.`id` = 5
//preparamos la sentencia para actualizar el estado de la columna acabada
$sql='UPDATE `todoList`.`tareas` SET `acabada` = "1" WHERE `tareas`.`id` ="'.$id.'"';
//ejecutamos la sentencia sql
$res2=$conn->query($sql);
//redirigimos a la lista de tareas
header('Location:list.php');


 ?>
