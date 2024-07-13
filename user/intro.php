<?php
  session_start();
  if(empty($_SESSION['nip'])){
    echo "Maaf, Anda belum login. Silahkan <a href='index.php'>login!</a>";
  }
  else{
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

     <title>SisPa Online</title>
  
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

</head>
<body>

  <!--NAVBAR-->
   <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger text-success" href="#page-top">SisPa</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a style="color: #49C74F;" class="nav-link js-scroll-trigger" href="intro.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="user.php">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="logoutaction.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
     
    <!-- Header --> 
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <!--PHP-->
        <?php 
          include "../admin/config/koneksi.php";
          $NIP = $_SESSION['nip'];
          $query = $connect->query("SELECT * FROM tbl_user WHERE NIP ='$NIP'")or die(mysqli_error($connect));
          while($data = $query->fetch_array()){
        ?>
          <div class="intro-lead-in text-success" >Selamat Datang di SisPa, <?php echo ucwords($data['username']) ?>!</div>
          <?php } ?>
        </div>
      </div>
    </header>

    <!-- ABout -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">About</h2>
            <h3 class="section-subheading text-muted">Apa sih yang bisa kamu lakuin disini ?</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/1.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="subheading">Informasi Gaji/Upah selama satu bulan</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Semua informasi seputar gaji dirangkum di satu tempat</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/2.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="subheading">Pencetakan Slip Gaji</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Kalian bisa langsung mencetak slip gaji disini</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/3.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="subheading">Perhitungan biaya tunjangan/Honor</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Perhitungan berapa jumlah tambahan/pengurangan gaji selama satu bulan</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/4.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="subheading">Kurs Hari ini</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Kalian bisa cek Kurs jual beli secara langsung disini</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-image"><br><br>
                  <a href="user.php" class="btn btn-success" style="margin-top:2px;"><i class="fa fa-address-book" style="font-size:40px;color: black;"></i></a>
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="subheading">Menuju Profileku</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Klik icon untuk membuka profile kalian</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>  

<!--  Contact  -->
      <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Contact Us</h2>
            <h3 class="section-subheading text-muted">Leave a message here</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form action="mail/contact_me2.php" method="post" id="contactForm" name="sentMessage" novalidate>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" name="name" placeholder="Your Name *" required data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" name="email" placeholder="Your Email *" required data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" name="phone" placeholder="Your Phone *" required data-validation-required-message="Please enter your phone number.">
                    
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" name="message" placeholder="Your Message *" required data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>



  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

</body>
<?php } ?>
</html>