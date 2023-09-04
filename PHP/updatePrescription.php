<?php

include "includes/dbh.inc.php"; 

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "UPDATE `users` SET `name`='$name',`email`='$email'";
    $result = $conn->query($sql);

    if ($result === TRUE) {
        echo '<script>';
        echo 'window.onload = function() {';
        echo '  alert("Prescription submitted successfully.");';
        echo '}';
        echo '</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM `users` WHERE `id`='$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $name = $row['name'];
            $email = $row['email'];
        }
    } else {
        header('Location: viewPrescription.php');
        exit();
    }
} else {
    header('Location: viewPrescription.php');
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
    <title>Medical Portal - Edit prescription</title>
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
                <div class="topic-text" style="font-family: Arial, sans-serif; text-align: center;">Edit your prescription</div>
                <form method="post" action="">
                    <div class="input-box">
                        <input type="text" placeholder="Enter your name" name="name" value="<?php echo $name; ?>">
                    </div>
                    <div class="input-box">
                        <input type="email" placeholder="Enter your email" name="email" value="<?php echo $email; ?>">
                    </div>
                    
                    <div class="input-box">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <button type="submit" name="update" value="Update">Update</button>
                    
                        <button type="button"><a href="viewPrescription.php">back</a></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
