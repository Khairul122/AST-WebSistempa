<?php
 session_start();
 $sesi_username			= isset($_SESSION['username']) ? $_SESSION['username'] : NULL;
if ($sesi_username != NULL || !empty($sesi_username) ||$_SESSION['leveluser']=='1'  ) 

{
	include "../config/koneksi.php";
	error_reporting(0);
// buat koneksi ke database mysqli


// proses menghapus data mahasiswa
  if(isset($_POST['hapus1'])) {
  mysqli_query($connect,"DELETE FROM data_golongan WHERE id=".$_POST['hapus1']);
  } 
  else {
	// deklarasikan variabel
	$id	= $_POST['id'];
	$id_golongan	= $_POST['id_golongan'];
	$golongan	= $_POST['golongan'];
	$kelas_jabatan	= $_POST['kelas_jabatan'];
	$masa_kerja	= $_POST['masa_kerja'];
	$tunjangan_dosen	= $_POST['tunjangan_dosen'];
	
	// validasi agar tidak ada data yang kosong
	if($golongan!="") {
		// proses tambah data mahasiswa
		if($id == 0) {
			$q_tambah=mysqli_query($connect,"INSERT INTO data_golongan VALUES(NULL,'$id_golongan','$golongan','$kelas_jabatan','$masa_kerja','$tunjangan_dosen')");
		// proses ubah data mahasiswa
		} 

		else {
			$q_edit=mysqli_query($connect,"UPDATE data_golongan SET 
			golongan = '$golongan',
			kelas_jabatan = '$kelas_jabatan',
			masa_kerja = '$masa_kerja'
			tunjangan_dosen = '$tunjangan_dosen',
			WHERE id= $id");
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