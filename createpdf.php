<?php
// memanggil library FPDF
require('library/pdf/fpdf.php');
 
// intance object dan memberikan pengaturan halaman PDF
$pdf=new FPDF('P','mm','A4');
$pdf->AddPage();
 
$pdf->SetFont('Arial','B',16);
$pdf->Cell(71 ,10,'',0,0);
$pdf->Cell(40 ,5,'Invoice',0,0,'C');
$pdf->Cell(59 ,10,'',0,1);

$pdf->SetFont('Arial','B',13);
$pdf->Cell(71 ,5,'Customer',0,0);
$pdf->Cell(59 ,5,'',0,0);
$pdf->Cell(59 ,5,'Details',0,1);

$pdf->SetFont('Arial','',10);

$pdf->Cell(130 ,5,'Near DAV',0,0);
$pdf->Cell(25 ,5,'Customer ID:',0,0);
$pdf->Cell(34 ,5,'0012',0,1);

$pdf->Cell(130 ,5,'Delhi, 751001',0,0);
$pdf->Cell(25 ,5,'Invoice Date:',0,0);
$pdf->Cell(34 ,5,'12th Jan 2019',0,1);
 
$pdf->Cell(130 ,5,'',0,0);
$pdf->Cell(25 ,5,'Invoice No:',0,0);
$pdf->Cell(34 ,5,'ORD001',0,1);


$pdf->SetFont('Arial','B',15);
$pdf->Cell(130 ,5,'Bill To',0,0);
$pdf->Cell(59 ,5,'',0,0);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(189 ,10,'',0,1);



$pdf->Cell(50 ,10,'',0,1);

$pdf->SetFont('Arial','B',10);
/*Heading Of the table*/
$pdf->Cell(10 ,6,'Sl',1,0,'C');
$pdf->Cell(80 ,6,'Description',1,0,'C');
$pdf->Cell(23 ,6,'Qty',1,0,'C');
$pdf->Cell(30 ,6,'Unit Price',1,0,'C');
$pdf->Cell(20 ,6,'Sales Tax',1,0,'C');
$pdf->Cell(25 ,6,'Total',1,1,'C');/*end of line*/
/*Heading Of the table end*/
$pdf->SetFont('Arial','',10);
    for ($i = 0; $i <= 10; $i++) {
		$pdf->Cell(10 ,6,$i,1,0);
		$pdf->Cell(80 ,6,'HP Laptop',1,0);
		$pdf->Cell(23 ,6,'1',1,0,'R');
		$pdf->Cell(30 ,6,'15000.00',1,0,'R');
		$pdf->Cell(20 ,6,'100.00',1,0,'R');
		$pdf->Cell(25 ,6,'15100.00',1,1,'R');
	}
		

$pdf->Cell(118 ,6,'',0,0);
$pdf->Cell(25 ,6,'Subtotal',0,0);
$pdf->Cell(45 ,6,'151000.00',1,1,'R');


$pdf->Output();
?>