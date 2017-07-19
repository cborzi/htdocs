<?php 

$varcookie = $_COOKIE["NOME_DO_COOKIE"]; 

if(isset($varcookie)) {

	//var_dump($varcookie);
	//var_dump(json_decode($varcookie));
	$obj = json_decode($varcookie);
	echo $obj->empresa;

}


?>
