<?php
include 'includes/dbh.inc.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/contact.css">

    <!-- Load an icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--Font-awesome CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" rel="stylesheet">
    <!--table-->
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">

    <script src="https://kit.fontawesome.com/3789102d06.js" crossorigin="anonymous"></script>
    <title>Feedback page</title>
    <script src="js.js"></script>

</head>


<?php
include_once 'header.php';
?>


<div class="container">
    <div class="content">
        <div class="right-side">
            <div class="topic-text">Send us a Feedback</div>
            <div class="card-header">
                <h4>Edit FeedBack
                    <a href="feedback.php" class="btn btn-danger float-end"><i class="fa-solid fa-circle-arrow-left"> Back</i></a>
                </h4>
            </div>
            <?php
                                if(isset($_GET['id']))
                                {
                                    $id = mysqli_real_escape_string($conn, $_GET['id']);
                                    $query = "SELECT * FROM feedback WHERE id='$id' ";
                                    $query_run = mysqli_query($conn, $query);
                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        $row = mysqli_fetch_array($query_run);
                                        ?>
            <form action="includes/code.php" method="post">
            <input type="hidden" name="id" value="<?= $row['id']; ?>">
                <div class="input-box">
                    <label>Name</label>
                    <input type="text" name="name" value="<?=$row['name'];?>">
                </div><br />
                <div class="input-box">
                    <label>Email Address</label>
                    <input type="text" name="email" value="<?=$row['email'];?>">
                </div><br />
                <div class="input-box">
                    <label>Date</label>
                    <input type="date" name="date" value="<?=$row['date'];?>">
                </div><br />
                <div class="input-box message-box">
                    <label>Feed Back</label>
                    <input name="feedback" id="text" value="<?=$row['feedback'];?>"></input>
                </div><br />
                <center>
                    <div class="button">

                        <button type="submit" name="send_update" class="btn_submit">Update Details</button>

                    </div>
                </center>
            </form>
            <?php
                                    }
                                    else
                                    {
                                        echo "<h4>No Such Id Found</h4>";
                                    }
                                }
                            ?>
        </div>
    </div>
</div>
<?php
include_once 'footer.php';
?>