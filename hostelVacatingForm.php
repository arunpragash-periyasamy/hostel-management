<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel Vacating</title>
    <?php 
        include './files/styles.html';
    ?>
</head>

<body>
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
                            <h3 class="page-title">Hostel Vacating Form</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item active">Hostel Vacating Form</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Hostel Vacating Form</h5>
                            </div>
                            <div class="card-body">
                                <form action="#" id="hostelAdmissionForm">
                                    <div class="row">
                                        <div class="col-xl-6">

                                            <h5 class="card-title">Student Information</h5>
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
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Belongings Taken
                                                    <input type="checkbox" name="checkbox" /></label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">

                                            <h5 class="card-title">Hostel Information</h5>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Hostel Name</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Room Number</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Date of joining</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Date of vacating</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Hostel Fees Paid</label>
                                                <div class="col-lg-9">
                                                    <select class="select">
                                                        <option>Select</option>
                                                        <option value="1">Online</option>
                                                        <option value="2">Demand Draft(DD)</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">KVB Account Number</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Attach Fees Paid Receipt</label>
                                                <div class="col-lg-9">
                                                    <input type="file" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Reason for Vacating</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" />
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
        $(".hostelVacating").addClass("active");
    });
    </script>
</body>

</html>