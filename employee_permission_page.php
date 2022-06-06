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
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="styles/css/bootstrap.min.css">
    <link rel="stylesheet" href="">

    <title>Employee | Permission</title>
</head>

<body>
    <!-- Topnav-bar -->
    <?php include 'nav.php'; ?>
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
            <div class="col-md-6">
                    <div class="">
                    <a href="employee_page.php"><button type="submit" class="btn btn-primary float-md-right mb-2">Back</button></a>
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

    <!-- Optional JavaScript -->
    <script type="text/javascript" src="styles/js/bootstrap.min.js"></script>
</body>

</html>