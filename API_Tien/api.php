<?php
require 'restful_api.php';

class api extends restful_api {

	function __construct(){
		parent::__construct();
	}



	function random_user(){
		if ($this->method == 'GET'){
			$con = mysqli_connect('localhost', 'root', 'minhtien','qlns');
			$sql = 'select * from users';
			$query = mysqli_query($con,$sql);
			$data=array();
			while($row = mysqli_fetch_object($query)){
				echo  json_encode($row);
			}
			$this->response(200);
		}
		elseif ($this->method == 'POST') {
			$con = mysqli_connect('localhost', 'root', 'minhtien','qlns');
			$name=$_POST['name'];
			$mota=$_POST['mota'];
			$logo = $_POST['logo'];
			$leader_id = $_POST['leader_id'];
			$sql = "INSERT INTO teams (name,desscription,logo,leader_id)VALUES('$name','$mota','$logo','$leader_id')";
			$query=mysqli_query($con,$sql);
			if($query)
			{
				$response=array(
					'status' => 1,
					'status_message' =>'Product Added Successfully.'
				);
			}
			else
			{
				$response=array(
					'status' => 0,
					'status_message' =>'Product Addition Failed.'
				);
			}
			header('Content-Type: application/json');
			echo json_encode($response);
		}
		elseif ($this->method == 'DELETE') {
			$con = mysqli_connect('localhost', 'root', 'minhtien','qlns');
			$id=$_GET['id'];
			$sql="DELETE FROM teams where id='$id'";
			$query=mysqli_query($con,$sql);
			if($query)
			{
				$response=array(
					'status' => 1,
					'status_message' =>'Xoa thanh cong.'
				);
			}
			else
			{
				$response=array(
					'status' => 0,
					'status_message' =>'Da co loi xay ra.'
				);
			}
			header('Content-Type: application/json');
			echo json_encode($response);
		}
	}
}


$user_api = new api();

?>
