<?php

  require 'db.php'; 
 
 if(count($_POST)>0) {
    $id = $_POST['id'];
    $name = $_POST['Name'];
    $description = $_POST['Description'];
    $date = $_POST['Date'];
    $query = "UPDATE task_info SET Name='$name', Description='$description', Date='$date'  WHERE id='$id'";
    $query_run = mysqli_query($con,$query);
    if($query_run) {
        header("Location:TasksPage.php");
    }
 }
 
 

  $sql = "SELECT * FROM task_info";
  $result=mysqli_query($con,"SELECT id, Name, Description, Date FROM task_info WHERE id=". $_GET['id'] ."");
  $row=mysqli_fetch_array($result);
 
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css">
    <script src="../Bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../Css/styles.css">
    <title>Edit Contact</title>
</head>
<body>
<form action="" method="POST" class="container mt-5">
<div class="mb-4">
<input type="hidden" name="id" class="form-control" value="<?php echo $row['id']; ?>"  />
<label class="form-label">Description</label>
 <input type="text"  class="form-control" value="<?php echo isset($row['Name']) ? $row['Name'] : '';?>" name="Name"/>
</div>
<div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control"  value="<?php echo isset($row['Description']) ? $row['Description'] : '';?>" name="Description" rows="3"></textarea>
  </div>
<div class="form-group"> 
        <label class="control-label" for="date">Date</label>
        <input class="form-control datepicker" data-mdb-toggle="datepicker" value="<?php echo isset($row['Date']) ? $row['Date'] : '';?>" name="Date" placeholder="YYY/MM/DD" type="text"/>
      </div>
<div class="text-center mt-5">
<button type="submit" class="btn btn-outline-primary" >Edit Task</button>
</div>
</form>
</body>
</html>