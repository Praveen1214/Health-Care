<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/signup.css">
     <link rel="stylesheet" href="../css/style.css">
    <!-- Load an icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/3789102d06.js" crossorigin="anonymous"></script>
    <title>Online Medical Portal</title>
</head>
<?php
include_once 'header.php';
?>

<div class="signin">


<?php
session_start();

include("includes/dbh.inc.php");
include("includes/functions.inc.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted
    $Firstname = $_POST['Firstname'];
    $Lastname = $_POST['Lastname'];
    $Email = $_POST['Email'];
    $Mobile_No = $_POST['Mobile_No'];
    $NIC_No = $_POST['NIC_No'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $Re_password = $_POST['Re_password'];
    $Address = $_POST['Address'];

    if (!empty($Firstname) && !empty($Lastname) && !empty($Email) && !empty($Mobile_No) && !empty($NIC_No) && !empty($username) && !is_numeric($username) && !empty($password) && !empty($Re_password) && !empty($Address)) {
        if ($password == $Re_password) {
            // save to database
            $user_id = uniqid();
            $query = "INSERT INTO patient (Patient_ID, Firstname, Lastname, Email, Mobile_No, NIC_No, User_Name, Password,  Address) VALUES ('$user_id', '$Firstname', '$Lastname', '$Email', '$Mobile_No', '$NIC_No', '$username', '$password', '$Address')";
            mysqli_query($conn, $query);

            echo ("<script LANGUAGE='JavaScript'>
                window.alert('Successfully signed up!');
                window.location.href='Login.php';
                </script>");
        } else {
            echo "Please enter the same password for confirmation!";
        }
    } else {
        echo "Please enter valid information in all fields!";
    }
}
?>

    <form action="#" method="post" class="signin_form">
        <h2 class="signinpara">Register</h2>

        <div class="sign1">
            <input type="text" id="first_name" name="Firstname" placeholder="First Name" required>
            <input type="text" id="Last_name" name="Lastname" placeholder="Last Name" required>
        </div>

        <div class="sign2">
            <input type="text" id="Email" name="Email" placeholder="Email" required>
            <input type="text" id="Mobile_No" name="Mobile_No" placeholder="Mobile No" required>
        </div>

        <div class="sign2">
            <input type="text" id="NIC_No" name="NIC_No" placeholder="NIC No" required>
            <input type="text" id="singiUserName" name="username" placeholder="User Name" required>
        </div>

        <div class="sign4">
            <input type="password" id="singinpassword" name="password" placeholder="Password" required>
            <input type="password" id="singin_Re_pass" name="Re_password" placeholder="Re-Enter Password" required>
        </div>

            <input type="text" id="Address" name="Address" placeholder="Enter Address" required>
            <input type="checkbox" name="remember2" class="checkbox2">
            <label class="remember-me2" for="remember">I accept Terms & conditions</label>
            <br>
            <input type="submit" class="signin_submit" value="sign Up">
        </div>
        <p class="return_login">Already have an account? <a href="login.php">Login</a></p>
    </form>

    <?php
    if (isset($_POST["error"])) {
        if ($_POST["error"] == "emptyinputs") {
            echo '<div class="error">Fill in all fields</div>';
        }
         elseif ($_POST["error"] == "invaliduid") {
            echo '<div class="error">Invalid username</div>';
        } 
        elseif ($_POST["error"] == "invalidEmail") {
            echo '<div class="error">Invalid Email</div>';
        } 
        elseif ($_POST["error"] == "passwordsdontmatch") {
            echo '<div class="error">Passwords do not match</div>';
        } 
        elseif ($_POST["error"] == "stmtfailed") {
            echo '<div class="error">Something went wrong</div>';
        } 
        elseif ($_POST["error"] == "none") {
            echo '<div class="error">Account created</div>';
        } 
        elseif ($_POST["error"] == "usernametaken") {
            echo '<div class="error">Username or email already taken</div>';
        }
    }
    ?>
</div>

<?php
include_once 'footer.php';
?>
