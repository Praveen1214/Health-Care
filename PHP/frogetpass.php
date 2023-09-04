<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/frogetpass.css">
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

// Assuming you have a database connection established

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the form was submitted
    if (isset($_POST['Email'])) {
        $Email = $_POST['Email'];

        // Check if the email exists in the database
        $query = "SELECT * FROM patient WHERE Email = '$Email'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 1) {
            // Email exists, process the password reset
            if (isset($_POST['new_password'])) {
                $newPassword = $_POST['new_password'];

                // Update the password in the database
                $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

                $query = "UPDATE patient SET password = '$hashedPassword' WHERE Email = '$Email'";
                mysqli_query($connection, $query);

                // Display a success message to the user
                echo "Your password has been reset successfully.";
            } else {
                // Display the password reset form
                echo "
                <form method='POST' action='Fgverfy.php'>
                    <input type='hidden' name='email' value='$Email'>
                    <label for='new_password'>New Password:</label>
                    <input type='password' name='new_password' required>
                    <input type='submit' value='Reset Password'>
                </form>
                ";
            }
        } else {
            // Email does not exist in the database
            echo "Email not found.";
        }
    }
}
?>

<!-- HTML form for the login page -->
<div class ="frogetpass">
<form method="POST" action="Frogetpassverfy.php">
    <label class="For_lable" for="email">Enter Your Email to sent a link For change your password</label>
    <input class="For_Email" type="email" name="email" required placeholder="Email">
    <input type="submit" class="For_submit" value="Reset Password">
</form>  

<form method="POST" action="signup.php">
<input type="submit" class="For_submit" value="Creat a new Account">
</form>
</div>
<?php
include_once 'footer.php';
?>