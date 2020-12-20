<?php
	require 'common.php';
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$password=mysqli_real_escape_string($con,$_POST['password']);
	$select_query="SELECT id,email FROM users WHERE email='$email' AND password= md5('$password')";
	$select_query_result=mysqli_query($con,$select_query) or die(mysqli_error($con));
	if(mysqli_num_rows($select_query_result)==0)
	{
		echo "No such user";
	}
	else
	{
		$row=mysqli_fetch_array($select_query_result);
		$_SESSION['email']=$email;
		$_SESSION['id']=$row['id'];
		header('location:products.php');
	}
?>