<?php 

$id = @$_GET['id'];

mysqli_query($koneksi,"delete from paket where id_paket='$id'")or die (mysql_error());

 ?> 
                <script type="text/javascript">
                    alert ("Data Paket Berhasil Dihapus");
                    window.location.href="media.php?page=paket";
                </script>
            