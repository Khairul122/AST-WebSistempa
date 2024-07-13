<?php 
	function ambilNip($var){
	echo "<select name=$var>";
		$ambil=mysqli_query($connect,"select * from tbl_siswa");
		while($dt=mysqli_fetch_array($ambil)){
		echo "<option value='$dt[noreg]'>$dt[noreg]</option>";			
		}
	echo "</select>";
	}
?>