<?php
include '../php/conn.php';
 
session_start();
error_reporting(0);
if($_SESSION['user']=='admin'){
include 'adminheader.php';
}
else{
include 'managerheader.php';
}

$uname=$_SESSION['id'];
$sql1="SELECT * from adminregistration where uname='$uname'";
$res=mysqli_query($conn,$sql1);
$row=mysqli_fetch_assoc($res);
$Hostel=$row['Hostel'];
$_SESSION['Hos']=$Hostel;
if($Hostel=='admin'){
	$sql= "SELECT * from room_allotment";
	$result=$conn->query($sql);

}
else{
        $sql= "SELECT * from room_allotment where Hostel='$Hostel'";
        $result=$conn->query($sql);
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>View Fees Details</title>
	<!-- CSS FOR STYLING THE PAGE -->
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #E4F5D4;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: 200px;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: 200x;
		}
	</style>
</head>

<body>
	
	<section>
		<div class="tab">
		<h1>Room allotment </h1> 
		<table>
			<tr>
        <th>Floor</th>
        <th>Room No</th>
        <th>Student ID</th>
        <th>Student Name</th>
        <th>Year</th>
        <th>Branch</th>
        <th>Course</th>
        <th>Hostel</th>
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS-->
			<?php // LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!--FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN-->
				<td><?php echo $rows['Floor'];?></td>
				<td><?php echo $rows['Room_no'];?></td>
				<td><?php echo $rows['Student_Id'];?></td>
				<td><?php echo $rows['Student_Name'];?></td>
				<td><?php echo $rows['Year'];?></td>
				<td><?php echo $rows['Branch'];?></td>
				<td><?php echo $rows['Course'];?></td>
				<td><?php echo $rows['Hostel'];?></td>
			</tr>
			<?php
				}
			?>
		</table>
		
		</div>
<br><br>
	<center><form action="../pdf/roomallotment.php">
	<input type="submit" value="Print">
	</form>
</body>
	</section>
</body>

</html>
