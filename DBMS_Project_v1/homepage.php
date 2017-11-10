<?php
session_start();
 ?>
 <!DOCTYPE html>
 <html>
<head>
  <title>Login Page</title>
  <link rel="stylesheet" href="css\style.css">
</head>
<body style="background-color:#7f8c8d">
  <div id="main-wrapper">
    <center><h2>Home page</h2>
      <h3>Welcome
      <?php echo $_SESSION['username'] ?></h3>
    <img src="img\avatar.png" class="avatar"/>
    </center>

  <form class="myform" action="homepage.php" method="post">
    <a href="add_project.php">  <input type="button" id="register_btn" value="CREATE PROJECT"/>
  <a href="view_project.php">  <input type="button" id="login_btn" value="VIEW PROJECT"/><br><br><br>


    <input name="logout" type="submit" id="logout_btn" value="Log Out"/><br>
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
