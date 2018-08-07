<?php
include ('connect.php');
if(isset($_GET['id']))
{
    $id 	= $_GET['id'];
	$sql 	=  $users->deleteOne(["_id"=>new MongoDB\BSON\ObjectId($id)]);
    $url 	= 'users.php';
    echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
}
?>