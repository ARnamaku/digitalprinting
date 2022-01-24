<?php 

$id = @$_GET['id'];

mysqli_query($koneksi,"delete from anggota where nik='$id'")or die (mysqli_error());

 ?>
 <script type="text/javascript">
 	window.location.href="?page=anggota";
 </script>