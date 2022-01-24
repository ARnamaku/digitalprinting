<?php 
  if (@$_GET['id']=='') {
    ?>  
    <div class="row">
        <div class="col-md-12">
          <!-- Advanced Tables -->
          <div class="panel panel-default">
            <div class="panel-heading">
               Data Pemesanan
            </div>
            <div class="panel-body">
              <div class="table-responsive">
                <table class="table">
                 <thead>
    <tr>
      <th>No. Order</th>
      <th>Nama Pemesan</th>
      <th>Tanggal Pemesanan</th>
      <th>Nama Paket</th>
      <th>Status</th>
      <th>Detail</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $date = date('Y-m-d');
    $sql = mysqli_query($koneksi,"select * from `order`,`kustomer`,`paket` where paket.id_paket=order.id_paket 
      and kustomer.id_kustomer=order.id_kustomer order by order.id_order desc");
    while ($data = mysqli_fetch_array($sql)) {
      ?> 
      <tr>
      <td><?php echo $data['id_order'] ?></td>
      <td><?php echo $data['nama_lengkap'] ?></td>
      <td><?php echo $data['tanggal'] ?></td>
      <td><?php echo $data['nama_paket'] ?></td>
      <td><?php echo $data['status'] ?></td>
      <td><a href="?page=order&id=<?php echo $data['id_order'] ?>"><button class="btn btn-primary">Detail</button></a></td>
    </tr>
       <?php
    }
     ?></tbody>
  </table>

                  </div>
              </div>
            </div>
          </div>
  </div> 
    <?php
  }else{
    ?> 
     <div class="row">
        <div class="col-md-12">
          <!-- Advanced Tables -->
          <div class="panel panel-default">
            <div class="panel-heading">
               Detail Data Pemesanan
            </div>
            <div class="panel-body">
              <div class="table-responsive">
                <?php 
                $sql = mysqli_query($koneksi,"select * from `order`,`kustomer`,`paket` where order.id_paket=paket.id_paket 
                  and order.id_kustomer=kustomer.id_kustomer and order.id_order='$_GET[id]'");
                $data = mysqli_fetch_array($sql);
                 ?>
              <table class="table">
                <tr>
                  <th colspan="3"><center>BIODATA PEMESAN</center></th>
                </tr>
                <tr>
                  <td>No order</td>
                  <td>:</td>
                  <td><?php echo $data['id_order'] ?></td>
                </tr>
                <tr>
                  <td>Nama Lengkap</td>
                  <td>:</td>
                  <td><?php echo $data['nama_lengkap'] ?></td>
                </tr>
                <tr>
                  <td>Alamat</td>
                  <td>:</td>
                  <td><?php echo $data['alamat'] ?></td>
                </tr>
                <tr>
                  <td>No HP</td>
                  <td>:</td>
                  <td><?php echo $data['no_hp'] ?></td>
                </tr>
        <?php 
          $sq = mysqli_query($koneksi,"select * from bukti_tr where id_order='$_GET[id]'");
          $dd = mysqli_num_rows($sq);
          $de = mysqli_fetch_array($sq);
          if($dd!='0'){
            ?> 
            <tr>
                <td>Jumlah Transfer</td>
                <td>:</td>
                <td>Rp.<?php echo number_format($de['jumlah_tr']) ?></td>
            </tr>
          <tr>
                  <td>Bukti Trasnsfer</td>
                  <td>:</td>
                  <td><a href="../images/<?php echo $de['gambar_bukti'] ?>" target="_blank"><img src="../images/<?php echo $de['gambar_bukti'] ?>" width="100"></a></td>
                </tr>
            <?php
          }else{
            ?> 
             
            <?php
          }
        ?>
        
               
                
               
                  <form action="" method="post">
                <tr>
                  <td>Status</td>
                  <td>:</td>
                  <td>
                    <select name="status" class="form-control">
                      <option value="<?php echo $data['status'] ?>"><?php echo $data['status'] ?></option>
                      <option value="Selesai">Selesai</option>
                      <option value="lunas">Lunas</option>
                      <option value="DP Sesuai">DP Sesuai</option>
                      <option value="tolak">Tolak</option>
                    </select>
                  </td>
                </tr>
               
                <tr>
                  <td colspan="3"><input type="submit" name="simpan" value="Submit" class="btn btn-primary"></td>
                </tr>
                <?php 
                if (isset($_POST['simpan'])) {
                 
                     mysqli_query($koneksi,"update `order` set status='$_POST[status]' where id_order='$_GET[id]'");
                     if($_POST['status']=='Selesai'){
                         
                         
                                                           $kode = $data['id_order'];
                                                           $alamatEmail = $data['email'];
                                                                
                                                                	require("class.phpmailer.php");
                                    
                                    $mail = new PHPMailer();
                                    
                                    $mail->IsSMTP();
                                    $mail->Host = "mail.bedahkasus.com";
                                    
                                    $mail->SMTPAuth = true;
                                    $mail->SMTPSecure = "ssl";
                                    $mail->Port = 465;
                                    $mail->Username = "noreply@bedahkasus.com";
                                    $mail->Password = "347610Tgmby";
                                    
                                    $mail->From = "noreply@bedahkasus.com";
                                    $mail->FromName = "Niza Fotograpy";
                                    $mail->AddAddress($alamatEmail);
                                    
                                    $mail->IsHTML(true);
                                    $mail->Subject = "Konfirmasi Pemesanan Niza Fotografy";
                                    $mail->Body = "Pesanan anda dengan kode pemesanan ".$kode." Terimaksih telah menggunakan jasa kami \n\n 
                                    	\n\n PESAN NO-REPLY";
                                    	// cek status pengiriman email
                                    	if(!$mail->Send())
                                    	{ 
                                             ?> 
                    <script type="text/javascript">
                      alert ("Status berhasil diubah");
                      window.location.href="media.php?page=order";
                    </script>
                    <?php
                                    	    
                                    	}else{
                                    	     ?> 
                    <script type="text/javascript">
                      alert ("Status berhasil diubah");
                      window.location.href="media.php?page=order";
                    </script>
                    <?php
                                    	}
                         
                         
                        
                         
                         
                     }
                    ?> 
                    <script type="text/javascript">
                      alert ("Status berhasil diubah");
                      window.location.href="media.php?page=order";
                    </script>
                    <?php
                  
                  
                }
                 ?>
                </form>
                  
                
                <tr>
                  <th colspan="3"><center>Paket</center></th>
                </tr>
                <tr>
                  <td>Acara</td>
                  <td>:</td>
                  <td><?php echo $data['acara'] ?></td>
                </tr>
        <tr>
                  <td>Tanggal</td>
                  <td>:</td>
                  <td><?php echo $data['tanggal'] ?></td>
                </tr>
                
                <tr>
                  <th colspan="3"><center>DETAIL PEMESANAN</center></th>
                </tr>
                <tr>
                  <td>Nama Paket</td>
                  <td>:</td>
                  <td><?php echo $data['nama_paket'] ?></td>
                </tr>
                <tr>
                  <td>Harga Paket</td>
                  <td>:</td>
                  <td>Rp.<?php echo number_format($data['harga']) ?>,-</td>
                </tr>
                <?php
          $pp =mysqli_query($koneksi,"select * from `order`,`order_plus`,`tambahan` where order_plus.id_order=order.id_order and tambahan.id_tambahan=order_plus.id_tambahan and order.id_order='$_GET[id]'");
          $rr = mysqli_fetch_array($pp) ;
          $tt = mysqli_num_rows($pp);
          if ($tt==1) {
            ?> 
            <tr>
              <td>Tambahan</td>
              <td>:</td>
              <td><?php echo $rr['nama'] ?></td>
            </tr>
            <tr>
              <td>Harga Tambahan</td>
              <td>:</td>
              <td>Rp.<?php echo number_format($rr['hrg']) ?>,-</td>
            </tr>
            <tr>
              <td>Total Bayar</td>
              <td>:</td>
              <td>Rp.<?php
              $total = $rr['hrg']+ $data['harga'];
               echo number_format($total) ?>,-</td>
            </tr>
            <?php
          }else{}
           ?>
                 
                

              </table>

                  </div>
              </div>
            </div>
          </div>
  </div> 
     <?php
  }
 ?>