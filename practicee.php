<?php


$user=$_POST["uid"];
echo"UserName:".$user;
$size=$_FILES["pic"]["size"];
$temp=$_FILES["pic"]["tmp_name"];
$name=$_FILES["pic"]["name"];
$type=$_FILES["pic"]["type"];
move_uploaded_file($temp,"uploads/".$name);
echo"<br>Name".$name;
echo"<br>Type:".$type;
echo"<br>Path".$temp;
    echo"<br>Size".$size;




?>