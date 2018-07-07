<?php

/**
 * Created by PhpStorm.
 * User: khanhlouis
 * Date: 04/07/2018
 * Time: 21:27
 */
require_once 'RestFullApi.php';

class ProductApi extends RestFullApi
{
    function insert()
    {
        $connect = new mysqli('localhost','root','khanh123','Quanlynhansu');

        $name          = $_POST["name"];
        $description   = $_POST["description"];

        $query = "INSERT INTO teams (name, description) VALUES ('{$name}', '{$description}')";

        if(mysqli_query($connect, $query))
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