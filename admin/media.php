<?php
error_reporting(0);
include "../koneksi.php";
session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administrator DIGITAL PRINTING</title>
  <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <link rel="stylesheet" href="assets/css/AdminLTE.min.css">
   <link rel="stylesheet" href="assets/css/skins/_all-skins.min.css">
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

    <link rel="stylesheet" href="grap/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="grap/assets/css/ilmudetil.css">

<script src="ckeditor/ckeditor.js"></script>
 
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">ADMIN</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Selamat datang <?php echo $_SESSION['level'] ?>|| <a href="logout.php" class="btn btn-danger square-btn-adjust">Keluar</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
        
        
          <?php 
          if ($_SESSION['level']=='admin') {
            ?>
             <li>
                        <a  href="media.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a  href="?page=menu&id=1"><i class="fa fa-dashboard"></i> Tentang</a>
                    </li>
                    <li>
                        <a  href="?page=menu&id=2"><i class="fa fa-dashboard"></i> Petunjuk Penggunaan</a>
                    </li>

                    <li>
                        <a  href="media.php?page=galeri&act=view"><i class="fa fa-book"></i>Data Galeri</a>
                    </li>
                    <li>
                        <a  href="media.php?page=kustomer"><i class="fa fa-user"></i>Data Pelanggan</a>
                    </li>
                    <li>
                        <a  href="media.php?page=paket"><i class="fa fa-book"></i>Data Paket</a>
                    </li>
                   
                   <li>
                        <a  href="media.php?page=order"><i class="fa fa-user"></i>Data Pemesanan</a>
                    </li>
                    <li>
                        <a  href="media.php?page=laporan"><i class="fa fa-book"></i>Laporan Pendapatan</a>
                    </li>
                  
             <?php
          }else{
            ?> 
             <li>
                        <a  href="media.php"><i class="fa fa-home"></i>Home</a>
                    </li>
            <li>
                        <a  href="media.php?page=laporan"><i class="fa fa-book"></i>Laporan Pendapatan</a>
                    </li>
                    
             <?php
          }
           ?>
                   


                     

                     
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">

                       <?php 
       $page = @$_GET["page"];
      $action =@$_GET["action"];
      if ($page == "kustomer") 
      {
        if($action =="tambah")
        {
          include "inc/kustomer/tambah.php";
        }
        else if ($action =="ubah") 
        {
          include "inc/kustomer/edit.php";
        }
        else if ($action =="hapus") 
        {
          include "inc/kustomer/hapus.php";
        }
        else
        {
          include"inc/kustomer/lihat.php";
        }
      }
     
      else if ($page == 'tr') {
        include"inc/bukti/lihat.php";
      }
	  else if ($page == 'galeri') {
        include"inc/galeri/galeri.php";
      }
	  
      else if ($page == 'menu') {
        include"inc/menu.php";
      }
      else if ($page == 'grafik') {
        include"inc/grafik.php";
      }
      elseif ($page == "paket") 
      {
        if($action =="tambah")
        {
          include "inc/paket/tambah.php";
        }
        else if ($action =="ubah") 
        {
          include "inc/paket/edit.php";
        }
        
        else if ($action =="hapus") 
        {
          include "inc/paket/hapus.php";
        }
        else
        {
          include"inc/paket/lihat.php";
        }
      }
      elseif ($page == "tambahan") 
      {
        if($action =="tambah")
        {
          include "inc/tambahan/tambah.php";
        }
        else if ($action =="ubah") 
        {
          include "inc/tambahan/edit.php";
        }
        
        else if ($action =="hapus") 
        {
          include "inc/tambahan/hapus.php";
        }
        else
        {
          include"inc/tambahan/lihat.php";
        }
      }
      elseif ($page == "karyawan") 
      {
        
          include"inc/karyawan/lihat.php";
        
      }
      elseif ($page == "order") 
      {
        if($action =="tambah")
        {
          include "inc/order/tambah.php";
        }
        else if ($action =="ubah") 
        {
          include "inc/order/edit.php";
        }
        
        else if ($action =="hapus") 
        {
          include "inc/order/hapus.php";
        }
        else
        {
          include"inc/order/lihat.php";
        }
      }
      elseif ($page == "laporan") 
      {
       
          include"inc/laporan/laporan.php";
        
      }
      elseif ($page == "gaji") 
      {
       
          include"inc/gaji/gaji.php";
        
      }
	  
         

      else if($page =="pesan")
      {
        if($action =="hapus")
        {
          include"inc/kontak/hapus.php";
        }
        else if ($action =="detail") 
        {
          include "inc/kontak/detail.php";
        }
        else
        {
          include"inc/kontak/lihat.php";
        }
      }
      else if ($page == "")
      {
        include"admin.php";
      }
      else
      {
        echo "halaman tidak ditemukan guys";
      }
   ?>

                    </div>
                 </div>
                 <!-- /. ROW  -->
                 <hr />
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    

    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="assets/js/dashboard.js"></script>
    
   
</body>
</html>
