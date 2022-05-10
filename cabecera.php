<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AlquileresVacacionales - Inicio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Raleway:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/app.css">
</head>

<body>
    <header class="py-5 ">
        <h1 class="text-center">
            Alquileres
            <span class="text-primary"> Vacacionales</span>
        </h1>
        <div class="alert alert-danger fixed-bottom" role="alert">
            <p class="fw-bold">Aviso de Cookies:
                Utilizamos cookies para obtener datos estadísticos de la navegación y mejorar nuestros servicios.
                Si acepta o continúa navegando, consideramos que acepta su uso.</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" data-bs-target="#my-alert" aria-label="Close"></button>
        </div>
    </header>

    <div class="border-top py-4">
        <div class="navbar navbar-expand-lg container navbar-light ">
            <a class="navbar-brand nombre-sitio d-lg-none fs-2 fw-bold text-uppercase" href="index.php">
                Alquileres Vacacionales
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navegacion">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="navegacion" class="collapse navbar-collapse">
                <nav class="navbar-nav container d-flex flex-md-row justify-content-md-between text-center">
                    <a class="text-dark text-decoration-none" href="index.php">Inicio</a>
                    <a class=" text-dark text-decoration-none" href="nosotros.php">Nosotros</a>
                    <a class="text-dark text-decoration-none" href="alojamientos.php">Alojamientos</a>
                    <a class="text-dark text-decoration-none" href="blog.php">Blog</a>
                    <a class="text-dark text-decoration-none" href="galeria.php">Galería</a>
                    <a class="text-dark text-decoration-none" href="contacto.php">Contacto</a>
                </nav>
            </div>

        </div>
    </div>

    <div class=" px-5 pb-3">
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="search" placeholder="Search...">
            <a class="btn btn-success fs-3 fw-bold text-uppercase py-3" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-search-heart-fill" viewBox="0 0 16 16">
                    <path d="M6.5 13a6.474 6.474 0 0 0 3.845-1.258h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.008 1.008 0 0 0-.115-.1A6.471 6.471 0 0 0 13 6.5 6.502 6.502 0 0 0 6.5 0a6.5 6.5 0 1 0 0 13Zm0-8.518c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.69 0-5.018Z" />
                </svg></i></a>
        </div>
    </div>