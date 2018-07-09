<?php
require 'restful_api.php';

class api extends restful_api {

	function __construct(){
		parent::__construct();
	}
	/**
	 * Function: teams
	 * Just a teams
	 */
	function teams(){
		if ($this->method == 'GET') {

			$connect = new mysqli("localhost","root","iuemhoe1","QLNS");
			$sql     = "SELECT * FROM user" ;
			$result  = $connect->query($sql);
			$data = [];
			if($result ){
				while($row = $result->fetch_assoc()){
					array_push($data, $row);
				}
				echo json_encode($data);
			}
			else{
				echo "khong co du lieu";
			}
		}
		else if ($this->method == 'POST'){
			$connect = mysqli_connect('localhost','root','iuemhoe1','QLNS');
			$name=$_POST['txtName'];
			$logo=$_POST['txtlogo'];
			$des = $_POST['txtDes'];
			$leader=$_POST['txtLeader'];
			$sql = "INSERT INTO `teams`( `name`, `description`, `logo`, `leader_id`) VALUES ( '$name','$des','$logo','$leader')";
			mysqli_query($connect,$sql);
			if(mysqli_query($connect, $sql))
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
		else if ($this->method == 'PUT'){
			// Hãy viết code xử lý CẬP NHẬT dữ liệu ở đây
			// trả về dữ liệu bằng cách gọi: $this->response(200, $data)
		}
		else if ($this->method == 'DELETE'){
			$id      = $_GET['id'];
			$conn =  new mysqli("localhost","root","iuemhoe1","QLNS");
			$query   = "DELETE FROM teams WHERE id=".$id;
			if(mysqli_query($conn, $query))
			{
				$response=array(
					'status'         => 1,
					'status_message' =>'Product Deleted Successfully.'
				);
			}
			else
			{
				$response=array(
					'status'         => 0,
					'status_message' => 'Product Deletion Failed.'
				);
			}
			header('Content-Type: application/json');
			echo json_encode($response);

		}
	}
	function updateTeams ()
	{
		if ($this->method == 'POST'){
			$id      = $_GET['id'];
			$connect = mysqli_connect('localhost','root','iuemhoe1','QLNS');
			$name=$_POST['txtName'];
			$logo=$_POST['txtlogo'];
			$des = $_POST['txtDes'];
			$leader=$_POST['txtLeader'];
			$sql = "UPDATE `teams` SET `name`='$name',`description`='$des',`logo`='$logo',`leader_id`='$leader' WHERE `id`='$id'";
			mysqli_query($connect,$sql);
			if(mysqli_query($connect, $sql))
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
	}

}

$user_api = new api();

?>
