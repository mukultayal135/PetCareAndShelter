<?php
	
include_once("connection.php");

$btn=$_POST["btn"];
if($btn=="save")
doSave($conn);
function doSave($conn)
    {
        $uid=$_POST["uid"];
        $pwd=$_POST["pwd"];
        $first=$_POST["fname"];
        $state=$_POST["State"];
        $city=$_POST["city"];
        $days=$_POST["days"];
        $selpet=$_POST["selpet"];
        $mob=$_POST["mob"];
        $address=$_POST["add"];
        $orgnamep1=$_FILES["pic1"]["name"];
		$tmpnamep1=$_FILES["pic1"]["tmp_name"];
        $orgnamep2=$_FILES["pic2"]["name"];
        $tmpnamep2=$_FILES["pic2"]["tmp_name"];
        $orgnamep3=$_FILES["pic3"]["name"];
        $tmpnamep3=$_FILES["pic3"]["tmp_name"];
        move_uploaded_file($tmpnamep1,"uploads/".$orgnamep1);
        move_uploaded_file($tmpnamep2,"uploads/".$orgnamep2);
        move_uploaded_file($tmpnamep3,"uploads/".$orgnamep3);
$query="insert into shelter values('$uid','$pwd','$mob','$state','$city','$first','$address','$orgnamep1','$orgnamep2','$orgnamep3','$selpet','$days',current_date())";
    mysqli_query($conn,$query);

		$msg=mysqli_error($conn);

		if($msg=="")
				echo "Record Inserted Successfullyyyyy";
		else
			echo $msg;
    
}
?>
