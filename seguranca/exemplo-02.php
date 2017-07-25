<?php 

// exemplo na linha do browser
//http://localhost:8080/seguranca/exemplo-02.php?id=4 or 1=1 -- (traz tudo - ataque hacker)
	
$id = (isset($_GET["id"]))?$_GET["id"]:3;

// Algum teste para bloqueio
if(!is_numeric($id) || strlen($id) > 4) {

	exit("Pegamos você!!");
}

$conn = mysqli_connect("localhost", "root", "", "dbphp7");

$sql = "SELECT * FROM tb_usuarios WHERE idusuario = $id";

$exec = mysqli_query($conn, $sql);

while ($resultado = mysqli_fetch_object($exec)) {

	//echo $resultado->deslogin . "<br>";
	var_dump($resultado);
}



?>

