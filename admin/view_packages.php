<?php

$host="localhost";
$user="root";
$pass="";
//connection
$con= mysqli_connect($host,$user,$pass, 'h_travel_db');  #mysqli use htr dl 
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
		<title>Admin VIEW_ORDER IS ON </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/admin.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload landing">
		<div id="page-wrapper">

			<<!-- HEADER -->
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
                    <h2 align="center">Package Orders</h2>
                    <table class="table-condensed table-condensed">
                        <thead>
                            <tr >
                                <th>Id</th>
                                <th>Package Theme</th>
                                <th>Package Name</th>
                                <th>Detail</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                        	<?php

        while ($row = mysqli_fetch_assoc($result)) 
        {
		        $id = $row['package_id'];  #variable assign payy poh lo 
		        $package_theme = $row['package_image']; 
		        $package_name=$row['package_name'];
		        $detail= $row['package_detail']; 
		        $price=$row['price'];
                echo "<tr style='width:100px''height:70px'>
                                <td>$id</td>
                                <td>$package_theme</td>
                                <td>$package_name</td>
                                <td>$detail </td>
                                <td>$price MMK</td>
                            </tr>" ;
                        }
	

           ?>
                            
                       
                          <!-- Add more rows as needed -->
                        </tbody>
                    </table>
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