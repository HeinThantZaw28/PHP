<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


<?php  
include('crud.php');
?>


 <!DOCTYPE>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title></title>
 </head>
 <body>
 	<div class="container">
 		<div class="row">
 			<div class="col-md-2"></div>
 			<div class="col-md-8 shadow py-4 mt-3">
 				<h2 class="text-center">CRUD With Procedure</h2>
 				
 				<?php 
 				if (isset($_GET['eid'])) 
			{ $edit_array=array("id"=>$_GET['eid']);
			$query=$obj->editData("user",$edit_array);
			$row=mysqli_fetch_assoc($query);

		?>
		<form method="POST" action="crud.php">
		 					<input type="hidden" name="uid" value="<?php echo $row['id'];?>">
		 					<input type="" name="uname" placeholder="Enter Name" class="form-control mb-2" autocomplete="off" value="<?php echo $row['name'];?> ">
		 					<input type="" name="uemail" placeholder="Enter Email" class="form-control mb-2" autocomplete="off" value="<?php echo $row['email'];?>">
		 					<button class="btn btn-dark">Update</button>
		 				</form>
				<?php } else { ?>

 						<form method="POST" action="crud.php">
		 					<input type="" name="name" placeholder="Enter Name" class="form-control mb-2" autocomplete="off">
		 					<input type="" name="email" placeholder="Enter Email" class="form-control mb-2" autocomplete="off">
		 					<button class="btn btn-dark">Create</button>
		 				</form>
		 		<?php	} ?>
 				
 			</div>
 			<div class="col-md-2"></div>
 		</div>

 		<div class="row mt-4">
 			<table class="table table-bodered table-striped">
	 			<tr>
	 				<th>ID</th>
	 				<th>Name</th>
	 				<th>Email</th>
	 				<th>Created_Date</th>
	 				<th>Modified_Date</th>
	 				<th>Edit</th>
	 				<th>Delete</th>
	 			</tr>
	 			<!-- -----------------select-------------------- -->
	 				
	 			<?php 
	 				$query=$obj->selectData("user");
	 				while ($row=mysqli_fetch_assoc($query)) {
	 			?>
	 				<tr>
			 				<td><?php echo $row['id']?></td>
			 				<td><?php echo $row['name']?></td>
			 				<td><?php echo $row['email']?></td>
			 				<td><?php echo $row['created_date']?></td>
			 				<td><?php echo $row['modified_date']?></td>
			 				<td><a href="index.php?eid=<?php echo $row['id']?>" class="btn btn-dark">Edit</a></td>
			 				<td><a href="crud.php?id=<?php echo $row['id']?>" class="btn btn-danger">Delete</a></td> <!-- need to note -->
	 					</tr>

	 			<?php	}
	 			 ?>
	 				
	 			<!-- ----------------------------------------------- -->
	 			
 			</table>
 		</div>
 	</div>
 </body>
 </html>