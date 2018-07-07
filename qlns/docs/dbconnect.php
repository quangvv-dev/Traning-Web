<?php
$con = mysqli_connect("localhost","root","minhtien","qlns");
mysqli_set_charset($con, 'UTF8');
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>