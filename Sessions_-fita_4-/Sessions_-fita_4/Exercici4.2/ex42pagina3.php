<?php
session_start();

$frase1 = $_SESSION["frase1"] ?? "";
$frase2 = $_POST["frase2"] ?? "";


function paraules($frase) {
    $frase = mb_strtolower($frase, "UTF-8");
    $frase = preg_replace('/[^\p{L}\p{N}\s]/u', '', $frase);
    return preg_split('/\s+/', trim($frase), -1, PREG_SPLIT_NO_EMPTY);
}

$p1 = paraules($frase1);
$p2 = paraules($frase2);

// Contamos las apariciones de cada palabra en cada frase
$c1 = array_count_values($p1);
$c2 = array_count_values($p2);

// Palabras que aparecen en las dos frases
$comunes = array_intersect(array_keys($c1), array_keys($c2));
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>ex42 - pàgina 3</title>
    <style>
		a{
			text-decoration: none;
			font-family: sans-serif;
			color: black;
		}
	</style>
</head>
<body>
	<h1>Exercici 4.2 (pag 3)</h1>
    <br>
    <h2>COINCIDENCIAS</h2>

    <p><a href="ex42pagina1.php">Regresar al inicio</a></p>

    <?php if (count($comunes) === 0): ?>
        <p>No hay ninguna coincidència.</p>
    <?php else: ?>
        <?php foreach ($comunes as $paraula): ?>
            <?php $total = $c1[$paraula] + $c2[$paraula]; ?>
            <p>La palabra <?php echo htmlspecialchars($paraula); ?> se ha repetido <?php echo $total; ?> veces.</p>
        <?php endforeach; ?>
    <?php endif; ?>
</body>
</html>
