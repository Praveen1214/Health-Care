<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Manage Customer</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/sidenav.css">
    <link rel="stylesheet"href="../css/home.css">
    <link rel="stylesheet"href="../css/manage_patient.css">
    <script src="../js/manage.js"></script>
   
  </head>
  <body style="max-height: 100%;">
    <!-- including side navigations -->
    <?php include_once("../sidenav.html"); ?>

    <div class="container-fluid">
      <div class="container">

        <!-- header section -->
        <?php
          require_once "header2.php";
          createHeader('handshake', 'Manage Patinet','Manage Existing Patinet');
        ?>
        <!-- header section end -->

        <!-- form content -->
        <div class="row">

          <div class="col-md-12 form-group form-inline">
            <label class="font-weight-bold" for="">Search :&emsp;</label>
            <input type="text" class="form-control" id="" placeholder="Search Patinet" onkeyup="searchCustomer(this.value);">
          </div>

          <div class="col col-md-12">
            <hr class="col-md-12" style="padding: 0px; border-top: 2px solid  #02b6ff;">
          </div>

          <div class="col col-md-12 table-responsive">
            <div class="table-responsive">
            	<table class="table table-bordered table-striped table-hover">
            		<thead>
            			<tr>
                    <th style="width: 5%;">ID</th>
                    <th style="width: 10%;">First_Name</th>
                    <th style="width: 10%;">Last_Name</th>
                    <th style="width: 15%;">Email</th>
                    <th style="width: 8%;">Mobile No</th>
                    <th style="width: 13%;">Nic_No</th>
                    <th style="width: 10%;">U_Name</th>
                    <th style="width: 5%;">Password</th>
                    <th style="width: 13%;">Address</th>
                    

                    
            			</tr>
            		</thead>
            		<tbody id="customers_div">
                  <?php
                    require_once 'includes/manage.php';
                    showPatients(0);
                  ?>
            		</tbody>
            	</table>
            </div>
          </div>

        </div>
        <!-- form content end -->
        <hr style="border-top: 2px solid #ff5252;">
      </div>
    </div>
  </body>
</html>
