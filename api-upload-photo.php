<?php
require_once __DIR__.'/_x.php';
ini_set("display_errors", 1);

_validate_image_upload();

$image = [
    'image_name'=>$_FILES['fileToUpload']['name']
];

_respond($image);
