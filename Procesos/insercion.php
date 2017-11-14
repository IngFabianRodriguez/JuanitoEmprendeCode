<?php
session_start();
include '../inc/conexion.php';
$link=conectar();

$id=$_REQUEST['id'];
$nombre=$_REQUEST['nombre'];
$tb=$_REQUEST['Tb'];
$tm=$_REQUEST['Tm'];

$sql='INSERT INTO `procesos`(`idProcesos`, `NombreProceso`,`Tiempo`,`Tiempo_maximo`) VALUES ('.$id.',"'.$nombre.'",'.$tb.','.$tm.')';
$result=mysqli_query($link,$sql) or die ("ERROR AL REALIZAR LA CONSULTA $sql".mysqli_error($result));

echo "<script type='text/javascript'>
  alert('Proceso creado con exito ');
    window.location='../Procesos/index.php';
</script>";
 ?>
