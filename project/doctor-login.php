<?php
session_start();
?>


<html>

<head>
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/doctor_css.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-1.8.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title></title>
    <script src="jq/doctor-validation.jq"></script>


    <script>
        $(document).ready(function() {
            
             var user = $("#uid").val();
                $.getJSON("json-search_doctor.php?uid=" + user, function(response) {
                     
                        $("#mob").val(response[0].mobile);
                        $("#email").val(response[0].email);
                        $("#pwd").val(response[0].pwd);
                        $("#city").val(response[0].city);
                        $("#qual").val(response[0].qualification);
                        $("#exp").val(response[0].exp);
                        $("#spc").val(response[0].spl);
                        $("#fname").val(response[0].first);
                        $("#add").val(response[0].address);
                        $("#inputstate").val(response[0].state);
                        $("#img").prop("src", "uploads/" + response[0].pic);


                    
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
</head>
<link rel="stylesheet" href="index-css.css">

<body >
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <img src="uploads/logo.PNG" height="80px" width="80px" id="logo" alt="">
        &nbsp;&nbsp;&nbsp;
        <a class="navbar-brand"><b>Welcome <?php echo $_SESSION['active_user']?></b></a>
        <span style="margin-left:300px;font-size:40px;color:darkolivegreen;" class="weight">Doctor Registration</span>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="logout.php" class="btn btn-outline-primary">Logout</a>
                </li>

            </ul>
        </div>
    </nav>

    <div class="container row-md-12 mt-5"style="background-color:#F0FFF0 ;border-radius:10px 10px 10px 10px;border:1px solid black">
        <form action="doctor-process.php" enctype="multipart/form-data" method="post">
            <div class="form-row" >
                <div class="form-group col-md-9">
                    <div class="form-row">
                        <div class="form-group col-md-8 mt-3">
                            <label for="uid">Username</label>
                            <input type="text" class="form-control" readonly id="uid" name="uid" value="<?php echo $_SESSION['active_user']?>" >
                            <span id="erruid"></span>
                        </div>
                    </div>

                    <div class="form-row mt-2">
                        <div class="form-group col-md-3 ">
                            <label for="fname">Name</label>
                            <input type="text" class="form-control" id="fname" name="fname">
                        </div>

                        <div class="form-group col-md-4 ">
                            <label for="mob">Mobile No.</label>
                            <input type="text" class="form-control" id="mob" name="mob">
                            <span id="errmob"></span>
                        </div>
                        <div class="form-group col-md-5 ">
                            <label for="email">Email Id</label>
                            <input type="text" class="form-control" id="email" name="email">
                            <span id="erremail"></span>
                        </div>
                    </div>

                </div>
                <div class="form-group col-md-2 mt-2 ml-3">
                    <div class="form-row">
                        <div class="form-group col-md-1 mt-2">
                            <img src="uploads/profile.jpg" height="79px" width="120px" alt="" id="img" style="border:1px black solid;border-radius:10px 10px 10px 10px;">
                        </div>
                    </div>
                        <div class="form-group col-md-1">
                            <input type="button" class="btn btn-success " value="Upload Photo" onclick="document.getElementById('pic').click();return false;">
                            <input type="file" id="pic" name="pic" style="display:none" onchange="showpreview(this,img);">
                        </div>
                </div>

            </div>
            <div class="form-row" >
                <div class="form-group col-md-4">
                    <label for="add">Address</label>
                    <input type="text" class="form-control" id="add" name="add">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputstate">State</label>
                    <select id="inputstate" class="form-control" name="State">
                        <option selected="selected" value="0">Please Select a State:</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="29">Haryana</option>
                        <option value="Haryana">Himachal Pradesh</option>
                        <option value="Jammu">Jammu and Kashmir</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Madhya">Madhya Pradesh</option>
                        <option value="1Maharashtra5">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Odisha">Odisha</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Punjab">Rajasthan</option>
                        <option value="Seemandhra">Seemandhra</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Telangana">Telangana</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="West Bengal">West Bengal</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="city">City</label>
                    <input type="text" class="form-control" id="city" name="city">
                </div>

            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    Qualification
                    <input type="text" class="form-control" id="qual" name="qual">

                </div>
                <div class="form-group col-md-3">
                    Experience(years)
                    <input type="text" id="exp" name="exp" class="form-control">

                </div>

                <div class="form-group col-md-3">
                    Specialisation
                    <input type="text" class="form-control" id="spc" name="spc">
                </div>
                <div class="form-group col-md-3 mt-">
                    <input type="button" class="btn btn-success" value="Upload Certificate Proof" onclick="document.getElementById('cert').click();return false;" style="margin-top:20px;">
                    <input type="file" name="cert" id="cert" style="visibility: hidden">

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
