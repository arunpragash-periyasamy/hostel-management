<?php
session_start();
error_reporting(0);
if (!isset($_SESSION["id"]))
{
   header("location: adminlogin.php");
}
if(!isset($_COOKIE["loggedin"])){
  header("location: adminlogin.php");
}
else{
  $id=$_SESSION['id'];
  $Hostel=$_SESSION['Hostel'];
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

<style>
      body{
        width: 100%;
      }
      img{
        border-radius: 50%;
      }
.dropbtn {
  /* background-color: #04AA6D; */
  color: black;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}



    </style>

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
        <div class="dropdown">
  <div class="dropbtn">
    Student
  <div class="dropdown-content">

    <a href="Hosteladmisssion.php">Student Admission</a>
    <a href="viewallotedrooms.php">View alloted Rooms</a>
    <!-- <a href="#">Link 3</a> -->
  </div>
</div>
        <li class="nav-item">
        <div class="dropdown">
  <div class="dropbtn">
    Complaints
  <div class="dropdown-content">
    <a href="viewcomplaints.php">View Complaints</a>
    <a href="viewsolvedcomplaints.php">Solved Complaints</a>
    <!-- <a href="#">Link 3</a> -->
  </div>
</div>
    </div>
        </li>
        <li class="nav-item">
        <div class="dropdown">
  <div class="dropbtn">
    Fees Payment
  <div class="dropdown-content">
    <a href="Feespayment.php">Fees Payment</a>
    <!-- <a href="viewsolvedcomplaints.php">Solved Complaints</a> -->
    <!-- <a href="#">Link 3</a> -->
  </div>
</div>
    </div>
        </li>

        
          </ul>
      </ul>
          <div class="dropdown">
  <div class="dropbtn">
      <?php echo "<b>".$id."</b>"?>
  <div class="dropdown-content">
    <a href="../php/logout.php">Logout</a>
    <!-- <a href="#"></a> -->
    <!--<a href="#">Link 3</a> -->
  </div>
</div>
    </div>
  </div>
</nav>

</header>


</body>
</html>



