<!DOCTYPE html>
<html>
<head>
	<title> Slip Gaji </title>

	<link rel="stylesheet" type="text/css" href="css/slipgaji.css">
	<script src="js/jquery.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>

<!--Print Button-->
<button onclick="myFunction()">Print</button>
<script>
function myFunction() {
    window.print();
}
</script>
<!--Slip Gaji-->
 <?php 
 			session_start();
              function rupiah($nilai, $pecahan = 0) {
                  return number_format($nilai, $pecahan, ',', '.');
              }
              include "../admin/config/koneksi.php";
              $NIP = $_SESSION['nip'];
              $view=mysqli_query($connect,"SELECT * from data_pegawai JOIN data_gaji_golongan ON data_pegawai.id_golongan = data_gaji_golongan.golongan_ JOIN data_gaji ON data_pegawai.nama_jabatan = data_gaji.nama_jabatan JOIN tbl_statusk ON data_pegawai.kdstatusk = tbl_statusk.kdstatusk JOIN tbl_bank ON data_pegawai.id_bank = tbl_bank.id_bank JOIN data_anak ON data_pegawai.id_pegawai = data_anak.id_pegawai JOIN tbl_pendidikan ON data_pegawai.kdpndidik = tbl_pendidikan.kdpndidik WHERE nip='$NIP' AND (data_pegawai.status_pegawai = data_gaji.status_pegawai) AND (data_pegawai.masa_kerja = data_gaji_golongan.masa_kerja_)");
              while($row = $view->fetch_array()){
                $gapok =  $row['gaji_pokok_'];
                $tunjangan_suami_istri =  $row['tunjangan_suami_istri'];
                $tunjangan_anak =  $row['tunjangan_anak'];  
                $tunjangan_jabatan =  $row['tunjangan_jabatan'];
                $tunjangan_dosen =  $row['tunjangan_dosen'];
                $gaji_bersih = $gapok+$tunjangan_suami_istri+$tunjangan_anak+$tunjangan_jabatan+$tunjangan_dosen;
              ?>
<div class="container">
	<div class="row">	
        <div class="receipt-main col-sm-10">
            <div class="row">
    			<div class="receipt-header">
					<div class="col-sm-auto">
						<div class="receipt-right pull-right">

							<h5>Universitas Sumatera Utara</h5>
							<h3>Teknologi Informasi</h3>
							<p>jl. Alumni No 3 Kampus Teknologi Informasi USU, Medan</i></p>
						</div>
						<div class="text-left">
						<div class="receipt-right">
							<h5><?php echo $row['nama'];?></h5>
							<p><b>Mobile :</b><?php echo $row['nohp'];?></p>
							<p><b>Address :</b><?php echo $row['alamat'];?></p>
						</div>
					</div>
					</div>
				</div>
            </div>
			
			<div class="row">
				<div class="receipt-header receipt-header-mid">
					<div class="col-xs-4 col-sm-4 col-md-4">
						<div class="receipt-left">
							<h1>Slip Gaji</h1>
						</div>
					</div>
				</div>
            </div>
			
            <div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Pendapatan / Pemotongan</th>
                            <th>Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-md-9">Gaji Pokok :</td>
                            <td class="col-md-3">Rp. <?php echo rupiah($row['gaji_pokok_']);?></td>
                        </tr>
                        <tr>
                            <td class="col-md-9">Tunjangan Fungsional :</td>
                            <td class="col-md-3">Rp. <?php echo rupiah($row['tunjangan_jabatan']);?></td>
                        </tr>
                        <tr>
                            <td class="col-md-9">Tunjangan Dosen</td>
                            <td class="col-md-3">Rp. <?php echo rupiah($row['tunjangan_dosen']);?></td>
                        </tr>

                        <tr>
                            <td class="col-md-9">Tunjangan Anak</td>
                            <td class="col-md-3">Rp. <?php echo rupiah($row['tunjangan_anak']);?></td>
                        </tr>
                        <tr>
                            <td class="col-md-9">Tunjangan Suami Istri</td>
                            <td class="col-md-3">Rp. <?php echo rupiah($row['tunjangan_suami_istri']);?></td>
                        </tr>
                        <tr>
                          	<td class="text-right"><h2><strong>Total: </strong></h2></td>
                          	<td class="text-left text-danger"><h2><strong>Rp. <?php echo rupiah($gaji_bersih);?> </strong></h2></td>
                        </tr>
                    </tbody>
                </table>
            </div>
			
			<div class="row">
				<div class="receipt-header receipt-header-mid receipt-footer">
					<div class="col-xs-8 col-sm-8 col-md-8 text-left">
						<div class="receipt-right">
							<p><b>Date : </b><?php echo date("Y-m-d h:i:sa") ?> </p>
						</div>
					</div>
					<div class="col-sm-4 ml-5">
						<div class="receipt-left">
							<h1>Tanda Tangan</h1>
						</div>
					</div>
				</div>
            </div>
			
        </div>    
	</div>
</div>
<?php } ?>
</body>
</html>