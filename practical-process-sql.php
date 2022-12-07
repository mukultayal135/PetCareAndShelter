

<?php
include_once("practice-connection.php");
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
		$mob=$_POST["mobile"];
		$orgname=$_FILES["pic"]["name"];
		$tmpname=$_FILES["pic"]["tmp_name"];
		
		move_uploaded_file($tmpname,"uploads/".$orgname);

		$query="insert into student values('$uid','$pwd','$mob',current_date(),'$orgname')";

		mysqli_query($conn,$query);//query fired in datbase table

		$msg=mysqli_error($conn);

		if($msg=="")
				echo "Record Inserted Successfullyyyyy";
		else
			echo $msg;
	}
function doDelete($conn)
{
    $uid=$_POST["uid"];
		$query="delete from student where uid='$uid'";
		mysqli_query($conn,$query);
		$count=mysqli_affected_rows($conn);
		echo $count ." Records Deleted...";
}
function doUpdate($conn)
	{
		$uid=$_POST["uid"];
		$pwd=$_POST["pwd"];
		$mob=$_POST["mobile"];
		$orgname=$_FILES["pic"]["name"];
		$tmpname=$_FILES["pic"]["tmp_name"];
		
		
    if($orgname=="")
        {
            $query= "update student set uid='$uid',mob='$mob',pwd='$pwd' where uid='$uid'";
        }
    else
        {
            move_uploaded_file($tmpname,"uploads/".$orgname);
            $query= "update student set uid='$uid',mob='$mob',pwd='$pwd',pic='$orgname' where uid='$uid'";
        }    

		

		mysqli_query($conn,$query);//query fired in datbase table

		$msg=mysqli_error($conn);

		if($msg=="")
				echo "Record Updated Successfullyyyyy";
		else
			echo $msg;
	}


?>