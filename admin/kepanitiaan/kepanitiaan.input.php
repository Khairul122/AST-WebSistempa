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
  mysqli_query($connect,"DELETE FROM kepanitiaan WHERE id=".$_POST['hapus1']);
  } 
  else {
	// deklarasikan variabel
	$id_jab	= $_POST['id_jab'];
	$id	= $_POST['id'];
	$nip	= $_POST['nip'];
	$nama_kep	= $_POST['nama_kep'];
	$tunjangan_kep	= $_POST['tunjangan_kep'];
	
	// validasi agar tidak ada data yang kosong
		// proses tambah data mahasiswa
	if($nip!="") {
		if($id_jab == 0) {
		$q_tambah=mysqli_query($connect,"INSERT INTO kepanitiaan VALUES(NULL,'$nip','$nama_kep','$tunjangan_kep')");
			
		// proses ubah data mahasiswa
			if ($q_tambah) {
				echo "<script>alert('Data Berhasil di Tambahkan');window.location ='media.php?id=cal'</script>";
				} 
		} 

		else {
			$q_edit=mysqli_query($connect,"UPDATE kepanitiaan SET 
			nip = '$nip', nama_kep = '$nama_kep', tunjangan_kep = '$tunjangan_kep' WHERE id= '$id_jab'");
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