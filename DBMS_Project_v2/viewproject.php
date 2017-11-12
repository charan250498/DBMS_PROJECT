<!DOCTYPE html>
<?php
require 'dbconfig/config.php';
 ?>
<html>
<head>
  <title>DISPLAY</title>
  <link rel="stylesheet" href="css\a1.css">
  <style type="text/css">
  table{
    border-collapse: collapse;

    font-size: 15pt;
  }
  table,th,td{
    border: 1px solid rgb(255,51,153);
      }
      th{
background:  rgb(255,51,153);
        color: white;
      }
      tr:nth-child(odd){
        background:  rgba(255,51,153,.2);
      }
      </style>
</head>
<body style="background-color:#7f8c8d">
  <div id="main-wrapper">
    <center><h2>PROJECTS</h2>
    <img src="img\avatar.png" class="avatar"/>
    </center>
  <center>
    <table>
      <tr><th>PROJECT ID</th><th>PROJECT NAME</th><th>OBJECTIVE</th><th>DESCRIPTION</th><th>START DATE </th><th>END DATE</th><th>DEPARTMENT ID</th><th>PROJECT MANAGER</th>
      <?php
      $query="select * from PROJECT";
      $result = mysqli_query($con,$query);
      while($row = mysqli_fetch_array($result)){
        echo "<tr><td>" .$row["project_id"]."<a href='edit.php?edit=$row[project_id]'>edit</td><td>" .$row["project_name"].
        "</td><td>" .$row["objective"]."</td><td>" .$row["description"].
        "</td><td>" .$row["start_date"]."</td><td>" .$row["end_date"].
        "</td><td>" .$row["department_id"]."</td><td>"
        .$row["project_manager"]."</td></tr>";
      }
       ?>

     </table>




   </center>

     </div>

     <br><br><div id="main-wrapper">
<link rel="stylesheet" href="css\a2.css">
       <center><h2>PROJECTS</h2>
       <img src="img\avatar.png" class="avatar"/>
       </center>

     <center><form class="myform" action="edit.php" method="post">
       <label><b> Project ID:</b></label><br>
       <input name="pro_id" type="text" class="inputvalues" placeholder="project ID" required/><br><br>

       <input name="login" type="submit" id="login_btn" value="Search"/><br><br>
     <a href="admin.php"><input type="button" id="register_btn" value="back"/>
     </form>
     <?php
     if(isset($_POST['login']))
     {
     $pro_id=$_POST['pro_id'];
     $query="select * from PROJECT where project_id='$pro_id'";

     $query_run= mysqli_query($con,$query);
     if(mysqli_num_rows($query_run)>0)
     {
     //valid
     $_SESSION['pro_id']= $pro_id;
     header('location:edit_project.php');
     }
     else {
     //Invalid
     echo'<script type="text/javascript"> alert("Invalid credentials") </script>';
     }
     }
     ?>

   </div></center>




 </body>




 </html>
