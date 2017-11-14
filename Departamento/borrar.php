<?php
session_start();
include '../inc/conexion.php';
$link=conectar();
$id=$_GET['idDepartamento'];
$sql='DELETE FROM `departamento` WHERE idDepartamento = "'.$id.'"';
$result=mysqli_query($link,$sql) or die ("ERROR AL REALIZAR LA CONSULTA $sql".mysqli_error($result));

echo "<script type='text/javascript'>
  alert('Area borrada con exito ');
    window.location='../Departamento/consulta.php';
</script>";

?>
