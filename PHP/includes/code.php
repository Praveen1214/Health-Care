<?php

include 'dbh.inc.php';

if (isset($_POST['save'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    

    $query = "INSERT INTO contact (name,email,message) VALUES ('$name','$email','$message')";
    $query_run = mysqli_query($conn, $query);
    if ($query_run) {
        $_SESSION['message'] = "Created Successfully";
        echo '<script>';
        echo 'alert("Submitted successfully.");';
        echo 'window.location.href = "../contact.php";';
        echo '</script>';
        exit(0);
    } else {
        $_SESSION['message'] = "Not Created";
        header("Location: ../contact.php");
        exit(0);
    }
    
}

if (isset($_POST['send'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $feedback = mysqli_real_escape_string($conn, $_POST['feedback']);
    

    $query = "INSERT INTO feedback (name,email,date,feedback) VALUES ('$name','$email','$date','$feedback')";
    $query_run = mysqli_query($conn, $query);
    if ($query_run) {
        $_SESSION['message'] = "Created Successfully";
        echo '<script>';
        echo 'alert("Submitted successfully.");';
        echo 'window.location.href = "../feedback.php";';
        echo '</script>';
        exit(0);
    } else {
        $_SESSION['message'] = "Not Created";
        header("Location: ../feedback.php");
        exit(0);
    }
    
}


if (isset($_POST['send_update'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $feedback = mysqli_real_escape_string($conn, $_POST['feedback']);
    

    $query = "UPDATE feedback SET name='$name', email='$email', date='$date', feedback='$feedback' WHERE id='$id' ";
    $query_run = mysqli_query($conn, $query);
    if ($query_run) {
        $_SESSION['message'] = "Update Successfully";
        echo '<script>';
        echo 'alert("Updated  successfully.");';
        echo 'window.location.href = "../feedback.php";';
        echo '</script>';
        exit(0);
    } else {
        $_SESSION['message'] = "Not Update";
        header("Location: ../feedback.php");
        exit(0);
    }
    
}

if(isset($_POST['delete']))
{
    $id = mysqli_real_escape_string($conn, $_POST['delete']);
    $query = "DELETE FROM feedback WHERE id='$id' ";
    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Deleted Successfully";
        header("Location: ../feedback.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Not Deleted";
        header("Location: ../feedback.php");
        exit(0);
    }
}
?>