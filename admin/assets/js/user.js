(function($) {
	
	$(document).ready(function(e) {


		var id_jab = 0;
		var main = "user/user_data.php";

	
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

			var url = "user/user.form.php";
			
			id_jab = this.id;

			if(id_jab != 0) {
				
				$("#myModalLabel").html("Sunting Data User");
				id_jab = this.id;
			} else {
			
				$("#myModalLabel").html("Tambah Data User");
			}

			$.post(url, {id: id_jab} ,function(data) {
				
				$(".modal-body").html(data).show();
			});
		});

	
		$('.hapus').live("click", function(){
			var url = "user/user.input.php";
			
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
			var url = "user/user.input.php";

		
			var id_user= $('input:text[name=id_user]').val();
			var username= $('input:text[name=username]').val();
			var nip = $('input:text[name=nip]').val();
			var email = $('input:text[name=email]').val();
			var status = $('input:text[name=status]').val();
			var kd_approve = $('input:text[name=kd_approve]').val();
			
			$.post(url, {id_user: id_user, username: username, nip: nip, email: email, status: status, kd_approve: kd_approve} ,function() {
			
			
				$("#data-jab").load(main);

				
				$('#dialog-jab').modal('hide');

				$("#myModalLabel").html("Tambah Data Jabatan");
			});
		});
	});
}) (jQuery);
