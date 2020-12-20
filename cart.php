<?php
    require 'common.php';
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
    <title>E-Store Cart Page</title>
  </head>
<body>
    <?php
        include 'header.php';
    ?>
	<br><br><br>
	<?php
	$user_id=$_SESSION['id'];
	$select_query="SELECT i.id,i.name,i.price FROM items i INNER JOIN users_items ui ON ui.items_id=i.id AND ui.user_id='$user_id' and status='Added to cart'";
	$select_query_result=mysqli_query($con,$select_query) or die(mysqli_error($con));
	if(mysqli_num_rows($select_query_result)==0)
	{
		echo 'Add items to the cart first!';
	}
	else{
		?>
		<div class="container">
		<div class="col-xs-8 col-xs-offset-2">
		<table class="table table-borderless">
			<tbody>
				<tr>
					<th>Item Number</th>
					<th>Item Name</th>
					<th>Item Price</th>
					<th></th>
				</tr>
				<?php
				$sum=0;
				while ($row=mysqli_fetch_array($select_query_result))
				{
					$sum=$sum+$row['price'];
					$id=$row['id'];
				?>
				<tr>
					<td><?php echo $id; ?></td>
					<td><?php echo $row['name'] ?></td>
					<td><?php echo $row['price'] ?></td>
					<td><?php echo "<a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> Remove</a>";?></td>
				</tr>
				<?php } ?>
				<tr style="background-color: #eeee">
					<th></th>
					<th>Total </th>
					<th>Rs. <?php echo $sum; ?></th>
					<th><a href="success.php"><input type="submit" value="Confirm Order" class="btn btn-primary"></a></th>
				</tr>
			</tbody>
		</table>
	</div>
	</div>
		<?php
	}
	?>
	<?php
        include 'footer.php';
    ?> 
</body>
</html>