<?php
$id_golongan_		= isset($_GET['id_golongan_']) ? $_GET['id_golongan_'] : NULL;
$mod 		= isset($_GET['mod']) ? $_GET['mod'] : NULL;	


		function rupiah($nilai, $pecahan = 0) {
    	return number_format($nilai, $pecahan, ',', '.');
		}
		
		if ($mod == "del") {
			$q_delete_agama = mysqli_query($connect,"DELETE FROM data_gaji_golongan WHERE id_golongan_ = '$id_golongan_'");
			if ($q_delete_agama) {
				echo "<div class='alert alert-block alert-success'><button type='button' class='close' data-dismiss='alert'><i class=''></i></button><strong><i class='ace-icon fa fa-check'></i> BERHASIL</strong> Data Gaji Golongan Berhasil di hapus<br/></div>";
			} else {
				echo "<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert'><i class='icon-remove'></i></button><strong><i class='ace-icon fa fa-times'></i> MAAF! </strong>" .mysqli_error()."<br/></div>";
			}
		}
		
	
		$display 		= "style='display: none'"; 	
		$tb_act 		= isset($_POST['tb_act']) ? $_POST['tb_act'] : NULL;				
		$p_id_golongan_  	= isset($_POST['id_golongan_']) ? $_POST['id_golongan_'] : NULL;			
		$p_golongan_	= isset($_POST['golongan_']) ? $_POST['golongan_'] : NULL;	
		$p_masa_kerja_ 	= isset($_POST['masa_kerja_']) ? $_POST['masa_kerja_'] : NULL;		
		$p_gaji_pokok_ 	= isset($_POST['gaji_pokok_']) ? $_POST['gaji_pokok_'] : NULL;
		
		
		if ($tb_act == "Tambah") {
			$display = "style='display: none'";
			$q_tambah_gaji	= mysqli_query($connect,"INSERT INTO data_gaji_golongan VALUES ('','$p_golongan_','$p_masa_kerja_','$p_gaji_pokok_')");
			if ($q_tambah_gaji) {
			
				echo "<div class='alert alert-block alert-success'><button type='button' class='close' data-dismiss='alert'><i class=''></i></button><strong><i class='ace-icon fa fa-check'></i> BERHASIL</strong> Data Golongan Gaji Berhasil di simpan<br/></div>";
			} else {
				echo "<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert'><i class='icon-remove'></i></button><strong><i class='ace-icon fa fa-times'></i> MAAF! </strong>" .mysqli_error()."<br/></div>";
			}
		} else if ($tb_act == "Edit") {
			$display = "style='display: none'";
			$q_edit_gaji	= mysqli_query($connect,"UPDATE data_gaji_golongan SET golongan_ = '$p_golongan_', masa_kerja_='$p_masa_kerja_', gaji_pokok_='$p_gaji_pokok_' WHERE id_golongan_ = '$p_id_golongan_'");
			if ($q_edit_gaji) {
				echo "<div class='alert alert-block alert-success'><button type='button' class='close' data-dismiss='alert'><i class='icon-remove'></i></button><strong><i class='ace-icon fa fa-check'></i> BERHASIL</strong> Data Gaji Berhasil di update<br/></div>";
			} else {
				echo "<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert'><i class='icon-remove'></i></button><strong><i class='ace-icon fa fa-times'></i> MAAF! </strong>" .mysqli_error()."<br/></div>";
			}
		} else {	
			$display = "style='display: none'";
		}
?>

		<h3 class="header smaller lighter blue">Referensi Gaji Golongan</h3>
		<div class="module_content">
		<h5><a href="?id=gaji_golongan&mod=add" class="btn btn-primary" >Tambah Data</a></h5>
	
		
			
		<?php		
		// ================ TAMPILKAN DATANYA =====================//
		echo "<table id='sample-table-2' class='table table-striped table-bordered table-hover'><tr>
		<th width='5%'>No</th>
		<th width='20%'>Golongan</th>
		<th width='20%'>Masa Kerja</th>
		<th width='20%'>Gaji_pokok</th>
		<th width='20%'>Control</th></tr>";

        // query pada saat mode pencarian
            $query = mysqli_query($connect,"SELECT * FROM data_gaji_golongan ORDER BY id_golongan_ ASC ");
			$no = 1;
			while ($a_bag = mysqli_fetch_array($query)) {

				echo "<tr>
				<td id='tengah'>$no</td>
				<td>$a_bag[1]</td>
				<td>$a_bag[2]</td>
				<td>$a_bag[3]</td>
				<td id='tengah'>
				<a href='?id=gaji_golongan&mod=edit&id_golongan_=$a_bag[0]' >
					<span class='blue'>
					<i class='ace-icon fa fa-pencil-square-o bigger-120'></i>
					</span
				></a> |
					<a href='?id=gaji_golongan&mod=del&id_golongan_=$a_bag[0]' onclick=\'return konfirmasi('Menghapus data $a_bag[2]')\'><span class='red'><i class='ace-icon fa fa-trash-o bigger-120'></i></span></a>
				</tr>";
				$no++;
			}
		echo "</table>";
		?>
<!-- untuk menampilkan menu halaman -->


		<?php
		// ================ DATA URL "mod" ( GET ) =====================//

		if ($mod == "edit") {
			$display = "";
			$q_edit_bag	= mysqli_query($connect,"SELECT * FROM data_gaji_golongan WHERE id_golongan_ = '$id_golongan_'");
			$a_edit_bag	= mysqli_fetch_array($q_edit_bag);
			
			$golongan_ = $a_edit_bag[1];
			$masa_kerja_ = $a_edit_bag[2];
			$gaji_pokok_ = $a_edit_bag[3];
			$view = "Edit";
			
		} else if ($mod == "add") {
			$display = "";
			$id_golongan_ = "";
			$golongan_ = "";
			$masa_kerja_ = "";
			$gaji_pokok_ = "";
			$view = "Tambah";
		} else {
			$display = "style='display: none'";
		}

		?>

<div class="module width_full" <?php echo $display;?>>
	<header><h3 class="header smaller lighter blue"><?php echo $view;?> Data Gaji Golongan</h3></header>
		<div class="form-group">
		<form action="?id=gaji_golongan" method="post" id="ft_bag">
		<table class="tbl_form">
			<tr><td width="20%">ID</td>
			<td width="80%"><input type="text" size="3" name="id_golongan_" readonly value="<?php echo $id_golongan_; ?>"></td></tr>

				<tr><td><label style="margin-top: 13px;">Nama Golongan</label></td></tr>
				<td>
				<div style="left: 145px; top: -22px;" class="col-sm-9">
					<select name="golongan_" value="">
					<option>-- Pilih Golongan --</option>
					<?php
					$q = mysqli_query($connect,"select distinct golongan_ from data_gaji_golongan order by golongan_"); 

					while ($a = mysqli_fetch_array($q)){
					if ($a[0] ==$golongan_) {
						echo "<option value='$a[0]' selected>$a[0]</option>";
					} else {
						echo "<option value='$a[0]'>$a[0]</option>";
					}
					}
					?>
					</select>
				</div>
				</td>

			<tr><td><label>Masa Kerja</label></td></tr>
				<td>
				<div style="left: 145px; top: -26px;" class="col-sm-9">
					<select style="width: 132px;" name="masa_kerja_" value="">
					<option>-- Pilih Masa Kerja --</option>
					<?php
					$q = mysqli_query($connect,"select distinct masa_kerja_ from data_gaji_golongan order by masa_kerja_"); 

					while ($a = mysqli_fetch_array($q)){
					if ($a[0] ==$masa_kerja_) {
						echo "<option value='$a[0]' selected>$a[0]</option>";
					} else {
						echo "<option value='$a[0]'>$a[0]</option>";
					}
					}
					?>
					</select>
				</div>
				</td>

			<tr><td>Gaji Pokok</td> <td><input type="text" size="30" name="gaji_pokok_" value="<?php echo $gaji_pokok_; ?>"></td></tr>

			<tr><td></td><td><input type="submit" class="btn btn-primary" name="tb_act" value="<?php echo $view; ?>"></td></tr>
			
		</table>
		</div>
</div>
