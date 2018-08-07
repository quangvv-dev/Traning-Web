<?php
include ('connect.php');
if(isset($_GET['id']))
{
    $id 	= $_GET['id'];

    $sql 	=  "DELETE FROM `teams` WHERE id=$id";
    mysqli_query($conn,$sql);
    $url 	= 'index.php';
    echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
}
?>