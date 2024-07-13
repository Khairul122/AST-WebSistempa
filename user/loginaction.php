<?php
	
	include 'connect.php';

	$NIP = $_POST['NIP'];
	$password = $_POST['password'];

	$query = $connect->query("SELECT * FROM tableuser WHERE 
		NIP ='$NIP' AND password ='$password'");
	if (!$query) {
		# code...
		echo "Harap periksa kembali! <a href='loginView.php'>Login kembali!</a>";
	}
	else {
		while ($data = $query->fetch_array()) {
			# code...
			if ($data['level'] == 'user') {
				# code...
				session_start();
				$_SESSION['NIP'] = $data['NIP'];
				header("location:user.php");
			}
			if ($data['level'] == 'admin') {
				# code...
				session_start();
				$_SESSION['NIP'] = $data['NIP'];
				header("location:index.php");
			}
		};
	}
?>