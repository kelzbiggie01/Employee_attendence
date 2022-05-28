<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Create connection
$conn = mysqli_connect('localhost', 'root', '', 'employee_attendence');
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>