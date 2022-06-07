<?php
    session_start();
    $page = "employee";
    require 'engines/connection.php';

    if(isset($_POST['checkin'])){
        $emp_id = $_SESSION['emp_id'];
        $emp_fullname = $_SESSION["emp_username"];
        $checkin_time = date("h:i");
        $timer = date("h");
        $status;

        if($timer < 8 ){
           $status = 0;//status 0 == early
        }
        if ($timer >= 8) {
            $status =1; //status 1 == late
        }

    $query = "INSERT into emp_attendence_tbl (emp_id,fullname,check_in_time,status) VALUES ('$emp_id','$emp_fullname','$checkin_time','$status')";

    if (mysqli_query($conn, $query)) {
        //getting last attendence id to update checkout
        $last_id = mysqli_insert_id($conn);
        $_SESSION['last_id'] = $last_id;
    echo "<script> alert('Hellow Welcome'); window.location='employee_dashboard.php'</script>";
     } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

    }elseif (isset($_POST['submit'])) {
        $emp_id = $_SESSION['emp_id'];
        $emp_fullname = $_SESSION["emp_username"];
        $permission_type = $_POST['permission_type'];
        $description = mysqli_real_escape_string($conn,$_POST['description']);
        $starting_date = $_POST['starting_date'];
        $end_date = $_POST['end_date'];

        $query = "INSERT into emp_permission_tbl (emp_id,fullname,permission_type,description,starting_date,end_date) VALUES ('$emp_id','$emp_fullname','$permission_type','$description','$starting_date','$end_date')";

        if (mysqli_query($conn, $query)) {
            echo "<script> alert('Your Request Has been submitted'); window.location='employee_page.php'</script>";
     } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
    }

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

    <title>Employee | home</title>
</head>

<body>
    <!-- Topnav-bar -->
    <?php include 'nav.php'; ?>
    <div class="row mt-3">
        <div class="container">
            <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">Attention!</h4>
                <p>Click Checkin to add your todays attendence<br>Please fill the form below if you will not be present
                    on the office </p>

                <form action="" method="POST">
                    <div>
                        <button type="submit" name="checkin" class="btn btn-success">Check-in</button>


                        <a href="employee_permission_page.php"><button type="button" class="btn btn-primary ml-5">Check Permission</button></a>
                    </div>
                </form>
                <hr>
                <p class="mb-0">Make sure your request is granted by your HR officer..Have a nice Day</p>
            </div>
        </div>


        <div class="container mb-5">
            <div class="card w-50 mx-auto">
                <h5 class="card-header">permission Form</h5>
                <div class="card-body">
                    <!-- <h5 class="card-title">select your login</h5> -->
                    <form action="" method="POST">
                        <p class="card-text">
                    <div class="form-group">
                        <label for="">Permission Type</label>
                        <select class="form-control" name="permission_type">
                            <option selected disabled>Choose option</option>
                            <option>Office Issue</option>
                            <option>Emergency</option>
                            <option>Sickness</option>
                            <option>Family Issues</option>
                            <option>Others</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>More information</label>
                        <textarea class="form-control" name="description" rows="3"></textarea>
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <label for="">Starting Date</label>
                            <input type="date" class="form-control" name="starting_date">
                        </div>
                        <div class="col">
                            <label for="">End Date</label>
                            <input type="date" class="form-control" name="end_date">
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </p>
                    </form>
                </div>
            </div>
        </div>



    </div>
    </div>

    <!-- Optional JavaScript -->
    <script type="text/javascript" src="styles/js/bootstrap.min.js"></script>
</body>

</html>