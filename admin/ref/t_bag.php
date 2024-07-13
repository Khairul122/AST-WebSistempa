<?php
$id_gaji		= isset($_GET['id_gaji']) ? $_GET['id_gaji'] : NULL;
$mod 		= isset($_GET['mod']) ? $_GET['mod'] : NULL;	


		function rupiah($nilai, $pecahan = 0) {
    	return number_format($nilai, $pecahan, ',', '.');
		}
		
		if ($mod == "del") {
			$q_delete_agama = mysqli_query($connect,"DELETE FROM data_gaji WHERE id_gaji = '$id_gaji'");
			if ($q_delete_agama) {
				echo "<div class='alert alert-block alert-success'><button type='button' class='close' data-dismiss='alert'><i class=''></i></button><strong><i class='ace-icon fa fa-check'></i> BERHASIL</strong> Data gaji Berhasil di hapus<br/></div>";
			} else {
				echo "<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert'><i class='icon-remove'></i></button><strong><i class='ace-icon fa fa-times'></i> MAAF! </strong>" .mysqli_error()."<br/></div>";
			}
		}
		
	
		$display 		= "style='display: none'"; 	
		$tb_act 		= isset($_POST['tb_act']) ? $_POST['tb_act'] : NULL;				
		$p_id_gaji  	= isset($_POST['id_gaji']) ? $_POST['id_gaji'] : NULL;			
		$p_nama_jabatan	= isset($_POST['nama_jabatan']) ? $_POST['nama_jabatan'] : NULL;	
		$p_status_pegawai 	= isset($_POST['status_pegawai']) ? $_POST['status_pegawai'] : NULL;
		$p_masa_kerja 	= isset($_POST['masa_kerja']) ? $_POST['masa_kerja'] : NULL;		
		$p_gaji_pokok 	= isset($_POST['gaji_pokok']) ? $_POST['gaji_pokok'] : NULL;
		$p_tunjangan_jabatan 	= isset($_POST['tunjangan_jabatan']) ? $_POST['tunjangan_jabatan'] : NULL;
		$p_tunjangan_jabatan 	= isset($_POST['tunjangan_dosen']) ? $_POST['tunjangan_dosen'] : NULL;
		
		
		if ($tb_act == "Tambah") {
			$display = "style='display: none'";
			$q_tambah_gaji	= mysqli_query($connect,"INSERT INTO data_gaji VALUES ('','$p_nama_jabatan','$p_status_pegawai','$p_tunjangan_jabatan','$p_tunjangan_dosen ')");
			if ($q_tambah_gaji) {
			
				echo "<div class='alert alert-block alert-success'><button type='button' class='close' data-dismiss='alert'><i class=''></i></button><strong><i class='ace-icon fa fa-check'></i> BERHASIL</strong> Data GAJI Berhasil di simpan<br/></div>";
			} else {
				echo "<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert'><i class='icon-remove'></i></button><strong><i class='ace-icon fa fa-times'></i> MAAF! </strong>" .mysqli_error()."<br/></div>";
			}
		} else if ($tb_act == "Edit") {
			$display = "style='display: none'";
			$q_edit_gaji	= mysqli_query($connect,"UPDATE data_gaji SET nama_jabatan = '$p_nama_jabatan', status_pegawai='$p_status_pegawai', tunjangan_jabatan='$p_tunjangan_jabatan',tunjangan_dosen='$p_tunjangan_dosen' WHERE id_gaji = '$p_id_gaji'");
			if ($q_edit_gaji) {
				echo "<div class='alert alert-block alert-success'><button type='button' class='close' data-dismiss='alert'><i class='icon-remove'></i></button><strong><i class='ace-icon fa fa-check'></i> BERHASIL</strong> Data Gaji Berhasil di update<br/></div>";
			} else {
				echo "<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert'><i class='icon-remove'></i></button><strong><i class='ace-icon fa fa-times'></i> MAAF! </strong>" .mysqli_error()."<br/></div>";
			}
		} else {	
			$display = "style='display: none'";
		}
?>

		<h3 class="header smaller lighter blue">Referensi Data Tunjangan</h3>
		<div class="module_content">
		<h5><a href="?id=bagian&mod=add" class="btn btn-primary" >Tambah Data</a></h5>
	
		
			
		<?php		
		// ================ TAMPILKAN DATANYA =====================//
		echo "<table id='sample-table-2' class='table table-striped table-bordered table-hover'><tr>
		<th width='5%'>No</th>
		<th width='20%'>Jabatan</th>
		<th width='20%'>Status Pegawai</th>
		<th width='20%'>Tunjangan Jabatan</th>
		<th width='20%'>Tunjangan Dosen</th>
		<th width='20%'>Control</th></tr>";

		$q_gaji 	= mysqli_query($connect,"SELECT * FROM data_gaji ORDER BY id_gaji ASC") or die (mysqli_error());
		$j_data 	= mysqli_num_rows($q_gaji);	

		if ($j_data == 0) {
			echo "<tr><td id='tengah' colspan='3'>-- Tidak Ada Data --</td></tr>";
		} else {
			$no = 1;
			while ($a_bag = mysqli_fetch_array($q_gaji)) {
				echo "<tr>
				<td id='tengah'>$no</td>
				<td>$a_bag[1]</td>
				<td>$a_bag[2]</td>
				<td>$a_bag[3]</td>
				<td>$a_bag[4]</td>
				<td id='tengah'>
				<a href='?id=bagian&mod=edit&id_gaji=$a_bag[0]' >
					<span class='blue'>
					<i class='ace-icon fa fa-pencil-square-o bigger-120'></i>
					</span
				></a> |
					<a href='?id=bagian&mod=del&id_gaji=$a_bag[0]' onclick=\'return konfirmasi('Menghapus data $a_bag[2]')\'><span class='red'><i class='ace-icon fa fa-trash-o bigger-120'></i></span></a>
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
			$q_edit_bag	= mysqli_query($connect,"SELECT * FROM data_gaji WHERE id_gaji = '$id_gaji'");
			$a_edit_bag	= mysqli_fetch_array($q_edit_bag);
			
			$nama_jabatan = $a_edit_bag[1];
			$status_pegawai = $a_edit_bag[2];
			$tunjangan_jabatan = $a_edit_bag[3];
			$tunjangan_dosen = $a_edit_bag[4];
			$view = "Edit";
			
		} else if ($mod == "add") {
			$display = "";
			$id_gaji = "";
			$nama_jabatan = "";
			$status_pegawai = "";
			$tunjangan_jabatan = "";
			$tunjangan_dosen = "";
			$view = "Tambah";
		} else {
			$display = "style='display: none'";
		}

		?>

<script type="text/javascript">
	function validasi(form){
	if (form.nama_jabatan.value ==""){
	alert("Anda Belum Mengisikan Nama Jabatan");
	form.nama_jabatan.focus();
	return (false);
	}

	if (form.status_pegawai.value ==""){
	alert("Anda Belum Mengisikan Status Pegawai");
	form.status_pegawai.focus();
	return (false);
	}

	if (form.tunjangan_jabatan.value ==""){
	alert("Anda Belum Mengisikan Jumlah Tunjangan Jabatan");
	form.tunjangan_jabatan.focus();
	return (false);
	}

	if (form.tunjangan_dosen.value ==""){
	alert("Anda Belum Mengisikan Jumlah Tunjangan Dosen");
	form.tunjangan_dosen.focus();
	return (false);
	}
	
	return (true);
	}
</script>

<div class="module width_full" <?php echo $display;?>>
	<header><h3 class="header smaller lighter blue"><?php echo $view;?> Data Gaji</h3></header>
		<div class="form-group">
		<form name="form" action="?id=bagian" method="post" id="ft_bag" onSubmit="return validasi(this)">
		<table class="tbl_form">
			<tr><td width="20%">ID</td>
			<td width="80%"><input type="text" size="3" name="id_gaji" readonly value="<?php echo $id_gaji; ?>"></td></tr>

				<tr><td><label style="margin-top: 13px;">Nama Jabatan</label></td></tr>
				<td>
				<div style="left: 145px; top: -22px;" class="col-sm-9">
					<select name="nama_jabatan" value="">
					<option value="">-- Pilih Jabatan --</option>
					<?php
					$q = mysqli_query($connect,"select distinct nama_jabatan from data_gaji order by nama_jabatan"); 

					while ($a = mysqli_fetch_array($q)){
					if ($a[0] ==$nama_jabatan) {
						echo "<option value='$a[0]' selected>$a[0]</option>";
					} else {
						echo "<option value='$a[0]'>$a[0]</option>";
					}
					}
					?>
					</select>
				</div>
				</td>

			<tr><td><label>Status Pegawai</label></td></tr>
				<td>
				<div style="left: 145px; top: -26px;" class="col-sm-9">
					<select style="width: 132px;" name="status_pegawai" value="">
					<option value="">-- Pilih Status --</option>
					<?php
					$q = mysqli_query($connect,"select distinct status_pegawai from data_gaji order by status_pegawai"); 

					while ($a = mysqli_fetch_array($q)){
					if ($a[0] ==$status_pegawai) {
						echo "<option value='$a[0]' selected>$a[0]</option>";
					} else {
						echo "<option value='$a[0]'>$a[0]</option>";
					}
					}
					?>
					</select>
				</div>
				</td>

			
			<tr><td>Tunjangan Jabatan</td> <td><input type="text" size="30" name="tunjangan_jabatan" value="<?php echo $tunjangan_jabatan; ?>"></td></tr>

			<tr><td>Tunjangan Dosen</td> <td><input type="text" size="30" name="tunjangan_dosen" value="<?php echo $tunjangan_dosen; ?>"></td></tr>

			<tr><td></td><td><input type="submit" class="btn btn-primary" name="tb_act" value="<?php echo $view; ?>"></td></tr>
			
		</table>
		</div>
</div>
