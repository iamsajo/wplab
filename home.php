
<?php include ('navbar.html') ?>


    
<?php

if(isset($_SESSION['name'])){
    echo '<div class="line">
    <h3>Welcome '.$_SESSION['name'].',</h3>
    </div>';
}
else{
    echo '<div class="line">
    <h3>Welcome , Guest</h3>
    </div>';
}

?>

<center><img style="border-radius:20px;height: 300px;width:auto;margin-top:20px" src="images/banner/banner1.jpg" alt="DOCTOR CONSULTATION"></center>
<center>
    <?php include('home-top.php') ?>

    <div style="text-align:left;margin-top:20px;margin-left:5%">
        <h2>Book an appointment for an in-clinic consultation</h2>
        <p>Find experienced doctors across all specialties</p>
    </div>
    <?php include('home-bottom.php') ?>

        
    <?php include ('footer.html') ?>


