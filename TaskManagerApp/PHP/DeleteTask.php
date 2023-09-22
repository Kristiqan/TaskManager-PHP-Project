<?php
require 'db.php';
$getid = $_GET['id'];
$query = "DELETE FROM task_info WHERE id = '$getid'";

$query_run = mysqli_query($con,$query);
if($query_run){
	header('Location:TasksPage.php');
}