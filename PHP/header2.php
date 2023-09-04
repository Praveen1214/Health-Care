<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Portal</title>
    <link rel="stylesheet" href="../css/header2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/3789102d06.js" crossorigin="anonymous"></script>
    <script src="js.js"></script>
</head>

<body>
    <?php
    function createHeader($icon, $heading, $sub_heading)
    {
        echo '
        <section class="row content-header">
            <div class="header-title col-md-11">
                <p class="h4 pt-2"><i class="fa fa-' . $icon . '"></i>&emsp;' . $heading . '</p>
                &emsp;&emsp;&emsp;<small class="font-weight-bold h6">' . $sub_heading . '</small>
            </div>
            <div class="col-md-1 user_options">
                <button class="col col-md-1 m-3" onclick="showOptions();">
                    <i class="fa fa-gear"></i>
                </button>
                <div id="mark"><i class="fa fa-play fa-rotate-270"></i></div>
                <ul id="options" class="options list-unstyled" style="display: none;">
                    <li>
                        <a href="my_profile.php"><i class="fa fa-user"></i><span>My Profile</span></a>
                    </li>
                    <li>
                        <a href="change_password.php"><i class="fa fa-edit"></i><span>Change Password</span></a>
                    </li>
                    <li>
                        <a href="includes/logout.inc.php"><i class="fa fa-key"></i><span>Logout</span></a>
                    </li>
                </ul>
            </div>
        </section>
        <hr style="border-top: 2px solid #ff5252;">
        ';
    }
    ?>
</body>

</html>
