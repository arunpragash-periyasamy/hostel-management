<?php
include '../php/conn.php';
$uname = $_POST['uname'];
$EmailId = $_POST['EmailId'];
$Gender = $_POST['Gender'];
$Hostel = $_POST['Hostel'];
$password = $_POST['password'];
$Cpassword = $_POST['Cpassword'];

// database connectivity

    $details= $conn->prepare("insert into adminregistration(uname, EmailId, Gender, Hostel, password, Cpassword) values(?,?,?,?,?,?)");
    $details->bind_param("ssssss", $uname, $EmailId, $Gender, $Hostel, $password, $Cpassword);
    $details->execute();
    $details->close();
    $conn->close();
    echo '<script> alert("Account Created Successfully!"); window.location.href = "adminlogin.html";</script>';


?>