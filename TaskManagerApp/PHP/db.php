<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "task_manager";


$con = mysqli_connect($servername, $username, $password, $dbname);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
 }
?>