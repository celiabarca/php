<?php
//iniciamos la sesion
session_start();
//guardamos la variable de sesion que hemos creado en index.php y en el body
$num=$_SESSION['num'];


 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <form action="res.php" method="post">
       <?php
       //creamos una tabla con tantos imputs como nos haya dicho el usuario  con el for y un contador
       echo "<table borde=1>";
       for($i=0;$i<$num;$i++)
       {
         echo "<tr><td><input type='text' name='caja".$i."'></td></tr>";
       }
       echo "</table>";
        ?>
        <input type="submit" name="compro" value="compro">
     </form>

   </body>
 </html>
