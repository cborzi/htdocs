<?php 

if(!is_dir("images")) mkdir("images");

foreach (scandir("images") as $item) {

	if(!in_array($item, array(".",".."))) {

		$filename = "images" . DIRECTORY_SEPARATOR . $item;
		
		unlink($filename);

	}
}

echo "ok";

?>