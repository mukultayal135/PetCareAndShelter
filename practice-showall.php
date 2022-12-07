<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <center>
        <table border="1">
            <tr>
                <td colspan="5" text-align="center">All users</td>
            </tr>
            <tr>
                <th>User-id</th>
                <th>Password</th>
                <th>Mobile</th>
                <th>Date</th>
                <th>Profile-pic</th>
            </tr>

            <?php
            include_once("practice-connection.php");
            $query="select * from student";

            $table=mysqli_query($conn,$query);
            while($record=mysqli_fetch_array($table))
            {
                echo "<tr>";
                    
		
		echo "<td>".$record['uid']."
		<td>".$record['pwd']."
		<td>".$record['mob']."
		<td>".$record['date']."
		<td> <img src=uploads/".$record["pic"]." width=50 heigth=50>";
            }
            ?>



        </table>
    </center>

</body>

</html>
