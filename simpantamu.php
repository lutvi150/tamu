<?php
$time=time();
copy('saved_images/foto.jpg', 'gambar/'.$time.'.jpg');
unlink('saved_images/foto.jpg');
$identitas=$_POST['identitas'];
$jenisidentitas=$_POST['jenisidentitas'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$instansi=$_POST['instansi'];
$uid=$_POST['uid'];
$kelamin=$_POST['kelamin'];
$idtenant=$_POST['idtenant'];
$tujuan=$_POST['tujuan'];
$nokartu=$_POST['nokartu'];
date_default_timezone_set('Asia/Jakarta');
$today=date("Y-m-d H:i:s");
$foto=$time.'.jpg';
include "koneksi.php";
$sqltamu=mysqli_query($koneksi,"select * from tamu where uid='$uid'");
$datatamu=mysqli_fetch_array($sqltamu);
$namatamu=$datatamu['nama'];
// tambahan
$no_hp=$_POST['no_hp'];
$email=$_POST['email'];
if($namatamu =='')
{
include "koneksi.php";
mysqli_query($koneksi,"INSERT INTO tamu ( id_tamu, uid, nama, jenis_id, nik, alamat, instansi,jenis_kelamin, id_user, tgl_update,no_hp, email ) VALUES ( null, '$uid', '$nama', '$jenisidentitas', '$identitas', '$alamat', '$instansi','$kelamin','$iduser','$today','$no_hp','$email' )");
$data="INSERT INTO tamu ( id_tamu, uid, nama, nik, alamat, instansi,jenis_kelamin, id_user, tgl_update,no_hp,email ) VALUES ( null, '$uid', '$nama', '$identitas', '$alamat', '$instansi','$kelamin','$iduser','$today','$no_hp','$email' )";

}
else 
{
	include "koneksi.php";
	mysqli_query($koneksi,"UPDATE tamu set nama = '$nama', jenis_id='$jenisidentitas', nik = '$identitas', alamat = '$alamat', instansi = '$instansi', jenis_kelamin = '$kelamin', id_user='$iduser', tgl_update='$today', no_hp='$no_hp', email='$email' WHERE uid = '$uid'");
	$update="UPDATE tamu set nama = '$nama', jenis_id='$jenisidentitas', nik = '$identitas', alamat = '$alamat', instansi = '$instansi', jenis_kelamin = '$kelamin', id_user='$iduser', tgl_update='$today',no_hp='$no_hp',email='$email' WHERE uid = '$uid'";
}
include "koneksi.php";
mysqli_query($koneksi,"INSERT INTO log_tamu ( no_log, uid, id_tenant, tujuan, no_kartu, check_in, check_out, tgl_update, id_user, foto ) VALUES ( null, '$uid', '$idtenant', '$tujuan', '$nokartu', '$today', '', '$today','$iduser','$foto' )");
$log ="INSERT INTO log_tamu ( no_log, uid, id_tenant, tujuan, no_kartu, check_in, check_out, tgl_update, id_user, foto ) VALUES ( null, '$uid', '$idtenant', '$tujuan', '$nokartu', '$today', '', '$today','$iduser','$foto' )";


$ip=$_SERVER['REMOTE_ADDR'];
		
$activity="user Menerima Tamu $nama";
mysqli_query($koneksi,"insert into log_activity values(null,'$iduser','$activity','$ip','$today')"); 

?>
<section class="content">
  <div class="callout callout-info">
	<h4>Data Tamu Berhasil Disimpan</h4>
	Klik
	<a href="?page=daftarlogtamu">Disini Untuk Melihat Daftar Log Tamu</a><br>
	Klik
	<a href="?page=bukutamu">Disini Untuk Membuat Buku Tamu</a>
</section>
