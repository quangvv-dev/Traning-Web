<?php

require_once 'RestFullApi.php';

class UserApi extends RestFullApi {

    private $table = 'users';
    
    function __construct(){
        parent::__construct();
    }

    function index(){

            $connect = new mysqli('localhost','root','khanh123','Quanlynhansu');
            $sql     = "Select * from " . $this->table;
            $result  = $connect->query($sql);

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

    function delete()
    {
        $id      = $_GET['id'];
        $connect = new mysqli('localhost','root','khanh123','Quanlynhansu');
        $query   = "DELETE FROM users WHERE id=".$id;
        if(mysqli_query($connect, $query))
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

?>