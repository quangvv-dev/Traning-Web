<?php
include 'restful_api.php';

class api extends restful_api {

	function __construct(){
		parent::__construct();
	}
	function demo_danh_sach_nhan_vien(){
		$con 	= new mysqli('localhost','root','minhtien','qlns');
		mysqli_set_charset($con, 'UTF8');
		$sql     = "select * from  teams" ;
		$result  = $con->query($sql);
		$data = [];
		if($result){
			while($row = $result->fetch_object()){
				array_push($data, $row);
			}
			echo json_encode($data);
		}
		else{
			echo "khong co du lieu";
		}
	}
	function demo_xoa_nhan_vien()
	{
		if($this->method == 'DELETE'){
			$con  = mysqli_connect('localhost', 'root', 'minhtien','qlns');
			$id   = $_GET['user_id'];
			$sql  	= "DELETE FROM users where id='$id'";
			$res = [];
			if( $con->query($sql)){
				$res["MESSAGE"]="delete sucsses ";
				$res["STATUS"]=200;
			}else{
				$res["MESSAGE"] = "delete fail";
				$res["STATUS"]  = 404;
			}
			header('Content-Type: application/json');
			echo json_encode($res);
		}
	}
	function demo_them_phong_ban()
	{
		if($this->method == 'POST'){
			$con 	 	 = mysqli_connect('localhost', 'root', 'minhtien','qlns');
			mysqli_set_charset($con, 'UTF8');
			$name 		 = $_POST['name'];
			$description = $_POST['description'];
			$sql  		 = "INSERT into teams (name,description) values('{$name}','{$description}')";
			if( $con->query($sql)){
				$res["MESSAGE"] = "insert sucsses ";
				$res["STATUS"]	= 200;
			}else{
				$res["MESSAGE"]	= "insert fail";
				$res["STATUS"]	= 404;
			}
		header('Content-Type: application/json');
			echo json_encode($res);
		}
	}
}


$user_api = new api();

?>
