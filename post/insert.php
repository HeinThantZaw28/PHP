<?php  
include('../db.php');
session_start();
if (isset($_POST)) 
{
	
	$title=$_POST['title'];
	$description=$_POST['description'];
	$photo=$_FILES['photo']['name'];
	$exe=pathinfo($photo,PATHINFO_EXTENSION); //to know the file extension
	$a=uniqid().'.'.$exe;
	$tmp=$_FILES['photo']['tmp_name'];
	if($photo) 
	{
		move_uploaded_file($tmp, "../img/$a"); //to move the file into the folder
	}
	// esle
	// {
	// 	$photo="empty.png";
	// }

	$query=mysqli_query($conn,"INSERT INTO post(title,description,post_photo,user_id,created_date,modified_date) VALUES('$title','$description','$a','".$_SESSION['id']."',now(),now()) ");
	header("location:../home.php");
}
?>