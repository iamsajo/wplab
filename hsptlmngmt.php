<?php include ('connection.php') ?>



<?php 

    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $contact=$_POST['contact'];
        $address=$_POST['address'];
        $place=$_POST['place'];
        $imgsrc=$_POST['img'];
        $img="images/hsptls/".$imgsrc;
        if(empty($_POST['is_active'])){
            $is_active='False';
        }
        else{
            $is_active='True';
        }
        $sql="INSERT INTO hospital(name, contact, address, place, is_active, img) VALUES ('$name','$contact','$address','$place','$is_active','$img')";
        $result=mysqli_query($conn,$sql);
        if($result){
            echo "Data Inserted";
        }
        else{
            echo "Data Not Inserted";
        }
    }

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

<?php include ('admin-top.php') ?>


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
        
    </div>

    <div class="div-add">
        <div align="center">
            <h3>ADD HOSPITAL</h3>
        </div>
        <div>
            <form action="hsptlmngmt.php" method="POST" enctype="multipart/form-data">
                <table align="center" width="100%" cellspacing="5px" cellpadding="5px">
                    <tr>
                        <td>Name</td>
                        <td><input type="text" name="name" placeholder="Enter Name" required></td>
                    </tr>
                    <tr>
                        <td>Place</td>
                        <td><input type="text" name="place" placeholder="Enter Place" required></td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td><input type="text" name="address" placeholder="Enter Address" required></td>
                    </tr>
                    <tr>
                        <td>Contact</td>
                        <td><input type="text" name="contact" placeholder="Enter Contact" required></td>
                    </tr>
                    <tr>
                        <td>Image</td>
                        <td><input type="file" name="img" ></td>
                    </tr>
                    <tr>
                        <td>IsActive</td>
                        <td><input type="checkbox" name="is_active" placeholder="Enter IsActive" ></td>

                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="submit" value="Submit"></td>
                    </tr>
                </table>
            </div>
    </div>

<?php include ('admin-footer.html') ?>
