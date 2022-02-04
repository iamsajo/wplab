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
    

<?php 

    if(isset($_POST['false'])){
        $id = $_REQUEST['id'];
        $sql = "UPDATE user SET is_active = 'False' WHERE id =".$id;
        $result = mysqli_query($conn,$sql);
        if($result){
            echo 'Successfully updated';
        }
        else{
            echo ' Failed to update';
        }
    }

    if(isset($_POST['true'])){
        $id = $_REQUEST['id'];
        $sql = "UPDATE user SET is_active = 'True' WHERE id =".$id;
        $result = mysqli_query($conn,$sql);
        if($result){
            echo 'Successfully updated';
        }
        else{
            echo 'Failed to update';
        }
    }
        
?>


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
                    <th>Email</th>
                    <th>Contact</th>
                    <th>IsAdmin</th>
                    <th>IsStaff</th>
                    <th>IsActive</th>
                    <th>To_False</th>
                    <th>To_True</th>
                </tr>
                <?php
    
                    $sql = "SELECT id, usr_name, email, is_admin, is_staff, is_active, contact FROM user";
                    $retval = mysqli_query( $conn, $sql);
                    $count=0;
                    $rows = mysqli_fetch_all($retval, MYSQLI_ASSOC );

                    foreach((array)$rows as $row){
                        $count++;
                        $id=$row['id'];
                        $name=$row['usr_name'];
                        $email=$row['email'];
                        $contact=$row['contact'];
                        $is_active=$row['is_active'];
                        $is_admin=$row['is_admin'];
                        $is_staff=$row['is_staff'];
                        
                        echo '
                
                        <tr>
                            <td>'.$count.'</td>
                            <td>'.$name.'</td>
                            <td>'.$email.'</td>
                            <td>'.$contact.'</td>
                            <td>'.$is_admin.'</td>
                            <td>'.$is_staff.'</td>
                            <td>'.$is_active.'</td>
                            <form action="?id='.$id.'" method="POST">
                                <td><button name=false>DELETE</button></td>
                                <td><button name=true>ADD</button></td>
                        </form>

                        </tr>
                        ';
                    }
                ?>
                
            </table>
           
        </div>
        <center><div class="admin_button"><a href="admin.php">Back to Admin</a></center>
        </div>
    </div>
    </body>
    </html>