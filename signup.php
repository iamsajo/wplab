<?php 
include ('connection.php'); 

if (isset($_POST['submit'])){
    $uname=$_POST['usrname'];
    $pwd=$_POST['passwd'];
    $email=$_POST['email'];
    $ph=$_POST['mobile'];

    $sql="INSERT INTO user(usr_name,pass,email,contact) VALUES('$uname','$pwd','$email','$ph')";
    $result = mysqli_query($conn,$sql);
    if ($result){
        die(header("Location: login.php"));
        echo "Successfully registered";
    }
    else{
        echo "Error: ".$sql."<br>".mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Signup</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="log_reg.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <h1><u style="color:#320d3e">Signup</u></h1>
        </div>
        <div class="main">
            <form action="#" method="POST">
                <span>
                    <i class="fa fa-user"></i>
                    <input type="text" placeholder="Username" name="usrname">
                </span><br>
                <span>
                    <span>
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email" name="email">
                    </span><br>

                    <span>
                        <i class="fa fa-lock"></i>
                        <input type="password" placeholder="password" name="passwd">
                    </span><br>

                    <span>
                        <i class="fas fa-phone-square-alt"></i>
                        <input type="tel" name="mobile" id="" placeholder="Mobile">
                    </span>
                    <button name="submit" type="submit">Signup</button>

            </form>
        </div>
    </div>
</body>

</html>