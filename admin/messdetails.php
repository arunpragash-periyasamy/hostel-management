<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mess Details</title>

   
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

<?php include 'adminheader.php' ?>
        <!-------Form Creation for Student Registration ------>
        <form action="#" method="post" class="box" >


            <div class="text">
                <h3 >Mess Details</h3>

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
                <input type="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="EmailId" placeholder="Kongu Mail ID" pattern="[a-z0-9.]+@kongu.edu" required>
              </div><br>     

            <!--------Hostel type-------->
            <div class="input-group input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Gender<i class="fa fa-transgender" aria-hidden="true"></i>
                </span>
            <div class="col" >
                <input type="radio" class="form-check-input" placeholder="Gents hostel" name="Gender" value="Gents" id="Gender" required> Gents hostel  <i class="fa fa-mars" aria-hidden="true"></i>
                </div>
                <div class="col">
                <input type="radio" class="form-check-input" placeholder="Ladies hostel" name="Gender" value="Ladies" id="Gender" required><i class="fa fa-venus" aria-hidden="true"></i>
                Ladies Hostel
                </div>
                </div>
    
                <!------Hostel------>
                <div class="input-group input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-graduation-cap" aria-hidden="true"></i>
                    </span>
                    <select class="form-control" aria-label="Default select example" name="Hostel" required>
                        <option selected>Hostel</option>
                        <option value="AI">Dheeran</option>
                        <option value="Automobile">Valluvar</option>
                        <option value="Civil">Bharathi</option>
                        <option value="Chemical">Ponnar</option>
                        <option value="CSE">Shankar</option>
                        <option value="CT-UG">Ilango</option>
                        <option value="CT-PG">Kamban</option>
                        <option value="E&I">E&I</option>
                        <option value="ECE">ECE</option>
                        <option value="IT">IT</option>
                        <option value="FT">FT</option>
                        <option value="Mechanical">Mechanical</option>
                        <option value="Mechatronics">Mechatronics</option>
                      </select><br>
                    </div>

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
                        
                        <div class="field">
                           <input class="btn" type="submit" name="" onclick="matchPassword()" action="adminregistration.php" value="Register"> </div>
                           <form action="studentlogin.html">
                            <div class="field">
                              <input class="btn" type="submit" name="" value="Login">
                              </div>    
                          </form>
                        </div>
            </div>
        </form> 

</body>
</html>