<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->SetNome("Carlos");
$cad->SetEmail("Carlos@yahoo.com.br");
$cad->SetSenha("987654321");

//echo $cad;

$cad->registrarVenda();

?>