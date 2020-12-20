<?php
	require 'common.php';
	$name=$_POST['name'];
	$email=$_POST['email'];
	$regex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
	if(!preg_match($regex_email, $email))
	{
		header('location: signup.php?email_error=enter correct email');
	}
	$message=$_POST['message'];
	$name=mysqli_real_escape_string($con,$name);
	$email=mysqli_real_escape_string($con,$email);
	$message=mysqli_real_escape_string($con,$message);
	$user_message_query="INSERT into support (name,email,message) values ('$name','$email','$message')";
	$user_message_submit=mysqli_query($con,$user_message_query) or die(mysqli_error($con));
	header('location:products.php');
?>