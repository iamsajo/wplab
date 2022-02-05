<?php include ('navbar.html') ?>
<div class="line" align="center">
    <h2><u>Our Specialist</u></h2>
</div>

<center><table class="hsptl">

<?php
    $sql = "SELECT name,exp,education,hspl,field,fees, contact,img FROM doctor where is_active = 'True'";
    $retval = mysqli_query( $conn, $sql);
    $rows = mysqli_fetch_all($retval, MYSQLI_ASSOC );
    foreach((array)$rows as $row){
        $name=$row['name'];
        $exp=$row['exp'];
        $education=$row['education'];
        $hsptl=$row['hspl'];
        $field=$row['field'];
        $fees=$row['fees'];
        $contact=$row['contact'];
        $imgsrc=$row['img'];

        echo '
        
        <tr>
        <th colspan="3" align="center">'.$name.'</th>
        </tr>
        <tr>
        <div>
        <td>
        <img src="'.$imgsrc.'" alt="hospital">
                
            </td>
            <td align="center">
                <h3>'.$name.'</h3>
                <p><b>Experience:</b>'.$exp.'</p>
                <p><b>Education:</b>'.$education.'</p>
                <p><b>Hospital:</b>'.$hsptl.'</p>
                <p><b>Field:</b>'.$field.'</p>
                <p><b>Fees:</b>'.$fees.'</p>
                <p><b>Contact:</b>'.$contact.'</p>
                </td>
                </div>
                </tr>
                <tr>
                <td>
                <a href="appointment.php"><button>Take an Appointment</button></a>
                </td>
                </tr>
                <tr>
                <td colspan="3"><hr><hr>
                </tr>
                ';
    }
?>
</table></center>
<br><br>

<?php include ('footer.html') ?>
