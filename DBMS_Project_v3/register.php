<?php
require 'dbconfig/config.php';
 ?>
 <!DOCTYPE html>
 <html>
<head>
  <title>Registration Page</title>
  <link rel="stylesheet" href="css\style.css">
</head>
<body style="background-color:#7f8c8d">
  <div id="main-wrapper">
    <center><h2>Registration Form</h2>
    <img src="img\avatar.png" class="avatar"/>
    </center>

  <form class="myform" action="register.php" method="post">

    <label><b> Employee name:</b></label><br>
    <input name="fullname" type="text" class="inputvalues" placeholder="type your fullname" required/><br><br>
    <label><b> Employee ID:</b></label><br>
    <input name="emp_id" type="text" class="inputvalues" placeholder="type employee ID" required/><br><br>

    <label><b>Gender:</b></label>
    <input type="radio" class="radiobtns" name="gender" value="M" checked required>M
    <input type="radio" class="radiobtns" name="gender" value="F"  required>F
    <input type="radio" class="radiobtns" name="gender" value="O"  required>O<br><br>
    <label><b> Employee-skill:</b></label><br>
    <input name="skill" type="text" class="inputvalues" placeholder="type your skill" required/><br><br>


    <label><b>Employee Username:</b></label><br>
    <input name="username" type="text" class="inputvalues" placeholder="type your username" required/><br><br>
    <label><b>Employee-Password:</b></label><br>
    <input name="password" type="password" class="inputvalues" placeholder=" your password" required/><br><br>
    <label><b>Confirm Password:</b></label><br>
    <input name="cpassword" type="password" class="inputvalues" placeholder="confirm password" required/><br><br>
    <input name="submit_btn" type="submit" id="signup_btn" value="Sign Up"/><br><br>
    <a href="index.php"><input type="button" id="back_btn" value="Back"/>
</form>
<?php
if(isset($_POST['submit_btn']))
{
  //echo'<script type="text/javascript"> alert("Sign Up button clicked") </script>';
$fullname =$_POST['fullname'];
$emp_id =$_POST['emp_id'];
$gender =$_POST['gender'];
$skill =$_POST['skill'];
$username =$_POST['username'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

if($password==$cpassword)
{
  $query="select * from EMPLOYEE WHERE username='$username'";
  $query_run = mysqli_query($con,$query);

  if(mysqli_num_rows($query_run)>0)
  {
    //there is already a user with the same username
    echo '<script type="text/javascript"> alert("User already exits.. try another user") </script>';
    }
    else
    {
      $query="insert into EMPLOYEE(employee_id, employee_name, gender, username, password, skill) values('$emp_id','$fullname','$gender','$username','$password','$skill')";
      $query_run = mysqli_query($con,$query);
      if($query_run)
      {
        echo'<script type="text/javascript"> alert("User Registered.. Go to login page to login") </script>';
      }
      else
        {
          echo'<script type="text/javascript"> alert("Error!") </script>';
        }

    }
}
else{
    echo'<script type="text/javascript"> alert("password and confirm password does not match!") </script>';
}
}
 ?>

  </div>
</body>
</html>
