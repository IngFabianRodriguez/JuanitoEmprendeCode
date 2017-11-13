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
$pdf->Cell(40,15,'Juanito Emprende',1,0,'C');
 $pdf->SetFont('Arial','B',12);
$pdf->Cell(100,15,'Planilla de entrega', 1,0,'C');
$pdf->SetFont('Arial','',9);
$pdf->Cell(50,15,'  Fecha generacion: '.date('Y-m-d').'',1);
$pdf->Ln(18);
//Consulta
imprimirhora();
$fechaActual=date('Y-m-d');

if ($_SESSION['hora']<='11:59:59') {
  $sql='SELECT * FROM `documento` WHERE Hora_ingreso BETWEEN "08:00:00" AND "11:59:00" AND Fecha_ingreso = "'.date('Y-m-d').'"';
  $result=mysqli_query($link,$sql) or die ("ERROR en la Consulta $sql".mysqli_error($link));
  if($result->num_rows>0){
     while($r=$result->fetch_array()){
  $pdf->Cell(100,8,'',0,'C');
  $pdf->Cell(40,8,'Fecha de Entrega',1,0,'C');
  $pdf->Cell(50,8,$r['Fecha_ingreso'],1,0,'C');
  $pdf->Ln(12);/*
  $pdf->Cell(45,8,'Razon Social:',1,0,'C');
  $pdf->Cell(50,8,$r['RazonSocial'],1,0,'C');
  $pdf->Cell(45,8,'NIT:',1,0,'C');
  $pdf->Cell(50,8,$r['NIT'],1,0,'C');
  $pdf->Ln(8);
  $pdf->Cell(45,8,'Telefono:',1,0,'C');
  $pdf->Cell(50,8,$r['Telefono'],1,0,'C');
  $pdf->Cell(45,8,'Correo:',1,0,'C');
  $pdf->Cell(50,8,$r['Correo'],1,0,'C');
  $pdf->Ln(8);
  */
     }
}
}elseif ($_SESSION['hora']>='12:00:00' && $_SESSION['hora']<='14:59:00') {
  $sql='SELECT * FROM `documento` WHERE Hora_ingreso BETWEEN "11:59:01" AND "14:59:01" AND Fecha_ingreso = "'.date('Y-m-d').'"';
  $result=mysqli_query($link,$sql) or die ("ERROR en la Consulta $sql".mysqli_error($link));
  if($result->num_rows>0){
     while($r=$result->fetch_array()){
  $pdf->Cell(100,8,'',0,'C');
  $pdf->Cell(40,8,'Fecha de Entrega',1,0,'C');
  $pdf->Cell(50,8,$r['Fecha_ingreso'],1,0,'C');
  $pdf->Ln(12);/*
  $pdf->Cell(45,8,'Razon Social:',1,0,'C');
  $pdf->Cell(50,8,$r['RazonSocial'],1,0,'C');
  $pdf->Cell(45,8,'NIT:',1,0,'C');
  $pdf->Cell(50,8,$r['NIT'],1,0,'C');
  $pdf->Ln(8);
  $pdf->Cell(45,8,'Telefono:',1,0,'C');
  $pdf->Cell(50,8,$r['Telefono'],1,0,'C');
  $pdf->Cell(45,8,'Correo:',1,0,'C');
  $pdf->Cell(50,8,$r['Correo'],1,0,'C');
  $pdf->Ln(8);
  */
     }
}
}
//$pdf->Cell();
$pdf->Output();
  ?>
