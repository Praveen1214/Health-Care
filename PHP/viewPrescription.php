<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/viewpres.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<?php

include "includes/dbh.inc.php";
include "includes/db_connection.php";
include_once 'header.php';


$sql = "SELECT * FROM users";

$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view prescription</title>

    <link rel="stylesheet" href="../css/apointment.css">
</head>

<body>

    <div class="container">
        <h2 style="font-family: Arial, sans-serif; text-align: center;">Prescription Details</h2><br>
        <table class="table-new">
            <thead>
                <tr>
                    <th>Prescription id</th>
                    <th>name</th>
                    <th>email</th>
                    <th>Address</th>
                    <th>Phone</th>
                    
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                <?php

                if ($result->num_rows > 0) {

                    while ($row = $result->fetch_assoc()) {

                ?>

                        <tr>

                            <td><?php echo $row['id']; ?></td>

                            <td><?php echo $row['name']; ?></td>

                            <td><?php echo $row['email']; ?></td>
                            
                            <td><?php echo $row['address']; ?></td>

                            <td><?php echo $row['mobile_number']; ?></td>

                            

                            <td>
                                <div class="input-box" style="display: flex;">
                                    <button> <a href="updatePrescription.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;</button>
                                    <form action="includes/db.pres.php" method="POST" class="d-inline" style="margin-left: 15px;">
                                        <button type="submit" name="delete" value="<?= $row['id']; ?>" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </div>
                            </td>

                        </tr>


                <?php       }
                }

                ?>

            </tbody>
        </table>
    </div>
    <div class="input-box">
        <button type="button"><a href="press.php">back</a></button>
    </div>
    <?php
    include_once 'footer.php';
    ?>

</body>

</html>