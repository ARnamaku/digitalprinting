<?php 

$id = @$_GET['id'];

mysqli_query($koneksi,"delete from tambahan where id_tambahan='$id'")or die (mysql_error());

 ?> 
                <script type="text/javascript">
                    alert ("Data Paket Tambahan Berhasil Dihapus");
                    window.location.href="media.php?page=paket";
                </script>
            