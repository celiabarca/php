<?php
//cada linea de los scipts tiene que ser
session_start();
//borra un elemento de un array de sesion
session_destroy();
header('Location:index.php');
 ?>
