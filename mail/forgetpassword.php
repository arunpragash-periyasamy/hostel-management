<?php
session_start();
include '../php/conn.php';
if(isset($_POST['submit'])){
    $stu=$_POST['Student_Id'];
    $sql="SELECT * FROM student_registration WHERE Student_Id='$stu'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
    $email=$row['EmailId'];
    if(isset($_POST['submit'])){
    $Ran=rand(100000,999999);

    //session
    unset($_SESSION['otp']);
    $_SESSION['otp']=$Ran;
    $_SESSION['Email']=$email;
    $_SESSION['stu']=$stu;

    //php mail
    $url = 'http://myclientsinfo.com/arun/mail.php';
    $ch = curl_init($url);
    $data = array(  'to' => $_SESSION['Email'],'subject'=>'OTP verification' ,   'message' => ' <p>Yout OTP is:</p><b style="color:red;">'.$_SESSION['otp']."</b>" );
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);
    // print_r($result );
    echo '<script> alert("OTP has been sent to your Kongu mail id"); window.location.href = "otpverification.php";</script>';
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
    <link rel="stylesheet" href="../css/loginstyle.css">

</head>
<body>
<div class="studentcontainer"></div>
<div class="box">
    <form method="post" autocomplete="">
    <div class="login-box">
        <h1>Enter Student ID</h1>
        <div class="textbox">
            <i class="fa fa-user" aria-hidden="true"></i>
            <div class="field"><input type="text" id="Student_Id" placeholder="Student_Id" name="Student_Id" value="" required style="text-transform:uppercase"></div>
        </div>
        
        <input class="btn" type="submit"  action='' name="submit"  value="Send otp" onclick="text(0)">
</form>

</div>
</div>
</body>
</html>