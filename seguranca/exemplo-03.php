<?php 

$pasta = "arquivos";
$permisssao = "0775";


if (!is_dir($pasta)) mkdir($pasta, $permisssao);

echo "Diretorio criado com sucesso!";




?>

