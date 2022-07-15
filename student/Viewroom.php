<?php 
error_reporting(0);
include 'header.php';
include '../php/conn.php';
$Student_Id=$_SESSION['id'];
$sql="SELECT * FROM `room_allotment` WHERE Student_Id='$Student_Id'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
$Room_no=$row['Room_no'];
$Floor=$row['Floor'];
$Hostel=$row['Hostel'];
$sql1="SELECT * FROM room_allotment WHERE Room_no='$Room_no' and Hostel='$Hostel'";
$result1=mysqli_query($conn,$sql1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View room</title>


    <link  href="css/styleindex.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


</head>
<body>

    <centre>
		<?php

		if(isset($Room_no)){ 
		?>
		<h1><center>Hello <?php echo $_SESSION['name']; ?>room has alloted for You</h1>
		<h3><?php echo"<br><br><center> Your Floor No: ".$Floor."<br>Your room no : ".$Room_no."<br> Your Hostel: ".$Hostel;?></h3>
		<?php
		}
		else{
			echo "<br><br><br><br><br><br><br><br><br><center><h1>Sorry No room alloted for you right now Please Try again later</h1>";
		}
		?>
</body>

</html>