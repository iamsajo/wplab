<?php include ('connection.php') ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link href="styles.css" rel="stylesheet">
    <link rel="stylesheet" href="admn.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>

<body>
<!-- <div class="main"> -->
    <div class="line" align="center" style="margin-top:0px;margin-left:0px;margin-right:0px;width:98%">
        <h2><p>ADMIN'S &ensp; PLAYGROUND</p></h2> 
        <h4>Welcome&ensp;Home&ensp;Admin</h4>
    </div>

    <div class="admin_nav">
        <div class="admin_nav_inner" style="margin-left:8%;">
            <a href="usrmngmnt.php" style="color:black;">To manage and view Users</a>

        </div>
        <div class="admin_nav_inner">
            <a href="hsptlmngmt.php" style="color:black;">To manage and view Hostpitals</a>

        </div><div class="admin_nav_inner">
            <a href="dctrmngmnt.php" style="color:black;">To manage and view Doctors</a>

        </div>


    </div>

   



    <div class="log"><form action="#" method="get"><input type="submit" value=" ADMIN LOGOUT" style="height:2rem;width:200px;border-radius:10px;"></form></div>
<!-- </div> -->
</body>
</html>