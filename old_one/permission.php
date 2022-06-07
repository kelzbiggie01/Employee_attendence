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
      echo "yaaaaahhaaaaa";
      exit();
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

    <title>Permission</title>
</head>

<body>
    <?php 
    $page = "index";
    if($page == "index"){
        include 'nav.php'; 
    }
    ?>
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

                    <div class="form-row">
                        <div class="col">
                            <label class="btn-success">Accept</label>
                            <input type="radio" name="permission" class="form-control" value="1">
                        </div>
                        <div class="col">
                            <label class="btn-danger">Denied</label>
                            <input type="radio" name="permission" class="form-control" value="2">
                        </div>
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

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script type="text/javascript" src="styles/js/bootstrap.min.js"></script>
</body>

</html>