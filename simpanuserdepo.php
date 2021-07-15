<?php 
if($hakakses=="Admin")
{
include"koneksi.php";
$username2=$_POST['username'];
$namafoto=$_FILES["foto"]["name"];
$namalengkap=$_POST['namalengkap'];
$email=$_POST['email'];
$telepon=$_POST['telepon'];
$passwordbaru2=$_POST['passwordbaru'];
$ulangipassword2=$_POST['ulangipassword'];

$passwordbaru=md5($_POST['passwordbaru']);
$ulangipassword=md5($_POST['ulangipassword']);
$hakakses2=$_POST['hakakses2'];
$aktif=$_POST['aktif'];
$jenisuser2=$_POST['jenisuser2'];
$hapusarsip=$_POST['hapusarsip'];


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
			<a href="?page=tambahuserdepo">Disini Untuk Menambahkan user Baru</a>
		  </div>
		</section>
		<?php
	}
	else if($passwordbaru == $ulangipassword)
	{
		  
		 mysqli_query($koneksi,"INSERT INTO user ( kode_user, nama, username, password, kode_tenant, kode_divisi, hakakses, login, waktulogin, aktif, waktulogout, iplogin, upload, jenis_user, kode_depo, telepon_user, email_user, foto, tampil_dok, hapus_arsip ) VALUES ( '', '$namalengkap', '$username2', '$passwordbaru', '', '', '$hakakses2', '', '', '$aktif', '', '', '', '$jenisuser2', '$depouser', '$telepon', '$email', '', '','$hapusarsip' )");
		  
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
			<a href="?page=daftaruserdepo">Disini Untuk Melihat user</a>
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
	<a href="?page=tambahuserdepo">Disini Untuk Menambahkan user</a>
  </div>
</section>
<?php
}
}
?>

<?php 
if($hakakses=="Superadmin")
{
include"koneksi.php";
$username2=$_POST['username'];
$namafoto=$_FILES["foto"]["name"];
$namalengkap=$_POST['namalengkap'];
$email=$_POST['email'];
$telepon=$_POST['telepon'];
$passwordbaru2=$_POST['passwordbaru'];
$ulangipassword2=$_POST['ulangipassword'];

$passwordbaru=md5($_POST['passwordbaru']);
$ulangipassword=md5($_POST['ulangipassword']);
$hakakses2=$_POST['hakakses2'];
$aktif=$_POST['aktif'];
$jenisuser2=$_POST['jenisuser2'];
$kodedepouser=$_POST['kodedepouser'];
$hapusarsip=$_POST['hapusarsip'];

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
			<a href="?page=tambahuserdepo">Disini Untuk Menambahkan user Baru</a>
		  </div>
		</section>
		<?php
	}
	else if($passwordbaru == $ulangipassword)
	{
		  
		 mysqli_query($koneksi,"INSERT INTO user ( kode_user, nama, username, password, kode_tenant, kode_divisi, hakakses, login, waktulogin, aktif, waktulogout, iplogin, upload, jenis_user, kode_depo, telepon_user, email_user, foto, tampil_dok, hapus_arsip ) VALUES ( '', '$namalengkap', '$username2', '$passwordbaru', '', '', '$hakakses2', '', '', '$aktif', '', '', '', '$jenisuser2', '$kodedepouser', '$telepon', '$email', '', '','$hapusarsip' )");
		  
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
			<a href="?page=daftaruserdepo">Disini Untuk Melihat user</a>
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
	<a href="?page=tambahuserdepo">Disini Untuk Menambahkan user</a>
  </div>
</section>
<?php
}
}
?>

