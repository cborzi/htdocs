<?php 

$image = imagecreatefromjpeg("certificado.jpg");

$tileColor = imagecolorallocate($image,   0, 0, 0);
$gray      = imagecolorallocate($image, 100, 100, 100);

$f1 = "fonts".DIRECTORY_SEPARATOR."Bevan"   .DIRECTORY_SEPARATOR."Bevan-Regular.ttf";
$f2 = "fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf";

imagettftext($image, 32, 0, 320, 250, $tileColor, $f1, "CERTIFICADO");
imagettftext($image, 32, 0, 375, 350, $tileColor, $f2, "CARLOS");
imagestring($image, 3, 440, 370, utf8_decode("Concluído em: " . date("d/m/Y")), $tileColor);

header("Content-Type: image/png");

// mostra na tela
imagejpeg($image);

// salva em disco
//imagejpeg($image, "certificado-".date("Y-m-d").".jpg");

imagedestroy($image);

?>