<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 2;

// ? - primeiro parametro do array assim por diante
$stmt->execute(array($id));

//$conn->rollback();
$conn->commit();

echo "Delete OK!";

?>