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

			$("#uid").blur(function() {
				var uidValue = $("#uid").val();

				//var url="ajax-chk-user.php?uidName="+uidValue+"&pwnName="+pwdValue;//Query String

				var url = "ajax-chk-user.php?uidName=" + uidValue;
				//ajax request, response will receive the message from server
				$.get(url, function(response) {
					alert(response);
					
				});

			});
			//=--=-=-==-==-=-=-===-=-=-
			$("#btnSearch").click(function(){
				var user=$("#uid").val();
																//CALL BACK function
				$.getJSON("json-getch-user-record.php?uid="+user,function(jsonAryResponse){
					//alert(jsonAryResponse.length);
					if(jsonAryResponse.length==0)
						alert("Invalid ID");
					else
						{
							//alert(JSON.stringify(jsonAryResponse));	
							$("#pwd").val(jsonAryResponse[0].pwd);//.COlName oftable
							$("#mob").val(jsonAryResponse[0].mobile);
							$("#prev").prop("src","uploads/"+jsonAryResponse[0].ppic);
							$("#hdnBox").val(jsonAryResponse[0].ppic);
						}
						
				});
				
				
			});
			
				$("#frm").submit(function(ev){
									
					if(confirm("R U Sure?")==false)
					ev.preventDefault();//to abort submission to server
				});
			
		});

	</script>


</head>

<body>
	<center>
		<div class="btn btn-primary" data-toggle="modal" data-target="#modalSignup">Signup</div>
	</center>

	<!-- Modal signup -->
	<div class="modal fade" id="modalSignup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="php-index-process.php" id="frm" method="post" enctype="multipart/form-data">
					<input type="hidden" id="hdnBox" name="hdnBox">
						
						<div class="form-row">
							<div class="col-md-8">
							
							
							<label for="uid">User id/email id</label>
							<input type="text" required class="form-control" id="uid" name="uid">
							
							</div>
							<div class="col-md-4">
							<label for="uid">Operation</label>
							<input type="button" id="btnSearch" value="Search" class="form-control btn btn-primary">
							
							</div>
						</div>
						<div class="form-group">
							<label for="pwd">Password</label>
							<input type="password" class="form-control" id="pwd" name="pwd">
						</div>
						<div class="form-group">
							<label for="mob">Mobile</label>
							<input type="text" class="form-control" id="mob" name="mob">
						</div>
						<div class="form-group">
							<label for="ppic">Profile Pic</label>
							<input type="file" class="form-control" id="ppic" name="ppic">
							<center>
							<img src="pics/user.png" width="50" height="50" id="prev" alt="">
							</center>
						</div>

						<center>
							<button type="submit" class="btn btn-primary" value="save" name="btn" id="btn">Submit</button>
							<button type="submit" class="btn btn-primary" value="delete" name="btn" id="btn">Delete</button>
							
							<button type="submit" class="btn btn-primary" value="update" name="btn" id="btn">Update</button>

						</center>
					</form>
				</div>
				<div class="modal-footer">

				</div>
			</div>
		</div>
	</div>
</body>

</html>
