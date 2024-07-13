<?php 
error_reporting(0);


function rupiah($nilai, $pecahan = 0) {
    return number_format($nilai, $pecahan, ',', '.');
}


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
<h3 class="header smaller lighter blue">Detail Gaji Pegawai</h3>

<div class="table-header">
	Detail Gaji Pegawai
</div>

<div>

<table id="sample-table-2" class="table table-striped table-bordered table-hover">
<thead>
<tr>
	<th>NIP</th>
	<th>NAMA</th>
	<th>JABATAN</th>
	<th>STATUS PEGAWAI</th>
	<th>GAJI POKOK</th>
	<th>TUNJANGAN DOSEN</th>
	<th style="color: #fff;">TUNJANGAN JABATAN</th>
	<th>TUNJANGAN ANAK</th>
	<th>TUNJANGAN SUAMI ISTRI</th>
	<th>TOTAL GAJI</th>
</tr>
</thead>

<tbody style="width: 100px;" >
<?php
$view=mysqli_query($connect,"SELECT * from data_pegawai JOIN data_gaji ON data_pegawai.nama_jabatan = data_gaji.nama_jabatan JOIN tbl_statusk ON data_pegawai.kdstatusk = tbl_statusk.kdstatusk JOIN data_anak ON data_pegawai.id_pegawai = data_anak.id_pegawai JOIN gaji_bersih ON data_pegawai.id_pegawai = gaji_bersih.id_pegawai JOIN data_gaji_golongan ON data_pegawai.id_golongan = data_gaji_golongan.golongan_  WHERE data_pegawai.status_pegawai = data_gaji.status_pegawai AND data_pegawai.masa_kerja = data_gaji_golongan.masa_kerja_ order by nama asc");

$no=0;	
while($row=mysqli_fetch_array($view)){
?>	
<tr>
	<td>
		<a href="?id=detail_pegawai&nip=<?php echo $row['nip']; ?>"><?php echo $row['nip'];?></a>
	</td>
	<td><?php echo $row['nama'];?></td>
	<td><?php echo $row['nama_jabatan'];?></td>
	<td><?php echo $row['status_pegawai'];?></td>
	<td><?php echo rupiah($row['gaji_pokok_']);?></td>
	<td><?php echo rupiah($row['tunjangan_dosen']);?></td>
	<td><?php echo rupiah($row['tunjangan_jabatan']);?></td>
	<td><?php echo rupiah($row['tunjangan_anak']);?></td>
	<td><?php echo rupiah($row['tunjangan_suami_istri']);?></td>
	<td><?php echo rupiah($row['gaji_bersih']);?></td>
</tr>
	<?php
	}
	?>

</tbody>
</table>

</div>
</div>