<?php
//inicio sesion para poder utilizar las bariables en todas las pag
session_start();
//creo una variable con el directorio donde tengo guardadas las imagenes
$dir="img/";
//poner el contados a 0
$i=0;
if(isset($_POST))
{
//generar el numero aleatorio
  $num=rand(1,6);
  //metemos el numero en una variable de sesion para utilizarlas en todas las paginas
  $_SESSION['defensor'] =$num;
  //echo $num;
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
      //creamos el tack de imagen para meter la direccion de la imagen utilizando el numero aleatorio que hemos creado antes
      //si Toni ya se que lo del array de antes no sirve para nada pero bueno ya esta hecho lo dej
      echo"<img src='".$dir.$num.".svg'>";
      //cerramos el fichero
      closedir($puntero);
    }
  }

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
    <h1>DEFENSOR</h1>
  <form class="" action="res.php" method="post">
    <br><input type="submit" name="btn" value="Jugar">
  </form>
  </body>
</html>
