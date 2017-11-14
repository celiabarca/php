<?php
ini_set('display_errors', 1);
$ip_dominio = $_SERVER['SERVER_ADDR'];
$conf =($ip_dominio=='127.0.0.1')?'config.dev.ini':'config.ini';
$config=parse_ini_file($conf);
try{
  $conn=new mysqli($config['dbhost'], $config['dbuser'],
  $config['dbpass'], $config['dbname']);
}catch(Exception $e)
{
  echo 'connection faild:'.$e->getMessage();
}
 ?>
