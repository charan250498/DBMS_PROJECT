<!DOCTYPE html>
<?php
session_start();
require 'dbconfig/config.php';
 ?>
<html>
<head>
  <title>Project Page</title>
  <link rel="stylesheet" href="css\a1.css">
</head>
<body background="img/1.jpg">
  <div id="main-wrapper">
    <center><h2>EMPLOYEE DETAILS
    </h2>
    <img src="img\avatar.png" class="avatar"/><br>
    <br>
    <h3>
    <?php
      $id=$_SESSION['emp_id'];
      echo $id;
    ?></h3>
    </center>

      <?php
        $query="select * from EMPLOYEE where employee_id='$id'";
        $result = mysqli_query($con,$query);
        $row = mysqli_fetch_array($result);
      ?>
      <label><b> Employee ID : </b></label><?php echo $row["employee_id"]; ?><br><br>
      <label><b> Employee Name : </b></label><?php
       $emp_name = $row["employee_name"];
       echo $emp_name; 
       ?><br>
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
      <h2> YOUR CONTRIBUTION TO PROJECT </h2>
      <?php
        $query_for_projects="select project_id from PROJECT_MEMBERS where manager='$id' OR member1='$id' OR member2='$id' OR member3='$id' OR member4='$id' OR member5='$id' OR member6='$id'";
        $result_for_project_query = mysqli_query($con,$query_for_projects);
        while($row_for_projects = mysqli_fetch_array($result_for_project_query)){
          $pro_id = $row_for_projects['project_id'];
          echo nl2br ("Project ID : ".$pro_id."\n");
          $procedure_call = "call employee_contribution('$id','$pro_id',@percent_contribution)";
          $get_return = "select @percent_contribution";
          $result_proc_call = mysqli_query($con,$procedure_call);
          $result_return_values = mysqli_query($con,$get_return);
          $row_contribution = mysqli_fetch_array($result_return_values);
          echo nl2br ("Percentage_contributed : ".$row_contribution['@percent_contribution']."%"."\n\n");
        }
      ?>
      <a href="update_hours.php"><input type="button" name="update" id="login_btn" value="Update hours worked"/><br><br>
      <a href="update_task_progress.php"><input type="button" name="login" id="login_btn" value="Update Task Assigned"/><br><br>
<?php
if(isset($_POST['update']))
{ 
  session_start();
  $_SESSION['employee_id']= $id;
  $_SESSION['employee_name']= $emp_name;
  header('location:update_hours.php');
}
?>   
      <a href="employee.php"><input type="button" name="login" id="register_btn" value="back"/><br><br>
        </div>
 </body>
 </html>
