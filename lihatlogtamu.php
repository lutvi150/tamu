
<div class="box box-primary">
            <div class="box-header with-border">
             
            </div>
            <!-- /.box-header -->
            <!-- form start -->
           
              <div class="box-body">
				<div class="form-group">
                  <table class="table table-condensed">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Tenant</th>
                  <th>Keperluan</th>
                  <th>No Kartu</th>
				  <th>Check-In</th>
				  <th>Check-Out</th>
                </tr>
				<?php
				$id=$_POST['id'];
				$no=1;
				include "koneksi.php";
				$sqllog=mysqli_query($koneksi,"SELECT lt.no_log,lt.uid, tm.nik, tm.jenis_kelamin, tm.nama, tm.alamat, tm.instansi, lt.tujuan, tn.nama_tenant, lt.no_kartu, lt.check_in, lt.check_out, lt.foto FROM log_tamu AS lt LEFT JOIN tamu AS tm ON lt.uid=tm.uid LEFT JOIN tenant AS tn ON tn.id_tenant=lt.id_tenant LEFT JOIN user AS us ON us.kode_user=lt.id_user where lt.uid='$id'");
				while($datalog=mysqli_fetch_array($sqllog))
				{
					$cekout=$datalog['check_out'];
				?>
                <tr>
                  <td><?php echo $no ?></td>
                  <td><?php echo $datalog['nama_tenant'] ?></td>
                  <td><?php echo $datalog['tujuan'] ?></td>
				  <td><?php echo $datalog['no_kartu'] ?></td>
				  <td><?php echo $datalog['check_in'] ?></td>
				  <?php
							if ($cekout=="0000-00-00 00:00:00")
							{
							?>
							
							<td><button type="button" class="btn btn-danger pull-left btn-xs">Belum Check-Out</button></td>
							
							<?php
							}
							else
							{
							?>
							<td><?php echo $datalog['check_out'] ?></td>
							
							<?php
							}
							?>
                </tr>
               <?php
			   $no++;
				}
				?>
              </table>
				  
				</div>	
                
              </div>
              <!-- /.box-body -->

              
          </div>