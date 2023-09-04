<?php

include 'includes/dbh.inc.php';

$ID = $_GET['id'];
$sql = " DELETE FROM `patient` WHERE Patient_ID = $ID " ;
$query = mysqli_query($conn,$sql);




    //echo "Deleted!!!!";

	//header("location:pay.php "<script>alert("hellooo");</script>");


  echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully your profile Deleted');
    window.location.href='Login.php';
    </script>");




?>