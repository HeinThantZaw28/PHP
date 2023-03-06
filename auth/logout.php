<?php  
	include('../db.php');
	session_start();
	mysqli_query($conn,"DELETE FROM online_user WHERE user_id='".$_SESSION['id']."' AND login_date='".$_SESSION['login_date']."' ");
	unset($_SESSION['id']);
	unset($_SESSION['login_date']);
	header("location:../index.php");
?>