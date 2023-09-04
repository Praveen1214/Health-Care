<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/profile.css">
     <link rel="stylesheet" href="../css/style.css">
    <!-- Load an icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/3789102d06.js" crossorigin="anonymous"></script>
    <title>Online Medical Portal</title>
</head>


<?php 
session_start();

include("includes/dbh.inc.php");
include("includes/functions.inc.php");
include_once 'header.php';

    $user_data = check_login($conn);

?>

          <!-- body part my account code -->
  
    <div class="wrapper">
              <div class="left">
                  <img src="profilepic.webp"alt="user" width="200px" heigth="200px">
                  <button class="img_upload_btn">Upload image </button>
              </div>
    </div>
       
<!--information-->
<div class="Patient_profile">  
        <div class="details"> 
        <div class="show_username"><b>Hello !!! <?php echo $user_data['User_Name'];?></b></div>               
           <h1>Account Information</h1><hr/><br/>  
                <p><b>User name:-</b> <?php echo $user_data['User_Name'];?>  </p><br>
                <p><b>Email:-</b><?php echo $user_data['Email'];?> </p>
                <br>
                <p><b>First name:-</b><?php echo $user_data['Firstname'];?></p><br>
                <p><b>Last name:-</b><?php echo $user_data['Lastname'];?></p><br>
                <p><b>Addres   :-</b><?php echo $user_data['Address'];?></p><br>
                <h2>LOGOUT & SECURITY</h2><hr/><br>
                <div class="btn">
                <br><a href="updateProfile.php?id=<?php echo $user_data['Patient_ID'];?>">
                <button class="profile_update">Update</button></a>
                <a href="includes/logout.inc.php">
                <button class="profile_logout">Logout</button></a>
                <a href="deleteProfile.php?id=<?php echo $user_data['Patient_ID'];?>">
                <button class="profile_delete">Delete</button></a>
                </div>
         </div>
</div>
<?php
include_once 'footer.php';
?>