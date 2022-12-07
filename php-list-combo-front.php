<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script>
	function doChkAndSend()
		{
			var branch=document.querySelector("#combo").value;
			
			var lstRef=document.querySelector("#lstTechs");
			alert(lstRef.length);
			
			if(branch=="none")
				{
					alert("Select Branch Plz...");	
				}
			else
			document.frm.submit();
		}
	
	</script>
</head>
<body>
	<center>
		<form name="frm" action="list-combo-process.php" >
			<p>
				Selet City: 
				<select name="branch" id="combo">
					<option value="none">Select</option>
					<option value="cse">Computer Science</option>
					<option value="ece">Ece</option>
					<option value="mech">Mechanical</option>
				</select>
			</p>
			<p>
				Technologies You Know: <br>
				<select name="techs[]" multiple size=5 id="lstTechs">
				<option value="CPP">C++</option>
				<option value="Java">Java</option>
				<option value="Web Dev">Web Dev</option>
				<option value="Node-React">NodeJs-React</option>
					
				</select>
			</p>
			<p>
				<input type="button" onclick="doChkAndSend();" value="Send to Server">
			</p>
		</form>
	</center>
</body>
</html>