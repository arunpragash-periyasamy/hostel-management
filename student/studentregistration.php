<?php
include '../php/conn.php';

$Student_Id = $_POST['Student_Id'];
$Firstname = $_POST['Firstname'];
$Lastname = $_POST['Lastname'];
$EmailId = $_POST['EmailId'];
$Gender = $_POST['Gender'];
$Department = $_POST['Department'];
$password = $_POST['password'];
$Profile = $_POST['Profile'];

// database connectivity

    $details= $conn->prepare("insert into student_registration(Student_Id, Firstname, Lastname, EmailId, Gender, Department, password,Profile) values(?,?,?,?,?,?,?,?)");
    $details->bind_param("ssssssss", $Student_Id, $Firstname, $Lastname, $EmailId, $Gender, $Department, $password,$Profile);
    $details->execute();
    $details->close();
    $conn->close();
    echo '<script> alert("Account Created Successfully!"); window.location.href = "studentlogin.html";</script>';


?>