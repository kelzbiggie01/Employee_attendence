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
    echo "<script> alert('Hellow Welcome have a nice day at work'); window.location='emp_dashboard.php'</script>";
     } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
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
        <div class="container">
            <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">Attention!</h4>
                <p>Click Checkin to add your todays attendence<br>Please fill the form below if you will not be present
                    on the office </p>

                <form action="" method="POST">
                    <div>
                        <button type="submit" name="checkin" class="btn btn-success">Check-in</button>
                    </div>
                </form>
                <hr>
                <p class="mb-0">Make sure your request is granted by your HR officer..Have a nice Day</p>
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