<?php
include"koneksi.php";
session_start();
mysqli_query($koneksi,"update kustomer set nama_lengkap='$_POST[nama]',
            username='$_POST[username]',no_hp='$_POST[no_hp]',alamat='$_POST[alamat]' where id_kustomer='$_SESSION[id]'");
            ?> 
                <script type="text/javascript">
                    
                    alert ("Data Berhasil Diedit");
                    window.location.href="index.php";
                </script>
          