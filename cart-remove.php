<?php
	require 'common.php';
	$items_id=$_GET['id'];
	$user_id=$_SESSION['id'];
	$delete_query="DELETE FROM users_items WHERE user_id = '$user_id' and items_id = '$items_id' and status = 'Added to cart'";
	$delete_query_result=mysqli_query($con,$delete_query) or die(mysqli_error($con));
	header('location: cart.php');
?>