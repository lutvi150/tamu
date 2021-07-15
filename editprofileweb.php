<?php
include"koneksi.php";
$idstory=$_GET['idstory'];
$sql=mysqli_query($koneksi,"select * from sukses_story where id_story='$idstory'");
$data=mysqli_fetch_array($sql);
if($data['foto_story'] =="")
{
	$foto="noimage.jpg";
}
else
{
	$foto=$data['foto_story'];
}
?>
<section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Sukses Story</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>	
		<div class="box-body">
          <div class="row">
		  <br>
				<form class="form-horizontal" action="?page=updatestory" method="POST"  enctype="multipart/form-data">
				  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Nama</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputName" name="namamahasiswa" value="<?php echo $data['nama_mahasiswa'] ?>">
					  <input type="hidden" name="idstory" value="<?php echo $idstory ?>">
					</div>
                  </div>
                 
				 
				  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Jenis Jabatan</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputName" name="jenisjabatan" value="<?php echo $data['jenis_jabatan'] ?>">
					  
					</div>
                  </div>
				  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Jabatan</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputName" name="jabatan" value="<?php echo $data['jabatan'] ?>">
					  
					</div>
                  </div>
				  
				  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Story</label>

					<div class="col-sm-9">
					
						<textarea id="editor1" name="story" rows="10" cols="80">
                        <?php echo $data['story'] ?>
						</textarea>
                  
					
					</div>
                  </div>
				  
				  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Foto</label>

                    <div class="col-sm-3">
                      <input type="file" class="form-control" id="inputName" name="fotostory">
                    </div>
					*) Ganti Foto
                  </div>
				  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label"></label>

                    <div class="col-sm-3">
                      <img src="story/<?php echo $foto ?>" width="180" height="180">
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