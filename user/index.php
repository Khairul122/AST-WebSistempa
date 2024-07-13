<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SisPa Online</title>

    <link rel="stylesheet" type="text/css" href="css/index.css">

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

  <body id="page-top">

    <!-- Navigation -->
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
              <a class="nav-link js-scroll-trigger" href="#services">Tentang SisPa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text" src="cover.jpg">
          <div class="intro-lead-in text-success" >Selamat Datang di SisPa</div>
          <div class="intro-heading text-uppercase"></div>
          <a class="btn btn-success btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
        </div>
      </div>
    </header>

    <!-- Services -->
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">SisPa</h2>
            <h3 class="section-subheading text-muted">Sistem Penggajian yang dilakukan secara online</h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-6">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-success"></i>
              <i class="fa fa-money fa-stack-1x "></i>
            </span>
            <h4 class="service-heading">Penghasilanku</h4>
            <p class="text-muted">Cek berapa gaji/upah yang diterima selama satu bulan</p>
          </div>
          <div class="col-md-6">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-success"></i>
              <i class="fa fa-laptop fa-stack-1x"></i>
            </span>
            <h4 class="service-heading">Profileku</h4>
            <p class="text-muted">Lihat data dan profile ku</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Portfolio Grid -->
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Login Disini!</h2>
            <h3 class="section-subheading text-muted">Dengan begitu kalian dapat langsung memulai sistem penggajian online</h3>
          </div>
        </div>

          <!-- modal2 -->
          <div class="col-sm-6 col-sm-6 mx-auto portfolio-item">
            <a class="portfolio-link"  href="../admin/index.php">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-users fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/login.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Login</h4>
              <p class="text-muted">Masuk Disini</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    


    <!-- Contact -->
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
            <form action="mail/contact_me.php" method="post" id="contactForm" name="sentMessage" novalidate>
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


    <!-- Portfolio Modals -->

    <!-- Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class=" modal-dialog">
        <div class="mx-auto col-lg-4 modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
      <div class="container">
        <div class="row">
          <div class="mx-auto">
            <div class="form-login">
              <h4>Welcome back.</h4/>
              <form action="loginaction.php" method="POST">
                <input type="text" name="NIP"  class="form-control input-sm chat-input" placeholder="NIP" required>
                </br>
                <input type="text" name="password" minlength="6" class="form-control input-sm chat-input" placeholder="Password" required>
                </br>
            <div class="wrapper">
              <div class="group-btn">
                <button class="btn btn-success">Login</button>
              </div>
            </div>
          </form>
          </div>
        </div>
        </div>
      </div>

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

</html>
