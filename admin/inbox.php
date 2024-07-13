
<!-- PAGE CONTENT BEGINS -->
<div class="row">
<div class="col-xs-12">
<div class="tabbable">
<ul id="inbox-tabs" class="inbox-tabs nav nav-tabs padding-16 tab-size-bigger tab-space-1">

	<li class="active">
		<a data-toggle="tab" href="#inbox" data-target="inbox">
			<i class="blue ace-icon fa fa-inbox bigger-130"></i>
			<span class="bigger-110">Inbox</span>
		</a>
	</li>
</ul>

<?php		
						
$count1=mysqli_query($connect,"select count(sudahbaca)as jum2 from tabel_pesan where sudahbaca='N' and kepada='1' ");
while($row5=mysqli_fetch_array($count1)){
?>

<div class="tab-content no-border no-padding">
<div id="inbox" class="tab-pane in active">
<div class="message-container">
<div id="id-message-list-navbar" class="message-navbar clearfix">
	<div class="message-bar">
			<span class="blue bigger-150">Inbox</span>
			<span class="grey bigger-110">(<?php echo $row5['jum2']; ?> unread messages)</span>

<?php
}
?>
	</div>
</div>
</div>
</div>

<?php						
	$count1=mysqli_query($connect,"SELECT * FROM tabel_pesan where kepada='1' ");
	while($row5=mysqli_fetch_array($count1)){
	$dari=$row5['dari'];
	$waktu=$row5['waktu'];
	$pesan=$row5['pesan'];
	$email=$row5['email'];
	$nohp=$row5['nohp'];
?>

	<div class="message-header clearfix">
		<div class="pull-left">

			<div class="space-4"></div>

			<i class="ace-icon fa fa-star orange2"></i>

			&nbsp;
			<a href="#" class="sender"><?php echo $dari;?></a>

			&nbsp;
			<i class="ace-icon fa fa-clock-o bigger-110 orange middle"></i>
			<span class="time grey"><?php echo $waktu;?></span>
		</div>
	</div>


		<div class="pull-right action-buttons">
			<a href="?id=delpesan&email=<?php echo $email;?>">
				<i class="ace-icon fa fa-trash-o red icon-only bigger-130"></i>
			</a>
			
		</div>


	<div class="message-body">
		<p>
			<?php echo "Email : ".$email."<br>";?>
			<?php echo "Nomor Hp : ".$nohp."<br>";?>
			<?php echo "Pesan : ".$pesan;?>
		</p>
	</div>
</div>
</div>


<!-- PAGE CONTENT ENDS -->
	<?php } ?>
