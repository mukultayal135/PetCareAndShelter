<?php
include_once("connection.php");
$city=$_GET["city"];
if($city=="none")
    $query="select * from doctor";
else
    $query="select * from doctor where city='$city'";

$table=mysqli_query($conn,$query);

$ary=array();

	while($record=mysqli_fetch_array($table))//gives a record at a time
	{
		$ary[]=$record;//each record is stored in array
	}

echo json_encode($ary);
