<?php
//iniciamos sesion
  session_start();
  //omportamos el head diferente porque en este hay la opcion de cerrar sesion
include 'lib/headRegistro.php';
include 'lib/footer.php';
include 'configure.php';
//metemos en la variable el user y el pass atraves de las variables de session
$nom=$_SESSION['cliente']['user'];
$pass=$_SESSION['cliente']['pass'];
//creamos una sentencia que saque todos los datos de las tareas
$sql1="SELECT tarea, fecha_fin, fecha_ini, titulo,tareas.id, acabada from tareas inner join cliente on id_cliente = cliente.id where user ='$nom' && pass='$pass'";
//ejecutamos la sentencia
$res2=$conn->query($sql1);
//emepzamos a crear la tabla donde van los datos de las tablas
echo "<table  style='margin-top:5%;' class='container table'>";
//metemos los datos que nos devulve la consulta en un array  fcon el  fetch row
while ($resultados = $res2->fetch_row()) {
//aqui lo que hacemos es que cuando la tarea esta desactivada le ponemos color y ocultanis un icono
if($resultados[5]==1)
{
  echo "<tr class='success'>";
  echo '<td>'.$resultados[0].'</td>';
  echo '<td>'.$resultados[1].'</td>';
  echo '<td>'.$resultados[2].'</td>';
  echo '<td>'.$resultados[3].'</td>';
  echo '<td>
  <a href="delete.php?id='.$resultados[4].'"><img src="img/garbage.png"/></a>
  </td>';
  echo "</tr>";
}
//siono no mostramos ningun color i mostramos los dos iconos
else{
echo"<tr>";
  echo '<td>'.$resultados[0].'</td>';
  echo '<td>'.$resultados[1].'</td>';
  echo '<td>'.$resultados[2].'</td>';
  echo '<td>'.$resultados[3].'</td>';
//enviamos el id de la tarea atrabes dek metodo get
  echo '<td>
  <a href="delete.php?id='.$resultados[4].'"><img src="img/garbage.png"/></a>
  <a href="finish.php?id='.$resultados[4].'"><img src="img/tick.png"/></a>
  </td>';
  echo "</tr>";
  }
}
echo "</table>";
 ?>



  <div class='container' style='margin-left:30%'>
  <form action="newlist.php" method="post">
    <input type="submit" style='margin-top:3%;width:50%' name="anyadir"class="btn btn-primary btn-block" value="+">
  </form>

</div>
