<?php
 session_start();
 $sesi_username			= isset($_SESSION['username']) ? $_SESSION['username'] : NULL;
if ($sesi_username != NULL || !empty($sesi_username) ||$_SESSION['leveluser']=='1'  ) 

{

include "../config/koneksi.php";

$id_jab = $_POST['id'];


$data = mysqli_fetch_array(mysqli_query($connect,"SELECT * FROM kepanitiaan WHERE id=".$id_jab));


if($id_jab> 0) { 
	$id = $data['id'];
	$nama = $data['nama'];
	$nip = $data['nip'];
	$nama_kep = $data['nama_kep'];
	$tunjangan_kep = $data['tunjangan_kep'];

} else  {
	$id ="";
	$nama ="";
	$id_jab ="";
	$nip ="";
	$nama_kep ="";
	$tunjangan_kep ="";
}

?>
					
<form class="form-horizontal" id="form-jab">

	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="id">ID</label>
		<div class="col-sm-9">
			<input type="text"  disabled="disabled" id="id_jab" class="input-medium" name="id" value="<?php echo $id ?>">
		</div>
	</div>
	
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="n_jab">NIP</label>
		<div class="col-sm-9">
			<input type="text" id="n_jab" class="input-medium" name="nip" value="<?php echo $nip ?>">
		</div>
	</div>
	
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="n_jab">Nama Kepanitiaan</label>
		<div class="col-sm-9">
		<select name="nama_kep" value="">
			<option value="">-- Pilih Kepanitiaan --</option>
				<?php
				$q = mysqli_query($connect,"select distinct nama_kep from data_kepanitiaan order by no_sk"); 

				while ($a = mysqli_fetch_array($q)){
					if ($a[0] ==$nama_kep) {
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
		<label class="col-sm-3 control-label no-padding-right" for="gapok">Tunjangan Kepanitiaan</label>
		<div class="col-sm-9">
			<input type="text" id="gapok" class="input-medium" name="tunjangan_kep" value="<?php echo $tunjangan_kep ?>">
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