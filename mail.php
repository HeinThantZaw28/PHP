<?php  
if (isset($_POST['toemail'])) 
{
	$to=$_POST['toemail'];
	$from="From :".$_POST['fromemail'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];
	mail($to, $subject, $message,$from);
	header("location:friend.php");
}
?>