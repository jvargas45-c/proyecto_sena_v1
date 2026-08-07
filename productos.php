<?php

$categoria = $_GET['categoria'] ?? '';


$titulos = [
    'pasteleria' => 'Pastelería',
    'personalizados' => 'Personalizados',
    'minis' => 'Minis',
    'antojitos' => 'Antojitos'
];

$titulo = $titulos[$categoria] ?? 'Productos';

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= htmlspecialchars($titulo) ?> - Dulce Tentación</title>

    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>

    <header>
        <h1>Dulce Tentación</h1>
    </header>

    <main>

        <h2><?= htmlspecialchars($titulo) ?></h2>

        <p>
            Aquí aparecerán los productos de <?= htmlspecialchars($titulo) ?>.
        </p>

    </main>

</body>

</html>