<?php
 session_start();
 $sesi_username			= isset($_SESSION['username']) ? $_SESSION['username'] : NULL;
if ($sesi_username != NULL || !empty($sesi_username) ||$_SESSION['leveluser']=='1'  ) 

{
include "config/koneksi.php";

if(isset($_POST['bloked'])) {
	mysqli_query($connect,"update tbl_user set kd_approve='2' where id_user=".$_POST['bloked']);
} else {

if(isset($_POST['appro'])) {
	mysqli_query($connect,"update tbl_user set kd_approve='1' where id_user=".$_POST['appro']);
} else {

if(isset($_POST['hapus2'])) {
	mysqli_query($connect,"DELETE FROM tbl_user WHERE id_user=".$_POST['hapus2']);
} else {

	$id_user	= $_POST['id_user'];
	$username	= $_POST['username'];
	$password	= $_POST['password'];
	$email	= $_POST['email'];
	$photo	= $_POST['photo'];
	$level_user= $_POST['level_user'];
	$nip= $_POST['nip'];
	

	if($username!="") {
	
		if($id_user == 0) {
			mysqli_query($connect,"INSERT INTO tbl_user VALUES('','$username','$password','$level_user','$email','$nip','1',NOW(),NOW(),'$photo','0')");
	
		} else {
			mysqli_query($connect,"UPDATE tbl_user SET 
			username = '$username',
			pass = '$password',
			level_user = '$level_user',
			email = '$email',
			nip = '$nip',
			photo = '$photo'
			WHERE id_user= $id_user
			");
			mysqli_query($connect,"UPDATE pegawai SET 
			level_user = '$level_user'
			");
			
			
		}
	}
	
	
}
}
}
?>
<?php
}else{
	session_destroy();
	header('Location:index.php?status=Silahkan Login');
}
?>