<?php
	 include "../admin/config/koneksi.php";

	 $nip = $_POST['nip'];
	 $nama = $_POST['nama'];
	 $password1 = md5($_POST['password1']);
	 $password2 = md5($_POST['password2']);
	 $email = $_POST['email'];
	 $foto = $_FILES['foto']['name']; 
	 $tmp = $_FILES['foto']['tmp_name'];
	 $fotobaru = date('dmYHis').$foto;
	 $path = 'images/'.$fotobaru;

	 $query = $connect->query("SELECT * FROM tbl_user WHERE nip = '$nip'");
                while ($data = $query->fetch_array()) {
                	$pass= $data['pass'];
                }
	 if($pass == $password1){
	 	if(move_uploaded_file($tmp, $path)){
	 		$query = $connect->query("UPDATE tbl_user SET username = '$nama', pass= '$password2', 
	 		email = '$email' , foto = '$fotobaru' WHERE nip = '$nip'"); 


	 		header("location:user.php");
		}
	 	
	 	else{
		 	echo "<script>alert('Data Gagal Ditambahkan');window.location ='user.php'</script>";
	 	}
	
	}

	else{
	 	echo "<script>alert('Password Anda Salah');window.location ='user.php'</script>";
	 }
	
 ?>