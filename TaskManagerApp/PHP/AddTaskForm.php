<?php
$TaskAddedSuccessfully=false;
require 'db.php';  
if($_SERVER['REQUEST_METHOD']=='POST')
{

  $name=$_POST['Name'];
  $description=$_POST['Description'];
  $date=$_POST['Date'];
 


  $query = "INSERT INTO task_info(Name, Description, Date) 
       	    	  VALUES ('$name', '$description', '$date')";
        $results = mysqli_query($con, $query);
        if($results)
        {
          $TaskAddedSuccessfully=true;
        }

}
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
    <title>Add A New Task</title>
</head>
<body>
<?php
if($TaskAddedSuccessfully)
{
  echo '<div class="alert alert-success" role="alert">
  Task Added Successfully! You Can See The Task <a href="TasksPage.php">here</a></div>';
}

?>
<form action="AddTaskForm.php" method="POST" class="container mt-5">
<div class="mb-4">
 <label class="form-label">Task Name</label>
 <input type="text"  class="form-control" name="Name"/>
</div>
<div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" name="Description" rows="3"></textarea>
  </div>
  <div class="form-group"> 
        <label class="control-label" for="date">Date</label>
        <input class="form-control datepicker" data-mdb-toggle="datepicker"  name="Date" placeholder="YYY/MM/DD" type="text"/>
      </div>
<div class="text-center mt-5">
<button type="submit" class="btn btn-outline-primary" >Add A New Task</button>
</div>
</form>
</body>
</html>