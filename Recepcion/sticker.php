<?php
session_start();
require '../inc/fpdf/fpdf.php';
include '../inc/conexion.php';
$link=conectar();

$pdf= new FPDF();
$pdf->Addpage();
$pdf->SetFont('Arial','B',10);
$pdf->Ln(11);
$pdf->Cell(90,30,'  Juanito Emprende  Codigo: "'.$_SESSION['Numero_Sticker'].'"', 1);
$pdf->Cell(10,10,"", 0);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(90,30,'  Juanito Emprende  Codigo: "'.$_SESSION['Numero_Sticker'].'"', 1);
$pdf->SetFont('Arial','',10);
$pdf->Ln(15);
//Consulta

//$pdf->Cell();
$pdf->Output();
  ?>
