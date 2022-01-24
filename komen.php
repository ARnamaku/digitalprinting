<?php 
					
					session_start();
					error_reporting(0);
					include"koneksi.php";
						$tgl = date('Y-m-d');
						mysqli_query($koneksi,"insert into komentar values(null,'$_SESSION[id]',
							'$_POST[menu]','$_POST[isi]','$tgl')");
						?>  
						<script type="text/javascript">
							alert('Komentar anda berhail dikirim');
							window.location.href="index.php";
						</script>
						<?php
					
					 ?>