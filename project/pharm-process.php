<?php
	
include_once("connection.php");

$btn=$_POST["btn"];
if($btn=="save")
doSave($conn);
else if($btn=="update")
		doUpdate($conn);

function doSave($conn)
    {
        $uid=$_POST["uid"];
        $first=$_POST["fname"];
        $li=$_POST["li"];
        $city=$_POST["city"];
        $mob=$_POST["mob"];
        $address=$_POST["add"];
        $orgnamepp=$_FILES["pic"]["name"];
		$tmpnamepp=$_FILES["pic"]["tmp_name"];
        $orgnamecp=$_FILES["qr"]["name"];
        $tmpnamecp=$_FILES["qr"]["tmp_name"];
        move_uploaded_file($tmpnamepp,"uploads/".$orgnamepp);
        move_uploaded_file($tmpnamecp,"uploads/".$orgnamecp);
$query="insert into pharm values('$first','$uid','$mob','$city','$li','$address','$orgnamepp','$orgnamecp',current_date())";
    mysqli_query($conn,$query);

		$msg=mysqli_error($conn);

		if($msg=="")
				echo "Record Inserted Successfully";
		else
			echo $msg;
    
}
function doUpdate($conn)
{
        $uid=$_POST["uid"];
        $first=$_POST["fname"];
        $li=$_POST["li"];
        $city=$_POST["city"];
        $mob=$_POST["mob"];
        $address=$_POST["add"];
        $orgnamepp=$_FILES["pic"]["name"];
		$tmpnamepp=$_FILES["pic"]["tmp_name"];
        $orgnamecp=$_FILES["qr"]["name"];
        $tmpnamecp=$_FILES["qr"]["tmp_name"];
        move_uploaded_file($tmpnamepp,"uploads/".$orgnamepp);
        move_uploaded_file($tmpnamecp,"uploads/".$orgnamecp);

        $query="update pharm set first='$first',uid='$uid',mobile='$mob',city='$city',license='$li',pic='$orgnamepp',qr='$orgnamecp' where uid='$uid'";
		
    mysqli_query($conn,$query);
		$msg=mysqli_error($conn);

		if($msg=="")
				echo "Record Updated Successfully";
		else
			echo $msg;
    
}
?>




