<?php
session_start();
include '../inc/conexion.php';
$link=conectar();

$idCiudad=$_REQUEST['idCiudad'];
$Nombre_ciudad=$_REQUEST['Nombre_ciudad'];



$sql='UPDATE `ciudad` SET  `idCiudad`="'.$idCiudad.'",`Nombre_ciudad`="'.$Nombre_ciudad.'" WHERE `IdCiudad`="'.$_SESSION['IdCiudad'].'"';
$result=mysqli_query($link,$sql) or die ("ERROR en la Consulta $sql".mysqli_error($link));


echo "<script type='text/javascript'>
  alert('Usuario Actualizado con exito al sistema ');
  window.location='ciudad/index_ciudad.php';
</script>";

 ?>
