<?php include ('connection.php') ?>



<?php   

    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $contact=$_POST['contact'];
        if(empty($_POST['is_admin'])){
            $is_admin='False';
        }
        else{
            $is_admin='True';
        }
        if(empty($_POST['is_active'])){
            $is_staff='False';
        }
        else{
            $is_staff='True';
        }
        if(empty($_POST['is_active'])){
            $is_active='False';
        }
        else{
            $is_active='True';
        }

        $query="INSERT INTO user(usr_name,email,pass,contact,is_active,is_admin,is_staff) VALUES('$name','$email','$password','$contact','$is_active','$is_admin','$is_staff')";
        $result=mysqli_query($conn,$query);
        if($result){
            echo "<script>alert('user added successfully')</script>";
        }
        else{
            echo "Error: ".$query."<br>".mysqli_error($conn);
            echo "<script>alert('user not added')</script>";
        }
    }


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

<?php include ('admin-top.php') ?>


    <div class="div1" >
        <div align="center">
            <h3>USER &ensp;MANAGEMENT</h3>
        </div>
        <div style="color:#ffff;">
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
        
    </div>


    <div class="div-add">
        <div align="center">
            <h3>ADD&ensp; USER</h3>
        </div>
        <div>
            <form action="#" method="POST">
                <table width="100%" cellspacing="20">
                    <tr>
                        <th>
                            <label for="name">Name</label>
                        </th>
                        <td>
                            <input type="text" name="name">
                        </td>
                    </tr>
                    <tr>
                    <th>
                            <label for="email">Email</label>
                        </th>
                        <td>
                            <input type="email" name="email">
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="password">Password</label>
                        </th>
                        <td>
                            <input type="password" name="password">
                        </td>
                    </tr>
                    <tr>
                    <th>
                            <label for="contact">Contact</label>
                        </th>
                        <td>
                            <input type="text" name="contact">
                        </td>
                    </tr>
                    <tr>
                    <th>
                            <label for="is_admin">IsAdmin</label>
                        </th>
                        <td>
                            <input type="checkbox" name="is_admin">
                        </td>
                    </tr>
                    <tr>
                    <th>
                            <label for="is_staff">IsStaff</label>
                        </th>
                        <td>
                            <input type="checkbox" name="is_staff">
                        </td>
                    </tr>
                    <tr>
                    <th>
                            <label for="is_active">IsActive</label>
                        </th>
                        <td>
                            <input type="checkbox" name="is_active">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input type="submit" name="submit" value="ADD">
                        </td>
                </table>

            </form>
        </div>
    </div>



<?php include ('admin-footer.html') ?>
