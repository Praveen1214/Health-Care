<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/pre.css">

    <!-- Load an icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://kit.fontawesome.com/3789102d06.js" crossorigin="anonymous"></script>
    <title>Medical Portal</title>
    <script src="js.js"></script>

</head>
<?php
if (isset($_GET['message'])) {
    if ($_GET['message'] == 'suc') {
        echo '<script> alert("Appointment submitted successfully.");</script>';
    }
}
include_once 'header.php';
?>

<div class="imgabout">
    <img src="images/image1.png" alt="">
</div>
<div class="main-content">
    <div class="left">
        <div class="title"><br><br>
            New Prescription
        </div>
        </br>
        <div class="upload-block">
           Top to upload Prescription
            <center>
            <form action="/action_page.php" style="margin-left: 55px;">
                <input type="file" id="myFile" name="filename">
            </form>
            </center>
        </div>
        </br>
    </div>
    <div class="right">
        <form id="form" action="includes/db.pres.php" method="post">
            <input type="text" name="name" class="input-item" placeholder="Name"><br>
            <input type="text" name="email" class="input-item" placeholder="Email"><br>
            <input type="text" name="address" class="input-item" placeholder="Address"><br>
            <input type="text" name="phone" class="input-item" placeholder="Phone"><br>
            <textarea name="message" id="text" cols="82" rows="10" placeholder="Enter Your message"></textarea>

            </br>
            <input type="checkbox" id="tick" name="tick" required>
            <label for="tick">By clicking submit we consider that you agree to the </br><a href="#">Terms & Conditions</a> and <a href="#">Privacy Notice</a>.</label>
            <br><br>
            <div class="btn">
                <button type="submit" name="save" class="submit_btn"><b>Submit</b></button>
                <a href="viewPrescription.php" class="view_btn"><b>View </b></a>
            </div>
        </form>
    </div>
</div>

<?php
include_once 'footer.php';
?>