<!DOCTYPE html>
<html lang="en">
<head>

    <link href="styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>
    
/* .line {
  background-color: #320d3e;
  padding: 10px;
  width: 99%;
  margin-top:10px;
  border-radius: 20px;
  color: white;
} */
.hsptl{
    width: 98%;
    height:auto;
    background-color:#320d3e;
    border-radius:20px;
    display:flex;
    flex-direction:row;
    justify-content:space-around;
    align-items:center;
    margin-top:20px;
    margin-bottom:30px;
    color:white;
    padding: 20px;

}
.hsptl img{
    width:90%;
    height:auto;
    margin:10px;
    border-radius:10px;
}
.hsptl h3{
    margin:10px;
}
.hsptl p{
    margin:15px;
}


</style>

</head>
<body>
    <?php include ('navbar.html') ?>

<div class="line" align="center">
    <h2><u>Your Hospitals</u></h2>
    <h3>Book appointments through Hospitals.</h3>
</div>

<center><table class="hsptl">
    <tr>
        <th colspan="3" align="center">ABCD HOSPITAL</th>
    </tr>
    <tr>
        <div>
            <td>
                <img src="images/hsptls/amrita1.jpg" alt="hospital">
                
            </td>
            <td align="center">
                <h3>ABCD Hospital</h3>
                <p><b>Address:</b> ABCD Hospital, ABCD Road, ABCD City</p>
                <p><b>Contact:</b> +91-123-456789</p>
            </td>
            <td align="center">
                <h3>Specilization</h3>
                <p>Cardiology</p>
                <p>Neurology</p>
                <p>Orthopedics</p>

            </td>
        </div>
    </tr>
</table></center>



<?php include ('footer.html') ?>

</body>
</html>