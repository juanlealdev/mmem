
<?php

    $cdn = "https://dev.mmem.com.co";

    // Define a default title if $pageTitle is not set
    if (!isset($pageTitle)) {
        $pageTitle = "Media Maratón Entre Montañas | Desafío Cocora"; // Default title
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title><?= htmlspecialchars($pageTitle) ?></title>

    <link rel="preconnect" href="<?= $cdn ?>"/>
    <link rel="icon" type="image/png" href="favicon.png">

    <meta name="description" content="Corre 100% sobre asfalto, entre las montañas del Valle del Cocora. Respira aire puro, disfruta de la brisa fresca de la montaña, del mejor paisaje natural de Colombia, del aroma a café y déjate envolver por la magia del Quindío.">
    <meta name="keywords" content="Media Maratón, Carrera 10K, Quindío, Colombia, Valle del Cocora, Salento,">
    <meta name="author" content="Media Maratón Entre Montañas | Desafío Cocora">
    <meta name="copyright" content="© 2025 MMEM | Desafío Cocora">

    <link rel="canonical" href="https://mediamaratonentremontanas.com.co">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./styles/header.css?v=17082025">
    <link rel="stylesheet" href="./styles/Main.css?v=17082025">
    <link rel ="stylesheet" href="styles/informacion.css?v=17082025">
    <link rel ="stylesheet" href="styles/reglamento.css?v=17082025">
    <link rel ="stylesheet" href="styles/resultados.css?v=17082025">

    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
    

    <meta name="google-site-verification" content="o_baRqjiHFjfs-EFKfBLLMNLCr99TN1GQsJmcWJ25NM" />
    <meta name="robots" content="index, follow, max-image-preview:standard">

    <!-- JSON-LD to indicate image to Google -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebSite",
      "name": "Media Maratón Entre Montañas",
      "url": "https://mediamaratonentremontanas.com.co/",
      "image": "https://dev.mmem.com.co/Images/2025/MMEM_10k.webp"
    }
    </script>

    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '718973520528019');
    fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=718973520528019&ev=PageView&noscript=1"
    />
    </noscript>
</head>
<body>
    <div class="alert-bar-wrapper">
        <div class="alert-bar-gradient">
            <div class="alert-content-container">
                <div class="alert-text">
                    <strong>¡LA CUENTA REGRESIVA HA COMENZADO!</strong>
                    <p>No dejes pasar la oportunidad de vivir la Media Maratón Entre Montañas</p>
                </div>

                <div class="countdown-container">
                    <div class="countdown">
                        <div>
                            <span id="days">00</span>
                            <span class="label">DÍAS</span>
                        </div>
                        <div>
                            <span id="hours">00</span>
                            <span class="label">HORAS</span>
                        </div>
                        <div>
                            <span id="minutes">00</span>
                            <span class="label">MIN</span>
                        </div>
                        <div>
                            <span id="seconds">00</span>
                            <span class="label">SEG</span>
                        </div>
                    </div>
                </div>

                <a href="https://wa.me/573138157376" target="_blank" rel="noopener noreferrer" class="alert-button">Tienda Merch</a>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg custom-navbar">
        <div class="container-fluid shared-container navbar-container d-flex align-items-center justify-content-between">
            <a href="#" class="navbar-logo-container">
                <img src="<?= $cdn ?>/Images/logo/Logo_3.webp" alt="Logo" class="navbar-logo">
            </a>
            
            <div>
                <!-- <a class="btn-offer-mobile" href="https://www.biciq.com/info-event/black-days-entre-montanas-24bbc6b4" target="_blank">Black days</a> -->
            
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
            <!-- <a class="btn-offer" href="https://www.biciq.com/info-event/black-days-entre-montanas-24bbc6b4" target="_blank">Black days entre montañas</a> -->
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js" defer></script>
    <script>
        // Tu script de JavaScript existente para el contador y el posicionamiento
        function updateCountdownAndHeaderPosition() {
            const targetDate = new Date("2025-09-14T00:00:00");
            const now = new Date();
            const diff = targetDate - now;

            const alertBar = document.querySelector('.alert-bar-wrapper');
            const customNavbar = document.querySelector('.custom-navbar');
            const body = document.body;

            // --- Actualizar el contador ---
            if (diff > 0) {
                const days = Math.floor(diff / (1000 * 60 * 60 * 24));
                const hours = Math.floor((diff / (1000 * 60 * 60)) % 24);
                const minutes = Math.floor((diff / (1000 * 60)) % 60);
                const seconds = Math.floor((diff / 1000) % 60);

                document.getElementById("days").textContent = days.toString().padStart(2, "0");
                document.getElementById("hours").textContent = hours.toString().padStart(2, "0");
                document.getElementById("minutes").textContent = minutes.toString().padStart(2, "0");
                document.getElementById("seconds").textContent = seconds.toString().padStart(2, "0");
            } else {
                // Si la fecha ya pasó, mostrar 00 en el contador (dado que siempre estará presente)
                document.getElementById("days").textContent = "00";
                document.getElementById("hours").textContent = "00";
                document.getElementById("minutes").textContent = "00";
                document.getElementById("seconds").textContent = "00";
            }

            // --- Ajustar el posicionamiento del header y el padding del body ---
            const alertBarHeight = alertBar ? alertBar.getBoundingClientRect().height : 0;
            const navbarHeight = customNavbar ? customNavbar.getBoundingClientRect().height : 0;

            if (customNavbar) {
                customNavbar.style.top = `${alertBarHeight}px`;
            }

            const totalFixedHeaderHeight = alertBarHeight + navbarHeight;
            body.style.paddingTop = `${totalFixedHeaderHeight}px`;

            const navbarCollapse = document.getElementById('navbarNav');
            if (navbarCollapse) {
                if (navbarCollapse.classList.contains('show')) {
                    const remainingViewportHeight = window.innerHeight - totalFixedHeaderHeight;
                    navbarCollapse.style.maxHeight = `${remainingViewportHeight}px`;
                    navbarCollapse.style.overflowY = 'auto';
                } else {
                    navbarCollapse.style.maxHeight = 'none';
                    navbarCollapse.style.overflowY = 'visible';
                }
            }
        }

        updateCountdownAndHeaderPosition();
        setInterval(updateCountdownAndHeaderPosition, 1000);
        window.addEventListener('resize', updateCountdownAndHeaderPosition);

        const navbarCollapseElement = document.getElementById('navbarNav');
        if (navbarCollapseElement) {
            navbarCollapseElement.addEventListener('shown.bs.collapse', updateCountdownAndHeaderPosition);
            navbarCollapseElement.addEventListener('hidden.bs.collapse', updateCountdownAndHeaderPosition);
        }
    </script>