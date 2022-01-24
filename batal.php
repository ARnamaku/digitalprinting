<?php 	
include"koneksi.php";
session_start();
      			mysqli_query($koneksi,"delete from `order` where id_order='$_GET[id]'");
      			?> 
      			<script type="text/javascript">
      				alert('Pesanan berhasil dibatalkan');
      				window.location.href="index.php";
      			</script>
      			 <?php
      		
      	 ?>