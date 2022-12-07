<?php

$uid=$_POST["txtuid"];

$size=$_FILES["ppic"]["size"];
$type=$_FILES["ppic"]["type"];
$orgname=$_FILES["ppic"]["name"];
$orgname=$uid."-".$orgname;


$tmppath=$_FILES["ppic"]["tmp_name"];

/*if($size>=500)
{
	echo "Invalid size";
	return;
}*/

move_uploaded_file($tmppath,"uploads/".$orgname);

echo "File uploaded....<br>";
echo "<br>original name:$orgname";
echo "<br>type:$type";
echo "<br>Temporary name:$tmppath";

$mb=($size/1024)/1024;
echo "<br>File size: $size : in bytes";
echo "<br>File size: $mb : MB";


echo "<br>";
?>
<img src="uploads/<?php echo $orgname;?>" width="500" height="500" >		
