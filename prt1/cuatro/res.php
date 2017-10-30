<?php
//inicio sesion para poder utilizar las bariables en todas las pag
session_start();
//creo una variable con el directorio donde tengo guardadas las imagenes
$dir="img/";
//metemos las dos variables de sesion para trabajar mas comodo
$atacante=$_SESSION['atacante'];
$defensor=$_SESSION['defensor'];
//preguntamos si es un directorio
if(is_dir($dir))
{
  //abrimos el directorio poniendo en puntero dodne se encuentra esto
  if($puntero=opendir($dir))
  {
    //hacemos un bucle hasta que no quede ningun archivo sin leer y guardamos cada nombre en un array
    while (($entrada=readdir($puntero))!==false)
    {
      //creamos un array donde estara la ruta entera el directorio de antes + el nombre del archivo que hemos consegido con el reddir
      $ruta[$i]=$dir.$entrada;
      $i++;
    }
    //i de la misma manera hacemos el tack de las fotos
    echo "<br>ATACANTE"."<img src='".$dir.$atacante.".svg'>";
    echo "<br>DEFENSOR"."<img src='".$dir.$defensor.".svg'>";
    //cerramos el fichero
    closedir($puntero);
  }
}
//preguntamos quien a ganado
if($atacante>$defensor)
{
  //utilizo el intval para combertirlas en numero y que se puedan restar, aunque creo que no haria falta
  echo"<br>GANADOR ATACANTE POR ".intval($atacante-$defensor);
}elseif ($atacante==$defensor) {
  echo "<br>EMPATE";
}else{
  echo "<br>GANADOR DEFENSOR ". intval($defensor-$atacante);
}
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>ATACANTE</title>
     <link rel="stylesheet" href="estilo/estilo.css">
   </head>
   <body>
     <h1>RESULTADO</h1>
     <!--redirijo con el boton a la primera pagina -->
   <form class="" action="index.php" method="post">
     <br><input type="submit" name="btn" value="VOLVER A JUGAR">
   </form>
   </body>
 </html>
