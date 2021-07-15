<?php
$id=$_POST['id'];
include "koneksi.php";
$sqllog=mysqli_query($koneksi,"SELECT lt.no_log,lt.uid, tm.nik, tm.jenis_kelamin, tm.nama, tm.alamat, tm.instansi, lt.tujuan, tn.nama_tenant, lt.no_kartu, lt.check_in, lt.check_out, lt.foto FROM log_tamu AS lt LEFT JOIN tamu AS tm ON lt.uid=tm.uid LEFT JOIN tenant AS tn ON tn.id_tenant=lt.id_tenant LEFT JOIN user AS us ON us.kode_user=lt.id_user where lt.no_log='$id'");
$datalog=mysqli_fetch_array($sqllog);
?>
<div class="box box-primary">
            <div class="box-header with-border">
             
            </div>
            <!-- /.box-header -->
            <!-- form start -->
           
              <div class="box-body">
				<div class="form-group">
                  <center><img src="gambar/<?php echo $datalog['foto'] ?>"></center>
				  
				</div>	
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Lengkap</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $datalog['nama'] ?>" readonly>
				  
				</div>
				<div class="form-group">
                  <label for="exampleInputEmail1">No Identitas</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $datalog['nik'] ?>" readonly>
				  
				</div>
				<div class="form-group">
                  <label for="exampleInputEmail1">Jenis Kelamin</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $datalog['jenis_kelamin'] ?>" readonly>
				  
				</div>
				<div class="form-group">
                  <label for="exampleInputEmail1">Alamat</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $datalog['alamat'] ?>" readonly>
				  
				</div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Instansi</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $datalog['instansi'] ?>" readonly>
				  
				</div>
				<div class="form-group">
                  <label for="exampleInputEmail1">Tujuan Tenant</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $datalog['nama_tenant'] ?>" readonly>
				  
				</div>
				<div class="form-group">
                  <label for="exampleInputEmail1">Keperluan</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $datalog['tujuan'] ?>" readonly>
				  
				</div>
				<div class="form-group">
                  <label for="exampleInputEmail1">Check-In</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $datalog['check_in'] ?>" readonly>
				  
				</div>
				<div class="form-group">
                  <label for="exampleInputEmail1">Check-Out</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $datalog['check_out'] ?>" readonly>
				  
				</div>
				<div class="form-group">
                  <label for="exampleInputEmail1">No Kartu</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $datalog['no_kartu'] ?>" readonly>
				  
				</div>
              </div>
              <!-- /.box-body -->

              
          </div>