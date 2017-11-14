<?php
session_start();
include '../inc/conexion.php';
$link=conectar();
$nombre=$_REQUEST['nombre'];
$sql='UPDATE `ciudad` SET `Nombre_ciudad`="'.$nombre.'" WHERE idCiudad = "'.$_SESSION['idCiudad'].'"';
$result=mysqli_query($link,$sql) or die ("ERROR AL REALIZAR LA CONSULTA $sql".mysqli_error($result));

echo "<script type='text/javascript'>
  alert('Ciudad actualizada con exito ');
    window.location='../Ciudad/consulta.php';
</script>";

 ?>
