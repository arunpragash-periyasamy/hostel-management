<?php
// session_start();

//   if (!isset($_SESSION["id"]))
//    {
//       header("location: studentlogin.html");
//    }

?>

<?php
session_start();

  if (!isset($_SESSION["id"]))
   {
      header("location: studentlogin.html");
   }
   if(!isset($_COOKIE["loggedin"])){
    header("location: student/studentlogin.html");
}
else{
    $id=$_SESSION['id'];
    $name=$_SESSION['name'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>

<nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <div class="container-fluid">
    <a class="navbar-brand" >HOSTEL MANAGEMENT SYSTEM</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="studentDashboard.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Hosteladmisssion.php">Room admission</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="complaint.php">Complaint</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://rzp.io/i/CDHRSFEo">Fees Payment</a>
        </li>
        
        <!-- <li class="nav-item">
          <a class="nav-link" href="admin_Studentregistration.php">Student Registration</a>
        </li> -->
          </ul>
      </ul>
      <span>
        
      <?php echo "<b>".$_SESSION['name']."</b>";?>
          <a class="nav-link" href="../php/logout.php">Logout</a>
      </span>

    </div>
  </div>
</nav>

</header>
</body>
</html>