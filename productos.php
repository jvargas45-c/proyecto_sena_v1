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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
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