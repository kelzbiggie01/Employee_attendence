
<?php
require('engines/connection.php');

if(isset($_POST['login'])){
  //to prevent from mysqli injection  
        $username = stripcslashes($_POST['username']);  
        $password = stripcslashes($_POST['password']);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);

    
  $query = "SELECT * FROM admin_tbl WHERE username = '$username' AND password = '$password'";  
        $result = mysqli_query($conn, $query);   

        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result); 
          
        if($count == 1){
            // Start the session
                session_start();
                $_SESSION['admin_id'] = $row['admin_id'];
                $_SESSION["admin_username"] = $row['username'];

            header('Location: dashboard.php');

        }else{
            @$msg = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  				<strong>Sorry</strong> Your Password didnt match
  				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    			<span aria-hidden="true">&times;</span>
  					</button>
				</div>';
        }  
}


?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Admin | Employee Attendence</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Employee Attendence</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      		<?php echo @$msg; ?>
		      	<h3 class="text-center mb-4">Admin Login</h3>
						<form action="" class="login-form" method="POST">
		      		<div class="form-group">
		      			<input type="emai" name="username" class="form-control rounded-left" placeholder="Username" required>
		      		</div>
	            <div class="form-group d-flex">
	              <input type="password" name="password" class="form-control rounded-left" placeholder="Password" required>
	            </div>
	            <div class="form-group">
	            	<button type="submit" name="login" class="form-control btn btn-primary rounded submit px-3">Login</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
	            		<label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#">Forgot Password</a>
								</div>
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

