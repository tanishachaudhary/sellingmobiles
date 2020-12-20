<?php
    require 'common.php';
    if (!isset($_SESSION['email'])) { header('location: index2.php');}
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
    <title>E-Store Settings Page</title>
  </head>
<body>
    <?php
        include 'header.php';
    ?>
	<div class="container">
		<div class="row row_style">
			<div class="col-xs-4 col-xs-offset-4">
				<h4>Change Password</h4>
				<form role="form" action="settings_script.php" method="POST">
					<div class="form-group">
						<input type="password" class="form-control" name="old" placeholder="Old Password" pattern=".{6,}">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="new" placeholder="New Password" pattern=".{6,}">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="retype" placeholder="Re-type New Password" pattern=".{6,}">
					</div>
                    <input type="submit" value="Change" class="btn btn-primary">
				</form>	
			</div>
		</div>
	</div>
    <?php
        include 'footer.php';
    ?> 
</body>
</html>