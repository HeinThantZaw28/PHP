<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>





 <!DOCTYPE html>
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
 				<h2 class="text-center">CRUD With Ajax and JQuery</h2>
 				
 						
		 					<input  type="" placeholder="Enter Name" class="form-control mb-2 name" autocomplete="off">
		 					<input  type="" placeholder="Enter Email" class="form-control mb-2 email" autocomplete="off">
		 					<button class="btn btn-dark" onclick="insertData()">Create</button>
		 				
 				
 			</div>
 			<div class="col-md-2"></div>
 		</div>

 		<div class="row mt-4 table_area">
 			
	 			
	 			
 			
 		</div>
 	</div>

 	<script type="text/javascript">
 		$(document).ready(function(){
 			selectData();
 		})
 		
 		function insertData()
 		{
 			var name=$('.name').val();
 			var email=$('.email').val();
 			// alert(name);
 			// alert(email);
 			$.ajax({
 				url:"crud.php", //similar with action
 				type:"POST", //similar with method
 				data:{name,email}, //similar with name
 				success:function(){
 					
 					$('.name,.email').val("");
 					selectData(); 
 				}
 			})
 		}

 		function selectData()
 		{
 			$.ajax({
 				url:"crud.php", //similar with action
 				type:"POST", //similar with method
 				data:{"select":1}, //jason format, select can be anything
 				success:function(data){
 					$('.table_area').html(data);	//html method cause of html code
 				}

 			});
 		}

 		function deleteData(id){
 			// alert(id);
 			$.ajax({
 				url:"crud.php",
 				type:"POST",
 				data:{id},
 				success:function(){
 					selectData();
 				}
 			});
 		}
 	</script>
 </body>
 </html>