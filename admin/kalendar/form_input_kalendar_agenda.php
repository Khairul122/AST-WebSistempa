<?php 

	include "../config/koneksi.php";
	$idk	= isset($_GET['idk']) ? $_GET['idk'] : NULL;
	$mode_form	= isset($_GET['modd']) ? $_GET['modd'] : "";

	$sql_1 = mysqli_query($connect,"SELECT * FROM t_kalendar_agenda WHERE id='$idk' ");
			while ($a = mysqli_fetch_array($sql_1)) {
		$p_idk = $a[0];
		$p_jadwal_agenda = $a[1];
		$p_subjek_agenda = $a[3];
		$p_detail_agenda = $a[4];
		}
?>
<html>
       <head>
		      <title>Form Input Kalendar Agenda</title>
				 
		      <style type="text/css">
              th 
			  {
                color            : #FFFFFF;
				font-size        : 10pt;
                padding          : 0.1em;
                border-width     : 1px;
                border-style     : solid;
                border-color     : #969BA5;
                border-collapse  : collapse;
                background-color : #00FF00;       
              }
              </style>
				 
		      <link href="../demoengine/demoengine.min.css" rel="stylesheet">
	          <script src="../demoengine/demoengine.min.js" defer></script>
	          <link href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/themes/ui-darkness/jquery-ui.min.css" rel="stylesheet">
	          <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	          <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
				 
		      <script language="JavaScript">
		      /*
		       * jQuery UI Datepicker: Parse and Format Dates
		       * http://salman-w.blogspot.com/2013/01/jquery-ui-datepicker-examples.html
		       */
		      
			  $(function() {
			    $("#tgl_acara").datepicker({
				  dateFormat: "yy-mm-dd"
			    });
		      });
	          </script>
	   </head>
	   <body>
		      <form method="POST" action="?id=incal3&modd=<?php echo $mode_form ?>&idk=<?php echo $idk ?>">
		      <table>
				      <tr>
						   <td>Jadwal Agenda</td>
						   <td align="center"> : </td>
						   <td><input class="form-control date-picker " type="text" name="jadwal_agenda" id="tgl_acara"  value="<?php echo $p_jadwal_agenda;?>" data-date-format="yyyy-mm-dd" />
					  </tr>
					  <tr>
						   <td>Subjek Agenda</td>
						   <td align="center"> : </td>
						   <td><input type="text" name="subjek_agenda" value="<?php echo $p_subjek_agenda; ?>"></td>
					  </tr>
					  <tr>
						   <td>Detail Agenda</td>
						   <td align="center"> : </td>
						   <td><textarea name="detail_agenda" cols="45" rows="3"><?php echo $p_detail_agenda; ?></textarea></td>
					  </tr>
					  <tr>
						   <td colspan="3" align="center"><input type="submit" value="Submit"> |
						   <input type="button" value="Cancel" onclick=self.history.back()></td>
					  </tr>
			  </table>
			  </form>
	   </body>
</html>