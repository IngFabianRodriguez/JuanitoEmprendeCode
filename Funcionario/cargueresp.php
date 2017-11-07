<?php
include '../inc/conexion.php';
include '../inc/operaciones.php';
session_start();
imprimirhora();

$respuesta=$_POST['respuesta'];
$IdUsuario=$_SESSION['idusuario'];
$fecharespuesta=$_SESSION['fecha'];
$departamento=$_SESSION['departamento'];
$sticker=$_SESSION['Codigo_Sticker'];


$link=conectar();
$sql="SELECT * FROM sticker WHERE Codigo_Sticker='$sticker'";
$result=mysqli_query($link,$sql) or die ("ERROR en la Consulta $sql".mysqli_error($link));

if($result->num_rows>0){
  while ($r=$result->fetch_array()){
  $idDocumento=$r['Documento_idDocumento'];

}
}

$link=conectar();
$sql="INSERT INTO `respuesta`(`Respuesta`, `Fecha_de_solucion`, `usuario_idusuario`, `Departamento_idDepartamento`, `Sticker_idSticker`, `Documento_idDocumento`, `sysdate`) VALUES ($respuesta,$fecharespuesta,$IdUsuario,$departamento,$sticker,$idDocumento,)";
$result=mysqli_query($link,$sql) or die ("ERROR en la Consulta $sql".mysqli_error($link));


 ?>
