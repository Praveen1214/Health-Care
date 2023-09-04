<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dashboard - Home</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="images/icon.svg" type="image/x-icon">
    <link rel="stylesheet" href="../css/sidenav.css">
    <link rel="stylesheet" href="../css/home.css">
  </head>
  <body>
    <?php 
      session_start();
      include "../sidenav.html";
    ?>
    <div class="container-fluid">
      <div class="container">
        <!-- header section -->
        <?php
          require "header2.php";
          createHeader('home', 'Dashboard', 'Home');
        ?>
        <!-- header section end -->

        <!-- form content -->
        <div class="row">
          <div class="col col-xs-8 col-sm-8 col-md-8 col-lg-8">
            <?php
              function createSection1($location, $title, $table) {
                require 'includes/db_connection.php';

                $query = "SELECT * FROM $table";
                if($title == "Out of Stock")
                  $query = "SELECT * FROM $table WHERE QUANTITY = 0";

                $result = mysqli_query($con, $query);
                $count = mysqli_num_rows($result);

                if($title == "Expired") {
                  $count = 0;
                  while($row = mysqli_fetch_array($result)) {
                    $expiry_date = $row['EXPIRY_DATE'];
                    if(substr($expiry_date, 3) < date('y'))
                      $count++;
                    else if(substr($expiry_date, 3) == date('y')) {
                      if(substr($expiry_date, 0, 2) < date('m'))
                        $count++;
                    }
                  }
                }

                echo '
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4" style="padding: 10px">
                    <div class="dashboard-stats" onclick="location.href=\''.$location.'\'">
                      <a class="text-dark text-decoration-none" href="'.$location.'">
                        <span class="h4">'.$count.'</span>
                        <span class="h6"><i class="fa fa-play fa-rotate-270 text-warning"></i></span>
                        <div class="small font-weight-bold">'.$title.'</div>
                      </a>
                    </div>
                  </div>
                ';
              }

              echo '<div class="row1">';
              createSection1('manage_patient.php', 'Total Patient', 'patient');
              createSection1('#', 'Total Doctors', 'doctor');
              createSection1('#', 'Total Appointment', 'appointment');
              echo '</div>';

              echo '<div class="row1">';
              createSection1('#', 'Total Pharmacies', 'pharmacy');
              createSection1('#', 'Total Riders', 'riders');
              echo '</div>';
            ?>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
