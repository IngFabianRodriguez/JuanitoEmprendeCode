<?php
session_start();
include '../inc/conexion.php';
$link=conectar();

$idDepartamento=$_REQUEST['idDepartamento'];
$nombre=$_REQUEST['nombre'];



$sql='UPDATE `departamento` SET  `idDepartamento`="'.$idDepartamento.'",`nombre`="'.$nombre.'" WHERE `idDepartamento`="'.$_SESSION['idDepartamento'].'"';
$result=mysqli_query($link,$sql) or die ("ERROR en la Consulta $sql".mysqli_error($link));


echo "<script type='text/javascript'>
  alert('Usuario Actualizado con exito al sistema ');
  window.location='departamento/index_ciudad.php';
</script>";

 ?>
