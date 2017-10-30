<?php
//iniciamos sesion para poder utilizar la variable en todas las paginas
session_start();
//comprobamos que el imput no esta vacio i que el numero va del 1 -10
if(isset($_POST)&& !empty($_POST['num'])&& $_POST['num']>0 && $_POST['num']<=10)
{
  //metemos el numero del imput dentro del la variable de sesion
  $_SESSION['num'] =$_POST['num'];
//redirigimos a la segunda pagina
  header("Location:tabla.php");
}else{
  //sino damos el error 
  echo "Tienes que poner un numero entre el 1 y el 10";
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ejercicio1</title>
  </head>
  <body>
    <form action="<?= $_SERVER['PHP_SELF'];?>" method="post">
      <p>Numero: <input type="text" name="num"></p>
      <input type="submit" name="enviar" value="enviar">
    </form>
  </body>
</html>
