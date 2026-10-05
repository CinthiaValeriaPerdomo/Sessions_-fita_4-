<?php
session_start();

if (!isset($_SESSION["notes"])) {
    $_SESSION["notes"] = "";
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $text = $_POST["text"] ?? "";

    if (trim($text) !== "") {
        // Añadimos el texto y 2 saltos de línea al final
        $_SESSION["notes"] .= $text . "\n\n";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>ex44 - Notes</title>
</head>
<body>
    <h1>Exercici 4.4</h1>
    <h2>Prendre notes</h2>

    <form method="post" action="ex44pagina1.php">
        <textarea name="text" rows="5" cols="50"></textarea>
        <br><br>
        <input type="submit" value="Enviar">
    </form>

    <h3>Notes guardades:</h3>
    <div>
        <?php echo nl2br(htmlspecialchars($_SESSION["notes"])); ?>
    </div>
</body>
</html>