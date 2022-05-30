
<?php
require('engines/connection.php');

if(isset($_POST['login'])){
  //to prevent from mysqli injection  
        $username = stripcslashes($_POST['username']);  
        $password = stripcslashes($_POST['password']);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);

    
  $query = "SELECT * FROM emp_tbl WHERE email = '$username' AND password = '$password'";  
        $result = mysqli_query($conn, $query);   

        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){
            // Start the session
                session_start();
                $_SESSION['emp_id'] = $row['emp_id'];
                $_SESSION["emp_username"] = $row['fullname'];


            header('Location: employee_page.php');

        }else{
            die("Sorry wrong username or password");
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

    <title>Home</title>
</head>

<body>
    <?php include 'nav.php'; ?>
    <div class="row mt-3">
        <div class="container">
            <div class="card w-50 mx-auto">
                <h5 class="card-header">Employee login</h5>
                <div class="card-body">
                    <!-- <h5 class="card-title">Special title treatment</h5> -->
                    <p class="card-text">
                    <form action="" method="POST">
                        <div class="form-outline m-3">
                            <input type="text" name="username" class="form-control" placeholder="username" />
                        </div>

                        <div class="form-outline m-3">
                            <input type="password" name="password" class="form-control" placeholder="password" />
                        </div>
                        <div class="form-outline m-3">
                            <button type="submit" name="login" class="btn btn-primary">login</button>
                        </div>
                    </form>
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
