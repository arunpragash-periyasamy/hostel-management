<?php
$Department = $_POST['Department'];
$Year = $_POST['Year'];
$Hostel = $_POST['Hostel'];
$BookingFrom = $_POST['BookingFrom'];
$Vacate = $_POST['Vacate'];
$Fees = $_POST['Fees'];

// database connectivity
include '../php/conn.php';

    $details= $conn->prepare("insert into feesdetails(Department, Year, Hostel, BookingFrom, Vacate, Fees) values(?,?,?,?,?,?)");
    $details->bind_param("ssssss", $Department, $Year, $Hostel, $BookingFrom, $Vacate, $Fees);
    $details->execute();
    $details->close();
    $conn->close();
    echo '<script> alert("Fees Details updated Successfully!"); window.location.href = "../adminDashboard.html";</script>';


?>