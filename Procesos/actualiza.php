<?php
session_start();
include '../inc/conexion.php';
$link=conectar();
$nombre=$_REQUEST['nombre'];
$tb=$_REQUEST['Tb'];
$tm=$_REQUEST['Tm'];
$sql='UPDATE `procesos` SET `NombreProceso`="'.$nombre.'",`Tiempo`="'.$tb.'",`Tiempo_maximo`="'.$tm.'"  WHERE idProcesos = "'.$_SESSION['idProcesos'].'"';
$result=mysqli_query($link,$sql) or die ("ERROR AL REALIZAR LA CONSULTA $sql".mysqli_error($result));

echo "<script type='text/javascript'>
  alert('Proceso actualizado con exito ');
    window.location='../Procesos/consulta.php';
</script>";

 ?>
