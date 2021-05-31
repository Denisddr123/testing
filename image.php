<?php
header ("Content-type: image/png");
$im = ImageCreate (200, 100)
or die ("Невозможно создать поток изображения");
$couleur_fond = ImageColorAllocate ($im, 255, 100, 50);
ImagePng ($im);
imagedestroy($im);
?>