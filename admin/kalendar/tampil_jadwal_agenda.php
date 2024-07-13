<?php 
	include "../config/koneksi.php";
	$mode_form	= isset($_GET['modd']) ? $_GET['modd'] : "";
	$idk	= isset($_GET['idk']) ? $_GET['idk'] : NULL;
	if ($mode_form == "del") {	
		
		$sql_1 = mysqli_query($connect,"DELETE FROM t_kalendar_agenda WHERE id='$idk' ");
	}
?>

<html>
       <head>
		      <title>Tampil Data Jadwal Agenda</title>
				 
			  <style type="text/css">
              th 
			  {
                color            : #FFFFFF;
				font-size        : 10pt;
                padding          : 0.1em;
                border-width     : 1px;
                border-style     : solid;
                border-color     : #000;
                border-collapse  : collapse;
                background-color : #4caf50;   
                text-align: center;    
              }
              </style>
	   </head>
	   <body>
		      <a href="?id=incal&modd=add" style="text-decoration:none; color: #373332;">Input Agenda</a> | <a href="?id=incal2" style="text-decoration:none; color: #373332;" target="blank">Lihat Kalendar</a>
				 
			  <br><br>
		      <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                     <tr>
						  <th style="color: black;">No.</th>
						  <th style="color: black;">Tanggal Agenda</th>
						  <th style="color: black;">Subjek</th>
						  <th style="color: black;">Detail Agenda</th>
						  <th style="width:90px; color: black;">Aksi</th>
				     </tr>
						 
					 <?php
						 
					 include "../config/koneksi.php";
					 include "fungsi_indotgl.php";
						 
					 $no = 1;
						 
					 $sql_1 = mysqli_query($connect,"SELECT * FROM t_kalendar_agenda ORDER BY tgl_acara ASC");
					 while($a=mysqli_fetch_array($sql_1))
				     {
				     ?>
						
						<?php
						#Ubah menjadi format tanggal Indonesia untuk tanggal input dan tanggal maintenance
					    $tgl_acara = tgl_indo($a['tgl_acara']);
					    ?>
							 
						<?php
						#Merapikan keluaran untuk format teks untuk keterangan
						$keterangan = nl2br($a['keterangan']);
						?>
						
						<tr>
							 <td width="50" align="center"><?php echo"$no"; ?></td>
							 <td width="100" align="center"><?php echo"$tgl_acara"; ?></td>
						     <td width="250" align="center"><?php echo"$a[subjek]"; ?></td>
							 <td width="325" align="center"><?php echo"$keterangan";?></td>
							 <td>
					            <a href="?id=incal&modd=edit&idk=<?php echo $a['id'] ?>" class="ubah" data-toggle="modal">
					                <i class="ace-icon fa fa-pencil-square-o"></i>
					            </a>
								&nbsp
					            <a href="?id=cal&modd=del&idk=<?php echo $a['id'] ?>" class="hapus">
					                <i class="ace-icon glyphicon glyphicon-trash"></i>
					            </a>
					        </td>
						</tr>
							 
					    <?php $no++; ?>
							 
					  <?php
					  } 
					  ?>
              </table>				 
	  </body>
</html>