<?php
error_reporting(1);
$host="localhost";
$user="root";
$pass="";
//connection
$con= mysqli_connect($host,$user,$pass, 'h_travel_db');  #mysqli use htr dl 
$sql="SELECT * FROM `item`";
$result = mysqli_query($con,$sql);
if(isset($_POST['add']))
{
	$theme = $_FILES['theme']["name"];
	$packageName=$_POST['packageName'];
	$detail=$_POST['detail'];	
	$price=$_POST['price'];

	$sql1="INSERT INTO `item`(package_image,package_name,price,package_detail) VALUES ('$theme','$packageName',$price,'$detail')";
	$result=mysqli_query($con,$sql1);
	if($result)
	{
		mkdir("images/$i");
		move_uploaded_file($_FILES['theme']['tmp_name'],"images/$i".$_FILES['theme']['name']);
	}

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
		<title>Admin VIEW_ORDER IS ON </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/admin.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<style type="text/css">
			.label-font {
				font-size: 25px;
				color:#ced9f0 ;
				font-family: Exo;
			}

		</style>
	</head>
	<body class="is-preload landing">
		<div id="page-wrapper">
<!-- HEADER -->
				<header id="header">
					<h1 id="logo"><a href="#">Admin Panel</a></h1>
					<nav id="nav">
						<ul>
							<li><a href="home.php">Home</a></li>
							<li>
								<a href="#">Admin Taks</a>
								<ul>
									<li><a href="view_order.php">View Orders</a></li>
									<li><a href="insert.php">Add More Travel Packages</a></li>
									<li><a href="view_packages.php">View Packages</a></li>
									<li><a href="view_comment.php">View Comments</a></li>
									<li><a href="logout.php">Logout</a></li>
								</ul>
							</li>
						
						</ul>
					</nav>
				</header>
<!-- Main -->
<!-- Admin Table -->
    <section id="admin-table" class="wrapper style1">
        <div class="container">
            
             	<div class="col-lg-12 table-responsive">
                    <h2>Add new travel packges</h2>
                    <div class="form-container">
            <form action="#" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="fileInput" class="label-font">Package Theme</label>
                    <input type="file" class="form-control-file" id="fileInput" name="theme">
                </div></br></br>
                <div class="form-group">
                    <label for="textInput1" class="label-font"> Package Name</label>
                    <input type="text" class="form-control" id="textInput1" name="packageName" placeholder="Enter text">
                </div></br></br>
                <div class="form-group">
                    <label for="textInput1" class="label-font">Package Details</label>
                    <input type="text" class="form-control" id="textInput1" name="detail" placeholder="Enter text">
                </div></br></br>
                <div class="form-group">
                    <label for="textInput2" class="label-font">Package price(per person)</label><p>
                    <input type="text" class="form-control" id="textInput2" name="price" placeholder="Enter text">
                </div></br>


                <button type="submit" name="add" class="button">Add</button>
            </form>
        </div>
                    
                </div></div></section>	
			
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.16.0/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	</body>
</html>