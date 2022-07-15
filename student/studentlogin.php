<?php
// database connectivity
session_start();
include '../php/conn.php';

if(isset($_POST['submit'])){
    $Student_Id=$_POST['Student_Id'];
    $password=md5($_POST['password']);
    $sql="SELECT * FROM student_registration WHERE Student_Id='$Student_Id' AND password='$password'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)){
        
        $sql1="INSERT INTO studentlogin(Student_Id) VALUES ('$Student_Id')";
        mysqli_query($conn,$sql1);
        $rows=$result->fetch_assoc();
        $_SESSION['user']="Student";
        $_SESSION['id']=$Student_Id;
        $_SESSION['name']=$rows['StudentName'];
    
        setcookie("loggedin", "student", time()+ 3600);
        echo '<script> alert("Account verified"); window.location.href = "studentDashboard.php";</script>';

    }
    
else{
    echo '<script> alert("Invalid ID or Password!!!"); window.location.href = "studentlogin.php";</script>';
}
}

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
<div class="studentcontainer"></div>
    <form class="box"  method="POST" autocomplete="off">
    <div class="login-box">
        <h1>Login</h1>
        <div class="textbox">
            <i class="fa fa-user" aria-hidden="true"></i>
            <div class="field"><input type="text" id="Student_Id" placeholder="Student_Id" name="Student_Id" value="" required style="text-transform:uppercase"></div>
        </div>
        <div class="textbox">
            <i class="fa fa-lock" aria-hidden="true"></i>
          <div class="field"> <input type="password" id="password" placeholder="password" name="password" value="" required></div>
        </div>
        <input class="btn" type="submit"  name="submit" value="Login">
        <div> <a href="studentregistration.php"><input class="btn" type="button" action="studentregistration.html" name="" value="Registration"></a>
        <div> <a href="../mail/forgetpassword.php"><input class="btn" type="button" action="../mail/forgetpassword.php" name="" value="Forget password"></a>
        </div>

    </div>


</form>
</div>
</body>
</html>