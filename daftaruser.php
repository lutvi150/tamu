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
$sqltenant=mysqli_query($koneksi, "select * from tenant where kode_tenant='$kodetenant'");
$datatenant=mysqli_fetch_array($sqltenant);

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    include "koneksi.php";
	$iddivisi=$_POST['iddivisi'];
	$namadivisi=$_POST['namadivisi'];
	$alias=$_POST['alias'];
	
	if($namadivisi !="")
	{
		if($iddivisi !="")
		{
		mysqli_query($koneksi, "update divisi set nama_divisi='$namadivisi', alias_divisi='$alias' where kode_divisi='$iddivisi'");
		//log activity
		  
		  $ip=$_SERVER['REMOTE_ADDR'];
		  date_default_timezone_set('Asia/Jakarta');
		  
		  $today=date("Y-m-d H:i:s");
		  $activity="user Mengupdate Divisi $namadivisi";
		  mysqli_query($koneksi,"insert into log_activity values('','$iduser','$activity','$ip','$today')");
		}
		else
		{
		mysqli_query($koneksi, "insert into divisi values('','$namadivisi','','$kodetenant','$alias')");
		//log activity
		  
		  $ip=$_SERVER['REMOTE_ADDR'];
		  date_default_timezone_set('Asia/Jakarta');
		  
		  $today=date("Y-m-d H:i:s");
		  $activity="user Menambahkan Divisi $namadivisi";
		  mysqli_query($koneksi,"insert into log_activity values('','$iduser','$activity','$ip','$today')");
		}
	}
}
?>

<section class="content-header">
      <h1>
       Daftar User
        <small>&nbsp;</small>
      </h1>
      
    </section>

    <!-- Main content -->
<section class="content">
<div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title"><a href="?page=tambahuser"><button type="button" class="btn btn-block btn-primary">Tambah user</button></a></h3>
			
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
							<th>Nama Lengkap</th>
							<th>username</th>
							
							<th>Aktif</th>
							<th>Telepon</th>
							<th>Email</th>
							
							<th>Login</th>
							<th>Aksi</th>
							
						   
						   
						</tr>
					</thead>
					<tbody>
						<?php 
						include "koneksi.php";
						$no=1;
						
						$sqluser=mysqli_query($koneksi,"SELECT * FROM user");
						
						while($datauser=mysqli_fetch_array($sqluser))
						{		
							
							if($datauser['aktif']=="1")
							{
								$cek="<img src=images/ceklist.PNG height=20 width=20>";
							}
							else
							{
								$cek="<img src=images/no.PNG height=20 width=20>";
							}
							
							
							
							if($datauser['login']=="1")
							{
								$online="success";
							}
							else if($datauser['login']=="0")
							{
								$online="danger";
							}
						?>
						<tr class="odd gradeX">
							
						   <td align="center"><?php echo $no ?></td>
							<td><?php echo $datauser['nama'] ?></td>
							<td><?php echo $datauser['username'] ?></td>
							
							<td align="center"><?php echo $cek ?></td>
							<td><?php echo $datauser['telepon_user'] ?></td>
							<td><?php echo $datauser['email_user'] ?></td>
							
							<td align="center"><i class="fa fa-circle text-<?php echo $online ?>"></i></td>
							<td><a href="?page=edituser&kodeuser=<?php echo $datauser['kode_user'] ?>"> <button type="button" class="btn btn-success pull-left btn-xs"><i class="fa fa-edit"></i> Edit</button></a></td>
							
						</tr>
						 <?php
						 $no++;
						  }
						  ?>
					</tbody>
				</table>
				<!-- /.table-responsive -->
				
		<div class="modal fade" id="myModaltdivisi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">Tambah Divisi</h4>
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
		
		
		<div class="modal fade" id="myModaledivisi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit Divisi</h4>
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
  


