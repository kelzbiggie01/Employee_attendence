<?php
    session_start();
    $page = "employee";
    require 'engines/connection.php';

    if(isset($_POST['submit'])){
        if ($_POST['new_pass'] == $_POST['con_pass']) {
            $admin_id = $_SESSION['emp_id'];
            $new_pass = $_POST['new_pass'];
            $old_pass = $_POST['old_pass'];
            
            $query = "update admin_tbl set password = '$new_pass' where admin_id = '$admin_id' and password = '$old_pass'";
                if (mysqli_query($conn,$query)) {
                    @$msg = "<div class='col-md-6 mx-auto bg-success'>
                    <p style='color: #fff;font-size: 20px;font-weight: 800;'>password Changed Successfull</p>
                </div>";
                }else{
                    die("Die");
                }
        }else{
            @$msg = "<div class='col-md-6 mx-auto bg-danger'>
                    <p style='color: #fff;font-size: 20px;font-weight: 800;'>password didnt match</p>
                </div>";
        }

    }

    ?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Admin | Employee Attendence</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
        <style type="text/css">
    .rectangle {
        background-color: #80bfff;
        padding: 10px;
        border-radius: 3px;

    }

    .rectangle:hover {
        background-color: #000000;

    }
    .inner{
        color: #ffffff;
    }
    .txt{
        font-size: 30px;
        font-weight: 900;
    }
    </style>
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<?php include 'sidenav.php'; ?>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <?php include 'topnav.php'; ?>
        
        <div class="container">
            <h2>Change Password</h2>
            <form action="" method="POST">
                
                <?php echo @$msg; ?>
                <div class="col-md-6 mx-auto mt-3">
                <div class="form-group">
                    <label for="">Old Password:</label>
                      <input type="password" name="old_pass" class="form-control" placeholder="Enter Old Password" required>
                </div>
            </div>

            <div class="col-md-6 mx-auto">
                <div class="form-group">
                    <label for="">New Password:</label>
                      <input type="password" name="new_pass" class="form-control" placeholder="Enter New Password" required>
                </div>
            </div>

            <div class="col-md-6 mx-auto">
                <div class="form-group">
                    <label for="">Confirm Password:</label>
                      <input type="password" name="con_pass" class="form-control" placeholder="Confirm Password" required>
                </div>
            </div>
            <div class="col-md-6 mx-auto">
                <div class="form-group">
                    <input type="submit" class="btn btn-success" name="submit" value="Change">
                </div>
            </div>
            </form>
        
    </div>

        
      </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>