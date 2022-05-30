<?php
    session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="styles/css/bootstrap.min.css">
    <link rel="stylesheet" href="">

    <title>Add Employee</title>
</head>

<body>
    <!-- Topnav-bar -->
    <?php include 'nav.php'; ?>
    <div class="row mt-3">
        <div class="container bg-secondary p-2">
            <div class="row p-3">
                <div class="col">
                    <h2>Add Empolyee Details </h2>
                </div>
            </div>

            <form action="engines/pro_add_employee.php" method="POST">
                <div class="row p-3">
                    <div class="col-sm-12 col-md-4">
                        <form>
                            <div class="form-group">
                                <label for="name">Fullname:</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Fullname">
                            </div>
                            <div class="form-group">
                                <label for="sel1">Select Department:</label>
                                <select class="form-control" name="department" id="sel1">
                                    <option>Software Development</option>
                                    <option>Marketing</option>
                                    <option>Networking</option>
                                    <option>Human Reasource</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="date">Birth date:</label>
                                <input type="date" name="b_date" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="N_ID">National ID #:</label>
                                <input type="text" name="nat_id" class="form-control" placeholder="National ID">
                            </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="form-group">
                            <label for="email">Email address:</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter email" id="email">
                        </div>

                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" name="address" class="form-control" placeholder="Address">
                        </div>
                        <div class="form-group">
                            <label for="marital status">marital status:</label>
                            <select class="form-control" name="marital_status">
                                <option disabled selected>Choose Status</option>
                                <option>single</option>
                                <option>marride</option>
                                <option>divorced</option>
                                <option>widow</option>
                                <option>widower</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Pention Fund">Pention Fund:</label>
                            <select class="form-control" name="pention">
                                <option disabled selected>Choose fund</option>
                                <option>PSPF</option>
                                <option>NSSF</option>
                                <option>NHC</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="form-group">
                            <label for="position">position:</label>
                            <input type="text" name="position" class="form-control" placeholder="position">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number:</label>
                            <input type="text" name="phn_number" class="form-control" placeholder="Phone number">
                        </div>
                        <div class="form-group pt-4">
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="gender" value="male">Male
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="gender" value="female">Female
                                </label>
                            </div>
                        </div>
                        <div class="row m-3">
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-primary">submit</button>
                            </div>
                        </div>
                    </div>
            </form>
        </div>


    </div>

    </div>
    </div>

    <!-- Optional JavaScript -->
    <script type="text/javascript" src="styles/js/bootstrap.min.js"></script>
</body>

</html>