<?php
require('fpdf184/fpdf.php');

$rutalogo="../assets/images/INOUT-principal.png";
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Image($rutalogo,  1, 1, 60, 20);
$pdf->Cell(40,10,'Lista de Productos',0,1,'C');
$pdf->Cell(50,10,'Hecho por InOutDigital.',0,1,'C');
$pdf->Output();
?>