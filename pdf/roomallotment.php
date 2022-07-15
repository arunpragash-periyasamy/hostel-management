<?php 
session_start();
?>
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
    $Hostel=$_SESSION['Hos'];
    if($Hostel=='admin'){
    $sql= "SELECT * from room_allotment";
  }
    else{
    $sql= "SELECT * FROM `room_allotment` WHERE Hostel='$Hostel'";
  }

    $result=$conn->query($sql);
    ob_start();
    require "/../php-connectivity/pdf/fpdf/fpdf.php";
    $pdf=new FPDF('P','mm','A4'); //pt mm cm in //A4 A3 A% Letter Legal
    $pdf->AddPage(); // opening new page
    
    $pdf->SetFont('Arial','B',14);
    $pdf->cell(200,30,'VIEW HOSTEL ALLOTMENTS FOR '.$Hostel,0,1,'C');
    $pdf->cell(21,10,'FLOOR',1,0,'C');
    $pdf->cell(25,10,'Room NO',1,0,'C');
    $pdf->cell(30,10,'Student Id',1,0,'C');
    $pdf->cell(40,10,'Student Name',1,0,'C');
    $pdf->cell(12,10,'Year',1,0,'C');
    $pdf->cell(20,10,'Branch',1,0,'C');
    $pdf->cell(20,10,'Course',1,0,'C');
    $pdf->cell(23,10,'Hostel',1,1,'C');
    $pdf->SetFont('Arial','',12);
				while($row=$result->fetch_assoc())
				{
        $pdf->cell(21,10,$row['Floor'],1,0,'C');
        $pdf->cell(25,10,$row['Room_no'],1,0,'C');
        $pdf->cell(30,10,$row['Student_Id'],1,0,'C');
        $pdf->cell(40,10,$row['Student_Name'],1,0,'C');
        $pdf->cell(12,10,$row['Year'],1,0,'C');
        $pdf->cell(20,10,$row['Branch'],1,0,'C');
        $pdf->cell(20,10,$row['Course'],1,0,'C');
        $pdf->cell(23,10,$row['Hostel'],1,1,'C');
			
				}

    $pdf->Output();
    ob_end_flush();

    ?>
</body>
</html>
