<?php 
	
	$server = "localhost";
	$user = "root";
	$password = "";
	$db = "miracle";

	$connect = mysqli_connect($server, $user, $password, $db);
	if (!$connect) {
		echo "Connection Failed";
	}




?>