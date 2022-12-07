<?php
session_start();// it creates $_SESSION array if does not created/exist

include_once("connection.php");
$uid=$_GET["uid2"];
$pwd=$_GET["pwd2"];

$query1="select * from signup where uid='$uid'";
$query2="select * from signup where uid='$uid' AND pwd='$pwd'";

$table1=mysqli_query($conn,$query1);
$table2=mysqli_query($conn,$query2);

    
if(mysqli_num_rows($table1)==0)
{
    echo "1";
    
}
else if(mysqli_num_rows($table2)==0)
{
    echo "2";
}
else {
        $_SESSION["active_user"]=$uid;
        while($row=mysqli_fetch_array($table2))
            echo $row["person"];
    }
?>
