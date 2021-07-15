<!DOCTYPE html>
<html>
<head>
	<title>WebCam jQuery and PHP script</title>
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
</head>
<body>

<form action="" method="post">
<input type="text" name="uid2" autofocus>
</form>
    
<?php error_reporting(0);
$idkartu="";

$idkartu=$_POST['uid2'];
include "koneksi.php";
$sql=mysqli_query($koneksi,"select * from tamu where uid='$idkartu'");
$datatamu=mysqli_fetch_array($sql);

?>	
	<!-- camera screen -->
	<table>
	
	<tr>
	<td>
	<div id="camera_wrapper">
	<div id="camera"></div>
	<br />
	<button id="capture_btn">Capture</button>
	</div>
	<!-- show captured image -->
	<div id="show_saved_img" ></div>
	</td>
	</tr>
	<tr>
	<td>
	<form action="simpan.php" method="POST">
	<h3>Data Tamu</h3>
	<table>
	<tr>
	<td>
	Tag UID
	</td>
	<td>
	:
	</td>
	<td>
	<input type="text" name="uid" value="<?php echo $idkartu ?>" readonly>
	</td>
	</tr>
	<tr>
	<td>
	No Identitas
	</td>
	<td>
	:
	</td>
	<td>
	<input type="text" name="identitas" value="<?php echo $datatamu['nik'] ?>">
	</td>
	</tr>
	<tr>
	<td>
	Nama Tamu
	</td>
	<td>
	:
	</td>
	<td>
	<input type="text" name="nama" value="<?php echo $datatamu['nama'] ?>">
	</td>
	</tr>
	<tr>
	<td>
	Alamat
	</td>
	<td>
	:
	</td>
	<td>
	<input type="text" name="alamat" value="<?php echo $datatamu['alamat'] ?>">
	</td>
	</tr>
	<tr>
	<td>
	Instansi
	</td>
	<td>
	:
	</td>
	<td>
	<input type="text" name="instansi" value="<?php echo $datatamu['instansi'] ?>">
	</td>
	</tr>
	
	</table>
	<input type="submit" value="Simpan Tamu">
	</form>
	</td>
	</tr>
</body>
</html>
