<?php
session_start();
if (!isset($_SESSION["id"]))
{
   header("location: adminlogin.html");
}
if(!isset($_COOKIE["loggedin"])){
  header("location: adminlogin.html");
}
else{
  $id=$_SESSION['id'];
}

?>

<!DOCTYPE html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>


    <link  href="../css/styleindex.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


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
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="viewstudentdetails.php">Student Details</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Feesdetails.php">Fees Details</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="managerooms.php">Manage Rooms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="viewcomplaints.php">Complaints</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Hosteladmisssion.php">Hostel Admission</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Student Registration</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="viewfeesdetails.php">View Fees Details</a>
        </li>
        
          </ul>
      </ul>
      <span>
          <h5><?php echo $id; ?></h5>
          <a class="nav-link" href="../php/logout.php">Log Out</a>
          </span>
    </div>
  </div>
</nav>

</header>


</body>
</html>



<!--     
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
              <a class="nav-link active" aria-current="page" href="../adminDashbophphtml">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="studentdetails.php">Student Details</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../managerophphtml">Manage Rooms</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="viewcomplaints.php">Complaints</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Student Registration</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
              </ul>
          </ul>
        </div>
      </div>
    </nav>

  </header> -->
