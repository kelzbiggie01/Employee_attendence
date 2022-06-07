<?php
session_start();
include 'engines/connection.php';

 $emp_id=$_GET['empinfo'];
 if ($emp_id=="") {
    header('Location: all_permission.php');
 }


$ret=mysqli_query($conn,"select * from emp_permission_tbl where emp_id='$emp_id'");

$count = mysqli_num_rows($ret); 
if($count==0){
    header('Location: all_permission.php');
}

$row=mysqli_fetch_array($ret);

if(@$_POST['submit']){
  
  //use permission id
  $upquery = "update emp_permission_tbl set status=1 where emp_id='$emp_id'";

  if (mysqli_query($conn,$upquery)) {
      echo "<script> alert('Request Responded successfully'); window.location='all_permission.php'</script>";
  }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Permission</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="styles/mystyles.css">
  </head>
  <body>
        
        <div class="wrapper d-flex align-items-stretch">
            <?php include 'sidenav.php'; ?>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <?php include 'topnav.php'; ?>
        <div class="row mt-3">
        <div class="container">
            <div class="card w-50 mx-auto">
                <h5 class="card-header">Grant Permission</h5>
                <div class="card-body">
                    <!-- <h5 class="card-title">select your login</h5> -->
                        <p class="card-text">
                    <div class="form-group">
                        <label for="">Employee Name</label>
                        <input type="text" class="form-control" value="<?php echo $row['fullname']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" value="<?php echo $row['description']; ?>" rows="3" readonly></textarea>
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <label for="">Starting Date</label>
                            <input type="date" class="form-control" value="<?php echo $row['starting_date'];?>" readonly>
                        </div>
                        <div class="col">
                            <label for="">End Date</label>
                            <input type="date" class="form-control" value="<?php echo $row['end_date']; ?>" readonly>
                        </div>
                    </div>

                    <form action="" method="POST">

                    <div class="form-group">
                            <label for="marital status">Permission:</label>
                            <select class="form-control" name="permission">
                                <option disabled selected>Choose Here</option>
                                <option value="1">Permitted</option>
                                <option value="0">Denied</option>
                            </select>
                        </div>

                    <div class="form-group mt-3">
                        <input type="submit" name="submit" value="Save" class="btn btn-primary">
                        </form>
                        <a href="all_permission.php" class="btn btn-danger" style="float: right;">Back</a>
                    </div>
                    </p>
                    
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