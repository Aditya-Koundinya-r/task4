<?php
$host = 'db';
$user = 'admin';
$password = 'admin';
$conn = mysqli_connect($host, $user, $password);
if (!$conn) {
	die('Cannot connect: ' . mysqli_connect_error());
}
echo 'MYSQL connected successfully';
?>