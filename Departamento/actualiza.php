<?php
session_start();
include '../inc/conexion.php';
$link=conectar();
$nombre=$_REQUEST['nombre'];
$sql='UPDATE `departamento` SET `Nombre`="'.$nombre.'" WHERE idDepartamento = "'.$_SESSION['idDepartamento'].'"';
$result=mysqli_query($link,$sql) or die ("ERROR AL REALIZAR LA CONSULTA $sql".mysqli_error($result));

echo "<script type='text/javascript'>
  alert('Area actualizada con exito ');
    window.location='../Departamento/consulta.php';
</script>";

 ?>
