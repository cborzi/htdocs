<?php

$pessoas = array();

array_push($pessoas, array (
	'nome'=>'Carlos',
	'idade'=>49
));

array_push($pessoas, array (
	'nome'=>'Lucas',
	'idade'=>1
));

//print_r($pessoas[0]);
echo json_encode($pessoas);

?>