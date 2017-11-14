<?php
session_start();
include '../inc/conexion.php';
$link=conectar();

$id=$_REQUEST['id'];
$nombre=$_REQUEST['nombre'];

$sql='INSERT INTO `ciudad`(`idCiudad`, `Nombre_ciudad`) VALUES ("'.$id.'","'.$nombre.'")';
$result=mysqli_query($link,$sql) or die ("ERROR AL REALIZAR LA CONSULTA $sql".mysqli_error($result));

echo "<script type='text/javascript'>
  alert('Ciudad creada con exito ');
    window.location='../Ciudad/index.php';
</script>";
 ?>
