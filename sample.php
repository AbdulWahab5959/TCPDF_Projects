<?php
// Include TCPDF library
require_once('TCPDF/tcpdf.php'); // If you installed via Composer

// Create new TCPDF object
$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);

// Add a new page
$pdf->AddPage();
$pdf->SetLeftMargin(25);
$pdf->SetRightMargin(25);

// Set font for first line (bold, size 20)
$pdf->SetFont('times', 'B', 20);
$pdf->Cell(0, 10, 'SAMPLE PRESS RELEASE', 0, 1, 'C');
$pdf->SetFont('times', 'B', 12);
$pdf->Cell(0, 5, "Children Invited to Vacation Bible School", 0, 1, 'C');
$pdf->SetFont('times', 'B', 12);
$pdf->Cell(0, 5, " at First Baptist Church of Our Town", 0, 1, 'C');

// Set font for the rest of the text (size 12)
$pdf->SetFont('times', '', 12);




// Add content to the PDF
$pdf->Cell(0, 10, 'FOR RELEASE:', 0, 'L');
$pdf->SetX(35); // Set the left margin to 20 millimeters
$pdf->Cell(50, 10, 'May 19, 2008 though May 30, 2008', 0, 1, 'L');
$pdf->Cell(0, 10, 'FROM:', 0, 'L');
$pdf->SetX(35); // Set the left margin to 20 millimeters
$pdf->Cell(50, 10, 'First Baptist Church of Our Town, Street Address, Our Town, State, Zip', 0, 1, 'L');
$pdf->Cell(0, 10, 'PHONE:', 0, 'L');
$pdf->SetX(35); // Set the left margin to 20 millimeters
$pdf->Cell(50, 10, '(000) 000-0000 Church Phone', 0, 1, 'L');
$pdf->Cell(0, 10, 'WEBSITE:', 0, 'L');
$pdf->SetX(35); // Set the left margin to 20 millimeters
$pdf->Cell(50, 10, 'www.yourchurchwebsite.com', 0, 1, 'L');
$pdf->Cell(0, 10, 'CONTACT PERSON:', 0, 'L');
$pdf->SetX(35); // Set the left margin to 20 millimeters
$pdf->Cell(50, 10, 'Rev. Joe Friendly, Associate Pastor', 0, 1, 'L');
$pdf->Cell(0, 10, 'SUBJECT: ', 0, 'L');
$pdf->SetX(35); // Set the left margin to 20 millimeters
$pdf->Cell(50, 10, 'Vacation Bible School, June 2, 2008 June 6.', 0, 1, 'L');
$pdf->Cell(0, 10, 'TEXT: ', 0, 'L');
$pdf->SetX(35); // Set the left margin to 20 millimeters
$pdf->Cell(50, 5, 'First Baptist Church of Our Town invites all children who have completed', 0, 1, 'L');
$pdf->SetX(35); // Set the left margin to 20 millimeters
$pdf->Cell(50, 5, 'the first grade through those who have completed the fifth grade to join', 0, 1, 'L');
$pdf->SetX(35); // Set the left margin to 20 millimeters
$pdf->Cell(50, 5, 'us for Vacation Bible School beginning Monday, June 2, 2008 through Friday,', 0, 1, 'L');
$pdf->SetX(35); // Set the left margin to 20 millimeters
$pdf->Cell(50, 5, 'June 6, 2008. We will meet begin daily at 9:00 a.m. and dismiss at 12:00', 0, 1, 'L');
$pdf->SetX(35); // Set the left margin to 20 millimeters

$pdf->Cell(50, 5, 'noon. ', 0, 1, 'L');
$pdf->Ln(5); // Add a line break

$pdf->SetX(35); // Set the left margin to 20 millimeters
$pdf->Cell(50, 5, 'For more information or to register, visit our website at', 0, 1, 'L');
$pdf->SetX(35); // Set the left margin to 20 millimeters
$pdf->Cell(50, 5, 'www.yourchurchwebsite.com, call the church office at 000-0000, or e-mail ', 0, 1, 'L');
$pdf->SetX(35); // Set the left margin to 20 millimeters
$pdf->Cell(50, 5, 'pastorjoe@yourchurchwebsite.com. ', 0, 1, 'L');
$pdf->SetX(35); // Set the left margin to 20 millimeters
$pdf->Cell(50, 10, 'Thank you! ', 0, 1, 'L');

// Output the PDF
$pdf->Output('press_release.pdf', 'I');
?>
