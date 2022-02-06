<?php include ('admin-top.php') ?>
   

<?php 

    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $exp=$_POST['exp'];
        $fees=$_POST['fees'];
        $contact=$_POST['contact'];
        $edu=$_POST['education'];
        $hspl=$_POST['hspl'];
        $field=$_POST['field'];
        $imgsrc=$_POST['img'];
        $img="images/dr-pic/".$imgsrc;
        if(empty($_POST['is_active'])){
            $is_active='False';
        }
        else{
            $is_active='True';
        }

        $query="INSERT INTO doctor(name,exp,fees,contact,education,hspl,field,is_active,img) VALUES('$name','$exp','$fees','$contact','$edu','$hspl','$field','$is_active','$img')";
        $result=mysqli_query($conn,$query);
        if($result){
            echo "<script>alert('doctor added successfully')</script>";
        }
        else{
            echo "Error: ".$query."<br>".mysqli_error($conn);
            echo "<script>alert('doctor not added')</script>";
        }
    }

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
        
    </div>

    <div class="div-add">
        <div align="center">
            <h3>ADD&ensp;DOCTOR</h3>
        </div>
        <div>
            <form action="dctrmngmnt.php" method="POST">
                <table width="100%"cellspacing="20">
                    <tr>
                        <td>Name</td>
                        <td><input type="text" name="name" required></td>
                    </tr>
                    <tr>
                        <td>Experience</td>
                        <td><input type="text" name="exp" required></td>
                    </tr>
                    <tr>
                        <td>Education</td>
                        <td><input type="text" name="education" required></td>
                    </tr>
                    <tr>
                        <td>Hospital</td>
                        <td><input type="text" name="hspl" required></td>
                    </tr>
                    <tr>
                        <td>Specilization</td>
                        <td><input type="text" name="field" required></td>
                    </tr>
                    <tr>
                        <td>Fees</td>
                        <td><input type="text" name="fees" required></td>
                    </tr>
                    <tr>
                        <td>Contact</td>
                        <td><input type="text" name="contact" required></td>
                    </tr>
                    <tr>
                        <td>Image</td>
                        <td><input type="file" name="img" required></td>
                    </tr>
                    <tr>
                        <td>IsActive</td>
                        <td><input type="checkbox" name="is_active" required></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="submit" value="ADD"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>

<?php include ('admin-footer.html'); ?>