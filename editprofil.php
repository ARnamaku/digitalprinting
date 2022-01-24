
<!-- Modal -->
<div class="modal fade" id="editprofil" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Profil Saya</h4>
      </div>
      <div class="modal-body">
        <?php 
        $sq = mysqli_query($koneksi,"select * from kustomer where id_kustomer='$_SESSION[id]'");
        $d= mysqli_fetch_array($sq);
         ?>
         <form action="edit.php" method="post">
        <table class="table">
          <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><input type="text" name="nama" class="form-control" value="<?php echo $d['nama_lengkap'] ?>"></td>
          </tr>
          <tr>
            <td>Username</td>
            <td>:</td>
            <td><input type="text" name="username" class="form-control" value="<?php echo $d['username'] ?>"></td>
          </tr>
          <tr>
            <td>No Hp</td>
            <td>:</td>
            <td><input type="text" name="no_hp" class="form-control" value="<?php echo $d['no_hp'] ?>"></td>
          </tr>
          <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="text" name="email" class="form-control" value="<?php echo $d['email'] ?>"></td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type="text" name="alamat" class="form-control" value="<?php echo $d['alamat'] ?>"></td>
          </tr>
        </table>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" name="edit" class="btn btn-primary">Edit Sekarang</button>
      </div>
      
      </form>
    </div>
  </div>
</div>