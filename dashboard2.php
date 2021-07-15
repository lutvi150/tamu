<?php

function getBulan($bln){
    switch ($bln){
        case 1:
        return "Januari";
        break;
        case 2:
        return "Februari";
        break;
        case 3:
        return "Maret";
        break;
        case 4:
        return "April";
        break;
        case 5:
        return "Mei";
        break;
        case 6:
        return "Juni";
        break;
        case 7:
        return "Juli";
        break;
        case 8:
        return "Agustus";
        break;
        case 9:
        return "September";
        break;
        case 10:
        return "Oktober";
        break;
        case 11:
        return "November";
        break;
        case 12:
        return "Desember";
        break;
    }
}
?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $jumlahboxdibuat ?></h3>

              <p>About</p>
            </div>
            <div class="icon">
              <i class="ion ion-cube"></i>
            </div>
            <a href="?page=tampilbox" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $jumlahboxdikirim ?></h3>

              <p>Dosen</p>
            </div>
            <div class="icon">
              <i class="ion ion-paper-airplane"></i>
            </div>
            <a href="?page=tampilboxdikirim" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $jumlahboxdiarsipkan ?></h3>

              <p>Mahasiswa</p>
            </div>
            <div class="icon">
              <i class="ion ion-filing"></i>
            </div>
            <a href="?page=tampilboxdiarsipkan" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $jumlahdokumen ?></h3>

              <p>Gallery</p>
            </div>
            <div class="icon">
              <i class="ion ion-document"></i>
            </div>
            <a href="#" class="small-box-footer">&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
		
		
     
    
        <div class="col-lg-12 col-xs-12">
          <!-- small box -->
        <div class="row">
        
      </div>
      <!-- /.row -->

      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-md-8">
         
          <div class="row">
            <div class="col-md-6">
              
            </div>
            <!-- /.col -->

            
          </div>
          <!-- /.row -->

          <!-- TABLE: LATEST ORDERS -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Mahasiswa Baru</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Tanggal Submit</th>
                    <th>Status</th>
                  </tr>
                  </thead>
                  <tbody>
				  <?php
					include "koneksi.php";
						$no=1;
						$sqlbox=mysqli_query($koneksi,"SELECT * FROM box AS bx INNER JOIN depo AS dp ON bx.kode_depo = dp.kode_depo INNER JOIN divisi AS dv ON bx.kode_divisi= dv.kode_divisi INNER JOIN tenant AS tn ON bx.kode_tenant=tn.kode_tenant where bx.kode_tenant='$kodetenant' order by bx.tgl_update DESC limit 0,4");
						while($databox=mysqli_fetch_array($sqlbox))
						{		
							if($databox['status_box']=="Dibuat")
							{
								$status="primary";
							}
							else if($databox['status_box']=="Dikirim")
							{
								$status="warning";
							}
							else if($databox['status_box']=="Diterima")
							{
								$status="success";
							}
							else if($databox['status_box']=="Diarsipkan")
							{
								$status="success";
							}
							
							
							$idbox=$databox['id_box'];
							$sqlarsip2=mysqli_query($koneksi,"select * from arsip where id_box='$idbox'");
							$dataarsip2=mysqli_fetch_array($sqlarsip2);
							$today=date("Y-m-d H:i:s");
							if($dataarsip2['id_box'] !="")
							{
							if($dataarsip2['masa_retensi'] < $today)
							{
								$status="danger";
								$databox['status_box']="Expiered";
								
							}
							}
							$sqljumlah=mysqli_query($koneksi,"select id_dokumen from dokumen where id_box='$idbox'");
							$jumlahdoc=mysqli_num_rows($sqljumlah);
							
				  
				  ?>
                  <tr>
                    <td><a href="#" class="edit-record-arsip" data-idarsip="<?php echo $databox['id_box'] ?>"><?php echo $databox['nomor_box'] ?></a></td>
                    <td><?php echo $databox['nama_depo'] ?></td>
                    <td><?php echo tgl_indo($databox['tgl_update']) ?></td>
                    <td>
                      <span class="label label-<?php echo $status ?>"><?php echo $databox['status_box'] ?></span>
                    </td>
                  </tr>
                  <?php
					}
					?>
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <a href="?page=tampilbox" class="btn btn-sm btn-info btn-flat pull-left">Lihat Semua Mahasiswa Baru</a>
             
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

        <div class="col-md-4">
          <!-- Info Boxes Style 2 -->
          <div class="info-box bg-yellow">
            <span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>
			<?php
			include "koneksi.php";
			$sqldokumen2=mysqli_query($koneksi, "select count(id_dokumen) as totaldok from dokumen as dk inner join box as bx on dk.id_box=bx.id_box where bx.kode_tenant='$kodetenant' and bx.hapus is null");
			$totaldok=mysqli_fetch_assoc($sqldokumen2);
			$jmldok=$totaldok['totaldok'];
			$sqldokumenfisik=mysqli_query($koneksi,"select sum(dokumen_fisik) as totalfisik from box where kode_tenant='$kodetenant' and hapus is null");
			$totaldokfisik=mysqli_fetch_assoc($sqldokumenfisik);
			$jmldokfisik=$totaldokfisik['totalfisik'];
			$persedokumen=($jmldok/$jmldokfisik)*100;
			?>
            <div class="info-box-content">
              <span class="info-box-text">File</span>
              <span class="info-box-number"><?php echo $jmldok ?> / <?php echo $jmldokfisik ?> </span>

              <div class="progress">
                <div class="progress-bar" style="width: <?php echo round($persedokumen) ?>%"></div>
              </div>
              <span class="progress-description">
                    <?php echo round($persedokumen) ?>% File Dokumen Terupload
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          <div class="info-box bg-green">
            <span class="info-box-icon"><i class="ion ion-paper-airplane"></i></span>
			<?php
			include "koneksi.php";
			$sqlbox3=mysqli_query($koneksi, "select count(id_box) as diterima from box where status_box='Diterima' and kode_tenant='$kodetenant'");
			$total=mysqli_fetch_assoc($sqlbox3);
			$totalditerima=$total['diterima'];
			$sqlbox2=mysqli_query($koneksi, "select count(id_box) as dikirim from box where status_box='Dikirim' and kode_tenant='$kodetenant'");
			$totaldk=mysqli_fetch_assoc($sqlbox2);
			$totaldikirim=$totaldk['dikirim'];
			$boxdikirim=$totalditerima+$totaldikirim;
			$persenbox=($totalditerima/$boxdikirim)*100;
			?>
            <div class="info-box-content">
              <span class="info-box-text">Program Studi</span>
              <span class="info-box-number"><?php echo $totalditerima ?> / <?php echo $boxdikirim ?></span>

              <div class="progress">
                <div class="progress-bar" style="width: <?php echo round($persenbox,2) ?>%"></div>
              </div>
              <span class="progress-description">
                    <?php echo round($persenbox,2) ?>% Box telah diterima
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          <div class="info-box bg-red">
            <span class="info-box-icon"><i class="ion ion-ios-cloud-download-outline"></i></span>
			<?php
			include "koneksi.php";
			$sqldokumen=mysqli_query($koneksi, "select sum(file_size) as total from dokumen as dk inner join box as bx on dk.id_box=bx.id_box where bx.kode_tenant='$kodetenant' and bx.hapus is null");
			$total=mysqli_fetch_assoc($sqldokumen);
			$totalmb=$total['total'];
			$size=$totalmb/(1024*1024);
			?>
            <div class="info-box-content">
              <span class="info-box-text">Agenda</span>
              <span class="info-box-number"><?php echo round($size,2) ?> MB</span>

              <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div>
              <span class="progress-description">
                    
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
       
          
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        </div>		
      </div>
    </section>
	
	
	
	
	
	
