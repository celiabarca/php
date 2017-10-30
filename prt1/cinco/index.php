<?php
//creo un get para ver que me han puesto en la url si es 1 va a la primera pag so es dos a la segunda .... i si no es ninguna se esta pongo una alerta de que solo puede ser 123
switch ($_GET[pag])
{
  case 1:
        $contenido=file_get_contents('files/pag1.html');
        echo $contenido;
  break;
  case 2:
        $contenido=file_get_contents('files/pag2.html');
        echo $contenido;
  break;
  case 3:
  $contenido=file_get_contents('files/pag3.html');
  echo $contenido;
  break;
  default:
  echo "<h1 color='red'>eso no corresponde a ninguna pagina</h1>";
}
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>

   </body>
 </html>
