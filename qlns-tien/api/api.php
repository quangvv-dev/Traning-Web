<?php
require 'restful_api.php';

class api extends restful_api {


	function __construct(){
		parent::__construct();
	}
	
	
	function xoa_users(){
		$con  = mysqli_connect('localhost', 'root', 'minhtien','qlns');
		$id  = $_GET['id'];
		$sql = "DELETE FROM users where id='$id'";
		mysqli_query($con,$sql);
		header('location:http://localhost/vinsofts-web-training-052018/qlns-tien/docs/');
	}

	
	function them_users()
	{
		if($this->method == 'POST'){
			$con  = mysqli_connect('localhost', 'root', 'minhtien','qlns');
			mysqli_set_charset($con, 'UTF8');
			$res=[];
			if($con->connect_error){
				$res['MESSAGE']="ERROR";
				$res['STATUS']=500;
			}else{
				if(is_uploaded_file($_FILES["image"]["tmp_name"]) ){
					$name=$_POST['name'];
					$email=$_POST['email'];
					$emailP=$_POST['email_personal'];
					$pass=$_POST['password'];
					$token=$_POST['remember_token'];

					$gender=$_POST['gender'];
					$birth=$_POST['date_of_birth'];
					$identify=$_POST['identify_id'];
					$phone=$_POST['phone_number'];
					$CA=$_POST['current_address'];
					$PA=$_POST['permanent_address'];
					$graduate=$_POST['graduate_from'];
					$salary=$_POST['salary'];
					$bank=$_POST['bank_account_number'];
					$hobby=$_POST['hobby'];
					$family=$_POST['family_description'];
					$language=$_POST['language_skills'];
					$leaveday=$_POST['leave_days'];
					$role=$_POST['role_id'];
					$team=$_POST['team_id'];
					$status=$_POST['status'];
					$tmp_file = $_FILES["image"]["tmp_name"];
					$img_name = "users.".rand(10,1000).".".$_FILES["image"]["name"];
					$upload_dir = "images/".$img_name;

					$sql = "INSERT INTO users( name, email, email_personal, password, remember_token, image, gender, date_of_birth, identify_id, phone_number, current_address, permanent_address, graduate_from, salary,bank_account_number, hobby, family_description, language_skills, leave_days, role_id, team_id, status) VALUES ('{$name}','{$email}','{$emailP}','{$pass}','{$token}','{$img_name}','{$gender}','{$birth}','{$identify}','{$phone}','{$CA}','{$PA}','{$graduate}','{$salary}','{$bank}','{$hobby}','{$family}','{$language}','{$leaveday}','{$role}','{$team}','{$status}')";
					
					if(move_uploaded_file($tmp_file, $upload_dir) && $con->query($sql)){
						$res["MESSAGE"]="upload thanh cong";
						$res["STATUS"]=200;
					}else{
						$res["MESSAGE"]="upload xit";
						$res["STATUS"]=404;
					}
				}else{
					$res["MESSAGE"]="invalid request";
					$res["STATUS"]=400;
				}
			}
			echo json_encode($res);
			header('location:http://localhost/vinsofts-web-training-052018/qlns-tien/docs/');
		}
	}	

	function sua_users()
	{
		if($this->method == 'POST'){
			$con  = mysqli_connect('localhost', 'root', 'minhtien','qlns');
			mysqli_set_charset($con, 'UTF8');
			$res=[];
			if($con->connect_error){
				$res['MESSAGE']="ERROR";
				$res['STATUS']=500;
			}else{
				$id=$_GET['id'];
				$name=$_POST['name'];
				$email=$_POST['email'];
				$emailP=$_POST['email_personal'];
				$pass=$_POST['password'];
				$token=$_POST['remember_token'];
				$gender=$_POST['gender'];
				$birth=$_POST['date_of_birth'];
				$identify=$_POST['identify_id'];
				$phone=$_POST['phone_number'];
				$CA=$_POST['current_address'];
				$PA=$_POST['permanent_address'];
				$graduate=$_POST['graduate_from'];
				$salary=$_POST['salary'];
				$bank=$_POST['bank_account_number'];
				$hobby=$_POST['hobby'];
				$family=$_POST['family_description'];
				$language=$_POST['language_skills'];
				$leaveday=$_POST['leave_days'];
				$role=$_POST['role_id'];
				$team=$_POST['team_id'];
				$status=$_POST['status'];
				$img_name 		= $_POST['anh'];
				if(is_uploaded_file($_FILES["image"]["tmp_name"]) ){
					$tmp_file = $_FILES["image"]["tmp_name"];
					$upload_dir = "images/".$img_name;
					$sql = "UPDATE  users SET name='$name', email='$email', email_personal='$emailP', password='$pass', remember_token='$token', image='$img_name', gender='$gender', date_of_birth='$birth', identify_id='$identify', phone_number='$phone', current_address='$CA', permanent_address='$PA', graduate_from='$graduate', salary='$salary',bank_account_number='$bank', hobby='$hobby', family_description='$family', language_skills='$language', leave_days='$leaveday', role_id='$role', team_id='$team', status='$status' where id='$id'";
					if(move_uploaded_file($tmp_file, $upload_dir) && $con->query($sql)){
						$res["MESSAGE"]="update thanh cong ";
						$res["STATUS"]=200;
					}else{
						$res["MESSAGE"]="upload xit";
						$res["STATUS"]=404;
					}
				}
				else{
					$sql = "UPDATE  users SET name='$name', email='$email', email_personal='$emailP', password='$pass', remember_token='$token', image='$img_name', gender='$gender', date_of_birth='$birth', identify_id='$identify', phone_number='$phone', current_address='$CA', permanent_address='$PA', graduate_from='$graduate', salary='$salary',bank_account_number='$bank', hobby='$hobby', family_description='$family', language_skills='$language', leave_days='$leaveday', role_id='$role', team_id='$team', status='$status' where id='$id'";
					if( $con->query($sql)){
						$res["MESSAGE"]="update thanh cong ";
						$res["STATUS"]=200;
					}else{
						$res["MESSAGE"]="upload xit";
						$res["STATUS"]=404;
					}
				}
				
			}
		}
		echo json_encode($res);
		header('location:http://localhost/vinsofts-web-training-052018/qlns-tien/docs/');
	}


	

	function them_phongban(){
		if($this->method == 'POST'){
			$con  = mysqli_connect('localhost', 'root', 'minhtien','qlns');
			mysqli_set_charset($con, 'UTF8');
			$res=[];
			if($con->connect_error){
				$res['MESSAGE']="ERROR";
				$res['STATUS']=500;
			}else{
				if(is_uploaded_file($_FILES["logo"]["tmp_name"]) ){
					$name = $_POST['name'];
					$mota = $_POST['mota'];
					$leader_id = $_POST['leader_id'];
					$tmp_file = $_FILES["logo"]["tmp_name"];
					$img_name = "phongban.".rand(10,1000).$_FILES["logo"]["name"];
					$upload_dir = "images/".$img_name;
					$sql  = "INSERT INTO teams (name,desscription,logo,leader_id)VALUES('{$name}','{$mota}','{$img_name}','{$leader_id}')";
					if(move_uploaded_file($tmp_file, $upload_dir) && $con->query($sql)){
						$res["MESSAGE"]="upload thanh cong";
						$res["STATUS"]=200;
					}else{
						$res["MESSAGE"]="upload xit";
						$res["STATUS"]=404;
					}
				}else{
					$res["MESSAGE"]="invalid request";
					$res["STATUS"]=400;
				}
			}
			echo json_encode($res);
			header('location:http://localhost/vinsofts-web-training-052018/qlns-tien/docs/');
		}
	}


	function sua_phongban(){
		if($this->method == 'POST'){
			$con  = mysqli_connect('localhost', 'root', 'minhtien','qlns');
			mysqli_set_charset($con, 'UTF8');
			$res=[];
			if($con->connect_error){
				$res['MESSAGE']="ERROR";
				$res['STATUS']=500;
			}else{
				$id 		= $_GET['id'];
				$name 		= $_POST['name'];
				$mota 		= $_POST['mota'];
				$leader_id 	= $_POST['leader_id'];
				$img_name  	= $_POST['anh'];
				if(is_uploaded_file($_FILES["logo"]["tmp_name"]) ){
					$tmp_file = $_FILES["logo"]["tmp_name"];
					$upload_dir = "images/".$img_name;
					$sql  = "UPDATE teams set name='$name',desscription='$mota',logo='$img_name',leader_id='$leader_id' where id='$id'";
					if(move_uploaded_file($tmp_file, $upload_dir) && $con->query($sql)){
						$res["MESSAGE"]="update thanh cong ";
						$res["STATUS"]=200;
					}else{
						$res["MESSAGE"]="upload xit";
						$res["STATUS"]=404;
					}
				}
				$sql  = "UPDATE teams set name='$name',desscription='$mota',logo='$img_name',leader_id='$leader_id' where id='$id'";
				if( $con->query($sql)){
					$res["MESSAGE"]="update thanh cong ";
					$res["STATUS"]=200;
				}else{
					$res["MESSAGE"]="upload xit";
					$res["STATUS"]=404;
				}
			}
		}
		echo json_encode($res);
		header('location:http://localhost/vinsofts-web-training-052018/qlns-tien/docs/');
	}
	




	function xoa_phongban(){
		$con=mysqli_connect('localhost', 'root', 'minhtien','qlns');
		$id=$_GET['id'];
		$sql="DELETE FROM teams where id='$id'";
		$query=mysqli_query($con,$sql);
		header('location:http://localhost/vinsofts-web-training-052018/qlns-tien/docs/');
	}

	function random_user(){
		if ($this->method == 'GET'){
			$con  = mysqli_connect('localhost', 'root', 'minhtien','qlns');
			mysqli_set_charset($con, 'UTF8');
			$sql = 'select * from users';
			$query = mysqli_query($con,$sql);
			$data=[];

			while($row = mysqli_fetch_object($query)){
				echo  json_encode($row);
			}
			$this->response(200);
		}
		elseif ($this->method == 'POST') {
			$con  = mysqli_connect('localhost', 'root', 'minhtien','qlns');
			mysqli_set_charset($con, 'UTF8');
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
