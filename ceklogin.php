<?php
include "koneksi.php";


$useradmin = $_POST['username'];
$pass     = md5($_POST['password']);

// pastikan username dan password adalah berupa huruf atau angka.

$login=mysqli_query($koneksi,"SELECT * FROM user  WHERE username='$useradmin' AND password='$pass' and aktif='1'");
$ketemu=mysqli_num_rows($login);
$r=mysqli_fetch_array($login);
$iduser2=$r['kode_user'];
$online=mysqli_query($koneksi,"update user set login='1' where kode_user='$iduser2'" );
// Apabila username dan password ditemukan
if ($ketemu > 0){
  session_start();

  $_SESSION['useradmin']  = $r['username'];
  $_SESSION['iduser']     = $r['kode_user'];
  
  $_SESSION['hakakses']   = $r['hakakses'];
  
  $_SESSION['nama']     	= $r['nama'];
  $_SESSION['jenisuser']	=$r['jenis_user'];
 
  //log activity
  include "koneksi.php";
  $ip=$_SERVER['REMOTE_ADDR'];
  date_default_timezone_set('Asia/Jakarta');
  $kodeuser=$r['kode_user'];
  $today=date("Y-m-d H:i:s");
  $activity="user Melakukan Login";
  mysqli_query($koneksi,"insert into log_activity values(null,'$kodeuser','$activity','$ip','$today')");

  header('location:index.php');
}
else{

   echo "username atau Password anda tidak sesuai.<br>
  Atau akun anda sedang diblokir.<br/>
  <a href='index.php'>ULANGI LAGI</a>";

}

?>
