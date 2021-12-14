<?php

$image = imagecreatetruecolor(300, 300);

$cor = imagecolorallocate($image,2, 255, 1);

imagefill($image, 0, 0, $cor);

//header("Content-Type: image/jpeg");

imagejpeg($image, 'nova_imagem.jpeg', 100);