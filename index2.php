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
    <title>E-Store</title>
  </head>
<body>
    <?php
        include 'header.php';
    ?> 
    <br><br> 
    <div class="banner_image">
        <div class="container">
            <center>
            <div class="banner_content">
                <h1>We Sell Mobiles</h1>
                <p>Flat 40% OFF on premium phones<br><br></p>
                <a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
            </div>
        </center>
        </div>
    </div>
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="gaming.jpg">
                    <div class="caption">
                        <h3>Gaming</h3>
                        <p>Have your best gaming experience in your hands.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="video.jpg">
                    <div class="caption">
                        <h3>Camera</h3>
                        <p>All your moments captured in your phone.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="movies.jpg">
                    <div class="caption">
                        <h3>Movies</h3>
                        <p>Make your phone your own personal theatre.</p>
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