        <!-- main content start -->

        <div class="page-wrapper cardhead ">
            <div class="content container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col">
                            <h3 class="page-title">Student Login Registration</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item active">Student Login Registration</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-6 d-flex">
                        <div class="card flex-fill">
                            <div class="card-header">
                                <h5 class="card-title">Student Login Registration</h5>
                            </div>
                            <div class="card-body">
                                <form action="#">
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
                                        <label class="col-lg-3 col-form-label">Email Address</label>
                                        <div class="col-lg-9">
                                            <input type="email" class="form-control" />
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
                                        <label class="col-lg-3 col-form-label">Password</label>
                                        <div class="col-lg-9">
                                            <input type="password" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Repeat Password</label>
                                        <div class="col-lg-9">
                                            <input type="password" class="form-control" />
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




        <script>
            $(document).ready(function() {
                // activate the sidebar
                $(".studentRegistration").addClass("active");
            });
            
        </script>