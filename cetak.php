<script type="text/javascript">
	window.print();
</script>
<?php 
  function tgl_indo($tanggal){
  $bulan = array (
    1 =>   'Januari',
    'Februari',
    'Maret',
    'April',
    'Mei',
    'Juni',
    'Juli',
    'Agustus',
    'September',
    'Oktober',
    'November',
    'Desember'
  );
  $pecahkan = explode('-', $tanggal);
  
  // variabel pecahkan 0 = tanggal
  // variabel pecahkan 1 = bulan
  // variabel pecahkan 2 = tahun
 
  return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}

   ?>
<?php 
include"koneksi.php";
    $sql = mysqli_query($koneksi,"select * from `order`,`paket` where order.id_paket=paket.id_paket 
            and id_kustomer='$_SESSION[id]' and order.status!='Lunas' order by order.id_order desc limit 1");
    $data = mysqli_fetch_array($sql);
?>
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
        	<table class="table" width="100%" border="1">
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
          
        		
        		
        	</table>
        
        </form>
      </div>
      
    </div>
  </div>
</div>
