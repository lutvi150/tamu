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
  <center>
    <h2>Selamat Datang di Sistem Informasi Pengunjung</h2>
  </center>
  <center>
    <h2>Bagian Pengadaan Barang dan Jasa Sekretariat Daerah Kab. Tanah Datar</h2>
  </center>
  <center>
    <h4>Siapkan E-KTP anda</h4>
  </center>
  <div class="box box-default">
    <div class="box-header with-border">
      <h3 class="box-title">Grafik Kunjungan Tamu</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
      </div>
    </div>
    <div class="box-body">
      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            <label for="">Filter</label>
            <select name="" class="form-control" id="type">
              <option value="">Pilih Filter</option>
              <option value="year">Tahun</option>
              <option value="month"></option>
            </select>
            <small id="helpId" class="text-muted">Help text</small>
          </div>
          <button type="button" class="btn btn-success btn-sm" ><i class="fa fa-search"></i> Cari</button>
        </div>
        <div class="col-md-12">
        	<div class="chart">
            <canvas id="diagram" style="height:250px"></canvas>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- <script src="node_modules/chart.js/Chart.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    $(document).ready(function () {
      now()
    });
    function now() { 
      $.ajax({
        type: "POST",
        url: "http://localhost/apitamu/chart",
        data: {type:'year',month:'05',year:'2021'},
        dataType: "JSON",
        success: function (response) {
          makeChart(response.content)
        }
      });
     }
    function makeChart(response) {
      var ctx = document.getElementById('diagram').getContext('2d');
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels:response.label,
          datasets: [{
            label: 'Grafik Kunjungan ',
            data: response.data,
            backgroundColor: [
              'rgba(255, 99, 132, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(255, 206, 86, 0.2)',
              'rgba(75, 192, 192, 0.2)',
              'rgba(153, 102, 255, 0.2)',
              'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
              'rgba(255, 99, 132, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(255, 206, 86, 1)',
              'rgba(75, 192, 192, 1)',
              'rgba(153, 102, 255, 1)',
              'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
          }]
        },
        options: {
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      });
    }
  </script>