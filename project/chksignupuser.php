<?php

include_once("connection.php");
$uid=$_GET["uid"];

$query="select * from signup where uid='$uid'";

$table=mysqli_query($conn,$query);
$count=mysqli_num_rows($table);
if($count==0)
	echo "1";

else
	echo "0";



?>