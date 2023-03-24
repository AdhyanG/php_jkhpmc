<?php
require('../database.php');
session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  echo("<script>alert('You are already logged in.');
  window.location.href='landing.php';</script>
  ");
}

if(isset($_POST['submit']))
{
  

  $email=mysqli_real_escape_string($db,$_POST['email']);
  $pass=$_POST['password'];
  $sql="SELECT * FROM admin_login WHERE email='$email'";
  $sqlQuery=mysqli_query($db,$sql);
  $row=mysqli_fetch_assoc($sqlQuery);
  if(mysqli_num_rows($sqlQuery)>0)
  {
    if($email==$row['email'])
    {
      
      
      $_SESSION['loggedin']=true;
      header("location:landing.php");

    }
    else{
      echo
      "<script>alert('Wrong Credentials')</script>";
      header("location:home.php");
    }
  }
  else{
    echo
    "<script>alert('User not Registered')</script>";
  }


};
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Admin Login</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'>
  <link rel="stylesheet" href="css/login.css">

</head>


</body>

</html>
<div class="login-form">
  <form action="" method="post">
    <h1>Login</h1>
    <div class="content">
      <div class="input-field">
        <input type="email" placeholder="Email" name="email" autocomplete="nope">
      </div>
      <div class="input-field">
        <input type="password" placeholder="Password" name="password" autocomplete="new-password">
      </div>
      <a href="#" class="link">Forgot Your Password?</a>
    </div>
    <div class="action">
      <!-- <button>Register</button> -->
      <button name="submit" type="submit ">Sign in</button>
    </div>
  </form>
</div>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>