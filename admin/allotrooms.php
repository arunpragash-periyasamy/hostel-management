<?php
include '../php/conn.php';
error_reporting(0);
if(isset($_POST['submit'])){
    $Gender=$_POST['Gender'];
    $Hostel=$_POST['Hostel'];
    $Branch=$_POST['Branch'];
    $Course=$_POST['Course'];
    $Year=$_POST['Year'];

    $sql1="SELECT * from allotrooms where Hostel='$Hostel'";
    $res1=mysqli_query($conn,$sql1);
    if(mysqli_num_rows($res1)>0){
        $sql="UPDATE allotrooms SET Gender='$Gender',Hostel='$Hostel',Branch='$Branch',Course='$Course',Year='$Year' WHERE Hostel='$Hostel'";
        echo '<script> alert("Update the Entry"); window.location.href = "allotrooms.php";</script>';
    }
    else{
    $sql="INSERT INTO allotrooms(Gender, Hostel,  Branch, Course, Year) VALUES ('$Gender','$Hostel','$Branch','$Course','$Year')";
    $res=mysqli_query($conn,$sql);
    echo '<script> alert("Preferences alloted"); window.location.href = "allotrooms.php";</script>';
}
}
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Allot Rooms</title>

   
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
        <center><h1 style="color:#08fc8a;"><strong>Allot rooms</strong></h1></center>
        <form action="" class="" method="post"  oninput='Hostel.setCustomValidity(Hostel.value == Hostel1.value ? "Preferences should not be same." : "")'>
            

        
            <!--------Gender-------->
            <div class="input-group input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-transgender" aria-hidden="true"></i>
                </span>
                <select class="form-control" id="main_menu1" aria-label="Default select example" name="Gender" required>
                    <option value=""disabled selected hidden>Gender</option>
                    <option value="Boy">Boy</option>
                    <option value="Girl">Girl</option>
                    <option value="TG">Transgender</option>
                  </select><br>
                </div>



            <div class="input-group input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-bed" aria-hidden="true"></i>
                </span>
                <select name="Hostel" id="sub_menu1" aria-label="Default select example" name="Hostel" class="form-control">
                <!-- <select class="form-control"  id="sub_menu" name="Hostel" required> -->
                <option value=""disabled selected hidden>Hostel</option>
                </select>
            </div>
          
                
              <!------Branch------>
              <div class="input-group input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-graduation-cap" aria-hidden="true"></i>
                </span>
                <select class="form-control" id="main_menu" aria-label="Default select example" name="Branch" required>
                    <option value=""disabled selected hidden>Branch</option>
                    <option value="BE">BE</option>
                    <option value="BTech">BTech</option>
                    <option value="MTech">MTech</option>
                    <option value="ME">ME</option>
                    <option value="MBA">MBA</option>
                    <option value="MCA">MCA</option>
                    <option value="BSc">B.Sc</option>
                    <option value="MSc">M.Sc</option>
                  </select><br>
                </div>

                  
              
              <!------Course------>
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
                      


           <!------Login Button----->
                        
           <div class="field">
                <input class="button" type="submit" name="submit"  value="Add Rooms"> </div> 
        </form>
    </div> 
    </div>
</body>
</html>