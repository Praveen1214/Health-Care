<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/findmymed.css">

    <!-- Load an icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://kit.fontawesome.com/3789102d06.js" crossorigin="anonymous"></script>
    <title>Medical Portal</title>
    <script src="js.js"></script>

</head>

<?php 
    include_once 'header.php';
?>



  <div class="main-content">
    <div class="left">
      <div class="title">Medicine to YourDoorstep</div>
      <div class="upload-block">
      <i class="fa fa-upload" style="font-size:48px;color:red"></i>
          
          </span>
        Tap to upload your Prescription
      </div>
    </div>
    <div class="right">
      <input type="text" class="input-item" placeholder="Name"><br>
      <input type="text" class="input-item" placeholder="Area/Location"><br>
      <input type="text" class="input-item" placeholder="Local Mobile Number"><br>
      <textarea name="message" class="input-item" rows="10" cols="60">
        Note...
      </textarea>
      <br>
      <input type="checkbox" id="tick" name="tick">
      <label id="tick"> By clicking submit we consider that you agree to the<br> <a href="#">Terms & Conditions</a> and <a
          href="#">Privacy Notice</a></label>

        <br><br>
      <button class="btn">Submit</button>
    </div>
  </div>


  <?php 
    include_once 'footer.php';
?>

<body>