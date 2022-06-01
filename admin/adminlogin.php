<?php
// database connectivity

// $conn = new mysqli('localhost','root','','valluvar');
// if($conn-> connect_error){
//     die('Connection failed....'.$conn->connect_error);
// }

// if(isset($_POST['uname']) && isset($_POST['password'])){
//     function validate($data){
//         $data=trim($data);
//         $data=stripslashes($data);
//         $data=htmlspecialchars($data);
//         return $data;
//     }
//     $uname=validate($_POST['uname']);
//     $password=validate($_POST['password']);

//     $sql="SELECT * FROM adminlogin WHERE uname='$uname' AND password='$password'";
//     $result=mysqli_query($conn,$sql);
//     if(mysqli_num_rows($result)){
//         echo '<script> alert("Account verified"); window.location.href = "./adminDashboard.html";</script>';

//     }
// }
// else{
//     header("Location: adminlogin.php");
// }

?> 

<?php
// database connectivity
include '../php/conn.php';
session_start();

if(isset($_POST['uname']) && isset($_POST['password'])){
    function validate($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
    $uname=validate($_POST['uname']);
    $password=validate($_POST['password']);

    $sql="SELECT * FROM adminregistration WHERE uname='$uname' AND password='$password'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)){
        $sql1="INSERT INTO adminlogin(uname) VALUES ('$uname')";
        mysqli_query($conn,$sql1);
        $_SESSION['user']="admin";
        $_SESSION['id']=$uname;
        setcookie("loggedin", "admin", time()+ 3600);
        echo '<script> alert("Account verified"); window.location.href = "adminDashboard.php";</script>';

    }
}
else{
    echo '<script> alert("Error Ocuured!!!xam"); window.location.href = "adminlogin.html";</script>';
}

?>

