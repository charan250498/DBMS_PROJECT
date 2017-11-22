<!DOCTYPE html>
<?php
require 'dbconfig/config.php';
 ?>
<html>
<head>
  <title>Project Page</title>
  <link rel="stylesheet" href="css\a1.css">
</head>
<body style="background-color:#7f8c8d">
  <div id="main-wrapper">
    <center><h2>EMPLOYEE DETAILS
    </h2>
    <img src="img\avatar.png" class="avatar"/><br>
    <br>
    <h3>
    <?php
      $id=$_GET['emp_id'];
      echo $id;
    ?></h3>
    </center>

      <?php
        $query="select * from EMPLOYEE where employee_id='$id'";
        $result = mysqli_query($con,$query);
        $row = mysqli_fetch_array($result);
      ?>
      <label><b> Employee ID : </b></label><?php echo $row["employee_id"]; ?><br><br>
      <label><b> Employee Name : </b></label><?php echo $row["employee_name"]; ?><br>
      <label><b> Employee Gender : </b></label><?php echo $row["gender"]; ?><br>
      <label><b> Employee username : </b></label><?php echo $row["username"]; ?><br>
      <label><b> Employee Password : </b></label><?php echo $row["password"]; ?><br>
      <label><b> Employee skill : </b></label><?php echo $row["skill"]; ?><br><br>

      <h2> TASKS ASSIGNED </h2>
      <?php
        $query11="select * from MILESTONES where person_in_charge='$id'";
        $result11 = mysqli_query($con,$query11);
        
        while($row = mysqli_fetch_array($result11)){
          echo nl2br ("Project ID : ".$row["project_id"]."\n");
          echo nl2br ("Task ID : ".$row["task_id"]."\n");
          echo nl2br ("Task Name : ".$row["task_name"]."\n");
          echo nl2br ("Due Date : ".$row["due_date"]."\n\n");
        }
      ?>
      <a href="update_hrs.php"><input type="button" name="login" id="login_btn" value="Update hours worked"/><br><br>
      <a href="update_tasks.php"><input type="button" name="login" id="login_btn" value="Update Task Assigned"/><br><br>
      <a href="employee.php"><input type="button" name="login" id="register_btn" value="back"/><br><br>
        </div>
 </body>
 </html>
