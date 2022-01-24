<?php 

$id = @$_GET['id'];

mysqli_query($koneksi,"delete from user where id_user='$id'")or die (mysqli_error());

 ?>
 <script type="text/javascript">
 	window.location.href="?page=user";
 </script>