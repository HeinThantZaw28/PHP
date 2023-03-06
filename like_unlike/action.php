<?php  

include('../db.php');
session_start();
if (isset($_POST['id'])) 
{
	$id=$_POST['id'];
	$sql=mysqli_query($conn,"SELECT * FROM like_data WHERE post_id='$id' AND user_id='".$_SESSION['id']."'");
	if (mysqli_num_rows($sql)>0) 
	{
		mysqli_query($conn,"DELETE FROM like_data WHERE post_id='$id' AND user_id='".$_SESSION['id']."' ");
	}else{
		mysqli_query($conn,"INSERT INTO like_data(post_id,user_id) VALUES('$id','".$_SESSION['id']."')");
	}
}

?>