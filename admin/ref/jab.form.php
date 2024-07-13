<?php
 session_start();
 $sesi_username			= isset($_SESSION['username']) ? $_SESSION['username'] : NULL;
if ($sesi_username != NULL || !empty($sesi_username) ||$_SESSION['leveluser']=='1'  ) 

{

include "../config/koneksi.php";

$idg = $_POST['id'];

$data = mysqli_fetch_array(mysqli_query($connect,"SELECT * FROM data_golongan WHERE id=".$idg));

$idmax=mysqli_fetch_array(mysqli_query($connect,"SELECT max(id_golongan) FROM data_golongan"));
$nomor_gol=$idmax[0];


if($idg> 0) { 
	$p_id = $data['id'];
	$p_id_golongan = $data['id_golongan'];
	$p_golongan= $data['golongan'];
	$p_kelas_jabatan = $data['kelas_jabatan'];
	$p_masa_kerja = $data['masa_kerja'];
	$p_tunjangan_dosen = $data['tunjangan_dosen'];

} 
else  {
	$p_id = "";
	$p_id_golongan ="";
	$p_golongan ="";
	$p_kelas_jabatan ="";
	$p_tunjangan_dosen ="";
	$p_masa_kerja ="";
}

?>
					
<form class="form-horizontal" id="form-jab">

	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="id">ID</label>
		<div class="col-sm-9">
			<input type="text"  disabled="disabled" id="id_jab" class="input-medium" name="id" value="<?php echo $p_id ?>">
		</div>
	</div>

<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="id">ID Golongan</label>
		<div class="col-sm-9">
			<input type="text" name="idakhir" class="input-medium" id="nipakhir" readonly="" id="form-input-readonly" data-rel="tooltip" title="ID TERAKHIR" value="<?php echo $nomor_gol;?>" />
			<input type="text" name="id_golongan" id="id_golongan" class="input-medium" title="ID BARU" placeholder="ID Golongan" value="<?php echo $p_id_golongan;?>"/>
		</div>
</div>
	
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="n_jab">Golongan</label>
		<div class="col-sm-9">
		<select name="golongan" value="">
			<option>-- Pilih Golongan --</option>
				<?php
				$q = mysqli_query($connect,"select distinct golongan from data_golongan order by golongan"); 

				while ($a = mysqli_fetch_array($q)){
					if ($a[0] ==$p_golongan) {
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
		<label class="col-sm-3 control-label no-padding-right" for="golongan">Kelas Jabatan</label>
		<div class="col-sm-9">
			<input type="text" id="golongan" class="input-medium" name="kelas_jabatan" required="" value="<?php echo $p_kelas_jabatan ?>">
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="m_kerja">Masa Kerja</label>
		<div class="col-sm-9">
			<input type="text" id="m_kerja" class="input-medium" name="masa_kerja" required="" value="<?php echo $p_masa_kerja ?>">
		</div>
	</div>
	
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="tunjangan_dosen">Tunjangan Dosen</label>
		<div class="col-sm-9">
			<input type="text" id="tunjangan_dosen" class="input-medium" name="tunjangan_dosen" required="" value="<?php echo $p_tunjangan_dosen ?>">
		</div>
	</div>
</form>

<?php
}else{
	session_destroy();
	header('Location:../index.php?status=Silahkan Login');
}
?>
