<?php 

$url = 'localhost';
$user = 'root';
$password = '';
$database = 'my_db';

$conn = mysqli_connect($url, $user, $password, $database);

if (!$conn) {
	# code...
	die("connection failed".mysql_error());
}else{
	echo 'connection successful';
}

?>