<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/updateprofile.css">
     <link rel="stylesheet" href="../css/style.css">
    <!-- Load an icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/3789102d06.js" crossorigin="anonymous"></script>
    <title>Online Medical Portal</title>
</head>

<?php 
    include_once 'header.php';
?>
<?php 
session_start();

include("includes/dbh.inc.php");
include("includes/functions.inc.php");

       if(isset($_POST['updateprofile'])){
        
        $Firstname = $_POST['Firstname'];
        $Lastname = $_POST['Lastname'];
        $Email = $_POST['Email'];
        $Mobile_No = $_POST['Mobile_No'];
        $NIC_No = $_POST['NIC_No'];
        $username = $_POST['User_Name'];
        $password = $_POST['password'];
        $Address = $_POST['Address'];

        $query = "UPDATE patient SET Firstname = '$Firstname', Lastname = '$Lastname', Email = '$Email', Mobile_No = '$Mobile_No', NIC_No = '$NIC_No', User_Name = '$username', Password = '$password', Address = '$Address' WHERE Patient_ID";
        $query_run = mysqli_query($conn, $query);

      
  

         if($query_run){

            /*
      
                    //redirect to your profile page//

                    header("Location: adminDash.php");
       
                    die;

                             
*/
           //echo '<script type="text/javascript">alert("profile udated sucessfully!!!")</script>';

                    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully your profile updated!!!');
    window.location.href='profile.php';
    </script>");


          }

          else{

               echo '<script type="text/javascript">alert("profile not updated!!!")</script>';
           }

           

     }

?>


    
  
          <div class="User_prifile">
  <div class="registration_form">
    <div class="title">
      Update Your  Profile
    </div>

    <form action="#" method="POST">
      <div class="profile_form">
        <div class="input_details">
        <div class="input">            
            <input type="text" class="fname" name="Firstname" placeholder="First Name" required>
        </div>
        <div class="input"><br>
            <input type="text" class="lname" name="Lastname" placeholder="Last Name" >
        </div>
        </div>
        <!--<div class="input"><br>
           <input type="text" class="idclass" name="Patient_ID" value="<?php echo isset($_POST['Patient_ID']) ? $_POST['Patient_ID'] : ''; ?>" placeholder="ID">
         </div>-->
        <div class="input"><br>
          <input type="text" class="email" name="Email" placeholder="E-mail" required>
        </div>
        <div class="input"><br>
        <input type="text" class="email" name="Mobile_No" placeholder="Mobile Number" required>
        </div>
        <div class="input"><br>
          <input type="text" class="email" name="NIC_No" placeholder="NIC Number" required>
        </div>
        <div class="input"><br>
          <input type="text" class="uname" name="User_Name" placeholder="Username" required>
        </div>
        <div class="input"><br>
          <input type="password" class="password" name="password" placeholder="password" required>
        </div> 
        <div class="input"><br>
        <input type="text" class="Address" name="Address" placeholder="Enter Address" required>
        </div>     
        <div class="input">
          <input type="submit" value="Update Now" class="submit_btn" name="updateprofile">
        </div>
        
      </div>
    </form>
  </div>
</div>

<?php
include_once 'footer.php';
?>
