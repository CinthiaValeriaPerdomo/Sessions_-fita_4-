<?php
	session_start();

	if (isset($_POST['ocult']) && $_POST['ocult'] !== ""){
		$_SESSION['ocult'] = (int) $_POST['ocult'];
	}


?>

<!DOCTYPE html>
<html>
<head lang="es">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ex41pagina2</title>
	<style>
		a{
			text-decoration: none;
			font-family: sans-serif;
			color: black;
		}
	</style>
</head>
<body>
	<h1>Exercici 4.1 (pag 2)</h1>
	<br>
	<h2>Número Registrado</h2>
	<br>
	<a href="ex41pagina3.php">Adivinar</a>
</body>
</html>