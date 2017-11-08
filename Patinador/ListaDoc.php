<?php
session_start();
require '../inc/fpdf/fpdf.php';
include '../inc/conexion.php';
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


/*$sql='SELECT * FROM proveedor WHERE NIT= "'.$_SESSION['NIT'].'"';
$result=mysqli_query($link,$sql) or die ("ERROR en la Consulta $sql".mysqli_error($link));
if($result->num_rows>0){
   while($r=$result->fetch_array()){
$pdf->Cell(100,8,'',0,'C');
$pdf->Cell(40,8,'Fecha de creacion',1,0,'C');
$pdf->Cell(50,8,$r['FechaCreacion'],1,0,'C');
$pdf->Ln(12);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(190,8," 1. Datos basicos del Proveedor",1,0,'C');
$pdf->Ln(12);
$pdf->SetFont('Arial','',10);


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
   }

 }*/
//$pdf->Cell();
$pdf->Output();
  ?>
