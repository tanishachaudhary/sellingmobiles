<?php
    require 'common.php';
    if (isset($_SESSION['email'])) { header('location: products.php'); }
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
    <title>E-Store Sign Up Page</title>
  </head>
<body>
    <?php
        include 'header.php';
    ?>
	<div class="container">
		<div class="row row_style">
			<div class="col-xs-4 col-xs-offset-4">
				<h1>SIGN UP</h1>
				<form role="form" action="signup_script.php" method="POST">
					<div class="form-group">
						<input class="form-control" placeholder="Name" name="name"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
					</div>
					<div class="form-group">
						<input type="email" class="form-control"  placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="email" required = "true">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" placeholder="Password" pattern=".{6,}" name="password" required = "true">
					</div>
					<div class="form-group">
						<input type="number" class="form-control" name="contact" placeholder="Contact">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="city" placeholder="City">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="address" placeholder="Address">
					</div>
					<button type="submit" name="submit" class="btn btn-primary">Sign Up</button>
				</form>
				
			</div>
		</div>
	</div>
	<?php
        include 'footer.php';
    ?> 
</body>
</html>