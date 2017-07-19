<?php 

$dir1 = "folder01";
$dir2 = "folder02";

if(!is_dir($dir1)) mkdir($dir1);
if(!is_dir($dir2)) mkdir($dir2);

$filename1 = $dir1 . DIRECTORY_SEPARATOR . "README.txt";

if(!file_exists($filename1)) {

	$file = fopen($filename1, "w+");

	fwrite($file, date("Y-m-d H:i:s"));

	fclose($file);

}

$filename2 = $dir2 . DIRECTORY_SEPARATOR . "README2.txt";

rename($filename1, $filename2);


?>
