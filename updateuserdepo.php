<?php 
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
if($passwordbaru2 !="")
{
	if($passwordbaru != $ulangipassword)
	{
		?>
		<section class="content">
		  <div class="callout callout-info">
			<h4>Password Tidak Cocok</h4>
			Klik
			<a href="?page=daftaruserdepo">Disini Untuk Melihat Daftar user</a>
		  </div>
		</section>
		<?php
	}
	else if($passwordbaru == $ulangipassword)
	{
		mysqli_query($koneksi,"update user set nama='$namalengkap', password='$passwordbaru', telepon_user='$telepon', email_user='$email', hakakses='$hakakses2', aktif='$aktif', jenis_user='$jenisuser2', hapus_arsip='$hapusarsip' where username='$username2'");
		  
		  $ip=$_SERVER['REMOTE_ADDR'];
		  date_default_timezone_set('Asia/Jakarta');
		
		  $today=date("Y-m-d H:i:s");
		  $activity="user Ganti Password";
		  mysqli_query($koneksi,"insert into log_activity values('','$iduser','$activity','$ip','$today')"); 
		?>
		<section class="content">
		  <div class="callout callout-info">
			<h4>user Berhasil Diupdate</h4>
			Klik
			<a href="?page=daftaruserdepo">Disini Untuk Melihat daftar user</a>
		  </div>
		</section>
		
		<?php
	}
}
else if($passwordbaru2 =="")
{
mysqli_query($koneksi,"update user set nama='$namalengkap', telepon_user='$telepon', email_user='$email', hakakses='$hakakses2', aktif='$aktif', jenis_user='$jenisuser2', hapus_arsip='$hapusarsip' where username='$username2'");
$ip=$_SERVER['REMOTE_ADDR'];
date_default_timezone_set('Asia/Jakarta');

$today=date("Y-m-d H:i:s");
$activity="user Mengupdate Profile";
mysqli_query($koneksi,"insert into log_activity values('','$iduser','$activity','$ip','$today')"); 

?>
		<section class="content">
		  <div class="callout callout-info">
			<h4>Profile Berhasil Diupdate</h4>
			Klik
			<a href="?page=daftaruserdepo">Disini Untuk Melihat Daftar user</a>
		  </div>
		</section>
		
<?php
}		

if($namafoto !="")
{	
$cekuser=mysqli_query($koneksi,"select * from user where username='$username2'");
$datauser=mysqli_fetch_array($cekuser);	
$fotolama=$datauser['foto'];

$target_dir = "foto/";
$lokasifotolama=$target_dir.$fotolama;
unlink($lokasifotolama);

$temp = explode(".", $_FILES["foto"]["name"]);//untuk mengambil nama file gambarnya saja tanpa format gambarnya
$nama_baru = $iduser. '.' . end($temp);//fungsi untuk membuat nama acak
$direktori=$target_dir.$nama_baru;
mysqli_query($koneksi,"update user set foto='$nama_baru' where kode_user='$iduser'");

move_uploaded_file($_FILES["foto"]["tmp_name"], $direktori);

$ip=$_SERVER['REMOTE_ADDR'];
date_default_timezone_set('Asia/Jakarta');

$today=date("Y-m-d H:i:s");
$activity="user Ganti Foto Profile";
mysqli_query($koneksi,"insert into log_activity values('','$iduser','$activity','$ip','$today')"); 

}	
?>
