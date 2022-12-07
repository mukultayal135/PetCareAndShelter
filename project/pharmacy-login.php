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
<script>
    $(document).ready(function() {
        var user = $("#uid").val();
        $.getJSON("json-search_pharm.php?uid=" + user, function(response) {

        
                $("#mob").val(response[0].mobile);
                $("#pwd").val(response[0].pwd);
                $("#city").val(response[0].city);
                $("#li").val(response[0].license);
                $("#fname").val(response[0].first);
                $("#add").val(response[0].address);
                $("#img").prop("src","uploads/" + response[0].pic);
                $("#img2").prop("src","uploads/" + response[0].qr);
        
        });

        
        

        $("#mob").blur(function() {
            var mob = $("#mob").val();
            var exp = /^[6-9]{1}[0-9]{9}$/;
            if (mob.trim() == 0) {
                $("#errmob").html("Enter Mobile No.").css("color", "red");
                $("#mob").css("border", "1px solid red");

            } else if (exp.test(mob) == false) {
                $("#errmob").html("Invalid Mobile No.").css("color", "red");

                $("#mob").css("border", "1px solid red");
            } else {
                $("#mob").css("border", "1px solid green");
                $("#errmob").html("");
            }

        });

    });

</script>
<script>
    function showpreview(file, imgid) {

        if (file.files && file.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $(imgid).prop('src', e.target.result);
            }
            reader.readAsDataURL(file.files[0]);
        }
    }

</script>
<link rel="stylesheet" href="index-css.css">

<body >
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <img src="uploads/logo.PNG" height="80px" width="80px" id="logo" alt="">
        &nbsp;&nbsp;&nbsp;
        <a class="navbar-brand"><b>Welcome <?php echo $_SESSION['active_user']?></b></a>
        <span style="margin-left:300px;font-size:40px;color:darkolivegreen;" class="weight">Pharmacist Registration</span>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="logout.php" class="btn btn-outline-primary">Logout</a>
                </li>

            </ul>
        </div>
    </nav>

    

    <div class="container row-md-12 mt-5"style="background-color:#F0FFF0 ;border-radius:10px 10px 10px 10px;border:1px solid black">
        <form action="pharm-process.php" enctype="multipart/form-data" method="post">
            <div class="row">
                <div class=" col-md-6">
                    <div class="row">
                        <div class="form-group col-md-8 mt-3">
                            <label for="uid">Username</label>
                            <input type="text" class="form-control" id="uid" name="uid" value="<?php echo $_SESSION['active_user']?> "readonly >
                            <span id="erruid"></span>
                        </div>
                        <div class="form-group col-md-1">
                            <input type="button" class="btn btn-secondary" id="fetch" value="Search" style="margin-top:50px;">
                        </div>


                    </div>

                    <div class="row">
                        <div class="form-group col-md-5 mt-3">
                            <label for="fname">Name</label>
                            <input type="text" class="form-control" id="fname" name="fname">
                        </div>

                        <div class="form-group col-md-5 mt-3">
                            <label for="mob">Mobile No.</label>
                            <input type="text" class="form-control" id="mob" name="mob">
                            <span id="errmob"></span>
                        </div>

                    </div>
                </div>
                <div class="form-group col-md-2  ml-2">
                    <input type="button" class="btn btn-success" value="Upload Photo" style="margin-top:50px;" onclick="document.getElementById('pic').click();return false;">
                    <input type="file" id="pic" name="pic" style="visibility: hidden" onchange="showpreview(this,img);">
                </div>
                <div class="form-group col-md-2 mt-2 ">
                    <img src="uploads/profile.jpg" height="120px" width="150px" alt="" id="img" style="border:1px black solid;border-radius:10px 10px 10px 10px;">
                </div>

            </div>




            <div class="row">
                <div class="form-group col-md-4">
                    <label for="add">Shop Address</label>
                    <input type="text" class="form-control" id="add" name="add">
                </div>

                <div class="form-group col-md-3">
                    <label for="city">City</label>
                    <input type="text" class="form-control" id="city" name="city">
                </div>

            </div>
            <div class="form-row">

                <div class="form-group col-md-3">
                    Licence Number
                    <input type="text" id="li" name="li" class="form-control">

                </div>

                <div class="form-group col-md-3 mt-">
                    <input type="button" class="btn btn-success" value="Upload QR Code" onclick="document.getElementById('qr').click();return false;" style="margin-top:20px;">
                    <input type="file" name="qr" id="qr" style="visibility: hidden" onchange="showpreview(this,img2);">

                </div>
                <div class="form-group col-md-2 mt-2 ">
                    <img src="uploads/images.jpg" height="170px" width="170px" alt="" id="img2" style="border:1px black solid;border-radius:10px 10px 10px 10px;">
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-1 offset-4 mt-3">
                    <button type="submit" class="btn btn-primary" value="save" name="btn" id="btn">Submit</button>
                </div>
                <div class="col-md-1 mt-3"><button type="submit" class="btn btn-primary" value="update" name="btn" id="btn">Update</button>
                </div>
            </div>


        </form>
    </div>


</body>

</html>
