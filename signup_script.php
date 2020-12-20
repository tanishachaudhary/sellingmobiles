<?php
	require 'common.php';
	$name=$_POST['name'];
	// $regex_name="[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$";
	// if(!preg_match($regex_name, $name))
	// {
	// 	//header('location: signup.php?email_error=enter correct name');
	// }
	$email=$_POST['email'];
	// $regex_email="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$";
	$regex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
	if(!preg_match($regex_email, $email))
	{
		header('location: signup.php?email_error=enter correct email');
	}
	$password=$_POST['password'];
	$regex_password="/^.{6,}$/";
	if(!preg_match($regex_password, $password))
	{
		header('location: signup.php?email_error=enter correct password');
	}
	$contact=$_POST['contact'];
	$regex_contact = "/^[789][0-9]{9}$/";
	if(!preg_match($regex_contact, $contact))
	{
		header('location: signup.php?email_error=enter correct contact');
	}
	$city=$_POST['city'];
	$address=$_POST['address'];
	$name=mysqli_real_escape_string($con,$name);
	$email=mysqli_real_escape_string($con,$email);
	$password=mysqli_real_escape_string($con,$password);
	$city=mysqli_real_escape_string($con,$city);
	$address=mysqli_real_escape_string($con,$address);
	$select_query="SELECT id FROM users WHERE email='$email'";
	$select_query_result=mysqli_query($con,$select_query) or die(mysqli_error($con));
	$total_rows_fetched=mysqli_num_rows($select_query_result);
	if($total_rows_fetched>0)
	{
		echo "This user already exists";
	}
	else
	{
		$user_registration_query="INSERT into users (name,email,password,contact,city,address) values ('$name','$email',md5('$password'),'$contact','$city','$address')";
		$user_registration_submit=mysqli_query($con,$user_registration_query) or die(mysqli_error($con));
		$_SESSION['id']=mysqli_insert_id($con);
		$_SESSION['email']=$email;
		header('location:products.php');
	}
?>