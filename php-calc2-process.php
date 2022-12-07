<?php

$operation=$_GET["btn"];

$a=$_GET["txtA"];
$b=$_GET["txtB"];

if($operation=="Sum")
	{
		$sum=$a+$b;
		echo "<h2>Sum=".$sum;
	}
if($operation=="Multiply")
	{
		$multi=$a*$b;
		echo "<h2>Multiplication=".$multi;
	}
?>