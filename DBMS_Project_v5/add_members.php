<?php
session_start();
require 'dbconfig/config.php';
 ?>
 <!DOCTYPE html>
 <html>
<head>
  <title>ADD MEMBERS</title>
  <link rel="stylesheet" href="css\style.css">
</head>
<body background="img/image_2.jpg">
  <div id="main-wrapper">
    <center><h2>ADD MEMBERS</h2>
    <img src="img\avatar.png" class="avatar"/>
    </center>

  <form class="myform" action="add_members.php" method="post">

    <label><b> PROJECT ID:</b></label><br>
    <input name="pro_id" type="text" class="inputvalues" placeholder="Enter project id" required/><br><br>

    <label><b> MANAGER:</b></label><br>
    <input name="proj_man" type="text" class="inputvalues" placeholder="type employee name" required/><br><br>

    <label><b> MEMBER 1:</b></label><br>
    <input name="fullname1" type="text" class="inputvalues" placeholder="type employee name" required/><br><br>

    <label><b> MEMBER 2:</b></label><br>
    <input name="fullname2" type="text" class="inputvalues" placeholder="type employee name" required/><br><br>

    <label><b> MEMBER 3:</b></label><br>
    <input name="fullname3" type="text" class="inputvalues" placeholder="type employee name" required/><br><br>

    <label><b> MEMBER 4:</b></label><br>
    <input name="fullname4" type="text" class="inputvalues" placeholder="type employee name" required/><br><br>

    <label><b> MEMBER 5:</b></label><br>
    <input name="fullname5" type="text" class="inputvalues" placeholder="type employee name" required/><br><br>


    <input name="submit_btn" type="submit" id="signup_btn" value="DONE"/><br><br>
    <a href="add_task.php"><input type="button" id="back_btn" value="ADD TASK"/>
</form>
<?php
if(isset($_POST['submit_btn']))
{

 $fullname1 =$_POST['fullname1'];
 $fullname2 =$_POST['fullname2'];
 $fullname3 =$_POST['fullname3'];
 $fullname4 =$_POST['fullname4'];
 $fullname5 =$_POST['fullname5'];
 $pro_id =$_POST['pro_id'];
 $proj_mana =$_POST['proj_man'];

$query="select * from PROJECT WHERE project_id='$pro_id' ";
$query_run = mysqli_query($con,$query);

if(mysqli_num_rows($query_run)>0)



    {
      $query="insert into PROJECT_MEMBERS(project_id, manager, member1, member2, member3, member4, member5, member6) values('$pro_id','$proj_mana','$fullname1','$fullname2','$fullname3','$fullname4','$fullname5 ','$proj_mana')";
      $query_run = mysqli_query($con,$query);
      $check = "select @flag";
      $for_flag = mysqli_query($con,$check);
      $row = mysqli_fetch_array($for_flag);
      $flag_value = $row['@flag'];
      //echo $flag_value;
      if($query_run)
      {
        if($flag_value == 1){
            echo'<script type="text/javascript"> alert("Project Creation successfully completed.You can assign tasks for the project now.") </script>';
            echo'<script type="text/javascript"> alert("And the system has added the manager as the sixth member of the project.") </script>';
            $query_reset = "set @flag = 0";
            $query_run = mysqli_query($con,$query_reset);
        }
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
