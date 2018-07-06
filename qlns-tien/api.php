<?php
include 'restful_api.php';

class api extends restful_api {

	function __construct(){
		parent::__construct();
	}
	function random_user(){
		$con 	= new mysqli('localhost','root','minhtien','qlns');
		$sql     = "select * from  teams" ;
		$result  = $con->query($sql);

		$data = [];

		if($result && $result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				array_push($data, $row);
			}
			echo json_encode($data);
		}
		else{
			echo "khong co du lieu";
		}
	}
}


$user_api = new api();

?>
