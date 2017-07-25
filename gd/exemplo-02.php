<?php 

$image = imagecreatefromjpeg("certificado.jpg");

$tileColor = imagecolorallocate($image,   0, 0, 0);
$gray      = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5, 450, 150, "CERTIFICADO", $tileColor);
imagestring($image, 5, 440, 350, "CARLOS     ", $tileColor);
imagestring($image, 3, 440, 370, utf8_decode("Concluído em: " . date("d/m/Y")), $tileColor);

header("Content-Type: image/png");

// mostra na tela
//imagejpeg($image);

// salva em disco
imagejpeg($image, "certificado-".date("Y-m-d").".jpg");

imagedestroy($image);


?>