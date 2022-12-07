<?php
session_start();
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/doctor_css.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-1.8.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title></title>
</head>
<link rel="stylesheet" href="index-css.css">

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <img src="uploads/logo.PNG" height="80px" width="80px" id="logo" alt="">
        &nbsp;&nbsp;&nbsp;
        <a class="navbar-brand"><b>Welcome <?php echo $_SESSION['active_user']?></b></a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="logout.php" class="btn btn-outline-primary">Logout</a>
                </li>

            </ul>
        </div>
    </nav>

    <div class="container mt-2">
        <div class="row mt-5">
            <div class="form-group col-md-4">
                <div class="card " style="width: 18rem;box-shadow: 5px 5px 30px;color:darkolivegreen;">
                    <img src="uploads/doctor.jpg" class="card-img-top " style="padding:5px;border-radius:10px 10px 10px 10px" width="275px" height="193px" ; alt="...">
                    <div class="card-body">
                       <p class="card-text shadow" style="text-align:center;color:black;font-size:30px;font-weight:bold;">Find Doctor</p>
                        <a href="card-doctor.php" class="btn btn-outline-primary" style="margin-left:80px;">Proceed</a>
                        <br>
                    </div>
                </div>
            </div>
            <div class="form-group col-md-4">
                <div class="card " style="width: 18rem;box-shadow: 5px 5px 30px;color:darkolivegreen;">
                    <img src="uploads/pharmacy.jpg" class="card-img-top " style="padding:5px;border-radius:10px 10px 10px 10px" width="275px" height="193px" ; alt="...">
                    <div class="card-body">
                        <p class="card-text shadow" style="text-align:center;color:black;font-size:30px;font-weight:bold;">Search Pharmacy</p>
                        <a href="card-pharmacy.php" class="btn btn-outline-primary" style="margin-left:80px;">Proceed</a><br>
                    </div>
                </div>
            </div>
            <div class="form-group col-md-4">
                <div class="card " style="width: 18rem;box-shadow: 5px 5px 30px;color:darkolivegreen;">
                    <img src="uploads/shelter.jpg" class="card-img-top " style="padding:5px;border-radius:10px 10px 10px 10px" width="275px" height="193px" ; alt="...">
                    <div class="card-body">
                       <p class="card-text shadow" style="text-align:center;color:black;font-size:30px;font-weight:bold;">Find Shelter</p>
                        <a href="find-shelter.php" style="margin-left:80px;"class="btn btn-outline-primary">Proceed</a>

                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
