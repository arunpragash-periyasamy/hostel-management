<?php
if(isset($_POST['submit'])){
$Branch = $_POST['Branch'];
$Course = $_POST['Course'];
$Year = $_POST['Year'];
$Hostel = $_POST['Hostel'];
$BookingFrom = $_POST['BookingFrom'];
$Vacate = $_POST['Vacate'];
$Fees = $_POST['Fees'];

// database connectivity
include '../php/conn.php';

    $details= $conn->prepare("insert into feesdetails(Branch,Course, Year, Hostel, BookingFrom, Vacate, Fees) values(?,?,?,?,?,?,?)");
    $details->bind_param("sssssss", $Branch ,$Course, $Year, $Hostel, $BookingFrom, $Vacate, $Fees);
    $details->execute();
    $details->close();
    $conn->close();
    echo '<script> alert("Fees Details updated Successfully!"); window.location.href = "#";</script>';

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fees Details</title>

   
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

 
<?php include 'adminheader.php';
?>

    <div class="wrapper">
        <!-------Form Creation for Student Registration ------>
        <center><h3 style="color: white;"><strong>Add Fees Details</strong></h3></center>
        <form action="" class="" method="post"  oninput='Vacate.setCustomValidity(Vacate.value <= BookingFrom.value ? "Booking date is greater than or equal to vacate date." : "")' oninput='BookingFrom.setCustomValidity(<?php echo $date;?>= BookingFrom.value ? "Booking date should not be greater than today." : "")'>
            
            
                <!------Department------>
                
                <div class="input-group input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-graduation-cap" aria-hidden="true"></i>
                </span>
                <select class="form-control" aria-label="Default select example" id="main_menu" class="custom-select" name="Branch" required>
                    <option value=""disabled selected hidden>Branch</option>
                    <option value="BE">B.E</option>
                    <option value="BTech">B.Tech</option>
                    <option value="ME">M.E</option>
                    <option value="MBA">MBA</option>
                    <option value="MCA">MCA</option>
                    <option value="BSc">B.Sc</option>
                    <option value="MSc">M.Sc</option>
                  </select><br>
                </div>

                <div class="input-group input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-graduation-cap" aria-hidden="true"></i>
                    </span>
                <select name="Course" id="sub_menu" aria-label="Default select example" name="Course" class="form-control">
                <!-- <select class="form-control"  id="sub_menu" name="Course" required> -->
                <option value=""disabled selected hidden>Course</option>

                </select>
            </div>

            <script src="dynamic.js"></script>

                    
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
                <?php $today = date("Y-m-d");
                   $last=date('Y-m-d', strtotime($today. ' + 5 months'));
                ?>
                
            <!-- <input type="date" name="rent_start_date" min="" required=""> -->
                <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="BookingFrom" name="BookingFrom" placeholder="Enter the date From" min="<?php echo($today);?>" required>
            </div>
                <div class="input-group input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-calendar" aria-hidden="true"></i>
                </span>
                <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="Vacate" name="Vacate" placeholder="Enter the date for vacate" min="<?php echo $last; ?>"  required>
            </div>
            
                <div class="input-group input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-users" aria-hidden="true"></i>
                </span>
                <input type="price" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="Fees" name="Fees" placeholder="Enter the Fees"  required>
            </div>
           <!------Login Button----->
                        
           <div class="field">
                <input class="btn" type="submit" name="submit"  value="Add Details"> </div> 
        </form>
    </div> 
    </div>
</body>
</html>