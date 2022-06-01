<?php
// database connectivity
session_start();
include '../php/conn.php';

if(isset($_POST['Student_Id']) && isset($_POST['password'])){
    function validate($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
    $Student_Id=validate($_POST['Student_Id']);
    $password=validate($_POST['password']);
    

    $sql="SELECT * FROM student_registration WHERE Student_Id='$Student_Id' AND password='$password'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)){
        // $sql1="INSERT INTO studentlogin(Student_Id) VALUES ('$Student_Id')";
        // mysqli_query($conn,$sql1);
        $rows=$result->fetch_assoc();
        $_SESSION['user']="Student";
        $_SESSION['id']=$Student_Id;
        $_SESSION['name']=$rows['Firstname']." ".$rows['Lastname'];
        
        setcookie("loggedin", "student", time()+ 3600);
        echo '<script> alert("Account verified"); window.location.href = "studentDashboard.php";</script>';

    }
    
else{
    echo '<script> alert("Invalid ID or Password!!!"); window.location.href = "studentlogin.html";</script>';
}
}
else{
    echo '<script> alert("Connection Error!!!"); window.location.href = "studentlogin.html";</script>';
}

?>
