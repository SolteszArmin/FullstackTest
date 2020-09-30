<?php
$host="127.0.0.1";
$user="root";
$pass="";
$database="Fullstack";
$conn=mysqli_connect($host,$user,$pass,$database);
if (!$conn)
{
	die('Connection fail ('.mysqli_connect_errno().')');
}
mysqli_query($conn,"SET NAMES 'UTF8'");
mysqli_query($conn,"SET CHARACTER SET 'UTF8'");
?>