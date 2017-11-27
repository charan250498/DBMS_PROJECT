<?php
session_start();
require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>PROGRESS UPDATE </title>
  <link rel="stylesheet" href="css\style.css">
</head>
<body background="img/admin.jpg">
  <div id="main-wrapper">
  	<center><h2>UPDATE DAILY PROGRESS</h2>
    <img src="img\avatar.png" class="avatar"/>
    </center>
    <form class="myform" action="update_hours.php" method="post">
 <!--   <?php
    	$emp_id = $_SESSION['employee_id'];
		$emp_name = $_SESSION['employee_name'];
		echo $emp_name;
		echo $emp_id;
    ?>-->
    <label><b> Project ID:</b></label><br>
    <input name="pro_id" type="text" class="inputvalues" placeholder="project ID" required/><br><br>
    <label><b> Employee ID:</b></label><br>
    <input name="emp_id" type="text" class="inputvalues" placeholder="Employee ID" required/><br><br>

    <label><b>DATE:</b></label>
    <input name="ondate" type="date" class="inputvalues" placeholder="yyyy-mm-dd" required/><br><br>
    <!--<input type="datetime-local"/><br><br>-->
    <label><b> Employee Name:</b></label><br>
    <input name="emp_name" type="text" class="inputvalues" placeholder="Employee Name" required/><br><br>

    <label><b>WORKED FOR HOURS:</b></label><br>
    <input name="hours_of_work" type="text" class="inputvalues" placeholder="worked for hours" required/><br><br>

    <input name="update_btn" type="submit" id="signup_btn" value="Update work hours"/><br><br>
    <a href="employee_details.php"><input type="button" id="back_btn" value="Back"/><br><br>   
</form>
<?php
	if(isset($_POST['update_btn']))
{
	$pro_id = $_POST['pro_id'];
	$emp_id = $_POST['emp_id'];
	$ondate = $_POST['ondate'];
	$emp_name = $_POST['emp_name'];
	$worked = $_POST['hours_of_work'];
	$query="insert into EMPLOYEE_PROJECT_CONTRIBUTION values ('$pro_id','$emp_id','$ondate','$emp_name','$worked')";
 	$query_run = mysqli_query($con,$query);
 	if($query_run)
    {
      echo'<script type="text/javascript"> alert("Successfully updated your hours") </script>';
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