
<!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Profil Saya</h4>
      </div>
      <div class="modal-body">
        <?php 
        $sq = mysqli_query($koneksi,"select * from kustomer where id_kustomer='$_SESSION[id]'");
        $d= mysqli_fetch_array($sq);
         ?>
        <table class="table">
          <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><?php echo $d['nama_lengkap'] ?></td>
          </tr>
          <tr>
            <td>Username</td>
            <td>:</td>
            <td><?php echo $d['username'] ?></td>
          </tr>
          <tr>
            <td>No Hp</td>
            <td>:</td>
            <td><?php echo $d['no_hp'] ?></td>
          </tr>
          <tr>
            <td>Email</td>
            <td>:</td>
            <td><?php echo $d['email'] ?></td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?php echo $d['alamat'] ?></td>
          </tr>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>