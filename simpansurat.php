<?php

$jenissurat=$_POST['jenissurat'];
$namasurat=$_POST['namasurat'];
$pengirim=$_POST['pengirim'];
$penerima=$_POST['penerima'];
$idtenant=$_POST['idtenant'];
$keterangan=$_POST['keterangan'];

date_default_timezone_set('Asia/Jakarta');
$today=date("Y-m-d H:i:s");

include "koneksi.php";
mysqli_query($koneksi,"INSERT INTO surat_masuk ( id_suratmasuk, jenis_surat, nama_surat, pengirim, penerima, tenant, keterangan, tanggal_diterima, tanggal_diambil, diambil, id_user ) VALUES ( null, '$jenissurat', '$namasurat', '$pengirim', '$penerima', '$idtenant', '$keterangan', '$today', '', '', '$iduser' )");


$ip=$_SERVER['REMOTE_ADDR'];
		
$activity="user Menerima surat $namasurat untuk $penerima";
mysqli_query($koneksi,"insert into log_activity values(null,'$iduser','$activity','$ip','$today')"); 

?>
<section class="content">
  <div class="callout callout-info">
	<h4>Data Surat Berhasil Disimpan</h4>
	Klik
	<a href="?page=daftarsuratmasuk">Disini Untuk Melihat Daftar Surat/Barang Masuk</a><br>
	Klik
	<a href="?page=tambahsuratmasuk">Disini Untuk Input Daftar Surat/Barang Masuk</a>
</section>
