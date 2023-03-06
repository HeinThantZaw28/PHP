<?php 
include('db.php');
if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['email']))
{
	$id=$_POST['id'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$sql="UPDATE user SET name='$name',email='$email',modified_date=now()
			WHERE id='$id'";
	mysqli_query($conn,$sql);
	header("location:index.php");
}

?>