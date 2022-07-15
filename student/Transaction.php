<?php
session_start();
error_reporting(0);
include '../php/conn.php';

if(isset($_POST['submit'])){
    $Student_Id=$_POST['Student_Id'];
    $Transaction_ID=$_POST['Transaction_ID'];
    $_SESSION['Rollno']=$Student_Id;
    $sql="INSERT INTO feespaid( Student_Id, Transaction_Id,Mode_of_payment) VALUES ('$Student_Id','$Transaction_ID','Online Payment')";
    $result=mysqli_query($conn,$sql);
    echo '<script> alert("Room Will Be alloted soon!!!"); window.location.href = "roomallotment.php";</script>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fees Paid Details</title>
    <link rel="stylesheet" href="../css/loginstyle.css">
</head>
<body>
<?php include 'header.php'; ?>
<h1>For DD payments submit your DD to hostel manager then your room will be alloted</h1>
<div class="studentcontainer"></div>
<form class="box" action="" method="POST" autocomplete="off">
    <div class="login-box">
        <h1>Online Transaction Id</h1>
        <div class="textbox">
            <i class="fa fa-user" aria-hidden="true"></i>
            <div class="field"><input type="text" id="Student_Id" placeholder="Student_Id" name="Student_Id" value="" required style="text-transform:uppercase"></div>
        </div>
        <div class="textbox">
            <i class="fa fa-lock" aria-hidden="true"></i>
          <div class="field"> <input type="Transaction_ID" id="Transaction_ID" placeholder="Transaction_ID" name="Transaction_ID" value="" pattern="[a-zA-Z0-9_]{18}" required></div>
        </div>
        <input class="btn" type="submit" action="" name="submit" value="Submit">
        </div>
    </div>
</form>
</div>
</body>
</html>