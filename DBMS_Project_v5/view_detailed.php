<!DOCTYPE html>
<?php
require 'dbconfig/config.php';
 ?>
<html>
<head>
  <title>Project Page</title>
  <link rel="stylesheet" href="css\a2.css">
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
<body background="img/image_2.jpg">
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

        <h2>PROJECT PROGRESS</h2>
        <?php
          $querry7 = "select start_date,end_date from PROJECT where project_id='$id'";
          $result7 = mysqli_query($con,$querry7);
          $row7 = mysqli_fetch_array($result7);
          echo nl2br ("Start Date : ".$row7["start_date"]."\n");
          echo nl2br ("End Date : ".$row7["end_date"]."\n");
          $procedure_call = "call project_progress_finder('$id',@project_progress,@task_progress)";
          $get_return_values = "select @project_progress,@task_progress";
          $result_pf_proc = mysqli_query($con,$procedure_call);
          $result_return_values = mysqli_query($con,$get_return_values);
          $row_proc_call = mysqli_fetch_array($result_return_values);
          echo nl2br ("Project Progress : ".$row_proc_call['@project_progress']."%"."\n");
          echo nl2br ("Task Progress : ".$row_proc_call['@task_progress']."%"."\n");
        ?>
        <h2>MEMBERS' CONTRIBUTIONS</h2>
        <?php
        $query_for_members="select * from PROJECT_MEMBERS where project_id='$id'";
        $result_for_project_members_query = mysqli_query($con,$query_for_members);
        while($row_for_members = mysqli_fetch_array($result_for_project_members_query)){

          $empl_id = $row_for_members['manager'];
          echo nl2br("MANAGER : "."\n");
          echo nl2br ("Employee ID : ".$empl_id."\n");
          $proc_call = "call employee_contribution('$empl_id','$id',@perc)";
          $get_ret_value = "select @perc";
          $result_of_call = mysqli_query($con, $proc_call);
          $result_of_ret_value = mysqli_query($con, $get_ret_value);
          $row_returned = mysqli_fetch_array($result_of_ret_value);
          echo nl2br ("Percentage contributed : ".$row_returned['@perc']."%"."\n\n");

          $empl_id = $row_for_members['member1'];
          echo nl2br ("Employee ID : ".$empl_id."\n");
          $proc_call = "call employee_contribution('$empl_id','$id',@perc)";
          $get_ret_value = "select @perc";
          $result_of_call = mysqli_query($con, $proc_call);
          $result_of_ret_value = mysqli_query($con, $get_ret_value);
          $row_returned = mysqli_fetch_array($result_of_ret_value);
          echo nl2br ("Percentage contributed : ".$row_returned['@perc']."%"."\n\n");

          $empl_id = $row_for_members['member2'];
          echo nl2br ("Employee ID : ".$empl_id."\n");
          $proc_call = "call employee_contribution('$empl_id','$id',@perc)";
          $get_ret_value = "select @perc";
          $result_of_call = mysqli_query($con, $proc_call);
          $result_of_ret_value = mysqli_query($con, $get_ret_value);
          $row_returned = mysqli_fetch_array($result_of_ret_value);
          echo nl2br ("Percentage contributed : ".$row_returned['@perc']."%"."\n\n");

          $empl_id = $row_for_members['member3'];
          echo nl2br ("Employee ID : ".$empl_id."\n");
          $proc_call = "call employee_contribution('$empl_id','$id',@perc)";
          $get_ret_value = "select @perc";
          $result_of_call = mysqli_query($con, $proc_call);
          $result_of_ret_value = mysqli_query($con, $get_ret_value);
          $row_returned = mysqli_fetch_array($result_of_ret_value);
          echo nl2br ("Percentage contributed : ".$row_returned['@perc']."%"."\n\n");

          $empl_id = $row_for_members['member4'];
          echo nl2br ("Employee ID : ".$empl_id."\n");
          $proc_call = "call employee_contribution('$empl_id','$id',@perc)";
          $get_ret_value = "select @perc";
          $result_of_call = mysqli_query($con, $proc_call);
          $result_of_ret_value = mysqli_query($con, $get_ret_value);
          $row_returned = mysqli_fetch_array($result_of_ret_value);
          echo nl2br ("Percentage contributed : ".$row_returned['@perc']."%"."\n\n");

          $empl_id = $row_for_members['member5'];
          echo nl2br ("Employee ID : ".$empl_id."\n");
          $proc_call = "call employee_contribution('$empl_id','$id',@perc)";
          $get_ret_value = "select @perc";
          $result_of_call = mysqli_query($con, $proc_call);
          $result_of_ret_value = mysqli_query($con, $get_ret_value);
          $row_returned = mysqli_fetch_array($result_of_ret_value);
          echo nl2br ("Percentage contributed : ".$row_returned['@perc']."%"."\n\n");

          $empl_id = $row_for_members['member6'];
          echo nl2br ("Employee ID : ".$empl_id."\n");
          $proc_call = "call employee_contribution('$empl_id','$id',@perc)";
          $get_ret_value = "select @perc";
          $result_of_call = mysqli_query($con, $proc_call);
          $result_of_ret_value = mysqli_query($con, $get_ret_value);
          $row_returned = mysqli_fetch_array($result_of_ret_value);
          echo nl2br ("Percentage contributed : ".$row_returned['@perc']."%"."\n\n");
        }
      ?>
        <a href="viewproject.php"><input type="button" id="register_btn" value="back"/>
        </div>
 </body>
 </html>
