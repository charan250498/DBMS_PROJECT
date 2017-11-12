<?php
session_start();
 ?>
 <!DOCTYPE html>
 <html>
<head>
  <title>edit</title>
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
    <center><h2>EDIT PROJECTS</h2>
      <h3>Project
        <?php echo $_SESSION['pro_id'] ?>
      </h3>

    <img src="img\avatar.png" class="avatar"/>
    </center>

  <form class="myform" action="edit_project.php" method="post">

    <center>
      <table>
        <tr><th>PROJECT ID</th><th>PROJECT NAME</th><th>OBJECTIVE</th><th>DESCRIPTION</th><th>START DATE </th><th>END DATE</th><th>DEPARTMENT ID</th><th>PROJECT MANAGER</th>
        <?php
          $pro_id =$_SESSION['pro_id'];
          $query="select * from PROJECT where project_id='$pro_id'";
          $result = mysqli_query($con,$query);
          while($row = mysqli_fetch_array($result)){
           echo "<tr><td>" .$row["project_id"]."</td><td>" .$row["project_name"]."</td><td>" .$row["objective"]."</td><td>" .$row["description"]."</td><td>" .$row["start_date"]."</td><td>" .$row["end_date"]."</td><td>" .$row["department_id"]."</td><td>".$row["project_manager"]."</td></tr>";
        }
        ?>
       </table>
     </center>
</form>
<?php
if(isset($_POST['logout']))
{
session_destroy();
header('location:index.php');
}
?>


  </div>
</body>
</html>
