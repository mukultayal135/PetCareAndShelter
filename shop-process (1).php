<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
	<script src="js/jquery-1.8.2.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    

<?php
$sum=0;

   for($i=1;$i<4;$i++)
   {
       $prices[$i]=$_GET["price".$i]* $_GET["qty".$i];
       $sum = $sum+ $_GET["price".$i]* $_GET["qty".$i];
       
   }
    ?>


<table class="table text-center">
  <thead>
    <tr>
      <th scope="col" colspan="2">Bill</th>
      <th colspan="2">Cost</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td colspan="2">Mobile</td>
      <td colspan="2"><?php echo "$prices[1]" ?>Rs</td>
    </tr>
    <tr>
      <td colspan="2">Books</td>
      <td colspan="2"><?php $val= $prices[2];
    echo "$val"; ?>Rs</td>
    </tr>
    <tr>
      <td colspan="2">Earphone</td>
      <td colspan="2"><?php echo "$prices[3]" ?>Rs</td>
    </tr>
     <tr>
      <td colspan="2">Total Bill</td>
      <td colspan="2"><?php echo "$sum" ?>Rs</td>
    </tr>
     <tr>
      <td colspan="2">GST(18%)</td>
      <td colspan="2"><?php $gst= 0.18*$sum;
          echo "$gst";?>Rs</td>
    </tr>
     <tr>
      <td colspan="2">Net:</td>
      <td colspan="2"><?php $net= $gst+$sum;
          echo "$net"; ?>Rs</td>
    </tr>
    
  </tbody>
</table>



</body>
</html>