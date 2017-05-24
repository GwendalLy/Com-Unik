<?php

$id = $_GET['id'];

$images = glob("bmarine/images/".$id."/{*.jpg,*.gif,*.png}", GLOB_BRACE);

echo realpath("");
echo json_encode($images);


?>