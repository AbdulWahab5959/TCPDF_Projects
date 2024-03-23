<?php
// Include TCPDF library
require_once('TCPDF/tcpdf.php'); // If you installed via Composer

// Create new TCPDF object
$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);

// Add a new page
$pdf->AddPage();
$pdf->SetLeftMargin(20);
// Set font
$pdf->SetFont('times', 'B', 20);

// Add content to the PDF
$pdf->Cell(0, 10, 'LETTER OF RETIREMENT', 0, 1,'C');
// Add more content
$pdf->Ln(10); // Add a line break
$pdf->SetFont('times', '', 14);
 // Set the left margin to 20 millimeters

$txt = <<<EOD
From: _____________________
Address: _____________________
Address (2): _____________________
Phone: _____________________
E-Mail: _____________________

Date: ________________

To: _____________________
Address: _____________________
Address (2): _____________________
Phone: _____________________
E-Mail: _____________________

Dear _____________, 

This letter represents my official notice of retirement from my position of __________
with _____________ be made final on the ___ day of _______________, 20___.
It has been with great pleasure to be alongside the individuals at _____________ and I
will always appreciate the experience and knowledge I gained during my time here.
I hope the notice-period is enough for you to find a replacement. Furthermore, please let
me know of any help that I could be to train or assist the person that will take over my
position.

Sincerely,

____________________
Signature

____________________
Print Name
EOD;

// print a block of text using Write()
$pdf->Write(0, $txt, '', 0, 'L', true, 0, false, false, 0);
// Output the PDF
$pdf->Output('example.pdf', 'I');
?>
