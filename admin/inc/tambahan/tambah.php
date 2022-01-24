<div class="panel panel-default">
<div class="panel-heading">
		Tambah Data paket 
	</div> 
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    
                                    <form method="POST" action="" enctype="multipart/form-data">
                 
                                         <div class="form-group">
                                            <label>Nama Tambahan</label>
                                            <input class="form-control" name="nama" />
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Harga</label>
                                            <input class="form-control" name="harga" />
                                            
                                        </div>
                                        
                                        


                                         

 										
                                        <div class="form-group">
											
											<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">        
                                        </div>
                                  </div>

                               </div>
</div>
</div>
</div>

<?php
     
      if (isset($_POST['simpan'])) 
      {
        mysqli_query($koneksi,"INSERT INTO `tambahan` VALUES (NULL,'$_GET[id]','$_POST[nama]','$_POST[harga]')");
                 ?> 
                <script type="text/javascript">
                    alert ("Data Paket Tambahan Berhasil Disimpan");
                    window.location.href="media.php?page=tambahan&id=<?php echo $_GET[id] ?>";
                </script>
            <?php
          

        
      }
?>

                                 </form>