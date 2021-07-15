				
	<section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah user Depo</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>	
		<div class="box-body">
          <div class="row">
		  <br>
				<form class="form-horizontal" action="?page=simpanuserdepo" method="POST"  enctype="multipart/form-data">
				  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">username</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputName" name="username" placeholder="username">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Nama Lengkap</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputName" name="namalengkap" placeholder="Nama Lengkap">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Telepon</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputName" placeholder="Telepon" name="telepon">
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
                    <label for="inputSkills" class="col-sm-2 control-label">Hak Akses</label>

                    <div class="col-sm-9">
                      <input type="radio" name="hakakses2" id="optionsRadios2" value="Admin">Admin &nbsp;
					  <input type="radio" name="hakakses2" id="optionsRadios2" value="Operator">Operator &nbsp;
                      
					</div>
                  </div>
				  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Aktif</label>

                    <div class="col-sm-9">
                      <input type="radio" name="aktif" id="optionsRadios2" value="1">Ya &nbsp;
					  <input type="radio" name="aktif" id="optionsRadios2" value="0">Tidak &nbsp;
                      
					</div>
                  </div>
				  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Musnahkan Arsip</label>

                    <div class="col-sm-9">
                      <input type="radio" name="hapusarsip" id="optionsRadios2" value="1">Ya &nbsp;
					  <input type="radio" name="hapusarsip" id="optionsRadios2" value="0">Tidak &nbsp;
                      
					</div>
                  </div>
				  
				  
				  <?php 
				  if($hakakses=="Superadmin")
				  {
				  ?>
				  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Jenis user</label>

					<div class="col-sm-9">
					  <input type="text" class="form-control" id="inputName" name="jenisuser2" value="Depo" readonly>
                  
					  
					</div>
                  </div>
				  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Nama Depo</label>

					<div class="col-sm-9">
					  <select class="form-control select2" style="width: 100%;" name="kodedepouser">
					  <option>--Pilih Depo --</option>
					  
						<?php

						include "koneksi.php";
						$sqldepo = mysqli_query($koneksi,"select * from depo order by nama_depo asc");
						while ($datadepo=mysqli_fetch_array($sqldepo))
						{
							?>

							<option value="<?php echo $datadepo['kode_depo'] ?>"><?php echo $datadepo['nama_depo'] ?></option>

							<?php
						}
						?>
					  </select>
					</div>
                   </div>
				  <?php
				  }
				  else
				  {
				  ?>
				  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Jenis user</label>

					<div class="col-sm-9">
					  <input type="text" class="form-control" id="inputName" name="jenisuser2" value="Depo" readonly>
                  
					  
					</div>
                  </div>
				  
				  
				  <?php
				  }
				  ?>
                  
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-9">
                      <button type="submit" class="btn btn-danger" name="submit">Submit</button>
                    </div>
                  </div>
                </form>
			</div>
		
		</section>