<html>
       <head>
		      <title>Kalendar Agenda</title>
				 
			  <style type="text/css">
              table 
              {
                border : 0px solid #000000;
              }
              th 
              {
                background-color : #4caf50;
                color            : #FFFFFF;
              }
              .atas{
              	line-height: 3;
              	font-size: 20px;
              }
              .atas2{
              	line-height: 2;
              	font-size: 15px;
              }
              </style>
	   </head>
	   <body>
		      <h2 align="center">Kalendar Kerja</h2>
			  
			  <?php
                    
			  $monthNames = Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", 
                                  "Agustus", "September", "Oktober", "November", "Desember");
              ?>

              <?php
                 
			  if (!isset($_REQUEST["month"])) $_REQUEST["month"] = date("n");
              if (!isset($_REQUEST["year"])) $_REQUEST["year"] = date("Y");
                 
			  ?>

              <?php
              $cMonth = $_REQUEST["month"];
              $cYear  = $_REQUEST["year"];
 
              $prev_year  = $cYear;
              $next_year  = $cYear;
              $prev_month = $cMonth-1;
              $next_month = $cMonth+1;
 
              if($prev_month == 0 ) 
			  {
                 $prev_month = 12;
                 $prev_year = $cYear - 1;
              }

			  if($next_month == 13 )
			  {
                 $next_month = 1;
                 $next_year = $cYear + 1;
              }
              ?>
				 
			  <table border="1">
                     <tr class="atas">
                          <td align="center"><a href="<?php echo $_SERVER["PHP_SELF"] . "?id=incal2&month=". $prev_month . "&year=" . $prev_year; ?>">Previous</a></td>
			              <td align="center" colspan="5"><strong><?php echo $monthNames[$cMonth-1].' '.$cYear; ?></strong></td>
                          <td align="center"><a href="<?php echo $_SERVER["PHP_SELF"] . "?id=incal2&month=". $next_month . "&year=" . $next_year; ?>">Next</a></td>
                     </tr>
                     <tr class="atas2">
                          <th style="text-align: center;" width=250>Minggu</th>
                          <th style="text-align: center;" width=250>Senin</th>
                          <th style="text-align: center;" width=250>Selasa</th>
                          <th style="text-align: center;" width=250>Rabu</th>
                          <th style="text-align: center;" width=250>Kamis</th>
                          <th style="text-align: center;" width=250>Jum'at</th>
                          <th style="text-align: center;" width=250>Sabtu</th>
                     </tr>
            
			         <?php
						
                     $timestamp = mktime(0,0,0,$cMonth,1,$cYear);
                     $maxday    = date("t",$timestamp);
                     $thismonth = getdate ($timestamp);
                     $startday  = $thismonth['wday'];
                     
					 for ($i=0; $i<($maxday+$startday); $i++) 
			         {
	                   if(($i % 7) == 0 ) 
			           {
		                   echo "<tr style=height:1px;>";
	                   }
	                   
					   if($i < $startday)
			           {
		                  echo "<td></td>";
	                   }
			           else
			           {
		                  include "../config/koneksi.php";
		
		                  $sql_1    = mysqli_query($connect,"SELECT * FROM t_kalendar_agenda WHERE tgl_kalendar='".($i - $startday + 1).'-'.$cMonth.'-'.$cYear."'");
		                  // $hs       = mysql_query($sql_1);
		                  $jmlAcara = mysqli_num_rows($sql_1);
		                    
					      echo "<td valign='top' height='150px'".($jmlAcara > 0 ? " " : '').">";
		                  echo ($i - $startday + 1);
		                    
					      if($jmlAcara > 0)
				          {
			                 while($acara = mysqli_fetch_array($sql_1))
				             {
				               echo"<br><a href=media.php?id=incal4&id2=$acara[id] style=text-decoration:none; color: blue; target='_blank'><font size=5>[$acara[subjek]]</font></a>";
			                 }
		                  }
		                    
					      echo "</td>";
	                   }
	                  
					   if(($i % 7) == 6 )
			           {
		                   echo "</tr>";
	                   }
			         }
            
			         ?>			
              </table>
	   </body>
</html>