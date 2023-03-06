<?php  
session_start();
include('../db.php');
if (isset($_POST['comment']) && isset($_POST['post_id']))
{
	$comment=$_POST['comment'];
	$post_id=$_POST['post_id'];
	mysqli_query($conn,"INSERT INTO comment(comment,user_id,post_id,created_date,modified_date) VALUES('$comment','".$_SESSION['id']."','$post_id',now(),now())");
}
?>