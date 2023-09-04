<?php

 

$SERVER = 'localhost';
$USERNAME = 'root';
$PASSWORD = '';
$DB = 'is';

 

$con = mysqli_connect($SERVER, $USERNAME, $PASSWORD, $DB);
if(!$con) {
    die("<div class='text-danger text-center h5'>Oops, Unable to connect with database!</div>");
}


 

return $con;

 

?>