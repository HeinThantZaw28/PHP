<?php 
include('db.php'); // assential

if (isset($_POST['name']) && isset($_POST['email'])) //isset function to check if the data are arrived or not
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$sql="INSERT INTO user(name,email,created_date,modified_date) VALUES('$name','$email',now(),now())"; //a lut ya, now() function to know the real time
	mysqli_query($conn,$sql); //need to know
	header("location:index.php"); //header() to redirect
}



?>