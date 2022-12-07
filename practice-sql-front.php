<html>

<head>
    <!-- Required meta tags -->

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-1.8.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {

            $("#btnSignup").click(function() {

                //$("#signup").css("display","block");
                //$("#signup").slideDown(1000);
                $("#signup").fadeToggle(1000);
                //$("#signup").show(1000);
                $("#btnSignup").fadeOut(1000);


            });
            $("#btnSearch").click(function() {
                var user = $("#uid").val();
                //CALL BACK function
                $.getJSON("practical-json.php?uid=" + user, function(jsonAryResponse) {
                    //alert(jsonAryResponse.length);
                    if (jsonAryResponse.length == 0)
                        alert("Invalid ID");
                    else {
                        //alert(JSON.stringify(jsonAryResponse));	
                        $("#pwd").val(jsonAryResponse[0].pwd); //.COlName oftable
                        $("#mobile").val(jsonAryResponse[0].mob);
                        $("#prev").prop("src", "uploads/" + jsonAryResponse[0].pic);
                    }

                });


            });
        });

    </script>
</head>


<body>
    <center>
        <div class="btn btn-primary" style="margin-top:100px;" id="btnSignup">
            Signup
        </div>
    </center>
    <div style="width:700px;height:700px; background-color:yellow;display:none;margin:auto;" id="signup">
        <form action="practical-process-sql.php" enctype="multipart/form-data" method="post">
            <center>
                <div style="width:200px;height:70px;">

                    <b>Email:</b><br>
                    <input type="text" id="uid" name="uid">
                </div>

                <div style="width:inherit;height:100px">
                    <b>Password:</b><br>
                    <input type="password" id="pwd" name="pwd">
                </div>
                <div style="width:inherit;height:100px">
                    <b>Mobile:</b><br>
                    <input type="text" id="mobile" name="mobile">
                </div>
                <div style="width:inherit;height:100px;">
                    <b>Profile pic:</b><br>
                    <input type="file" id="pic" name="pic" style="margin-left:100px;">
                </div>
            </center>
            <div style="width:100px;height:100px;margin-left:100px;float:left">
                <input type="submit" value="save" name="btn" style="width:75px;height:50px;">
            </div>
            <div style="width:100px;height:100px;margin-left:20px;float:left">
                <input type="submit" value="delete" name="btn" style="width:75px;height:50px;">
            </div>
            <div style="width:100px;height:100px;float:left;">
                <input type="button" id="btnSearch" value="Search" class="form-control btn btn-primary">
            </div>
            <div style="width:100px;height:100px;margin-left:20px;float:left">
                <input type="submit" value="update" name="btn" style="width:75px;height:50px;">
            </div>
            
            <div style="width:100px;height:100px;">
                <img src="" alt="" id="prev" height="100" width="100">
            </div>

        </form>

    </div>




</body>

</html>
