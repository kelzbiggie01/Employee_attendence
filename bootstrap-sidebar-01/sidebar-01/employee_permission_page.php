<?php
$page = "employee"; 
session_start();
require 'engines/connection.php';
$emp_id = $_SESSION['emp_id'];

//the fetch query
$query = mysqli_query($conn,"SELECT * FROM emp_permission_tbl WHERE emp_id=$emp_id ORDER BY emp_id DESC" );




?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Sidebar 01</title>
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
        
        <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <!-- <div class="alert alert-warning" role="alert">
                    Hi welcome <?php echo @$_SESSION["emp_username"]; ?>
                </div> -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="">
                    <h5>Here Are your Permissions</h5>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="">
                    <div class="col-md-12">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Permission ID</th>
                                    <th scope="col">Permission Type</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Answerd By</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($query)) {
    
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $row['emp_permission_id']; ?></th>
                                    <td><?php echo $row['permission_type']; ?></td>
                                    <td><?php if($row['status'] == 0){echo "Received";}
                                    elseif ($row['status'] == 1) {
                                        echo "Not Granted";
                                     }elseif ($row['status'] == 2) {
                                        echo "Granted";
                                     } ?></td>
                                    <td><?php echo $row['attended_by']; ?></td>
                                </tr>
                                <?php
                                    
                                } ?>
                            </tbody>
                        </table>
                    </div>
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