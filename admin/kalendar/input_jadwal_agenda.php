<?php 
	include "../config/koneksi.php";
	$mode_form	= isset($_GET['modd']) ? $_GET['modd'] : "";
	$idk	= isset($_GET['idk']) ? $_GET['idk'] : NULL;

	$jadwal_agenda = $_POST['jadwal_agenda'];
			$subjek_agenda = $_POST['subjek_agenda'];
			$detail_agenda = $_POST['detail_agenda'];

	if ($mode_form == "edit") {	

		$sql_1 = mysqli_query($connect,"UPDATE t_kalendar_agenda SET tgl_acara = '$jadwal_agenda', subjek='$subjek_agenda', keterangan='$detail_agenda' WHERE id=$idk ");

		if($sql_1){
			echo "<script>alert('Agenda Berhasil di Perbaharui');window.location ='media.php?id=cal'</script>";
		}

	}
	else if ($mode_form == "add"){	  #Mengubah format date menjadi varchar untuk tanggal kalendar agenda
			  $pecah = explode("-", $jadwal_agenda);
              $date  = $pecah[2];
              $month = $pecah[1];
              $year  = $pecah[0];
			
              #Menghilangkan angka nol di depan tanggal dan bulan 			
		      $tgl   = ltrim($date,'0');
			  $bln   = ltrim($month,'0');
				 
		      $jadwal_kalendar = "$tgl-$bln-$year";
				 
			  include "../config/koneksi.php";
				 
			  mysqli_query($connect,"INSERT INTO t_kalendar_agenda
											      VALUES('','$jadwal_agenda',
													     '$jadwal_kalendar',
														 '$subjek_agenda',
													     '$detail_agenda')");
				 	
	
		echo "<script>alert('Agenda Berhasil di Tambahkan');window.location ='media.php?id=cal'</script>";
	}
		       
?>