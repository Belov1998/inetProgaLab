<?php
class generationPDF{
function gen($n,$a,$t){
require_once( "fpdf/fpdf.php" );

// Начало конфигурации

$textColour = array( 0, 0, 0 );
$tableBorderColour = array( 50, 50, 50 );




// Конец конфигурации
/**
  Создаем титульную страницу
**/


$pdf = new FPDF( 'P', 'mm', 'A4' );
$pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
$pdf->AddPage();

$pdf->AddFont('Tahoma', '','tahoma.php');
$pdf->SetFont( 'Tahoma', '', 24 );
// Заголовок
$pdf->SetDrawColor( $tableBorderColour[0], $tableBorderColour[1], $tableBorderColour[2] );

$reportName = "Talon ";
$name="Name: ".$n;
$avto="Avto: $a";
$nomer="Nomer.: $t";
$pdf->SetTextColor( 0, 0, 0  );
$pdf->SetFillColor( 143, 173, 204);
$pdf->Cell( 165, 12, $reportName, 1, 0, 'C', true );

$pdf->Ln( 15 );
$pdf->Write( 19, $name );
$pdf->Ln( 16 );
$pdf->Write( 19, $avto );
$pdf->Ln( 16 );
$pdf->Write( 19, $nomer );
$pdf->Ln( 16 );
$pdf->SetDrawColor( $tableBorderColour[0], $tableBorderColour[1], $tableBorderColour[2] );

$pdf->SetTextColor( 0, 0, 0  );
$pdf->SetFillColor( 255, 255, 255);
$pdf->SetFont( 'Tahoma', '', 14 );
$pdf->Cell( 40, 10, 'Data', 1, 0, 'L', true );
$pdf->Cell( 114, 10, 'Vid rabot', 1, 0, 'L', true );
$pdf->Cell( 40, 10, 'Cena', 1, 0, 'L', true );
$x=0;
while ($x++<10) {
$pdf->Ln(  );
$pdf->Cell( 40, 10, '', 1, 0, 'L', true );
$pdf->Cell( 114, 10, '', 1, 0, 'L', true );
$pdf->Cell( 40, 10, '', 1, 0, 'L', true );
}
/***
  Выводим PDF
***/
$pdf->Output( "F",  $n.'_'.$a.".pdf",false);

}

}