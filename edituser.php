<?php
include "koneksi.php";
$kodeuser=$_GET['kodeuser'];
$sqluser2=mysqli_query($koneksi,"select * from user where kode_user='$kodeuser'");
$datauser2=mysqli_fetch_array($sqluser2);
if($datauser2['aktif']=="1")
{
	$cekaktif="checked";

}
else
{
	$cekaktif2="checked";
	
}	

?>	
	<section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Edit user</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>	
		<div class="box-body">
          <div class="row">
		  <br>
				<form class="form-horizontal" action="?page=updateuser" method="POST"  enctype="multipart/form-data">
				  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">username</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputName" name="username" value="<?php echo $datauser2['username'] ?>" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Nama Lengkap</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputName" name="namalengkap" value="<?php echo $datauser2['nama'] ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="inputEmail" value="<?php echo $datauser2['email_user'] ?>" name="email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Telepon</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputName" value="<?php echo $datauser2['telepon_user'] ?>" name="telepon">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Password</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="inputName" name="passwordbaru" placeholder="Password" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Ulangi Password</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="inputName" name="ulangipassword" placeholder="Ulangi Password">
                    </div>
                  </div>
				  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Foto</label>

                    <div class="col-sm-9">
                      <input type="file" class="form-control" id="inputSkills" name="foto">
                    </div>
                  </div>
				  
				  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Aktif</label>

                    <div class="col-sm-9">
                      <input type="radio" name="aktif" id="optionsRadios2" value="1" <?php echo $cekaktif ?>>Ya &nbsp;
					  <input type="radio" name="aktif" id="optionsRadios2" value="0" <?php echo $cekaktif2 ?>>Tidak &nbsp;
                      
					</div>
                  </div>
				  
				  
				  
                  
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-9">
                      <button type="submit" class="btn btn-danger" name="submit">Update</button>
                    </div>
                  </div>
                </form>
			</div>
		
		</section>