<?php
include"koneksi.php";
$idkonten=$_GET['idkonten'];
$sql=mysqli_query($koneksi,"select * from konten where id_konten='$idkonten'");
$data=mysqli_fetch_array($sql);
if($data['foto_konten'] =="")
{
	$foto="noimage.jpg";
}
else
{
	$foto=$data['foto_konten'];
}
?>
<section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title"><?php echo $data['nama_konten'] ?></h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>	
		<div class="box-body">
          <div class="row">
		  <br>
				<form class="form-horizontal" action="?page=updatekonten" method="POST"  enctype="multipart/form-data">
				  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Judul</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputName" name="judul" value="<?php echo $data['nama_konten'] ?>">
					  <input type="hidden" name="idkonten" value="<?php echo $idkonten ?>">
					</div>
                  </div>
                 
				 
				  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Isi</label>

					<div class="col-sm-9">
					
						<textarea id="editor1" name="isikonten" rows="10" cols="80">
                        <?php echo $data['deskripsi_konten'] ?>
						</textarea>
                  
					
					</div>
                  </div>
				  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Foto</label>

                    <div class="col-sm-3">
                      <input type="file" class="form-control" id="inputName" name="fotokonten">
                    </div>
                  *) Ganti Foto
                  </div>
				  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label"></label>

                    <div class="col-sm-3">
                      <img src="konten/<?php echo $foto ?>" width="200">
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