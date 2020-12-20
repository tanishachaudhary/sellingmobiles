<?php include 'common.php'; ?>
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
    <title>E-Store Products Page</title>
  </head>
<body>
    <?php
        include 'header.php';
    ?>
	<br><br><br>
	<?php
		include 'check-if-added.php';
	?>
	<div class="container">
		<div class="jumbotron">
			<h1>Welcome to our E-Store!</h1>
			<p>We have the best MOBILES for you. No need to hunt around, we
have all in one place.</p>
		</div>
	</div>
	<div class="container">
		<div class="row text-center">
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
					<img src="redmi note 7 14499.jpg">
					<div class="caption">
						<h3>Redmi Note 7</h3>
						<p>Price: Rs. 14499.00</p>
					</div>
					<?php 
					if (!isset($_SESSION['email'])) 
					{ ?> 
						<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
					<?php } 
					else { 
						if (check_if_added_to_cart(1)) 
						{ 
							echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } 
						else { ?> 
							<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a><?php } 
					} ?>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
					<img src="samsung galaxy s20 70999.jpg">
					<div class="caption">
						<h3>Samsung Galaxy s20</h3>
						<p>Price: Rs. 70999.00</p>
					</div>
					<?php 
					if (!isset($_SESSION['email'])) 
					{ ?> 
						<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
					<?php } 
					else { 
						if (check_if_added_to_cart(2)) 
						{ 
							echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } 
						else { ?> 
							<a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a><?php } 
					} ?>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
					<img src="redmi note 8 14499.jpg">
					<div class="caption">
						<h3>Redmi Note 8</h3>
						<p>Price: Rs. 14499.00</p>
					</div>
					<?php 
					if (!isset($_SESSION['email'])) 
					{ ?> 
						<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
					<?php } 
					else { 
						if (check_if_added_to_cart(3)) 
						{ 
							echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } 
						else { ?> 
							<a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a><?php } 
					} ?>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
					<img src="oppo f11 14990.jpg">
					<div class="caption">
						<h3>Oppo f11</h3>
						<p>Price: Rs. 14990.00</p>
					</div>
					<?php 
					if (!isset($_SESSION['email'])) 
					{ ?> 
						<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
					<?php } 
					else { 
						if (check_if_added_to_cart(4)) 
						{ 
							echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } 
						else { ?> 
							<a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a><?php } 
					} ?>
				</div>
			</div>
		</div>
		<div class="row text-center">
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
					<img src="redmi note 8 pro 16999.jpg">
					<div class="caption">
						<h3>Redmi note 8 pro</h3>
						<p>Price: Rs. 16999.00</p>
					</div>
					<?php 
					if (!isset($_SESSION['email'])) 
					{ ?> 
						<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
					<?php } 
					else { 
						if (check_if_added_to_cart(5)) 
						{ 
							echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } 
						else { ?> 
							<a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a><?php } 
					} ?>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
					<img src="redmi note 7 pro 16999.jpg">
					<div class="caption">
						<h3>Redmi Note 7 pro</h3>
						<p>Price: Rs. 16999.00</p>
					</div>
					<?php 
					if (!isset($_SESSION['email'])) 
					{ ?> 
						<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
					<?php } 
					else { 
						if (check_if_added_to_cart(6)) 
						{ 
							echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } 
						else { ?> 
							<a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a><?php } 
					} ?>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
					<img src="xifo tashan-761 4g 2500.jpg">
					<div class="caption">
						<h3>Xifo Tashan-761</h3>
						<p>Price: Rs. 2500.00</p>
					</div>
					<?php 
					if (!isset($_SESSION['email'])) 
					{ ?> 
						<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
					<?php } 
					else { 
						if (check_if_added_to_cart(7)) 
						{ 
							echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } 
						else { ?> 
							<a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a><?php } 
					} ?>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
					<img src="redmi note 6 pro 16999.jpg">
					<div class="caption">
						<h3>Redmi Note 6 pro</h3>
						<p>Price: Rs. 16999.00</p>
					</div>
					<?php 
					if (!isset($_SESSION['email'])) 
					{ ?> 
						<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
					<?php } 
					else { 
						if (check_if_added_to_cart(8)) 
						{ 
							echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } 
						else { ?> 
							<a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a><?php } 
					} ?>
				</div>
			</div>
		</div>
		<div class="row text-center">
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
					<img src="samsung galaxy s20 plus 77999.jpg">
					<div class="caption">
						<h3>Samsung Galaxy s20 plus</h3>
						<p>Price: Rs. 77999.00</p>
					</div>
					<?php 
					if (!isset($_SESSION['email'])) 
					{ ?> 
						<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
					<?php } 
					else { 
						if (check_if_added_to_cart(9)) 
						{ 
							echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } 
						else { ?> 
							<a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a><?php } 
					} ?>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
					<img src="samsung galaxy m40 17999.jpg">
					<div class="caption">
						<h3>Samsung Galaxy m40</h3>
						<p>Price: Rs. 17999.00</p>
					</div>
					<?php 
					if (!isset($_SESSION['email'])) 
					{ ?> 
						<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
					<?php } 
					else { 
						if (check_if_added_to_cart(10)) 
						{ 
							echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } 
						else { ?> 
							<a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a><?php } 
					} ?>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
					<img src="samsung gal... m30s 14999.jpg">
					<div class="caption">
						<h3>Samsung Galaxy m30s</h3>
						<p>Price: Rs. .14999</p>
					</div>
					<?php 
					if (!isset($_SESSION['email'])) 
					{ ?> 
						<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
					<?php } 
					else { 
						if (check_if_added_to_cart(11)) 
						{ 
							echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } 
						else { ?> 
							<a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a><?php } 
					} ?>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
					<img src="panasonic eluga ray 810 10990.jpg">
					<div class="caption">
						<h3>Panasonic Eluga Ray 810</h3>
						<p>Price: Rs. 10990.00</p>
					</div>
					<?php 
					if (!isset($_SESSION['email'])) 
					{ ?> 
						<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
					<?php } 
					else { 
						if (check_if_added_to_cart(12)) 
						{ 
							echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } 
						else { ?> 
							<a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a><?php } 
					} ?>
				</div>
			</div>
		</div>
		<div class="row text-center">
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
					<img src="vivo v17 24990.jpg">
					<div class="caption">
						<h3>Vivo v17</h3>
						<p>Price: Rs. 24990.00</p>
					</div>
					<?php 
					if (!isset($_SESSION['email'])) 
					{ ?> 
						<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
					<?php } 
					else { 
						if (check_if_added_to_cart(13)) 
						{ 
							echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } 
						else { ?> 
							<a href="cart-add.php?id=13" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a><?php } 
					} ?>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
					<img src="oneplus 7t 37999.jpg">
					<div class="caption">
						<h3>Oneplus 7t</h3>
						<p>Price: Rs. 37999.00</p>
					</div>
					<?php 
					if (!isset($_SESSION['email'])) 
					{ ?> 
						<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
					<?php } 
					else { 
						if (check_if_added_to_cart(14)) 
						{ 
							echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } 
						else { ?> 
							<a href="cart-add.php?id=14" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a><?php } 
					} ?>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
					<img src="redmi note 8 plus 16999.jpg">
					<div class="caption">
						<h3>Redmi Note 8 plus</h3>
						<p>Price: Rs. 16999.00</p>
					</div>
					<?php 
					if (!isset($_SESSION['email'])) 
					{ ?> 
						<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
					<?php } 
					else { 
						if (check_if_added_to_cart(15)) 
						{ 
							echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } 
						else { ?> 
							<a href="cart-add.php?id=15" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a><?php } 
					} ?>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
					<img src="redmi note 6 14499.jpg">
					<div class="caption">
						<h3>Redmi Note 6</h3>
						<p>Price: Rs. 14499.00</p>
					</div>
					<?php 
					if (!isset($_SESSION['email'])) 
					{ ?> 
						<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
					<?php } 
					else { 
						if (check_if_added_to_cart(16)) 
						{ 
							echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } 
						else { ?> 
							<a href="cart-add.php?id=16" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a><?php } 
					} ?>
				</div>
			</div>
		</div>
		<div class="row text-center">
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
					<img src="redmi note 9 pro 13999.jpg">
					<div class="caption">
						<h3>Redmi Note 9 pro</h3>
						<p>Price: Rs. 13999.00</p>
					</div>
					<?php 
					if (!isset($_SESSION['email'])) 
					{ ?> 
						<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
					<?php } 
					else { 
						if (check_if_added_to_cart(17)) 
						{ 
							echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } 
						else { ?> 
							<a href="cart-add.php?id=17" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a><?php } 
					} ?>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
					<img src="panasonic eluga i6 64999.jpg">
					<div class="caption">
						<h3>Panasonic Eluga i6</h3>
						<p>Price: Rs. 64999.00</p>
					</div>
					<?php 
					if (!isset($_SESSION['email'])) 
					{ ?> 
						<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
					<?php } 
					else { 
						if (check_if_added_to_cart(18)) 
						{ 
							echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } 
						else { ?> 
							<a href="cart-add.php?id=18" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a><?php } 
					} ?>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
					<img src="oneplus 7 pro 42999.jpg">
					<div class="caption">
						<h3>Redmi Note 8 plus</h3>
						<p>Price: Rs. 16999.00</p>
					</div>
					<?php 
					if (!isset($_SESSION['email'])) 
					{ ?> 
						<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
					<?php } 
					else { 
						if (check_if_added_to_cart(19)) 
						{ 
							echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } 
						else { ?> 
							<a href="cart-add.php?id=19" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a><?php } 
					} ?>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
					<img src="vivo y12 14999.jpg">
					<div class="caption">
						<h3>Vivo y12</h3>
						<p>Price: Rs. 14499.00</p>
					</div>
					<?php 
					if (!isset($_SESSION['email'])) 
					{ ?> 
						<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
					<?php } 
					else { 
						if (check_if_added_to_cart(20)) 
						{ 
							echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } 
						else { ?> 
							<a href="cart-add.php?id=20" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a><?php } 
					} ?>
				</div>
			</div>
		</div>
			<div class="row text-center">
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
					<img src="poco f1 by xiaomi 18999.jpg">
					<div class="caption">
						<h3>Xiomi Poco f1</h3>
						<p>Price: Rs. 18999.00</p>
					</div>
					<?php 
					if (!isset($_SESSION['email'])) 
					{ ?> 
						<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
					<?php } 
					else { 
						if (check_if_added_to_cart(21)) 
						{ 
							echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } 
						else { ?> 
							<a href="cart-add.php?id=21" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a><?php } 
					} ?>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
					<img src="realme 5 pro 14999.jpg">
					<div class="caption">
						<h3>Realme 5 pro</h3>
						<p>Price: Rs. 14999.00</p>
					</div>
					<?php 
					if (!isset($_SESSION['email'])) 
					{ ?> 
						<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
					<?php } 
					else { 
						if (check_if_added_to_cart(22)) 
						{ 
							echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } 
						else { ?> 
							<a href="cart-add.php?id=22" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a><?php } 
					} ?>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
					<img src="vivo v19 31990.jpg">
					<div class="caption">
						<h3>Vivo v19</h3>
						<p>Price: Rs. 31990.00</p>
					</div>
					<?php 
					if (!isset($_SESSION['email'])) 
					{ ?> 
						<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
					<?php } 
					else { 
						if (check_if_added_to_cart(23)) 
						{ 
							echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } 
						else { ?> 
							<a href="cart-add.php?id=23" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a><?php } 
					} ?>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
					<img src="samsung gal.. a30 15899.jpg">
					<div class="caption">
						<h3>Samsung Galaxy A30</h3>
						<p>Price: Rs. 15899.00</p>
					</div>
					<?php 
					if (!isset($_SESSION['email'])) 
					{ ?> 
						<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
					<?php } 
					else { 
						if (check_if_added_to_cart(24)) 
						{ 
							echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } 
						else { ?> 
							<a href="cart-add.php?id=24" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a><?php } 
					} ?>
				</div>
			</div>
		</div>
	</div>
	</div>
	<br><br><br><br><br>
	<?php
        include 'footer.php';
    ?> 
</body>
</html>