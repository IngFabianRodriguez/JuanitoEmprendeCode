<?php
session_start();
require '../inc/fpdf/fpdf.php';
include '../inc/conexion.php';
include '../inc/operaciones.php';
$link=conectar();

$pdf= new FPDF();
$pdf->Addpage();
$pdf->SetFont('Arial','',9);
$pdf->Ln(11);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(100,15,'Planilla de entrega', 1,0,'C');
$pdf->SetFont('Arial','',9);
$pdf->Cell(90,15,'Fecha y hora de generacion y entrega: '.date('Y-m-d').' '.date("H:i:s").'',1,0,'C');
$pdf->Ln(22);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,8,'Codigo de Sticker',1,0,'C');
$pdf->Cell(40,8,'Fecha de Entrega',1,0,'C');
$pdf->Cell(70,8,'Nombre Funcionario',1,0,'C');
$pdf->Cell(40,8,'Firma Entrega',1,0,'C');
$pdf->Ln(10);

//Consulta
imprimirhora();
$fechaActual=date('Y-m-d');

if ($_SESSION['hora']<='11:59:59') {
  $sql='SELECT * FROM sticker,documento,usuario WHERE Hora_ingreso BETWEEN "00:00:00" AND "11:59:00" AND usuario.idusuario=documento.usuarioEncargado AND sticker.Tipo="Entrada" AND documento.idDocumento =sticker.Documento_idDocumento AND Fecha_ingreso = "'.date('Y-m-d').'"';

  $result=mysqli_query($link,$sql) or die ("ERROR en la Consulta $sql".mysqli_error($link));
  if($result->num_rows>0){
     while($r=$result->fetch_array()){
  $pdf->SetFont('Arial','',9);
  $pdf->Cell(40,8,$r['Codigo_Sticker'],1,0,'C');
  $pdf->Cell(40,8,$r['Fecha_ingreso'],1,0,'C');
  $pdf->Cell(70,8,$r['Nombres'].$r['Apellidos'],1,0,'C');
  $pdf->Cell(40,8,' ',1,0,'C');

  $pdf->Ln(12);
     }
}
}elseif ($_SESSION['hora']>='12:00:00' && $_SESSION['hora']<='14:59:00') {
  $sql='SELECT * FROM sticker,documento,usuario WHERE Hora_ingreso BETWEEN "11:59:01" AND "14:59:00" AND usuario.idusuario=documento.usuarioEncargado AND sticker.Tipo="Entrada" AND documento.idDocumento =sticker.Documento_idDocumento AND Fecha_ingreso = "'.date('Y-m-d').'"';

  $result=mysqli_query($link,$sql) or die ("ERROR en la Consulta $sql".mysqli_error($link));
  if($result->num_rows>0){
     while($r=$result->fetch_array()){
  $pdf->SetFont('Arial','',9);
  $pdf->Cell(40,8,$r['Codigo_Sticker'],1,0,'C');
  $pdf->Cell(40,8,$r['Fecha_ingreso'],1,0,'C');
  $pdf->Cell(70,8,$r['Nombres'].$r['Apellidos'],1,0,'C');
  $pdf->Cell(40,8,' ',1,0,'C');

  $pdf->Ln(12);
     }
}
}elseif ($_SESSION['hora']>='15:00:00' && $_SESSION['hora']<='17:30:00') {
  $sql='SELECT * FROM sticker,documento,usuario WHERE Hora_ingreso BETWEEN "14:59:01" AND "20:59:00" AND usuario.idusuario=documento.usuarioEncargado AND sticker.Tipo="Entrada" AND documento.idDocumento =sticker.Documento_idDocumento AND Fecha_ingreso = "'.date('Y-m-d').'"';

  $result=mysqli_query($link,$sql) or die ("ERROR en la Consulta $sql".mysqli_error($link));
  if($result->num_rows>0){
     while($r=$result->fetch_array()){
  $pdf->SetFont('Arial','',9);
  $pdf->Cell(40,8,$r['Codigo_Sticker'],1,0,'C');
  $pdf->Cell(40,8,$r['Fecha_ingreso'],1,0,'C');
  $pdf->Cell(70,8,$r['Nombres'].$r['Apellidos'],1,0,'C');
  $pdf->Cell(40,8,' ',1,0,'C');

  $pdf->Ln(12);
     }
}
}

//$pdf->Cell();
$pdf->Output();
  ?>
