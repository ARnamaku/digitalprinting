<?php 
    $id = @$_GET['id'];
    $dt = mysqli_query($koneksi,"select * from paket where id_paket='$id'");
    $data = mysqli_fetch_array($dt);
 ?>
<div class="panel panel-default">
<div class="panel-heading">
		Update Data paket 
	</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    
                                    <form method="POST" action="" enctype="multipart/form-data">
                                         
                                          <div class="form-group">
                                            <label>Nama paket</label>
                                            <input class="form-control" name="nama_paket" value="<?php echo $data['nama_paket'] ?>" />
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Harga</label>
                                            <input class="form-control" name="harga" value="<?php echo $data['harga'] ?>" />
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <textarea name='isi' id='text-ckeditor'><?php echo $data['isi'] ?></textarea>
<script>CKEDITOR.replace('text-ckeditor');</script>
                                            
                                        </div> 
                                        <div class="form-group">
                                            <label>Gambar</label>
                                            <input class="form-control" type="file" name="gambar" />
                                            
                                        </div> 
                                        <img src="image/<?php echo $data['gambar'] ?>" width="100">
                                        
 										
                                        <div class="form-group">
											
											<input type="submit" name="ubah" value="Ubah" class="btn btn-primary">        
                                        </div>
                                  </div>

                                 </form>
                               </div>
</div>
</div>
</div>

<?php 
      if (isset($_POST['ubah'])) 
      {

        $sumber = @$_FILES['gambar']['tmp_name'];
        $target ='image/';
        $nama_gambar = @$_FILES['gambar']['name'];
        if ($nama_gambar=='') {
          mysqli_query($koneksi,"UPDATE `paket` SET nama_paket='$_POST[nama_paket]',isi='$_POST[isi]',
                  harga='$_POST[harga]' where id_paket='$_GET[id]'");
                 ?> 
                <script type="text/javascript">
                    alert ("Data Paket Berhasil Diubah");
                    window.location.href="media.php?page=paket";
                </script>
            <?php
        }else{
          $pindah = move_uploaded_file($sumber, $target.$nama_gambar);
          if ($pindah)
          {
            mysqli_query($koneksi,"UPDATE `paket` SET nama_paket='$_POST[nama_paket]',isi='$_POST[isi]',gambar='$nama_gambar',
                  harga='$_POST[harga]' where id_paket='$_GET[id]'");
                 ?> 
                <script type="text/javascript">
                    alert ("Data Paket Berhasil Disimpan");
                    window.location.href="media.php?page=paket";
                </script>
            <?php
          }else{
            ?> 
                <script type="text/javascript">
                    alert ("Eror");
                    window.location.href="media.php?page=paket";
                </script>
            <?php
          }
        }
        
      }
?>