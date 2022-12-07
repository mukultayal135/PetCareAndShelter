<html>
<head>
	<title>Document</title>
</head>
<body>

	<center>
		<form action="php-calc-process.php" method="post">
			User Name: 
			<input type="text" name="txtUname">
			 <br><br>
			 User Password: 
			<input type="password" name="txtPwd">
			 <br><br>
			<input type="submit" value="poke to server">
		</form>
		
		<hr>
		<hr>
		<form action="php-calc2-process.php">
			<table>
				<tr>
					<td>Enter A</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="txtA">
					</td>
				</tr>
				<tr>
					<td>Enter B</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="txtB">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" value="Sum" name="btn">
						<input type="submit" value="Multiply" name="btn">
					</td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>