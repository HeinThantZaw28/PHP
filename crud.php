<?php  
	include('db.php');
	date_default_timezone_set('Asia/Yangon');

	class crudData extends Database {
		public function insertData($table,$data) 
		{
			// INSERT INTO user(name,email,created_date,modified_date) VALUES('$id','$email',now(),now());
			$sql="INSERT INTO ".$table." (". implode(",", array_keys($data)).") VALUES ('".implode("','", array_values($data))."')";
			// echo $sql;
			mysqli_query($this->conn,$sql);
			header("location:index.php");

		}
		public function selectData($table){ 
			// SELECT * FORM user
			$sql="SELECT * FROM ".$table;
			// echo $sql;
			return mysqli_query($this->conn,$sql); //return function send the data which are called in index file
		}
		public function deleteData($table,$where){
			// DELETE FROM user WHERE id='$id';
			foreach ($where as $key => $value) {
				$condition=$key."='".$value."'";
			}
				// echo $condition;
				$sql="DELETE FROM ".$table." WHERE ".$condition;
				mysqli_query($this->conn,$sql);
				header("locaton:index.php");
			
		}
		public function editData($table,$where){
			// SELECT * FROM user WHERE id='id';
			foreach ($where as $key => $value) {
				$condition=$key."='".$value."'";

			}
			$sql="SELECT * FROM ".$table." WHERE ".$condition;
			return mysqli_query($this->conn,$sql);

		}

		public function updateData($table,$data,$where){
			// UPDATE user SET name='$name',email='$email' WHERE id='$id';
			foreach ($where as $key => $value) 
			{
				$condition=$key."='".$value."'";

			}
			$a="";
			foreach ($data as $key => $value) {
				$a.= $key."='".$value."',";
				
			}
			$b= substr($a, 0,-1);
			$sql="UPDATE ".$table." SET ".$b." WHERE ".$condition;
			mysqli_query($this->conn,$sql);
			header("location:index.php");
		}
	}
	$obj=new crudData;




	


	// -------------sending data-------------------
	if (isset($_POST['name']) && isset($_POST['email'])) 
	{
		$myarray=array("name"=>$_POST['name'],"email"=>$_POST['email'],"created_date"=>date('Y-m-d'),"modified_date"=>date('Y-m-d'));
		$obj->insertData("user",$myarray); //user==$table, $myarray==$data
	}
	// -----------------------------------------------
	if (isset($_GET['id'])) 
	{
		$delete_array=array("id"=>$_GET['id']);
		$obj->deleteData("user",$delete_array);
	}
	// ------------------------------------------------
	if (isset($_POST['uid']) && isset($_POST['uname']) && isset($_POST['uemail'])) 
	{
		$update_array=array("id"=>$_POST['uid']);
		$myarray=array("name"=>$_POST['uname'],"email"=>$_POST['uemail'],"modified_date"=>date('Y-m-d'));
		$obj->updateData("user",$myarray,$update_array);
	}

	?>