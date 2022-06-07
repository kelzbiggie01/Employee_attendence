<?php
    //require connection first
    require('connection.php');

    //get data from htmlform
	$name = $_POST['name'];
    $department = $_POST['department'];
    $b_date = $_POST['b_date'];
    $nat_id = $_POST['nat_id'];
    $email = $_POST['email'];
    $address = $_POST['address'];//doest goes any where
    $marital_status = $_POST['marital_status'];
    $pention = $_POST['pention'];
    $position = $_POST['position'];
    $phn_number = $_POST['phn_number'];
    $gender = $_POST['gender'];

    $query = "INSERT into emp_tbl (fullname,email,password,position,department,phone_number,birthdate,marital_status,gender,nat_id,pention_fund) VALUES ('$name','$email','$phn_number','$position','$department','$phn_number','$b_date','$marital_status','$gender','$nat_id','$pention')";
    


    if (mysqli_query($conn, $query)) {
    echo "<script> alert('New Employee added successfully'); window.location='../add_employee.php'</script>";
     } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);

?>