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
    $sql= "SELECT * from student_registration";
    $result=$conn->query($sql);
    ob_start();
    require "/../php-connectivity/pdf/fpdf/fpdf.php";
    $pdf=new FPDF('P','mm','A4'); //pt mm cm in //A4 A3 A% Letter Legal
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',14);


    $pdf->cell(200,30,'VIEW STUDENT DETAILS',0,1,'C');
    $pdf->cell(27,10,'Student Id',1,0,'C');
    $pdf->cell(40,10,'Student Name',1,0,'C');
    $pdf->cell(18,10,'Branch',1,0,'C');
    $pdf->cell(18,10,'Course',1,0,'C');
    $pdf->cell(18,10,'Gender',1,0,'C');
    $pdf->cell(78,10,'Email',1,1,'C');
    $pdf->SetFont('Arial','',12);
				while($row=$result->fetch_assoc())
				{
        $pdf->cell(27,10,$row['Student_Id'],1,0,'C');
        $pdf->cell(40,10,$row['StudentName'],1,0,'C');
        $pdf->cell(18,10,$row['Branch'],1,0,'C');
        $pdf->cell(18,10,$row['Course'],1,0,'C');
        $pdf->cell(18,10,$row['Gender'],1,0,'C');
        $pdf->cell(78,10,$row['EmailId'],1,1,'C');
			
				}

    $pdf->Output();
    ob_end_flush();

    ?>
</body>
</html>
