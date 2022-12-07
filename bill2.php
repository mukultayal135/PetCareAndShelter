<html >
<head>
    <title>Document</title>
</head>
<style>
    table{
            width:500px;
        }
    
    #main{
            
            border-radius:10px 10px 10px 10px;
            border:1px black solid;
    }
    #ph{
            top:150px;
           left:450px;
            position:absolute;
            opacity:.6;
            background-image:url(pspcl_1566299393.jpeg);
            z-index:-1;
        }
        
        .err {
            color: red;
        }
    </style>


<body>
    <center>
       <form action="bill-process.php" method="post">
        <h1>Electricity Bill
        </h1>
        <img src="pspcl_1566299393.jpeg" alt="" id="ph">
        <table  height="500px" id="main">
           
            <tr>
                <td>

                    <table >
                        <tr>
                            <td width="100px">Units</td>
                            <td><input type="text" name="txtunit" autofocus></td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr>
                <td>
                    <table >
                        <tr>
                            <td>Do you have:</td>
                            <td><input type="checkbox" name="chkFan" value="50">&nbsp;Fan</td>
                            <td>How many&nbsp;&nbsp;<input type="text" placeholder="Enter the number" name="Fan" ></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <table >
                        <tr>
                            <td>Do you have:</td>
                            <td><input type="checkbox" name="chkAc" value="100">&nbsp;AC</td>
                            <td>How many&nbsp;&nbsp;<input type="text" placeholder="Enter the number" name="Ac"></td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr>
                <td>
                    <table >
                        <tr>
                            <td>Type of Connection:</td>
                            <td><input type="radio"  name="conn" value="C">Commercial</td>
                            <td><input type="radio"  name="conn" value="D">Domestic</td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr align="center">
                <td><input type="submit" value="Bill"></td>
            </tr>
            </table>
            </form>
            
    </center>


</body>
</html>