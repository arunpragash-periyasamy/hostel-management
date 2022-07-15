<?php
include '../php/conn.php';
session_start();
$stu=$_SESSION['stu'];
$email=$_SESSION['Email'];
// $sql="SELECT ";
if(isset($_POST['submit'])){
$pass=md5($_POST['password']);
$sql="UPDATE student_registration SET password='$pass' WHERE Student_Id='$stu'";
mysqli_query($conn,$sql);

$url = 'http://myclientsinfo.com/arun/mail.php';
$ch = curl_init($url);
$data = array(  'to' => $email,'subject'=>'Password Changed' ,   'message' => ' <b style="color:red;">Your password is changed successsfully<b>');
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);
// print_r($result );
session_destroy();
echo '<script> alert("Password Has been changed"); window.location.href = "../student/studentlogin.php";</script>';

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change password</title>
    <link rel="stylesheet" href="../css/loginstyle.css">
</head>
<body>
<div class="studentcontainer"></div>
    <form class="box"  method="POST" autocomplete="off" oninput='Cpassword.setCustomValidity(Cpassword.value != password.value ? "Passwords do not match." : "")'>
    <div class="login-box">
        <h1>Change Password</h1>
        <div class="textbox">
            <i class="fa fa-lock" aria-hidden="true"></i>
          <div class="field"> <input type="password" id="password" placeholder="password" name="password" value="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required></div>
        </div>
        <div class="textbox">
            <i class="fa fa-lock" aria-hidden="true"></i>
          <div class="field"> <input type="password" id="Cpassword" placeholder="Confirm password" name="Cpassword" value="" required></div>
        </div>
        <input class="btn" type="submit"  name="submit" value="change password">

</form>
</div>
</body>
</html>