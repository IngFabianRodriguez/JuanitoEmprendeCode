<?php
function conectar(){
$h='localhost';// servidor de MYSQL
$u='root'; // Usuario de MYSQL
$p=''; // password de la MYSQL
$db_name='juanitoemprende';
//crea a conexion a la BD
$link= mysqli_connect($h,$u,$p) or die ("Error al conectarse a la BD");
//seleccionar la BD
  mysqli_select_db($link,$db_name) or die ("ERROR al seleccionar la BD");
   return $link;
   }
    ?>
