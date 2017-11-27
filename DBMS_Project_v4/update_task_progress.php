<?php
session_start();
require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>UPDATE TASKS</title>
  <link rel="stylesheet" href="css\style.css">
</head>
<body background="img/admin.jpg">
  <div id="main-wrapper">
  	<center><h2>UPDATE TASK PROGRESS</h2>
    <img src="img\avatar.png" class="avatar"/>
    </center>
    <form class="myform" action="update_task_progress.php" method="post">

    <label><b> Project ID:</b></label><br>
    <input name="pro_id" type="text" class="inputvalues" placeholder="project ID" required/><br><br>

    <label><b> TASK ID:</b></label><br>
    <input name="task_id" type="text" class="inputvalues" placeholder="project ID" required/><br><br>

    <label><b>STATUS:</b></label><br>
    <select class="status" id="signup_btn" name="status">
    <center>  
    <option value="starting soon">Starting Soon</option>
    <option value="ongoing">On Going</option>
    <option value="completed">Completed</option>
</center></select><br>

    <input name="update_btn" type="submit" id="signup_btn" value="Update Task"/><br><br>
    <a href="employee_details.php"><input type="button" id="back_btn" value="Back"/><br><br>   
</form>
<?php
	if(isset($_POST['update_btn']))
{
	$pro_id = $_POST['pro_id'];
  $tsk_id = $_POST['task_id'];
	$status = $_POST['status'];
	$query="update MILESTONES set status='$status' where project_id = '$pro_id' and task_id='$tsk_id'";
 	$query_run = mysqli_query($con,$query);
 	if($query_run)
    {
      echo'<script type="text/javascript"> alert("Successfully updated your task status") </script>';
    }
    else
      {
        echo'<script type="text/javascript"> alert("Cannot update try again later") </script>';
      }

}
?>
  </div>
</body>
</html>