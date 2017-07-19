<?php 

$filename = "usuarios.csv";

if(file_exists($filename)) {

	$file = fopen($filename, "r");

	$headers = explode(",", fgets($file));

	//var_dump($headers);

	$data = array();

	while($row = fgets($file)) {

		//var_dump($row);

		$rowData = explode(",", $row);

		for($i=0; $i < count($headers); $i++) {

			$linha[$headers[$i]] = $rowData[$i];

		}

		array_push($data, $linha);

	}

	fclose($file);

	echo json_encode($data);

}



?>