<?php

$host="localhost";
$user="root";
$pass="";
//connection
$con= mysqli_connect($host,$user,$pass, 'h_travel_db');  #mysqli use htr dl 
$sql="SELECT * FROM `order`";
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
                    <h2 align="center">Package Orders</h2>
                    <table class="table-condensed table-condensed">
                        <thead>
                            <tr >
                                <th>Id</th>
                                <th>Ordered Packages</th>
                                <th>Amount of Customers</th>
                                <th>Total Price</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                        	<?php
if ($result) {
    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) 
        {
             $id = $row['order_id'];  #variable assign payy poh lo 
                  $ordered_packages = $row['package_name']; 
                  $quantity=$row['quantity'];
                  $total_price= $row['total_price']; 
                  $email=$row['email'];
                  echo "<tr>
                                <td>$id</td>
                                <td>$ordered_packages</td>
                                <td>$quantity</td>
                                <td>$total_price MMK</td>
                                <td>$email</td>
                            </tr>";
        }
    } else {
        echo "No rows found.";
    }
} else {
    echo "Query failed: " . mysqli_error($con);
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