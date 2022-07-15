<?php
include '../php/conn.php';
include 'adminheader.php';
if(isset($_POST['submit'])){
$uname = $_POST['uname'];
$EmailId = $_POST['EmailId'];
$Gender = $_POST['Gender'];
$Hostel = $_POST['Hostel'];
$password = md5($_POST['password']);


// database connectivity
$sql="INSERT INTO adminregistration(uname, EmailId, Gender, Hostel, password) VALUES ('$uname','$EmailId','$Gender','$Hostel','$password')";
mysqli_query($conn,$sql); 
    echo '<script> alert("Account Created Successfully!"); window.location.href = "adminlogin.php";</script>';
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>

   
<!--------Bootstrap Link Starting-------->
<!---->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<!------------Bootstrap Ending-------->


    <link rel="stylesheet" href="../css/style2.css">




</head>
<body>

        <!-------Form Creation for Student Registration ------>
        <form  method="post" class="box" oninput='Cpassword.setCustomValidity(Cpassword.value != password.value ? "Passwords do not match." : "")' autocomplete="off">


            <div class="text">
                <h3 >Admin Registration</h3>

            <!------Student Name-------->
            <div class="input-group input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-user" aria-hidden="true"></i>
                </span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="uname" name="uname" placeholder="User Name" required>
              </div><br>         

            <!-------Student Mail Id------->
            <div class="input-group input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-envelope" aria-hidden="true"></i>
                </span>
                <input type="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="EmailId" placeholder="Kongu Mail ID" pattern="[a-z0-9.]+@[a-z]+.+[a-z]" required>
              </div><br>     

            <!--------Hostel type-------->
            
            <!--------Gender-------->
            <div class="input-group input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-transgender" aria-hidden="true"></i>
                </span>
                <select class="form-control" id="main_menu" aria-label="Default select example" name="Gender" required>
                    <option value=""disabled selected hidden>Gender</option>
                    <option value="Boy">Boy</option>
                    <option value="Girl">Girl</option>
                    <option value="TG">Transgender</option>
                  </select><br>
                </div>



            <div class="input-group input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-bed" aria-hidden="true"></i>
                </span>
                <select name="Hostel" id="sub_menu" aria-label="Default select example" name="Hostel" class="form-control">
                <!-- <select class="form-control"  id="sub_menu" name="Hostel" required> -->
                <option value=""disabled selected hidden>Hostel</option>
                </select>
            </div>
            <script src="dynamic.js"></script>


                    <!------Password-------->
                    <div class="input-group input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                          <input type="password" class="form-control" name="password" placeholder="password" id="inputPassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                        </div>
                      
                    <!------ Comnfirm Password-------->
                    <div class="input-group input-group mb-3">
                      <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-lock" aria-hidden="true"></i>
                      </span>
                        <input type="password" class="form-control" name="Cpassword" placeholder="Confirm password" id="inputPassword" required>
                      </div>


                        <!------Login Button----->
                        
                              <input class="button" type="submit" name="submit" value="Register">
                        </div>
            </div>
        </form> 

</body>
</html>