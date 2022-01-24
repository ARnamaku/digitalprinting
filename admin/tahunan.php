<?php 
error_reporting(0);
include"../koneksi.php" ?>
<script type="text/javascript">
	window.print();
</script>
<table border="0" align="center" width="100%" cellpadding="0">
    <tr bgcolor="#fff">
      <td width="100px"><img src="../img/logo.jpg" width="90px"></td>
      <td align="center"><h2>ACE Photografy</h2><h4></h4><small>JL.Ikan Baradatu | Cp.0895704823312 | Email: ACE Photografy@gmail.com | website: www.ACE Photografy.com</small></td>
      <td width="100x"><img src="../img/logo.jpg" width="90px"></td>
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
   
<h3><center>LAPORAN TRANSAKSI TAHUN 2018</center></h3>


<hr>
         <table class="table" border="1" width="50%">
    <tr>
      <th>No</th>
      <th>Bulan</th>
      <th>Jumlah</th>
    </tr>
    <?php 
    $date = date('Y-m-d');
    $no = 1;
    $sql = mysql_query("SELECT DATE_FORMAT( tanggal,  '%b' ) AS bulan, SUM( jumlah ) AS total
FROM  `order` WHERE status='Lunas'
GROUP BY MONTH( tanggal )");
    while ($data = mysql_fetch_array($sql)) {
      ?> 
      <tr>
     <th><?php echo $no++ ?></th>
      <th><?php echo $data['bulan'] ?></th>
     
      <th><?php echo $data['total'] ?> Pesanan</th>
    
      
    </tr>
       <?php
       @$sub = $sub + $data['total'];
    }
     ?>
     <tr>
      <th colspan="2">Total</th>
      <th><?php echo $sub ?> Pesanan</th>
     </tr>
  </table>
   


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