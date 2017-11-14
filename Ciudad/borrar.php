<?php
session_start();
include '../inc/conexion.php';
$link=conectar();
$id=$_GET['idCiudad'];
$sql='DELETE FROM `ciudad` WHERE idCiudad = "'.$id.'"';
$result=mysqli_query($link,$sql) or die ("ERROR AL REALIZAR LA CONSULTA $sql".mysqli_error($result));

echo "<script type='text/javascript'>
  alert('Ciudad borrada con exito ');
    window.location='../Ciudad/consulta.php';
</script>";

?>
