<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="styles/css/bootstrap.min.css">
    <link rel="stylesheet" href="">

    <title>Employee | Dashboard</title>
</head>

<body>
    <!-- Topnav-bar -->
    <?php include 'nav.php'; ?>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-success" role="alert">
                    Hi welcome username
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="">
                    <h5>Your last seven checkin</h5>
                </div>
            </div>
            <div class="col-md-6">
                <div class="">
                    <button class="btn btn-primary float-md-right mb-2">Check-out</button>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="">
                    <div class="col-md-12">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Fullname</th>
                                    <th scope="col">Department</th>
                                    <th scope="col">Checkin</th>
                                    <th scope="col">Checkout</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Software development</td>
                                    <td>12/5/2022 08:22</td>
                                    <td>12/5/2022 15:00</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Quality Control</td>
                                    <td>13/5/2022 07:49</td>
                                    <td>12/5/2022 16:23</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>Networking and Infrastructure</td>
                                    <td>14/5/2022 09:00</td>
                                    <td>12/5/2022 18:46</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Kelvin</td>
                                    <td>Human Resource</td>
                                    <td>17/5/2022 08:20</td>
                                    <td>12/5/2022 14:39</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-4 bg-primary">
                permission
            </div>

            <div class="col-md-4 bg-warning">
                absents
            </div>
            <div class="col-md-4 bg-success">
                totoal check-in
            </div>
            
        </div>
    </div>
    </div>

    <!-- Optional JavaScript -->
    <script type="text/javascript" src="styles/js/bootstrap.min.js"></script>
</body>

</html>