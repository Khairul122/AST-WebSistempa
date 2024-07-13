<?php
 session_start();
 $sesi_username			= isset($_SESSION['username']) ? $_SESSION['username'] : NULL;
if ($sesi_username != NULL || !empty($sesi_username) ||$_SESSION['leveluser']=='1'  ) 

{

include "../config/koneksi.php";

$id_jab = $_POST['id'];


$data = mysqli_fetch_array(mysqli_query($connect,"SELECT * FROM tbl_user WHERE id_user=".$id_jab));


if($id_jab> 0) { 
	$id_user = $data['id_user'];
	$username= $data['username'];
	$nip = $data['nip'];
	$email = $data['email'];
	$status_user = $data['status'];
	$kd_approve = $data['kd_approve'];

} else  {
	$id_user ="";
	$id_jab ="";
	$username ="";
	$nip ="";
	$email ="";
	$status_user ="";
	$kd_approve ="";
}

?>
					
<form class="form-horizontal" id="form-jab">

	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="id">ID</label>
		<div class="col-sm-9">
			<input type="text"  disabled="disabled" id="id_jab" class="input-medium" name="id_user" value="<?php echo $id_user ?>">
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="kode">Username</label>
		<div class="col-sm-9">
			<input type="text" id="kode" class="input-medium" name="username" required value="<?php echo $username ?>">
		</div>
	</div>
	
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="n_jab">NIP</label>
		<div class="col-sm-9">
			<input type="text" id="n_jab" class="input-medium" name="nip" value="<?php echo $nip ?>">
		</div>
	</div>
	
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="gapok">Email</label>
		<div class="col-sm-9">
			<input type="text" id="gapok" class="input-medium" name="email" value="<?php echo $email ?>">
		</div>
	</div>
	
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="tunj_jab">Status User</label>
		<div class="col-sm-9">
			<input type="text" id="tunj_jab" class="input-medium" name="status" value="<?php echo $status_user ?>">
		</div>
	</div>
	
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="m_kerja">Kode Approve</label>
		<div class="col-sm-9">
			<input type="text" id="m_kerja" class="input-medium" name="kd_approve" value="<?php echo $kd_approve ?>">
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