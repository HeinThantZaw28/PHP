<?php 
$conn=mysqli_connect("localhost","root","","register");
if (isset($_POST['name']) && isset($_POST['email'])) 
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$sql="INSERT INTO user(name,email,created_date,modified_date) VALUES('$name','$email',now(),now() )";
	mysqli_query($conn,$sql);
}


if (isset($_POST['select'])) 
{
	$data="";
	$data.='<table class="table table-bodered table-striped">
	 			<tr>
	 				<th>ID</th>
	 				<th>Name</th>
	 				<th>Email</th>
	 				<th>Created_Date</th>
	 				<th>Modified_Date</th>
	 				<th>Edit</th>
	 				<th>Delete</th>
	 			</tr>';
	 		$query=mysqli_query($conn,"SELECT * FROM user");
	 		while ($row=mysqli_fetch_assoc($query)) 
	 		{
	 			$data.='	<tr>
			 				<td>'.$row['id'].'</td>
			 				<td>'.$row['name'].'</td>
			 				<td>'.$row['email'].'</td>
			 				<td>'.$row['created_date'].'</td>
			 				<td>'.$row['modified_date'].'</td>
			 				<td><button class="btn btn-dark" >Edit</button></td>
			 				<td><button class="btn btn-danger" onclick="deleteData('.$row['id'].')">Delete</button></td> <!-- need to note -->
	 					</tr>';
	 		}
	 		$data.='</table>';
	 		echo $data;
}

if (isset($_POST['id'])) 
{
	$id=$_POST['id'];
	mysqli_query($conn,"DELETE FROM user WHERE id='$id' ");
}

?>