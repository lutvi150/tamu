<?php
$uploads_dir = 'saved_images/';
move_uploaded_file($_FILES['webcam']['tmp_name'], $uploads_dir.'foto.jpg');
?>