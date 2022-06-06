<?php
    session_start();
    $page = "employee";
    require 'engines/connection.php';

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
        <div class="row p-3">
            <h2>homepage</h2>
        </div>
        <div class="row mt-2 p-3">
            <div class="col-sm-12 col-md-4 pb-3">
                <div class="rectangle">
                    <div class="inner p-2 text-right">
                         <span class="txt">45</span><br>
                         <span>Total Employee</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 pb-3">
                <div class="rectangle">
                    <div class="inner p-2 text-right">
                         <span class="txt">45</span><br>
                         <span>Absent Employee</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 pb-3">
                <div class="rectangle">
                    <div class="inner p-2 text-right">
                         <span class="txt">45</span><br>
                         <span>Permited</span>
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