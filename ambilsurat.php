<?php
include "koneksi.php";
$id=$_POST['id'];
$sqlsurat=mysqli_query($koneksi,"SELECT * from surat_masuk as sm left join tenant as tn on tn.id_tenant=sm.tenant left join user as us on us.kode_user=sm.id_user where sm.id_suratmasuk='$id'");
$datasurat=mysqli_fetch_array($sqlsurat);
?>
<div class="box box-primary">
	<div class="box-header with-border">
	 
	</div>
	<!-- /.box-header -->
	<!-- form start -->
   
	  <div class="box-body">
	    <div class="form-group">
		  <label for="exampleInputEmail1">Jenis Surat/Barang</label>
		  <input type="text" class="form-control" id="exampleInputEmail1" name="" value="<?php echo $datasurat['jenis_surat'] ?>" readonly>
		</div>
		<div class="form-group">
		  <label for="exampleInputEmail1">Nama Surat/Barang</label>
		  <input type="text" class="form-control" id="exampleInputEmail1" name="namasurat" value="<?php echo $datasurat['nama_surat'] ?>" readonly>
		</div>
		<div class="form-group">
		  <label for="exampleInputEmail1">Pengirim</label>
		  <input type="text" class="form-control" id="exampleInputEmail1" name="" value="<?php echo $datasurat['pengirim'] ?>" readonly>
		</div>
		<div class="form-group">
		  <label for="exampleInputEmail1">Penerima</label>
		  <input type="text" class="form-control" id="exampleInputEmail1" name="penerima" value="<?php echo $datasurat['penerima'] ?>" readonly>
		  <input type="hidden" name="idsuratmasuk" value="<?php echo $id ?>">
		</div>
		<div class="form-group">
		  <label for="exampleInputEmail1">Diambil</label>
		  <input type="text" class="form-control" id="exampleInputEmail1" name="diambil" required>
		</div>
		
	  </div>
	  <!-- /.box-body -->

	  
  </div>