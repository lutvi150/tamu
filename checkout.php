<?php
$time=time();
$idlog=$_GET['idlog'];
$namatamu=$_GET['namatamu'];
date_default_timezone_set('Asia/Jakarta');
$today=date("Y-m-d H:i:s");

include "koneksi.php";
$sqltamu=mysqli_query($koneksi,"update log_tamu set check_out='$today' where no_log='$idlog'");


$ip=$_SERVER['REMOTE_ADDR'];
		
$activity="user Melakukan checkout tamu $namatamu";
mysqli_query($koneksi,"insert into log_activity values(null,'$iduser','$activity','$ip','$today')"); 

?>
<section class="content">
  <div class="callout callout-info">
	<h4>Tamu Berhasil Check-Out</h4>
	Klik
	<a href="?page=daftarlogtamu">Disini Untuk Melihat Daftar Log Tamu</a>
</section>
