<?php
include_once("connection.php");
$uid=$_GET["uid"];
$pwd=$_GET["pwd"];
$mob=$_GET["mob"];
$person=$_GET["person"];

$query="insert into signup value('$uid','$pwd','$mob','$person',current_date())";
mysqli_query($conn,$query);

$msg=mysqli_error($conn);
if($msg=="")
	echo "Signup Successful";

else
	echo "Signup Failed!!";


?>