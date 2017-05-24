<?php

$id = $_GET['id'];

$images = glob("images/".$id."/{*.jpg,*.gif,*.png}", GLOB_BRACE);

echo realpath("");
echo json_encode($images);


?>