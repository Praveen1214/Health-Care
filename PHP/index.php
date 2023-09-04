<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <!-- Load an icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/3789102d06.js" crossorigin="anonymous"></script>
    <title>Online Medical Portal</title>
</head>

<?php 
    include_once 'header.php';
?>


      <!--image slide show-->
      <div class="slideshow">
        <div class="slideshow-container">
            <div class="mySlides fade">
                <img src="../images/image1.png" style="width:100%; height:auto;">
            </div>
            <div class="mySlides fade">
                <img src="../images/image2.png" style="width:100%; height:auto;">
            </div>
            <div class="mySlides fade">
                <img src="../images/image3.png" style="width: 100%; height:auto;">
            </div>
            <div class="mySlides fade">
                <img src="../images/image1.png" style="width: 100%; height:auto;">
            </div>
        </div>
        <br>

        <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span> 
                <span class="dot" onclick="currentSlide(2)"></span> 
                <span class="dot" onclick="currentSlide(3)"></span> 
                <span class="dot" onclick="currentSlide(4)"></span> 
        </div>
    </div>

    <br>
    <br> 
    <br>
    <br>

  <h1 style="color:black; margin: 0px 160px">#1 Best Service</h1>
    <hr style="color:black; margin: 10px 100px; border:1px solid black">

  <p id="textdesign">Welcome to Website #1, your premier destination for the best healthcare services. We take pride in offering exceptional medical care, personalized attention, and a patient-centric approach. Our website serves as your gateway to accessing top-quality healthcare resources, expert advice, and convenient appointment scheduling. Discover why patients are attracted to our website and experience the best services available.</p>



  <div class="box">
    <div class="zoom1">
      <i class="fa fa-calendar" style="font-size:48px;color:dark-blue"></i>
      <br>
      <span class="text"><B>Make</B><br>Appoinment</span>
    </div>
    <div class="zoom2">
      <i class="fa fa-search" style="font-size:48px;color:dark-blue"></i>
      <br>
      
      <span class="text"><B>Find</B><br> My Meds</span>
    </div>
    <div class="zoom3">
      <i class='fas fa-shipping-fast' style='font-size:48px;color:dark-blue'></i>
      <br>
      
      <span class="text"><B>Medicine</B><br>
        Diliver</span>
    </div>

    <div class="zoom4">
      <i class="fa fa-user-md" style="font-size:48px;color:dark-blue"></i>
      <br>
      
      <span class="text"><B>Find Your</B><br>
        Doctor</span>
    </div>
  </div>
  
  <?php 
    include_once 'footer.php';
?>
  

 



  
