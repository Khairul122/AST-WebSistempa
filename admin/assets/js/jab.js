(function($) {
	
	$(document).ready(function(e) {


		var id_jab = 0;
		var main = "ref/jab.data.php";

	
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

			var url = "ref/jab.form.php";
			
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
			var url = "ref/jab.input.php";
			
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
			var url = "ref/jab.input.php";

			var id = $('input:text[name=id]').val();
			var id_golongan = $('input:text[name=id_golongan]').val();
			var golongan= $('select[name=golongan]').val();
			var kelas_jabatan = $('input:text[name=kelas_jabatan]').val();
			var masa_kerja = $('input:text[name=masa_kerja]').val();
			var tunjangan_dosen = $('input:text[name=tunjangan_dosen]').val();
			
			$.post(url, {id: id, id_golongan: id_golongan, golongan: golongan, kelas_jabatan: kelas_jabatan, masa_kerja: masa_kerja, tunjangan_dosen: tunjangan_dosen} ,function() {
			
			
				$("#data-jab").load(main);

				
				$('#dialog-jab').modal('hide');

				$("#myModalLabel").html("Tambah Data Jabatan");
			});
		});
	});
}) (jQuery);
