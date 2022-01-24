<?php 	
include"koneksi.php";
session_start();
      		if (isset($_POST['book'])) {
      		    $date = date('Y-m-d');
      			mysqli_query($koneksi,"insert into `order` values (null,'$_SESSION[id]','$_POST[paket]','$_POST[tanggal]','$date','Menunggu')");
      			?> 
      			<script type="text/javascript">
      				alert('Anda berhasil memesan, silahkan ke proses selanjutnya');
      				window.location.href="index.php";
      			</script>
      			 <?php
      		}
      	 ?>