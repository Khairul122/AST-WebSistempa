<?php
// koneksi database
$server = "localhost";
$username = "root";
$password = "";
$database = "pegawai2";

$connect = mysqli_connect($server, $username, $password, $database);
 
$filename ="gajipegawai.xls";
 
$query = "SELECT * FROM data_pegawai WHERE id_pegawai = '1'";
$result = mysqli_query($connect,$query);
 
// generate kolom
$header = "NIP \t NAMA \t JENIS KELAMIN \t NO HP \t TEMPAT LAHIR \t TANGGAL LAHIR \t ALAMAT \t AGAMA \t NPWP \t  KTP \t NAMA JABATAN \t \n";
$content;
// generate baris
while($row = mysqli_fetch_array($result)) {
    // $content .= "<tr>";
    for($x=1; $x<12; $x++) {
        $content .= $row[$x]." \t ";    
    }
    // $content .= " \n ";
}
// $content .= "</table>";
$output = $header.$content;
 
header('Content-type: application/ms-excel');
header('Content-Disposition: attachment; filename='.$filename);
echo $output;
