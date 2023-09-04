<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Profile</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/sidenav.css">
    <link rel="stylesheet" href="../css/header2.css">
    <link rel="stylesheet" href="../css/my_profile.css">
    <link rel="stylesheet" href="css/home.css">
    <script src="js/my_profile.js"></script>

   
  </head>
  <body>
    <!-- including side navigations -->
    <?php include("../sidenav.html"); ?>
    <div class="container-fluid">
      <div class="container">
        <!-- header section -->
        <?php
        require "header2.php";
        createHeader('user', 'Profile', 'Manage Admin Details');
        // header section end

        // Database connection
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "is";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        // SQL query to retrieve data from the admin table
        $sql = "SELECT * FROM admin";
        $result = $conn->query($sql);

        // Fetch the first row of data
        $row = $result->fetch_assoc();
        ?>

        <div class="form-container">
          <div class="form-group">
            <label>Admin ID</label>
            <input type="text" name="admin_id" value="<?php echo $row["Admin_ID"]; ?>" readonly>
          </div>

          <div class="form-group">
            <label>User Name</label>
            <input type="text" name="user_name" value="<?php echo $row["User_Name"]; ?>" readonly>
          </div>

          <div class="form-group">
            <label>First Name</label>
            <input type="text" name="first_name" value="<?php echo $row["First_Name"]; ?>" readonly>
          </div>

          <div class="form-group">
            <label>Last Name</label>
            <input type="text" name="last_name" value="<?php echo $row["Last_Name"]; ?>" readonly>
          </div>

          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" value="<?php echo $row["Password"]; ?>" readonly>
          </div>

          <div class="form-group">
            <label>Last Login</label>
            <input type="text" name="last_login" value="<?php echo $row["Last_login"]; ?>" readonly>
          </div>

          <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" value="<?php echo $row["Email"]; ?>" readonly>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
