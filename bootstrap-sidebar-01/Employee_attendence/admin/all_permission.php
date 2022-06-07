<?php 
session_start();
include 'engines/connection.php';
//the fetch query
$query = mysqli_query($conn,"SELECT * FROM emp_permission_tbl");
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
        <div class="container">
        <div class="row mt-3">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <h2> All Permission</h2>

                <table id="myTable">
                    <tr class="header">
                        <th style="width:14%;">Fullname</th>
                        <th>Title</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    <?php
                                 
                                while ($row = mysqli_fetch_array($query)) {
    
                                ?>
                    <tr>
                        <td><?php echo $row['fullname']; ?></td>
                        <td><?php echo $row['permission_type']; ?></td>
                        <td><?php echo $row['starting_date']; ?></td>
                        <td><?php echo $row['end_date']; ?></td>
                        <td><?php if($row['status']>=1){echo "Permitted";}else{echo "Pending";}  ?></td>
                        <td><a href="permission.php?empinfo=<?php echo $row['emp_id'];?>"><span class="bg-primary" style="padding: 3px;border-radius: 10px;color: #fff;" title="Show all information">info</span></a></td>
                    </tr>
                    <?php
                                } ?>
                </table>

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