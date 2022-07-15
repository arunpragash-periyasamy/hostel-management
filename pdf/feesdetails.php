<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF generate</title>
</head>
<body>
    <?php
    include '../php/conn.php';
    $sql= "SELECT * from feesdetails";
    $result=$conn->query($sql);
    ob_start();
    require "/../php-connectivity/pdf/fpdf/fpdf.php";
    $pdf=new FPDF('P','mm','A4'); //pt mm cm in //A4 A3 A% Letter Legal
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',14);


    $pdf->cell(200,30,'VIEW STUDENT DETAILS',0,1,'C');
    $pdf->cell(20,10,'Branch',1,0,'C');
    $pdf->cell(20,10,'Course',1,0,'C');
    $pdf->cell(20,10,'Year',1,0,'C');
    $pdf->cell(20,10,'Hostel',1,0,'C');
    $pdf->cell(35,10,'BookingFrom',1,0,'C');
    $pdf->cell(35,10,'Vacate',1,0,'C');
    $pdf->cell(20,10,'Fees',1,1,'C');
    $pdf->SetFont('Arial','',12);
				while($row=$result->fetch_assoc())
				{
        $pdf->cell(20,10,$row['Branch'],1,0,'C');
        $pdf->cell(20,10,$row['Course'],1,0,'C');
        $pdf->cell(20,10,$row['Year'],1,0,'C');
        $pdf->cell(20,10,$row['Hostel'],1,0,'C');
        $pdf->cell(35,10,$row['BookingFrom'],1,0,'C');
        $pdf->cell(35,10,$row['Vacate'],1,0,'C');
        $pdf->cell(20,10,$row['Fees'],1,1,'C');
			
				}

    $pdf->Output();
    ob_end_flush();

    ?>
</body>
</html>
