<?php 
session_start();
include 'engines/connection.php';
//the fetch query
$query = mysqli_query($conn,"SELECT * FROM emp_tbl");
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="styles/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/mystyles.css">

    <title>All Employee</title>
</head>

<body>
    <?php include 'nav.php'; ?>
    <div class="container">
        <div class="row mt-3">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <h2> Employee</h2>

                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Employee name">

                <table id="myTable">
                    <tr class="header">
                        <th style="width:14%;">Name</th>
                        <th>Position</th>
                        <th>Department</th>
                        <th>Phone Number</th>
                        <th>Gender</th>
                        <th>Marital Status</th>
                        <th>Nida Number</th>
                        <th>Pention Fund</th>
                        <th>Action</th>
                    </tr>
                    <?php
                                 
                                while ($row = mysqli_fetch_array($query)) {
    
                                ?>
                    <tr>
                        <td><?php echo $row['fullname']; ?></td>
                        <td><?php echo $row['position']; ?></td>
                        <td><?php echo $row['department']; ?></td>
                        <td><?php echo $row['phone_number']; ?></td>
                        <td><?php echo $row['gender']; ?></td>
                        <td><?php echo $row['marital_status']; ?></td>
                        <td><?php echo $row['nat_id']; ?></td>
                        <td><?php echo $row['pention_fund']; ?></td>
                        <td><a href="employee_info.php?empinfo=<?php echo $row['emp_id'];?>"><span class="badge badge-pill badge-info" style="padding: 3px;border-radius: 10px;color: #fff;" title="Show all information">info</span></a></td>
                    </tr>
                    <?php
                                } ?>
                </table>

            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="styles/js/bootstrap.min.js"></script>

    <script>
    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
    </script>
</body>

</html>

<a href="#pat-detail.php?editid=<?php echo $row['pat_id'];?>" title="Assign Medical"><i class="fa fa-medkit" style="font-size: 30px;"></i></a>