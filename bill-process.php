<?php
$units=$_POST["txtunit"];
$sum=0;
if(isset($_POST["chkFan"]))
{
    $fan=50*$_POST["Fan"];
    $sum=$sum+$fan;
}
if(isset($_POST["chkAc"]))
{
    $AC=50*$_POST["Ac"];
    $sum=$sum+$AC;
}
if($units<100)
    $sum=$sum+$units*2;
else
    $sum=$sum+$units*5;
    
$connection=$_POST["conn"];
    if($connection=="C")
        $dis=$sum*.1;
    else
        $dis=$sum*.2;
$net=$sum-$dis;
        
?><center>
<table height="500px" width="500px">

    <tr>
        <td>Units Bill</td>
        <td><?php echo"$units";?></td>
    </tr>

    <tr>
        <td>Fan charges</td>
        <td><?php 
            if(isset($_POST["chkFan"]))
              echo"$fan";
            
            ?></td>
    </tr>
    <tr>
        <td>Ac charges</td>
        <td><td><?php 
        if(isset($_POST["chkAc"]))
         echo"$AC";
        ?></td>
    </tr>
    <tr>
        <td>Total Bill</td>
        <td><?php echo"$sum";?></td>
    </tr>
    <tr>
        <td>Discount</td>
        <td><?php echo"$dis";?></td>
    </tr>
    <tr>
        <td>Net Bill</td>
        <td><?php echo"$net";?></td>
    </tr>
</table>
</center>
