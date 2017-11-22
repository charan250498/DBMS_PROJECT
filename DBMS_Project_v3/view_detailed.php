<!DOCTYPE html>
<?php
require 'dbconfig/config.php';
 ?>
<html>
<head>
  <title>Project Page</title>
  <link rel="stylesheet" href="css\a1.css">
  <style type="text/css">
  table{
    border-collapse: collapse;

    font-size: 15pt;
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
<body style="background-color:#7f8c8d">
  <div id="main-wrapper">
    <center><h2>PROJECT
    <?php
      echo $_GET['pro_id'];
    ?></h2>
    <img src="img\avatar.png" class="avatar"/>
    </center>
  <center>
    <table>
      <tr><th>PROJECT ID</th><th>PROJECT NAME</th><th>OBJECTIVE</th><th>DESCRIPTION</th><th>START DATE </th><th>END DATE</th><th>DEPARTMENT ID</th><th>PROJECT MANAGER</th>
      <?php
      $id=$_GET['pro_id'];
      $query="select * from PROJECT where project_id='$id'";
      $result = mysqli_query($con,$query);
      while($row = mysqli_fetch_array($result)){
        echo "<tr><td>" .$row["project_id"].
        "</td><td>" .$row["project_name"].
        "</td><td>" .$row["objective"]."</td><td>" .$row["description"].
        "</td><td>" .$row["start_date"]."</td><td>" .$row["end_date"].
        "</td><td>" .$row["department_id"]."</td><td>"
        .$row["project_manager"]."</td></tr>";
      }
       ?>
       </center>
        </table>
       </div>

     <br><br><div id="main-wrapper">
<link rel="stylesheet" href="css\a2.css">


     <center>
        <table>
            <tr><th>PROJECT ID</th><th>TASK ID</th><th>TASK NAME</th><th>PERSON IN CHARGE</th><th>DUE DATE </th><th>STATUS</th></tr>
            <?php
              $query0="select * from MILESTONES where project_id='$id'";
              $result0 = mysqli_query($con,$query0);
              while($row = mysqli_fetch_array($result0)){
              echo "<tr><td>" .$row["project_id"]."</td><td>" .$row["task_id"].
              "</td><td>" .$row["task_name"]."</td><td>" .$row["person_in_charge"].
              "</td><td>" .$row["due_date"]."</td><td>".$row["status"]."</td></tr>";
              }
            ?>
          </center>
        </table>
        <a href="viewproject.php"><input type="button" id="register_btn" value="back"/>
        </div>
 </body>
 </html>
