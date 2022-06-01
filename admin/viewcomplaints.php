
<?php
include '../php/conn.php';
        $sql= "SELECT * from complaints";
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
	
<?php include 'adminheader.php' ?>
	<section>
		<h1>View Complaints</h1>
		<!-- TABLE CONSTRUCTION-->
		<table>
			<tr>
        <th>id</th>
        <th>Student_Id</th>
        <th>StudentName</th>
        <th>EmailId</th>
        <th>Contact</th>
        <th>Category</th>
        <th>Hostel</th>
        <th>location</th>
        <th>Category</th>
        <th>Complaint_Type</th>
        <th>Complaint_Description</th>
        <th>Time</th>
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS-->
			<?php // LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!--FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN-->
				<td><?php echo $rows['id'];?></td>
				<td><?php echo $rows['Student_Id'];?></td>
				<td><?php echo $rows['StudentName'];?></td>
				<td><?php echo $rows['EmailId'];?></td>
				<td><?php echo $rows['Contact'];?></td>
				<td><?php echo $rows['Category'];?></td>
				<td><?php echo $rows['Hostel'];?></td>
				<td><?php echo $rows['location'];?></td>
				<td><?php echo $rows['Category'];?></td>
				<td><?php echo $rows['Complaint_Type'];?></td>
				<td><?php echo $rows['Complaint_Description'];?></td>
				<td><?php echo $rows['Time'];?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>

</html>
