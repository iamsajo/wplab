<!DOCTYPE html>
<html lang="en">
<head>
    <link href="styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .div1{
            border: 2px solid #fff;
            margin: 20px;
            border-radius:20px;
            padding: 20px;
            background-image: linear-gradient(#020024, #5b0979);
            color: #ffff;
            
        }
        
        table{
            border: 2px solid #ffff;
            border-radius:20px;
            padding: 20px;
            
        }
        ul{
            all:unset;
        }
        .add > table{
            background-color: #320d3e;
            color: #fff;
        }
        .add input{
            width:50%;
            height:2rem;
            border-radius:10px;
            margin:5px;
            align-items: center;
        }
        td{
            text-align:center;
        }
        li{
            list-style: none;
        }
        .main{
            border: 2px solid #320d3e;
            border-radius:20px;
            background-color: #320d3e;
        }
        .log{
            margin:20px;
            text-align:center;
        }
    </style>
</head>

<body>
<div class="main">
    <div class="line" align="center" style="margin-top:0px;margin-left:0px;margin-right:0px;width:98.65%">
        <h2><p>ADMIN'S &ensp; PLAYGROUND</p></h2> 
        <h4>Welcome&ensp;Home&ensp;Admin</h4>
    </div>

    <div class="div1">
        <div align="center">
            <h3>HOSPITAL&ensp; MANAGEMENT</h3>
        </div>
        <div>
            <table align="center" width="100%" cellspacing="5px" cellpadding="5px">
                <caption><h4>HOSPITAL &ensp;LIST</h4></caption>
                <tr>
                    <th>SL NO.</th>
                    <th>Name</th>
                    <th>Place</th>
                    <th>Doctors</th>
                    <th>Specilization</th>
                    <th>Address</th>
                    <th>Contact</th>
                    <th>IsActive</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>ABCD</td>
                    <td>KOCHI</td>
                    <td><ul><li>DR.JOHN</li><br><li>DR.JAMES</li><br><li>DR.PAUL</li><br></ul></td>
                    <td><ul><li>Neurology</li><br><li>Cardiology</li><br><li>Physician</li><br><li>General Surgeons</li><br></ul></td>
                    <td>ABCD Road new QWERTY</td>
                    <td>1234567890</td>
                    <td>Active</td>
                    <td><a href="#"><img src="images/logo/delete.png" alt="DELETE" width="30px"></a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>QWERTY</td>
                    <td>TVM</td>
                    <td><ul><li>DR.KRISH</li><br><li>DR.GEORGE</li><br><li>DR.LIBIN</li><br></ul></td>
                    <td><ul><li>Pediatrition</li><br><li>Cardiology</li><br><li>Physician</li><br><li>Nutrition</li><br></ul></td>
                    <td>QWERTY Road</td>
                    <td>1234357890</td>
                    <td>Active</td>
                    <td><a href="#"><img src="images/logo/delete.png" alt="DELETE" width="30px"></a></td>
                </tr>
            </table>
            <div class="add">
                <h4 align="center">Add Hospitals</h4>
                <table width="50%" style="margin-left:25%;margin-right:25%;">
                    <tr><th>Name:</th><td><input type="text"></td></tr>
                    <tr><th>Place:</th><td><input type="text"></td></tr>
                    <tr><th>Doctors:</th><td><input type="text"></td></tr>
                    <tr><th>Specilization:</th><td><input type="text"></td></tr>
                    <tr><th>Address:</th><td><input type="text"></td></tr>
                    <tr><th>Contact:</th><td><input type="tel"></td></tr>
                    <tr><th>IsActive:</th><td><input type="text"></td></tr>
                    <tr colspan="2">
                        <td align="right">
                            <a href="#"><img src="images/logo/plus.png" alt="ADD" width="30px"></a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="div1">
        <div align="center">
            <h3>DOCTOR &ensp;MANAGEMENT</h3>
        </div>
        <div>
            <table width="100%"cellspacing="5px" cellpadding="5px">
                <caption><h4>DOCTOR&ensp; LIST</h4></caption>
                <tr>
                    <th>SL NO.</th>
                    <th>Name</th>
                    <th>Experience</th>
                    <th>Education</th>
                    <th>Specilization</th>
                    <th>Fees</th>
                    <th>Contact</th>
                    <th>IsActive</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>DR, JOHN</td>
                    <td>23</td>
                    <td><ul><li>MBBS</li><br><li>MDS</li><br></ul></td>
                    <td>Neurology</td>
                    <td>200</td>
                    <td>1234567890</td>
                    <td>Active</td>
                    <td><a href="#"><img src="images/logo/delete.png" alt="DELETE" width="30px"></a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>DR.JHONNY</td>
                    <td>5</td>
                    <td><ul><li>MBBS</li><br></td>
                    <td>Pediatrition</td>
                    <td>500</td>
                    <td>1234357890</td>
                    <td>Active</td>
                    <td><a href="#"><img src="images/logo/delete.png" alt="DELETE" width="30px"></a></td>
                </tr>
            </table>
            <div class="add">
                <h4 align="center">Add Doctors</h4>
                <table width="50%" style="margin-left:25%;margin-right:25%;">
                    <tr><th>Name:</th><td><input type="text"></td></tr>
                    <tr><th>Experience:</th><td><input type="number"></td></tr>
                    <tr><th>Education:</th><td><input type="text"></td></tr>
                    <tr><th>Specilization:</th><td><input type="text"></td></tr>
                    <tr><th>Fees:</th><td><input type="number"></td></tr>
                    <tr><th>Contact:</th><td><input type="tel"></td></tr>
                    <tr><th>IsActive:</th><td><input type="text"></td></tr>
                    <tr colspan="2">
                        <td align="right">
                            <a href="#"><img src="images/logo/plus.png" alt="ADD" width="30px"></a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>





    <div class="div1">
        <div align="center">
            <h3>USER &ensp;MANAGEMENT</h3>
        </div>
        <div>
            <table width="100%"cellspacing="5px" cellpadding="5px">
                <caption><h4>USER&ensp; LIST</h4></caption>
                <tr>
                    <th>SL NO.</th>
                    <th>Name</th>
                    <th>Place</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Contact</th>
                    <th>IsActive</th>
                    <th>IsAdmin</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>JOHN</td>
                    <td>abcd</td>
                    <td>abcd@gmail.com</td>
                    <td>abcd</td>
                    <td>wecwoejcnec</td>
                    <td>1234567890</td>
                    <td>false</td>
                    <td>Active</td>
                    <td><a href="#"><img src="images/logo/delete.png" alt="DELETE" width="30px"></a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>JHONNY</td>
                    <td>werty</td>
                    <td>qwerty@gmail.com</td>
                    <td>qwerty</td>
                    <td>wcdwe3f</td>
                    <td>1234357890</td>
                    <td>false</td>
                    <td>Active</td>
                    <td><a href="#"><img src="images/logo/delete.png" alt="DELETE" width="30px"></a></td>
                </tr>
            </table>
            <div class="add">
                <h4 align="center">Add User</h4>
                <table width="50%" style="margin-left:25%;margin-right:25%;">
                    <tr><th>Name:</th><td><input type="text"></td></tr>
                    <tr><th>Place:</th><td><input type="text"></td></tr>
                    <tr><th>Email:</th><td><input type="email"></td></tr>
                    <tr><th>Username:</th><td><input type="text"></td></tr>
                    <tr><th>Contact:</th><td><input type="tel"></td></tr>
                    <tr><th>IsAdmin:</th><td><input type="text"></td></tr>
                    <tr><th>IsActive:</th><td><input type="text"></td></tr>
                    <tr colspan="2">
                        <td align="right">
                            <a href="#"><img src="images/logo/plus.png" alt="ADD" width="30px"></a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="log"><input type="submit" value=" ADMIN LOGOUT" style="height:2rem;width:200px;border-radius:10px;"></div>
</div>
</body>
</html>