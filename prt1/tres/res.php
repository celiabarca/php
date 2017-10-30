<?php
session_start();
$vacia = 0;
/* codigo que no a fincionado lo dejo para que veas las posibilidades i para que me digas como podria hacer que funcionara esta idea si se puede sino no pasa nada porque encontre una idea menos limpia de hacerlo
for($i=0;$i<$num;$i++)
{
if(isset($_POST['caja'.$i.'']) && !empty($_POST['caja'.$i.'']))
{
  $vacia++;
}*/
//he utilizado un for each para recorrer el array $_POST preguntado si el value es === que es para ver si son iguales en tipo tambien para ver las vacias
foreach ($_POST as $key => $value) {
    if ($value === ''){
      $vacia++;
    }

}

$_SESSION['vacias']=$vacia;
// printo las vacias
echo "hay ".$_SESSION['vacias']."inputs vacios";

 ?>
