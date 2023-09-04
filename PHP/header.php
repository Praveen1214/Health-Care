<?php

$current_page = basename($_SERVER['PHP_SELF']); // Get the current page filename

function isPageActive($page, $current_page) {
    // Check if the given page is the current page
    return ($page === $current_page) ? 'active' : '';
}

function isPageHover($page, $current_page) {
    // Check if the given page is the current page
    return ($page === $current_page) ? 'active hover' : '';
}
?>

<body>

<div class="header">
  <a href="#default" class="logo">
    <div class="header-right">
      <?php
      if (isset($_SESSION['Patient_ID'])) {
          // If a patient or admin is logged in, show the logout button
          echo '<a href="includes/logout.inc.php"><i class="fa fa-fw fa-user"></i>Logout</a>';

        }
       else {
          // If no user is logged in, show the login button
          echo '<a href="profile.php"><i class="fa fa-fw fa-user"></i></a>';
      }
      ?>
    </div>
    <img src="../images/logo.png" alt="Logo">
  </a>
</div>

<div class="topnav" id="myTopnav">
  <a href="index.php" class="<?php echo isPageActive('index.php', $current_page); ?>">Home</a>
  <a href="about.php" class="<?php echo isPageActive('about.php', $current_page); ?> <?php echo isPageHover('about.php', $current_page); ?>">About</a>
  <a href="#contact" class="<?php echo isPageActive('#', $current_page); ?> <?php echo isPageHover('#', $current_page); ?>">Doctors</a>
  <div class="dropdown">
    <button class="dropbtn">Service <i class="fa fa-caret-down"></i></button>
    <div class="dropdown-content">
      <a href="appointment.php">Make an Appointment</a>
      <a href="tracking.php">Find My Medicine</a>
      <a href="press.php">Medicine to Your Doorstep</a>
    </div>
  </div>
  <a href="contact.php" class="<?php echo isPageActive('contact.php', $current_page); ?>">Contact</a>
  <a href="feedback.php" class="<?php echo isPageActive('feedback.php', $current_page); ?>">Feedback</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
  <input id="searchbar1" type="text" placeholder="Search..">
</div>
