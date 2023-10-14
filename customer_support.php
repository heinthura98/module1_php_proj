<?php

$host="localhost";
$user="root";
$pass="";
//connection
$con= mysqli_connect($host,$user,$pass, 'h_travel_db');  
$sql="SELECT * FROM `customer_service`";
$result = mysqli_query($con,$sql);
if(isset($_POST['submit'])){
	$email=$_POST['email'];
	$comment=$_POST['comment'];
	$sql1="INSERT INTO `customer_service`(email,comment) VALUES ('$email','$comment')";
	$r=mysqli_query($con,$sql1);
	echo "<script>alert('Thanks alot for your feedback.')</script>";
	header('location:index.php');
}
?>
<!DOCTYPE HTML>
<!--
	Landed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>About H Travel</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		
	</head>
	<body class="is-preload landing">
		<div id="page-wrapper">

			
			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="#">H Traveling Agency</a></h1>
					<nav id="nav">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li>
								<a href="#">Our Profile</a>
								<ul>
									<li><a href="about_us.php">About Us</a></li>
									<li><a href="services.php">Services</a></li>
									<li><a href="customer_support.php">Customer Support</a></li>
									<li>
										<a href="packages.php">Packages</a>
										
									</li>
									
								</ul>
							</li>
							<li><a href="register.php" class="button primary">Sign Up</a></li>
							<li><a href="logout.php" class="button primary">Logout</a></li>
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<div id="main" class="wrapper style1">
					<div class="container">
						<header class="major">
							<h2>CUSTOMER SUPPORT</h2>
						</header>
<div id="main" class="wrapper style1">
					<div class="container">
						<header class="major">

				<img src="images/telephone_logo.jpg" width="70px"	height="70px" />					
				<h2>09-988-31741</h2></br>
							<h2>09-988-31742</h2></br></header></div></div>

							
					<div class="container">
						<header class="major">
							<h3>If you have something to say,let us know.</h3>
							<form class="form-control" method="post">
								<input type=email name="email" placeholder="Enter Your Email" required /><br >
							
							<textarea name="" value="" id="myTextarea" placeholder="Say something.." required></textarea></br>
							<button type="submit" name="submit" class="actions button" >
												
													Send your message
												</button></form>
											</center></header></div>
						</div></div>
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

		<!-- Scripts -->
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