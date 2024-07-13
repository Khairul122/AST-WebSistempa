<?php
$id_k		= isset($_GET['id_k']) ? $_GET['id_k'] : NULL;
$mod 		= isset($_GET['mod']) ? $_GET['mod'] : NULL;	


		function rupiah($nilai, $pecahan = 0) {
    	return number_format($nilai, $pecahan, ',', '.');
		}
		
		if ($mod == "del") {
			$q_delete_agama = mysqli_query($connect,"DELETE FROM data_kepanitiaan WHERE id_k = '$id_k'");
			if ($q_delete_agama) {
				echo "<div class='alert alert-block alert-success'><button type='button' class='close' data-dismiss='alert'><i class=''></i></button><strong><i class='ace-icon fa fa-check'></i> BERHASIL</strong> Data Kepanitiaan Berhasil di hapus<br/></div>";
			} else {
				echo "<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert'><i class='icon-remove'></i></button><strong><i class='ace-icon fa fa-times'></i> MAAF! </strong>" .mysqli_error()."<br/></div>";
			}
		}
		
	
		$display 		= "style='display: none'"; 	
		$tb_act 		= isset($_POST['tb_act']) ? $_POST['tb_act'] : NULL;				
		$p_id_k  	= isset($_POST['id_k']) ? $_POST['id_k'] : NULL;			
		$p_tgl_sk	= isset($_POST['tgl_sk']) ? $_POST['tgl_sk'] : NULL;	
		$p_no_sk 	= isset($_POST['no_sk']) ? $_POST['no_sk'] : NULL;
		$p_nama_kep 	= isset($_POST['nama_kep']) ? $_POST['nama_kep'] : NULL;		
		$p_tunjangan_kep 	= isset($_POST['tunjangan_kep']) ? $_POST['tunjangan_kep'] : NULL;
		
		
		if ($tb_act == "Tambah") {
			$display = "style='display: none'";
			$q_tambah_gaji	= mysqli_query($connect,"INSERT INTO data_kepanitiaan VALUES ('','$p_tgl_sk','$p_no_sk','$p_nama_kep','$p_tunjangan_kep ')");
			if ($q_tambah_gaji) {
			
				echo "<div class='alert alert-block alert-success'><button type='button' class='close' data-dismiss='alert'><i class=''></i></button><strong><i class='ace-icon fa fa-check'></i> BERHASIL</strong> Data Kepanitiaan Berhasil di simpan<br/></div>";
			} else {
				echo "<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert'><i class='icon-remove'></i></button><strong><i class='ace-icon fa fa-times'></i> MAAF! </strong>" .mysqli_error()."<br/></div>";
			}
		} else if ($tb_act == "Edit") {
			$display = "style='display: none'";
			$q_edit_gaji	= mysqli_query($connect,"UPDATE data_kepanitiaan SET tgl_sk = '$p_tgl_sk', no_sk='$p_no_sk', nama_kep='$p_nama_kep', tunjangan_kep='$p_tunjangan_kep' WHERE id_k = '$p_id_k'");
			if ($q_edit_gaji) {
				echo "<div class='alert alert-block alert-success'><button type='button' class='close' data-dismiss='alert'><i class='icon-remove'></i></button><strong><i class='ace-icon fa fa-check'></i> BERHASIL</strong> Data Kepanitiaan Berhasil di update<br/></div>";
			} else {
				echo "<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert'><i class='icon-remove'></i></button><strong><i class='ace-icon fa fa-times'></i> MAAF! </strong>" .mysqli_error()."<br/></div>";
			}
		} else {	
			$display = "style='display: none'";
		}
?>

		<h3 class="header smaller lighter blue">Referensi Data Kepanitiaan</h3>
		<div class="module_content">
		<h5><a href="?id=panitia&mod=add" class="btn btn-primary" >Tambah Data</a></h5>
	
		
			
		<?php		
		// ================ TAMPILKAN DATANYA =====================//
		echo "<table id='sample-table-2' class='table table-striped table-bordered table-hover'><tr>
		<th width='5%'>No</th>
		<th width='20%'>No SK</th>
		<th width='20%'>Tanggal SK</th>
		<th width='20%'>Nama Kepanitiaan</th>
		<th width='20%'>Tunjangan Kepanitiaan</th>
		<th width='20%'>Control</th></tr>";

		$q_gaji 	= mysqli_query($connect,"SELECT * FROM data_kepanitiaan ORDER BY id_k ASC") or die (mysqli_error());
		$j_data 	= mysqli_num_rows($q_gaji);	

		if ($j_data == 0) {
			echo "<tr><td id='tengah' colspan='3'>-- Tidak Ada Data --</td></tr>";
		} else {
			$no = 1;
			while ($a_bag = mysqli_fetch_array($q_gaji)) {
				echo "<tr>
				<td id='tengah'>$no</td>
				<td>$a_bag[2]</td>
				<td>$a_bag[1]</td>
				<td>$a_bag[3]</td>
				<td>$a_bag[4]</td>
				<td id='tengah'>
				<a href='?id=panitia&mod=edit&id_k=$a_bag[0]' >
					<span class='blue'>
					<i class='ace-icon fa fa-pencil-square-o bigger-120'></i>
					</span
				></a> |
					<a href='?id=panitia&mod=del&id_k=$a_bag[0]' onclick=\'return konfirmasi('Menghapus data $a_bag[2]')\'><span class='red'><i class='ace-icon fa fa-trash-o bigger-120'></i></span></a>
				</tr>";
				$no++;
			}
		}
		echo "</table>";
		?>

		</div>


		<?php
		// ================ DATA URL "mod" ( GET ) =====================//

		if ($mod == "edit") {
			$display = "";
			$q_edit_bag	= mysqli_query($connect,"SELECT * FROM data_kepanitiaan WHERE id_k = '$id_k'");
			$a_edit_bag	= mysqli_fetch_array($q_edit_bag);
			
			$tgl_sk = $a_edit_bag[1];
			$no_sk = $a_edit_bag[2];
			$nama_kep = $a_edit_bag[3];
			$tunjangan_kep = $a_edit_bag[4];
			$view = "Edit";
			
		} else if ($mod == "add") {
			$display = "";
			$id_k = "";
			$tgl_sk = "";
			$no_sk = "";
			$nama_kep = "";
			$tunjangan_kep = "";
			$view = "Tambah";
		} else {
			$display = "style='display: none'";
		}

		?>

<script type="text/javascript">
	function validasi(form){
	if (form.tgl_sk.value ==""){
	alert("Anda Belum Mengisikan Tanggal SK");
	form.tgl_sk.focus();
	return (false);
	}

	if (form.no_sk.value ==""){
	alert("Anda Belum Mengisikan No SK");
	form.no_sk.focus();
	return (false);
	}

	if (form.nama_kep.value ==""){
	alert("Anda Belum Mengisikan Nama Kepanitiaan");
	form.tunjangan_jabatan.focus();
	return (false);
	}

	if (form.tunjangan_kep.value ==""){
	alert("Anda Belum Mengisikan Tunjangan Kepanitiaan");
	form.tunjangan_dosen.focus();
	return (false);
	}
	
	return (true);
	}
</script>

<div class="module width_full" <?php echo $display;?>>
	<header><h3 class="header smaller lighter blue"><?php echo $view;?> Data Kepanitiaan</h3></header>
		<div class="form-group">
		<form name="form" action="?id=panitia" method="post" id="ft_bag" onSubmit="return validasi(this)">
		<table class="tbl_form">
			<tr><td>NO SK</td> <td><input type="text" size="30" name="no_sk" value="<?php echo $no_sk; ?>"></td></tr>

			<tr><td>Tanggal Keluar SK</td> <td><input class="form-control date-picker " type="date" size="30" data-date-format="yyyy-mm-dd" name="tgl_sk" value="<?php echo $tgl_sk; ?>"></td></tr>

			<tr><td>Nama Kepanitiaan</td> <td><input type="text" size="30" name="nama_kep" value="<?php echo $nama_kep; ?>"></td></tr>

			<tr><td>Tunjangan Kepanitiaan</td> <td><input type="text" size="30" name="tunjangan_kep" value="<?php echo $tunjangan_kep; ?>"></td></tr>

			<tr><td></td><td><input type="submit" class="btn btn-primary" name="tb_act" value="<?php echo $view; ?>"></td></tr>
			
		</table>
		</div>
</div>
