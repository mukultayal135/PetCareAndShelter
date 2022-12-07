<html >
<head>
    <title>Document</title>
</head>
<style>
    table{
            width:500px;
        }
    
    #main{}
            
            border-radius:10px 10px 10px 10px;
            border:1px black solid;
    }
    #ph{
            top:200px;
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
        <h1>Electricity Bill
        </h1>
        <img src="pspcl_1566299393.jpeg" alt="" id="ph">
        <table  height="700px" id="main">
           
            <tr>
                <td>

                    <table >
                        <tr>
                            <td width="100px">Units</td>
                            <td><input type="text" id="txtunit" autofocus></td>
                            <td id="err1"></td>
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
                            <td>How many&nbsp;&nbsp;<input type="text" placeholder="Enter the number" name="Fan" disabled></td>
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
                            <td>How many&nbsp;&nbsp;<input type="text" placeholder="Enter the number"disabled name="Ac"></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr><br></tr>

            <tr>
                <td>
                    <table >
                        <tr>
                            <td>Type of Connection:</td>
                            <td><input type="radio" name="rad" name="chkC">Commercial</td>
                            <td><input type="radio" name="rad" name="chkD">Domestic</td>
                        </tr>
                    </table>
                </td>
            </tr>
            </table>
            
    </center>


</body>
</html>