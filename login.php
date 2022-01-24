
			<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Halaman Login</h4>
      </div>
      <div class="modal-body">
        <form action="" method="post">
        	<table class="table">
        		<tr>
        			<td>Username</td>
        			<td>:</td>
        			<td><input type="text" placeholder="Username anda..." name="username" class="form-control"></td>
        		</tr>
        		<tr>
        			<td>Password</td>
        			<td>:</td>
        			<td><input type="password" placeholder="Password anda..." name="password" class="form-control"></td>
        		</tr>
        		<tr>
        			<td colspan="3">
        				<input type="submit" name="login" value="Login Sekarang" class="btn btn-primary">
        			</td>
        		</tr>
        	</table>
        	Belum ada akun,daftar <a href="#register">disini</a>
        	<?php 

        	if(isset($_POST['login'])){
        		$username = $_POST['username'];
$pass     = md5($_POST['password']);

$login=mysqli_query($koneksi,"SELECT * FROM kustomer WHERE username='$username' AND password='$pass'");
$ketemu=mysqli_num_rows($login);
$r=mysqli_fetch_array($login);

// Apabila username dan password ditemukan
if ($ketemu > 0){
  session_start();
  $_SESSION['id']     = $r['id_kustomer'];
  $_SESSION['username']     = $r['username'];
  ?> 
  <script type="text/javascript">
  	alert('Anda berhasil login');
  	window.location.href="index.php";
  </script>
   <?php
}
else{
   ?> 
  <script type="text/javascript">
  	alert('Username dan Password anda salah');
  	window.location.href="index.php";
  </script>
   <?php
}
        	}




        	 ?>
        </form>
      </div>
      
    </div>
  </div>
</div>
