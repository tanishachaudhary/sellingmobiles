<?php
	session_start();
	if (!isset($_SESSION['email'])) { header('location: index2.php');}
	session_destroy();
	header('location: index2.php');
?>