<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>

<?php
echo "<body>";
?>

	<marquee>Server Side Programming</marquee>
	<?php
			//scriptlet
		 echo "<h2>Welcome<br></h2>";
		 $x=5;//genric variable int float string bool
		 echo $x; 
		$a=30;
		$b=40;
		$sum=$a+$b;
		echo "<br>Sum=".$sum;
?>

<?php
	if($a>$b)
		echo "<p>A is Greater</p>";
	else
		echo "<p>B is Greater</p>"
	?>

<h1>Loops</h1>

<?php
		for($i=1;$i<=10;$i++)
		{
			echo $i."<br>";
		}
?>
<hr>
Day:
<select>
	<?php
		for($i=1;$i<=31;$i++)
		{
			echo "<option value=$i>$i</option>";
		}
	?>
</select>

<?php
	 $msg="Hi";//not global yet
	function doHello()
	{
		global $msg;
		echo "<h2>Hellllloooo-- $msg</h2>";
	}
	function doHi()
	{
		global $msg;
		echo "<h2>".$msg."</h2>";
	}
	doHi();

	doHello();
?>

<br><br><br><br><br><br>
<?php
	echo "</body>";
?>	
</html>










