<?php
include '../php/conn.php';

$Hostel = $_REQUEST['Hostel'];
$Floor = $_REQUEST['Floor'];
$Room = $_REQUEST['Room'];
$student = $_REQUEST['student'];



//Hostel_Rooms

$sql="INSERT INTO hostel_rooms(`Hostel`, `Floor`, `Room`, `student`) VALUES ($Hostel,$Floor,$Room,$student)";
mysqli_query($conn,$sql);
?>