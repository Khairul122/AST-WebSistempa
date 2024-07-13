<?php
$id_golongan	= isset($_GET['id_golongan']) ? $_GET['id_golongan'] : NULL;
$mod 		= isset($_GET['mod']) ? $_GET['mod'] : NULL;	

		if ($mod == "del") {
			$q_delete_golongan = mysqli_query($connect,"DELETE FROM data_golongan WHERE id_golongan = '$id_golongan'");
			if ($q_delete_golongan) {
				echo "<div class='alert alert-block alert-success'><button type='button' class='close' data-dismiss='alert'><i class=''></i></button><strong><i class='ace-icon fa fa-check'></i> BERHASIL</strong> Data golongan Berhasil di hapus<br/></div>";
			} else {
				echo "<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert'><i class='icon-remove'></i></button><strong><i class='ace-icon fa fa-times'></i> MAAF! </strong>" .mysqli_error()."<br/></div>";
			}
		}
		
		// ================ DATA FORM ( POST ) =====================//
		$display 		= "style='display: none'"; 	//default = formnya dihidden
		$tb_act 		= isset($_POST['tb_act']) ? $_POST['tb_act'] : NULL;				//ambil variabel POST value Tombol FOrm
		$p_id_golongan   	= isset($_POST['id_golongan']) ? $_POST['id_golongan'] : NULL;			//ambil variabel POST id_golongan
		$p_golongan 	= isset($_POST['golongan']) ? $_POST['golongan'] : NULL;		//ambil variabel POST golongan
		$p_kelas_jabatan 	= isset($_POST['kelas_jabatan']) ? $_POST['kelas_jabatan'] : NULL;
		$p_masa_kerja 	= isset($_POST['masa_kerja']) ? $_POST['masa_kerja'] : NULL;
		$p_tunjangan_dosen 	= isset($_POST['tunjangan_dosen']) ? $_POST['tunjangan_dosen'] : NULL;
		
		if ($tb_act == "Tambah") {
			$display = "style='display: none'";
			$q_tambah_golongan	= mysqli_query($connect,"INSERT INTO data_golongan VALUES ('$p_id_golongan', '$p_golongan', '$p_kelas_jabatan', '$p_masa_kerja', '$p_tunjangan_dosen')");
			if ($q_tambah_golongan) {
				echo "<div class='alert alert-block alert-success'><button type='button' class='close' data-dismiss='alert'><i class=''></i></button><strong><i class='ace-icon fa fa-check'></i> BERHASIL</strong> Data Golongan Berhasil di simpan<br/></div>";
			} else {
				echo "<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert'><i class='icon-remove'></i></button><strong><i class='ace-icon fa fa-times'></i> MAAF! </strong>" .mysqli_error()."<br/></div>";
			}
		} else if ($tb_act == "Edit") {
			$display = "style='display: none'";
			$q_edit_golongan	= mysqli_query($connect,"UPDATE data_golongan SET golongan = '$p_golongan', kelas_jabatan = '$p_kelas_jabatan', masa_kerja = '$p_masa_kerja', tunjangan_dosen = '$p_tunjangan_dosen' WHERE id_golongan = '$p_id_golongan'");
			if ($q_edit_golongan) {
				echo "<div class='alert alert-block alert-success'><button type='button' class='close' data-dismiss='alert'><i class='icon-remove'></i></button><strong><i class='ace-icon fa fa-check'></i> BERHASIL</strong> Data Golongan Berhasil di update<br/></div>";
			} else {
				echo "<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert'><i class='icon-remove'></i></button><strong><i class='ace-icon fa fa-times'></i> MAAF! </strong>" .mysqli_error()."<br/></div>";
			}
		} else {	
			$display = "style='display: none'";
		}
?>

		<h3 class="header smaller lighter blue">Referensi Golongan</h3>
		<div class="module_content">
		<h5><a href="?id=agama&mod=add" class="btn btn-primary" >Tambah Data</a></h5>
	
		
			
		<?php		
		// ================ TAMPILKAN DATANYA =====================//
		echo "<table id='sample-table-2' class='table table-striped table-bordered table-hover'>
				<tr>
				<th width='5%'>No</th>
				<th width='20%'>Golongan</th>
				<th width='20%'>Kelas Jabatan</th>
				<th width='20%'>Masa Kerja</th>
				<th width='20%'>Tunjangan Dosen</th>
				<th width='10%'>Aksi</th>
				</tr>";
		$q_golongan 	= mysqli_query($connect,"SELECT * FROM data_golongan ORDER BY id_golongan ASC") or die (mysqli_error());
		$j_data 	= mysqli_num_rows($q_golongan);

		if ($j_data == 0) {
			echo "<tr><td id='tengah' colspan='3'>-- Tidak Ada Data --</td></tr>";
		} else {
			$no = 1;
			while ($a_agama = mysqli_fetch_array($q_golongan)) {
				echo "<tr>
				<td id='tengah'>$no</td>
				<td>$a_agama[1]</td>
				<td>$a_agama[2]</td>
				<td>$a_agama[3]</td>
				<td>$a_agama[4]</td>
				<td id='tengah'>
					<a href='?id=agama&mod=edit&id_golongan=$a_agama[0]' >
					<span class='blue'><i class='ace-icon fa fa-pencil-square-o bigger-120'></i></span></a> |
					
					<a href='?id=agama&mod=del&id_golongan=$a_agama[0]' onclick=\'return konfirmasi('Menghapus data $a_agama[1]')\'><span class='red'><i class='ace-icon fa fa-trash-o bigger-120'></i></span></a>
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
			$q_edit_agm	= mysqli_query($connect,"SELECT * FROM data_golongan WHERE id_golongan = '$id_golongan'");
			$a_edit_agm	= mysqli_fetch_array($q_edit_agm);
			
			$golongan = $a_edit_agm[1];
			$kelas_jabatan = $a_edit_agm[2];
			$masa_kerja = $a_edit_agm[3];
			$tunjangan_dosen = $a_edit_agm[4];
			$view = "Edit";
			
		} else if ($mod == "add") {
			$display = "";
			$id_golongan = "";
			$golongan = "";
			$kelas_jabatan = "";
			$masa_kerja = "";
			$tunjangan_dosen = "";
			$view = "Tambah";
		} else {
			$display = "style='display: none'";
		}

		$idmax=mysqli_fetch_array(mysqli_query($connect,"SELECT max(id_golongan) FROM data_golongan"));
		$nomor_gol=$idmax[0];

		?>

<div class="module width_full" <?php echo $display;?>>
	<header><h3 class="header smaller lighter blue"><?php echo $view;?> Data Golongan</h3></header>
		<div class="module_content">
		<form action="?id=agama" method="post" id="ft_agama">
		<table class="tbl_form">
		<tr>
			<td width="20%">ID Golongan</td>
			<td>
		<!-- <div class="col-sm-9"> -->
			<input type="text" name="idakhir" class="input-medium" id="nipakhir" readonly="" id="form-input-readonly" data-rel="tooltip" title="ID TERAKHIR" value="<?php echo $nomor_gol;?>" />
			<input type="text" name="id_golongan" id="id_golongan" class="input-medium" title="ID BARU" placeholder="ID Golongan" value="<?php echo $id_golongan;?>"/>
		<!-- </div> -->
			</td>
		</tr>

		<tr>
			<td width="20%">Golongan</td>
			<td>
				<select name="golongan" value="">
					<option>-- Pilih Golongan --</option>
						<?php
						$q = mysqli_query($connect,"select distinct golongan from data_golongan order by golongan"); 

						while ($a = mysqli_fetch_array($q)){
							if ($a[0] ==$golongan) {
								echo "<option value='$a[0]' selected>$a[0]</option>";
							} else {
								echo "<option value='$a[0]'>$a[0]</option>";
							}
						}
						?>
				</select>
			</td>
			
			<tr>
				<td>Kelas Jabatan</td> 
				<td><input type="text" size="30" name="kelas_jabatan" value="<?php echo $kelas_jabatan; ?>"></td>
			</tr>
			<tr>
				<td>Masa Kerja</td> 
				<td><input type="text" size="30" name="masa_kerja" value="<?php echo $masa_kerja; ?>"></td>
			</tr>
			<tr>
				<td>Tunjangan Dosen</td> 
				<td><input type="text" size="30" name="tunjangan_dosen" value="<?php echo $tunjangan_dosen; ?>"></td>
			</tr>

			<tr><td></td><td><input type="submit" class="btn btn-primary" name="tb_act" value="<?php echo $view; ?>"></td></tr>
			
		</table>
		</div>
</div>
