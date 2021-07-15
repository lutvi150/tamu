<?php
function tgl_indo($tgl){
    $tanggal = substr($tgl,8,2);
    $bulan = getBulan(substr($tgl,5,2));
    $tahun = substr($tgl,0,4);
    return $tanggal.' '.$bulan.' '.$tahun;
}

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
<section class="content-header">
      <h1>
       Daftar Log Activity
        <small>&nbsp;</small>
      </h1>
      
    </section>

    <!-- Main content -->
<section class="content">
<div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
<div class="row">
	<div class="col-lg-12">
		<!-- /.panel-heading -->
			<div class="panel-body table-responsive">
				<table width="100%" class="table table-striped table-bordered table-hover" id="example1">
					<thead>
						<tr align="center">
							<th>No</th>
							<th>Aktifitas</th>
							<th>Tanggal</th>
							<th>Jam</th>
							<th>IP Address</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						include "koneksi.php";
						$no=1;
						$sqllog=mysqli_query($koneksi,"SELECT * FROM log_activity where kode_user='$iduser' order by tanggal DESC");
						while($datalog=mysqli_fetch_array($sqllog))
						{		
							
							
							
						?>
						<tr class="odd gradeX">
							
							<td align="center"><?php echo $no ?></td>
							<td><?php echo $datalog['activity'] ?></td>
							<td><?php echo tgl_indo($datalog['tanggal']) ?></td>
							<td><?php echo substr($datalog['tanggal'],11,8) ?></td></td>				
							<td><?php echo $datalog['ip'] ?></td>
							
						 
						</tr>
						 <?php
						 $no++;
						  }
						  ?>
					</tbody>
				</table>
				<!-- /.table-responsive -->
				
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                    </div>
                    <div class="modal-body">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="simpan btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>
  </section>

