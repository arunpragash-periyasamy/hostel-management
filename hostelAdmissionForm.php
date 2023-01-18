<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel Admission</title>
    <?php 
        include './files/styles.html';
    ?>
</head>

<body>

<div id="global-loader">
      <div class="whirly-loader"></div>
    </div>
    
    <div class="main-wrapper">
        <?php
            include './files/header.html';
        ?>

        <!-- main content start -->

        <div class="page-wrapper cardhead ">
            <div class="content container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col">
                            <h3 class="page-title">Hostel Admission Form</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item active">Hostel Admission Form</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Hostel Registration Form</h5>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Personal Information</h5>
                                <form action="#" id="hostelAdmissionForm">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Student Name</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Student Roll Number</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Date Of Birth</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Gender</label>
                                                <div class="col-lg-9">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="gender"
                                                            id="gender_male" value="option1" checked />
                                                        <label class="form-check-label" for="gender_male">
                                                            Male
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="gender"
                                                            id="gender_female" value="option2" />
                                                        <label class="form-check-label" for="gender_female">
                                                            Female
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Blood Group</label>
                                                <div class="col-lg-9">
                                                    <select class="select">
                                                        <option>Select</option>
                                                        <option value="1">A+</option>
                                                        <option value="2">O+</option>
                                                        <option value="3">B+</option>
                                                        <option value="4">AB+</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Course</label>
                                                <div class="col-lg-9">
                                                    <select class="select">
                                                        <option>Select</option>
                                                        <option value="1">A+</option>
                                                        <option value="2">O+</option>
                                                        <option value="3">B+</option>
                                                        <option value="4">AB+</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Branch</label>
                                                <div class="col-lg-9">
                                                    <select class="select">
                                                        <option>Select</option>
                                                        <option value="1">A+</option>
                                                        <option value="2">O+</option>
                                                        <option value="3">B+</option>
                                                        <option value="4">AB+</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Year</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Email Id</label>
                                                <div class="col-lg-9">
                                                    <input type="password" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Mobile Number</label>
                                                <div class="col-lg-9">
                                                    <input type="password" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <h5 class="card-title">Parent / Guardian Details</h5>

                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Name of the person</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Contact Number</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Occupation</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Relationship</label>
                                                <div class="col-lg-9">
                                                    <select class="select">
                                                        <option>Select</option>
                                                        <option value="1">Father</option>
                                                        <option value="2">Mother</option>
                                                        <option value="3">Guardian</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Address Line 1</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Address Line 2</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Address Line 3</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">State</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">City</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">PIN Code</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <h5 class="card-title">Local Guardian Details (if any)</h5>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Name of the person</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Contact Number</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Occupation</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Relationship</label>
                                                <div class="col-lg-9">
                                                    <select class="select">
                                                        <option>Select</option>
                                                        <option value="1">Uncle</option>
                                                        <option value="2">Aunty</option>
                                                        <option value="3">Brother</option>
                                                        <option value="2">Sister</option>
                                                        <option value="3">Others</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Address Line 1</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Address Line 2</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Address Line 3</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">State</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">City</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">PIN Code</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xl-6">
                                            <h5 class="card-title">Other Details</h5>

                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">KVB Account Number</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>

                                            
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Computer/Laptop</label>
                                                <div class="col-lg-9">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="gender"
                                                            id="gender_male" value="option1" checked />
                                                        <label class="form-check-label" for="gender_male">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="gender"
                                                            id="gender_female" value="option2" />
                                                        <label class="form-check-label" for="gender_female">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Iron Box</label>
                                                <div class="col-lg-9">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="gender"
                                                            id="gender_male" value="option1" checked />
                                                        <label class="form-check-label" for="gender_male">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="gender"
                                                            id="gender_female" value="option2" />
                                                        <label class="form-check-label" for="gender_female">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <button type="submit" class="btn btn-primary">
                                            Submit
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main content ends -->



    </div>
    <?php 
        include './files/script.html';
    ?>
    <script>

    $(document).ready(function() {
        // activate the sidebar
        $(".header").removeClass("active");
        $(".hostelAdmission").addClass("active");
    });
    </script>
</body>

</html>