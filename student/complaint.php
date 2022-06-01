<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaint Registration</title>

   
<!--------Bootstrap Link Starting-------->
<!---->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<!------------Bootstrap Ending-------->


    <link rel="stylesheet" href="../css/complaint.css">
</head>
<body>
  <?php include'header.php';?>
        <!-------Form Creation for Student Registration ------>
        <form action="complaints.php" method="post" class="box" oninput='Cpassword.setCustomValidity(Cpassword.value != password.value ? "Passwords do not match." : "")'>

          <div class="formcss">

            <div class="text">
                <h3 >Complaint Registration</h3>

            <!-----Student Roll Number------>
                <div class="input-group input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm"> <i class="fa fa-id-card" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Student_Id" placeholder="Student Id"  pattern="[0-9]{2}[A-Z]{3}[0-9]{3}"required>
                  </div><br>
            <!------Student Name-------->
            <div class="input-group input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-user" aria-hidden="true"></i>
                </span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="StudentName" placeholder="Enter your Name" required>
              </div><br>   

            <!-------Student Mail Id------->
            <div class="input-group input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-envelope" aria-hidden="true"></i>
                </span>
                <input type="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="EmailId" placeholder="Kongu Mail ID" pattern="[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@kongu.edu" required>
              </div><br>     

            <!--------Contact-------->
            <div class="input-group input-group mb-3">
              <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-mobile" aria-hidden="true"></i>
              </span>
              <input type="tel" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Contact" placeholder="Enter your contact number" pattern="[(0|91)?[6-9][0-9]{9}]" required>
            </div><br>  

    
                <!------Category------>
                <div class="input-group input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-list-alt" aria-hidden="true"></i>
                    </span>
                    <select class="form-control" aria-label="Default select example" name="Category" placeholder="Category" required>
                        <option selected>Category</option>
                        <option value="Furniture">Furniture Maintance</option>
                        <option value="Electrical">Electrical Maintance</option>
                        <option value="Civil">Civil Maintance</option>
                        <option value="Serverroom">System Group(Serverroom)</option>
                        <option value="Security">Security</option>
                        <option value="Transport">Transport</option>
                        <option value="Gardening">Gardening</option>
                        <option value="Housekeeping">House Keeping</option>
                      </select><br>
                    </div>
                      
    
                <!------Hostel------>
                <div class="input-group input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-bed" aria-hidden="true"></i>
                    </span>
                    <select class="form-control" aria-label="Default select example" name="Hostel" required>
                        <option selected>Hostel</option>
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
                      
                    <!------location-------->
                    <div class="input-group input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-map-marker" aria-hidden="true"></i>
                        </span>
                          <input type="location" class="form-control" name="location" placeholder="Enter the room no or near by" id="inputlocation"  required>
                        </div>
                      
                    <!------ Nature of the complaint-------->
                    <div class="input-group input-group mb-3">
                      <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-info" aria-hidden="true"></i>
                      </span>
                        <input type="text-area" class="form-control" name="Complaint_Type" placeholder="Nature of the complaint" id="inputComplainttype"  required>
                      </div>

                      <!-- Complaint Description -->
                      <div class="input-group input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-indent" aria-hidden="true"></i>
                      </span>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="Complaint_Description" placeholder="Complaint Description" rows="3"></textarea>
                      </div>
                    

                        <!------Login Button----->
                        
                        <div class="field">
                           <input class="btn" type="submit" name="" value="Submit"> </div>
                        </div>
            </div>
          </div>
        </form> 


</body>
</html>