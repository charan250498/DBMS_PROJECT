<?php
session_start();
require 'dbconfig/config.php';
 ?>
 <!DOCTYPE html>
 <html>
<head>
  <title>ADD NEW TASK</title>
  <link rel="stylesheet" href="css\style.css">
</head>
<body style="background-color:#7f8c8d">
  <div id="main-wrapper">
    <center><h2>ADD NEW TASK</h2>
    <img src="img\avatar.png" class="avatar"/>
    </center>

  <form class="myform" action="add_task.php" method="post">

    <label><b> PROJECT ID:</b></label><br>
    <input name="pro_id" type="text" class="inputvalues" placeholder="Enter project id" required/><br><br>

    <label><b> TASK ID:</b></label><br>
    <input name="task_id" type="text" class="inputvalues" placeholder="Enter project id" required/><br><br>

    <label><b> TASK NAME:</b></label><br>
    <input name="task_name" type="text" class="inputvalues" placeholder="Enter task" required/><br><br>

    <label><b> PERSON-IN-CHARGE:</b></label><br>
    <input name="person_in_chrg" type="text" class="inputvalues" placeholder="person name" required/><br><br>



    <!--<label><b>START DATE:</b></label>
    <input name="startdate" type="text" class="inputvalues" placeholder="yyyy-mm-dd" required/><br><br>
    <input type="datetime-local"/><br><br>-->

    <label><b>DUE DATE:</b></label>
    <input name="duedate" type="date" class="inputvalues" placeholder="yyyy-mm-dd" required/><br><br>
    <!--  <input type="datetime-local"/><br><br>-->

    <label><b> STATUS:</b></label><br>
    <select class="status" id="signup_btn" name="status">
    <center>  <option value="NEW">NEW</option>
</center></select><br>



    <input name="submit_btn" type="submit" id="signup_btn" value="ADD TASK"/><br><br>
    <a href="admin.php"><input  type="button" id="back_btn" value="Back"/>
</form>



<?php
if(isset($_POST['submit_btn']))
{
  $pro_id =$_POST['pro_id'];
  $task_id =$_POST['task_id'];
  $task_name =$_POST['task_name'];
  $pro_in_char =$_POST['person_in_chrg'];
  $duedate =$_POST['duedate'];
  $status =$_POST['status'];
  $query="select * from PROJECT WHERE project_id ='$pro_id'";
  $query_run = mysqli_query($con,$query);
  if(mysqli_num_rows($query_run)>0)
  {
    $query="insert into MILESTONES values('$pro_id','$task_id','$task_name','$pro_in_char','$duedate',' $status')";
    $query_run = mysqli_query($con,$query);
    if($query_run)
    {
      echo'<script type="text/javascript"> alert("tasks added") </script>';
    }
    else
      {
        echo'<script type="text/javascript"> alert("Error!") </script>';
      }

  }



}








 ?>

  </div>
</body>
</html>
