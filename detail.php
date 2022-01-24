
			<!-- Modal -->
<div class="modal fade" id="detailorder<?php echo $data['id_order'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Detail Pesanan</h4>
      </div>
      <div class="modal-body">
        <form action="" method="post" enctype="multipart/form-data">
        	<table class="table">
            <tr>
              <th colspan="3"><center>Detail Pesanan Anda</center></th>
            </tr>
            <tr>
              <td>Paket</td>
              <td>:</td>
              <td><?php echo $data['nama_paket'] ?></td>
            </tr>
            <tr>
              <td>Harga</td>
              <td>:</td>
              <td>Rp.<?php echo number_format($data['harga']) ?></td>
            </tr>
             <tr>
              <td>Tanggal Transaksi</td>
              <td>:</td>
              <td><?php echo tgl_indo($data['tanggal_transaksi']) ?></td>
            </tr>
             <tr>
              <td>Tanggal Booking</td>
              <td>:</td>
              <td><?php echo tgl_indo($data['tanggal']) ?></td>
            </tr>
            
            
            <tr>
                <th colspan="3"><center>Detail Transfer</center></th>
            </tr>
            <?php 
                $s = mysqli_query($koneksi,"select bukti_tr.tanggal,bukti_tr.jumlah_tr,bukti_tr.gambar_bukti from bukti_tr where id_order='$data[id_order]'");
                $da= mysqli_fetch_array($s);
            ?>
            <tr>
                <td>Tanggal Transfer</td>
                <td>:</td>
                <td><?php echo $da['tanggal'] ?></td>
            </tr>
            <tr>
                <td>Jumlah Transfer</td>
                <td>:</td>
                <td><?php echo number_format($da['jumlah_tr']) ?></td>
            </tr>
            <tr>
                <td>Bukti</td>
                <td>:</td>
                <td><img src="images/<?php echo $da['gambar_bukti'] ?>" width="100%"></td>
            </tr>
        		
        		
        	</table>
        
        </form>
      </div>
      
    </div>
  </div>
</div>
