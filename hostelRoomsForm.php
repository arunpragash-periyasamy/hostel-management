<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Hostel Room</title>
    <?php 
        include './files/styles.html';
    ?>
    <style>
    .hide-content {
        display: none;
    }
    </style>
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
                            <h3 class="page-title">Add Hostel Rooms Form</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item active">Add Hostel Rooms Form</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Add Hostel Allocating Form</h5>
                            </div>
                            <div class="card-body">
                                <form action="#" id="hostelAdmissionForm">
                                    <div class="row">
                                        <div class="col-xl-6">

                                            <h5 class="card-title">Hostel Information</h5>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Hostel Name</label>
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
                                                <label class="col-lg-3 col-form-label">Number of Floors</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Number of Rooms</label>
                                                <div class="col-lg-9">
                                                    <input type="password" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Student Capacity (for a single
                                                    room)</label>
                                                <div class="col-lg-9">
                                                    <input type="password" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">

                                            <h5 class="card-title">Hostel Incharge Information</h5>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Depty Warden Name</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Manager Name</label>
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
                                                <label class="col-lg-3 col-form-label">Warden Name</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Warden Contact</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- normal room information -->
                                    <div class="row">
                                        <div class="col-xl-11">
                                            <h5 class="card-title">Floor Information</h5>
                                        </div>
                                        <div class="col-xl-1">
                                            <button type="button" name="addFloorContentButton" class="btn btn-primary">
                                                Add
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row">&nbsp;</div>
                                    <div id="floorContent" class="hide-content">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">Floor Number</label>
                                                    <div class="col-lg-9">
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">Number of rooms</label>
                                                    <div class="col-lg-9">
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="addFloorContent">
                                    </div>


                                    <!-- special room information -->
                                    <div class="row">
                                        <div class="col-xl-11">
                                            <h5 class="card-title">Special Room Information</h5>
                                        </div>
                                        <div class="col-xl-1">
                                            <button type="button" name="addSpecialRoomContentButton"
                                                class="btn btn-primary">
                                                Add
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row">&nbsp;</div>
                                    <div id="specialRoomContent" class="hide-content">
                                        <div class="row">
                                            <div class="col-xl-4">
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">Floor Number</label>
                                                    <div class="col-lg-9">
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">Room number</label>
                                                    <div class="col-lg-9">
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">Student Capacity</label>
                                                    <div class="col-lg-9">
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="addSpecialRoomContent">
                                    </div>



                                    <div class="text-end">
                                        <button type="submit" class="btn btn-primary" disabled>
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

        // adding normal room detail with floor wise information
        var floorContent = $("#floorContent").html();
        $("[name=addFloorContentButton]").on('click', function() {
            $("#addFloorContent").append(floorContent);
        });

        // adding special room information
        var specialRoomContent = $("#specialRoomContent").html();
        $("[name=addSpecialRoomContentButton]").on('click', function() {
            $("#addSpecialRoomContent").append(specialRoomContent);
        });


    });
    </script>
</body>

</html>