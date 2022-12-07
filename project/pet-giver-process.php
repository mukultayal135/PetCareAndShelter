<?php
	
include_once("connection.php");
        $uid=$_POST["uid"];
        $age=$_POST["age"];
        $breed=$_POST["breed"];
        $gender=$_POST["gender"];
        $other=$_POST["other"];
        $price=$_POST["price"];
        $pet=$_POST["pet"];
        $orgnamep1=$_FILES["pic1"]["name"];
		$tmpnamep1=$_FILES["pic1"]["tmp_name"];
        move_uploaded_file($tmpnamep1,"uploads/".$orgnamep1);
        $query="insert into petgiver values('$uid','$pet','$breed','$price','$age','$gender','$other','$orgnamep1')";
            mysqli_query($conn,$query);

		$msg=mysqli_error($conn);

		if($msg=="")
				echo "Record Inserted Successfullyyyyy";
		else
			echo $msg;
    

?>
