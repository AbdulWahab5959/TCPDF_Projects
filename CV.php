<?php
// Include TCPDF library
require_once('TCPDF/tcpdf.php'); // If you installed via Composer

// Create new TCPDF object
$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);

// Add a new page
$pdf->AddPage();

// Set font
$pdf->SetFont('times', 'B', 12);

// Set fill color to RGB(67, 83, 106)

$pdf->SetFillColor(22,147,204); // RGB value for the specified color
// Get the height of the current page
$pageHeight = $pdf->getPageHeight();
$pageWidth = $pdf->getPageWidth();

// Draw a rectangle with the specified color and full page height
$pdf->Rect(0, 9, $pageWidth, 30, 'F'); 

$pdf->SetFillColor(67, 83, 106); // RGB value for the specified color

$pdf->Rect(10, 0, 50, $pageHeight, 'F'); 
$pdf->Image('images_and_PDF_files\profileemail.jpg', 23, 10, 25,25);
$pdf->SetFont('helvetica', 'B', 50); // Set font
$pdf->SetTextColor(255, 255, 255); // Set text color to white
$pdf->Text(70, 10, 'YOUR  NAME'); // Add text at coordinates (20, 20)

$pdf->SetFont('helvetica', '', 11); // Set font
$pdf->SetTextColor(0,0,0); // Set text color to white

// print a block of text using Write()
$pdf->SetXY(70, 50); // Set the X and Y coordinates
$pdf->MultiCell(130, 5, '[Write down a professional summary or a resume objective. Note, that this', 0, 'J', false); // Add text in a justified multi-cell with a width of 100mm and a line height of 5
$pdf->SetXY(70, 55); // Set the X and Y coordinates
$pdf->MultiCell(130, 15, 'part is different for every country.] Lorem ipsum dolor sit amet,', 0, 'J', false); // Add text in a justified multi-cell with a width of 100mm and a line height of 5
$pdf->SetXY(70, 60); // Set the X and Y coordinates
$pdf->MultiCell(130, 5, 'dolore magna aliqua. Bibendum at varius vel pharetra. Quisque egestas', 0, 'J', false); // Add text in a justified multi-cell with a width of 100mm and a line height of 5
$pdf->SetXY(70, 65); // Set the X and Y coordinates
$pdf->MultiCell(130, 5, 'diam in arcu cursus euismod quis viverra.', 0, 'L', false); // Add text in a justified multi-cell with a width of 100mm and a line height of 5
$pdf->SetXY(70, 70); // Set the X and Y coordinates
$pdf->SetFont('helvetica', 'B', 26); // Set font
$pdf->SetTextColor(23,9,8,); // Set text color to white
$pdf->MultiCell(130, 5, '_________________________', 0, 'L', false); // Add text in a justified multi-cell with a width of 100mm and a line height of 5
// Add text at coordinates (20, 20)
$pdf->SetFont('helvetica', 'B', 16); // Set font
$pdf->SetTextColor(255,255,255,); // Set text color to white
$pdf->SetXY(10, 40); // Set the X and Y coordinates
$pdf->MultiCell(0, 5, '__________', 0, 'L', false); // Add text in a justified multi-cell with a width of 100mm and a line height of 5
$pdf->SetFont('helvetica', 'B', 16); // Set font
$pdf->SetXY(22, 55); // Set the X and Y coordinates
$pdf->MultiCell(0, 5, 'CONTACT', 0, 'L', false); // Add text in a justified multi-cell with a width of 100mm and a line height of 5
$pdf->SetFont('helvetica', '', 10); // Set font
$pdf->SetXY(20, 60); // Set the X and Y coordinates
// $pdf->Image('flaticons\phone-call.png', 23, 10, 4,4);
$pdf->MultiCell(0, 5, '000-000-000', 0, 'L', false); // Add text in a justified multi-cell with a width of 100mm and a line height of 5
$pdf->Image('flaticons\telephone.png', 15, 60, 4,4);
$pdf->SetXY(20, 65); // Set the X and Y coordinates
$pdf->MultiCell(0, 5, 'jane.smith@gmail.com', 0, 'L', false); // Add text in a justified multi-cell with a width of 100mm and a line height of 5
$pdf->Image('flaticons\letter.png', 15, 65, 4,4);
$pdf->SetXY(20, 70); // Set the X and Y coordinates
// $pdf->Image('flaticons\phone-call.png', 23, 10, 4,4);
$pdf->MultiCell(0, 5, 'London, GB', 0, 'L', false); // Add text in a justified multi-cell with a width of 100mm and a line height of 5
$pdf->Image('flaticons\home.png', 15, 70, 4,4);
$pdf->SetXY(20, 75); // Set the X and Y coordinates
// $pdf->Image('flaticons\phone-call.png', 23, 10, 4,4);
$pdf->MultiCell(0, 5, 'janesmith.com', 0, 'L', false); // Add text in a justified multi-cell with a width of 100mm and a line height of 5
$pdf->Image('flaticons\globe.png', 15, 75, 4,4);
$pdf->SetFont('helvetica', 'B', 16); // Set font
$pdf->SetTextColor(255,255,255,); // Set text color to white
$pdf->SetXY(10, 85); // Set the X and Y coordinates
$pdf->MultiCell(0, 5, '__________', 0, 'L', false); // Add text in a justified multi-cell with a width of 100mm and a line height of 5
$pdf->SetFont('helvetica', 'B', 16); // Set font
$pdf->SetXY(22, 95); // Set the X and Y coordinates
$pdf->MultiCell(0, 5, 'SKILLS', 0, 'L', false); // Add text in a justified multi-cell with a width of 100mm and a line height of 5
$pdf->SetFont('helvetica', '', 10); // Set font
$pdf->SetXY(15, 102); // Set the X and Y coordinates
// $pdf->Image('flaticons\phone-call.png', 23, 10, 4,4);
$pdf->MultiCell(0, 5, 'MS Word, MS Excel', 0, 'L', false); // Add text in a justified multi-cell with a width of 100mm and a line height of 5
$pdf->Image('flaticons\square.png', 20, 106, 3,3);
$pdf->Image('flaticons\square.png', 24, 106, 3,3);
$pdf->Image('flaticons\square.png', 28, 106, 3,3);
$pdf->Image('flaticons\square.png', 32, 106, 3,3);
$pdf->Image('flaticons\square.png', 36, 106, 3,3);
$pdf->SetFont('helvetica', '', 10); // Set font
$pdf->SetXY(15, 112); // Set the X and Y coordinates
// $pdf->Image('flaticons\phone-call.png', 23, 10, 4,4);
$pdf->MultiCell(0, 5, 'PTC Creo, Catia', 0, 'L', false); // Add text in a justified multi-cell with a width of 100mm and a line height of 5
$pdf->Image('flaticons\square.png', 20, 116, 3,3);
$pdf->Image('flaticons\square.png', 24, 116, 3,3);
$pdf->Image('flaticons\square.png', 28, 116, 3,3);
$pdf->Image('flaticons\square.png', 32, 116, 3,3);
$pdf->Image('flaticons\square_black.png', 36, 116, 3,3);
$pdf->SetFont('helvetica', '', 10); // Set font
$pdf->SetXY(15, 122); // Set the X and Y coordinates
// $pdf->Image('flaticons\phone-call.png', 23, 10, 4,4);
$pdf->MultiCell(0, 5, 'Python, Java, CSS', 0, 'L', false); // Add text in a justified multi-cell with a width of 100mm and a line height of 5
$pdf->Image('flaticons\square.png', 20, 126, 3,3);
$pdf->Image('flaticons\square.png', 24, 126, 3,3);
$pdf->Image('flaticons\square.png', 28, 126, 3,3);
$pdf->Image('flaticons\square_black.png', 32, 126, 3,3);
$pdf->Image('flaticons\square_black.png', 36, 126, 3,3);
$pdf->SetFont('helvetica', 'B', 16); // Set font
$pdf->SetTextColor(255,255,255,); // Set text color to white
$pdf->SetXY(10, 130); // Set the X and Y coordinates
$pdf->MultiCell(0, 5, '__________', 0, 'L', false); // Add text in a justified multi-cell with a width of 100mm and a line height of 5
$pdf->SetFont('helvetica', 'B', 16); // Set font
$pdf->SetXY(15, 140); // Set the X and Y coordinates
$pdf->MultiCell(0, 5, 'LANGUAGES', 0, 'L', false); // Add text in a justified multi-cell with a width of 100mm and a line height of 5
$pdf->SetFont('helvetica', '', 10); // Set font
$pdf->SetXY(15, 150); // Set the X and Y coordinates
// $pdf->Image('flaticons\phone-call.png', 23, 10, 4,4);
$pdf->MultiCell(0, 5, 'ENGLISH', 0, 'L', false); // Add text in a justified multi-cell with a width of 100mm and a line height of 5
$pdf->SetFont('helvetica', '', 10); // Set font
$pdf->SetXY(15, 160); // Set the X and Y coordinates
// $pdf->Image('flaticons\phone-call.png', 23, 10, 4,4);
$pdf->MultiCell(0, 5, 'GERMAN', 0, 'L', false); // Add text in a justified multi-cell with a width of 100mm and a line height of 5
$pdf->SetFont('helvetica', '', 10); // Set font
$pdf->SetXY(15, 170); // Set the X and Y coordinates
// $pdf->Image('flaticons\phone-call.png', 23, 10, 4,4);
$pdf->MultiCell(0, 5, 'SPANISH', 0, 'L', false); // Add text in a justified multi-cell with a width of 100mm and a line height of 5
$pdf->SetFont('helvetica', 'B', 16); // Set font
$pdf->SetTextColor(255,255,255,); // Set text color to white
$pdf->SetXY(10, 180); // Set the X and Y coordinates
$pdf->MultiCell(0, 5, '__________', 0, 'L', false); // Add text in a justified multi-cell with a width of 100mm and a line height of 5
$pdf->SetFont('helvetica', 'B', 16); // Set font
$pdf->SetXY(20, 190); // Set the X and Y coordinates
$pdf->MultiCell(0, 5, 'HOBBIES', 0, 'L', false); // Add text in a justified multi-cell with a width of 100mm and a line height of 5
$pdf->Image('flaticons\ball.png', 16, 200, 7,7);
$pdf->Image('flaticons\photo-camera.png', 30, 200, 7,7);
$pdf->Image('flaticons\electric-guitar.png', 44, 200, 7,7);
// Add text in a justified multi-cell with a width of 100mm and a line height of 5
// Add text in a justified multi-cell with a width of 100mm and a line height of 5
$pdf->SetFont('helvetica', 'B', 16); // Set font
$pdf->SetXY(70, 88); // Set the X and Y coordinates
$pdf->SetTextColor(0,0,0,); // Set text color to white
$pdf->MultiCell(130, 5, 'EDUCATION', 0, 'L', false); // Add text in a justified multi-cell with a width of 100mm and a line height of 5
$pdf->SetFont('helvetica', 'B', 14); // Set font
$pdf->SetXY(70, 95); // Set the X and Y coordinates
$pdf->MultiCell(130, 5, 'M.Sc. Bioengineering 2014-present', 0, 'L', false); // Add text in a justified multi-cell with a width of 100mm and a line height of 5
$pdf->SetXY(70, 100); // Set the X and Y coordinates
$pdf->SetFont('helvetica', '', 12); // Set font
$pdf->MultiCell(130, 5, 'Harvard University, Cambridge, MA ', 0, 'L', false); // Add text in a justified multi-cell with a width of 100mm and a line height of 5
$pdf->SetXY(70, 105); // Set the X and Y coordinates
$pdf->SetFont('helvetica', '', 12); // Set font
$pdf->MultiCell(130, 5, 'Clubs & Societies: Robotics Society, Business Club ', 0, 'L', false); // Add text in a justified multi-cell with a width of 100mm and a line height of 5
$pdf->SetFont('helvetica', 'B', 14); // Set font
$pdf->SetXY(70, 115); // Set the X and Y coordinates
$pdf->MultiCell(130, 5, 'B.A. Applied Economics2010-2014', 0, 'L', false); // Add text in a justified multi-cell with a width of 100mm and a line height of 5
$pdf->SetXY(70, 120); // Set the X and Y coordinates
$pdf->SetFont('helvetica', '', 12); // Set font
$pdf->MultiCell(130, 5, 'Harvard University, Cambridge, MA ', 0, 'L', false); // Add text in a justified multi-cell with a width of 100mm and a line height of 5
$pdf->SetXY(70, 125); // Set the X and Y coordinates
$pdf->SetFont('helvetica', '', 12); // Set font
$pdf->MultiCell(130, 5, 'Clubs & Societies: Robotics Society, Business Club ', 0, 'L', false); // Add text in a justified multi-cell with a width of 100mm and a line height of 5
$pdf->SetXY(70, 130); // Set the X and Y coordinates
$pdf->SetFont('helvetica', 'B', 26); // Set font
$pdf->SetTextColor(23,9,8,); // Set text color to white
$pdf->MultiCell(130, 5, '_________________________', 0, 'L', false); // Add text in a justified multi-cell with a width of 100mm and a line height of 5
$pdf->SetFont('helvetica', 'B', 14); // Set font
$pdf->SetXY(70, 145); // Set the X and Y coordinates
$pdf->MultiCell(130, 5, 'EXPERIENCE', 0, 'L', false); // Add text in a justified multi-cell with a width of 100mm and a line height of 5
$pdf->SetXY(70, 155); // Set the X and Y coordinates
$pdf->SetFont('helvetica', 'B', 12); // Set font
$pdf->MultiCell(130, 5, 'Intern2018-present ', 0, 'L', false); // Add text in a justified multi-cell with a width of 100mm and a line height of 5
$pdf->SetXY(70, 160); // Set the X and Y coordinates
$pdf->SetFont('helvetica', '', 12); // Set font
$pdf->MultiCell(130, 5, 'Tesla Inc., Fremont, CA ', 0, 'L', false); // Add text in a justified multi-cell with a width of 100mm and a line height of 5
$pdf->SetXY(70, 165); // Set the X and Y coordinates
$pdf->SetFont('helvetica', '', 12); // Set font
$pdf->MultiCell(130, 5, 'Describe your responsibilities and achievements', 0, 'L', false); // Add text in a justified multi-cell with a width of 100mm and a line height of 5
$pdf->SetXY(70, 175); // Set the X and Y coordinates
$pdf->SetFont('helvetica', 'B', 12); // Set font
$pdf->MultiCell(130, 5, 'Intern2016-2018 ', 0, 'L', false); // Add text in a justified multi-cell with a width of 100mm and a line height of 5
$pdf->SetXY(70, 180); // Set the X and Y coordinates
$pdf->SetFont('helvetica', '', 12); // Set font
$pdf->MultiCell(130, 5, 'Tesla Inc., Fremont, CA ', 0, 'L', false); // Add text in a justified multi-cell with a width of 100mm and a line height of 5
$pdf->SetXY(70, 185); // Set the X and Y coordinates
$pdf->SetFont('helvetica', '', 12); // Set font
$pdf->MultiCell(130, 5, 'Describe your responsibilities and achievements', 0, 'L', false); // Add text in a justified multi-cell with a width of 100mm and a line height of 5
$pdf->SetXY(70, 195); // Set the X and Y coordinates
$pdf->SetFont('helvetica', 'B', 12); // Set font
$pdf->MultiCell(130, 5, 'Intern2014-16 ', 0, 'L', false); // Add text in a justified multi-cell with a width of 100mm and a line height of 5
$pdf->SetXY(70, 200); // Set the X and Y coordinates
$pdf->SetFont('helvetica', '', 12); // Set font
$pdf->MultiCell(130, 5, 'Tesla Inc., Fremont, CA ', 0, 'L', false); // Add text in a justified multi-cell with a width of 100mm and a line height of 5
$pdf->SetXY(70, 205); // Set the X and Y coordinates
$pdf->SetFont('helvetica', '', 12); // Set font
$pdf->MultiCell(130, 5, 'Describe your responsibilities and achievements', 0, 'L', false); // Add text in a justified multi-cell with a width of 100mm and a line height of 5

// Output the PDF
$pdf->Output('example.pdf', 'I');
?>
