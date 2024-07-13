<?php
// panggil fungsi validasi xss dan injection
require_once('fungsi_validasi.php');

// definisikan koneksi ke database
$server = "localhost";
$username = "root";
$password = "";
$database = "pegawai2";

$connect = mysqli_connect($server, $username, $password, $database);
?>
