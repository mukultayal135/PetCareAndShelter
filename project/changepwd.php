<?php

include_once("connection.php");
$pwd=$_GET["pwd"];
$uid=$_GET["id"];

$query="update signup set pwd='$pwd' where uid='$uid'";
    
mysqli_query($conn,$query);
		$msg=mysqli_error($conn);

		if($msg=="")
				echo 1;
		else
			echo 0;
?>
