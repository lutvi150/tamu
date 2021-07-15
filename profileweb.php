<?php
include"koneksi.php";

$sql=mysqli_query($koneksi,"select * from profile");
$data=mysqli_fetch_array($sql);
if($data['logo'] =="")
{
	$foto="noimage.jpg";
}
else
{
	$foto=$data['logo'];
}
?>
<section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Profile Web</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>	
		<div class="box-body">
          <div class="row">
		  <br>
				<form class="form-horizontal" action="?page=updateprofileweb" method="POST"  enctype="multipart/form-data">
				  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Alamat Website</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputName" name="alamatwebsite" value="<?php echo $data['alamat_web'] ?>">
					  
					</div>
                  </div>
                 
				 
				  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Nama Website</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputName" name="namaweb" value="<?php echo $data['nama_web'] ?>">
					  
					</div>
                  </div>
				  				  
				  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Deskripsi Web</label>

					<div class="col-sm-9">
					
						<textarea id="editor1" name="deskripsiweb" rows="10" cols="80">
                        <?php echo $data['deskripsi_web'] ?>
						</textarea>
                  
					
					</div>
                  </div>
				  
				  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Nama Company</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputName" name="namacompany" value="<?php echo $data['nama_company'] ?>">
					  
					</div>
                  </div>
				  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Alamat company</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputName" name="alamatcompany" value="<?php echo $data['alamat_company'] ?>">
					  
					</div>
                  </div>
				  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Telepon company</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputName" name="teleponcompany" value="<?php echo $data['telepon_company'] ?>">
					  
					</div>
                  </div>
				  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Fax company</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputName" name="faxcompany" value="<?php echo $data['fax_company'] ?>">
					  
					</div>
                  </div>
				  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Logo company</label>

                    <div class="col-sm-3">
                      <input type="file" class="form-control" id="inputName" name="logocompany">
                    </div>
					*) Ganti Logo
                  </div>
				  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label"></label>

                    <div class="col-sm-3">
                      <img src="profile/<?php echo $data['logo'] ?>" width="60" height="60">
                    </div>
					
                  </div>

				  
				  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Email Company</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputName" name="emailcompany" value="<?php echo $data['email_company'] ?>">
					  
					</div>
                  </div>
				  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Facebook</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputName" name="facebook" value="<?php echo $data['facebook'] ?>">
					  
					</div>
                  </div>
				  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Twitter</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputName" name="twitter" value="<?php echo $data['twitter'] ?>">
					  
					</div>
                  </div>
				  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">YouTube</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputName" name="youtube" value="<?php echo $data['youtube'] ?>">
					  
					</div>
                  </div>
				  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Linkind</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputName" name="linkind" value="<?php echo $data['linkind'] ?>">
					  
					</div>
                  </div>
				  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Instagram</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputName" name="instagram" value="<?php echo $data['instagram'] ?>">
					  
					</div>
                  </div>
				  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Whatsapp</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputName" name="whatsapp" value="<?php echo $data['whatsapp'] ?>">
					  
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