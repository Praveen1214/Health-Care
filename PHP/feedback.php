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

            <form action="includes/code.php" method="post">
                <div class="input-box">
                    <label>Name</label>
                    <input type="text" name="name" placeholder="Enter Name">
                </div><br />
                <div class="input-box">
                    <label>Email Address</label>
                    <input type="text" name="email" placeholder="Enter Email">
                </div><br />
                <div class="input-box">
                    <label>Date</label>
                    <input type="date" name="date">
                </div><br />
                <div class="input-box message-box">
                    <label>Feed Back</label>
                    <textarea name="feedback" id="text" cols="30" rows="10" placeholder="Enter Feedback"></textarea>
                </div><br />
                <center>
                    <div class="button">

                        <button type="submit" name="send" class="btn_submit">Submit</button>

                    </div>
                </center>
            </form>
        </div>
    </div>
</div>
<div class="card-body">
    <table id="example" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Date</th>
                <th>Feedback</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM feedback";
            $query_run = mysqli_query($conn, $query);
            if (mysqli_num_rows($query_run) > 0) {
                foreach ($query_run as $row) {
            ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['name'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['date'] ?></td>
                        <td><?= $row['feedback'] ?></td>
                        <td>
                            
                            <a href="update_feedback.php?id=<?= $row['id']; ?>" class="btn btn-success btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                            <form action="includes/code.php" method="POST" class="d-inline">
                                <button type="submit" name="delete" value="<?= $row['id']; ?>" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
            <?php
                }
            } else {
                echo "<h5>No Record Found</h5>";
            }
            ?>
        </tbody>
    </table>
</div>
<?php
include_once 'footer.php';
?>