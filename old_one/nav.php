<?php
//check if user is login

if(@$_SESSION['admin_id'] == "" AND @$_SESSION['emp_id'] == ""){
  header('Location: index.php');
}


?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">EMPLOYEE ATTENDENCE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <?php if(@$page != "employee"){ echo '
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="all_Employee.php">All Employee</a>
      
      </li>
      <li class="nav-item">
        <a class="nav-link" href="add_employee.php">Add Employee</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="all_permission.php">Permissions</a>
      </li>';
      }
      ?>
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">Reports</a>
      </li> -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>

    <span class="navbar-text">
      <a href="includes/logout.php"><img src="img/user.png" width="30px" height="30px;"></a>
      <label><?php echo @$_SESSION["emp_username"]; echo @$_SESSION['admin_username'];?></label>
    </span>
  </div>
</nav>