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
        $sql = "UPDATE hospital SET is_active = 'False' WHERE id =".$id;
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
        $sql = "UPDATE hospital SET is_active = 'True' WHERE id =".$id;
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
                    <th>F_S</th>
                    <th>T_S</th>
                </tr>

            
                <?php
    
                    $sql = "SELECT id, name, place, address, contact, is_active, img FROM hospital";
                    $retval = mysqli_query( $conn, $sql);
                    $count=0;
                    $rows = mysqli_fetch_all($retval, MYSQLI_ASSOC );
                    foreach((array)$rows as $row){
                        $count++;
                        $id=$row['id'];
                        $name=$row['name'];
                        $place=$row['place'];
                        $address=$row['address'];
                        $contact=$row['contact'];
                        $active=$row['is_active'];
                        $imgsrc=$row['img'];
                        $hsptl="hsptl";

                        echo '
                        <tr>
                        <td>'.$count.'</td>
                        <td>'.$name.'</td>
                        <td>'.$place.'</</td>
                        <td><ul><li>DR.JOHN</li><br><li>DR.JAMES</li><br><li>DR.PAUL</li><br></ul></td>
                        <td><ul><li>Neurology</li><br><li>Cardiology</li><br><li>Physician</li><br><li>General Surgeons</li><br></ul></td>
                        <td>'.$address.'</td>
                        <td>'.$contact.'</td>
                        <td>'.$active.'</td>
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
    </div>

    </body>
</html>