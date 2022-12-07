<?php

$uname=$_GET["uid"];

include_once("connection.php");

$query="select * from pharm where uid='$uname'";
$table=mysqli_query($conn,$query);

$ary=array();

while($record=mysqli_fetch_array($table))
{
	$ary[]=$record;
}

echo json_encode($ary);

?>