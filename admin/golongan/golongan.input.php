<?php
 session_start();
 $sesi_golongan_			= isset($_SESSION['golongan_']) ? $_SESSION['golongan_'] : NULL;
if ($sesi_golongan_ != NULL || !empty($sesi_golongan_) ||$_SESSION['leveluser']=='1'  ) 

{
	include "../config/koneksi.php";
	// $id_jab = $_POST['id'];
	error_reporting(0);
// buat koneksi ke database mysqli


// proses menghapus data mahasiswa
  if(isset($_POST['hapus1'])) {
  mysqli_query($connect,"DELETE FROM data_gaji_golongan WHERE id_golongan_=".$_POST['hapus1']);
  } 
  else {
	// deklarasikan variabel
	$id_golongan_	= $_POST['id_golongan_'];
	$golongan_	= $_POST['golongan_'];
	$masa_kerja_	= $_POST['masa_kerja_'];
	$gaji_pokok_	= $_POST['gaji_pokok_'];$kd_approve	= $_POST['kd_approve'];
	
	// validasi agar tidak ada data yang kosong
		// proses tambah data mahasiswa
	if($golongan_!="" && $masa_kerja_!="" && $gaji_pokok_!="") {
		if($id_golongan_ == 0) {
		$q_tambah=mysqli_query($connect,"INSERT INTO data_gaji_golongan VALUES(NULL,'$golongan_','$masa_kerja_','$gaji_pokok_')");
			
		// proses ubah data mahasiswa
		} 

		else {
			$q_edit=mysqli_query($connect,"UPDATE data_gaji_golongan SET 
			golongan_ = '$golongan_', masa_kerja_ = '$masa_kerja_', gaji_pokok_ = '$gaji_pokok_' WHERE id_golongan_= $id_golongan_");
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