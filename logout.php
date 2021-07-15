<?php session_start();
if (ISSET($_SESSION['adminsiap']))
{
$iduser = $_SESSION['iduser'];
$username = $_SESSION['adminsiap'];
$kodetenant=$_SESSION['tenant'];
$upload=$_SESSION['upload'];
$hakakses=$_SESSION['hakakses'];	
$nama=$_SESSION['nama'];
$jenisuser=$_SESSION['jenisuser'];	
$depouser=$_SESSION['depouser'];

$online=mysqli_query($koneksi,"update user set login='0' where kode_user='$iduser'" );	
}
//log activity
else
header("location:index.php");
?>
<?php
include"koneksi.php";
$ip=$_SERVER['REMOTE_ADDR'];
date_default_timezone_set('Asia/Jakarta');

$today=date("Y-m-d H:i:s");
$activity="user Logout Aplikasi";
mysqli_query($koneksi,"insert into log_activity values('','$iduser','$activity','$ip','$today')"); 

  
	
  session_destroy();
  echo "<center>Anda telah sukses keluar sistem <b>[LOGOUT]<b>";
  echo "<center><a href='login.php'>KE HALAMAN UTAMA</a>";

// Apabila setelah logout langsung menuju halaman utama website, aktifkan baris di bawah ini:

header('location:index.php');
?>
