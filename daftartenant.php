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
<?php
include "koneksi.php";
$idtenanthapus=$_GET['idtenanthapus'];
if($idtenanthapus !="")
{
	mysqli_query($koneksi,"delete from tenant where id_tenant='$idtenanthapus'");
}

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    include "koneksi.php";
	$idtenant=$_POST['idtenant'];
	$namatenant=$_POST['namatenant'];
	$telptenant=$_POST['telptenant'];
	$lantaitenant=$_POST['lantaitenant'];
		if($idtenant !="")
		{
		mysqli_query($koneksi, "UPDATE tenant SET  nama_tenant = '$namatenant', telepon_tenant = '$telptenant', lantai_tenant = '$lantaitenant' WHERE id_tenant = '$idtenant'");

		  $ip=$_SERVER['REMOTE_ADDR'];
		  date_default_timezone_set('Asia/Jakarta');
		  
		  $today=date("Y-m-d H:i:s");
		  $activity="User Mengedit tenant $namatenant";
		  mysqli_query($koneksi,"insert into log_activity values(null,'$iduser','$activity','$ip','$today')");
		
		}
		
		else
		{
		
		mysqli_query($koneksi, "INSERT INTO tenant ( id_tenant, nama_tenant, telepon_tenant, lantai_tenant ) VALUES ( null, '$namatenant', '$telptenant', '$lantaitenant' )");
		//log activity
		
		
		  $ip=$_SERVER['REMOTE_ADDR'];
		  date_default_timezone_set('Asia/Jakarta');
		  
		  $today=date("Y-m-d H:i:s");
		  $activity="user Menambahkan tenant $namatenant";
		  mysqli_query($koneksi,"insert into log_activity values(null,'$iduser','$activity','$ip','$today')");
		}

}


?>

<section class="content-header">
      <h1>
       Daftar tenant
        <small>&nbsp;</small>
      </h1>
      
    </section>

    <!-- Main content -->
<section class="content">
<div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title"><a href="#" class="edit-record-ttenant" data-idtenant="<?php echo $datatenant['id_tenant'] ?>"><button type="button" class="btn btn-success pull-left btn-xs"><i class="fa fa-edit"></i> Tambah Tenant</button>&nbsp;&nbsp;</a></h3>
			
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
							<th>Nama Tenant</th>
							<th>Telp</th>
							<th>Lt</th>
							<th>Aksi</th>
							
						   
						   
						</tr>
					</thead>
					<tbody>
						<?php 
						include "koneksi.php";
						$no=1;
						$sqltenant=mysqli_query($koneksi,"SELECT * FROM tenant");
						while($datatenant=mysqli_fetch_array($sqltenant))
						{		
							
							
							
						?>
						<tr class="odd gradeX">
							
						   <td align="center"><?php echo $no ?></td>
							<td><?php echo $datatenant['nama_tenant'] ?></td>
							<td><?php echo $datatenant['telepon_tenant'] ?></td>
							<td><?php echo $datatenant['lantai_tenant'] ?></td>
							<td><a href="#" class="edit-record-etenant" data-idtenant="<?php echo $datatenant['id_tenant'] ?>"><button type="button" class="btn btn-success pull-left btn-xs"><i class="fa fa-edit"></i> Edit</button>&nbsp;&nbsp;</a>&nbsp;&nbsp; <a href="?page=daftartenant&idtenanthapus=<?php echo $datatenant['id_tenant'] ?>"onclick="return confirm('Anda Yakin Akan Hapus Tenant Ini ... ?')"><button type="button" class="btn btn-danger pull-left btn-xs"><i class="fa fa-power-off"></i> Hapus</button></a></td>				
						 
						</tr>
						 <?php
						 $no++;
						  }
						  ?>
					</tbody>
				</table>
				<!-- /.table-responsive -->
				
		<div class="modal fade" id="myModalttenant" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">Tambah Tenant</h4>
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
		
		
		<div class="modal fade" id="myModaletenant" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit Tenant</h4>
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
  


