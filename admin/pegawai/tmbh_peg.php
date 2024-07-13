
  <script type="text/javascript" src="assets/js/my.js"></script>


<a  href="?id=tambahpeg&mod=add" class="btn btn-app btn-purple btn-xs">
			<i class="ace-icon fa fa-pencil-square-o bigger-160"></i>
			Tambah
			<span class="badge badge-warning badge-right"></span>
			</a>
			
			<a href="?id=tambahpeg" class="btn btn-app btn-success btn-xs">
			<i class="ace-icon fa fa-refresh bigger-160"></i>
			Refresh
			</a>
			
			<a  href="?id=data_pegawai" class="btn btn-app btn-purple btn-xs">
			<i class="ace-icon fa fa-users bigger-160"></i>
			Pegawai
			<span class="badge badge-warning badge-right"></span>
			</a>



<?php
error_reporting(0); 		
$sesi_username			= isset($_SESSION['username']) ? $_SESSION['username'] : NULL;
if ($sesi_username != NULL || !empty($sesi_username) ||$_SESSION['leveluser']=='1'||$_SESSION['leveluser']=='2' ) 

{

$id_user=$_SESSION['kode'];	

$nipmax=mysqli_fetch_array(mysqli_query($connect,"SELECT nip FROM data_pegawai order by id_pegawai desc"));
$nomor_nip=$nipmax[0];




$mode_form	= isset($_GET['mod']) ? $_GET['mod'] : "";
$id_daftar	= isset($_GET['id_n']) ? $_GET['id_n'] : "";
$p_tombol	= isset($_POST['kirim_daftar']) ? $_POST['kirim_daftar'] : "";
$p_id_daftar = isset($_POST['id_daftar']) ? $_POST['id_daftar'] : "";

$p_nip			= isset($_POST['nip']) ? $_POST['nip'] : "";
$p_nama 		= isset($_POST['nama']) ? strtoupper($_POST['nama']) : "";
$p_gender	= isset($_POST['gender']) ? $_POST['gender'] : "";
$p_tmptlahir 	= isset($_POST['tmptlahir']) ? strtoupper($_POST['tmptlahir']) : "";
$p_tgl_lahir	= isset($_POST['tgl_lahir']) ? $_POST['tgl_lahir'] : "";	
$p_alamat	= isset($_POST['alamat']) ? $_POST['alamat'] : "";	
$p_hp	= isset($_POST['hp']) ? $_POST['hp'] : "";
$p_noktp	= isset($_POST['noktp']) ? $_POST['noktp'] : "";
$p_nonpwp	= isset($_POST['nonpwp']) ? $_POST['nonpwp'] : "";
$p_gol	= isset($_POST['gol']) ? $_POST['gol'] : "";
$p_masa_kerja	= isset($_POST['masa_kerja']) ? $_POST['masa_kerja'] : "";
$p_jab	= isset($_POST['jab']) ? $_POST['jab'] : "";	
$p_id_bank	= isset($_POST['id_bank']) ? $_POST['id_bank'] : "";  
$p_norek	= isset($_POST['norek']) ? $_POST['norek'] : "";
$p_id_agm	= isset($_POST['id_agm']) ? $_POST['id_agm'] : "";
$p_kdstatusk	= isset($_POST['kdstatusk']) ? $_POST['kdstatusk'] : "";
$p_jumlah_anak	= isset($_POST['id_anak']) ? $_POST['id_anak'] : "";
$p_kdstatusp	= isset($_POST['kdstatusp']) ? $_POST['kdstatusp'] : "";
$p_kdpndidik	= isset($_POST['kdpndidik']) ? $_POST['kdpndidik'] : "";
$p_datemasuk	= isset($_POST['datemasuk']) ? $_POST['datemasuk'] : "";




$p_submit		= "DAFTAR";

if ($mode_form == "add") {
} 

else if ($mode_form == "edit") {
$q_data_edit	= mysqli_query($connect,"SELECT * FROM data_pegawai WHERE id_pegawai= '$id_daftar'");
$a_data_edit	= mysqli_fetch_array($q_data_edit);
$id_daftar		= $a_data_edit[0];
$p_nip			= $a_data_edit[1];	
$p_nama			= $a_data_edit[2];
$p_gender 	= $a_data_edit[3];		
$p_hp	= $a_data_edit[4];	
$p_tmptlahir 	= $a_data_edit[5];
$p_tgl_lahir 	= $a_data_edit[6]; 		
$p_alamat 	= $a_data_edit[7];
$p_id_agm 		= $a_data_edit[8];	
$p_nonpwp 	= $a_data_edit[9];
$p_noktp 		= $a_data_edit[10];
$p_jab	= $a_data_edit[11];
$p_gol			= $a_data_edit[12];
$p_masa_kerja	= $a_data_edit[13];
$p_id_bank 	= $a_data_edit[14];
$p_norek 	= $a_data_edit[15];
$p_kdstatusk 	= $a_data_edit[16];	
$p_jumlah_anak 	= $a_data_edit[17];	
$p_kdstatusp 	= $a_data_edit[18];	
$p_kdpndidik 	= $a_data_edit[19];		
$p_datemasuk	= $a_data_edit[20];	

$p_submit	= "EDIT";	

}

if ($p_tombol == "DAFTAR") {
	if ($p_nama == "" ||$p_nip == ""||$p_tmptlahir == ""||$p_tgl_lahir == "" ||$p_alamat == ""|| $p_datemasuk == ""
	||$p_gol == ""|| $p_jab == ""|| $p_kdpndidik == ""|| $p_kdstatusk == ""|| $p_kdstatusp == ""
	
	) {
		
		echo "<div class='alert alert-danger'><button type='button'  data-dismiss='alert'><i class='icon-remove'></i></button><strong><i class='ace-icon fa fa-times'></i> MAAF! </strong> Form Isian Masih Belum lengkap mohon di lengkapi<br/></div>";
		
	} else {  
	
			$q_cek_ganda = mysqli_query($connect,"SELECT * FROM data_pegawai JOIN tbl_anak ON data_pegawai.id_anak = tbl_anak.id_anak JOIN data_gaji ON data_pegawai.nama_jabatan = data_gaji.nama_jabatan WHERE nip = '$p_nip'");

					// $a_anak = mysqli_query($connect,"SELECT * FROM tbl_anak WHERE id_anak=$p_jumlah_anak")
					// $a_anak2 = mysqli_query($connect,"SELECT * FROM data_gaji WHERE id_gaji=$p_jab")
					// $cek=$_POST['jumlah_anak'];
					// $cek2=$_POST['gaji_pokok']
					// if($cek='2')
					// {
					// 	$cek3=($cek2/10*100);
					// }
			$j_cek_ganda = mysqli_fetch_array($q_cek_ganda);

			if ($j_cek_ganda > 0) {
				echo "<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert'><i class='icon-remove'></i></button><strong><i class='ace-icon fa fa-times'></i> MAAF! </strong> NIP Pegawai Sudah Terdaftar<br/></div>";
			} 
			else {   
					$q_daftar	= mysqli_query($connect,"INSERT INTO data_pegawai VALUES ('','$p_nip','$p_nama','$p_gender','$p_hp','$p_tmptlahir','$p_tgl_lahir','$p_alamat','$p_id_agm','$p_nonpwp','$p_noktp','$p_jab','$p_gol','$p_masa_kerja','$p_id_bank','$p_norek','$p_kdstatusk','$p_jumlah_anak','$p_kdstatusp','$p_kdpndidik','$p_datemasuk',NOW())");	


					// $a_anak3 = mysqli_query($connect,"INSERT INTO data_anak VALUES ('$p_nip','$cek','$cek3')")
					
					if ($q_daftar) {
					echo "<div class='alert alert-block alert-success'><button type='button' class='close' data-dismiss='alert'><i class=''></i></button><strong><i class='ace-icon fa fa-check'></i> BERHASIL</strong> Data Pegawai Berhasil di simpan<br/></div>";
					header('location:media.php?id=data_pegawai');
					} 
					else {
						echo "<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert'><i class='icon-remove'></i></button><strong><i class='ace-icon fa fa-times'></i> MAAF! </strong>" .mysqli_error()."<br/></div>";
					}
			}
		}
			
} else if ($p_tombol == "EDIT") {
	if ($p_nama == "" ||$p_nip == ""||$p_tmptlahir == ""||$p_tgl_lahir == "" ||$p_alamat == ""|| $p_datemasuk == ""
		||$p_gol == ""|| $p_jab == ""|| $p_kdpndidik == ""|| $p_kdstatusk == ""|| $p_kdstatusp == ""
	) 
		{
		echo "<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert'><i class='icon-remove'></i></button><strong><i class='ace-icon fa fa-times'></i> MAAF! </strong> Form Isian Masih Belum lengkap mohon di lengkapi<br/></div>";
		// $p_tombol == "EDIT"
		} else {
		
		
		$q_edit	= mysqli_query($connect,"UPDATE data_pegawai SET nama='$p_nama',tempat_lahir='$p_tmptlahir',tgl_lahir='$p_tgl_lahir',
									jenis_kelamin='$p_gender',alamat='$p_alamat',tgl_masuk='$p_datemasuk',id_golongan='$p_gol', masa_kerja = '$p_masa_kerja',nama_jabatan='$p_jab',nohp='$p_hp',npwp='$p_nonpwp',Agama='$p_id_agm',kdpndidik='$p_kdpndidik',ktp='$p_noktp',norek=$p_norek,id_bank='$p_id_bank',kdstatusk='$p_kdstatusk',id_anak='$p_jumlah_anak',status_pegawai='$p_kdstatusp',time_update=NOW()
									where nip='$p_nip'");


				
									
		if ($q_edit) {
		echo "<div class='alert alert-block alert-success'><button type='button' class='close' data-dismiss='alert'><i class=''></i></button><strong><i class='ace-icon fa fa-check'></i> BERHASIL</strong> Data Pegawai Berhasil di Ubah<br/></div>";
			header('location:media.php?id=data_pegawai');
		} 

		else {
				
				echo "<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert'><i class='icon-remove'></i></button><strong><i class='ace-icon fa fa-times'></i> MAAF! </strong>" .mysqli_error()."<br/></div>";
				}
		}

}

	


?>




			
			
										

					<div class="widget-box">
<div class="widget-header widget-header-blue widget-header-flat">
	<h4 class="widget-title lighter">Data Pegawai</h4>
	<small>
	<i class="icon-double-angle-right"></i>
	<span class="label label-info arrowed-in-right arrowed">Mohon isi data dengan lengkap</span>
	</small>
	<div class="widget-toolbar">
		
	</div>
</div>
					
					<div class="widget-body">
					<div class="widget-main">
					<div class="row-fluid">

					<script type="text/javascript">
						function validasi(form){
						if (form.nip.value ==""){
						alert("Anda belum mengisikan Nama Bank Transfer");
						form.nip.focus();
						return (false);
						}
						
						return (true);
						}
					</script>
						
							<!--PAGE CONTENT BEGINS-->

						<form class="form-horizontal" action="?id=tambahpeg" method="post"  role="form">
						<input type="hidden" name="id_daftar" value="<?php echo $id_daftar; ?>">	
							
		
							<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="nip" >NIP :</label>

									<div class="col-sm-9">
										<input type="text" name="nipakhir" class="col-xs-10 col-sm-1" id="nipakhir" readonly="" id="form-input-readonly" data-rel="tooltip" title="NIP TERAKHIR" value="<?php echo $nomor_nip;?>" />
										<input type="number" name="nip" id="nip" class="col-xs-10 col-sm-1"" data-rel="tooltip" title="NIP BARU" placeholder="NIP" required value="<?php echo $p_nip;?>" >
									</div>
								
								</div>
							

							
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="nama">Nama Lengkap:</label> 

									<div class="col-sm-9">
										<input type="text" name="nama" id="nama" class="col-xs-10 col-sm-5" placeholder="Nama lengkap" required value="<?php echo $p_nama;?>"/>
									</div>
					
								</div>
								
								<div class="form-group">
										
											<label class="col-sm-3 control-label no-padding-right">Jenis Kelamin :</label>

											<div class="col-sm-9">
												
											<label class="blue">
											
											<input style="width: 20px;" name="gender" class="col-xs-10 col-sm-1"  id="gender" value="L" <?=$p_gender =='L' ? ' checked="checked"' : '';?> type="radio" />
											<span class="lbl"> Laki-Laki</span>
											</label>

											<label class="blue">
											<input  style="width: 20px;"  name="gender" class="col-xs-10 col-sm-1" id="gender" value="P" <?=$p_gender =='P' ? ' checked="checked"' : '';?> type="radio" />
											<span class="lbl"> Perempuan</span>
											</label>
											
											</div>		
								</div>

								
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="tmpt_lahir">Tempat Tgl Lahir:</label>

									<div class="col-xs-8 col-sm-5">
										
										<div class="input-group col-sm-5">
										<input type="text" id="id-date-picker-1" name="tmptlahir" value="<?php echo $p_tmptlahir;?>" required placeholder="Tempat Lahir" />
										<input class="form-control date-picker " type="text" name="tgl_lahir" id="tgl_lahir" required  value="<?php echo $p_tgl_lahir;?>" data-date-format="yyyy-mm-dd" />
											<span class="input-group-addon">
											<i class="fa fa-calendar bigger-110"></i>
											</span>
											</div>
										
										
									
									</div>
								
								</div>
								
								
					<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="alamat">Alamat:</label>
									<div class="col-xs-8 col-sm-9">
								
											<textarea style="width: 390px;" name="alamat" required placeholder="Mohon Isi Alamat dengan lengkap..."><?php echo $p_alamat;?></textarea>
										
									
					</div>
					</div>
				
				
				
				
				<div class="form-group">
				
				<label class="col-sm-3 control-label no-padding-right" for="form-field-mask-2">
				Hp
				<small class="text-warning"></small>
				</label>
				<div>
				<input style="left: 12px;" class="col-xs-10 col-sm-2" value="<?php echo $p_hp;?>" required type="number" name="hp" id="hp" minlength="12" placeholder="Isikan No Hp">	
				</div>
				</div>
					
				</div>
								
								<div class="form-group ">
									<label class="col-sm-3 control-label no-padding-right" for="noktp">KTP :</label> 

									<div class="col-sm-9">
										<input style="left: -6px;" type="number" name="noktp" id="noktp" class="col-xs-10 col-sm-4" placeholder="Nomor Induk Kepegawaian" minlength="15" required value="<?php echo $p_noktp;?>">
									</div>
					
								</div>				
								
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="nonpwp">NPWP:</label> 

									<div class="col-sm-9">
										<input style="left: -6px;" type="text" name="nonpwp" id="nonpwp" class="input-mask-npwp  col-xs-10 col-sm-4" placeholder="Nomor Pokok Wajib Pajak" required value="<?php echo $p_nonpwp;?>"/>
									</div>
					
								</div>	
								
						</div>
					
						

							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="n_jab">Golongan :</label>
								<div class="col-sm-9">
								<select name="gol" value="">
									<option>-- Pilih Golongan --</option>
										<?php
										$q = mysqli_query($connect,"select distinct golongan_ from data_gaji_golongan order by golongan_"); 

										while ($a = mysqli_fetch_array($q)){
											if ($a[0] ==$p_gol) {
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
								<select name="masa_kerja" value="">
									<option>-- Pilih Masa Kerja --</option>
										<?php
										$q = mysqli_query($connect,"select distinct masa_kerja_ from data_gaji_golongan order by masa_kerja_"); 

										while ($a = mysqli_fetch_array($q)){
											if ($a[0] ==$p_masa_kerja) {
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
									<label class="col-sm-3 control-label no-padding-right">Jabatan :</label>
											<div class="col-sm-7">
											
											<select name="jab" class="chosen-select" required value="">
												<option>-- Pilih Jabatan --</option>
													<?php
												$q = mysqli_query($connect,"select distinct nama_jabatan from data_gaji order by nama_jabatan"); 

													while ($a = mysqli_fetch_array($q)){
													if ($a[0] ==$p_jab) {
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
									<label class="col-sm-3 control-label no-padding-right">Bank Transfer :</label>
											<div class="col-sm-9">
											<span>
											<select name="id_bank" required value="">
												<option>-- Pilih Bank Transfer --</option>
													<?php
												$q = mysqli_query($connect,"select * from tbl_bank"); 

													while ($a = mysqli_fetch_array($q)){
													if ($a[0] ==$p_id_bank) {
														echo "<option value='$a[0]' selected>$a[1]</option>";
													} else {
													echo "<option value='$a[0]'>$a[1]</option>";
													}
														}
													?>
											</select>
											<input type="number" name="norek" minlength="15" required value="<?php echo $p_norek;?>" id="norek" placeholder="Nomer Rekening"  />
											</span>
											</div>		
							</div>

						
							<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right ">Agama :</label>
											<div class="col-sm-9">
											<select name="id_agm" value="" required id="id_agm">
												<option>-- Pilih Agama --</option>
													<?php
												$q = mysqli_query($connect,"select * from tbl_agama"); 

													while ($a = mysqli_fetch_array($q)){
													if ($a[1] ==$p_id_agm) {
														echo "<option value='$a[1]' selected>$a[1]</option>";
													} else {
													echo "<option value='$a[1]'>$a[1]</option>";
													}
														}
													?>
											</select>		
											</div>		
							</div>
								
							
								
								
								
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="platform">Status Kawin :</label>

										<div class="col-sm-9">
											
											<select name="kdstatusk"  value="" required id="kdstatusk">
												<option>-- Status Kawin--</option>
														<?php
												$q = mysqli_query($connect,"select * from tbl_statusk"); 

												while ($a = mysqli_fetch_array($q)){
													if ($a['0'] ==$p_kdstatusk) {
														echo "<option value='$a[0]' selected>$a[1]</option>";
													} 
													else {
													echo "<option value='$a[0]'>$a[1]</option>";
													}
													// $z=isset($_POST['kdstatusk']);
													$kdstatusk =$_POST['kdstatusk'];
												}
													?>
											</select>
										
										</div>
								</div>

								<div class="form-group ">
									<label class="col-sm-3 control-label no-padding-right" for="noktp">Jumlah Anak</label> 

									<div class="col-sm-9">
										<select name="id_anak"  value="" required id="kdstatusk">
												<option>-- Jumlah Anak --</option>
												<?php
												$q = mysqli_query($connect,"select * from tbl_anak"); 

												while ($a = mysqli_fetch_array($q)){
													if ($a['0'] ==$p_jumlah_anak) {
														echo "<option value='$a[0]' selected>$a[1]</option>";
													} 
													else {
													echo "<option value='$a[0]'>$a[1]</option>";
													}
													// $z=isset($_POST['kdstatusk']);
													// $kdstatusk =$_POST['kdstatusk'];
												}
													?>
											</select>
									</div>
					
								</div>

								

								
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="platform">Status Pegawai:</label>

										<div class="col-sm-9">
										
											<select name="kdstatusp" class="chzn-select" value="" required id="kdstatusp">
												<option>-- Status Pegawai --</option>
													<?php
												$q = mysqli_query($connect,"select distinct status_pegawai from data_gaji order by status_pegawai"); 

													while ($a = mysqli_fetch_array($q)){
													if ($a['0'] ==$p_kdstatusp) {
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
									<label class="col-sm-3 control-label no-padding-right" for="platform">Pendidikan:</label>

										<div class="col-sm-9">
											<span class="span12">
											<select name="kdpndidik" class="chzn-select" required id="kdpndidik">
												<option>-- Pendidikan Terakhir--</option>
													<?php
												$q = mysqli_query($connect,"select * from tbl_pendidikan"); 

													while ($a = mysqli_fetch_array($q)){
													if ($a['0'] ==$p_kdpndidik) {
														echo "<option value='$a[0]' selected>$a[1]</option>";
													} else {
													echo "<option value='$a[0]'>$a[1]</option>";
													}
														}
													?>
											</select>
											</span>
											</div>
								</div>
								
											
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right">Tanggal Masuk:</label>
										<div class="row">
						<div class="col-xs-8 col-sm-3">
							<div class="input-group">
								<input class="form-control date-picker" name="datemasuk" required value="<?php echo $p_datemasuk;?>" id="id-date-picker-1" type="text" data-date-format="yyyy-mm-dd" />
																	<span class="input-group-addon">
																		<i class="fa fa-calendar bigger-110"></i>
																	</span>
							</div>
						</div>
					</div>
								</div>
							
								
								
								
										
								
												
								<div class="form-actions">
									
									<input class="btn btn-success btn-big btn-next" type="submit" name="kirim_daftar" value="<?php echo $p_submit; ?>">
								

									<a href="?id=tambahpeg" class="btn" type="reset">
										<i class="icon-undo bigger-110"></i>
										RESET
									</a>
									
								</div>
		</form>		
								
								</div>
								</div>
								</div>
								</div>
								</div>
				
<?php
}else{
	  header('Location:../index.php?status=Silahkan Login');
}
?>	

<?php 

?>