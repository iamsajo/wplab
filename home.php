
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
        #card {
            margin-right: 10px;

        }

        #card img {
            height: auto !important;
        }

        .line h3 {
            margin-left: 10px;
        }
        </style>
</head>

<body>


<?php include ('navbar.html') ?>
    <div class="line">
    <h3>Welcome Guest,</h3>
</div>

<center><img style="border-radius:20px;height: 300px;width:auto;margin-top:20px" src="images/banner/banner1.jpg" alt="DOCTOR CONSULTATION"></center>
<center>
    <div class="container1">
        <div id="card">
            <a href="#">
                <img src="images/services/video-call.png" alt="doctor" style="width:50%;height:50%;"><br>
                <h3>Video Consultation</h3>
                <p>Video Consultation within 60sec</p>
            </a>
        </div>
        <div id="card">
            <a href="#">
                <img src="images/services/medicine.png" alt="medicine" style="width:50%;height:50%;"><br>
                <h3>Medicine</h3>
                <p>Doorstep Medicine Delivery</p>
            </a>
        </div>
        <div id="card">
            <a href="#">
                <img src="images/services/surgery-room.png" alt="surgery" style="width:50%;height:50%;"><br>
                <h3>Surgery</h3>
                <p>Safe and trusted surgery centers</p>
            </a>
        </div>
        <div id="card">
            <a href="#">
                <img src="images/services/blood-test.png" alt="test" style="width:50%;height:50%;"><br>
                <h3>Lab test</h3>
                <p>Sample pickup at your home</p>
            </a>
        </div>
        <div id="card">
            <a href="#">
                <img src="images/services/consulting.png" alt="consulting" style="width:50%;height:50%;"><br>
                <h3>Messenger</h3>
                <p>One-to-One Messagging</p>
            </a>
        </div>
    </div></center>
    <div style="text-align:left;margin-top:20px;margin-left:5%">
        <h2>Book an appointment for an in-clinic consultation</h2>
        <p>Find experienced doctors across all specialties</p>
    </div>
    <center>
        <div class="container1">
            
            <div id="card2">
                <a href="#">
                    <img src="images/dr/dentist.jpg" alt="dentist"><br>
                    <h3>Dentist</h3>
                    <p>Teething troubles? Schedule a dental checkup</p>
                </a>
            </div>
            
            <div id="card2">
                <a href="#">
                    <img src="images/dr/diet.jpg" alt="diet"><br>
                    <h3>Dietitian</h3>
                    <p>Get guidence on eating right, weight management and sports nutrition</p>
                </a>
            </div>
            
            <div id="card2">
                <a href="#">
                    <img src="images/dr/gas.jpg" alt="gas"><br>
                    <h3>Gastroenterologist</h3>
                    <p>Explore for issues related to digestive system,liver and pancreas</p>
                </a>
            </div>
            
            <div id="card2">
                <a href="#">
                    <img src="images/dr/general.jpg" alt="general"><br>
                    <h3>General Physician</h3>
                    <p>Find the right family doctor in your neighborhood</p>
                </a>
            </div>
            
            <div id="card2">
                <a href="#">
                    <img src="images/dr/gyne.jpg" alt="gyne"><br>
                    <h3>Gynecologist</h3>
                    <p>Explore for women's health, pregnancy and infertility treatments</p>
                </a>
            </div>
            <div id="card2">
                <a href="#">
                    <img src="images/dr/ortho.jpg" alt="ortho"><br>
                    <h3>Orthopedist</h3>
                    <p>For bone and joints issues, spinal injuries and more</p>
                </a>
            </div>
            <div id="card2">
                <a href="#">
                    <img src="images/dr/pedi.jpg" alt="pedi"><br>
                    <h3>Pediatrician</h3>
                    <p>Child specialists and doctor for infants</p>
                </a>
            </div>
            <div id="card2">
                <a href="#">
                    <img src="images/dr/physio.jpg" alt="physio"><br>
                    <h3>Physiotherapist</h3>
                    <p>Pulled a muscle? Get it treated by a trained physiotherapist</p>
                </a>
            </div><div id="card2">
                <a href="#">
                    <img src="images/dr/surgeon.jpg" alt="surgeon"><br>
                    <h3>General Surgeon</h3>
                    <p>Need to get operated? Find the right surgeon</p>
                </a>
            </div>
            
        </div>
    </center>

        
    <?php include ('footer.html') ?>
    </body>
</html>


