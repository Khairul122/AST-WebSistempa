<?php
 session_start();
 $sesi_golongan_			= isset($_SESSION['golongan_']) ? $_SESSION['golongan_'] : NULL;
if ($sesi_golongan_ != NULL || !empty($sesi_golongan_) ||$_SESSION['leveluser']=='1'  ) 

{

include "../config/koneksi.php";

$id_jab = $_POST['id'];


$data = mysqli_fetch_array(mysqli_query($connect,"SELECT * FROM data_gaji_golongan WHERE id_golongan_=".$id_jab));


if($id_jab> 0) { 
	$id_golongan_ = $data['id_golongan_'];
	$golongan_= $data['golongan_'];
	$masa_kerja_ = $data['masa_kerja_'];
	$gaji_pokok_ = $data['gaji_pokok_'];

} else  {
	$id_golongan_ ="";
	$id_jab ="";
	$golongan_ ="";
	$masa_kerja_ ="";
	$gaji_pokok_ ="";
}

?>
					
<form class="form-horizontal" id="form-jab">

	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="id">ID</label>
		<div class="col-sm-9">
			<input type="text"  disabled="disabled" id="id_jab" class="input-medium" name="id_golongan_" value="<?php echo $id_golongan_ ?>">
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="n_jab">Golongan</label>
		<div class="col-sm-9">
		<select name="golongan_" value="">
			<option value="">-- Pilih Golongan --</option>
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
	</div>
	

	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="n_jab">Masa Kerja</label>
		<div class="col-sm-9">
		<select name="masa_kerja_" value="">
			<option value="">-- Pilih Masa Kerja --</option>
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
	</div>
	
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="gapok">Gaji Pokok</label>
		<div class="col-sm-9">
			<input type="text" id="gapok" class="input-medium" name="gaji_pokok_" value="<?php echo $gaji_pokok_ ?>">
		</div>
	</div>
	
</form>

<?php

?>
<?php
}else{
	session_destroy();
	header('Location:../index.php?status=Silahkan Login');
}
?>