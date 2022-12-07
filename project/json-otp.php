<?php

$uname=$_GET["uid"];

include_once("connection.php");
include_once("SMS_OK_sms.php");


$query="select * from signup where uid='$uname'";
$table=mysqli_query($conn,$query);

$ary=array();

while($record=mysqli_fetch_array($table))
{
	$ary[]=$record;
}
//$rep=SendSMS($ary[0]['mob'],"OTP is 2234");

echo json_encode("hello");

?>