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

  <title></title>
  
  <link rel="stylesheet" type="text/css" href="css/profile.css">
  <link rel="stylesheet" type="text/css" href="css/navbarprofile.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<style>
  .container-fluid{
    background-image: url(header-bg.jpg);
    background-size: cover;
    padding-top: 50px;
    height : 683px;
  }
  .profile-sidebar{
    background-image: url(fotobg.jpg);
    background-size: cover;
  }
</style>
<div class="container-fluid">
    <!-- Second navbar for categories -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a  style="color: #49C74F;" class="navbar-brand js-scroll-trigger text-success" href="#page-top">SisPa</a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="intro.php">Home</a></li>
            <li><a style="color: #49C74F;" href="user.php">Profile</a></li>
            <li><a href="logoutaction.php">Logout</a></li>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
<div class="container-fluid">
    <div class="row profile">
      <!-- SIDEBAR USERPIC -->
    <div class="col-md-3">
      <div class="profile-sidebar"> 
        <div class="profile-userpic">
           <?php 
                    include "../admin/config/koneksi.php";
                    $NIP = $_SESSION['nip'];
                    $query = $connect->query("SELECT * FROM tbl_user WHERE NIP = '$NIP'")or die(mysqli_error($connect));
                    while($data = $query->fetch_array()){
                  ?>
                <img src="images/<?php echo $data['foto']; ?>"  class="img-circle img-responsive"><br/>
                <?php } ?>
                </div>
      </div>
        <!-- END SIDEBAR USERPIC -->
        <!-- SIDEBAR USER TITLE -->
        <div class="profile-usertitle">
          <?php 
                    include "../admin/config/koneksi.php";
                    $NIP = $_SESSION['nip'];
                    $query = $connect->query("SELECT * FROM data_pegawai WHERE NIP = '$NIP'")or die(mysqli_error($connect));
                    while($data = $query->fetch_array()){
                 ?>
          <div class="profile-usertitle-name">
            <?php echo ucwords($data['nama']); ?>
          </div>
          <div class="profile-usertitle-job">
            <?php echo ucwords($data['nama_jabatan']); ?>
          </div>
        <?php } ?>
        </div>
        <!-- SIDEBAR MENU -->
        <div class="profile-usermenu">
          <ul class="nav">
            <li>
              <a  href="#a" data-toggle="tab">
              <i class="glyphicon glyphicon-user"></i>
              Profil </a>
            </li>
             <li>
              <a  href="#b" data-toggle="tab">
              <i class="glyphicon glyphicon-home"></i>
              Data Penggajian </a>
            </li>
            <li>
              <a href="#c" data-toggle="tab">
              <i class="glyphicon glyphicon-ok text-muted"></i>
              Tasks </a>
            </li>
            <li>
              <a href="logoutaction.php">
              <i class="glyphicon glyphicon-flag"></i>
              Logout </a>
            </li>
          </ul>
        </div>
        <!-- END MENU -->
      </div>
      <!-- Side Bar END -->

      <div class="col-md-7">
              <div class="profile-content ">
              <div class="panel-body tab-content">

               <!-- Panel Data A-->
                <div class="tab-pane active" id="a">
                  <div class=" col-md-auto"> 
                    <table class="table table-user-information">
                      <tbody>
                        <!--Profile PHP-->
                        <?php 
                        include "../admin/config/koneksi.php";
                        $NIP = $_SESSION['nip'];
                      $view=mysqli_query($connect,"SELECT * from data_pegawai WHERE nip='$NIP'");
                      while($data=mysqli_fetch_array($view)){
                        ?>
                        <tr>
                        <td>NIP :</td>
                        <td><?php echo $data['nip']; ?></td>
                      </tr>
                      <tr>
                        <td>Nama :</td>
                        <td><?php echo $data['nama']; ?></td>
                      </tr>
                      <tr>
                        <td>Jenis Kelamin : </td>
                        <td><?php echo $data['jenis_kelamin']; ?></td>
                      </tr>
                      <tr>
                        <td>Tempat, Tanggal Lahir:</td>
                        <td><?php echo $data['tempat_lahir'].", ". $data['tgl_lahir'] ; ?></td>
                      </tr>
                        <td>Agama : </td>
                        <td><?php echo $data['Agama']; ?></td>
                      </tr>
                        <tr>
                        <td>Alamat : </td>
                        <td><?php echo $data['alamat']; ?></td>
                      </tr>
                        <td>Phone Number :</td>
                        <td><?php echo $data['nohp']; ?></td>     
                      </tr>
                      </tr>
                        <td>KTP :</td>
                        <td><?php echo $data['ktp']; ?></td>     
                      </tr>
                      </tr>
                        <td>NPWP :</td>
                        <td><?php echo $data['npwp']; ?></td>     
                      </tr>
                        <?php } ?>
                        <tr>
                          <td></td>
                          <td><a data-toggle="modal" href="#portfolioModal1" class="btn btn-primary pull-right">Edit Profile</a></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>

              <!-- Panel Data B-->
                <div class="tab-pane" id="b">
                  <div class=" col-md-auto"> 
                    <table class="table table-user-information">
                      <tbody>
                        <?php 

              function rupiah($nilai, $pecahan = 0) {
                  return number_format($nilai, $pecahan, ',', '.');
              }
              include "../admin/config/koneksi.php";
              $NIP = $_SESSION['nip'];
              $view=mysqli_query($connect,"SELECT * from data_pegawai JOIN data_gaji_golongan ON data_pegawai.id_golongan = data_gaji_golongan.golongan_ JOIN data_gaji ON data_pegawai.nama_jabatan = data_gaji.nama_jabatan JOIN tbl_statusk ON data_pegawai.kdstatusk = tbl_statusk.kdstatusk JOIN tbl_bank ON data_pegawai.id_bank = tbl_bank.id_bank JOIN data_anak ON data_pegawai.id_pegawai = data_anak.id_pegawai JOIN tbl_pendidikan ON data_pegawai.kdpndidik = tbl_pendidikan.kdpndidik WHERE nip='$NIP' AND (data_pegawai.status_pegawai = data_gaji.status_pegawai) AND (data_pegawai.masa_kerja = data_gaji_golongan.masa_kerja_)");
              while($row = $view->fetch_array()){
                $gapok =  $row['gaji_pokok_'];
                $tunjangan_suami_istri =  $row['tunjangan_suami_istri'];
                $tunjangan_anak =  $row['tunjangan_anak'];  
                $tunjangan_jabatan =  $row['tunjangan_jabatan'];
                $tunjangan_dosen =  $row['tunjangan_dosen'];
                $gaji_bersih = $gapok+$tunjangan_suami_istri+$tunjangan_anak+$tunjangan_jabatan+$tunjangan_dosen;
              ?>
                        <tr>
                       <td>Instansi:</td>
                        <td>Universitas Sumatera Utara</td>
                       </tr>
                      <tr>
                        <td>Jabatan:</td>
                        <td><?php echo $row['nama_jabatan'];?></td>
                      </tr>
                      <tr>
                        <td>Status Pegawai:</td>
                        <td><?php echo $row['status_pegawai'];?></td>
                      </tr>
                      <tr>
                        <td>Tunjangan Jabatan:</td>
                        <td>Rp. <?php echo $row['tunjangan_jabatan'];?></td>
                      </tr>
                      <tr>
                        <td>Tunjangan Dosen:</td>
                        <td><?php echo $row['tunjangan_dosen'];?></td>
                      </tr>
                      <tr>
                        <td>Tunjangan Anak</td>
                        <td><?php echo $row['tunjangan_anak'];?></td>
                      </tr>
                      <tr>
                        <td>Tunjangan Suami Istri</td>
                        <td><?php echo $row['tunjangan_suami_istri'];?></td>
                      </tr>
                      <tr>
                      <td>Golongan</td>
                      <td><?php echo $row['golongan_'];?></td>
                      </tr>
                      <tr>
                        <td>Masa Kerja</td>
                        <td><?php echo $row['masa_kerja_'];?></td>
                      </tr>
                        <tr>
                        <td>Gaji Pokok</td>
                        <td>Rp. <?php echo rupiah($row['gaji_pokok_']);?></td>
                      </tr>
                        <tr>
                        <td>Gaji Bersih</td>
                        <td>Rp. <?php echo rupiah($gaji_bersih);?></td>
                      </tr>

                      <?php } ?>
                        <td>Slip Gaji</td>
                        <td><a href="slipgaji.php"> Print Disini</a></td>     
                      </tr>
                    </tbody>
                    </table>
                  </div>
                </div>

                <!-- Panel Data C-->
                <div class="tab-pane" id="c">
                  <div class=" col-md-auto"> 
                    <table class="table table-user-information">
                      <tbody>
                        <!--Profile PHP-->
                         <tr>
              <th style="color: black; text-align: center;">No.</th>
              <th style="color: black; text-align: center;">Tanggal Agenda</th>
              <th style="color: black; text-align: center;">Subjek</th>
              <th style="color: black; text-align: center;">Detail Agenda</th>
             </tr>
             
           <?php
             
           include "../admin/config/koneksi.php";
           include "../admin/kalendar/fungsi_indotgl.php";
             
           $no = 1;
             
           $sql_1 = mysqli_query($connect,"SELECT * FROM t_kalendar_agenda ORDER BY tgl_acara ASC");
           while($a=mysqli_fetch_array($sql_1))
             {
             ?>
            
            <?php
            #Ubah menjadi format tanggal Indonesia untuk tanggal input dan tanggal maintenance
              $tgl_acara = tgl_indo($a['tgl_acara']);
              ?>
               
            <?php
            #Merapikan keluaran untuk format teks untuk keterangan
            $keterangan = nl2br($a['keterangan']);
            ?>
            
            <tr>
               <td width="50" align="center"><?php echo"$no"; ?></td>
               <td width="100" align="center"><?php echo"$tgl_acara"; ?></td>
                 <td width="250" align="center"><?php echo"$a[subjek]"; ?></td>
               <td width="325" align="center"><?php echo"$keterangan";?></td>
            </tr>
               
              <?php $no++; ?>
               
            <?php
            } 
            ?>
                      </tbody>
                    </table>
                  </div>
                </div>

               


              </div>
              </div>
          </div>
    </div>
</div>

<!--Modal 1-->   
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <!--content-->
        <div class="modal-content">
          <!-- Modal header -->
          <div class="modal-header">
            <p>Edit Profile</p>
          </div>
          <!--Modal Body-->
          <div class="modal-body">
            <div class="form-login">
              <form action="editaction.php" method="POST" enctype="multipart/form-data">
                <!--Edit PHP -->
                <?php
                include "../admin/config/koneksi.php";
                $query = $connect->query("SELECT * FROM tbl_user WHERE NIP = '$NIP'");
                while ($data = $query->fetch_array()) {
                ?>
              <!-- FORM EDIT -->
               <p>NIP :</p>
              <input type="text" name="nip" class="form-control input-sm chat-input" readonly value="<?php echo $data['nip'];?>" placeholder="NIP" required>
              <p>Nama :</p>
              <input type="text" name="nama" class="form-control input-sm chat-input" value="<?php echo $data['username'];?>" placeholder="NIP" required>
              <input type="text" name="id" value="<?php echo $data['id'];?>" hidden>
              </br>
              <p>Password Lama :</p>
              <input type="password" name="password1" class="form-control input-sm chat-input" placeholder="password" required>
              </br>
              <p>Password Baru :</p>
              <input type="password" name="password2" class="form-control input-sm chat-input" placeholder="password" required>
              </br>
              <p>E-Mail :</p>
              <input type="email" name="email" class="form-control input-sm chat-input" value="<?php echo $data['email'];?>" placeholder="Email" required>
              </br>
              <p>Change Picture :</p>
               <input type="file" name="foto">
              </br>
              </br>
            </div>
          </div>
          <!--Modal Footer-->
          <div class="modal-footer">
            <button type="submit" name="submit">Submit</button>
          </div>
          <?php } ?>
        </form>
        </div>
        <!--End content-->
      </div>
    </div>

    <div class="navbar navbar-inverse navbar-fixed-bottom">
        <div class="container">
            <p class="navbar-text pull-left">© 2017 - SisPa.info </p>
        </div>
    </div>

</body>
<?php } ?>
</html>