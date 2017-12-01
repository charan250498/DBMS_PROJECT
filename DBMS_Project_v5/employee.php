<!DOCTYPE html>
<?php
session_start();
require 'dbconfig/config.php';
 ?>
<html>
<head>
  <title> EMPLOYEE PAGE</title>
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
<body background="img/image_1.jpg">
  <div id="main-wrapper">
    <center><h2>EMPLOYEES</h2>
    <img src="img\avatar.png" class="avatar"/>
    </center>
  <center>
    <table>
      <tr><th>EMPLOYEE ID</th><th>EMPLOYEE NAME</th><th>GENDER</th><th>SKILL</th>
      <?php
      $query="select * from EMPLOYEE";
      $result = mysqli_query($con,$query);
      while($row = mysqli_fetch_array($result)){
        echo "<tr><td>" .$row["employee_id"].
        "</td><td>" .$row["employee_name"].
        "</td><td>" .$row["gender"]."</td><td>" .$row["skill"].
        "</td></tr>";
      }
       ?>

     </table>
   </center>
     </div>

     <br><br><div id="main-wrapper">
<link rel="stylesheet" href="css\a2.css">
       <center><h2>VIEW PARTICULARS OF EMPLOYEE</h2>
       </center>

     <center><form class="myform" action="employee.php" method="post">
       <center><h3>Enter the employee ID of Employee to display his/her details and to update work done</h2>
       </center>
       <label><b> Employee ID:</b></label><br>
       <input name="emp_id" type="text" class="inputvalues" placeholder="emplpoyee ID" required/><br><br>
       <label><b> Password:</b></label><br>
       <input name="passwd" type="password" class="inputvalues" placeholder="Password" required/><br><br>

       <input name="login" type="submit" id="login_btn" value="View"/><br><br>
     <a href="admin.php"><input type="button" id="register_btn" value="back"/>

     <?php
      if(isset($_POST['login']))
      {
        $emp_id=$_POST['emp_id'];
        $password=$_POST['passwd'];
        
        $query6="select * from EMPLOYEE where employee_id='$emp_id' and password='$password'";

        $query_run6= mysqli_query($con,$query6);
        if(mysqli_num_rows($query_run6) == 1)
        {
          //valid
          $_SESSION['emp_id']=$emp_id;
          $_SESSION['password']=$password;
          header('location:employee_details.php');
        }
        else {
          //Invalid
          echo'<script type="text/javascript"> alert("Invalid credentials") </script>';
        }
      }

     ?>
     </form>

   </div></center>
 </body>
 </html>
