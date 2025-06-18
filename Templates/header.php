<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú de Navegación</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./styles/header.css">
    <link rel="stylesheet" href="./styles/Main.css">
    <link rel="stylesheet" href="./styles/reglamento.css">
    <link rel="stylesheet" href="./styles/informacion.css">
    <link rel="stylesheet" href="./styles/resultados.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
    <!-- Bootstrap CSS -->

    <!-- Bootstrap JavaScript (necesario para el carrusel) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Incluir jQuery desde un CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>

    <!-- Menú de navegación -->
    <nav class="navbar navbar-expand-lg custom-navbar">
        <div class="container d-flex align-items-center">
            <a href="#" class="navbar-logo-container">
                <img src="./Images/logo/Logo_3.png" alt="Logo" class="navbar-logo">
            </a>
            
            <div>
                <a class="btn-offer-mobile" href="https://www.biciq.com/info-event/black-days-entre-montanas-24bbc6b4" target="_blank">Black days</a>
            
                <button class="navbar-toggler btn_navbar btn_nav" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">INICIO</a></li>
                    <li class="nav-item me-3 dropdown">
                        <a class="nav-link dropdown-toggle nav_link_subMenu" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            INFORMACIÓN
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="Reglamento.php">Reglamento</a></li>
                            <li><a class="dropdown-item" href="Informacion.php">Infomación general</a></li>
                        </ul>
                    </li>
                    <li class="nav-item me-3"><a class="nav-link" href="Resultados.php">MM2024</a></li>
                    <li class="nav-item me-3 dropdown">
                        <a class="nav-link dropdown-toggle nav_link_subMenu" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            INSCRIPCIÓN
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a target="_blank" class="dropdown-item" href="https://biciq.com/info-event/10k-media-maraton-entre-montanas-950d9e9f">inscripciones 10k</a></li>
                            <li><a target="_blank" class="dropdown-item" href="https://biciq.com/info-event/7b307c0e-9d2c-4243-9959-79f3652328d9">inscripciones 21k</a></li>
                        </ul>
                    </li>
                </ul>
                
            </div>
            <a class="btn-offer" href="https://www.biciq.com/info-event/black-days-entre-montanas-24bbc6b4" target="_blank">Black days entre montañas</a>
        </div>
    </nav>

    <div class="social-icons-fixed">
        <a class="facebook" href="https://www.facebook.com/share/1A1NqDNfWm/" target="_blank"><i class="ri-facebook-circle-fill"></i></a>
        <a class="instagram" href="https://www.instagram.com/mmentremontanas?igsh=MTNxY2U4dm5tdjBqNA==" target="_blank"><i class="ri-instagram-fill"></i></a>
        <a class="whatsapp" href="https://api.whatsapp.com/send/?phone=%2B573138157376&text&type=phone_number&app_absent=0" target="_blank"><i class="ri-whatsapp-fill"></i></a>
    </div>


    <!-- Incluyendo Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.querySelectorAll('.nav_link_subMenu').forEach(botonSubMenu => {
            botonSubMenu.addEventListener("click", function(event) {
                event.preventDefault(); // Evita que el enlace recargue la página
                let dropdownMenu = this.parentElement.querySelector('.dropdown-menu');

                if (dropdownMenu.style.display === 'block') {
                    dropdownMenu.style.display = 'none';
                } else {
                    // Oculta todos los otros menús antes de abrir el actual
                    dropdownMenu.style.display = 'block';
                }
            });
        });


        document.addEventListener("DOMContentLoaded", function() {
            var navLinks = document.querySelectorAll(".btn_nav");
            var navbarToggler = document.querySelector(".navbar-toggler");

            navLinks.forEach(function(link) {
                link.addEventListener("click", function() {
                    var navbarCollapse = document.querySelector("#navbarNav");
                    if (navbarCollapse.style.display === 'block') {
                        navbarCollapse.style.display = 'none';
                    } else {
                        navbarCollapse.style.display = 'block';
                    }
                });
            });
        });
    </script>


</body>

</html>