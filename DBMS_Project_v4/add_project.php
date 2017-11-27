<?php
require 'dbconfig/config.php';
 ?>
 <!DOCTYPE html>
 <html>
<head>
  <title>ADD NEW PROJECT</title>
  <link rel="stylesheet" href="css\style.css">
</head>
<body background="img/admin.jpg">
  <div id="main-wrapper">
    <center><h2>ADD NEW PROJECT</h2>
    <img src="img\avatar.png" class="avatar"/>
    </center>

  <form class="myform" action="add_members.php" method="post">

    <label><b> Project ID:</b></label><br>
    <input name="pro_id" type="text" class="inputvalues" placeholder="project ID" required/><br><br>

    <label><b> PROJECT NAME:</b></label><br>
    <input name="pro_name" type="text" class="inputvalues" placeholder="project name" required/><br><br>


    <label><b>OBJECTIVES:</b></label><br>
    <input name="obj" type="text" class="inputvalues" placeholder="objectives" required/><br><br>
    <label><b>DESCRIPTION:</b></label><br>
    <input name="desc" type="text" class="inputvalues" placeholder=" type description" required/><br><br>
    <label><b>START DATE:</b></label>
    <input name="startdate" type="date" class="inputvalues" placeholder="yyyy-mm-dd" required/><br><br>
    <!--<input type="datetime-local"/><br><br>-->

    <label><b>END DATE:</b></label>
    <input name="enddate" type="date" class="inputvalues" placeholder="yyyy-mm-dd" required/><br><br>
  <!--  <input type="datetime-local"/><br><br>-->

    <label><b> DEPARTMENT ID:</b></label><br>
    <input name="dep_id" type="text" class="inputvalues" placeholder="department id" required/><br><br>

    <label><b>PROJECT MANAGER:</b></label><br>
    <input name="pro_man" type="text" class="inputvalues" placeholder="project manager" required/><br><br>

    <input name="submit_btn" type="submit" id="signup_btn" value="Create project"/><br><br>
    <a href="add_members.php"><input type="button" id="back_btn" value="add members"/>
</form>
<?php
if(isset($_POST['submit_btn']))
{
  $pro_id =$_POST['pro_id'];
  $pro_name =$_POST['pro_name'];
  $obj=$_POST['obj'];
  $desc =$_POST['desc'];
  $dep_id =$_POST['dep_id'];
  $pro_man =$_POST['pro_man'];
  $startdate=$_POST['startdate'];
  $enddate=$_POST['enddate'];

  $query="select * from PROJECT  WHERE project_id='$pro_id'";
  $query_run = mysqli_query($con,$query);

  if(mysqli_num_rows($query_run)>0)
  {
      echo '<script type="text/javascript"> alert("Project already exits.. ") </script>';
  }
  else {
    $query="insert into PROJECT(project_id, project_name, objective, description, start_date, end_date, department_id, project_manager) values('$pro_id','$pro_name','$obj','$desc','$startdate','$enddate','$dep_id','$pro_man')";
  $query_run = mysqli_query($con,$query);
  if($query_run)
    {
      echo'<script type="text/javascript"> alert("Project succsefully created.. Go to add task") </script>';
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
