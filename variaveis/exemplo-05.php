<?php

// super globais
$nome = "Carlos";

function teste() {
	global $nome;
	echo $nome;
}

function teste2() {
	$nome = "Lucas";
	echo $nome;

}

teste();

echo "<br>";

teste2();


?>