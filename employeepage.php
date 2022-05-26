<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="styles/css/bootstrap.min.css">
    <link rel="stylesheet" href="">

    <title>Employee | home</title>
</head>

<body>
    <!-- Topnav-bar -->
    <?php include 'nav.php'; ?>
    <div class="row mt-3">
        <div class="container">
            <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">Attention!</h4>
                <p>Click Checkin to add your todays attendence<br>Please fill the form below if you will not be present
                    on the office </p>
                <a href="employeedashboard.php"><button type="button" class="btn btn-success">Check-in</button></a>
                <hr>
                <p class="mb-0">Make sure your request is granted by your HR officer..Have a nice Day</p>
            </div>
        </div>


        <div class="container mb-5">
            <div class="card w-50 mx-auto">
                <h5 class="card-header">permission Form</h5>
                <div class="card-body">
                    <!-- <h5 class="card-title">select your login</h5> -->
                    <p class="card-text">
                    <div class="form-group">
                        <label for="">Permission Type</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option selected disabled>Choose option</option>
                            <option>Office Issue</option>
                            <option>Emergency</option>
                            <option>Sickness</option>
                            <option>Family Issues</option>
                            <option>Others</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">More information</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <label for="">Starting Time</label>
                            <input type="date" class="form-control" placeholder="First name">
                        </div>
                        <div class="col">
                            <label for="">End Time</label>
                            <input type="date" class="form-control" placeholder="Last name">
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </p>

                </div>
            </div>
        </div>



    </div>
    </div>

    <!-- Optional JavaScript -->
    <script type="text/javascript" src="styles/js/bootstrap.min.js"></script>
</body>

</html>