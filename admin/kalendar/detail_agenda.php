<html>
       <head>
	          <title>Detail Agenda</title>
	   </head>
	   <body>
	          <?php
			  
			  
			  include "../config/koneksi.php";
			  include "fungsi_indotgl.php";
			  $id2 = $_GET['id2'];
			  
			  $sql_1 = mysqli_query($connect,"SELECT * FROM t_kalendar_agenda WHERE id='$id2'");
			  $a     = mysqli_fetch_array($sql_1);
			  
			  ?>
			  
			  <?php
			  #Ubah menjadi format tanggal Indonesia untuk tanggal acara
			  $tgl_acara = tgl_indo($a['tgl_acara']);
			  ?>
			  
			  <?php
			  #Merapikan format teks untuk detail acara
			  $detail = nl2br($a['keterangan']);
			  ?>
			  
			  <table>
			          <tr>
					       <td>Tanggal Agenda</td>
						   <td align="center"> : </td>
						   <td><?php echo"$tgl_acara"; ?></td>
					  </tr>
					  <tr>
					       <td>Subjek</td>
						   <td align="center"> : </td>
						   <td><?php echo"$a[subjek]"; ?></td>
					  </tr>
					  <tr>
					       <td>Detail</td>
						   <td align="center"> : </td>
						   <td><?php echo"$detail"; ?></td>
					  </tr>
			  </table>
	   </body>
</html>