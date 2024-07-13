var x = 1;

function cek(){
    $.ajax({
        url: "cekace-icon fa fa-exclamation-triangle.php",
        cache: false,
        success: function(msg){
            $("#badge badge-important").html(msg);
        }
    });
    var waktu = setTimeout("cek()",3000);
}

$(document).ready(function(){
    cek();
    $("#ace-icon fa fa-exclamation-triangle").click(function(){
        $("#loading").show();
        if(x==1){
            $("#ace-icon fa fa-exclamation-triangle").css("background-color","#efefef");
            x = 0;
        }else{
            $("#ace-icon fa fa-exclamation-triangle").css("background-color","#4B59a9");
            x = 1;
        }
        $("#info").toggle();
        //ajax untuk menampilkan ace-icon fa fa-exclamation-triangle yang belum terbaca
        $.ajax({
            url: "lihatace-icon fa fa-exclamation-triangle.php",
            cache: false,
            success: function(msg){
                $("#loading").hide();
                $("#konten-info").html(msg);
            }
        });

    });
    $("#content").click(function(){
        $("#info").hide();
        $("#ace-icon fa fa-exclamation-triangle").css("background-color","#4B59a9");
        x = 1;
    });
});


