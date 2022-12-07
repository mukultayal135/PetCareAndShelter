<?php
	
include_once("mysql-connection.php");

$btn=$_POST["btn"];
if($btn=="save")
doSave($conn);
else
	if($btn=="delete")
doDelete($conn);
else
	if($btn=="update")
		doUpdate($conn);

	function doSave($conn)
	{
		$uid=$_POST["uid"];
		$pwd=$_POST["pwd"];
		$mob=$_POST["mob"];
		$orgname=$_FILES["ppic"]["name"];
		$tmpname=$_FILES["ppic"]["tmp_name"];
		
		move_uploaded_file($tmpname,"uploads/".$orgname);

		$query="insert into users630 values('$uid','$pwd','$mob',current_date(),'$orgname')";

		mysqli_query($conn,$query);//query fired in datbase table

		$msg=mysqli_error($conn);

		
	}

function doUpdate($conn)
	{
		$uid=$_POST["uid"];
		$pwd=$_POST["pwd"];
		$mob=$_POST["mob"];
	
		$oldPicName=$_POST["hdnBox"];
		
		$orgname=$_FILES["ppic"]["name"];
	
		$tmpname=$_FILES["ppic"]["tmp_name"];
		
	if($orgname=="")//user did not change the pic
		$finalPicName=$oldPicName;
	else //user changed the pic
	{
		$finalPicName=$orgname;
		move_uploaded_file($tmpname,"uploads/".$orgname);
	}
		$query="update users630 set pwd='$pwd',mobile='$mob',dos=current_date(),ppic='$finalPicName' where uid='$uid'";

		mysqli_query($conn,$query);//query fired in datbase table

		$msg=mysqli_error($conn);

		if($msg=="")
				echo "Record Updated Successfullyyyyy";
		else
			echo $msg;
	}


	function doDelete($conn)
	{
		$uid=$_POST["uid"];
		$query="delete from users630 where uid='$uid'";
		mysqli_query($conn,$query);
		$count=mysqli_affected_rows($conn);
		echo $count ." Records Deleted...";
	}


?>
