<?php 
	include "config/koneksi.php";
	$email 			= isset($_GET['email']) ? $_GET['email'] : NULL;
	$q_del = mysqli_query($connect,"DELETE FROM tabel_pesan WHERE email = '$email'");
	if($q_del){
				echo "<script>alert('Pesan Berhasil di Hapus');window.location ='?id=msg'</script>";
			}
			else
			{
				echo "<script>alert('Pesan Gagal di Hapus');window.location ='?id=msg'</script>";	
			}
?>