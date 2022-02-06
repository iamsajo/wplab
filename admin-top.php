<?php include ('connection.php') ?>

<?php 
    session_start();

    if($_SESSION['name']!='admin'){
        echo "<script>alert('you are not an admin')</script>";
        header("Location: home.php");
    }
    

?>


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

    <style>
        .div-add {
            border: 2px solid #fff;
            width: 60%;
            margin: 15%;
            border-radius: 20px;
            background-image: linear-gradient(#020024, #5b0979);
            color: #ffff;
        }
        

    </style>
    
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

   

