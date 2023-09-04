<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/style.css">
    <!-- Load an icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/3789102d06.js" crossorigin="anonymous"></script>
    <title>Online Medical Portal</title>
</head>

<body>
    <?php 
        session_start();
        include_once 'header.php';
        include("includes/dbh.inc.php");
        require_once ('includes/db_connection.php');

        include("includes/functions.inc.php");

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            //something was posted
            $username = $_POST['username'];
            $password = $_POST['password'];

            if (!empty($username) && !empty($password) && !is_numeric($username)) {
                // Check in patient table
                $query = "SELECT * FROM patient WHERE User_Name = '$username' LIMIT 1";
                $result = mysqli_query($conn, $query);

                if ($result && mysqli_num_rows($result) > 0) {
                    $user_data = mysqli_fetch_assoc($result);

                    if ($user_data['Password'] === $password) {
                        $_SESSION['Patient_ID'] = $user_data['Patient_ID'];
                        header("Location:index.php"); // Redirect patient to index.php
                        die;
                    }
                }

                // Check in admin table
                $query = "SELECT * FROM admin WHERE User_Name = '$username' LIMIT 1";
                $result = mysqli_query($conn, $query);

                if ($result && mysqli_num_rows($result) > 0) {
                    $user_data = mysqli_fetch_assoc($result);

                    if ($user_data['Password'] === $password) {
                        $_SESSION['Admin_ID'] = $user_data['Admin_ID'];
                        header("Location: home.php"); // Redirect admin to home.php
                        die;
                    }
                }
                //check in doctor
                // Check in admin table
                $query = "SELECT * FROM doctor WHERE User_Name = '$username' LIMIT 1";
                $result = mysqli_query($conn, $query);

                if ($result && mysqli_num_rows($result) > 0) {
                    $user_data = mysqli_fetch_assoc($result);

                    if ($user_data['Password'] === $password) {
                        $_SESSION['Doctor_ID'] = $user_data['Doctor_ID'];
                        header("Location: appointment.php"); // Redirect doctor to home.php
                        die;
                    }
                }
                echo "Wrong username or password!";
            } else {
                echo "Wrong username or password!";
            }
        }
    ?>

    <form id="form" action="login.php" method="post" class="login_form">
        <h2 class="loginpara">Welcome back</h2>
        <input type="text" id="username" name="username" placeholder="Username/Email" required>
        <br>
        <input type="password" id="password" name="password" placeholder="Password" required>
        <div id="remember">
            <input type="checkbox" name="remember">
            <label class="remember-me" for="remember">Remember me:</label>
            <input type="submit" class="login_submit" value="Login">
        </div>
        <div>
         <p class="Frogrt_password"><a class="Frogrt_password" href="Frogetpass.php">Forget Password?</a></p>
        </div>
        <div>
            <p class="sign-up-link">Don't have an account? <a class="signup-link" href="signup.php">Sign up</a></p>
        </div>
    </form>
</body>

</html>
