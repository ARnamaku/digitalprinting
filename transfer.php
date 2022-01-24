
			<!-- Modal -->
<div class="modal fade" id="transfer<?php echo $data['id_order'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Transfer Pemesanan</h4>
      </div>
      <div class="modal-body">
        <form action="" method="post" enctype="multipart/form-data">
        	<table class="table">
            <tr>
              <th colspan="3"><center>Silahkan transfer dengan keterangan dibawah ini</center></th>
            </tr>
            <tr>
              <td>Bank</td>
              <td>:</td>
              <td>BCA</td>
            </tr>
            <tr>
              <td>Atas Nama</td>
              <td>:</td>
              <td>Niza Fotografy</td>
            </tr>
             <tr>
              <td>Nomor Rekening</td>
              <td>:</td>
              <td>584598-545-32434</td>
            </tr>
             <tr>
              <td>Sebesar (Total transfer anda)</td>
              <td>:</td>
              <td>Rp.<?php echo number_format($data['harga']) ?></td>
            </tr>
            <tr>
                <td colspan="3"><i>jika pembayaran dengan DP min 50% dari harga paket</i></td>
            </tr>
            <tr>
                <td>Minimal DP</td>
                <td>:</td>
                <td>Rp. 
                    <?php 
                        $dp = ($data['harga']*0.5);
                        echo number_format($dp);
                    ?>
                </td>
            </tr>
            <tr>
        			<td>Jumlah Transfer</td>
        			<td>:</td>
        			<td><input type="number" name="jumlah" class="form-control"></td>
        		</tr>
        		<tr>
        			<td>Bukti Transfer</td>
        			<td>:</td>
        			<td><input type="file" name="gambar" class="form-control"></td>
        		</tr>
        		<tr>
        			<td colspan="3">
        				<input type="submit" name="transfer" value="Kirim Sekarang" class="btn btn-primary">
        			</td>
        		</tr>
        	</table>
        	<?php 

        	if(isset($_POST['transfer'])){
        		date_default_timezone_set('Asia/Jakarta');
        $tanggal = date('d-m-Y H:i:s');

        $sumber = @$_FILES['gambar']['tmp_name'];
        $target ='images/';
        $nama_gambar = @$_FILES['gambar']['name'];

        $pindah = move_uploaded_file($sumber, $target.$nama_gambar);
          if ($pindah)
          {
                mysqli_query($koneksi,"UPDATE `order` SET `status` = 'Transfer' WHERE `order`.`id_order` = '$data[id_order]'");
                mysqli_query($koneksi,"INSERT INTO bukti_tr VALUES 
                  (null,'$data[id_order]','$tanggal','$nama_gambar','$_POST[jumlah]')");

                 ?> 
                <script type="text/javascript">
                    alert ("Data Berhasil Dikirim");
                    window.location.href="index.php";
                </script>
            <?php
          }else{
            ?> 
                <script type="text/javascript">
                    alert ("Eror");
                    window.location.href="index.php";
                </script>
            <?php
          }
        	}




        	 ?>
        </form>
      </div>
      
    </div>
  </div>
</div>
