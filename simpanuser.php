<?php
	
include"koneksi.php";
$username2=$_POST['username'];
$namafoto=$_FILES["foto"]["name"];
$namalengkap=$_POST['namalengkap'];
$email=$_POST['email'];
$telepon=$_POST['telepon'];
$passwordbaru2=$_POST['passwordbaru'];
$ulangipassword2=$_POST['ulangipassword'];
$upload=$_POST['upload'];
$passwordbaru=md5($_POST['passwordbaru']);
$ulangipassword=md5($_POST['ulangipassword']);

$aktif=$_POST['aktif'];

$cekuser=mysqli_query($koneksi,"select * from user where username='$username2'");
$jumlahuser=mysqli_num_rows($cekuser);
if($jumlahuser <= 0)
{

	if($passwordbaru != $ulangipassword)
	{
		?>
		<section class="content">
		  <div class="callout callout-info">
			<h4>Password Tidak Cocok</h4>
			Klik
			<a href="?page=tambahuser">Disini Untuk Menambahkan user</a>
		  </div>
		</section>
		<?php
	}
	else if($passwordbaru == $ulangipassword)
	{
		mysqli_query($koneksi,"insert into user (kode_user, nama, username, password,  aktif,  telepon_user, email_user)values(null,'$namalengkap','$username2','$passwordbaru','$aktif','$telepon','$email')");
		  
		  $ip=$_SERVER['REMOTE_ADDR'];
		  date_default_timezone_set('Asia/Jakarta');
		
		  $today=date("Y-m-d H:i:s");
		  $activity="user Menambahkan user $namalengkap";
		  mysqli_query($koneksi,"insert into log_activity values('','$iduser','$activity','$ip','$today')"); 
		?>
		<section class="content">
		  <div class="callout callout-info">
			<h4>user Berhasil Ditambahkan</h4>
			Klik
			<a href="?page=daftaruser">Disini Untuk Melihat user</a>
		  </div>
		</section>
		
		<?php
	}
	if($namafoto !="")
	{	
	$cekuser=mysqli_query($koneksi,"select * from user where username='$username2'");
	$datauser=mysqli_fetch_array($cekuser);	
	$fotolama=$datauser['foto'];
	$iduser2=$datauser['kode_user'];

	$target_dir = "foto/";
	$lokasifotolama=$target_dir.$fotolama;
	unlink($lokasifotolama);

	$temp = explode(".", $_FILES["foto"]["name"]);//untuk mengambil nama file gambarnya saja tanpa format gambarnya
	$nama_baru = $iduser2. '.' . end($temp);//fungsi untuk membuat nama acak
	$direktori=$target_dir.$nama_baru;
	mysqli_query($koneksi,"update user set foto='$nama_baru' where username='$username2'");

	move_uploaded_file($_FILES["foto"]["tmp_name"], $direktori);
	}	
}
else if($jumlahuser > 0)
{
?>
<section class="content">
  <div class="callout callout-info">
	<h4>username Sudah Ada</h4>
	Klik
	<a href="?page=tambahuser">Disini Untuk Menambahkan user</a>
  </div>
</section>
<?php
}

?>


