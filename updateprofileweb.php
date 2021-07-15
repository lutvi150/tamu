<?php 
include"koneksi.php";
$alamatwebsite=$_POST['alamatwebsite'];
$namaweb=$_POST['namaweb'];
$logocompany=$_FILES["logocompany"]["name"];
$petacompany=$_FILES["petacompany"]["name"];
$deskripsiweb=$_POST['deskripsiweb'];
$namacompany=$_POST['namacompany'];
$alamatcompany=$_POST['alamatcompany'];
$teleponcompany=$_POST['teleponcompany'];
$faxcompany=$_POST['faxcompany'];
$emailcompany=$_POST['emailcompany'];
$facebook=$_POST['facebook'];
$twitter=$_POST['twitter'];
$youtube=$_POST['youtube'];
$linkind=$_POST['linkind'];
$instagram=$_POST['instagram'];
$whatsapp=$_POST['whatsapp'];
$cekprofile=mysqli_query($koneksi,"select * from profile");
$dataprofile=mysqli_fetch_array($cekprofile);	
$logolama=$dataprofile['logo'];
$petalama=$dataprofile['peta'];
//$sql="UPDATE profile SET nama_company = '$namacompany', email_company = '$emailcompany', alamat_company = '$alamatcompany', telepon_company = '$teleponcompany', fax_company = '$faxcompany', twitter = '$twitter', facebook = '$facebook', linkind = '$linkind', alamat_web = '$alamatwebsite', nama_web = '$namaweb', deskripsi_web = '$deskripsiweb', youtube = '$youtube', instagram='$instagram', whatasapp='$whatsapp'";
mysqli_query($koneksi,"UPDATE profile SET nama_company = '$namacompany', email_company = '$emailcompany', alamat_company = '$alamatcompany', telepon_company = '$teleponcompany', fax_company = '$faxcompany', twitter = '$twitter', facebook = '$facebook', linkind = '$linkind', alamat_web = '$alamatwebsite', nama_web = '$namaweb', deskripsi_web = '$deskripsiweb', youtube = '$youtube', instagram='$instagram', whatsapp='$whatsapp'");
?>


<?php

if($logocompany !="")
{	


$target_dir = "profileweb/";
$lokasilogolama=$target_dir.$logolama;
unlink($lokasilogolama);

$temp = explode(".", $_FILES["logocompany"]["name"]);//untuk mengambil nama file gambarnya saja tanpa format gambarnya
$nama_baru ='logo.' . end($temp);//fungsi untuk membuat nama acak
$direktori=$target_dir.$nama_baru;
mysqli_query($koneksi,"update profile set logo='$nama_baru'");

move_uploaded_file($_FILES["logocompany"]["tmp_name"], $direktori);


}

if($petacompany !="")
{	


$target_dir = "profileweb/";
$lokasipetalama=$target_dir.$petalama;
unlink($lokasipetalama);

$temp = explode(".", $_FILES["petacompany"]["name"]);//untuk mengambil nama file gambarnya saja tanpa format gambarnya
$nama_baru ='peta.' . end($temp);//fungsi untuk membuat nama acak
$direktori=$target_dir.$nama_baru;
mysqli_query($koneksi,"update profile set peta='$nama_baru'");

move_uploaded_file($_FILES["petacompany"]["tmp_name"], $direktori);


}


$ip=$_SERVER['REMOTE_ADDR'];
date_default_timezone_set('Asia/Jakarta');

$today=date("Y-m-d H:i:s");
$activity="User Mengupdate Profile Web";
mysqli_query($koneksi,"insert into log_activity values(null,'$iduser','$activity','$ip','$today')"); 	

?>
<section class="content">
  <div class="callout callout-info">
	<h4>Profile Web Berhasil Diupdate</h4>
	Klik
	<a href="?page=profileweb">Disini Untuk Melihat Profile Web</a>
  </div>
</section>