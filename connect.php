<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "min20617";
$db_name = "users";

$con = new mysqli($db_host, $db_user, $db_password, $db_name);
if($con->connect_errno) {die('Connection Error : '.$con->connect_error);}
?>