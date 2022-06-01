
<?php
include '../php/conn.php';
        $sql= "SELECT * from hostel_rooms";
        $result=$conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>View Dheeran Rooms</title>
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
		<h1>View Dheeran Rooms</h1>
		<!-- TABLE CONSTRUCTION-->
		<table>
			<tr>
        <th>Hostel</th>
        <th>Floor</th>
        <th>Room</th>
        <th>No Of Student</th>

			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS-->
			<?php // LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!--FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN-->
				<td><?php echo $rows['Hostel'];?></td>
				<td><?php echo $rows['Floor'];?></td>
				<td><?php echo $rows['Room'];?></td>
				<td><?php echo $rows['student'];?></td>
				
			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>

</html>
