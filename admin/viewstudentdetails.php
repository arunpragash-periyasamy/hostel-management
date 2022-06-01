
<?php
include '../php/conn.php';

        $sql= "SELECT * from student_registration";
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
<!-- <div class="input-group input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-graduation-cap" aria-hidden="true"></i>
                    </span>
                    <select class="form-control" aria-label="Default select example"  name="Department" required>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                        <option value="150">150</option>
                        <option value="200">200</option>
                        <option value="250">250</option>
                        <option value="300">300</option>
                        <option value="350">350</option>
                        <option value="400">400</option>
                        <option value="450">450</option>
                        <option value="500">500</option>
                      </select><br>
                    </div> -->
	<section>
		<h1>Student Details</h1>
		<!-- TABLE CONSTRUCTION-->
		<table>
        <tr>
        <!-- <th>S.No</th> -->
        <th>Student ID</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Department</th>
        <!-- <th>Profile</th> -->
        </tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS-->
			<?php // LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!--FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN-->
				<!-- <td><?php //echo $rows['id'];?></td> -->
				<td><?php echo $rows['Student_Id'];?></td>
				<td><?php echo $rows['Firstname'];?></td>
				<td><?php echo $rows['Lastname'];?></td>
				<td><?php echo $rows['EmailId'];?></td>
				<td><?php echo $rows['Gender'];?></td>
				<td><?php echo $rows['Department'];?></td>
				<!-- <td><?php //echo '<img src="data:image/jpeg;base64,'.base64_encode($rows['Profile']).'"/>';?></td> -->
			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>

</html>
