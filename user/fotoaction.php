<?php
	
	include 'connect.php';

	$foto = $_FILES['foto']['name']; 
	$tmp = $_FILES['foto']['tmp_name'];
	$fotobaru = date('dmYHis').$foto;
	$path = 'images/'.$fotobaru;

	$query = $connect->query("UPDATE tableuser SET foto ='$fotobaru'
	 	WHERE id = '$id'");

	header("location:user.php");
?>