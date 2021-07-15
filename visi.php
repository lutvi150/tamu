<?php
include"koneksi.php";
$sql=mysqli_query($koneksi,"select * from about where id_about='4'");
$data=mysqli_fetch_array($sql);
?>
<section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Visi dan Misi</h3>

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
                    <label for="inputName" class="col-sm-2 control-label">Judul</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputName" name="judul" value="<?php echo $data['judul_about2'] ?>" readonly>
                    </div>
                  </div>
                 
				 
				  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Isi</label>

					<div class="col-sm-9">
					
						<textarea id="editor1" name="editor1" rows="10" cols="80">
                        <?php echo $data['deskripsi_about'] ?>
						</textarea>
                  
					
					</div>
                  </div>
				  
				  
                  
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-9">
                      <button type="submit" class="btn btn-danger" name="submit">Submit</button>
                    </div>
                  </div>
                </form>
			</div>
		
		</section>