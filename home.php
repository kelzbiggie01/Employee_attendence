<?php session_start(); 
include 'engines/connection.php';
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
    <?php include 'nav.php'; 
    //count todays employ


    //count absent employ


    //count permmited

    ?>

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
    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script type="text/javascript" src="styles/js/bootstrap.min.js"></script>
</body>

</html>