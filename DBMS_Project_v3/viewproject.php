<!DOCTYPE html>
<?php
require 'dbconfig/config.php';
 ?>
<html>
<head>
  <title>VIEW PROJECTS</title>
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
        echo "<tr><td>" .$row["project_id"].
        "</td><td>" .$row["project_name"].
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
       <center><h2>VIEW PARTICULAR PROJECT</h2>
       </center>

     <center><form class="myform" action="view_detailed.php" method="get">
       <center><h3>Enter the project ID of Project to display its details and its Tasks</h2>
       </center>
       <label><b> Project ID:</b></label><br>
       <input name="pro_id" type="text" class="inputvalues" placeholder="project ID" required/><br><br>

       <a href="view_detailed.php"><input name="login" type="submit" id="login_btn" value="Search"/><br><br>
     <a href="admin.php"><input type="button" id="register_btn" value="back"/>
     </form>

<!--
<?php
     if(isset($_POST["login"]))
   {

   $s="select * from project where project_id='" .$_POST["pro_id"] ."'";
   	$result=mysqli_query($con,$s);
   	$r=mysqli_num_rows($result);
   	//echo $r;
   	$data=mysqli_fetch_array($result);
   	$project_id=$data[0];
   	$project_name=$data[1];



   	mysqli_close($cn);
   }
?>
-->
<!--
<?php
if(isset($_POST["login"]))
{
	//header("location:result.php?bg=".$_POST["s2"]);
	echo ('location:admin.php');
}
?>
-->
   </div></center>





 </body>




 </html>
