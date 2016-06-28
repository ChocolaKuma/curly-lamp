<?php
$DB_HOST = "localhost";
$DB_USER = "root";
$DB_PASS = "";
$DB_ACC = "narvana";


$dbconnect = mysqli_connect($DB_HOST,$DB_USER,$DB_PASS,$DB_ACC);
if(mysqli_connect_errno()){echo 'Connection Error' .msqli_connect_error(); exit;}
?>