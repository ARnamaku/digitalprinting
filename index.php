<?php
session_start();
error_reporting(0);
 include"koneksi.php"; ?>	
<!DOCTYPE html>
<html lang="en">
<head>
<!--
New Event
http://www.templatemo.com/tm-486-new-event
-->
<title>DDIGITAL PRINTING</title>
<meta name="description" content="">
<meta name="author" content="">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/owl.carousel.css">
  
<!-- Main css -->
<link rel="stylesheet" href="css/style.css">

<!-- Google Font -->
<link href='https://fonts.googleapis.com/css?family=Poppins:400,500,600' rel='stylesheet' type='text/css'>

</head>
<?php 
  function tgl_indo($tanggal){
  $bulan = array (
    1 =>   'Januari',
    'Februari',
    'Maret',
    'April',
    'Mei',
    'Juni',
    'Juli',
    'Agustus',
    'September',
    'Oktober',
    'November',
    'Desember'
  );
  $pecahkan = explode('-', $tanggal);
  
  // variabel pecahkan 0 = tanggal
  // variabel pecahkan 1 = bulan
  // variabel pecahkan 2 = tahun
 
  return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}

   ?>
<body data-spy="scroll" data-offset="50" data-target=".navbar-collapse">

<!-- =========================
     PRE LOADER       
============================== -->
<div class="preloader">

	<div class="sk-rotating-plane"></div>

</div>


<!-- =========================
     NAVIGATION LINKS     
============================== -->
<div class="navbar navbar-fixed-top custom-navbar" role="navigation">
	<div class="container">

		<!-- navbar header -->
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a href="#" class="navbar-brand">DIGITAL PRINTING</a>
		</div>

		<div class="collapse navbar-collapse">

			<ul class="nav navbar-nav navbar-right">
				<li><a href="#intro" class="smoothScroll">Home</a></li>
				<li><a href="#overview" class="smoothScroll">Profil Kami</a></li>
				<li><a href="#paket" class="smoothScroll">Paket</a></li>
				
				<?php 
				$sql = mysqli_query($koneksi,"select * from kategori");
				while ($data = mysqli_fetch_array($sql)) {
					?> <li><a href="#<?php echo $data['id_kategori'] ?>" class="smoothScroll"><?php echo $data['nama_kategori'] ?></a></li> <?php
				}
				 ?>
				
				 <?php 
				 if (@$_SESSION['username']=='') {
				 	?>  <li><a href="#petunjuk" class="smoothScroll">Petunjuk Penggunaan</a></li>
				 	<li><a href="#register" class="smoothScroll">Register</a></li>
				<li><a href="#contact" class="smoothScroll">Hubungi Kami</a></li>
				 	<?php
				 }else{
				 	?> 
				 	<li><a href="#" data-toggle="modal" data-target="#editprofil" class="smoothScroll">Edit Profil Saya</a></li>
				 	<li><a href="#" data-toggle="modal" data-target="#login" class="smoothScroll">Profil Saya</a></li>
				 	<li><a href="#pesanan" class="smoothScroll">Pesanan Saya</a></li>


				<li><a href="logout.php" class="smoothScroll">Logout</a></li>
				 	 <?php
				 }
				  ?>

				
			</ul>

		</div>

	</div>
</div>




<!-- =========================
    INTRO SECTION   
============================== -->
<section id="intro" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="col-md-12 col-sm-12">
				<h1 class="wow fadeInUp" data-wow-delay="1.6s">DIGITAL PRINTING</h1>


				<?php 
				if ($_SESSION['username']=='') {
					?> 
					<a href="#" data-toggle="modal" data-target="#myModal" class="btn btn-lg btn-default smoothScroll wow fadeInUp hidden-xs" data-wow-delay="2.3s">LOGIN NOW</a>

	



				<a href="#register" class="btn btn-lg btn-danger smoothScroll wow fadeInUp" data-wow-delay="2.3s">REGISTER NOW</a>
					 <?php
				}else{
					?>  <?php
				}
				 ?>
				


				
			</div>


		</div>
	</div>
</section>

<?php include"profil_saya.php"; ?>
<?php include"editprofil.php"; ?>

<!-- =========================
    OVERVIEW SECTION   
============================== -->
<section id="overview" class="parallax-section">
	<div class="container">
		<div class="row">
			<?php 	
				$sql = mysqli_query($koneksi,"select * from menu where id_menu='1'");
				$d = mysqli_fetch_array($sql);
			 ?>

			<div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="0.6s">
				<br>
				<h3><?php echo $d['judul'] ?></h3>
				<?php echo $d['isi'] ?>
				<br><br><br><br><br><br><br>
			</div>
					
			

		</div>
	</div>
</section>

<section id="petunjuk" class="parallax-section">
	<div class="container">
		<div class="row">
			<br>
			<br>
			<br>
			<?php 	
				$sql = mysqli_query($koneksi,"select * from menu where id_menu='2'");
				$d = mysqli_fetch_array($sql);
			 ?>

			<div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="0.6s">
				<br>
				<h3><?php echo $d['judul'] ?></h3>
				<?php echo $d['isi'] ?>
				<br><br><br><br><br><br><br><br>
			</div>
					
			

		</div>
	</div>
</section>





<?php include"login.php"; ?>



<?php 
				if ($_SESSION['username']=='') {
					?> 
					

<!-- =========================
   REGISTER SECTION   
============================== -->
<section id="register" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="wow fadeInUp col-md-7 col-sm-7" data-wow-delay="0.6s">
				<h2>Registrasi Akun anda disini</h2>
				<h3>Anda dapat memesanan paket yang tersedia di DIGITAL PRINTING</h3>
			</div>

			<div class="wow fadeInUp col-md-5 col-sm-5" data-wow-delay="1s">
				<form action="" method="post">
					<input name="nama" type="text" class="form-control" id="firstname" placeholder="Nama Lengkap">
					<input name="username" type="text" class="form-control" id="lastname" placeholder="Username">
					<input name="password" type="password" class="form-control" id="lastname" placeholder="Password">
					<input name="no_hp" type="number" class="form-control" id="phone" placeholder="No Handphone">
					<input name="email" type="email" class="form-control" id="email" placeholder="Email">
					<input name="alamat" type="text" class="form-control" id="email" placeholder="Alamat">
					<div class="col-md-offset-6 col-md-6 col-sm-offset-1 col-sm-10">
						<input name="submit" type="submit" class="form-control" id="submit" value="REGISTER">
					</div>
					<?php 
					if(isset($_POST['submit'])){
						$pass = md5($_POST['password']);
						mysqli_query($koneksi,"insert into kustomer 
							values(null,'$_POST[nama]','$_POST[username]','$pass','$_POST[no_hp]','$_POST[email]','$_POST[alamat]')");
						?>  
						<script type="text/javascript">
							alert('Registrasi berhasil, silahkan login');
							window.location.href="index.php";
						</script>
						<?php
					}
					 ?>
					
				</form>
			</div>

			<div class="col-md-1"></div>

		</div>
	</div>
</section>

					 <?php
				}else{
					?>  <?php
				}
				 ?>





<!-- =========================
    SPEAKERS SECTION   
============================== -->
<section id="paket" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="col-md-12 col-sm-12 wow bounceIn">
				<div class="section-title"><br><br><br><br>
					<h2>Paket Fotografy</h2>
				</div>
			</div>

			<!-- Testimonial Owl Carousel section
			================================================== -->
			<?php 
			$sq = mysqli_query($koneksi,"select * from paket");
			while($da = mysqli_fetch_array($sq)){
				?> 
				<div class="col-md-3" data-wow-delay="0.9s">
					
						<img src="admin/image/<?php echo $da['gambar'] ?>" class="img-responsive" alt="speakers">
							<div class="speakers-thumb">
								<h3><?php echo $da['nama_paket'] ?></h3>
								<center><h4>Rp.<?php echo number_format($da['harga']) ?></h4></center><br>
								<a href="#" data-toggle="modal" data-target="#detail<?php echo $da['id_paket'] ?>"><button class="btn btn-primary">Detail Paket</button></a>


								<!-- Modal -->
<div class="modal fade" id="detail<?php echo $da['id_paket'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo $da['nama_paket'] ?></h4>
      </div>
      <div class="modal-body">
        <div class="row">
        	<div class="col-md-6">
        		<img src="admin/image/<?php echo $da['gambar'] ?>" class="img-responsive" alt="speakers">
        	</div>
        	<div class="col-md-6">
        		<h5>Harga : Rp.<?php echo number_format($da['harga']) ?></h5>
        		<?php echo $da['isi'] ?>
        	</div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



								<a href="#" data-toggle="modal" data-target="#booking<?php echo $da['id_paket'] ?>"><button class="btn btn-success">Booking</button></a>

									<!-- Modal -->
<div class="modal fade" id="booking<?php echo $da['id_paket'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Booking Paket <?php echo $da['nama_paket'] ?></h4>
      </div>
      <div class="modal-body">
        <div class="row">
        	<div class="col-md-6">
        		<img src="admin/image/<?php echo $da['gambar'] ?>" class="img-responsive" alt="speakers">
        	</div>
        	<div class="col-md-6">
        		<h5>Harga : Rp.<?php echo number_format($da['harga']) ?></h5>
        		<?php echo $da['isi'] ?>
        	</div>
        </div>
        <form action="pesan.php" method="post">
        <table class="table">
        	<tr>
        		<td>Tanggal</td>
        		<td>:</td>
        		<td><input type="date" name="tanggal" class="form-control" required=""></td>
        	</tr>
        </table>
      </div>
      <div class="modal-footer">
      	<input type="hidden" name="paket" value="<?php echo $da['id_paket'] ?>">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        <button type="submit" name="book" class="btn btn-success">Book Now</button>
      </div>
      	
      </form>
    </div>
  </div>
</div>
							</div>
					
				</div>
				 <?php
			}
			 ?>

				

				
		

		</div>
	</div>
</section>



<!-- =========================
    PROGRAM SECTION   
============================== -->
<section id="pesanan" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="0.6s">
				<div class="section-title"><br><br><br><br>
					<h2>Pesanan Saya</h2>
				</div>
			</div>

			<div data-wow-delay="0.9s">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li class="active"><a href="#fday" aria-controls="fday" role="tab" data-toggle="tab">Proses</a></li>
					<li><a href="#sday" aria-controls="sday" role="tab" data-toggle="tab">Selesai</a></li>
				</ul>
				<!-- tab panes -->
				<div class="tab-content">

					<div role="tabpanel" class="tab-pane active" id="fday">
						<table class="table">
          <tr>
            <td>ID order</td>
            <td>Nama Paket</td>
            <td>Tanggal Transaksi</td>
            <td>Tanggal Booking</td>
            <td>Status</td>
            <td colspan="2">Aksi</td>
          </tr>
          <?php 
          $sql = mysqli_query($koneksi,"select * from `order`,`paket` where order.id_paket=paket.id_paket 
            and id_kustomer='$_SESSION[id]' and order.status!='Lunas' order by order.id_order desc limit 1");
          while ($data = mysqli_fetch_array($sql)) {
            if ($data['status']=='Lunas') {
              
            }else{
              ?> 
            <tr>
              <td><?php echo $data['id_order'] ?></td>
              <td><small><?php echo $data['nama_paket'] ?></small></td>
              <td><small><?php echo tgl_indo($data['tanggal_transaksi']) ?></small></td>
              <td><small><?php echo tgl_indo($data['tanggal']) ?></small></td>
              <td><small><?php echo $data['status'] ?></small></td>
              <?php 
            
                if ($data['status']=='Menunggu') {
                ?> 
                 <td><a href="#" data-toggle="modal" data-target="#transfer<?php echo $data['id_order'] ?>"><small>Transfer</small></a>
                 	<?php include"transfer.php"; ?>

                  || 
                <a onclick="return confirm('Apakah anda yakin untuk membatalkan pesanan ?')" href="batal.php?id=<?php echo $data['id_order'] ?>"><small>Batal</small></a></td>

                 <?php
              }else{
                ?> 
                <td><a href="#" data-toggle="modal" data-target="#detailorder<?php echo $data['id_order'] ?>"><small>Detail</small></a>
                <?php include"detail.php"; ?>
                    || <a href="cetak.php?id=<?php echo $data['id_order'] ?>"> <small>Cetak</small></a>
                
                </td><?php
              } 
              
             
               ?>
             
            </tr>
             <?php
            }
            
          }
           ?>
        </table>
					</div>

					<div role="tabpanel" class="tab-pane" id="sday">
						<!-- program speaker here -->
						<table class="table">
          <tr>
            <td>ID order</td>
            <td>Nama Paket</td>
             <td>Tanggal Transaksi</td>
            <td>Tanggal Booking</td>
            <td>Status</td>
            <td colspan="2">Aksi</td>
          </tr>
          <?php 
          $sql = mysqli_query($koneksi,"select * from `order`,`paket` where order.id_paket=paket.id_paket 
            and id_kustomer='$_SESSION[id]' and order.status='Lunas' order by order.id_order desc limit 1");
          while ($data = mysqli_fetch_array($sql)) {
            if ($data['status']=='Lunas') {
              
            }else{
              ?> 
            <tr>
              <td><?php echo $data['id_order'] ?></td>
              <td><small><?php echo $data['nama_paket'] ?></small></td>
              <td><small><?php echo tgl_indo($data['tanggal_transaksi']) ?></small></td>
              <td><small><?php echo tgl_indo($data['tanggal']) ?></small></td>
              <td><small><?php echo $data['status'] ?></small></td>
             
                <td><a href="#" data-toggle="modal" data-target="#detailorder<?php echo $data['id_order'] ?>"><small>Detail</small></a>
                <?php include"detail.php"; ?>  </td>
             
            </tr>
             <?php
            }
            
          }
           ?>
        </table>
						
					</div>

					

				</div>

		</div>
	</div>
</section>


<!-- =========================
    CONTACT SECTION   
============================== -->
<section id="contact" class="parallax-section">
	<div class="container">
		<div class="row">

			

			<div class="wow fadeInUp col-md-5 col-sm-6" data-wow-delay="0.9s">
				<div class="contact_detail">
					<div class="section-title">
						<h2>Hubungi Kami dengan mengisi Form dibawah ini</h2>
					</div>
					<form action="" method="post">
						<input name="nama" type="text" class="form-control" id="name" placeholder="Name">
					  	<input name="email" type="email" class="form-control" id="email" placeholder="Email">
					  	<textarea name="pesan" rows="5" class="form-control" id="message" placeholder="Message"></textarea>
						<div class="col-md-6 col-sm-10">
							<input name="kirim" type="submit" class="form-control" id="submit" value="SEND">
						</div>
						<?php 
					if(isset($_POST['kirim'])){
						$pass = md5($_POST['password']);
						$date = date('Y-m-d');
						mysqli_query($koneksi,"insert into hubungi values(null,'$_POST[nama]','$_POST[email]','$_POST[pesan]','$date')");
						?>  
						<script type="text/javascript">
							alert('Pesan anda berhasil dkirim');
							window.location.href="index.php";
						</script>
						<?php
					}
					 ?>
					</form>
				</div>
			</div>

		</div>
	</div>
</section>


<!-- =========================
    FOOTER SECTION   
============================== -->
<footer>
	<div class="container">
		<div class="row">

			<div class="col-md-12 col-sm-12">
				<p class="wow fadeInUp" data-wow-delay="0.6s">Copyright &copy; 2020 Pesisir Barat 
                    
                    | Design: <a rel="nofollow" href="http://www.templatemo.com/page/1" target="_parent">Templatemo</a></p>

				<ul class="social-icon">
					<li><a href="#" class="fa fa-facebook wow fadeInUp" data-wow-delay="1s"></a></li>
					<li><a href="#" class="fa fa-twitter wow fadeInUp" data-wow-delay="1.3s"></a></li>
					<li><a href="#" class="fa fa-dribbble wow fadeInUp" data-wow-delay="1.6s"></a></li>
					<li><a href="#" class="fa fa-behance wow fadeInUp" data-wow-delay="1.9s"></a></li>
					<li><a href="#" class="fa fa-google-plus wow fadeInUp" data-wow-delay="2s"></a></li>
				</ul>

			</div>
			
		</div>
	</div>
</footer>


<!-- Back top -->
<a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>


<!-- =========================
     SCRIPTS   
============================== -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>