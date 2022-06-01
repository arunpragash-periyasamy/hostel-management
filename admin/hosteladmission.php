<?php
include '../php/conn.php';

$Student_Id = $_REQUEST['Student_Id'];
$StudentName = $_REQUEST['StudentName'];
$Branch = $_REQUEST['Branch'];
$Course = $_REQUEST['Course'];
$Blood = $_REQUEST['Blood'];
$Parent = $_REQUEST['Parent'];
$ParentName = $_REQUEST['ParentName'];
$ParentContact = $_REQUEST['ParentContact'];
$Address = $_REQUEST['Address'];
$GuardianName = $_REQUEST['GuardianName'];
$KVBAcc = $_REQUEST['KVBAcc'];
$Computer = $_REQUEST['Computer'];
$Ironbox = $_REQUEST['Ironbox'];
$Phy = $_REQUEST['Phy'];
$Profile = $_REQUEST['Profile'];

move_uploaded_file($_FILES['Profile'][$Student_ID],"images/".$_FILES['Profile']['name']);

if(!$GuardianName){

    $sql="INSERT INTO `admission`(`Student_Id`, `StudentName`, `Branch`, `Course`, `Blood`, `Parent`, `ParentName`, `ParentContact`, `Address`,`KVBAcc`, `Computer`, `Ironbox`, `Phy`, `Profile`) VALUES ($Student_Id,$StudentName,$Branch,$Course,$Blood,$Parent,$ParentName,$ParentContact,$Address,$KVBAcc,$Computer,$Ironbox,$Phy,$Profile)";
    mysqli_query($conn,$sql);
}
else{
    $GuardianContact = $_REQUEST['GuardianContact'];
    $GAddress = $_REQUEST['GAddress'];
$sql="INSERT INTO `admission`(`Student_Id`, `StudentName`, `Branch`, `Course`, `Blood`, `Parent`, `ParentName`, `ParentContact`, `Address`, `GuardianName`, `GuardianContact`, `GAddress`, `KVBAcc`, `Computer`, `Ironbox`, `Phy`, `Profile`) VALUES ($Student_Id,$StudentName,$Branch,$Course,$Blood,$Parent,$ParentName,$ParentContact,$Address,$GuardianName,$GuardianContact,$GAddress,$KVBAcc,$Computer,$Ironbox,$Phy,$Profile)";
mysqli_query($conn,$sql);
}



//Hostel_Rooms


?>