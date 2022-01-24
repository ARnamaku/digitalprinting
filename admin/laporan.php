<?php 
error_reporting(0);
include"../koneksi.php" ?>
<script type="text/javascript">
	window.print();
</script>
<table border="0" align="center" width="100%" cellpadding="0">
    <tr bgcolor="#fff">
        <td width="100"><img src="image/niza.jpg" width="100"></td>
      <td align="center"><h2>Niza Photography</h2><h4></h4><small>Jl. Raya Serdang Desa Serang IA, Kec. Tanjung Bintang, Lampung Selatan. | Cp.081271271815 | Email: niza@gmail.com | website: www.nizaphotography.com</small></td>
    
    </tr>
    </table>
    <hr width="100%" align="center">
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
  $dari = tgl_indo($_GET['dari']);
  $sampai = tgl_indo($_GET['sampai']);
 ?>
<h3><center>LAPORAN PENDAPATAN</center></h3>
<?php 
  if ($_GET['jenis']=='hari') {
    ?>
     <h3><center>HARI INI</center></h3>

<hr>
         <table width="100%" border="1">
                 
    <tr>
      <th>No. Order</th>
      <th>Nama Pemesan</th>
      <th>Tanggal Pemesanan</th>
      <th>Nama Paket</th>
      <th>Status</th>
    </tr>
    <?php 
    $date = date('Y-m-d');
    $sql = mysqli_query($koneksi,"select * from `order`,`kustomer`,`paket` where paket.id_paket=order.id_paket 
      and kustomer.id_kustomer=order.id_kustomer and order.tanggal between '$_GET[dari]' and '$_GET[sampai]' order by order.id_order desc");
    while ($data = mysqli_fetch_array($sql)) {
      ?> 
      <tr>
      <td><?php echo $data['id_order'] ?></td>
      <td><?php echo $data['nama_lengkap'] ?></td>
      <td><?php echo $data['tanggal'] ?></td>
      <td><?php echo $data['nama_paket'] ?></td>
      <td><?php echo $data['status'] ?></td>
      </tr>
       <?php
    }
     ?>
  </table>
    <?php
  }else{
    ?> 
    <h3><center>PERIODE <?php echo $dari ?> - <?php echo $sampai ?></center></h3>

<hr>
         <table class="table" border="1" width="100%">
    <tr>
      <th>No. Order</th>
      <th>Nama Pemesan</th>
      <th>Tanggal</th>
      <th>Acara</th>
      <th>Harga</th>
      <th>Total Harga</th>
    </tr>
    <?php 
    $date = date('Y-m-d');
    $sql = mysqli_query($koneksi,"select * from `order`,`kustomer`,`paket` where paket.id_paket=order.id_paket and kustomer.id_kustomer=order.id_kustomer and order.tanggal between '$_GET[dari]' and '$_GET[sampai]' and order.status='Lunas'");
    while ($data = mysqli_fetch_array($sql)) {
      ?> 
      <tr>
     <td><?php echo $data['id_order'] ?></td>
      <td><?php echo $data['nama_lengkap'] ?></td>
      <td><?php echo $data['tanggal'] ?></td>
      <td><?php echo $data['nama_paket'] ?></td>
      <td>Rp.<?php echo number_format($data['harga']) ?>,-</td>
      
      <td>
        <?php 
        $total = $data['harga']+$d['hrg'];
        echo number_format($total);
         ?>
      </td>
     
    </tr>
       <?php
       @$total_r += $total;
    }
     ?>
     <tr>
      <th colspan="5"><center>Grand Total</center></th>
      <th>Rp.<?php echo number_format($total_r) ?>,-</th>
     </tr>
  </table>
    <?php
  }
 ?>


<br>
<br>
<br>
<br>
<br>
<br>
<table align="center" width="100%" cellpadding="2">
    <tr>
      <br>
      <td align="center"><br>Pimpinan,
      <br><br><br><br>
      ________________
      </td>
      <td width="20%"></td>
      <td align="center">
        <?php 
  $array_hari = array(1=>'Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu');
  $hari = $array_hari[date('N')];

  $array_bulan = array(1=>'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','Novemer','Desember');
  $bulan = $array_bulan[date('n')];

  $tgl = date('j');
  $thn = date('Y');

  echo $hari.", ".$tgl." ".$bulan." ".$thn ;
?>
<br>
<br><br><br><br><br><br><br></td>
    </tr>
  </table>