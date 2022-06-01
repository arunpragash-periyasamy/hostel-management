<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel duration</title>

   
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
        <center><p><strong>Add Fees Details</strong></p></center>
        <form action="php/AddFeesDetails.php" class="" method="post"  oninput='Cpassword.setCustomValidity(Cpassword.value != password.value ? "Passwords do not match." : "")'>
            
            
                <!------Department------>
                <div class="input-group input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-graduation-cap" aria-hidden="true"></i>
                    </span>
                    <select class="form-control" aria-label="Default select example" name="Department" required>
                        <option value=""disabled selected hidden>Department</option>
                        <option value="AI">AI</option>
                        <option value="Automobile">Automobile</option>
                        <option value="Civil">Civil</option>
                        <option value="Chemical">Chemical</option>
                        <option value="CSE">CSE</option>
                        <option value="CT-UG">CT-UG</option>
                        <option value="CT-PG">CT-PG</option>
                        <option value="E&I">E&I</option>
                        <option value="ECE">ECE</option>
                        <option value="IT">IT</option>
                        <option value="FT">FT</option>
                        <option value="Mechanical">Mechanical</option>
                        <option value="Mechatronics">Mechatronics</option>
                      </select><br>
                    </div>


                    
                <!------Department------>
                <div class="input-group input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-graduation-cap" aria-hidden="true"></i>
                    </span>
                    <select class="form-control" aria-label="Default select example" name="Year" required>
                        <option value=""disabled selected hidden>Year</option>
                        <option value="I">I</option>
                        <option value="II">II</option>
                        <option value="III">III</option>
                        <option value="IV">IV</option>
                        <option value="V">V</option>
                      </select><br>
                    </div>



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
                <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-calendar" aria-hidden="true"></i>
                </span>
                <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="BookingFrom" name="BookingFrom" placeholder="Enter the date From" required>
            </div>
                <div class="input-group input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-calendar" aria-hidden="true"></i>
                </span>
                <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="Vacate" name="Vacate" placeholder="Enter the date for vacate"  required>
            </div>
            
                <div class="input-group input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-users" aria-hidden="true"></i>
                </span>
                <input type="price" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="Fees" name="Fees" placeholder="Enter the Fees"  required>
            </div>
           <!------Login Button----->
                        
           <div class="field">
                <input class="btn" type="submit" name=""  value="Add Details"> </div> 
        </form>
    </div> 
    </div>
</body>
</html>