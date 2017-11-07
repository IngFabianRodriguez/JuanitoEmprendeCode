<?php
include '../inc/conexion.php';
include '../inc/operaciones.php';
session_start();
imprimirhora();

$sticker=$_SESSION['Codigo_Sticker'];

$link=conectar();
$sql="UPDATE `sticker` SET `Estado`='Finalizado' WHERE Codigo_Sticker='$sticker'";
$result=mysqli_query($link,$sql) or die ("ERROR en la Consulta $sql".mysqli_error($link));

$link=conectar();
$sql="SELECT * FROM sticker WHERE Codigo_Sticker='$sticker'";
$result=mysqli_query($link,$sql) or die ("ERROR en la Consulta $sql".mysqli_error($link));

if($result->num_rows>0){
  while ($r=$result->fetch_array()){
  $idDocumento=$r['Documento_idDocumento'];
  $respuesta=$_POST["respuesta"];
  $IdUsuario=$_SESSION['IdUsuario'];
  $fecharespuesta=$_POST['fecha_respuesta'];
  $departamento=$_SESSION['departamento'];

}
}

$Numero_Sticker="SS-$departamento-$fecharespuesta-$idDocumento";
$link=conectar();
$sql="INSERT INTO `sticker`(`Tipo`, `Departamento_idDepartamento`, `Estado`, `Fecha_creacion`, `Documento_idDocumento`, `Codigo_Sticker`) VALUES ('Salida','$departamento','Finalizado','$fecharespuesta','$idDocumento','$Numero_Sticker')";
$result=mysqli_query($link,$sql) or die ("ERROR AL REALIZAR LA CONSULTA $sql".mysqli_error($result));


$_SESSION['Numero_Sticker']=$Numero_Sticker;
$link=conectar();
$sql="SELECT * FROM `sticker` WHERE Codigo_Sticker = '$Numero_Sticker'";
$result=mysqli_query($link,$sql) or die ("ERROR AL REALIZAR LA CONSULTA $sql".mysqli_error($result));
if($result->num_rows>0){
  while ($r=$result->fetch_array()){
    $_SESSION['IdSticker']=$r['idSticker'];
  }
}
$IdSticker=$_SESSION['IdSticker'];
$respuesta=$_POST["respuesta"];
$fecharespuesta=$_POST['fecha_respuesta'];
$link=conectar();
$sql="INSERT INTO `respuesta`(`Respuesta`, `Fecha_de_solucion`, `usuario_idusuario`, `Departamento_idDepartamento`, `Sticker_idSticker`, `Documento_idDocumento`) VALUES ('$respuesta','$fecharespuesta','$IdUsuario','$departamento','$IdSticker','$idDocumento')";
$result=mysqli_query($link,$sql) or die ("ERROR en la Consulta $sql".mysqli_error($link));

echo "<script type='text/javascript'>
   alert('Caso respondido con Exito');
   window.location='../Funcionario/bandeja.php';
 </script>";

 ?>
