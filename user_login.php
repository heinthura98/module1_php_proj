<?php
session_start();
error_reporting(1);
 include("connection.php");

if(isset($_POST['log']))
{
  $email = $_POST['email'];

  $password = $_POST['password'];
  $sql = "SELECT * FROM register WHERE email='$email' AND password='$password' ";
  $result = mysqli_query($con, $sql);
  
 
  if(mysqli_num_rows($result) == 1){

    header("location: order.php");

  }
  else
  {

    echo "<script>alert('Login Failed: Invalid Email or Password')</script>";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
  <style>
    .login-form {
      width: 300px;
      margin: 0 auto;
      margin-top: 100px;
    }
     body {
      background-image:url('images/bagan.jpg');
      background-size: cover;
      background-position: center center;
      background-repeat: no-repeat;
      height: 100vh;
      background-blend-mode: darken;
      background-color: rgba(0, 0, 0, 0.6);
    } 
    .login-form h1 {
      color:#fff; 
    }
    .login-form label {
      color: #fff; 
    }
    .login-form p  {
      color: #8cdf30; 
    .login-form p a {
      color: #8cdf30; 
    }
    .login-form button {
      background-color: transparent; 
    .login-form button:hover {
      background-color:#101dc8 ; 
    }
  </style>
</head>
<body>
<form method="post" action="#">
  <div class="container">
    <div class="row">
      <div class="col-md-4 offset-md-4 login-form">
        <h1 class="text-center">Please log in here to get our travel packages</h1>
      
          <div class="form-group">
            <label>User Email</label>
            <input type="text" class="form-control" id="username" placeholder="Enter Email" name="email"/> 
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" id="password" placeholder="Enter password" name="password"/>
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="rememberMe">
            <label class="form-check-label" for="rememberMe">Remember me</label>
          </div>
          <button type="submit" class="btn btn-primary btn-block" name="log">Login</button>
        </form>
        <p class="text-center mt-3">Don't have an account? <a href="register.php" class="button">Register</a></p>
        <p class="text-center mt-3"><a href="index.php" class="btn btn-outline-primary">Cancel Logging in</a></p>
      </div>
    </div>
  </div>
</form>
</body>
</html>