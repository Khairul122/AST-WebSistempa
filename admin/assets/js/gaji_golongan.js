(function($) {
	
	$(document).ready(function(e) {


		var id_jab = 0;
		var main = "golongan/golongan_data.php";

	
		$("#data-jab").load(main);

		
	
		$('input:text[name=pencarian]').on('input',function(e){
			var v_cari = $('input:text[name=pencarian]').val();
			
			if(v_cari!="") {
				$.post(main, {cari: v_cari} ,function(data) {
			
					$("#data-jab").html(data).show();
				});
			} else {
		
				$("#data-jab").load(main);
			}
		});

	
		$('.ubah,.tambah').live("click", function(){

			var url = "golongan/golongan.form.php";
			
			id_jab = this.id;

			if(id_jab != 0) {
				
				$("#myModalLabel").html("Sunting Data Jabatan");
			} else {
			
				$("#myModalLabel").html("Tambah Data Jabatan");
			}

			$.post(url, {id: id_jab} ,function(data) {
				
				$(".modal-body").html(data).show();
			});
		});

	
		$('.hapus').live("click", function(){
			var url = "golongan/golongan.input.php";
			
			id_jab = this.id;

			
			var answer = confirm("Apakah anda ingin menghapus data ini?");

			
			if (answer) {
				
				$.post(url, {hapus1: id_jab} ,function() {
				
					$("#data-jab").load(main);
				});
			}
		});

		
		$('.halaman').live("click", function(event){
			
			kd_hal = this.id;

			$.post(main, {halaman: kd_hal} ,function(data) {
			
				$("#data-jab").html(data).show();
			});
		});
		
		
		$("#simpan-jab").bind("click", function(event) {
			var url = "golongan/golongan.input.php";

			var id = $('input:text[name=id]').val();
			var id_golongan_ = $('input:text[name=id_golongan_]').val();
			var golongan_= $('select[name=golongan_]').val();
			var masa_kerja_ = $('select[name=masa_kerja_]').val();
			var gaji_pokok_ = $('input:text[name=gaji_pokok_]').val();
			
			$.post(url, {id: id, id_golongan_: id_golongan_, golongan_: golongan_, masa_kerja_: masa_kerja_, gaji_pokok_: gaji_pokok_} ,function() {
			
			
				$("#data-jab").load(main);

				
				$('#dialog-jab').modal('hide');

				$("#myModalLabel").html("Tambah Data Jabatan");
			});
		});
	});
}) (jQuery);
