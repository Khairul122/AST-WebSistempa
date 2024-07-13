
<?php 
error_reporting(0);

$mod 			= isset($_GET['mod']) ? $_GET['mod'] : NULL;
$id_del 		= isset($_GET['id_n']) ? $_GET['id_n'] : NULL;

if ($mod == "del") {
	$id_del = $_GET['id_pegawai'];
	$q_del = mysqli_query($connect,"DELETE a.*, b.*, c.* FROM data_pegawai a, gaji_bersih b, data_anak c WHERE a.id_pegawai = '$id_del' AND b.id_pegawai = '$id_del' AND c.id_pegawai = '$id_del'");

	if ($q_del) {
		echo "<div class='alert alert-info'><button type='button' class='close' data-dismiss='alert'><i class='icon-remove'></i></button><strong><i class='icon-ok'></i>BERHASIL</strong> Data Pegawai Berhasil di hapus<br/></div>";
	} else {
		echo "<div class='alert alert-error'><button type='button' class='close' data-dismiss='alert'><i class='icon-remove'></i></button><strong><i class='icon-remove'></i>MAAF!</strong>".mysqli_error()."<br/></div>";
	}
}

session_start();
$sesi_username			= isset($_SESSION['namauser']) ? $_SESSION['namauser'] : NULL;

if ($_SESSION['leveluser']=='1'||$_SESSION['leveluser']=='2'  ) 

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
<h3 class="header smaller lighter blue">Data Pegawai</h3>
<div class="table-header">
	Semua Daftar Data Pegawai
</div>

<!-- <div class="table-responsive"> -->

<!-- <div class="dataTables_borderWrap"> -->
<div>
<table id="sample-table-2" class="table table-striped table-bordered table-hover">
<thead>
<tr>
	<th style="color: #fff;">NIP</th>
	<th>NAMA</th>
	<th class="hidden-480">TELPON</th>
	<th>
		<i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
		TANGGAL LAHIR
	</th>
	<th>AGAMA</th>
	<th style="color: #fff;">PENDIDIKAN TERAKHIR</th>
	<th style="color: #fff;" class="hidden-480">JABATAN</th>

	<th style="color: #fff;" style="color: #547ea8;">AKSI</th>
</tr>
</thead>

<tbody>
<?php
$view=mysqli_query($connect,"SELECT * from data_pegawai JOIN tbl_pendidikan ON data_pegawai.kdpndidik = tbl_pendidikan.kdpndidik order by nama asc");
		
$no=0;
while($row=mysqli_fetch_array($view)){
?>	
<tr>

	<td>
		<a href="?id=detail_pegawai&nip=<?php echo $row['nip']; ?>"><?php echo $row['nip'];?></a>
	</td>
	<td><?php echo $row['nama'];?></td>
	<td class="hidden-phone"><?php echo $row['nohp'];?></td>
	<td><?php echo $row['tempat_lahir'];?>,<?php echo tgl_indo($row['tgl_lahir']);?></td>
	<td><?php echo $row['Agama'];?></td>
	<td><?php echo $row['nmpndidik'];?></td>
	<td class="hidden-480">
		<span><?php echo $row['nama_jabatan'];?></span>
	</td>

	<td>
		<div class="hidden-sm hidden-xs action-buttons">
			<a class="blue" href="?id=detail_pegawai&nip=<?php echo $row['nip'];?>&status_pegawai=<?php echo $row['status_pegawai'];?>">
				<i class="ace-icon fa fa-search-plus bigger-130"></i>
			</a>

			<a class="green" href="?id=tambahpeg&mod=edit&id_n=<?php echo $row[0];?>">
				<i class="ace-icon fa fa-pencil bigger-130"></i>
			</a>

			<a class="red" href="?id=data_pegawai&mod=del&id_pegawai=<?php echo $row['id_pegawai'];?>" onclick="return confirm('Menghapus Data <?php echo $row[2];?>')">
				<i class="ace-icon fa fa-trash-o bigger-130"></i>
			</a>
		</div>

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