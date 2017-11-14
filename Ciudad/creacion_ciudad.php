<?php
include '../inc/conexion.php';
$link=conectar();

$idCiudad = $_REQUEST['idCiudad'];
$nombre_ciudad = $_REQUEST['Nombre_ciudad'];


$sql='INSERT INTO `ciudad`(`idCiudad`, `Nombre_ciudad`)
        VALUES ("'.$idCiudad.'", "'.$nombre_ciudad.'")';
$result=mysqli_query($link,$sql) or die ("ERROR en la Consulta $sql".mysqli_error($link));

echo "<script type='text/javascript'>
  alert('Ciudad ingresada con exito al sistema ');
  window.location='../ciudad/index_ciudad.php';
</script>";

 ?>
