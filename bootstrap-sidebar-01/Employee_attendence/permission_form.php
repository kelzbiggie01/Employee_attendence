<?php
    session_start();
    $page = "employee";
    require 'engines/connection.php';


    if (isset($_POST['submit'])) {
        $emp_id = $_SESSION['emp_id'];
        $emp_fullname = $_SESSION["emp_username"];
        $permission_type = $_POST['permission_type'];
        $description = mysqli_real_escape_string($conn,$_POST['description']);
        $starting_date = $_POST['starting_date'];
        $end_date = $_POST['end_date'];
        $submit_date = date("d/m/y");

        $query = "INSERT into emp_permission_tbl (emp_id,fullname,permission_type,description,date_submitted,starting_date,end_date) VALUES ('$emp_id','$emp_fullname','$permission_type','$description','$submit_date','$starting_date','$end_date')";

        if (mysqli_query($conn, $query)) {
            echo "<script> alert('Your Request Has been submitted'); window.location='checkin_page.php'</script>";
     } else {
        echo "<script> alert('Sorry you cant send two permission per day'); window.location='checkin_page.php'</script>";
    }
    }

    ?>

<!doctype html>
<html lang="en">
  <head>
    <title>Employee Attendence</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
        
        <div class="wrapper d-flex align-items-stretch">
            <?php include 'sidenav.php'; ?>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <?php include 'topnav.php'; ?>
        

        <div class="row mt-3">
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
        </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>