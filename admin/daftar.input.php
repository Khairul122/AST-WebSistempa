
<?php
error_reporting(0);
include "config/koneksi.php";
  $email  = $_POST['email'];
  $username = $_POST['username2'];
  $password1 = md5($_POST['pwd1']);
  $password2 = md5($_POST['pwd2']);
  $nip  = $_POST['nip'];

$cek_username=mysqli_num_rows(mysqli_query
             ($connect,"SELECT username FROM tbl_user
               WHERE username='$_POST[username2]'")); 
$ceknipdaftar=mysqli_num_rows(mysqli_query
             ($connect,"SELECT nip FROM tbl_user
               WHERE nip='$_POST[nip]'"));
$cek_email=mysqli_num_rows(mysqli_query
             ($connect,"SELECT email FROM tbl_user
               WHERE email='$_POST[email]'"));       
$cek_nip=mysqli_num_rows(mysqli_query
             ($connect,"SELECT nip FROM data_pegawai
               WHERE nip='$_POST[nip]'"));           

if ($cek_username > 0){
  echo "<script>alert('Maaf username sudah ada');window.location ='index.php'</script>";

} else if ($cek_nip ==0 ) {

   echo "<script>alert('Maaf NIP anda tidak terdaftar mohon menghubungi HRD');window.location ='index.php'</script>";
   
}else if ($cek_email > 0){
  echo "<script>alert('Maaf Email anda sudah terdaftar');window.location ='index.php'</script>";

}else if ($ceknipdaftar > 0){
  echo "<script>alert('Maaf NIP anda sudah terdaftar');window.location ='index.php'</script>";

}
else if($password1=$password2){
  mysqli_query($connect,"INSERT INTO tbl_user(id_user,username,
                                 pass,
                                 email,
                                 level_user,w_daftar,nip)
                      VALUES('','$username',
                             '$password1',
                             '$email',
                             '1',NOW(),'$nip')");
               
echo "<script>alert('Berhasil!!! Mohon tunggu konfirmasi dari Admin'); window.location ='index.php'</script>";
} 
                     
  
?>
