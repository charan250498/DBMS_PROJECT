<?php
session_start();
require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Admin Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/admin.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,600,400italic,600italic,700' rel='stylesheet' type='text/css'>
<style type="text/css">
  table{
    border-collapse: collapse;
    font-size: 10pt;
  }
  table,th,td{
    border: 1px solid rgb(66, 134, 244);
      }
      th{
background:  rgb(66, 134, 244);
        color: white;
      }
      tr:nth-child(odd){
        background:  rgba(66, 134, 244,.2);
      }
</style>
</head>
<body>


<div id="header">
  <div class="logo">
	PROJECT TRACKING AND MANAGEMENT SYSTEM
  </div>

</div>


<a class="mobile">MENU</a>


<div id="container">

  <div class="sidebar">
    <ul id="nav">
      <li><a class="selected" href="#">Dashboard</a></li>
      <li><a href="add_project.php">CREATE NEW PROJECT</a></li>
      <li><a href="viewproject.php">VIEW RUNNING PROJECTS</a></li>
      <li><a href="employee.php">EMPLOYEE'S PAGE</a></li>
      <li><a href="index.php">LOGOUT</a></li>
    </ul>

  </div>

  <div class="content">
    <h1>WELCOME TO THE HOMEPAGE : HELLO <?php echo $_SESSION['username'] ?></h1>
    <p>A quick preview of all running projects and their progress</p>

    <div id="box">
     <div class="box-top">PROJECTS</div>
     <div class="box-panel">
     	<center>
    		<table>
      			<tr><th>PROJECT ID</th><th>PROJECT NAME</th><th>OBJECTIVE</th><th>DESCRIPTION</th><th>START DATE </th></tr>
      			<?php
      				$query="select * from PROJECT";
     				$result = mysqli_query($con,$query);
     				while($row = mysqli_fetch_array($result)){
        			echo "<tr><td>" .$row["project_id"]."</td><td>" .$row["project_name"].
        			"</td><td>" .$row["objective"]."</td><td>" .$row["description"].
        			"</td><td>" .$row["start_date"]."</td><td>";
      				}
      			?>
    	 	</table>
		</center>
     </div>
    </div>

<div id="box1">
     <div class="box-top1">TASKS/MILESTONES</div>
     <div class="box-panel1">
      <center>
        <table>
            <tr><th>PROJECT ID</th><th>TASK ID</th><th>TASK NAME</th><th>PERSON IN CHARGE</th><th>DUE DATE </th></tr>
            <?php
              $query="select * from MILESTONES";
            $result = mysqli_query($con,$query);
            while($row = mysqli_fetch_array($result)){
              echo "<tr><td>" .$row["project_id"]."</td><td>" .$row["task_id"].
              "</td><td>" .$row["task_name"]."</td><td>" .$row["person_in_charge"].
              "</td><td>" .$row["due_date"]."</td><tr>";
              }
            ?>
        </table>
    </center>
     </div>
    </div>

<div id="box2">
     <div class="box-top2">TASK_PROGRESS</div>
     <div class="box-panel2">
       <center>
        <table>
            <tr><th>PROJECT ID</th><th>TASK ID</th><th>STATUS </th></tr>
            <?php
              $query="select * from TASK_PROGRESS";
            $result = mysqli_query($con,$query);
            while($row = mysqli_fetch_array($result)){
              echo "<tr><td>" .$row["project_id"]."</td><td>".$row["task_id"]."</td><td>".$row["status"]."</td></tr>";
              }
            ?>
        </table>
    </center>
     </div>
    </div>

   <div id="box3">
     <div class="box-top3">PROJECT_PROGRESS</div>
     <div class="box-panel3">
       <center>
        <table>
            <tr><th>PROJECT ID</th><th>STATUS </th></tr>
            <?php
              $query="select * from PROJECT_PROGRESS";
            $result = mysqli_query($con,$query);
            while($row = mysqli_fetch_array($result)){
              echo "<tr><td>" .$row["project_id"]."</td><td>".$row["status"]."</td></tr>";
              }
            ?>
        </table>
    </center>
     </div>
    </div>

    <div id="box4">
     <div class="box-top4">EMPLOYEE_WORK_TRACK</div>
     <div class="box-panel4">
       <center>
        <table>
            <tr><th>EMPLOYEE ID</th><th>EMPLOYEE NAME</th><th>WORKED FOR HOURS</th></tr>
            <?php
              $query="select * from EMPLOYEE_WORK";
            $result = mysqli_query($con,$query);
            while($row = mysqli_fetch_array($result)){
              echo "<tr><td>" .$row["employee_id"]."</td><td>".$row["employee_name"]."</td><td>".$row["worked_for_hours"]."</td></tr>";
              }
              session_destroy();
            ?>
        </table>
    </center>
     </div>
    </div>


  </div>


</div><!-- #container -->

<script type="text/javascript">

	$(document).ready(function(){
     $("a.mobile").click(function(){
      $(".sidebar").slideToggle('fast');
     });

    window.onresize = function(event) {
      if($(window).width() > 480){
      	$(".sidebar").show();
      }
    };


	});

</script>

</body>
</html>
