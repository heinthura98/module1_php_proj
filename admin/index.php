<?php
session_start();
error_reporting(1); 
include("connection.php"); // Include your database connection file

if(isset($_POST['log']))
{ 
    if($_POST['id']=="" || $_POST['pwd']=="")
    { 
        echo "<script>alert('Fill in your ID and password first')</script>";
    }
    else 
    {
        $username = $_POST['id'];
        $password = $_POST['pwd'];

        // Prepare a statement to select the admin by username
        $stmt = "SELECT * FROM `admins` WHERE name='$username' AND pass='$password';";
        
        $result = mysqli_query($con,$stmt);
        
        if(mysqli_num_rows($result)==1)
          {
          
    header("location:home.php");
   
  }
  else
  {
   
    echo "<script>alert('Login Failed: Invalid Email or Password')</script>";
  }
       
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <!-- Include Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Include custom CSS -->
  <style>
    .login-form {
      width: 300px;
      margin: 0 auto;
      margin-top: 100px;
    }
   body {
      background-image:url('images/Batman-Logo-Wallpaper.jpg'); 
      background-size: cover;
      background-position: center center;
      background-repeat: no-repeat;
      height: 100vh;

    } 
    .login-form h1 {
      color:#fff; 
    }
    .login-form label {
      color: #fff; 
    }
    .login-form p  {
      color: #8cdf30; 
    }
    .login-form p a {
      color: #8cdf30; 
    }
    .login-form button {
      background-color: transparent; 
    }
    .login-form button:hover {
      background-color:#101dc8 ; 
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-4 offset-md-4 login-form">
        <h1 class="text-center">Admin Login</h1>
        <form method="post" action="#">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" placeholder="Enter username" name="id"/>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="pwd" placeholder="Enter password">
          </div>
          <!-- <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="rememberMe">
            <label class="form-check-label" for="rememberMe">Remember me</label>
          </div> -->
          <button type="submit" class="btn btn-primary btn-block" name="log">Login</button>
        </form>
        <!-- <p class="text-center mt-3">Don't have an account? <a href="register.html" class="btn btn-outline-primary">Register</a></p> -->
      </div>
    </div>
  </div>
</body>
</html>