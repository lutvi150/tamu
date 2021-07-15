<?php
include "koneksi.php";
$id=$_POST['id'];
$sqltenant=mysqli_query($koneksi,"SELECT * FROM tenant where id_tenant='$id'");
$datatenant=mysqli_fetch_array($sqltenant);
?>
<div class="box box-primary">
	<div class="box-header with-border">
	 
	</div>
	<!-- /.box-header -->
	<!-- form start -->
   
	  <div class="box-body">
		<div class="form-group">
		  <label for="exampleInputEmail1">Nama Tenant</label>
		  <input type="text" class="form-control" id="exampleInputEmail1" name="namatenant" value="<?php echo $datatenant['nama_tenant'] ?>">
		</div>
		<div class="form-group">
		  <label for="exampleInputEmail1">Telp Tenant</label>
		  <input type="text" class="form-control" id="exampleInputEmail1" name="telptenant" value="<?php echo $datatenant['telepon_tenant'] ?>">
		</div>
		<div class="form-group">
		  <label for="exampleInputEmail1">Lantai Tenant</label>
		  <input type="text" class="form-control" id="exampleInputEmail1" name="lantaitenant" value="<?php echo $datatenant['lantai_tenant'] ?>">
		  <input type="hidden" name="idtenant" value="<?php echo $id ?>">
		</div>
	   
		
	  </div>
	  <!-- /.box-body -->

	  
  </div>