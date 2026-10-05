<?php
session_start();

if (isset($_POST["frase1"])) {
    $_SESSION["frase1"] = $_POST["frase1"];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>ex42 - pàgina 2</title>
</head>
<body>
    <h1>Exercici 4.2 (pag 2)</h1>
    <br>
    <h2>REGISTRA FRASE 2</h2>

    <form method="post" action="ex42pagina3.php">
        <input type="text" name="frase2" size="50" required>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>