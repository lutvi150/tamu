<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
  <style>
		#camera_wrapper, #show_saved_img{float:left; width: 340px;}
	</style>
	
	<script type="text/javascript" src="js/webcam.js"></script>
	<script>
		$(function(){
			//give the php file path
			webcam.set_api_url( 'saveimage.php' );
			webcam.set_swf_url( 'js/webcam.swf' );//flash file (SWF) file path
			webcam.set_quality( 100 ); // Image quality (1 - 100)
			webcam.set_shutter_sound( true ); // play shutter click sound
			
			var camera = $('#camera');
			camera.html(webcam.get_html(300, 260)); //generate and put the flash embed code on page
			
			$('#capture_btn').click(function(){
				//take snap
				webcam.snap();
				$('#show_saved_img').html('<h3>Please Wait...</h3>');
			});
			

			//after taking snap call show image
			webcam.set_hook( 'onComplete', function(img){
				$('#show_saved_img').html('<img src="' + img + '">');
				//reset camera for the next shot
				webcam.reset();
			});
			
		});
	</script>



<section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Log Surat/Barang Masuk</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="?page=simpansurat" method="post" enctype="multipart/form-data">
              <div class="box-body">
                
				<div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Jenis Surat/Barang</label>

                  <div class="col-sm-10">
                   <select class="form-control" name="jenissurat" required>
                    <option value="Surat">Surat</option>
                    <option value="Dokumen">Dokumen</option>
					<option value="Barang">Barang</option>
					<option value="Lainnya">Lainnya</option>
                  </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Surat/Barang</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="namasurat" id="inputEmail3" required >
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Pengirim</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="pengirim" id="inputEmail3" required>
                  </div>
                </div>
				<div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Penerima/Untuk</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" name="penerima" >
                  </div>
                </div>
				
				<div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Tenant</label>

                  <div class="col-sm-10">
                   <select class="form-control select2" name="idtenant">
				    <?php 
					include"koneksi.php";
					$sqltenant=mysqli_query($koneksi,"select * from tenant order by nama_tenant asc");
					while($datatenant=mysqli_fetch_array($sqltenant))
					{
					?>
                    <option value="<?php echo $datatenant['id_tenant'] ?>"><?php echo $datatenant['nama_tenant'] ?></option>
                    <?php
					}
					?>
                    
                  </select>
                  </div>
                </div>
				<div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Keterangan</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" name="keterangan" >
                  </div>
                </div>
				
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                
                <button type="submit" class="btn btn-info pull-right">Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
		  
          <!-- /.box -->

          <!-- Form Element sizes -->
         

          
          <!-- /.box -->

        

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"></label>

                  <div class="col-sm-10">
                    <img src="gedung.png">
                  </div>
                </div>
                
               
              </div>
              <!-- /.box-body -->
             
            </div>
          </div>
          <!-- /.box -->
        
          <!-- /.box -->
        </div>
        <!--/.col (right) -->

      <!-- /.row -->
		
		</section>