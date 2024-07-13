<?php
	$host = "localhost";
	$username = "root";
	$password = "";
	$database = "tubesimk";

	$connect = new mysqli ($host, $username, $password, $database);

	if($connect -> connect_errno){
		echo "gagal terhubung";
	}
?>