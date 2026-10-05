<?php
session_start();

// Inicializamos el texto acumulado
if (!isset($_SESSION["text"])) {
    $_SESSION["text"] = "";
}

// Si llega una letra por GET, la añadimos (solo si es una letra válida A-Z)
if (isset($_GET["lletra"]) && preg_match('/^[A-Z]$/', $_GET["lletra"])) {
    $_SESSION["text"] .= $_GET["lletra"];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>ex43 - Màquina d'escriure</title>
    <style>
        .quadre {
            border: 1px solid #333;
            min-height: 60px;
            padding: 10px;
            margin-bottom: 15px;
            font-size: 20px;
            word-break: break-all;
        }
        .teclat a {
            display: inline-block;
            width: 35px;
            padding: 8px 0;
            margin: 3px;
            text-align: center;
            border: 1px solid #999;
            border-radius: 4px;
            text-decoration: none;
            color: #000;
            background: #eee;
        }
        .teclat a:hover { background: #ccc; }
    </style>
</head>
<body>
    <h1>Exercici 4.3</h1>
    <br>
    <h2>Màquina d'escriure</h2>

    <div class="quadre"><?php echo htmlspecialchars($_SESSION["text"]); ?></div>

    <div class="teclat">
        <?php foreach (range("A", "Z") as $lletra): ?>
            <a href="ex43pagina1.php?lletra=<?php echo $lletra; ?>"><?php echo $lletra; ?></a>
        <?php endforeach; ?>
    </div>
</body>
</html>