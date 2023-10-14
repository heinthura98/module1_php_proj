<?php
// error_reporting(1);
$host="localhost";
$user="root";
$pass="";
//connection
$con=mysqli_connect($host,$user,$pass, 'h_travel_db'); 
$sql="SELECT * FROM item";
$result = mysqli_query($con, $sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
     <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/jquery.scrolly.min.js"></script>
      <script src="assets/js/jquery.dropotron.min.js"></script>
      <script src="assets/js/jquery.scrollex.min.js"></script>
      <script src="assets/js/browser.min.js"></script>
      <script src="assets/js/breakpoints.min.js"> </script>
      <script src="assets/js/util.js"></script>
      <script src="assets/js/main.js"></script>
  <meta charset="UTF-8">
  <title>Order Form</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <style> 
     body {
      background-image:url('images/bagan.jpg'); 
      background-size: cover;
      background-position: center center;
      background-repeat: no-repeat;
      height: 100vh;
      background-blend-mode: darken;
      background-color: rgba(0, 0, 0, 0.6);
    } 
    .order-form h1 {
      color:#fff; 
    }
    .order-form label {
      color: #fff; 
    }
    .order-form p  {
      color: #8cdf30; 
    }
    .order-form p a {
      color: #8cdf30; 
    }
    .order-form button {
      background-color: transparent; 
    }
    .order-form button:hover {
      background-color:#101dc8 ; 
    }
  </style>
</head>
<body>
  

  <div class="container mt-5 order-form">
    <h2 style="color: #c2d550 ;">Pre-book Your Package Here</h2>
    <form method ="post" action="#">
      <div class="form-group">
        <label for="product">Package:</label>
       
        <select id="gender" name="select" class="form-control" required>
            <option value="">Select package here</option>
 
<?php 
           
              while($row = mysqli_fetch_assoc($result)) {
                  $package_name = $row['package_name'];  
                  $package_id = $row['package_id'];      
                  echo "<option value='$package_id'>$package_name</option>";
              }
            
          ?>

// Close database connection
mysqli_close($con); 
?>
        </select>
      </div>
      <div class="form-group">
        <label for="quantity">How many people will be in this travel package?</label>
        <input type="number"
          min="1" class="form-control" id="quantity" name="quantity" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email"
           class="form-control" id="email" name="email" required>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary" name="price">Check TOTAL PRICE</button> </br>
        <?php

if(isset($_POST['price'])){
    $quantity = $_POST['quantity']; 
    $package_id = $_POST['select'];
 
    $sql = "SELECT price FROM item WHERE package_id = $package_id";
    $result2 = mysqli_query($con, $sql);
    
    $row = mysqli_fetch_assoc($result2);
    
    $price = $row['price']; 
    
    $total = $price * $quantity; 
    
    echo "<script>alert('Total Price: $total MMK')</script>"; 

}
?>
      </div>

      <button type="submit" class="btn btn-primary" name="order">Place Order</button> </br></br></br>
      <?php
if(isset($_POST['order']))
{ 
$quantity = $_POST['quantity'];           

    $package_id = $_POST['select'];             

    $sql_1 = "SELECT price FROM item WHERE package_id = $package_id";

    $r = mysqli_query($con,$sql_1);
    
 
    $row = mysqli_fetch_assoc($r);

    
    $price = $row['price']; 
    
    $total = $price * $quantity;


     $sql_2 = "SELECT package_name FROM item WHERE package_id = $package_id";

     $r2 = mysqli_query($con,$sql_2);

     $row2=$r2->fetch_assoc(); 

    $package_name=$row2['package_name'];


    $email=$_POST['email'];

    $sql3 = "INSERT INTO `order` (order_id,ordered_packages, quantity, total_price,email,package_name)
VALUES('',$package_id,$quantity,$total,'$email','$package_name');";

 
    $result1 = mysqli_query($con,$sql3);

    if($result1){
        header('location:order_succeed.php'); 
                } 
    else 
    {
        echo "<script>alert('Failed to place order.')</script>"; 
    }
}

  
?>
      
    </form>
    <button type="submit" class="btn btn-primary" name="cancel"><a class="btn btn-primary" href="index.php">Cancel current action</a></button>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.14/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  


</body>
</html>