<?php 
$ini = parse_ini_file('../config/config.ini');

$all_files = glob("../../Img/*.{jpg,jpeg,jfif,png,webp}", GLOB_BRACE);


$imgArray = [];

for ($i=0; $i<count($all_files); $i++) {
$image_name = $all_files[$i];
array_push($imgArray, $image_name);
}
?>