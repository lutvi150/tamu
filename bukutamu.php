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
<style>
  .camera {
    border-radius: 50px;
  }
</style>
<section class="content">

  <!-- SELECT2 EXAMPLE -->
  <div class="box box-default">
    <div class="box-header with-border">
      <h3 class="box-title">Data Tamu</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
      </div>
    </div>
    <div class="box-body">
      <div class="row">

        <div class="form-group">
          <label for="inputName" class="col-sm-2 control-label">Letakan Kartu</label>

          <div class="col-sm-9">
            <form action="" method="post">


              <input type="text" class="form-control" id="uid" name="uid2" autofocus
                placeholder="Letakan Kartu diatas reader. Jika tidak terdeteksi, silahkan input manual no id kartu kemudian enter">
              <br>

            </form>
          </div>
        </div>
        <br><br>
        <div class="form-group">
          <label for="inputName" class="col-sm-2 control-label"></label>

          <div class="col-sm-9">


          </div>
        </div>

      </div>
    </div>

</section>
<?php error_reporting(0);
$idkartu="";

$idkartu=$_POST['uid2'];
include "koneksi.php";
$sql=mysqli_query($koneksi,"select * from tamu where uid='$idkartu'");
$datatamu=mysqli_fetch_array($sql);

?>

<section class="content">

  <!-- SELECT2 EXAMPLE -->
  <div class="row">
    <!-- left column -->
    <div class="col-md-6">
      <!-- general form elements -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Identitas Tamu</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal" action="?page=simpantamu" method="post" enctype="multipart/form-data">
          <div class="box-body">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">UID</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" name="uid" id="inputEmail3" value="<?php echo $idkartu ?>"
                  required>
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Jenis Identitas</label>

              <div class="col-sm-10">
                <select class="form-control" name="jenisidentitas" required>
                  <option value="<?php echo $datatamu['jenis_id'] ?>"><?php echo $datatamu['jenis_id'] ?></option>
                  <option value="KTP">KTP</option>
                  <option value="SIM">SIM</option>
                  <option value="Passpor">Passpor</option>
                  <option value="KITAS">KITAS</option>
                  <option value="Lainnya">Lainnya</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">No Identitas</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" name="identitas" id="inputEmail3"
                  value="<?php echo $datatamu['nik'] ?>" required>
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Nama Lengkap</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" id="inputEmail3"
                  value="<?php echo $datatamu['nama'] ?>" required>
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Nomor Handphone (Whatsapp)</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" name="no_hp" id="inputEmail3"
                  value="<?php echo $datatamu['no_hp'] ?>" required>
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

              <div class="col-sm-10">
                <input type="email" class="form-control" name="email" id="inputEmail3"
                  value="<?php echo $datatamu['email'] ?>" required>
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" name="alamat"
                  value="<?php echo $datatamu['alamat'] ?>" required>
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Instansi</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" name="instansi"
                  value="<?php echo $datatamu['instansi'] ?>" required>
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Jenis Kelamin</label>

              <div class="col-sm-10">
                <select class="form-control" name="kelamin" required>
                  <option value="<?php echo $datatamu['jenis_kelamin'] ?>"><?php echo $datatamu['jenis_kelamin'] ?>
                  </option>
                  <option value="Laki-laki">Laki-laki</option>
                  <option value="Perempuan">Perempuan</option>

                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Tujuan </label>

              <div class="col-sm-10">
                <select class="form-control select2" name="idtenant" required>
                  <?php 
					include"koneksi.php";
					$sqltenant=mysqli_query($koneksi,"select * from tenant order by nama_tenant asc");
					while($datatenant=mysqli_fetch_array($sqltenant))
					{
					?>
                  <option value="<?php echo $datatenant['id_tenant'] ?>"><?php echo $datatenant['nama_tenant'] ?>
                  </option>
                  <?php
					}
					?>

                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Keperluan</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" name="tujuan">
              </div>
            </div>
            <!--<div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">No Kartu</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" name="nokartu" >
                  </div>
                </div> -->
          </div>
          <!-- /.box-body -->
          <div class="box-footer">

            <button type="submit" class="btn btn-info pull-right">Simpan Tamu</button>
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
          <h3 class="box-title">Identitas Foto</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <div class="form-horizontal">
          <div class="box-body">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label"></label>

              <div class="col-sm-10">
                <div id="camera_wrapper">
                  <div id="camera" class="camera" style="width:320px; height:240px;"></div>
                  <br />
                  <button id="capture_btn">Capture</button><br><br>
                </div>

                <br>
                <!-- show captured image -->
                <div id="show_saved_img"></div>

              </div>
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