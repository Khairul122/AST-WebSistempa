
<?php
error_reporting(0);
include "config/koneksi.php";

$user= $_POST['username'];
$pass     = md5($_POST['password']);

// pastikan username dan password adalah berupa huruf atau angka.

$login=mysqli_query($connect,"SELECT * FROM tbl_user WHERE username='$user' AND pass='$pass' and kd_approve='1' and status ='1'");


$login2=mysqli_query($connect,"SELECT * FROM tbl_user WHERE username='$user' AND pass='$pass' and kd_approve='1' and status ='2'");
// $cek_lagi=mysqli_query($login);
$ketemu=mysqli_num_rows($login);
$r=mysqli_fetch_array($login);

$ketemu2=mysqli_num_rows($login2);
$r2=mysqli_fetch_array($login2);

// Apabila username dan password ditemukan
if ($ketemu > 0){
  session_start();
  $_SESSION['kode']     = $r['id_user'];
  $_SESSION['namauser']     = $r['username'];
  $_SESSION['passuser']     = $r['pass'];
  $_SESSION['leveluser']    = $r['level_user'];
  $_SESSION['photo']    = $r['photo'];
  $_SESSION['status']    = $r['status'];
  $_SESSION['w_login']    = $r['w_login'];
  $id_user=$_SESSION['kode'];	
  
  
  
  if($_SESSION['leveluser']==1){
	header('location:media.php');
	mysqli_query($connect,"update tbl_user set status=1,w_login=NOW() where id_user='$id_user'");
  } else if($_SESSION['leveluser']==2){
	header('location:pegawai.php?id=home');
	mysqli_query($connect,"update tbl_user set status=1,w_login=NOW() where id_user='$id_user'");
  } if($_SESSION['leveluser']==3){
	header('location:absen.php?id=home');
	mysqli_query($connect,"update tbl_user set status=1,w_login=NOW() where id_user='$id_user'");
  } if($_SESSION['leveluser']==4){
	header('location:payroll.php?id=home');
	mysqli_query($connect,"update tbl_user set status=1,w_login=NOW() where id_user='$id_user'");
  } if($_SESSION['leveluser']==5){
	header('location:user.php?id=home');
	mysqli_query($connect,"update tbl_user set status=1,w_login=NOW() where id_user='$id_user'");
  }
}

else if($ketemu2 > 0){
  session_start();
  $_SESSION['nip']     = $r2['nip'];
  $_SESSION['namauser']     = $r2['username'];
  header('location:../user/intro.php');
}

else{
  echo "<script>alert('Mohon Maaf Username / Password anda Tidak Terdaftar'); window.location = 'index.php'</script>";
}
?>