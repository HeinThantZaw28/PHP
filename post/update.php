<?php  
include('../db.php');
if (isset($_POST)) 
{
	$id=$_POST['uid'];
	$title=$_POST['title'];
	$description=$_POST['description'];
	$dp_name=$_POST['dp_name'];
	$photo=$_FILES['photo']['name'];
	$tmp=$_FILES['photo']['tmp_name'];
	if ($photo) 
	{
		move_uploaded_file($tmp, "../img/$photo");
		mysqli_query($conn,"UPDATE post SET title='$title', description='$description', post_photo='$photo', modified_date=now() WHERE id='$id'");
	}
	elseif ($dp_name) 
	{
		mysqli_query($conn,"UPDATE post SET title='$title', description='$description', post_photo='', modified_date=now() WHERE id='$id'");
		unlink("../img/".$dp_name);
	}
	else
	{
		mysqli_query($conn,"UPDATE post SET title='$title', description='$description', modified_date=now() WHERE id='$id'");
	}
	
	header("location:../home.php");
}
?>