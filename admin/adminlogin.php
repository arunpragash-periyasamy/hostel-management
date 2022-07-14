<?php
// database connectivity
include '../php/conn.php';
session_start();

if(isset($_POST['submit'])){
    $uname=$_POST['uname'];
    $password=md5($_POST['password']);
    $sql="SELECT * FROM adminregistration WHERE uname='$uname' AND password='$password'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        
        $sql1="INSERT INTO adminlogin(uname) VALUES ('$uname')";
        mysqli_query($conn,$sql1);
        $rows=$result->fetch_assoc();
        if($uname=='admin'){
        $_SESSION['user']="admin";
        $_SESSION['id']=$uname;
        $_SESSION['name']=$rows['uname'];
        setcookie("loggedin", "admin", time()+ 3600);
        echo '<script> alert("Admin Account verified"); window.location.href = "adminDashboard.php";</script>';
    }
        else {
        $_SESSION['user']="Manager";
        $_SESSION['id']=$uname;
        $_SESSION['Hostel']=$Hostel;


        setcookie("loggedin", "admin", time()+ 3600);
        echo '<script> alert("Manager Account verified."); window.location.href = "managerDashboard.php";</script>';
    }



    }
    else{
        echo '<script> alert("Invalid ID or Password!!!"); window.location.href = "adminlogin.php";</script>';
    }
}



// if(isset($_POST['submit'])){
//     function validate($data){
//         $data=trim($data);
//         $data=stripslashes($data);
//         $data=htmlspecialchars($data);
//         return $data;
//     }
//     $uname=validate($_POST['uname']);
//     $password=validate($_POST['password']);

//     $sql="SELECT * FROM adminregistration WHERE uname='$uname' AND password='$password'";
//     $result=mysqli_query($conn,$sql);
//     if(mysqli_num_rows($result)){
//         $sql1="INSERT INTO adminlogin(uname) VALUES ('$uname')";
//         mysqli_query($conn,$sql1);
//         $_SESSION['user']="admin";
//         $_SESSION['id']=$uname;
//         setcookie("loggedin", "admin", time()+ 3600);
//         echo '<script> alert("Account verified"); window.location.href = "adminDashboard.php";</script>';

//     }
// }
// else{
//     echo '<script> alert("Error Ocuured!!!xam"); window.location.href = "adminlogin.html";</script>';
// }

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="../css/loginstyle.css">
</head>
<body>
<div class="admincontainer"></div>
    <form class="box"  method="post" autocomplete="off">
    <div class="login-box">
        <h1>Admin Login</h1>
        <div class="textbox">
            <i class="fa fa-user" aria-hidden="true"></i>
            <div class="field"><input type="text" id="uname" placeholder="Username" name="uname" value="" required></div>
        </div>
        <div class="textbox">
            <i class="fa fa-lock" aria-hidden="true"></i>
          <div class="field"> <input id="password" type="password" placeholder="password" name="password" value="" required></div>
        </div>
        <input class="btn" type="submit" name="submit" value="Login">

    </div>


</form>
</div>
</body>
</html>