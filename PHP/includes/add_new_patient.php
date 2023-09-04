<?php

$Firstname = $_POST['Firstname'];
$Lastname = $_POST['Lastname'];
$Email = $_POST['Email'];
$Mobile_No = $_POST['Mobile_No'];
$Nic_No = $_POST['Nic_No'];
$User_Name = $_POST['User_Name'];
$Password = $_POST['Password'];
$Address = $_POST['Address'];

// Database connection
$conn = new mysqli('localhost','root','','is');

if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed: ". $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO patient (Firstname, Lastname, Email, Mobile_No, Nic_No, User_Name, Password, Address) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("sssissss", $Firstname, $Lastname, $Email, $Mobile_No, $Nic_No, $User_Name, $Password, $Address);
    $execval = $stmt->execute();

    if ($execval == TRUE) {

        echo '<script>';
        echo 'window.onload = function() {';
       
        echo '}';
        echo '</script>';
        header('location:../add_patient.php?message=suc');

    }else{

      echo "Error:". $sql . "<br>". $con->error;

    } 

    $stmt->close();
}
?>
