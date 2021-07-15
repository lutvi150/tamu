<?php
include "koneksi.php";
$sqltenant=mysqli_query($koneksi,"select count(id_tenant) as jml_tenant from tenant");
$datatenant=mysqli_fetch_array($sqltenant);
$jumlahtenant=$datatenant['jml_tenant'];

$sqlsurat=mysqli_query($koneksi,"select count(id_suratmasuk) as jml_surat from surat_masuk");
$datasurat=mysqli_fetch_array($sqlsurat);
$jumlahsurat=$datasurat['jml_surat'];

$sqlsuratdiambil=mysqli_query($koneksi,"select count(id_suratmasuk) as jml_suratdiambil from surat_masuk where diambil !=''");
$datasuratdiambil=mysqli_fetch_array($sqlsuratdiambil);
$jumlahsuratdiambil=$datasuratdiambil['jml_suratdiambil'];
$blmdiambil=$jumlahsurat-$jumlahsuratdiambil;

$sqlcekin=mysqli_query($koneksi,"select count(no_log) as jml_cekin from log_tamu where check_out='000-00-00 00:00:00'");
$datacekin=mysqli_fetch_array($sqlcekin);
$jumlahcekin=$datacekin['jml_cekin'];

$sqlpengunjung=mysqli_query($koneksi,"select count(no_log) as jml_pengunjung from log_tamu");
$datapengunjung=mysqli_fetch_array($sqlpengunjung);
$jumlahpengunjung=$datapengunjung['jml_pengunjung'];

?>
<section class="content-header">
      <h1>
        Dashboard
        <small>Version 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-building"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Tujuan</span>
              <span class="info-box-number"><?php echo $jumlahtenant ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-envelope"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Log Surat/Barang</span>
              <span class="info-box-number"><?php echo $jumlahsurat ?></span>
			  <small>Diambil : <?php echo $jumlahsuratdiambil ?></small><br>
			  <small>Blm Diambil : <?php echo $blmdiambil ?></small>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-check-square-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Check-In</span>
              <span class="info-box-number"><?php echo $jumlahcekin ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-group"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Pengunjung</span>
              <span class="info-box-number"><?php echo $jumlahpengunjung ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
		
        <!-- /.col -->
      </div>
      <!-- /.row -->
	  <br><br>
	  <center><h2>Selamat Datang di Sistem Informasi Pengunjung</h2></center>
	  <center><h2>Bagian Pengadaan Barang dan Jasa Sekretariat Daerah Kab. Tanah Datar</h2></center>
	  <center><h4>Siapkan E-KTP anda</h4></center>