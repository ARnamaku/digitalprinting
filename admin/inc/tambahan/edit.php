<?php 
    $id = @$_GET['id'];
    $dt = mysqli_query($koneksi,"select * from tambahan where id_tambahan='$id'");
    $data = mysqli_fetch_array($dt);
 ?>
<div class="panel panel-default">
<div class="panel-heading">
		Update Data tambahan 
	</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    
                                    <form method="POST" action="" enctype="multipart/form-data">
                                         
                                         <div class="form-group">
                                            <label>Nama Tambahan</label>
                                            <input class="form-control" value="<?php echo $data['nama'] ?>" name="nama" />
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Harga</label>
                                            <input class="form-control" value="<?php echo $data['hrg'] ?>" name="harga" />
                                            
                                        </div>
                                        
 										
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

        
          mysqli_query($koneksi,"UPDATE `tambahan` SET nama='$_POST[nama]',
                  hrg='$_POST[harga]' where id_tambahan='$_GET[id]'");
                 ?> 
                <script type="text/javascript">
                    alert ("Data tambahan Berhasil Diubah");
                    window.location.href="media.php?page=paket";
                </script>
            <?php
        
        
      }
?>