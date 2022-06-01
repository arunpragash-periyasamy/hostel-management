<?php
session_start();
setcookie("loggedin", "", time()- 30);
$user=$_SESSION['user'];
session_destroy();
if($user=='admin')
echo '<script> alert("Log Out Successfully"); window.location.href = "../admin/adminlogin.html";</script>';
else if($user=='Student')
echo '<script> alert("Log Out Successfully"); window.location.href = "../student/studentlogin.html";</script>';
?>