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
  <?php include 'header.php'; ?>
        <!-------Form Creation for Student Registration ------>
        <form action="#" method="post" class="box" oninput='Cpassword.setCustomValidity(Cpassword.value != password.value ? "Passwords do not match." : "")'>

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
              
              
              <!------Branch------>
              <div class="input-group input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-graduation-cap" aria-hidden="true"></i>
                </span>
                <select class="form-control" aria-label="Default select example" name="Branch" required>
                    <option value=""disabled selected hidden>Branch</option>
                    <option value="B.E">B.E</option>
                    <option value="B.Tech">B.Tech</option>
                    <option value="M.E">M.E</option>
                    <option value="MBA">MBA</option>
                    <option value="MCA">MCA</option>
                    <option value="B.Sc">B.Sc</option>
                    <option value="M.Sc">M.Sc</option>
                  </select><br>
                </div>

                  
              
              <!------Course------>
                <div class="input-group input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-graduation-cap" aria-hidden="true"></i>
                    </span>
                    <select class="form-control" aria-label="Default select example" name="Course" required>
                        <option value=""disabled selected hidden>Course</option>
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
                      

                    
              <!------Blood Group------>
              <div class="input-group input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-graduation-cap" aria-hidden="true"></i>
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
                <textarea class="form-control" id="Address" placeholder="Enter the Address" rows="3" required></textarea>
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
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="GuardianContact" placeholder="Contact Number" min="10" max="10" required>
              </div><br>
            <div class="input-group input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-user" aria-hidden="true"></i>
                </span>
                <textarea class="form-control" id="Address" placeholder="Enter the Local Guardian Address" rows="3"></textarea>
              </div><br>

            <!------KVB Account No-------->
            <div class="input-group input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-user" aria-hidden="true"></i>
                </span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="KVBAcc" placeholder="KVB Account number" required>
              </div><br>

              <!-- Computer -->
              <div class="tex">
                <label>Do You Posses </label>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Computer" id="Computer">
                  <label class="form-check-label" for="Computer">
                    Computer
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Ironbox" id="Ironbox" >
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
                <input class="form-check-input" type="radio" name="Parent" id="Phy" value="Yes" checked>
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
                <input type="file" class="form-control-file" id="Profile" required>
              </div><br>
              
                    <!------ Profile-------->
                    <div class="input-group input-group mb-3">
                      <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-user" aria-hidden="true"></i>
                      </span>
                        <input type="file" class="form-control" name="Profile" placeholder="Profile_Picture" id="Profile"  required>
                      </div>

                        <!------Login Button----->
                        
                        <div class="field">
                           <input class="btn" type="submit" name="" value="Admission"> </div>
                        </div>
                      </form>
</body>
</html>