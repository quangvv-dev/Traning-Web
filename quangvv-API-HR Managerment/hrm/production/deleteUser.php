<?php
include ('connect.php');
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $sql =  "DELETE FROM `user` WHERE id=$id";
    mysqli_query($conn,$sql);
    $url = 'http://localhost/hrm/production/users.php';
    echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
}
?>