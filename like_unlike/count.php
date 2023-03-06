<?php  

include('../db.php');
session_start();
if (isset($_POST['id'])) 
{
	$id=$_POST['id'];
	$sql=mysqli_query($conn,"SELECT * FROM like_data WHERE post_id='$id' ");
	echo mysqli_num_rows($sql);
}

?>