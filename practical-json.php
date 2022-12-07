<?php

$u=$_GET["uid"];

include_once("practice-connection.php");

$query="select * from student where uid='$u'";
$table=mysqli_query($conn,$query);

$ary=array();

while($record=mysqli_fetch_array($table))
{
	$ary[]=$record;
}

echo json_encode($ary);

?>