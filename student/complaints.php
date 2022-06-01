
<?php
// database connectivity
include '../php/conn.php';

$Student_Id = $_POST['Student_Id'];
$StudentName = $_POST['StudentName'];
$EmailId = $_POST['EmailId'];
$Contact = $_POST['Contact'];
$Category = $_POST['Category'];
$Hostel = $_POST['Hostel'];
$location = $_POST['location'];
$Category = $_POST['Category'];
$Complaint_Type = $_POST['Complaint_Type'];
$Complaint_Description = $_POST['Complaint_Description'];

    // <div class=""></div>
    // $sql="INSERT INTO `complaints`(`id`, `Student_Id`, `StudentName`, `EmailId`, `Contact`, `Hostel`, `location`, `Category`, `Complaint_Type`, `Complaint_Description`, `Time`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]',)"
    $details= $conn->prepare("INSERT into complaints(Student_Id, StudentName,  EmailId, Contact, Category, Hostel,location,Complaint_Type,Complaint_Description) values(?,?,?,?,?,?,?,?,?)");
    $details->bind_param("sssssssss", $Student_Id, $StudentName, $EmailId, $Contact, $Category, $Hostel, $location,$Complaint_Type,$Complaint_Description);
    $details->execute();
    $details->close();
    $conn->close();
    echo '<script> alert("Complaint Registered Successfully!"); window.location.href = "complaint.php";</script>';


?>