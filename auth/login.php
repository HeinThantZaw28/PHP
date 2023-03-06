<?php  
date_default_timezone_set('Asia/Yangon');
session_start(); // to use session in the login form
include('../db.php');
if (isset($_POST)) {
	$name=$_POST['name'];
	$password=$_POST['password'];
	$query=mysqli_query($conn,"SELECT * FROM user WHERE name='$name' AND password='$password'");
	$row=mysqli_fetch_assoc($query); //to call id from the database

	if(mysqli_num_rows($query)>0)
	{
		header("location:../home.php");
		$_SESSION['id']=$row['id'];
		$_SESSION['login_date']=date('Y-m-d h:i:s');
		//active user
		mysqli_query($conn,"INSERT INTO online_user(user_id,active_date,login_date) VALUES('".$_SESSION['id']."',now(),'".$_SESSION['login_date']."')" );
	}
	else{
		echo "<script>alert('Login Failed');window.location.href='../index.php'; </script>";
	}
}
?>