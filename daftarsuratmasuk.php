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
<?php
include "koneksi.php";
$idsuratmasuk=$_POST['idsuratmasuk'];
$diambil=$_POST['diambil'];
$penerima=$_POST['penerima'];
$namasurat=$_POST['namasurat'];
date_default_timezone_set('Asia/Jakarta');
$today=date("Y-m-d H:i:s");
if($idsuratmasuk !="")
{
	mysqli_query($koneksi,"update surat_masuk set tanggal_diambil='$today', diambil='$diambil' where id_suratmasuk='$idsuratmasuk'");
	$ip=$_SERVER['REMOTE_ADDR'];
		
	$activity="user menyerahkan surat $namasurat - $penerima kepada $diambil";
	mysqli_query($koneksi,"insert into log_activity values(null,'$iduser','$activity','$ip','$today')"); 
	
}

?>
<section class="content">
<div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Daftar Log Surat/Barang Masuk</h3>
			
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
							<th>Jenis Surat/Barang</th>
							<th>Nama Surat/Barang</th>
							<th>Pengirim</th>
							<th>Penerima</th>
							<th>Nama Tenant</th>
							<th>Tanggal Diterima</th>
							<th>Tanggal Diambil</th>
							<th>Diambil</th>
							<th>User</th>							
							<th>Aksi</th>
   
						</tr>
					</thead>
					<tbody>
						<?php 
						include "koneksi.php";
						
						$no=1;
						
						$sqllogsurat=mysqli_query($koneksi,"SELECT * from surat_masuk as sm left join tenant as tn on tn.id_tenant=sm.tenant left join user as us on us.kode_user=sm.id_user order by sm.tanggal_diterima desc");
						
						while($datalog=mysqli_fetch_array($sqllogsurat))
						{		
							
							$diambil=$datalog['tanggal_diambil'];
							
						?>
						<tr class="odd gradeX">
							
						   <td align="center"><?php echo $no ?></td>
							<td><?php echo $datalog['jenis_surat'] ?></td>
							<td><?php echo $datalog['nama_surat'] ?></td>
							<td><?php echo $datalog['pengirim'] ?></td>
							<td><?php echo $datalog['penerima'] ?></td>
							<td><?php echo $datalog['nama_tenant'] ?></td>
							<td><?php echo $datalog['tanggal_diterima'] ?></td>
							
							
							<?php
							if ($diambil=="0000-00-00 00:00:00")
							{
							?>
							
							<td><?php echo "Belum Diambil"; ?></td>
							<td><?php echo $datalog['diambil'] ?></td>
							<td><?php echo $datalog['nama'] ?></td>
							<td><a href="#" class="edit-record-elogsurat" data-idlogsurat="<?php echo $datalog['id_suratmasuk'] ?>"><button type="button" class="btn btn-danger pull-left btn-xs"><i class="fa fa-power-off"></i>Diambil</button></a></td>
							<?php
							}
							else
							{
							?>
							<td><?php echo $datalog['tanggal_diambil'] ?></td>
							<td><?php echo $datalog['diambil'] ?></td>
							<td><?php echo $datalog['nama'] ?></td>
							<td><button type="button" class="btn btn-primary pull-left btn-xs"><i class="fa fa-check"></i> Sudah Diambil</button></td>	
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
				
		<div class="modal fade" id="myModaltlogsurat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
		
		
		<div class="modal fade" id="myModalelogsurat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">Surat/Barang Diambil</h4>
                    </div>
				
                    <form action="" method="post">
                    <div class="modal-body">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="simpan btn btn-primary">Update</button>
                    </div>
					</form>
					
                </div>
            </div>
        </div>
		
					
	</div>
</div>
  </section>
  


