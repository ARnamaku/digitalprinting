  <?php
error_reporting(0);

include "../koneksi.php";
  $user = @$_POST['username'];
  $pass = @$_POST['password'];

$login=mysqli_query($koneksi,"select * from user where username='$user' and password = md5('$pass')");
$ketemu=mysqli_num_rows($login);
$r=mysqli_fetch_array($login);

// Apabila username dan password ditemukan
if ($ketemu > 0){
  session_start();
  
  // inisialisasi session /////////
  
  ("username");
  ("password");
  ("level");
  
  

  $_SESSION[username]     = $r[username];
  $_SESSION[password]     = $r[password];
  $_SESSION[level]       = $r[level];
 
 
  ?> 
                <script type="text/javascript">
                    alert ("Anda berhasil login");
                    window.location.href="media.php";
                </script>
            <?php
  
}
else{
  ?> 
                <script type="text/javascript">
                    alert ("Username atau Password Salah");
                    window.location.href="index.php";
                </script>
            <?php
}
?>