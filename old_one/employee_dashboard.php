<?php
session_start();

$page = "employee"; 

require 'engines/connection.php';
$emp_id = $_SESSION['emp_id'];
$last_id = $_SESSION['last_id'];

//the fetch query
$query = mysqli_query($conn,"SELECT * FROM emp_attendence_tbl WHERE emp_id=$emp_id ORDER BY emp_attendenc_id DESC LIMIT 5");

if (isset($_POST['checkout'])) {
    $k = date("H:i");

    $sql = "UPDATE emp_attendence_tbl SET check_out_time='$k' WHERE emp_attendenc_id='$last_id'";

if (mysqli_query($conn, $sql)) {
  echo "<script> alert('GoodBye you have successfully Checkout'); window.location='employee_page.php'</script>";
} else {
  echo "Error: Failed to checkout ".$sql . mysqli_error($conn);
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

    <title>Employee | Dashboard</title>
</head>

<body>
    <!-- Topnav-bar -->
    <?php include 'nav.php'; ?>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <!-- <div class="alert alert-success" role="alert">
                    Hi welcome username <?php echo date("H:i"); ?>
                </div> -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="">
                    <h5>Your last seven checkin</h5>
                </div>
            </div>
            <div class="col-md-6">
                <form action="" method="POST">
                    <div class="">
                    <button type="submit" name="checkout" class="btn btn-primary float-md-right mb-2">Check-out</button>
                </div>
                </form>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="">
                    <div class="col-md-12">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Fullname</th>
                                    <th scope="col">Check-In Date</th>
                                    <th scope="col">Checkin Time</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $NO = 1;
                                while ($row = mysqli_fetch_array($query)) {
    
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $NO; ?></th>
                                    <td><?php echo $row['fullname']; ?></td>
                                    <td><?php echo $row['check_in_date']; ?></td>
                                    <td><?php echo $row['check_in_time']; ?></td>
                                    <td><?php if($row['status']>=1){echo "late";}else{echo "early";} ?></td>
                                </tr>
                                <?php
                                    $NO++;
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-4 bg-primary">
                permission
            </div>

            <div class="col-md-4 bg-warning">
                absents
            </div>
            <div class="col-md-4 bg-success">
                totoal check-in
            </div>
            
        </div>
    </div>
    </div>

    <!-- Optional JavaScript -->
    <script type="text/javascript" src="styles/js/bootstrap.min.js"></script>
</body>

</html>