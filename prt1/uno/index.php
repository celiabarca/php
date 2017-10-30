<?php
//numeros divisibles
//primero creamos el array donde iran todos los divisibles
$nums= array();
//ponemos el contador a 0
$c=1;
try {
  //si no esta vacio el input num empezamos
     if(isset($_POST)&& !empty($_POST['num']))
     {
       //creamos una variable con el numero que a introducido el usuario
       $num=$_POST['num'];
       //empezamos con el vucle que recorra todos los numeros que sean inferiores al numero que a puesto el usuario
       for($i=0;$i<=$num;$i++)
       {
         //preguntamos si el contador que hemos creado antes es residuo de la division da 0
         if($num%$c==0)
         {
           //si da 0 lo metemos en el array que hemos creado antes
           $nums[$i]=$c;
           //i aprobechando printamos el Array
           echo "<br>".$nums[$i];
         }
         //incrementamos el contador fuea del if para que pase lo que pase el c se sume uno
         $c++;
       }
     }
   } catch (Exception $e) {
     echo $e -> getMessage();
   }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ejercicio1</title>
  </head>
  <body>
    <!-- enviamos la informacion con el metodo post-->
    <form action="<?= $_SERVER['PHP_SELF'];?>" method="post">
      <p>Numero: <input type="text" name="num"></p>
      <input type="submit" name="enviar" value="enviar">
    </form>
  </body>
</html>
