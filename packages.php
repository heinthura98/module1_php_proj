<?php
$host="localhost";
$user="root";
$pass="";

$con=mysqli_connect($host,$user,$pass, 'h_travel_db'); 
$sql="SELECT * FROM `item`";
$result = mysqli_query($con,$sql);
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
		<style>

  </style>
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


				<div id="main" class="wrapper style1">
					<div class="container">
						<header class="major">
							<h2>LONG AWAITED SUMMER PACKAGES</h2>
						
							<p>Straight to the point,ENJOY YOURSELVES.</p>
						</header>

							<section id="content" align="center">
								<?php
								error_reporting(1);
								while($row =mysqli_fetch_array($result)){

									$id=$row['package_id'];
									$name=$row['package_name'];
									$price=$row['price'];
									$image=$row['package_image'];
				
									echo "
								<img src='admin/images/$image' height='230' width='400'>
								<h3 class='header-subtitle'>$name</h3>
								<p>We provide package for...</p>
								<h3 class='header-subtitle'>
								<p> $price MMK per person</br></p></h3>
								</p>
									<footer>
												<ul class='actions'>
													<li><a href='user_login.php' class='button'>Get this package</a></li>
												</ul>
											</footer>
									";

								}


								?>
								
</div></div>



								
</div></div>
			<!-- Footer -->
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