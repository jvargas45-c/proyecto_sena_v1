<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dulce Tentación</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapfamily=Fredoka:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <div class="manchas-fondo">
        <div class="mancha m1"></div>
        <div class="mancha m2"></div>
        <div class="mancha m3"></div>
        <div class="mancha m4"></div>
        <div class="mancha m5"></div>
        <div class="mancha m6"></div>
    </div>

    
    <header>
        <h1>Dulce Tentación</h1>
        <div class="iconos">
            <a href="favoritos/favorito.html">
                <i class="fa-solid fa-heart"></i>
            </a>
            
            <i class="fa-solid fa-cart-shopping"></i>
            <div class="menu-container">
                <i class="fa-solid fa-bars" id="menuBtn"></i>

                <div id="dropdownMenu" class="dropdown-menu hidden">
                    <a href="sesion/registrar.html">Registrarse</a>
                    <a href="sesion/iniciar.html">Iniciar Sesión</a>
                </div>
            </div>
        </div>
    </header>

    
    <section class="slider">
        <button id="prev">&#10094;</button>
        <img id="slide" src="img/Promocion de bodas.png">
        <button id="next">&#10095;</button>
    </section>

    
    <section class="categorias">

        <a href="productos.php?categoria=pasteleria" class="categoria">
            <img src="img/Tortas de Tres Leches.png">
            <div class="overlay">
                <h3>Pastelería</h3>
            </div>
        </a>

        <a href="productos.php?categoria=personalizados" class="categoria">
            <img src="img/Torta personalizado.png">
            <div class="overlay">
                <h3>Personalizados</h3>
            </div>
        </a>

        <a href="productos.php?categoria=minis" class="categoria">
            <img src="img/Cupcakes.png">
            <div class="overlay">
                <h3>Minis</h3>
            </div>
        </a>

        <a href="productos.php?categoria=antojitos" class="categoria">
            <img src="img/Galletas.png">
            <div class="overlay">
                <h3>Antojitos</h3>
            </div>
        </a>

    </section>

    
    <section class="blog">
        <h2>Conoce todo sobre Pastelería</h2>

        <div class="articulos">
        <a href="otras_paginas/historia.html">
            <article>
                <img src="img/Historia.png" alt="HISTORIA DE PASTELERÍA">
                <h3>Historia de la repostería</h3>
                <p>Aprende cómo nació la repostería moderna</p>
            </article>
        </a>

        <a href="otras_paginas/4frutas.html">    
            <article>
                <img src="img/Frutas.png" alt="FRUTAS EXÓTICAS">
                <h3>4 frutas exóticas de Colombia</h3>
                <p>Conoce frutas para usar en tus postres</p>
            </article>
        </a>
        </div>
    </section>

    <script src="js/script.js"></script>
    
</body>
</html>