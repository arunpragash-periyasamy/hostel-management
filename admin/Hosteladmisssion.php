<?php
include '../php/conn.php';
// session_start();
if(isset($_POST['submit'])){
$Student_Id = $_REQUEST['Student_Id'];
$StudentName = $_REQUEST['StudentName'];
$EmailId = $_REQUEST['EmailId'];
$Mobile_no = $_REQUEST['Mobile_no'];
$Branch = $_REQUEST['Branch'];
$Course = $_REQUEST['Course'];
$Year = $_REQUEST['Year'];
$Blood = $_REQUEST['Blood'];
$Parent = $_REQUEST['Parent'];
$ParentName = $_REQUEST['ParentName'];
$ParentContact = $_REQUEST['ParentContact'];
$Address = $_REQUEST['Address'];
$GuardianName = $_REQUEST['GuardianName'];
$GuardianContact = $_REQUEST['GuardianContact'];
$GAddress = $_REQUEST['GAddress'];
$KVBAcc = $_REQUEST['KVBAcc'];
$Phy = $_REQUEST['Phy'];  
// $Profile = $_FILES['Profile']['name'];


$image = $_FILES["Profile"]["tmp_name"];
$type = pathinfo($image, PATHINFO_EXTENSION);
$data = file_get_contents($image);
$Profile = 'data:image/' . $type . ';base64,' . base64_encode($data);



if(!$_REQUEST['Ironbox']=="Yes"){
$Ironbox="No";
}
else{
    $Ironbox = $_REQUEST['Ironbox'];
}
if(!$_REQUEST['Computer']=="Yes"){
$Computer="No";
}
else{
$Computer = $_REQUEST['Computer'];
}


    $sql="INSERT INTO admission(Student_Id, StudentName,EmailId,Mobile_no, Branch, Course,Year, Blood, Parent, ParentName, ParentContact, Address,KVBAcc,Computer,Ironbox,Phy,Profile) VALUES ('$Student_Id','$StudentName','$EmailId','$Mobile_no','$Branch','$Course','$Year','$Blood','$Parent','$ParentName','$ParentContact','$Address','$KVBAcc','$Computer','$Ironbox','$Phy','$Profile')";
    mysqli_query($conn,$sql);

if($GuardianName!=""){
$sql1="INSERT INTO guardian(Student_Id, GuardianName, GuardianContact, GAddress) VALUES ('$Student_Id','$GuardianName','$GuardianContact','$GAddress')";
mysqli_query($conn,$sql1);
}


//mail sent;

$url = 'http://myclientsinfo.com/arun/mail.php';
$ch = curl_init($url);
$data = array(  'to' => $EmailId,'subject'=>'Kec Hostel Admission' ,   'message' => ' <p>Hi '.$StudentName.',<br> Your Hostel Admission Request has been Registed Successfully. Please wait for room confirmation as soon as possible.<p>' );
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);
print_r($result );


echo '<script> alert("Request Hostel admission done successfully"); window.location.href = "Feespayment.php";</script>';

//Hostel_Rooms
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Admission</title>

   
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

<?php  
session_start();
error_reporting(0);
if($_SESSION['user']=='admin'){
include 'adminheader.php';
}
else{
include 'managerheader.php';
}
 ?>
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

              <div class="input-group input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-envelope" aria-hidden="true"></i>
                </span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Mobile_no" placeholder="Enter Mobile no" min="10" max="10"  required>
              </div><br> 
              
              
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

                    <!-- Year -->
                <div class="input-group input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-calendar" aria-hidden="true"></i>
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
                      
                    
                    <i class="fa-solid fa-calendar-days"></i>
                    
              <!------Blood Group------>
              <div class="input-group input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm"><i class='fa-solid fa-droplet'></i>
                </span>
                <select class="form-control" aria-label="Default select example" name="Blood" required>
                    <option value=""disabled selected hidden>Blood Group</option>
                    <option value="A+">A+</option>
                    <option value="B+">B+</option>
                    <option value="AB+">AB+</option>
                    <option value="O+">O+</option>
                    <option value="A-">A-</option>
                    <option value="B-">B-</option>
                    <option value="AB-">AB-</option>
                    <option value="O-">O-</option>
                  </select><br>
                </div>

            <!------Parent Name-------->
            <div class="form-check">
                <input class="form-check-input" type="radio" name="Parent" id="Parent" value="Parent" checked>
                <label class="form-check-label" for="Parent">
                  Parent
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Parent" id="Guardian" value="Guardian">
                <label class="form-check-label" for="Guardian">
                  Guardian
                </label>
              </div>
            <div class="input-group input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-user" aria-hidden="true"></i>
                </span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="ParentName" placeholder="Parent Name/Guardian Name" required>
              </div><br>
              </div>
           
              <div class="input-group input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-user" aria-hidden="true"></i>
                </span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="ParentContact" placeholder="Contact Number" min="10" max="10" required>
              </div><br>
            <div class="input-group input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-user" aria-hidden="true"></i>
                </span>
                <textarea class="form-control" id="Address" name="Address" placeholder="Enter the Address" rows="3" required></textarea>
              </div><br>
            
            
            
            <!-- Local Guardian -->
            
              <div class="input-group input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-user" aria-hidden="true"></i>
                </span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="GuardianName" placeholder="Local Guardian Name IF ANY" >
              </div><br>
              <div class="input-group input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-user" aria-hidden="true"></i>
                </span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="GuardianContact" placeholder="Contact Number" min="10" max="10" >
              </div><br>
            <div class="input-group input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-user" aria-hidden="true"></i>
                </span>
                <textarea class="form-control" id="GAddress" name="GAddress" placeholder="Enter the Local Guardian Address" rows="3"></textarea>
              </div><br>

            <!------KVB Account No-------->
            <div class="input-group input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-user" aria-hidden="true"></i>
                </span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="KVBAcc" placeholder="KVB Account number" min="16" max="16" required>
              </div><br>

              <!-- Computer -->
              <div class="tex">
                <label>Do You Posses </label>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Yes" name="Computer" id="Computer">
                  <label class="form-check-label" for="Computer">
                    Computer
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Yes" name="Ironbox" id="Ironbox" >
                  <label class="form-check-label" for="Ironbox">
                    Iron Box
                  </label>
                </div>
              </div>
              <br><br>

              
            <!------Physically challenged-------->
            <div class="tex">
            <label>Physically challenged</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="Phy" id="Phy" value="Yes" required>
                <label class="form-check-label" for="Yes">
                  Yes
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Phy" id="No" value="No">
                <label class="form-check-label" for="No">
                  No
                </label>
              </div>
            </div>

              <!-- Photo -->
              
              
              <div class="input-group input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-user" aria-hidden="true"></i>
                </span>
                <input type="file" class="form-control-file" id="Profile" name="Profile" required>
              </div><br>
              
                    <!------ Profile-------->
                    <div class="input-group input-group mb-3">
                      <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-user" aria-hidden="true"></i>
                      </span>
                        <input type="file" class="form-control" name="Profile" placeholder="Profile_Picture" id="Profile"  required>
                      </div>

                        <!------Login Button----->
                        
                        <div class="field">
                           <input class="button" type="submit" name="submit" value="Admission"> </div>
                        </div>
                      </form>
                      
</body>
</html>