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
        $exp=$_POST["exp"];
        $spc=$_POST["spc"];
        $qual=$_POST["qual"];
        $state=$_POST["State"];
        $city=$_POST["city"];
        $mob=$_POST["mob"];
        $email=$_POST["email"];
        $address=$_POST["add"];
        $orgnamepp=$_FILES["pic"]["name"];
		$tmpnamepp=$_FILES["pic"]["tmp_name"];
        $orgnamecp=$_FILES["cert"]["name"];
        $tmpnamecp=$_FILES["cert"]["tmp_name"];
        move_uploaded_file($tmpnamepp,"uploads/".$orgnamepp);
        move_uploaded_file($tmpnamecp,"uploads/".$orgnamecp);
$query="insert into doctor values('$first','$uid','$mob','$state','$city','$qual','$exp','$email','$address','$spc','$orgnamepp','$orgnamecp',current_date())";
    mysqli_query($conn,$query);

		$msg=mysqli_error($conn);
    
		if($msg=="")
        {
            echo "Record Inserted Successfully";
        }
		else
			echo $msg;
    
}

function doUpdate($conn)
{
        $first=$_POST["fname"];
        $uid=$_POST["uid"];
        $exp=$_POST["exp"];
        $spc=$_POST["spc"];
        $qual=$_POST["qual"];
        $state=$_POST["State"];
        $city=$_POST["city"];
        $mob=$_POST["mob"];
        $email=$_POST["email"];
        $address=$_POST["add"];
        $orgnamepp=$_FILES["pic"]["name"];
		$tmpnamepp=$_FILES["pic"]["tmp_name"];
        $orgnamecp=$_FILES["cert"]["name"];
        $tmpnamecp=$_FILES["cert"]["tmp_name"];

        $query="update doctor set first='$first',mobile='$mob',state='$state',city='$city',qualification='$qual',exp='$exp',email='$email',address='$address',spl='$spc',pic='$orgnamepp',cert='$orgnamecp' where uid='$uid'";
		
    mysqli_query($conn,$query);
		$msg=mysqli_error($conn);

		if($msg=="")
				echo "Record Updated Successfully";
		else
			echo $msg;
    
}
?>




