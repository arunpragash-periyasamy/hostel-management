
<?php
error_reporting(0);
// database connectivity
include '../php/conn.php';
session_start();

if(isset($_POST['submit'])){
$Hostel=$_POST['Hostel'];
$Floor=$_POST['Floor'];
$Room=$_POST['Room'];
$student=$_POST['student'];
$sql="SELECT * from hostel_rooms Where Hostel='$Hostel'";
$res=mysqli_query($conn,$sql);
$count=mysqli_num_rows($res);
if($count>0){
    $sql="UPDATE hostel_rooms SET Hostel='$Hostel',Floor='$Floor',Room='$Room',student='$student' WHERE Hostel='$Hostel'";
    mysqli_query($conn,$sql1);
    echo '<script> alert("Updated the Data"); window.location.href = "addrooms.php";</script>';
}
else{
$sql="INSERT INTO hostel_rooms(Hostel,Floor, Room, student) VALUES ('$Hostel','$Floor','$Room','$student')";

mysqli_query($conn,$sql);
echo '<script> alert("Rooms added successfully"); window.location.href = "addrooms.php";</script>';
}
echo '<script> alert("Updated the Data"); window.location.href = "addrooms.php";</script>';
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Rooms</title>

   
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
        <center><p style="color:#08fc8a;"><strong>Add Rooms and Floors</strong></p></center>
        <form action="" class="" method="post"  oninput='Cpassword.setCustomValidity(Cpassword.value != password.value ? "Passwords do not match." : "")'>
            
            <div class="input-group input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-bed" aria-hidden="true"></i>
                </span>
                <select class="form-control" aria-label="Default select example" name="Hostel" required>
                    <option value="" disabled selected hidden>Hostel</option>
                    <option value="Bharathi">Boys Hostel-Bharathi</option>
                    <option value="Dheeran">Boys Hostel-Dheeran</option>
                    <option value="Ilango">Boys Hostel-Ilango</option>
                    <option value="Kamban">Boys Hostel-Kamban</option>
                    <option value="Ponnar">Boys Hostel-Ponnar</option>
                    <option value="Sankar">Boys Hostel-Sankar</option>
                    <option value="Valluvar">Boys Hostel-Valluvar</option>
                    <option value="Amaravathi">Ladies Hostel-Amaravathi</option>
                    <option value="Bhavani">Ladies Hostel-Bhavani</option>
                    <option value="Kaveri">Ladies Hostel-Kaveri</option>
                  </select><br>
                </div>
                <div class="input-group input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm"><i class="far fa-building"></i></i>
                </span>
                <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="Floor" name="Floor" placeholder="Enter the number of Floors" min="1" max="5" required>
            </div>
                <div class="input-group input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm"><i class="far fa-building"></i></i>
                </span>
                <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="Room" name="Room" placeholder="Enter the number of Rooms" min="1" max="60" required>
            </div>
            
                <div class="input-group input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-users" aria-hidden="true"></i>
                </span>
                <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="student" name="student" placeholder="Enter the no of Students per room" min="1" max="60" required>
            </div>
           <!------Login Button----->
                        
           <div class="field">
                <input class="button" type="submit" name="submit"  value="Add Rooms"> </div> 
        </form>
    </div> 
    </div>
</body>
</html>