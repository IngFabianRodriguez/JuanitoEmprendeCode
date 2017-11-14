<?php
session_start();
include '../inc/conexion.php';
$link=conectar();

$id=$_REQUEST['id'];
$nombre=$_REQUEST['departamento'];

$sql='INSERT INTO `departamento`(`idDepartamento`, `Nombre`) VALUES ("'.$id.'","'.$nombre.'")';
$result=mysqli_query($link,$sql) or die ("ERROR AL REALIZAR LA CONSULTA $sql".mysqli_error($result));

echo "<script type='text/javascript'>
  alert('Area creada con exito ');
    window.location='../Departamento/index.php';
</script>";
 ?>
