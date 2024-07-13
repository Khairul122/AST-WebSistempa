<?php 
error_reporting(0);

$mod 			= isset($_GET['mod']) ? $_GET['mod'] : NULL;
$id_del 		= isset($_GET['id_n']) ? $_GET['id_n'] : NULL;


function rupiah($nilai, $pecahan = 0) {
    return number_format($nilai, $pecahan, ',', '.');
}




if ($mod == "del") {
	$id_del =  $_GET['nip'];
	$q_del = mysqli_query($connect,"DELETE FROM data_pegawai, gaji bersih WHERE id = '$id_del'");

	if ($q_del) {
		echo "<div class='alert alert-info'><button type='button' class='close' data-dismiss='alert'><i class='icon-remove'></i></button><strong><i class='icon-ok'></i>BERHASIL</strong> Data Pegawai Berhasil di hapus<br/></div>";
	} else {
		echo "<div class='alert alert-error'><button type='button' class='close' data-dismiss='alert'><i class='icon-remove'></i></button><strong><i class='icon-remove'></i>MAAF!</strong>".mysqli_error()."<br/></div>";
	}
}


$sesi_username			= isset($_SESSION['username']) ? $_SESSION['username'] : NULL;

if ($sesi_username != NULL || !empty($sesi_username) ||$_SESSION['leveluser']=='1'||$_SESSION['leveluser']=='2'  ) 

{

function tgl_indo($tgl){
			$tanggal = substr($tgl,8,2);
			$bulan   = getBulan(substr($tgl,5,2));
			$tahun   = substr($tgl,0,4);
			return $tanggal.' '.$bulan.' '.$tahun;		 
	}	
	function getBulan($bln){
				switch ($bln){
					case 1: 
						return "Januari";
						break;
					case 2:
						return "Februari";
						break;
					case 3:
						return "Maret";
						break;
					case 4:
						return "April";
						break;
					case 5:
						return "Mei";
						break;
					case 6:
						return "Juni";
						break;
					case 7:
						return "Juli";
						break;
					case 8:
						return "Agustus";
						break;
					case 9:
						return "September";
						break;
					case 10:
						return "Oktober";
						break;
					case 11:
						return "November";
						break;
					case 12:
						return "Desember";
						break;
				}
				
				
		
			} 



?>

<div class="row">
<div class="col-xs-12">
<h3 class="header smaller lighter blue">Detail Pegawai</h3>

<div class="table-header">
	Detail Data Pegawai
</div>

<div>

<table id="sample-table-2" class="table table-striped table-bordered table-hover">

<tbody style="width: 100px;" >
<?php
$nip =  $_GET['nip'];
$view=mysqli_query($connect,"SELECT * from data_pegawai JOIN tbl_pendidikan ON data_pegawai.kdpndidik = tbl_pendidikan.kdpndidik WHERE nip='$nip'");
		
while($row=mysqli_fetch_array($view)){
?>	
<tr>
	<th>NIP</th>
	<td>
		<?php echo $row['nip'];?></a>
	</td>
</tr>
<tr>
	<th>NAMA</th>
	<td class="hidden-480"><?php echo $row['nama'];?></td>
</tr>
<tr>
	<th>JENIS KELAMIN</th>
	<td class="hidden-480"><?php echo $row['jenis_kelamin'];?></td>
</tr>
<tr>
	<th>AGAMA</th>
	<td class="hidden-480"><?php echo $row['Agama'];?></td>
</tr>
<tr>
	<th>TEMPAT TANGGAL LAHIR</th>
	<td class="hidden-480"><?php echo $row['tempat_lahir']." ".$row['tgl_lahir'];?></td>
</tr>
	<!-- <td><?php echo tgl_indo($row['tgl_lahir']);?></td> -->
<tr>
	<th>NOMOR TELEPON</th>
	<td class="hidden-phone"><?php echo $row['nohp'];?></td>
</tr>	
<tr>
	<th>ALAMAT</th>
	<td class="hidden-480"><?php echo $row['alamat'];?></td>
</tr>
<tr>
	<th>PENDIDIKAN TERAKHIR</th>
	<td class="hidden-480"><?php echo $row['nmpndidik'];?></td>
</tr>
</tbody>

		<div class="hidden-md hidden-lg">
			<div class="inline position-relative">
				<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
					<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
				</button>

				<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
					<li>
						<a href="#" class="tooltip-info" data-rel="tooltip" title="View">


																				<span class="blue">
																					<i class="ace-icon fa fa-search-plus bigger-120"></i>
																				</span>
						</a>
					</li>

					<li>
						<a href="" class="tooltip-success" data-rel="tooltip" title="Edit">


																				<span class="green">
																					<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																				</span>
						</a>
					</li>

					<li>
						<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">

																				<span class="red">
																					<i class="ace-icon fa fa-trash-o bigger-120"></i>
																				</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</td>
</tr>
	<?php
	}
	?>

</tbody>
<tbody>
<?php
$nip =  $_GET['nip'];
$view=mysqli_query($connect,"SELECT * from data_pegawai JOIN tbl_anak ON data_pegawai.id_anak = tbl_anak.id_anak JOIN data_gaji ON data_pegawai.nama_jabatan = data_gaji.nama_jabatan JOIN tbl_statusk ON data_pegawai.kdstatusk = tbl_statusk.kdstatusk JOIN data_gaji_golongan ON data_pegawai.id_golongan = data_gaji_golongan.golongan_ WHERE nip='$nip'");
		
$no=0;
while($row1=mysqli_fetch_array($view)){
	$id_pegawai =  $row1['id_pegawai'];

	$anak=$row1['id_anak'];
	$cek=$row1['jumlah_anak'];
	$cek2=$row1['gaji_pokok_'];

	$status=$row1['kdstatusk'];
	$nama_status=$row1['nmstatusk'];

	if($anak!='0')
	{
		if($cek=='0')
		{
			$cek3='0';
		}
		else if($cek=='1')
		{
			$cek3=($cek2*0.05);
		}
		else 
		{
			$cek3=($cek2*0.10);
		}
	}

	if($status!='0')
	{
		if($status=='2'){
			$status2=($cek2*0.10);
		}
		else{
				$status2='0';	
		}
	}
}
?>
<?php 
	$a_anak3 = mysqli_query($connect,"INSERT INTO data_anak VALUES ('$id_pegawai','$cek','$cek3','$nama_status','$status2')")
 ?>

<?php 
$nip =  $_GET['nip'];
$status_pegawai =  $_GET['status_pegawai'];
$view=mysqli_query($connect,"SELECT * from data_pegawai JOIN data_gaji_golongan ON data_pegawai.id_golongan = data_gaji_golongan.golongan_ JOIN data_gaji ON data_pegawai.nama_jabatan = data_gaji.nama_jabatan JOIN tbl_statusk ON data_pegawai.kdstatusk = tbl_statusk.kdstatusk JOIN tbl_bank ON data_pegawai.id_bank = tbl_bank.id_bank JOIN data_anak ON data_pegawai.id_pegawai = data_anak.id_pegawai  WHERE nip='$nip' AND (data_pegawai.status_pegawai = data_gaji.status_pegawai) AND (data_pegawai.masa_kerja = data_gaji_golongan.masa_kerja_)");
while($row=mysqli_fetch_array($view)){
?>	
<tr>

<?php 
	$gapok =  $row['gaji_pokok_'];
	$tunjangan_suami_istri =  $row['tunjangan_suami_istri'];
	$tunjangan_anak =  $row['tunjangan_anak'];	
	$tunjangan_jabatan =  $row['tunjangan_jabatan'];
	$tunjangan_dosen =  $row['tunjangan_dosen'];	
	$gaji_bersih = $gapok+$tunjangan_suami_istri+$tunjangan_anak+$tunjangan_jabatan+$tunjangan_dosen;

	$gaji = mysqli_query($connect,"INSERT INTO gaji_bersih VALUES ('$id_pegawai','$nip','$gaji_bersih')")
 ?>
<tr>
	<th>NAMA JABATAN</th>
	<td class="hidden-480"><?php echo $row['nama_jabatan'];?></td>
</tr>
<tr>
	<th>MASA KERJA</th>
	<td class="hidden-480"><?php echo $row['masa_kerja_']." Tahun";?></td>
</tr>
<tr>
	<th>GAJI POKOK</th>
	<td class="hidden-phone"><?php echo "Rp. ".rupiah($row['gaji_pokok_'])?></td>
</tr>
<tr>
	<th>TUNJANGAN SUAMI ISTRI</th>
	<td class="hidden-480"><?php echo "Rp. ".rupiah($row['tunjangan_suami_istri'])?></td>
</tr>
<tr>
	<th>TUNJANGAN ANAK</th>
	<td class="hidden-480"><?php echo "Rp. ".rupiah($row['tunjangan_anak'])?></td>
</tr>
<tr>
	<th>TUNJANGAN JABATAN</th>
	<td class="hidden-480"><?php echo "Rp. ".rupiah($row['tunjangan_jabatan'])?></td>
</tr>
<tr>
	<th>TUNJANGAN DOSEN</th>
	<td class="hidden-480"><?php echo "Rp. ".rupiah($row['tunjangan_dosen'])?></td>
</tr>
<tr>
	<th>TOTAL GAJI BERSIH</th>
	<td><?php echo "Rp. ".rupiah($gaji_bersih) ?></td>
</tr>
<tr>
	<th>NAMA BANK</th>
	<td class="hidden-480"><?php echo $row['nm_bank'];?></td>
</tr>


		<div class="hidden-md hidden-lg">
			<div class="inline position-relative">
				<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
					<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
				</button>

				<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
					<li>
						<a href="#" class="tooltip-info" data-rel="tooltip" title="View">


																				<span class="blue">
																					<i class="ace-icon fa fa-search-plus bigger-120"></i>
																				</span>
						</a>
					</li>

					<li>
						<a href="" class="tooltip-success" data-rel="tooltip" title="Edit">


																				<span class="green">
																					<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																				</span>
						</a>
					</li>

					<li>
						<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">

																				<span class="red">
																					<i class="ace-icon fa fa-trash-o bigger-120"></i>
																				</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</td>
</tr>
	<?php
	}
	?>

</tbody>
</table>

</div>
</div>

<?php
}else{
	  echo "<script>alert('Mohon Maaf anda tidak bisa akses halaman ini'); window.location = '../index.php'</script>";
}
?>	