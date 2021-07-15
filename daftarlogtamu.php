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
      
        <small>&nbsp;</small>
      </h1>
      
    </section>

    <!-- Main content -->
<section class="content">
<div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Daftar Log Tamu</h3>
			
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
							<th>UID</th>
							<th>No Identitas</th>
							<th>Nama Lengkap</th>
							<th>Instansi</th>
							<th>Tujuan</th>
							<th>Keperluan</th>
							<th>Nomor Handphone</th>
							<th>Check In</th>
							<th>Check Out</th>							
							<th>Aksi</th>
   
						</tr>
					</thead>
					<tbody>
						<?php 
						include "koneksi.php";
						$no=1;
						
						$sqllogtamu=mysqli_query($koneksi,"SELECT lt.no_log,lt.uid, tm.nik, tm.nama, tm.instansi, lt.tujuan, tn.nama_tenant, lt.no_kartu, lt.check_in, lt.check_out FROM log_tamu AS lt LEFT JOIN tamu AS tm ON lt.uid=tm.uid LEFT JOIN tenant AS tn ON tn.id_tenant=lt.id_tenant LEFT JOIN user AS us ON us.kode_user=lt.id_user order by lt.check_in desc");
						
						while($datalog=mysqli_fetch_array($sqllogtamu))
						{		
							
							$cekout=$datalog['check_out'];
							
						?>
						<tr class="odd gradeX">
							
						   <td align="center"><?php echo $no ?></td>
							<td><a href="#" class="edit-record-elog" data-idlog="<?php echo $datalog['no_log'] ?>"><?php echo $datalog['uid'] ?></a></td>
							<td><?php echo $datalog['nik'] ?></td>
							<td><?php echo $datalog['nama'] ?></td>
							<td><?php echo $datalog['instansi'] ?></td>
							<td><?php echo $datalog['nama_tenant'] ?></td>
							<td><?php echo $datalog['tujuan'] ?></td>
							<td><?php echo $datalog['no_kartu'] ?></td>
							<td><?php echo $datalog['check_in'] ?></td>
							
							<?php
							if ($cekout=="0000-00-00 00:00:00")
							{
							?>
							
							<td><?php echo "Belum Check-out"; ?></td>
							<td><a href="?page=checkout&idlog=<?php echo $datalog['no_log'] ?>&namatamu=<?php echo $datalog['nama'] ?>"onclick="return confirm('Anda Yakin Akan Check-Out Tamu Ini ... ?')"><button type="button" class="btn btn-danger pull-left btn-xs"><i class="fa fa-power-off"></i> Check-Out</button></a></td>
							<?php
							}
							else
							{
							?>
							<td><?php echo $datalog['check_out'] ?></td>
							<td><button type="button" class="btn btn-primary pull-left btn-xs"><i class="fa fa-check"></i> Sudah Check-Out</button></td>	
							<?php
							}
							?>
							
							
							
							
						</tr>
						 <?php
						 $no++;
						  }
						  ?>
					</tbody>
				</table>
				<!-- /.table-responsive -->
				
		<div class="modal fade" id="myModaltlog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">Tambah log</h4>
                    </div>
					<form action="" method="post">
                    <div class="modal-body">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="simpan btn btn-primary">Save</button>
                    </div>
					</form>
                </div>
            </div>
        </div>
		
		
		<div class="modal fade" id="myModalelog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">Detail Log Tamu</h4>
                    </div>
				
                    <div class="modal-body">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        
                    </div>
					
                </div>
            </div>
        </div>
		
					
	</div>
</div>
  </section>
  


