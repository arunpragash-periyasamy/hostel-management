<?php
// database connectivity
error_reporting(0);
session_start();

include '../php/conn.php';

if(isset($_POST['submit'])){
    $Student_Id=$_POST['Student_Id'];
    $Transaction_ID=$_POST['Transaction_ID'];

    
    $_SESSION['Rollno']=$Student_Id;
    $sql="INSERT INTO feespaid( Student_Id, Transaction_Id, Mode_of_payment) VALUES ('$Student_Id','$Transaction_ID','Demand Draft')";
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
    
<?php  
error_reporting(0);
session_start();

if($_SESSION['user']=='admin'){
include 'adminheader.php';
}
else{
include 'managerheader.php';
}
 ?>
<div class="studentcontainer"></div>
    <form class="box" action="" method="POST" autocomplete="off">
    <div class="login-box">
        <h1>Fees Transaction</h1>
        <div class="textbox">
            <i class="fa fa-user" aria-hidden="true"></i>
            <div class="field"><input type="text" id="Student_Id" placeholder="Student_Id" name="Student_Id" value="" required style="text-transform:uppercase"></div>
        </div>
        <div class="textbox">
            <i class="fa fa-lock" aria-hidden="true"></i>
          <div class="field"> <input type="varchar" id="Transaction_ID" placeholder="DD Reference number" name="Transaction_ID" value="" min="6" max="6" required></div>
        </div>
        <input class="btn" type="submit" action="" name="submit" value="Submit">
        </div>

    </div>


</form>
</div>
</body>
</html>