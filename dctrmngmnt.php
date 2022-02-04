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
    <style>
        
    </style>
    
</head>

<body>
    

<?php 

    if(isset($_POST['false'])){
        $id = $_REQUEST['id'];
        $sql = "UPDATE doctor SET is_active = 'False' WHERE id =".$id;
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
        $sql = "UPDATE doctor SET is_active = 'True' WHERE id =".$id;
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
                    <th>Hospital</th>
                    <th>Specilization</th>
                    <th>Fees</th>
                    <th>Contact</th>
                    <th>IsActive</th>
                    <th>To_False</th>
                    <th>To_True</th>
                </tr>

                <?php
    
                    $sql = "SELECT id, name, exp, education, hspl, field, fees, contact, is_active, img FROM doctor";
                    $retval = mysqli_query( $conn, $sql);
                    $count=0;
                    $rows = mysqli_fetch_all($retval, MYSQLI_ASSOC );
                    foreach((array)$rows as $row){
                        $count++;
                        $id=$row['id'];
                        $name=$row['name'];
                        $exp=$row['exp'];
                        $education=$row['education'];
                        $hspl=$row['hspl'];
                        $field=$row['field'];
                        $fees=$row['fees'];
                        $contact=$row['contact'];
                        $active=$row['is_active'];
                        $imgsrc=$row['img'];

                        echo '

                        <tr>
                            <td>'.$count.'</td>
                            <td>'.$name.'</td>
                            <td>'.$exp.'</td>
                            <td><ul><li>'.$education.'</li><br></ul></td>
                            <td>'.$hspl.'</td>
                            <td>'.$field.'</td>
                            <td>'.$fees.'</td>
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
