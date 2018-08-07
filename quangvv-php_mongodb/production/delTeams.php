<?php
include ('connect.php');
if(isset($_GET['id']))
{
    $id 	= $_GET['id'];
    // var_dump($id);
    $sql 	=  $teams->deleteOne(["_id"=>new MongoDB\BSON\ObjectId($id)]);
    // mysqli_query($conn,$sql);
    $url 	= 'index.php';
    echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
}
?>