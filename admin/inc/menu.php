

     <div class="row">
        <div class="col-md-12">
          <!-- Advanced Tables -->
          <div class="panel panel-default">
            <div class="panel-heading">
               Menu Sistem
            </div>
            <div class="panel-body">
              <div class="table-responsive">
                <?php 
                $sql = mysqli_query($koneksi,"select * from menu where id_menu='$_GET[id]'");
                $data = mysqli_fetch_array($sql);
                 ?>
                 <form action="" method="post">
              <table class="table">
               <tr>
                 <td>Judul</td>
                 <td>:</td>
                 <td><input class="form-control " type="text" name="judul" value="<?php echo $data['judul'] ?>"></td>
               </tr>
               <tr>
                 <td>Isi</td>
                 <td>:</td>
                 <td>
                  <textarea name='isi' id='text-ckeditor'><?php echo $data['isi'] ?></textarea>
<script>CKEDITOR.replace('text-ckeditor');</script></td>
               </tr>
               <tr>
                 <td colspan="3">
                   <input type="submit" name="ubah" value="Ubah" class="btn btn-primary">
                 </td>
               </tr>
               </table>
               <?php 
               if (isset($_POST['ubah'])) {
                 mysqli_query($koneksi,"UPDATE `menu` SET judul='$_POST[judul]',isi='$_POST[isi]' where id_menu='$_GET[id]'");
                 ?> 
                <script type="text/javascript">
                    alert ("Menu berhasil diubah");
                    window.location.href="media.php?page=menu&id=<?php echo $_GET[id] ?>";
                </script>
            <?php
               }
                ?>
</form>
                  </div>
              </div>
            </div>
          </div>
  </div> 
    

                   
                       