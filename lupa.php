<html>
<head>
<title>Resset Password</title>
<style>
body {background:#C1392B; padding:0px; margin:0px}
h3 {color:#ffffff; text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:20px; margin:20px;}
.wrapper-f{width:300px; margin:auto; padding:40px 20px 20px 20px; background:#E84C3D; margin-top:5%; min-height:120px;}
.wrapper-f label {color:#ffffff;}
.wrapper-f input {padding:5px; background:#eeeeee; border:0px; color:#333; width:98%; margin-bottom:10px;}
.wrapper-f input:focus{ background:#ccc;}
.wrapper-f .button {padding:10px 20px 10px 20px; color:#ffffff; background:#C1392B; margin-top:10px; cursor:pointer}
.wrapper-f .button:hover {background:#333;}
.warning {background:#FF9900; color:#ffffff; padding:10px; border-radius:5px; border:1px; text-align:center;margin:auto;
 width:400px; margin-top:20px;}
</style>
</head>
<h3>FORGOT PASSWORD</h3>
<div class="wrapper-f">
<form action="" method="post">
<label>Masukkan Email anda</label>
<input name="email" type="email" placeholder="Masukkan Email" required oninvalid="this.setCustomValidity('Masukkan Email Dengan benar oke gan')">
<input class="button" name="act_resset" type="submit" value="Submit">

</form>

</div>
<div style="width:600px; margin:auto">
<?PHP 
include"koneksi.php";
///////////////////////////////////////////////////////////////////////
if (isset($_POST['act_resset']))  
{
	date_default_timezone_set("Asia/Jakarta");
	$pass="1A2B4HTjsk5kwhadbwlff"; $panjang='8'; $len=strlen($pass); 
	$start=$len-$panjang; $xx=rand('0',$start); 
	$yy=str_shuffle($pass); 
	$passwordbaru=substr($yy, $xx, $panjang);

	$email = trim(strip_tags($_POST['email']));
	$password = mysql_real_escape_string(htmlentities((md5($passwordbaru))));
	$datetime=date("h:i:s-j-M-Y");

	// mencari alamat email si user
	$query = "SELECT * FROM kustomer WHERE email ='$email'";
	$hasil = mysql_query($query);
	$data  = mysql_fetch_array($hasil);
	$cek = mysql_num_rows($hasil);
	$id_member = strip_tags($data['id_kustomer']);
	$alamatEmail = strip_tags($data['email']);
	$nama = strip_tags($data['nama_lengkap']);
	$username =trim(strip_tags($data['nama_lengkap']));
	if ($cek == 1) {

	
	// mengirim email
	require("class.phpmailer.php");

$mail = new PHPMailer();

$mail->IsSMTP();
$mail->Host = "mail.lampungsoftware.com";

$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Port = 465;
$mail->Username = "noreply@lampungsoftware.com";
$mail->Password = "347610tgmby";

$mail->From = "noreply@lampungsoftware.com";
$mail->FromName = "Marketplace Ikan Lampung";
$mail->AddAddress($alamatEmail);

$mail->IsHTML(true);
$mail->Subject = "Reset password";
$mail->Body = "Kami telah meresset Ulang Kata sandi ".$nama." Dan anda dapat login kembali ke web kami \n\n 
	DETAIL AKUN ANDA :\n Email anda : ".$alamatEmail." \n 
	Kata sandi Anda yang baru adalah: ".$passwordbaru."\n\n 
	\n\n PESAN NO-REPLY";
	// cek status pengiriman email
	if(!$mail->Send())
	{ 

	    // update password baru ke database (jika pengiriman email sukses)
	    

	    if ($hasil) 
		echo'<div class="warning">Kata sandi baru telah direset dan sudah dikirim ke email "'.$alamatEmail.'" Silahkan cek emailnya</div><br><br><hr><h3>CONTOH PESAN DALAM EMAIL<hr><br>
		'.$pesan.'<hr>';
	    }
		else {
		    mysql_query("UPDATE kustomer SET password='$password' WHERE id_kustomer = '$id_member'");
		echo'<div class="warning">Kata sandi baru telah direset dan sudah dikirim ke email "'.$alamatEmail.'" Silahkan cek emailnya</div><br><br><hr>
		'.$pesan.'<hr>';
		}
	}
	else
	{
		echo'<div class="warning">Alamat Email tidak ditemukan</div>';
	}
}


?>

</div>

<body>
</body>
</html>
