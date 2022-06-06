<?php
session_start();
require('engines/connection.php');


 $emp_id=$_GET['empinfo'];
 if ($emp_id=="") {
    header('Location: all_Employee.php');
 }
$ret=mysqli_query($conn,"select * from emp_tbl where emp_id='$emp_id'");

$count = mysqli_num_rows($ret); 
if($count==0){
    header('Location: all_Employee.php');
}

$row=mysqli_fetch_array($ret);




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

    <title>Employee Info</title>
</head>

<body>
    <?php include 'nav.php'; ?>
    <div class="row mt-3">
        <div class="container">
            <div class="col-12-md">
                <h3>Employee Informations</h3>
            </div>
            <div class="col-6-md">
                <div class="float-right bg-secondary p-1">
                    <img src="img/user.png" width="150px" height="150px;">
                </div>
            </div>
        </div>
    </div>

    <form action="">
                <div class="row p-3 m-5">
                    <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <label for="name">Fullname:</label>
                                <input type="text" name="" value="<?php echo $row['fullname']; ?>" class="form-control" disabled>
                            </div>
                            <div class="form-group">
                            <label for="address">Department</label>
                            <input type="text" name="" class="form-control" value="<?php echo $row['department']; ?>" readonly>
                        </div>
                            <div class="form-group">
                                <label for="date">Birth date:</label>
                                <input type="date" name="" value="<?php echo $row['birthdate']; ?>" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="N_ID">National ID #:</label>
                                <input type="text" name="" value="<?php echo $row['nat_id']; ?>" class="form-control" readonly>
                            </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="form-group">
                            <label for="email">Email address:</label>
                            <input type="email" name="" class="form-control" value="<?php echo $row['email']; ?>" readonly>
                        </div>

                        <!-- <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" name="" value="<?php echo $row['address']; ?>" class="form-control">
                        </div> -->
                        <div class="form-group">
                            <label for="address">Marital Status</label>
                            <input type="text" name="" value="<?php echo $row['marital_status']; ?>" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="address">Pention Fund:</label>
                            <input type="text" value="<?php echo $row['pention_fund']; ?>" name="" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="form-group">
                            <label for="position">position:</label>
                            <input type="text" name="" class="form-control" value="<?php echo $row['position']; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number:</label>
                            <input type="text" name="" value="<?php echo $row['phone_number']; ?>" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="address">Gender</label>
                            <input type="text" name="" value="<?php echo $row['gender']; ?>" class="form-control" readonly>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <a href="all_Employee.php"><button class="btn btn-primary">Back</button></a>
                            </div>
                        </div>
                    </div>
            </form>

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script type="text/javascript" src="styles/js/bootstrap.min.js"></script>
</body>

</html>

