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
		header('location:http://localhost/qlns/docs/');
	}

	
	function them_users()
	{
		if($this->method == 'POST'){
			$con  = mysqli_connect('localhost', 'root', 'minhtien','qlns');
			mysqli_set_charset($con, 'UTF8');
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

			$sql = "INSERT INTO users( name, email, email_personal, password, remember_token, image, gender, date_of_birth, identify_id, phone_number, current_address, permanent_address, graduate_from, salary,bank_account_number, hobby, family_description, language_skills, leave_days, role_id, team_id, status) VALUES ('$name','$email','$emailP','$pass','$token','$nameImg','$gender','$birth','$identify','$phone','$CA','$PA','$graduate','$salary','$bank','$hobby','$family','$language','$leaveday','$role','$team','$status')";
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
			header('location:http://localhost/qlns/docs/');
		}
		if(isset($_POST["submit"])){
			$type = array("png", "gif", "jpg", "jpeg", "mp3");
			Upload_Single_File("image", "../docs/images/", 5, $type);
		}

		function Upload_Single_File($name, $folder, $max, $type){
			$target_file = $folder . basename($_FILES[$name]["name"]);
			$uploadOk = 0;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			$check = getimagesize($_FILES[$name]["tmp_name"]);
			if($check != false) {
				echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				echo "File is not an image.";
				$uploadOk = 0;
			}

			if (file_exists($target_file)) {	
				echo "Sorry, file already exists.";
				$uploadOk = 0;
			}

			if ($_FILES[$name]["size"] > $max*1024*1024) {
				echo "Sorry, your file is too large.";
				$uploadOk = 0;
			} 

			if( !in_array($imageFileType, $type) ) {	
				echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				$uploadOk = 0;
			}

			if ($uploadOk == 0) {	
				echo "Sorry, your file was not uploaded.";
			} else {
				if (move_uploaded_file($_FILES[$name]["tmp_name"], $target_file)) {
					echo "The file ". basename( $_FILES[$name]["name"]). " has been uploaded.";
				} else {
					echo "Sorry, there was an error uploading your file.";
				}
			}	
		}
	}	
	function sua_users()
	{
		if($this->method == 'POST'){
			$con  = mysqli_connect('localhost', 'root', 'minhtien','qlns');
			mysqli_set_charset($con, 'UTF8');
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

			$sql = "UPDATE  users SET name='$name', email='$email', email_personal='$emailP', password='$pass', remember_token='$token', image='$nameImg', gender='$gender', date_of_birth='$birth', identify_id='$identify', phone_number='$phone', current_address='$CA', permanent_address='$PA', graduate_from='$graduate', salary='$salary',bank_account_number='$bank', hobby='$hobby', family_description='$family', language_skills='$language', leave_days='$leaveday', role_id='$role', team_id='$team', status='$status' where id='$id'";

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
			header('location:http://localhost/qlns/docs/');
		}
		if(isset($_POST["submit"])){
			$type = array("png", "gif", "jpg", "jpeg", "mp3");
			Upload_Single_File("image", "../docs/images/", 5, $type);
		}

		function Upload_Single_File($name, $folder, $max, $type){
			$target_file = $folder . basename($_FILES[$name]["name"]);
			$uploadOk = 0;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			$check = getimagesize($_FILES[$name]["tmp_name"]);
			if($check != false) {
				echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				echo "File is not an image.";
				$uploadOk = 0;
			}

			if (file_exists($target_file)) {	
				echo "Sorry, file already exists.";
				$uploadOk = 0;
			}

			if ($_FILES[$name]["size"] > $max*1024*1024) {
				echo "Sorry, your file is too large.";
				$uploadOk = 0;
			} 

			if( !in_array($imageFileType, $type) ) {	
				echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				$uploadOk = 0;
			}

			if ($uploadOk == 0) {	
				echo "Sorry, your file was not uploaded.";
			} else {
				if (move_uploaded_file($_FILES[$name]["tmp_name"], $target_file)) {
					echo "The file ". basename( $_FILES[$name]["name"]). " has been uploaded.";
				} else {
					echo "Sorry, there was an error uploading your file.";
				}
			}	
		}
	}

	function them_phongban(){
		if($this->method == 'POST'){
			$con  = mysqli_connect('localhost', 'root', 'minhtien','qlns');
			mysqli_set_charset($con, 'UTF8');
			$res=array();
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
			header('location:http://localhost/qlns/docs/');
		}
	}


	function them_phongban1(){
		if($this->method == 'POST'){
			$con  = mysqli_connect('localhost', 'root', 'minhtien','qlns');
			mysqli_set_charset($con, 'UTF8');
			$name = $_POST['name'];
			$mota = $_POST['mota'];
			$logo = basename($_FILES[$name]["name"]);
			$leader_id = $_POST['leader_id'];
			$sql  = "INSERT INTO teams (name,desscription,logo,leader_id)VALUES('$name','$mota','$logo','$leader_id')";
			$query=mysqli_query($con,$sql);
			header('location:http://localhost/qlns/docs/');
		}
		if(isset($_POST["submit"])){
			$type = array("png", "gif", "jpg", "jpeg", "mp3");
			Upload_Single_File("logo", "../docs/images/", 5, $type);
		}

		function Upload_Single_File($name, $folder, $max, $type){
			$target_file = $folder . basename($_FILES[$name]["name"]);
			$uploadOk = 0;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			$check = getimagesize($_FILES[$name]["tmp_name"]);// check fake
			if($check != false) {
				echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				echo "File is not an image.";
				$uploadOk = 0;
			}

			if (file_exists($target_file)) {	// Check if file already exists
				echo "Sorry, file already exists.";
				$uploadOk = 0;
			}

			if ($_FILES[$name]["size"] > $max*1024*1024) {// Check file size
				echo "Sorry, your file is too large.";
				$uploadOk = 0;
			} 

			if( !in_array($imageFileType, $type) ) {	// Allow certain file formats
				echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				$uploadOk = 0;
			}

			if ($uploadOk == 0) {	// Check if $uploadOk is set to 0 by an error
				echo "Sorry, your file was not uploaded.";
			} else {
				if (move_uploaded_file($_FILES[$name]["tmp_name"], $target_file)) {
					echo "The file ". basename( $_FILES[$name]["name"]). " has been uploaded.";
				} else {
					echo "Sorry, there was an error uploading your file.";
				}
			}	
		}
	}

	
	function sua_phongban(){
		if($this->method == 'POST'){
			$con  = mysqli_connect('localhost', 'root', 'minhtien','qlns');
			mysqli_set_charset($con, 'UTF8');
			$res=array();
			if($con->connect_error){
				$res['MESSAGE']="ERROR";
				$res['STATUS']=500;
			}else{
				$id = $_GET['id'];
				$name = $_POST['name'];
				$mota = $_POST['mota'];
				$leader_id = $_POST['leader_id'];
				if(is_uploaded_file($_FILES["logo"]["tmp_name"]) ){
					$tmp_file = $_FILES["logo"]["tmp_name"];
					$img_name = $_POST['anh'];
					$upload_dir = "images/".$img_name;
					$sql  = "UPDATE teams set name='$name',desscription='$mota',logo='$img_name',leader_id='$leader_id' where id='$id'";
					if(move_uploaded_file($tmp_file, $upload_dir) && $con->query($sql)){
						$res["MESSAGE"]="update thanh cong 1";
						$res["STATUS"]=200;
					}else{
						$res["MESSAGE"]="upload xit";
						$res["STATUS"]=404;
					}
				}
			}
		}
		echo json_encode($res);
		header('location:http://localhost/qlns/docs/');
	}
	



	function sua_phongban1(){
		if($this->method == 'POST'){
			$con  = mysqli_connect('localhost', 'root', 'minhtien','qlns');
			mysqli_set_charset($con, 'UTF8');
			$id 	= $_GET['id'];
			$name 	= $_POST['name'];
			$mota 	= $_POST['mota'];
			$logo 	= $_POST['logo'];
			$leader_id = $_POST['leader_id'];
			$sql = "UPDATE teams SET name='$name', desscription='$mota', logo='$logo', leader_id='$leader_id' where id='$id'";
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
			header('location:http://localhost/qlns/docs/');
		}
		if(isset($_POST["submit"])){
			$type = array("png", "gif", "jpg", "jpeg", "mp3");
			Upload_Single_File("logo", "../docs/images/", 5, $type);
		}

		function Upload_Single_File($name, $folder, $max, $type){
			$target_file = $folder . basename($_FILES[$name]["name"]);
			$uploadOk = 0;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			$check = getimagesize($_FILES[$name]["tmp_name"]);// check fake
			if($check != false) {
				echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				echo "File is not an image.";
				$uploadOk = 0;
			}

			if (file_exists($target_file)) {	// Check if file already exists
				echo "Sorry, file already exists.";
				$uploadOk = 0;
			}

			if ($_FILES[$name]["size"] > $max*1024*1024) {// Check file size
				echo "Sorry, your file is too large.";
				$uploadOk = 0;
			} 

			if( !in_array($imageFileType, $type) ) {	// Allow certain file formats
				echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				$uploadOk = 0;
			}

			if ($uploadOk == 0) {	// Check if $uploadOk is set to 0 by an error
				echo "Sorry, your file was not uploaded.";
			} else {
				if (move_uploaded_file($_FILES[$name]["tmp_name"], $target_file)) {
					echo "The file ". basename( $_FILES[$name]["name"]). " has been uploaded.";
				} else {
					echo "Sorry, there was an error uploading your file.";
				}
			}	
		}
	}

	function xoa_phongban(){
		$con=mysqli_connect('localhost', 'root', 'minhtien','qlns');
		$id=$_GET['id'];
		$sql="DELETE FROM teams where id='$id'";
		$query=mysqli_query($con,$sql);
		header('location:http://localhost/qlns/docs/');
	}

	function random_user(){
		if ($this->method == 'GET'){
			$con  = mysqli_connect('localhost', 'root', 'minhtien','qlns');
			mysqli_set_charset($con, 'UTF8');
			$sql = 'select * from users';
			$query = mysqli_query($con,$sql);
			$data=array();

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
