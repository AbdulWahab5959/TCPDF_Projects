<?php
// Include TCPDF library
require_once('TCPDF/tcpdf.php'); // If you installed via Composer

// Create new TCPDF object
$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);

// Add a new page
$pdf->AddPage();

// Set font
$pdf->SetFont('times', 'B', 12);

// Add content to the PDF
$pdf->Cell(0, 10, 'Hello, World!', 0, 1,'C');
// Add more content
$pdf->Ln(0); // Add a line break
$pdf->MultiCell(150, 20, "This is a TCPDF example \ndemonstrating how to generate a PDF document in PHP.", 0, 'J');


// Output the PDF
$pdf->Output('example.pdf', 'I');
?>
