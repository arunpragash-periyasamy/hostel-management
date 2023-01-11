<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>
    <?php 
        include './files/styles.html';
    ?>
    <style>
    .buttons {
        margin-right: 100px;
    }

    </style>
</head>

<body>
    <div class="main-wrapper">
        <?php
            // include './files/header.html';
        ?>

        <!-- main content start -->
    <div class="page-wrapper cardhead ">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Student Login</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active">Student Login</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-6 d-flex">
                    <div class="card flex-fill">
                        <div class="card-header">
                            <h5 class="card-title">Student Login</h5>
                        </div>
                        <div class="card-body">
                            <form action="#">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Student Roll Number</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Password</label>
                                    <div class="col-lg-9">
                                        <input type="password" class="form-control" />
                                    </div>
                                </div>

                                <div class="text-end">

                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                </div>
                                <button type="button" class="btn btn-primary ">
                                    Registration
                                </button>
                                <button type="button" class="btn btn-primary">
                                    Forget Password
                                </button>

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
</body>

</html>