<?php

$conn = new mysqli("localhost", "root", "", "dbphp7");

if($conn->connect_error){
	echo "Error: " . $conn->connect_error;
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, desenha) VALUES(?, ?)");

$login = "user";
$pass = "12345";

$stmt->bind_param("ss", $login, $pass); 

$stmt->execute();

$login = "carlos";
$pass = "#$%@";
$stmt->execute();

?>