<?php
	require 'common.php';
	if (!isset($_SESSION['email'])) { header('location: index2.php');}
	$old=$_POST['old'];
	$regex_old="/^.{6,}$/";
	if(!preg_match($regex_old, $old))
	{
		header('location: settings.php?password_error=enter correct password');
	}
	$new=$_POST['new'];
	$regex_new="/^.{6,}$/";
	if(!preg_match($regex_new, $new))
	{
		header('location: settings.php?password_error=enter correct new password');
	}
	$retype=$_POST['retype'];
	$regex_retype="/^.{6,}$/";
	if(!preg_match($regex_retype, $retype))
	{
		header('location: settings.php?email_error=retype correct password');
	}
	if($new != $retype)
	{
		header('location: settings.php?password_error=password mismatch');
	}
	$user_id=$_SESSION['id'];
	$select_query="SELECT password FROM users WHERE id='$user_id'";
	$select_submit_query=mysqli_query($con,$select_query) or die(mysqli_error($con));
	$row = mysqli_fetch_array($select_submit_query);
	if($row['password']==md5($old))
	{
		$update_query="UPDATE users SET password=md5('$new') WHERE id='$user_id'";
        $update_submit_query=mysqli_query($con,$update_query) or die(mysqli_error($con));
        header('location:products.php');
	}
	else{
		header('location: settings.php?password_error=enter correct password');	
	}
?>