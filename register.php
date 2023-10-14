<?php
$host="localhost";
$user="root";
$pass="";

$con=mysqli_connect($host,$user,$pass, 'h_travel_db'); 
 if(isset($_POST['submit'])){
 	 $name = $_POST['name'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $phone = $_POST['phone'];

    $query = "SELECT * FROM register WHERE email = '$email'";   
    $result = mysqli_query($con,$query);
    if (mysqli_num_rows($result) > 0) {
        
        echo "<script>alert('Error: Email already exists.Try with a new email to register again.');</script>";
      }
    else {
       
      
        $query = "INSERT INTO register (name, email, password, phone) VALUES ('$name', '$email', '$password', '$phone')";
        
        $result = mysqli_query($con,$query);
        if ($result) {
           
            echo "<script>alert('SUCCESSFULLY REGISTERED');</script>";
            header("location:user_login.php");  
        } else {
            
            echo "<script>alert('REGISTRATION FAILED');</script>";
            header("location:register.php");
        }
    }
}
?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>About H Travel</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<style>
    .registration-form {

      max-width: 400px;
      margin: 0 auto;
    }
  </style>
	</head>
	<body class="is-preload landing">
		<div id="page-wrapper">


				<header id="header">
					<h1 id="logo"><a href="#">H Traveling Agency</a></h1>
					<nav id="nav">
						<ul>
							
							
							<li><a href="user_login.php" class="button primary">Login</a></li>
						</ul>
					</nav>
				</header>

	
				<div id="main" class="wrapper style1" >
					  <div class="container">
    <div class="row">
      <div class="col-md-12 mt-5">
        <h2 class="text-center">Register now and get our services</h2>


       <form class="registration-form mt-4" method="post">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div></br>
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div></br>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div></br>
          <div class="form-group">
            <label for="confirm-password">Phone Number</label>
            <input type="password" class="form-control" id="phone" name="phone" required>
          </div></br>
 
      </br></br>
          <footer>
							<ul class="actions">
							<li><input type="submit" class="button" name="submit" value="REGISTER"/> </li>
							</ul>
		</footer>
        </form>
<footer>
							<ul class="actions">
							<li><a type="submit" class="button" href="index.php"/>Cancel Registration </a></li>
							</ul>
		</footer> 


      </div>
    </div>
  </div>
				</div>


				<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands alt fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
						<li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
						<li><a href="#" class="icon solid alt fa-envelope"><span class="label">Email</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</footer>

		</div>

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>