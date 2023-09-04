<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<?php 
    include_once 'header.php';
?>
<?php 

include "includes/db_connection.php"; 


  if (isset($_POST['submit'])) {
    $name = $_POST['name'];

    $email = $_POST['email'];

    $doctor = $_POST['doctor'];

    $date = $_POST['date'];

    $time = $_POST['time'];

    $sql = "INSERT INTO `appointment`(`name`, `email`, `doctor`, `date`, `time`) VALUES ('$name','$email','$doctor','$date','$time')";

    $result = $con->query($sql);

    if ($result == TRUE) {

        echo '<script>';
        echo 'window.onload = function() {';
        echo '  alert("Appointment submitted successfully.");';
        echo '}';
        echo '</script>';
        header('location:payment.php');
    }else{

      echo "Error:". $sql . "<br>". $con->error;

    } 

    $con->close(); 

  }

?>


<!DOCTYPE html>
<html lang="en"> 

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/apointment.css">
    <link rel="stylesheet" href="../css/style.css">

    <!-- Load an icon library
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://kit.fontawesome.com/3789102d06.js" crossorigin="anonymous"></script>
    <title>Medical Portal</title> -->
    <script src="js.js"></script>

</head>

<?php 
    include_once 'header.php';
?>


<div class="text">
    <div class="items">
        <div>
          <p class="intro-one">Meet The Best <br>Doctor</p>
        </div>
        <div>
          <p class="intro-two">we know how large objects will act but on a small scale</p>
        </div>
    </div>
</div>

<div class="container">
    <div class="content">
        <div class="right-side"> 
            <div class="topic-text">Make Your Appointment</div>
            <form method="post" action="">
                <div class="input-box">
                    <input type="text" placeholder="Enter your name" name="name" value="">
                </div>
                <div class="input-box">
                    <input type="email" placeholder="Enter your email" name="email" value="">
                </div>
                <div class="input-box">
                    <input type="text" placeholder="Select Your Doctor" name="doctor" value="">
                </div>
                <div class="input-box">
                    <input type="date" placeholder="Select a Date" name="date" id="date-input">
                    <span id="date-error" class="error-message"></span>
                    </div>

                    <script>
                    const dateInput = document.getElementById('date-input');
                    const dateError = document.getElementById('date-error');

                    // Get the current date
                    const currentDate = new Date().toISOString().split('T')[0];

                    // Add event listener to the date input field
                    dateInput.addEventListener('input', function() {
                        const selectedDate = this.value;

                        // Check if the selected date is before the current date
                        if (selectedDate < currentDate) {
                        alert("Please select a date today or in the future.");
                        dateInput.classList.add('error-input');
                        } else {
                        /*
                        //dateError.textContent = "";
                        dateInput.classList.remove('error-input');

                        // Check if the selected date already exists in the database
                        const url = 'checkdate.php'; 
                        const data = new FormData();
                        data.append('date', selectedDate);

                        fetch(url, {
                            method: 'POST',
                            body: data
                        })
                        .then(response => response.json())
                        .then(result => {
                            if (result.exists) {
                            dateError.textContent = "This date is already booked. Please select a different date.";
                            dateInput.classList.add('error-input');
                            }
                        })
                        .catch(error => console.log(error));*/
                        }
                    });
                    </script>
                <div class="input-box">
                    <input type="time" placeholder="Select a time" name="time" value="">
                </div>
                <div class="input-box">
                    <button type="submit" name="submit" value="submit">Submit</button>
                    <button type="reset">Reset</button>
                    <button type="button"><a href="viewAppointment.php">View your Appointment</a></button>
                </div>
                
                


            </form>
        </div> 
    </div> 
</div>

<?php 
    include_once 'footer.php';
?>
