<?php

include "includes/db_connection.php"; 

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $appointment_ID = $_POST['appointment_ID'];
    $email = $_POST['email'];
    $doctor = $_POST['doctor'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    $sql = "UPDATE `appointment` SET `name`='$name',`email`='$email',`doctor`='$doctor',`date`='$date',`time`='$time' WHERE `appointment_ID`='$appointment_ID'";
    $result = $con->query($sql);

    if ($result === TRUE) {
        echo '<script>';
        echo 'window.onload = function() {';
        echo '  alert("Appointment submitted successfully.");';
        echo '}';
        echo '</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}

if (isset($_GET['appointment_ID'])) {
    $appointment_ID = $_GET['appointment_ID'];

    $sql = "SELECT * FROM `appointment` WHERE `appointment_ID`='$appointment_ID'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $name = $row['name'];
            $email = $row['email'];
            $doctor = $row['doctor'];
            $date = $row['date'];
            $time = $row['time'];
        }
    } else {
        header('Location: viewAppointment.php');
        exit();
    }
} else {
    header('Location: viewAppointment.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/apointment.css">
    <title>Medical Portal - Edit Appointment</title>
    <style>
    body {
    background-color: #af578f;
    }
    </style>

</head>

<body >
    <div class="container">
        <div class="content">
            <div class="right-side">
                <div class="topic-text" style="font-family: Arial, sans-serif; text-align: center;">Edit your Appointment</div>
                <form method="post" action="">
                    <div class="input-box">
                        <input type="text" placeholder="Enter your name" name="name" value="<?php echo $name; ?>">
                    </div>
                    <div class="input-box">
                        <input type="email" placeholder="Enter your email" name="email" value="<?php echo $email; ?>">
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="Select Your Doctor" name="doctor" value="<?php echo $doctor; ?>">
                    </div>
                    <div class="input-box">
                        <input type="date" placeholder="Select a Date" name="date" value="<?php echo $date; ?>">
                    </div>
                    <div class="input-box">
                        <input type="time" placeholder="Select a time" name="time" value="<?php echo $time; ?>">
                    </div>
                    <div class="input-box">
                        <input type="hidden" name="appointment_ID" value="<?php echo $appointment_ID; ?>">
                        <button type="submit" name="update" value="Update">Update</button>
                    
                        <button type="button"><a href="viewAppointment.php">back</a></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
