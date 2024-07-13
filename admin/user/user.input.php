<?php
 session_start();
 $sesi_username			= isset($_SESSION['username']) ? $_SESSION['username'] : NULL;
if ($sesi_username != NULL || !empty($sesi_username) ||$_SESSION['leveluser']=='1'  ) 

{
	include "../config/koneksi.php";
	// $id_jab = $_POST['id'];
	error_reporting(0);
// buat koneksi ke database mysqli


// proses menghapus data mahasiswa
  if(isset($_POST['hapus1'])) {
  mysqli_query($connect,"DELETE FROM tbl_user WHERE id_user=".$_POST['hapus1']);
  } 
  else {
	// deklarasikan variabel
	$id_user	= $_POST['id_user'];
	$username	= $_POST['username'];
	$nip	= $_POST['nip'];
	$email	= $_POST['email'];
	$status	= $_POST['status'];
	$kd_approve	= $_POST['kd_approve'];
	
	// validasi agar tidak ada data yang kosong
		// proses tambah data mahasiswa
	if($username!="") {
		if($id_user == 0) {
		$q_tambah=mysqli_query($connect,"INSERT INTO tbl_user VALUES(NULL,'$username','','','$email','$nip','$status','','',$kd_approve,'')");
			
		// proses ubah data mahasiswa
		} 

		else {
			$q_edit=mysqli_query($connect,"UPDATE tbl_user SET 
			username = '$username', nip = '$nip', email = '$email', status = '$status', kd_approve = '$kd_approve' WHERE id_user= $id_user");
		}
			if ($q_edit) {
			echo "<h4 class='alert_success'>Data berhasil ditambahkan <a href=''>Cetak</a><span id='close'>[<a href='#'>X</a>]</span></h4>";
			} 
			else {
			echo "<h4 class='alert_success'>Data gagal ditambahkan <a href=''>Cetak</a><span id='close'>[<a href='#'>X</a>]</span></h4>";
			}
	}
	else{
		echo "<h4 class='alert_error'>Data gagal ditambahkan <a href=''>Cetak</a><span id='close'>[<a href='#'>X</a>]</span></h4>";
	}
}

?>
<?php
}else{
	session_destroy();
	header('Location:../index.php?status=Silahkan Login');
}
?>