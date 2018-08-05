<?php
use MongoDB\Client;

//require autoload
require_once "../vendor/autoload.php";
// khoi tao class Client
$conn 			= new Client();
$DB 			= $conn->QLNS;
$teams          = $DB->teams;
$users			= $DB->user;

?>
