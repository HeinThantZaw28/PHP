<?php  
include('../db.php');
if (isset($_POST)) 
{
	$name=$_POST['name'];
	$password=$_POST['password'];
	// $a=hash('md5', $password);
	$cpassword=$_POST['cpassword'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$dob=$_POST['dob'];
	$gender=$_POST['gender'];
	$address=$_POST['address'];
	$photo=$_FILES['photo']['name']; //to call file type data[file name][name/size/type]
	$tmp=$_FILES['photo']['tmp_name'];
	
	// if ($photo=="image/jpeg" || $photo=="image/png") 
	// {
	// 	# code...
	// }
	if ($photo) 
	{
		move_uploaded_file($tmp, "../img/$photo"); //to move the file into the folder
	}
	else
	{
		$photo="empty.png";
	}
	$query=mysqli_query($conn,"SELECT * FROM user WHERE name='$name'");
	if(mysqli_num_rows($query)>0) //to know the number of the query
	{
		echo "<script>alert('Username already exit');window.location.href='../index.php'; </script>";
	}
	elseif($password==$cpassword)
	{
		$sql="INSERT INTO user (name,email,password,cpassword,phone,dob,gender,photo,address,created_date,modified_date) VALUES ('$name','$email','$password','$cpassword','$phone','$dob','$gender','$photo','$address',now(),now()) ";
		mysqli_query($conn,$sql);
		echo "<script>alert('Successfully Registred,Please Login!');window.location.href='../index.php'; </script>";
	}
	else
	{
		echo "<script>alert('Passwords do not match');window.location.href='../index.php'; </script>";
	}
}
?>