<?php

$id = $_GET['id'];

$images = glob("images/".$id."/{*.jpg,*.gif,*.png}", GLOB_BRACE);


echo json_encode($images);


?>