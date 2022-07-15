<?php
session_start();
error_reporting(0);
$Ran=$_SESSION['otp'];
if(isset($_POST['submit'])){
    $OTP=$_POST['OTP'];
    if($OTP==$_SESSION['Ran']){
        echo '<script> alert("OTP has been Verified Successfully"); window.location.href = "changepassword.php";</script>'; 
    }
    else{
        echo '<script> alert("Incorrect otp"); window.location.href = "otpverification.php";</script>';
    }
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>
    <link rel="stylesheet" href="../css/loginstyle.css">

</head>
<body>

<div class="studentcontainer"></div>
<div class="box">
<form method="POST" autocomplete="off">
    
<div class="login-box">
        <h1>Enter Your OTP</h1>
        <p>Please wait for otp</p>
        
        <div class="textbox">
            <i class="fa fa-lock" aria-hidden="true"></i>
          <div class="field"> <input type="text" id="otp" placeholder="Enter OTP" name="otp"  required></div>
        </div>
        <input class="btn" type="submit"  name="submit" value="Verify">
     </div>
</form>
    </div>

    
</body>
</html>


</form>
