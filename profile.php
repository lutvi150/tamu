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

if($datauser['aktif']=="1")
{
	$status="Aktif";
}
else
{
	$status="Non Aktif";
}


?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Profile
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="foto/<?php echo $foto ?>" alt="user profile picture">

              <h3 class="profile-username text-center"><?php echo $datauser['nama'] ?></h3>

              <p class="text-muted text-center">&nbsp;</p>

              

              <a href="#" class="btn btn-primary btn-block"><b><?php echo $status ?></b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
			
			
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Email</strong>

              <p class="text-muted">
                <?php echo $datauser['email_user'] ?>
              </p>
			  <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Telepon</strong>

              <p class="text-muted"> <?php echo $datauser['telepon_user'] ?></p>

              

             
            </div>
			
			
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Activity</a></li>
             
              <li><a href="#settings" data-toggle="tab">Settings</a></li>
			 
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Tab 1 -->
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
						$sqllog=mysqli_query($koneksi,"SELECT * FROM log_activity where kode_user='$iduser' order by tanggal DESC limit 0,100");
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
				</div>
                
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="settings">
                <form class="form-horizontal" action="?page=updateprofile" method="POST"  enctype="multipart/form-data">
				  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">username</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" name="username" value="<?php echo $datauser['username'] ?>" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Nama Lengkap</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" name="namalengkap" value="<?php echo $datauser['nama'] ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email" value="<?php echo $datauser['email_user'] ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Telepon</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" placeholder="Telepon" name="telepon" value="<?php echo $datauser['telepon_user'] ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Ganti Password</label>

                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="inputName" name="passwordbaru" placeholder="Password Baru" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Ulangi Password</label>

                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="inputName" name="ulangipassword" placeholder="Ulangi Password Baru">
                    </div>
                  </div>
				  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Foto</label>

                    <div class="col-sm-10">
                      <input type="file" class="form-control" id="inputSkills" name="foto"> *)Rekomendasi 256px x 256px
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger" name="submit">Update</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
			  
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
