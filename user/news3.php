<?php
  session_start();
  if(empty($_SESSION['namauser'])){
    echo "Maaf, Anda belum login. Silahkan <a href='index.php'>login!</a>";
  }
  else{
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Custom CSS -->
	<link href="css/search.css" rel="stylesheet">
	<link rel="stylesheet" href="css/css.css" type="text/css"/>
	<link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


	<!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">

<body>

	<!--NAVBAR-->
   <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-shrink" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger text-success" href="#page-top">SisPa</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="intro.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="user.php">Profile</a>
            </li>
            <li class="nav-item">
              <a style="color: #49C74F;" class="nav-link js-scroll-trigger" href="news.html">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="kurs.php">Kurs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="logoutaction.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
	<header class="intro">
	</header>

	<!-- News -->
	<div id="beritacontent"> 
			<div id="cover">
				<div id="content">
					<div id="berita"><div class="fontstyle1"><div class="fontstyle">BERITA</div></div>
						<div class="berita1"><a href="#"><img src="img/news1.jpg" class="opacityberita1"/></a>
							<div id="contentberita1">
								<div class="berita1judul">LIPUTAN 6 | 6/12/2017 | BANK INDONESIA</div>
								<div class="berita1a">ANGGARAN DAERAH LEBIH BANYAK TERSEDOT UNTUK BAYAR GAJI PNS
								</div>
								<div class="beritalanjut">Pemerintah daerah (pemda) menggelontorkan anggaran ratusan triliun rupiah setiap tahun untuk membayar gaji dan tunjangan pegawai negeri sipil (PNS) di daerah. Dana tersebut berasal dari Anggaran Pendapatan dan Belanja Daerah (APBD).
								"Sebesar 37 persen anggaran daerah digunakan untuk belanja pegawai. Sedangkan untuk belanja modal hanya sekitar 20 persen. Itu pun sangat tergantung dari transfer dana alokasi khusus (DAK) fisik," kata Sri Mulyani. 
								</div>
							</div>
							<div id="lanjutbaca"><a href="#" class="opacityberita1">Lanjut Membaca...</a></div>
						</div>
						<div id="berita2">
							<div class="berita2a">
								<a href="#"><img src="img/news2.jpg" class="opacityberita1"/></a>
									<div id="contentberita2a">
										<div class="berita2ajudul">LIPUTAN 6 | 5/12/2017 | PEMERINTAH PUSAT</div>
										<div id="berita2a">PEMERINTAH KUCURKAN RP 578 T BUAT BAYAR GAJI PNS DALAM 10 BULAN</div>
										<div class="beritalanjut">
											Pemerintah pusat maupun daerah telah membayarkan gaji dan tunjangan Pegawai Negeri Sipil (PNS), baik pusat maupun daerah sebesar Rp 578,6 triliun sepanjang Januari-Oktober 2017.
											</div>
									</div>
									<div id="lanjutbaca"><a href="berita.html"class="opacityberita1">Lanjut Membaca...</a></div>
							</div>
							<div class="berita2b"><a href="#"><img src="img/news3.jpg" class="opacityberita1"/></a>
								<div id="contentberita2b">
									<div class="berita2bjudul">LIPUTAN 6 | 6/9/2017</div>
									<div id="berita2b">ANGGARAN GAJI PNS NAIK TERUS DALAM 4 TAHUN, INI BUKTINYA!!</div>
									<div class="beritalanjut">Pemerintah kembali membuka lowongan Calon Pegawai Negeri Sipil (CPNS) 2017 di 61 Kementerian/Lembaga. Rekrutmen ini untuk menambah basis PNS pusat dan daerah yang mencapai 4,3 juta orang. </div>
								</div>
								<div id="lanjutbaca2b"><a href="#" class="opacityberita1">Lanjut Membaca...</a></div>
							</div>
						</div>
					</div>
					<div id="rightiklan">

					<div>	<br>	</div>
						<div class="spr"><img src="img/biro.jpg"/></div>
						<div class="spr1"><img src="img/fasilkom.jpg"/></div>
						<div class="spr2"><img src="img/fasilkom3.jpg"/></div>
					</div>
				</div>
	</section>


	<!-- jQuery -->
	<script src="js/jquery.js"></script>

	<!-- Bootstrap core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>
</body>
</html>
<?php } ?>