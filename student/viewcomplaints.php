
<?php
include '../php/conn.php';
session_start();
error_reporting(0);
// $Hostel=$_SESSION['Hostel'];
if($_SESSION['user']=='Student'){
include 'header.php';
$STU_id=$_SESSION['id'];
$sql= "SELECT * from complaints WHERE Student_Id='$STU_id'";
$result=$conn->query($sql);
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>View Complaints</title>
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
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link  href="../css/complaint.css">
</head>

<body>
	

<br>
<br>
	<section>
		<h1>View Complaints </h1>
		<?php echo $Hostel;?>
	
		<table>
			<tr>
        <th>id</th>
        <th>Hostel</th>
        <th>location</th>
        <th>Category</th>
        <th>Complaint_Type</th>
        <th>Complaint_Description</th>
        <th>Complaint Registered time</th>
        <th>Accept</th>
        <th>Solved</th>
        <th>Accepted/Solved time</th>
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
				<td><?php echo $rows['Hostel'];?></td>
				<td><?php echo $rows['location'];?></td>
				<td><?php echo $rows['Category'];?></td>
				<td><?php echo $rows['Complaint_Type'];?></td>
				<td><?php echo $rows['Complaint_Description'];?></td>
				<td><?php echo $rows['Time'];?></td>
				<td><?php echo $rows['Accept'];?></td>
				<td><?php echo $rows['Resolve'];?></td>
				<td><?php echo $rows['solvedtime'];?></td>
                </tr>
                <?php }?>
		</table>
	</section>
</body>

</html>
