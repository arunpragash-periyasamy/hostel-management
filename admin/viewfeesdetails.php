<?php
include '../php/conn.php';
        $sql= "SELECT * from feesdetails";
        $result=$conn->query($sql);
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
	

<?php  
session_start();
error_reporting(0);
if($_SESSION['user']=='admin'){
include 'adminheader.php';
}
else{
include 'managerheader.php';
}
 ?>
	<section>
		<h1>Fees Details</h1>
		<!-- TABLE CONSTRUCTION-->
		<table>
			<tr>
        <th>Branch</th>
        <th>Course</th>
        <th>Year</th>
        <th>Hostel</th>
        <th>BookingFrom</th>
        <th>Vacate</th>
        <th>Fees</th>
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS-->
			<?php // LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!--FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN-->
				<td><?php echo $rows['Branch'];?></td>
				<td><?php echo $rows['Course'];?></td>
				<td><?php echo $rows['Year'];?></td>
				<td><?php echo $rows['Hostel'];?></td>
				<td><?php echo $rows['BookingFrom'];?></td>
				<td><?php echo $rows['Vacate'];?></td>
				<td><?php echo $rows['Fees'];?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</section><center><br><br>
	<form action="../pdf/feesdetails.php">
		
		<input type="submit" value="Print">
	</form>
</body>

</html>
