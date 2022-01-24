<div class="panel panel-default">
<div class="panel-heading">
		Tambah Data paket 
	</div> 
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    
                                    <form method="POST" action="" enctype="multipart/form-data">
                 
                                         <div class="form-group">
                                            <label>Nama paket</label>
                                            <input class="form-control" name="nama_paket" />
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Harga</label>
                                            <input class="form-control" name="harga" />
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <textarea name='isi' id='text-ckeditor'></textarea>
<script>CKEDITOR.replace('text-ckeditor');</script>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Gambar</label>
                                            <input type="file" class="form-control" name="gambar" />
                                            
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
        $sumber = @$_FILES['gambar']['tmp_name'];
        $target ='image/';
        $nama_gambar = @$_FILES['gambar']['name'];

        if ($_POST['nama_paket']=='' || $_POST['isi']=='' || $_POST['harga']=='' || $nama_gambar=='') {
          echo "Data paket tidak boleh kosong, Silahkan isi semua form terlebih dahulu";
        }else{
          $pindah = move_uploaded_file($sumber, $target.$nama_gambar);
          if ($pindah)
          {
                $query = mysqli_query($koneksi,"INSERT INTO `paket` (id_paket,nama_paket,isi,gambar,harga) VALUES (NULL,'$_POST[nama_paket]','$_POST[isi]',
                    '$nama_gambar','$_POST[harga]')");
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

                                 </form>