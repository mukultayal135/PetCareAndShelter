<?php


   $mo=$_POST["Mobile"]* $_POST["Qty1"];
   $bo=$_POST["Books"]* $_POST["Qty2"];
   $pe=$_POST["Pen"]* $_POST["Qty3"];
   $q1=$_POST["Qty1"];
   $q2=$_POST["Qty2"];
   $q3=$_POST["Qty3"];
$sum=$mo+$pe+$bo;
    ?>

<center>
    <table rules="cols" height="500px" width="600px" border="1">
        <tr style="border-bottom:1px black solid">
            <th>Category</th>
            <th>Price</th>
            <th>Quantity</th>

        </tr>
        <tr align="center">
            <td>Mobile</td>
            <td>Rs.<?php echo "$mo"?></td>
            <td><?php echo "$q1"?></td>
        </tr>
        <tr align="center">
            <td>Books</td>
            <td>Rs.<?php echo "$bo"?></td>
            <td><?php echo "$q2"?></td>
        </tr >
        <tr align="center" style="border-bottom:1px black solid">
            <td>Pen</td>
            <td>Rs.<?php echo "$pe"?></td>
            <td><?php echo "$q3"?></td>
        </tr>
        <tr align="center" style="border-bottom:1px black solid">
            <td>Total Bill</td>
            <td colspan="2">Rs<?php echo "$sum" ?></td>
        </tr>
        <tr align="center" style="border-bottom:1px black solid">
            <td>GST(18%)</td>
            <td colspan="2">Rs<?php $gst= 0.18*$sum;
          echo "$gst"?></td>
        </tr>
        <tr align="center">
            <td>Net:</td>
            <td colspan="2">Rs<?php $net= $gst+$sum;
          echo "$net"; ?></td>
        </tr>



    </table>
</center>
