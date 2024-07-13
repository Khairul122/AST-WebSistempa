<?php

	session_start();
	?>
		<div class="alert alert-block alert-success">
								

		<!-- <marquee><i class="icon-ok green"></i> -->

		Selamat Datang, <strong class="green">
		<?php echo $_SESSION['namauser'];?> 
									
		di
		<strong class="green">
		Sistem Penggajian Pegawai dan Dosen
								
								
		</strong>
		<?php
		include "config/koneksi.php";
		$view2=mysqli_query($connect,"select * from master");
		while($row2=mysqli_fetch_array($view2)){
		?>	
								,
		<?php echo $row2['nm_pt'];?> </strong> &nbsp <?php echo $row2['alamat_pt'];?> </marquee>
		</div>

		<?php
		}
		?>

			



<span class="label label-primary arrowed-in-right label-lg">
<b>Perbaharui Status</b>
</span>
<div class="form-group">

<div class="col-xs-20 col-sm-20">
<textarea name="status" maxlength="200" class="autosize-transition form-control" placeholder="Apa yang anda Pikirkan..."></textarea>
										
									
					</div>	
<span class="inline btn-send-message">
<button type="button" class="btn btn-sm btn-primary no-border btn-white btn-round">
<span class="bigger-110">KIRIM</span>

<i class="ace-icon fa icon-on-right"></i>
</button>
</span>	 
					
	</div>

<div>

</div>
	
<div id="data-lu"></div>	
<div id="timeline-1">
<div class="row">
<div class="col-xs-12 col-sm-10 col-sm-offset-1">
<div class="timeline-container">
	<div class="timeline-label">
													<span class="label label-primary arrowed-in-right label-lg">
														<b>Today</b>
													</span>
	</div>

	<div class="timeline-items">
		<div class="timeline-item clearfix">
			<div class="timeline-info">
				<img alt="Susan't Avatar" src="assets/avatars/avatar1.png" />
				<span class="label label-info label-sm">16:22</span>
			</div>

			<div class="widget-box transparent">
				<div class="widget-header widget-header-small">
					<h5 class="widget-title smaller">
						<a href="#" class="blue">Anonymous</a>
						<span class="grey">reviewed a product</span>
					</h5>

																<span class="widget-toolbar no-border">
																	<i class="ace-icon fa fa-clock-o bigger-110"></i>
																	16:22
																</span>

																<span class="widget-toolbar">
																	<a href="#" data-action="reload">
																		<i class="ace-icon fa fa-refresh"></i>
																	</a>

																	<a href="#" data-action="collapse">
																		<i class="ace-icon fa fa-chevron-up"></i>
																	</a>
																</span>
				</div>
			
				
				
				<div class="widget-body">
					<div class="widget-main">
						Anim pariatur cliche reprehenderit, enim eiusmod
						<span class="red">high life</span>

						accusamus terry richardson ad squid &hellip;
						<div class="space-6"></div>

						<div class="widget-toolbox clearfix">
							<div class="pull-left">
								<i class="ace-icon fa fa-hand-o-right grey bigger-125"></i>
								<a href="#" class="bigger-110">Click to read &hellip;</a>
							</div>

							<div class="pull-right action-buttons">
								<a href="#">
									<i class="ace-icon fa fa-check green bigger-130"></i>
								</a>

								<a href="#">
									<i class="ace-icon fa fa-pencil blue bigger-125"></i>
								</a>

								<a href="#">
									<i class="ace-icon fa fa-times red bigger-125"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	
	</div><!-- /.timeline-items -->
</div><!-- /.timeline-container -->


							<div class="pull-left">
								<i class="ace-icon fa fa-hand-o-right grey bigger-125"></i>
								<a href="#" class="bigger-110">Tampilkan Lebih banyak lagi &hellip;</a>
							</div>

