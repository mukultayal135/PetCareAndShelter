<?php
	
if(isset($_GET["branch"]))
{
	$branch=$_GET["branch"];
	echo "U selected : ".$branch;
}

$all="";
if(isset($_GET["web"]))//checks the existance of web(name) in get array
{
	$web=$_GET["web"];
	$all=$all.$web." ,";
}
if(isset($_GET["node"]))//checks the existance of web(name) in get array
{
	$node=$_GET["node"];
	$all=$all.$node." ,";
}
if(isset($_GET["java"]))//checks the existance of web(name) in get array
{
	$java=$_GET["java"];
	$all=$all.$java;
}

if( strpos($all," ,",strlen($all)-1)=="")
	echo "<h3>$all";
else
{
	$all= substr($all,0,strlen($all)-1);//removing comma
	echo "<h3>$all";

}
?>