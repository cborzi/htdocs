<?php 

if ($_SERVER["REQUEST_METHOD"] === "POST") {

	// sucetivel a ataque hacker
	//$cmd = $_POST["cmd"];

	// meio seguro
	// dir c: && C:\xampp\xampp_stop.exe
	$cmd = escapeshellcmd($_POST["cmd"]);
	var_dump($cmd);

	echo "<pre>";

	$comando = system($cmd, $retorno);

	echo "</pre>";
}

?>

<form method="post">
	
	<input type="text" name="cmd">
	<button type="submit">Enviar</button>

</form>