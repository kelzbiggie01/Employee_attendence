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
        background-color: #FF80EE;
        padding: 10px;
        border-radius: 8px;

    }
    </style>

</head>

<body>
    <?php include 'nav.php'; ?>
    <div class="container">
        <div class="row p-3">
            <h2>homepage</h2>
        </div>
        <div class="row mt-2 p-3">
            <div class="col-sm-12 col-md-4 pb-3">
                <div class="rectangle">
                    Total Employee<br>78
                </div>
            </div>
            <div class="col-sm-12 col-md-4 pb-3">
                <div class="rectangle">
                    Employee at work
                </div>
            </div>
            <div class="col-sm-12 col-md-4 pb-3">
                <div class="rectangle">
                    Absent Employee today
                </div>
            </div>
        </div>

        <div class="row mb-3 p-2">
            <div class="col-sm-12 col-md-4 pb-3">
                <div class="rectangle">
                    Permited<br>78
                </div>
            </div>
            <div class="col-sm-12 col-md-4 pb-3">
                <div class="rectangle">
                    Quited/Fired Employee
                </div>
            </div>
            <div class="col-sm-12 col-md-4 pb-3">
                <div class="rectangle">
                    next retire employee
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <script type="text/javascript" src="styles/js/bootstrap.min.js"></script>
</body>

</html>