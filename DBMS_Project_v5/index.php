<?php
session_start();
require 'dbconfig/config.php';
 ?>
 <!DOCTYPE html>
 <html>
<head>
  <title>Login Page</title>
  <link rel="stylesheet" href="css\a1.css">
</head>
<body background="img/1.jpg">
  <div id="main-wrapper">
    <center><h2>Login Form</h2>
    <img src="img\avatar.png" class="avatar"/>


    </center>

  <form class="myform" action="index.php" method="post">
    <label><b>Employee:</b></label><br>
    <input name="username" type="text" class="inputvalues" placeholder="type your username"/><br>
    <label><b>Employee-Password:</b></label><br>
    <input name="password" type="password" class="inputvalues" placeholder="type your password"/><br>
    <input name="login" type="submit" id="login_btn" value="Login"/><br>
  <a href="register.php">  <input type="button" id="register_btn" value="Register"/>
</form>
<?php
if(isset($_POST['login']))
{
  $username=$_POST['username'];
$password=$_POST['password'];

$query="select * from EMPLOYEE where username='$username' AND password= '$password'";

$query_run= mysqli_query($con,$query);
if(mysqli_num_rows($query_run)>0)
{
  //valid
  $_SESSION['username']= $username;
  header('location:admin.php');
}
else {
  //Invalid
  echo'<script type="text/javascript"> alert("Invalid credentials") </script>';
  }
}

 ?>

  </div>
</body>
</html>
