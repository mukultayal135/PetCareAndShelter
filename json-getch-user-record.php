<?php

$uidKuchBhi=$_GET["uid"];

include_once("mysql-connection.php");

$query="select * from users630 where uid='$uidKuchBhi'";
$table=mysqli_query($conn,$query);//0 or 1 records possibility

$ary=array();

while($record=mysqli_fetch_array($table))
{
	$ary[]=$record;
}

echo json_encode($ary);

?>