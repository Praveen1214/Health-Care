<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add New Customer</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/sidenav.css">
    <link rel="stylesheet" href="../css/add_new_cus.css">
    <link rel="stylesheet" href="../css/add_new_customer.css">
    <script src="../js/validateForm.js"></script>
    <script src="js/restrict.js"></script>
    <style>
  
      

    </style>
  </head>
  <body>
    <!-- including side navigations -->
    <?php include("../sidenav.html"); ?>
     <!-- header section -->
     <div id=header2>
     <?php
          if(isset($_GET['message'])){
            if($_GET['message']=='suc'){
              echo'<script> alert("Appointment submitted successfully.");</script>';
            }
          }
          require "header2.php";
          createHeader('handshake', 'Add Patient', 'Add New Patient');
          // header section end
        ?>
     </div>
     
    <div class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="row col col-md-6">
            <div class="form-container">
              <?php
                // form content
                require "../add_new_patient.html";
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
