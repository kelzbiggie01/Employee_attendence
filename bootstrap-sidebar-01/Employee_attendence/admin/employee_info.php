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
    header('Location: all_employee.php');
}
$row=mysqli_fetch_array($ret);

if (@$_POST['submit']) {
    $position = $_POST['position'];

    
    $query1 = "update emp_tbl set position='$position' where emp_id='$emp_id'";
    // $updat = mysqli_query($conn,$query1);
    if (mysqli_query($conn,$query1)) {
        @$msg='<div class="alert alert-success mt-3" role="alert">Position was changed successfully</div>';
    }else{
        @$msg='<div class="alert alert-danger" role="alert">Sorry something went wrong try again</div>';    
    }

    
    
}
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Adimn | Employee Attendence</title>
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
            <div class="col-12-md">
                <h3>Employee Informations</h3>
            </div>
            <div class="col-6-md">
                <div class="float-right text-dark p-1">
                    <img src="img/user.png" width="150px" height="150px;">
                </div>
            </div>
        </div>
    </div>

    <form action="" method="POST">
        <?php echo @$msg; ?>
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
                            <input type="text" name="position" class="form-control" value="<?php echo $row['position']; ?>">
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
                                <input type="submit" name="submit" class="btn btn-success" value="Update">
                            </div>
                        </div>
                    </div>
            </form>

        
      </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>