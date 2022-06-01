<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Rooms</title>
    


<!--------Bootstrap Link Starting-------->
<!---->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<!------------Bootstrap Ending-------->


    <link rel="stylesheet" href="../css/addrooms.css">


</head>
<body>

<?php include 'adminheader.php' ?>

<div class="wrapper">
  <!-------Form Creation for Student Registration ------>
  <center><p><strong>Update Rooms and Floors</strong></p></center>
  <form action="addrooms.php" >
      
     <!------Login Button----->
                  
     <div class="field">
          <input class="btn" type="submit" name=""  value="Add Rooms"> </div> 
          </form>
          <form action="#" >
 
     <div class="field">
          <input class="btn" type="submit" name=""  value="Delete Rooms"> </div> 
          </form>
          <form action="viewrooms.php" >
 
     <div class="field">
          <input class="btn" type="submit" name=""  value="View Rooms"> </div> 
          </form>
          <form action="#" >
 
     <div class="field">
          <input class="btn" type="submit" name=""  value="Alter Rooms"> </div> 
  </form>
</div> 
</div>
</body>
</html>