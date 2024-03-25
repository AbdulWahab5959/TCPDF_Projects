<?php
// Include TCPDF library
require_once('TCPDF/tcpdf.php'); // If you installed via Composer

// Create new TCPDF object
$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);

// Add a new page
$pdf->AddPage();
// Set document margins
$pdf->SetMargins(10, 10, 10); // Left, Right, Top
$pdf->SetFont('times', 'B', 20);
// Set the X and Y coordinates
$pdf->MultiCell(0, 0, 'COMMERCIAL INVOICE', 0, 'C', false);
// Set font
$pdf->SetFont('helvetica', '', 12); // Set font
// Define cell dimensions
$cellWidth = ($pdf->getPageWidth() - $pdf->getMargins()['left'] - $pdf->getMargins()['right']) / 2;

$cellHeight = 9;

// Draw data cells - Row 1
$pdf->MultiCell($cellWidth, $cellHeight*3, '', 1, 'C', false, 0, '', '', true, 0, false, true, $cellHeight, 'T');
$pdf->SetXY($pdf->GetX(), $pdf->GetY());
$pdf->MultiCell($cellWidth, $cellHeight, '', 1, 'C', false, 1, '', '', true, 0, false, true, $cellHeight, 'T');
$pdf->SetXY($pdf->GetX()+$cellWidth, $pdf->GetY());
$pdf->MultiCell($cellWidth, $cellHeight, '', 1, 'C', false, 1, '', '', true, 0, false, true, $cellHeight, 'T');
$pdf->SetXY($pdf->GetX()+$cellWidth, $pdf->GetY());
$pdf->MultiCell($cellWidth, $cellHeight, '', 1, 'C', false, 1, '', '', true, 0, false, true, $cellHeight, 'T');// Draw data cells - Row 2
$pdf->SetXY($pdf->getMargins()['left'], $pdf->GetY()); // Move to the next line with a gap of 2mm
$pdf->MultiCell($cellWidth, $cellHeight*3, '', 1, 'C', false, 0, '', '', true, 0, false, true, $cellHeight, 'T');
$pdf->SetXY($pdf->GetX() , $pdf->GetY());
$pdf->MultiCell($cellWidth, $cellHeight*3, '', 1, 'C', false, 1, '', '', true, 0, false, true, $cellHeight, 'T');
$pdf->SetXY($pdf->getMargins()['left'], $pdf->GetY()); // Move to the next line with a gap of 2mm
$pdf->MultiCell($cellWidth/2, $cellHeight, '', 1, 'C', false, 0, '', '', true, 0, false, true, $cellHeight, 'T');
$pdf->SetXY($pdf->GetX() , $pdf->GetY());
$pdf->MultiCell($cellWidth/2, $cellHeight, '', 1, 'C', false, 0, '', '', true, 0, false, true, $cellHeight, 'T');
$pdf->SetXY($pdf->GetX() , $pdf->GetY());
$pdf->MultiCell($cellWidth/2, $cellHeight, '', 1, 'C', false, 0, '', '', true, 0, false, true, $cellHeight, 'T');
$pdf->SetXY($pdf->GetX() , $pdf->GetY());
$pdf->MultiCell($cellWidth/2, $cellHeight, '', 1, 'C', false, 0, '', '', true, 0, false, true, $cellHeight, 'T');
$pdf->SetXY($pdf->getMargins()['left'], $pdf->GetY()+$cellHeight); // Move to the next line with a gap of 2mm
$pdf->MultiCell($cellWidth/2, $cellHeight, '', 1, 'C', false, 0, '', '', true, 0, false, true, $cellHeight, 'T');
$pdf->SetXY($pdf->GetX() , $pdf->GetY());
$pdf->MultiCell($cellWidth/2, $cellHeight, '', 1, 'C', false, 0, '', '', true, 0, false, true, $cellHeight, 'T');
$pdf->SetXY($pdf->getMargins()['left'], $pdf->GetY()+$cellHeight); // Move to the next line with a gap of 2mm
$pdf->MultiCell($cellWidth/2, $cellHeight, '', 1, 'C', false, 0, '', '', true, 0, false, true, $cellHeight, 'T');
$pdf->SetXY($pdf->GetX() , $pdf->GetY());
$pdf->MultiCell($cellWidth/2, $cellHeight, '', 1, 'C', false, 0, '', '', true, 0, false, true, $cellHeight, 'T');
$pdf->SetXY($pdf->GetX() , $pdf->GetY()-$cellHeight);
$pdf->MultiCell($cellWidth, $cellHeight*2, '', 1, 'C', false, 0, '', '', true, 0, false, true, $cellHeight, 'T');
$pdf->SetXY($pdf->getMargins()['left'] , $pdf->GetY()+$cellHeight*2);
$pdf->MultiCell($cellWidth/2, $cellHeight, '', 1, 'C', false, 0, '', '', true, 0, false, true, $cellHeight, 'T');
$pdf->SetXY($pdf->GetX() , $pdf->GetY());
$pdf->MultiCell($cellWidth/2, $cellHeight, '', 1, 'C', false, 0, '', '', true, 0, false, true, $cellHeight, 'T');
$pdf->SetXY($pdf->GetX() , $pdf->GetY());
$pdf->MultiCell($cellWidth/2, $cellHeight, '', 1, 'C', false, 0, '', '', true, 0, false, true, $cellHeight, 'T');
$pdf->SetXY($pdf->GetX() , $pdf->GetY());
$pdf->MultiCell($cellWidth/2, $cellHeight, '', 1, 'C', false, 0, '', '', true, 0, false, true, $cellHeight, 'T');
$pdf->SetXY($pdf->getMargins()['left'] , $pdf->GetY()+$cellHeight);
$pdf->MultiCell($cellWidth/4, $cellHeight, '', 1, 'C', false, 0, '', '', true, 0, false, true, $cellHeight, 'T');
$pdf->SetXY($pdf->GetX() , $pdf->GetY());
$pdf->MultiCell($cellWidth/2, $cellHeight, '', 1, 'C', false, 0, '', '', true, 0, false, true, $cellHeight, 'T');
$pdf->SetXY($pdf->GetX() , $pdf->GetY());
$pdf->MultiCell($cellWidth/4, $cellHeight, '', 1, 'C', false, 0, '', '', true, 0, false, true, $cellHeight, 'T');
$pdf->SetXY($pdf->GetX() , $pdf->GetY());
$pdf->MultiCell($cellWidth/4, $cellHeight, '', 1, 'C', false, 0, '', '', true, 0, false, true, $cellHeight, 'T');
$pdf->SetXY($pdf->GetX() , $pdf->GetY());
$pdf->MultiCell($cellWidth/4, $cellHeight, '', 1, 'C', false, 0, '', '', true, 0, false, true, $cellHeight, 'T');
$pdf->SetXY($pdf->GetX() , $pdf->GetY());
$pdf->MultiCell($cellWidth/4, $cellHeight, '', 1, 'C', false, 0, '', '', true, 0, false, true, $cellHeight, 'T');
$pdf->SetXY($pdf->GetX() , $pdf->GetY());
$pdf->MultiCell($cellWidth/4, $cellHeight, '', 1, 'C', false, 0, '', '', true, 0, false, true, $cellHeight, 'T');
$pdf->SetXY($pdf->getMargins()['left'] , $pdf->GetY());
$pdf->MultiCell($cellWidth*2, $cellHeight*9, '', 1, 'C', false, 0, '', '', true, 0, false, true, $cellHeight, 'T');
$pdf->SetXY($pdf->getMargins()['left'] , $pdf->GetY()+$cellHeight*9);
$pdf->MultiCell($cellWidth*2, $cellHeight-2, '', 1, 'C', false, 0, '', '', true, 0, false, true, $cellHeight, 'T');
$pdf->SetXY($pdf->getMargins()['left'] , $pdf->GetY()+$cellHeight-2);
$pdf->MultiCell($cellWidth*2, $cellHeight-2, '', 1, 'C', false, 0, '', '', true, 0, false, true, $cellHeight, 'T');
$pdf->SetXY($pdf->getMargins()['left'] , $pdf->GetY()+$cellHeight-2);
$pdf->MultiCell($cellWidth, $cellHeight*6, '', 1, 'C', false, 0, '', '', true, 0, false, true, $cellHeight, 'T');
$pdf->SetXY($pdf->GetX() , $pdf->GetY());
$pdf->MultiCell($cellWidth/1.5, $cellHeight-3, '', 1, 'C', false, 0, '', '', true, 0, false, true, $cellHeight, 'T');
$pdf->MultiCell($cellWidth/3, $cellHeight-3, '', 1, 'C', false, 0, '', '', true, 0, false, true, $cellHeight, 'T');
$pdf->SetXY($pdf->GetX()-$cellWidth , $pdf->GetY()+$cellHeight-3);
$pdf->MultiCell($cellWidth/1.5, $cellHeight, '', 1, 'C', false, 0, '', '', true, 0, false, true, $cellHeight, 'T');
$pdf->MultiCell($cellWidth/3, $cellHeight, '', 1, 'C', false, 0, '', '', true, 0, false, true, $cellHeight, 'T');
$pdf->SetXY($pdf->GetX()-$cellWidth , $pdf->GetY()+$cellHeight);
$pdf->MultiCell($cellWidth, $cellHeight, '', 1, 'C', false, 0, '', '', true, 0, false, true, $cellHeight, 'T');
$pdf->SetXY($pdf->GetX()-$cellWidth , $pdf->GetY()+$cellHeight);
$pdf->MultiCell($cellWidth, $cellHeight, '', 1, 'C', false, 0, '', '', true, 0, false, true, $cellHeight, 'T');
$pdf->SetXY($pdf->GetX()-$cellWidth , $pdf->GetY()+$cellHeight);
$pdf->MultiCell($cellWidth, $cellHeight*2+3, '', 1, 'C', false, 0, '', '', true, 0, false, true, $cellHeight, 'T');
$pdf->SetFillColor(0, 0, 0);

// Draw the rectangle with a black background
$pdf->Rect(10, 189.5, 3, 7, 'F');
$pdf->Rect(197, 189.5, 3, 7, 'F');
$pdf->Output('example.pdf', 'I');
?>

