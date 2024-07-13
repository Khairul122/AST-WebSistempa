(function($) {
	
	$(document).ready(function(e) {


		var id_jab = 0;
		var main = "kepanitiaan/kepanitiaan_data.php";

	
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

			var url = "kepanitiaan/kepanitiaan.form.php";
			
			id_jab = this.id;

			if(id_jab != 0) {
				
				$("#myModalLabel").html("Sunting Data kepanitiaan");
				id_jab = this.id;
			} else {
			
				$("#myModalLabel").html("Tambah Data kepanitiaan");
			}

			$.post(url, {id: id_jab} ,function(data) {
				
				$(".modal-body").html(data).show();
			});
		});

	
		$('.hapus').live("click", function(){
			var url = "kepanitiaan/kepanitiaan.input.php";
			
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
			var url = "kepanitiaan/kepanitiaan.input.php";

		
			var id= $('input:text[name=id]').val();
			var nip = $('input:text[name=nip]').val();
			var nama_kep = $('select[name=nama_kep]').val();
			var tunjangan_kep = $('input:text[name=tunjangan_kep]').val();
			
			$.post(url, {id: id, nip: nip, nama_kep: nama_kep, tunjangan_kep: tunjangan_kep} ,function() {
			
			
				$("#data-jab").load(main);

				
				$('#dialog-jab').modal('hide');

				$("#myModalLabel").html("Tambah Data Jabatan");
			});
		});
	});
}) (jQuery);
