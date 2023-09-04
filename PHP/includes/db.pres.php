<?php

include './dbh.inc.php';

if (isset($_POST['save'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);

    $query = "INSERT INTO users (name,email,address,mobile_number) VALUES ('$name','$email','$address','$phone')";
    $query_run = mysqli_query($conn, $query);
    if ($query_run) {
        $_SESSION['message'] = "Created Successfully";
        header("Location: ../press.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Not Created";
        header("Location: ../press.php");
        exit(0);
    }
}


if(isset($_POST['delete']))
{
    $id = mysqli_real_escape_string($conn, $_POST['delete']);
    $query = "DELETE FROM prescription WHERE id='$id' ";
    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Deleted Successfully";
        header("Location: ../viewPrescription.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Not Deleted";
        header("Location: ../viewPrescription.php");
        exit(0);
    }
}
?>


