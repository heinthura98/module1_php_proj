<?php
$host="localhost";
$user="root";
$pass="";
\
$con=mysqli_connect($host,$user,$pass, 'h_travel_db'); \
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
              
              
              <li><a href="logout.php" class="button primary">Logout</a></li>
            </ul>
          </nav>
        </header>


        <div id="main" class="wrapper style1" >
            <div class="container">
    <div class="row">
      <div class="col-md-12 mt-5">
        <h2 class="text-center">YOUR TRAVEL PACKAGE IS SUCCESSFULLY ACTIVATED !</h2><br/>
      <center>  <img src="images/qr.jpg" width="200" height="200"> </center>
<p>This is your qr code for payment.Please do not share this with anyone.See you soon.</p>

  </div>
        </div>
        <footer>
              <ul class="actions">
              <li><a type="submit" class="button" href="index.php"/>Go back to home page </a></li>
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