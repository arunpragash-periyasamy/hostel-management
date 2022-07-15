<?php
include '../php/conn.php';
if(isset($_POST['submit'])){
$Student_Id = $_REQUEST['Student_Id'];
$StudentName = $_REQUEST['StudentName'];
$EmailId = $_REQUEST['EmailId'];
$Gender = $_REQUEST['Gender'];
$Branch = $_REQUEST['Branch'];
$Course = $_REQUEST['Course'];
$password = md5($_REQUEST['password']);


$image = $_FILES["Profile"]["tmp_name"];
$type = pathinfo($image, PATHINFO_EXTENSION);
$data = file_get_contents($image);
$Profile = 'data:image/' . $type . ';base64,' . base64_encode($data);



    $sql="INSERT INTO `student_registration`(`Student_Id`, `StudentName`, `EmailId`, `Gender`, `Branch`, `Course`, `password`, `Profile`) VALUES ('$Student_Id','$StudentName','$EmailId','$Gender','$Branch','$Course','$password','$Profile')";
    mysqli_query($conn,$sql);


//mail sent;

$url = 'http://myclientsinfo.com/arun/mail.php';
$ch = curl_init($url);
$data = array(  'to' => $EmailId,'subject'=>'Kec Hostel Registration' ,   'message' => ' <p>Hi '.$StudentName.',<br> Your student registration has been done successfully.<p>' );
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);
print_r($result );


echo '<script> alert("Student Registration successfully"); window.location.href = "studentlogin.php";</script>';

//Hostel_Rooms
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>

   
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
  <div class="preloader"></div>
        <!-------Form Creation for Student Registration ------>
        <form action="" method="post" enctype="multipart/form-data" class="box" oninput='Cpassword.setCustomValidity(Cpassword.value != password.value ? "Passwords do not match." : "")'>

          <div class="formcss">

            <div class="text">
                <h3 >Student Registration</h3>

            <!-----Student Roll Number------>
                <div class="input-group input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm"> <i class="fa fa-id-card" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Student_Id" placeholder="Student Id"  pattern="[0-9]{2}[A-Z]{3}[0-9]{3}"required>
                  </div><br>
            <!------Student Name-------->
            <div class="input-group input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-user" aria-hidden="true"></i>
                </span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="StudentName" placeholder="Student Name" required>
              </div><br>

              <div class="input-group input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-envelope" aria-hidden="true"></i>
                </span>
                <input type="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="EmailId" placeholder="Enter Mail ID"  required>
              </div><br> 
              
              
            <!--------Gender-------->
            <div class="input-group input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-transgender" aria-hidden="true"></i>
                </span>
            <div class="col" >
                <input type="radio" class="form-check-input" placeholder="Boy" name="Gender" value="Boy" id="Gender" required> Boy  <i class="fa fa-mars" aria-hidden="true"></i>
                </div>
                <div class="col">
                <input type="radio" class="form-check-input" placeholder="Girl" name="Gender" value="Girl" id="Gender" required><i class="fa fa-venus" aria-hidden="true"></i>
                Girl 
                </div>
                <div class="col">
                <input type="radio" class="form-check-input" placeholder="TG" name="Gender" value="TG" id="Gender" required><i class="fa fa-transgender" aria-hidden="true"></i>
                Transgender 
                </div>
                </div>
    
              
              <!------Branch------>
              
              <div class="input-group input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-graduation-cap" aria-hidden="true"></i>
                </span>
                <select class="form-control" aria-label="Default select example" id="main_menu" class="custom-select" name="Branch" required>
                    <option value=""disabled selected hidden>Branch</option>
                    <option value="BE">B.E</option>
                    <option value="BTech">B.Tech</option>
                    <option value="ME">M.E</option>
                    <option value="MTech">M.Tech</option>
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

            
              <!-- Photo -->
              
              
              <div class="input-group input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-user" aria-hidden="true"></i>
                </span>
                <input type="file" class="form-control-file" id="Profile" name="Profile" required>
              </div><br>
              
                       <!------Password-------->
                    <div class="input-group input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                          <input type="password" class="form-control" name="password" placeholder="Password" id="inputPassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                        </div>
                      
                    <!------ Comnfirm Password-------->
                    <div class="input-group input-group mb-3">
                      <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-lock" aria-hidden="true"></i>
                      </span>
                        <input type="password" class="form-control" name="Cpassword" placeholder="Confirm password" id="inputPassword"  required>
                      </div>
                      
                        <!------Login Button----->
                        
                        <div class="field">
                           <input class="button" type="submit" name="submit" value="Admission"> </div>
                        </div>
                      </form>


                      <script>
                        var laoder = document.getElementById('preloader');
                        window.addEventListener("load",function(){
                          loader.style.display= "none";
                        });
                      </script>
                      
</body>
</html>


?>