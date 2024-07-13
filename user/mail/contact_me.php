<?php
// Check for empty fields
include "../../admin/config/koneksi.php";
   
$name = $_POST['name'];
$date = date("Y-m-d h:i:s");
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
   
// Create the email and send the message
if($name!="" && $email_address!="" && $phone!="" && $message!="" && $date!="")
{
	$a_anak3 = mysqli_query($connect,"INSERT INTO tabel_pesan VALUES (NULL,'$date','$name','1','$message','$email_address','$phone','N')");
	if($a_anak3){
				echo "<script>alert('Agenda Berhasil di Input');window.location ='../index.php'</script>";
			}
			else
			{
				echo "<script>alert('Agenda Gagal di Input');window.location ='../index.php'</script>";	
			}
}
else{
	echo "<script>alert('Maaf, data tidak boleh kosong');window.location ='../index.php'</script>";
}


?>	