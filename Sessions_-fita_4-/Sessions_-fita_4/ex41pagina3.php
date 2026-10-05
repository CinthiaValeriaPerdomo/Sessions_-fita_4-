<?php
	session_start();

	$ocult = $_SESSION['ocult'];
	$mensaje = "";
	$acertado = false;

	if (isset($_POST['adivina']) && $ocult !== null){
		$adivina = (int) $_POST['adivina'];

		if ($adivina > $ocult){
			$mensaje = "El número es mayor a $adivina";
		} elseif ($adivina < $ocult){
			$mensaje = "El número es menor a $adivina";
		}
		else{
			$acertado = true;
		}
	} 

?>

<!DOCTYPE html>
<html>
<head lang="es">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ex41pagina3</title>
	<style>
		a{
			text-decoration: none;
			font-family: sans-serif;
			color: black;
		}
	</style>
</head>
<body>
	<h1>Exercici 41 (pag 3)</h1>
	<br>
	<h2>ADIVINA EL NÚMERO</h2>



	<?php
		if ($ocult === null): ?>
			<p>No hay  ningún número registrado</p>
			<a href="ex41pagina1.php">Registrar un número</a>
	<?php
		elseif ($acertado): ?>
			<p>Felicidades!!! Haz acertado!!</p>
			<a href="ex41pagina1.php">Volver a Jugar</a>

	<?php
		else: 
			if ($mensaje !== ""){
				echo "<p>$mensaje</p>";
			}
	?>

	<form method="post" action="ex41pagina3.php">
		<input type="number" name="adivina" required>
		<input type="submit" value="Provar">
	</form>

	<?php endif;?>

</body>
</html>
