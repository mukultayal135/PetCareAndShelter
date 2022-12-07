<!DOCTYPE html>
<html>

<head>

	<title>Document</title>
</head>

<body>

	<center>

		<table border="1">
			<tr>
				<td colspan="5"><center><h3>All Users</h3></center></td>
			</tr>
		<tr>
			<td>User id</td>
			<td>Password</td>
			<td>Mobile</td>
			<td>DOS</td>
			<td>Profile pic</td>
		</tr>
			<?php

include_once("mysql-connection.php");
// 0 or more possibility
$query="select * from users630";

$table=mysqli_query($conn,$query);

//$count=mysqli_num_rows($table);

	/*while($record=mysqli_fetch_array($table))//gives a record at a time
	{
		echo "<tr>";
		//          [table wala col. name]
		echo "<td>".$record['uid']."<td>".$record['pwd']."<td>".$record['mobile']."<td>".$record['dos']."<td> <img src=uploads/".$record["ppic"]." width=50 heigth=50 >";
	}*/
			while($record=mysqli_fetch_array($table))
			{
			?>
<!-- HTML Bhai ka eelaka start ho gaya -->
			<tr>
				<td>
				<?php	echo $record["uid"];?>
				</td>
				<td>
				<?php	echo $record["pwd"];?>
				</td>
				<td>
				<?php	echo $record["mobile"];?>
				</td>
				<td>
				<?php	echo $record["dos"];?>
				</td>
				<td>
					<img src='uploads/<?php echo $record["ppic"];?>'  height="50" width="50">
				</td>
			</tr>

		   <?php
			//PHP Bhan ji Ka eelaka start ho gaya	
			}
			?>

		</table>
	</center>
</body>

</html>
