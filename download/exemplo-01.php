<?php 

$link = "https://logodownload.org/wp-content/uploads/2015/05/palmeiras-logo-266x266.png";

$content = file_get_contents($link);

//var_dump($content);

$parse = parse_url($link);

//var_dump(basename($parse["path"]));

$basename = basename($parse["path"]);

$file = fopen($basename, "w+");

fwrite($file, $content);

fclose($file);

?>

<img src="<?=$basename?>">
