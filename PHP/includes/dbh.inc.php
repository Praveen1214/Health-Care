<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "is";

if(!$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
else{
	//echo "connected";//
}
?>