<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/trackingRespond.css">
    <link rel="stylesheet" href="../css/style.css">

    <!-- Load an icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://kit.fontawesome.com/3789102d06.js" crossorigin="anonymous"></script>
    <title>Medical Portal</title>
    <script src="js.js"></script>

    <title>Document</title>
</head>


<div>

<?php 
    include_once 'header.php';
?>

    
    <div class="container2">

        <div class="details">
            
            <div class="order">
                <h1>order <span>#7589409KLOM</span></h1>
            </div>
            <div class="date">
                <p>expectet arrivel 03/05/2023</p>
                <p>USPS <b>02154852147853</b></p>
            </div>
        </div>

        <div class="track">
            <ul id="progress" class="text-center">
                <li class="active"></li>
                <li class="active"></li>
                <li class="active"></li>
                <li class="active"></li>
            </ul>
        </div>

        <div class="list">
            <div class="list">
                <img src=".../images/trackingRespondimg/arrived.png" alt="">
                <p>order <br>procesed</p>
            </div>

            <div class="list">
                <img src=".../images/trackingRespondimg/shipping.png" alt="">
                <p>order <br>shipping</p>
            </div>

            <div class="list">
                <img src=".../images/trackingRespondimg/enroute.png" alt="">
                <p>order <br>Enroute</p>
            </div>

            <div class="list">
                <img src=".../images/trackingRespondimg/arrived.png" alt="">
                <p>order <br>arived </p>
            </div>
        </div>



    </div>

    <?php 
    include_once 'footer.php';
?>


</div>