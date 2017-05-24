<?php

$images = glob("images/particulier/{*.jpg,*.gif,*.png}", GLOB_BRACE);
print_r($images);



?>