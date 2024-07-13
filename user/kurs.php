<?php
  session_start();
  if(empty($_SESSION['namauser'])){
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
              <a class="nav-link js-scroll-trigger" href="intro.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="user.php">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="news.php">News</a>
            </li>
            <li class="nav-item">
              <a style="color: #49C74F;" class="nav-link js-scroll-trigger" href="kurs.php">Kurs</a>
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
         <h1 class="text-success">KURS MATA UANG</h1>
        </div>
      </div>
    </header>

<?php

function resourceWeb($url){
     $data = curl_init();
     curl_setopt($data, CURLOPT_URL, $url);
     curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
     $hasil = curl_exec($data);
     curl_close($data);
     return $hasil;
}
$sumber =  resourceWeb('http://www.bankmandiri.co.id/resource/kurs.asp?row=2');
$split = explode('<table class="tbl-view" cellpadding="0" cellspacing="0" border="0" width="100%">', $sumber);
$splitLagi = explode('</table>', $split[1]);
$split2 = explode('<p class="catatan">',$sumber);
$split2lagi = explode('</p>', $split2[1]);

{

?>

<div class="container">

  <p class="text-muted">Sumber : www.bankmandiri.co.id</p>            

  <table class="table table-striped">

    <tbody>

      <tr>

        <?php echo $splitLagi[0] ?>
        <?php } ?>

      </tr>

    </tbody>

  </table>

  <p><?php echo $split2lagi[0]; ?></p>

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
<?php } ?>