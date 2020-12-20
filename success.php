<?php
    require 'common.php';
    if (!isset($_SESSION['email'])) { header('location: index2.php'); }
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="index2.css" rel="stylesheet" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Store Success Page</title>
  </head>
<body>
    <?php
        include 'header.php';
    ?>
    <?php
        $user_id=$_SESSION['id'];
        $update_query="UPDATE users_items SET status='Confirmed' WHERE user_id='$user_id' and status='Added to cart'";
        $update_submit_query=mysqli_query($con,$update_query) or die(mysqli_error($con));
    ?>
	<br><br><br><br>
	<center>
		<h1>Success</h1>
		<h4>Your order is confirmed.<br> Thank you for shopping
with us.<br> <a href="products.php">Click here</a> to purchase any other item.</h4>
	</center>
	<?php
        include 'footer.php';
    ?> 
</body>
</html