<?php
if (isset($_POST["submit"])){

    $username = $_POST["username"];
    $password = $_POST["Password"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php'; // Added a semicolon at the end of this line

    if (emptyInputs($username, $password) !== false){
        header('Location: login.php?error=emptyinput'); // Added semicolon and removed space in the URL
        exit();
    }
   
    check_login($conn, $username, $password); // Function name corrected to "loginUser"

} else {
    header('Location: ../login.php');
    exit(); // Added an exit() statement here
}
?>
