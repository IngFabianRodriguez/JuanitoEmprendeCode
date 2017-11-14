<?php
session_start();
include '../inc/conexion.php';
$link=conectar();
$id=$_GET['idProcesos'];
$sql='DELETE FROM `procesos` WHERE idProcesos = "'.$id.'"';
$result=mysqli_query($link,$sql) or die ("ERROR AL REALIZAR LA CONSULTA $sql".mysqli_error($result));

echo "<script type='text/javascript'>
  alert('Proceso borrado con exito ');
    window.location='../Procesos/consulta.php';
</script>";

?>
