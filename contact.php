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
    <br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="caption">
                    <h3>LIVE SUPPORT</h3>
                    <h4>24 Hours | 7 days a week | 365 days a year Live Technical Support</h4>
                        <p>We at E-STORE are available for you 24/7. If you need any support or want to clear your heads from some doubts, we are always happy to help. You can contact us via email or via our helpline no. You can contact us to know about some updates or to remove any confusions about purchasing the product. Just fill in the details below and we are ready to help you!!! You can also contact us to give us your precious feedback. We would love to hear from you.</p>
                </div>
            </div>
            <div class="col-sm-2">
                <img src="contact.png">
            </div>
        </div>
    </div>
    <div class="container">
		<div class="row">
			<div class="col-xs-6">
				<h3>CONTACT US</h3>
				<form role="form" action="contact_submit.php" method="POST">
					<div class="form-group">
						<input class="form-control" placeholder="Name" name="name"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
					</div>
					<div class="form-group">
						<input type="email" class="form-control"  placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="email" required = "true">
					</div>
					<div class="form-group">
						<textarea class="form-control" name="message" placeholder="Message"></textarea>
					</div>
					<button type="submit" name="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
			<div class="col-xs-6">
				<h3>COMPANY INFORMATION</h3>
				<p>500 Lorem Ipsum Dolor Sit,<br>
22-56-2-9 Sit Amet' Lorem ,<br>
USA <br>
Phone : (00) 222 666 444<br>
Fax: (000) 000 00 00 0<br>
Email : info@mycompany.com<br>
Follow on : Facebook , Twitter</p>
			</div>
		</div>
	</div>
	<?php
        include 'footer.php';
    ?> 
</body>
</html>