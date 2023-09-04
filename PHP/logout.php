<?php
require "includes/db_connection.php";

if ($con) {
  $query = "UPDATE admin SET IS_LOGGED_IN = 'false'";
  $result = mysqli_query($con, $query);

  if ($result) {
    echo "Logout successful.";
  } else {
    echo "Error updating logout status: " . mysqli_error($con);
  }
} else {
  echo "Database connection error: " . mysqli_connect_error();
}

// Add the ALTER TABLE statement here
$alterQuery = "ALTER TABLE admin_credentials ADD COLUMN IS_LOGGED_IN TINYINT(1) NOT NULL DEFAULT 0";
$alterResult = mysqli_query($con, $alterQuery);
if ($alterResult) {
  echo "Column added successfully.";
} else {
  echo "Error adding column: " . mysqli_error($con);
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Logout</title>
  <script src="js/restrict.js"></script>
</head>
<body>

</body>
</html>
