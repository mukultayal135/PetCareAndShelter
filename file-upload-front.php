<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="js/jquery-1.8.2.min.js">
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
<body>
	<center>
	<form action="file-upload-process.php" method="post" enctype="multipart/form-data">
		<table>
		<tr>
			<td colspan="2">
				<center>
					<h3>Profile form</h3>
				</center>
			</td>
		</tr>
			<tr>
				<td>User id</td>
				<td>
					<input type="text" name="txtuid">
				</td>
			</tr>
			<tr>
				<td>
					Select Profile pic
				</td>
				<td>
					<input type="file" name="ppic" onchange="showpreview(this,imgid);">
					<img id="imgid"  width="200" height="200" alt="">
				</td>
			</tr>
			
			<tr >
				<td colspan="2" align="center">
					<input type="submit" value="Send to Srever *">
				</td>
			</tr>
		</table>
		</form>
	</center>
</body>
</html>