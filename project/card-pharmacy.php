<?php
session_start();
?>
<html lang="en">

<head>
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-1.8.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/angular.min.js"></script>
    <link rel="stylesheet" href="index-css.css">
    <style>
        .photo {
            margin-left: 50px;
            margin-top: 20px;
            height: 150px;
            width: 150px;
            border: 1px black solid;
            border-radius: 10px 10px 10px 10px;
        }

    </style>

    <script>
        var ref = angular.module("pharmmodule", []);
        ref.controller("pharmcontroller", function($scope, $http) {
            $scope.jsonArray = []; //empty json array
            $scope.jsonCity = [];
            $scope.city = "none";
            $http.get("fetchcities_pharm.php").then(okcity, notokcity);

            function okcity(result) {

                $scope.jsonCity = result.data;
            }

            function notokcity(result) {
                alert(result.data);
            }

            $scope.getPharm = function() {
                loadPharm();
            }

            function loadPharm() {

                $http.get("fetch_allpharm.php?city=" + $scope.city).then(okFn, notOkFn);

                function okFn(response) //call back function
                {
                    $scope.jsonArray = response.data; //local to global assignment
                }

                function notOkFn(response) {
                    alert(response.data);
                }

            }


            $scope.doDetail = function(obj) {
                $scope.temp = obj;
            }
            $scope.clear = function(obj) {
                $scope.city = "none";
                loadPharm();
            }

        });

    </script>
</head>

<body ng-app="pharmmodule" ng-controller="pharmcontroller">
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <img src="uploads/logo.PNG" height="80px" width="80px" id="logo" alt="">
        &nbsp;&nbsp;&nbsp;
        <a class="navbar-brand"><b>Welcome <?php echo $_SESSION['active_user']?></b></a>
        <span style="margin-left:400px;font-size:40px;color:darkolivegreen;" class="weight">Pharmacies</span>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="logout.php" class="btn btn-outline-primary">Logout</a>
                </li>

            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="row offset-3 mt-4">
            <div class="form-group col-md-2 ">
                <button class="btn btn-info" ng-click="clear();" style="margin-top:30px;">Clear Filter</button>
            </div>
            <div class="form-group col-md-2">
                <label for="city"><b>Choose City</b></label>

                <select id="city" class="form-control" ng-model="city">
                    <option value="none">Choose...</option>
                    <option value={{obj.city}} ng-repeat="obj in jsonCity">{{obj.city}}</option>
                </select>
            </div>
            <div class="form-group col-md-3 " style="margin-top:30px;">
                <button class="btn btn-outline-info" ng-click="getPharm();">Show Results</button>
            </div>
        </div>
    </div>
    <div class="container">
            <div class="row">
                <div class="col-md-3 mt-3" ng-repeat="obj in jsonArray">
                    <div class="card bg-light big">
                        <img class="card-img-top photo" src="uploads/{{obj.pic}}" alt="Card image cap">
                        <hr>
                        <div class="card-body">
                            <p class="card-title"><b class="weight">User Id: </b>{{obj.uid}}</p>
                            <p class="card-text"><b class="weight">Mobile:</b> {{obj.mobile}}</p>
                            <button class="btn btn-outline-primary" ng-click="doDetail(obj);" data-toggle="modal" data-target="#details">Details</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="form-row mt-5" style="background-color:darkolivegreen;border-top:4px black solid;border-bottom: 4px black solid">
        <div class="col-md-12 text-center" style="color:white;font-size:40px;text-shadow: 2px 2px    black;"><b>About Us</b></div>
    </div>
    <div class="container mt-4" style="background-color:#F0FFF0">
        <div class="form-row">
            <div class="col-md-3 mt-3">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3447.88351250642!2d74.95000951420167!3d30.21187198182172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391732a4f014b8f7%3A0x7fa736d540603db!2sSun-Soft%20Technologies%20(%20Android%20Java%20PHP%20Angular%20)!5e0!3m2!1sen!2sin!4v1602399038310!5m2!1sen!2sin" width="600" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="col-md-5 offset-4  mt-4 text center">
                <div class="card" style="width: 25rem;border-radius:20px 20px 20px 20px;">
                    <div class="card-body">
                        <table class="table card-text mt-2">
                            <tr>
                                <td><b>Email:</b></td>
                                <td>mtayal_be19@thapar.edu</td>
                            </tr>
                            <tr>
                                <td><b>Contact:</b></td>
                                <td>9646741008</td>
                            </tr>
                        </table>
                        <p class="card-text text-center"><a href="http://www.linkedin.com/in/mukul-tayal-254b141a1" class="card-link"><i class="fab fa-linkedin" style="font-size:30px; cursor:pointer;"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <center>
        

    </center>
    <div class="modal" id="details" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title weight">More Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table bg-light" width="100%" rules="all" style="border:2px black solid;">
                        <tr>
                            <td height="130px;" colspan="2" align="center"><img src="uploads/{{temp.pic}}" width="100" height="100" style="border-radius:10px 10px 10px 10px;box-shadow: 5px 5px 30px;color:darkolivegreen;" alt=""></td>
                        </tr>
                        <tr align="center">
                            <td><b class="weight">User id</b></td>
                            <td>{{temp.uid}} </td>

                        </tr>

                        <tr align="center">
                            <td><b class="weight">Mobile</b></td>
                            <td>{{temp.mobile}} </td>

                        </tr>
                        <tr align="center">
                            <td><b class="weight">City</b></td>
                            <td>{{temp.city}} </td>

                        </tr>
                        <tr align="center">
                            <td><b class="weight">Address</b></td>
                            <td>{{temp.address}} </td>
                        </tr>
                        <tr align="center">
                            <td colspan="2"><b class="weight">QR Code</b></td>
                        </tr>
                        <tr>
                        <td height="130px;" colspan="2" align="center"><img src="uploads/{{temp.qr}}" width="100" height="100" style="border-radius:10px 10px 10px 10px;" alt=""></td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-2 offset-5">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
