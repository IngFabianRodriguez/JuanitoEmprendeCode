<?php
include '../inc/conexion.php';
$link=conectar();

$idDepartamento = $_REQUEST['idDepartamento'];
$nombre = $_REQUEST['nombre'];


$sql='INSERT INTO `Departamento`(`idDepartamento`, `nombre`)
        VALUES ("'.$idDepartamento.'", "'.$nombre.'")';
$result=mysqli_query($link,$sql) or die ("ERROR en la Consulta $sql".mysqli_error($link));

echo "<script type='text/javascript'>
  alert('Departamento ingresada con exito al sistema ');
  window.location='../Departamento/index_Depa.php';
</script>";

 ?>
