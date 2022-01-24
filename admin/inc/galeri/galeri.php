
<?php
//if(empty($_SESSION['aspirasiname'])){
//    echo "Not found!";
//} else {
    switch ($_GET['act']) {
    // PROSES VIEW DATA kasmasuk //      
      case 'view':
      ?>


  <!-- Content Header (Page header) -->
        <section class="content-header">
        <h1> Data Galeri </h1>
            <ol class="breadcrumb">
            <li><a href="?page=dashboard"><i class="fa fa-dashboard"></i> Beranda</a></li>
            <li class="active"><a href="?page=galeri&act=view">Data galeri</a></li>
             </ol>
        </section>
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
    <div class="box-header">
   
    </div><!-- /.box-header -->
              <!-- general form elements -->
              <div class="box box-primary">
                  <div class="box-body">
                    <a href="?page=galeri&act=add"> <button type="button" class="btn btn-primary"> Tambah Data </button> </a>
                  <div class="table-responsive">
                  <table class="table table-hover table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Keterangan</th>
                        <th>Gambar</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    $tampil=mysqli_query($koneksi,"SELECT * FROM galeri order by galeri.id_galeri asc");
                    $no = 1;
                      while ($r=mysqli_fetch_array($tampil)){
                    ?>
                        <tr>
                        <td><?php echo $no++ ;?></td>
                        <td><?php echo "$r[ket]"?></td>
                        <td><img src="image/<?php echo $r['gambar'] ?>" width="75"></td>
                    
    
                       
                        <td><a href="?page=galeri&act=edit&id=<?php echo $r['id_galeri']?>"><button type="button" class="btn bg-orange"><i class="fa fa-pencil-square-o"></i></button></a></td>
                        <td><a href="?page=galeri&act=delete&id=<?php echo $r['id_galeri']?>"><button type="button" class="btn btn-primary" onclick="return confirm('Apakah anda yakin akan menghapusnya?');"><i class = "fa fa-trash-o"></i></button></a></td>
                        </tr>

                    <?php
                    }
                    ?>
                    </tbody>
                  </table>
                  </div><!-- /.box-body -->
              </div>
              </div><!-- /.box -->
              </div> <!-- /.col -->
  </div>
    <!-- /.row (main row) -->
</section> <!-- /.content -->
    <?php
      break;
      // PROSES TAMBAH DATA kasmasuk //
      case 'add':
      if (isset($_POST['add'])) 
      {
        date_default_timezone_set('Asia/Jakarta');
        $tanggal = date('d-m-Y H:i:s');

        $sumber = @$_FILES['gambar']['tmp_name'];
        $target ='image/';
        $nama_gambar = @$_FILES['gambar']['name'];

        $pindah = move_uploaded_file($sumber, $target.$nama_gambar);
          if ($pindah)
          {
                $query = mysqli_query($koneksi,"INSERT INTO galeri VALUES (null,'$_POST[nama]','$nama_gambar')");
                 ?> 
                <script type="text/javascript">
                    alert ("Data Berhasil Disimpan");
                    window.location.href="media.php?page=galeri&act=view";
                </script>
            <?php
          }else{
            ?> 
                <script type="text/javascript">
                    alert ("Eror");
                    window.location.href="media.php?page=galeri&act=add";
                </script>
            <?php
          }
      }
              ?>

        <!-- Content Header (Page header) -->
        <section class="content-header">
        <h3> Tambah Data galeri </h3>
            <ol class="breadcrumb">
            <li><a href="?page=dashboard"><i class="fa fa-dashboard"></i> Beranda</a></li>
            <li class="active"><a href="?page=galeri&act=view">Data galeri</a></li>
            <li class="active">Tambah Data galeri</li>
             </ol>
        </section>

<!-- Main content -->
<section class="container">
  <div class="row">
    <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-primary">
                  <div class="box-body">
                  <!-- form start -->
                <form role="form" method ="POST" action="" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama Galeri</label>
                      <input type="text" class="form-control" id="judul" name="nama" placeholder="Judul galeri" required data-fv-notempty-message="Tidak boleh kosong">
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleInputEmail1">Gambar</label>
                      <input type="file" name="gambar">
                    </div>
                   
                   
                  </div><!-- /.box-body -->

              </div><!-- /.box -->
              </div> <!-- /.col -->

              </div> <!-- /.row -->

          
            <!-- Tombol Bagian Bawah -->

            <div class="row">
            <!-- left column -->
              <div class="col-md-4 col-md-offset-5">

              <button type="submit" name = 'add' class="btn btn-primary">Simpan</button>
              &nbsp;
              <button type="reset" class="btn btn-success">Reset</button>
                  
            </form>
                  </div><!-- /.box-body -->
              </div><!-- /.box -->
              </div> <!-- /.col -->
  </div>
    <!-- /.row (main row) -->
</section> <!-- /.content -->
    </div><!-- /.container -->


       <?php
      break;
      // PROSES EDIT DATA kasmasuk //
      case 'edit':
      $sumber = @$_FILES['gambar']['tmp_name'];
                 $target ='image/';
                 $nama_gambar = @$_FILES['gambar']['name'];
      $d = mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM `galeri` WHERE id_galeri='$_GET[id]'"));
            if (isset($_POST['update'])) 
            {
              if ($nama_gambar=='') 
              {
                mysqli_query($koneksi,"UPDATE galeri SET ket='$_POST[ket]' WHERE id_galeri='$_GET[id]'");
                ?> 
                <script type="text/javascript">
                    
                    alert ("Data Berhasil Diubah");
                    window.location.href="media.php?page=galeri&act=view";
                </script>
                <?php
              }else
              {
                 
                 $pindah = move_uploaded_file($sumber, $target.$nama_gambar);
                  if ($pindah)
                  
                  {
                    mysqli_query($koneksi,"UPDATE galeri SET ket='$_POST[ket]',gambar='$nama_gambar' WHERE id_galeri='$_GET[id]'");
                    ?> 
                    <script type="text/javascript">
                        
                        alert ("Data Berhasil Diubah");
                        window.location.href="media.php?page=galeri&act=view";
                    </script>
                    <?php
                  }
              }
                
                
          }
              ?>



<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
              <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-body">
                  <!-- form start -->
                <form role="form" method = "POST" action="" enctype="multipart/form-data">
                 <div class="box-body">
                    <div class="box-body">
                   
                    <div class="form-group">
                      <label for="exampleInputEmail1">Keterangan</label>
                      <textarea name="ket" class="form-control"><?php echo $d['ket'] ?></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Gambar</label>
                      <input type="file" name="gambar"><img src="../img/<?php echo $d['gambar'] ?>" width="50">
                    </div>
                   
                   
                  </div><!-- /.box-body -->
                  </div><!-- /.box-body -->



              </div><!-- /.box -->
              </div> <!-- /.col -->

              </div> <!-- /.row -->

          
            <!-- Tombol Bagian Bawah -->

            <div class="row">
            <!-- left column -->
              <div class="col-md-4 col-md-offset-5">

              <button type="submit" name = 'update' class="btn btn-primary">Update</button>
              &nbsp;
              <button type="reset" class="btn btn-success">Reset</button>
                  
            </form>
            </div><!-- /.box-body -->
          </div><!-- /.box -->
        </div> <!-- /.col -->
  
    <!-- /.row (main row) -->
</section> <!-- /.content -->
   

    <?php
    break;

    // PROSES HAPUS DATA PENGGUNA //
      case 'delete':
      mysqli_query($koneksi,"DELETE FROM galeri WHERE id_galeri='$_GET[id]'");
      echo "<script>window.location='media.php?page=galeri&act=view'</script>";
      break;

    }
    ?>
  