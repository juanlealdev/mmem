
<?php

    $cdn = "https://dev.mmem.com.co";
    //$cdn = "https://pub-beed5a84e0dc42b5a1c29e3473b62b98.r2.dev";

    // Define metadata defaults if they are not set before including the header
    if (!isset($pageTitle)) {
        $pageTitle = "Media Maratón Entre Montañas | Salento, Valle del Cocora, Quindío";
    }

    if (!isset($pageDescription)) {
        $pageDescription = "Disfruta de una carrera de 22 km sobre asfalto, con vistas espectaculares de la Cordillera Central, las majestuosas palmas de cera y de las típicas casas pintorescas de Salento, descubre la magia del Quindío. ¡Inscríbete ahora y sé parte de esta gran aventura!";
    }

    $siteBaseUrl = "https://mediamaratonentremontanas.com.co";
    if (!isset($pageUrl)) {
        $pageUrl = $siteBaseUrl;
    }

    if (!isset($pageRobots)) {
        $pageRobots = "index, follow, max-image-preview:large";
    }

    $seoGalleryFiles = [
        'F1-MIBUC (198).avif',
        'F1-MIBUC (56).avif',
        'F2-MIBUC (173).avif',
        'F1-MIBUC (250).avif',
        'F2-MIBUC (110).avif'
    ];

    $gallerySeoBaseUrl = $cdn . '/Images/2026/gallery/';
    $defaultOgImages = array_map(
        function (string $fileName) use ($gallerySeoBaseUrl): string {
            return $gallerySeoBaseUrl . rawurlencode($fileName);
        },
        $seoGalleryFiles
    );

    if (!isset($pageOgImages) || !is_array($pageOgImages) || empty($pageOgImages)) {
        $pageOgImages = $defaultOgImages;
    }

    $pageOgImages = array_values(array_unique($pageOgImages));
    $primarySeoImage = $pageOgImages[0] ?? ($cdn . '/Images/2026/gallery/F1-MIBUC%20(416).avif');

    if (!isset($pageOgImageAlt)) {
        $pageOgImageAlt = "Corredores disfrutando la Media Maratón Entre Montañas en Salento, Quindío.";
    }

    $gallerySectionUrl = rtrim($siteBaseUrl, '/') . '/#galeria';

    $galleryAssociatedMedia = [];
    foreach ($pageOgImages as $imageUrl) {
        $galleryAssociatedMedia[] = [
            '@type' => 'ImageObject',
            'url' => $imageUrl,
            'caption' => $pageOgImageAlt,
            'inLanguage' => 'es'
        ];
    }

    $structuredData = [
        '@context' => 'https://schema.org',
        '@graph' => [
            [
                '@type' => 'WebSite',
                '@id' => $siteBaseUrl,
                'name' => 'Media Maratón Entre Montañas',
                'url' => $siteBaseUrl,
                'inLanguage' => 'es',
                'image' => $primarySeoImage
            ],
            [
                '@type' => 'CollectionPage',
                'name' => $pageTitle,
                'url' => $pageUrl,
                'description' => $pageDescription,
                'inLanguage' => 'es',
                'isPartOf' => [
                    '@id' => $siteBaseUrl
                ],
                'primaryImageOfPage' => [
                    '@type' => 'ImageObject',
                    'url' => $primarySeoImage,
                    'caption' => $pageOgImageAlt
                ],
                'image' => $pageOgImages
            ],
            [
                '@type' => 'ImageGallery',
                'name' => 'Galería oficial Media Maratón Entre Montañas',
                'url' => $gallerySectionUrl,
                'inLanguage' => 'es',
                'associatedMedia' => $galleryAssociatedMedia
            ]
        ]
    ];

    $structuredDataJson = json_encode($structuredData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

		
?>
<!DOCTYPE html>
<html lang="es">
	<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title><?= htmlspecialchars($pageTitle) ?></title>

    <link rel="preconnect" href="<?= $cdn ?>"/>
    <link rel="icon" type="image/png" href="favicon.png">

    <meta name="description" content="<?= htmlspecialchars($pageDescription) ?>">
    <meta name="keywords" content="Media Maratón, Carrera 10K, Quindío, Colombia, Valle del Cocora, Salento">
    <meta name="author" content="Media Maratón Entre Montañas | Valle de Cocora - Salento">
    <meta name="copyright" content="© 2026 MMEM | Valle de Cocora - Salento">

    <link rel="canonical" href="<?= htmlspecialchars($pageUrl) ?>">

    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Media Maratón Entre Montañas">
    <meta property="og:title" content="<?= htmlspecialchars($pageTitle) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($pageDescription) ?>">
    <meta property="og:url" content="<?= htmlspecialchars($pageUrl) ?>">
    <?php foreach ($pageOgImages as $ogImage): ?>
    <meta property="og:image" content="<?= htmlspecialchars($ogImage) ?>">
    <?php endforeach; ?>
    <meta property="og:image:alt" content="<?= htmlspecialchars($pageOgImageAlt) ?>">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= htmlspecialchars($pageTitle) ?>">
    <meta name="twitter:description" content="<?= htmlspecialchars($pageDescription) ?>">
    <meta name="twitter:image" content="<?= htmlspecialchars($primarySeoImage) ?>">
    <meta name="twitter:image:alt" content="<?= htmlspecialchars($pageOgImageAlt) ?>">

    <link rel="preload" href="public/fonts/Tallica_prueba-VF.woff2" as="font" type="font/woff2" crossorigin>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./styles/header.css?v=17122025">
    <link rel="stylesheet" href="./styles/Main.css?v=17122025">
    <link rel ="stylesheet" href="styles/informacion.css?v=17122025">
    <link rel ="stylesheet" href="styles/reglamento.css?v=17122025">
    <link rel ="stylesheet" href="styles/resultados.css?v=17122025">
    <link rel ="stylesheet" href="styles/inscripciones.css?v=17122025">

    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
    

    <meta name="google-site-verification" content="o_baRqjiHFjfs-EFKfBLLMNLCr99TN1GQsJmcWJ25NM" />
    <meta name="robots" content="<?= htmlspecialchars($pageRobots) ?>">

    <!-- JSON-LD to anchor gallery assets as the primary preview -->
    <script type="application/ld+json">
    <?= $structuredDataJson ?? '' ?>
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

		<script src='https://d10347yu6bo3wz.cloudfront.net/js/referido.min.js?event=MMEM&hash=bc14c5c7&host=https://organizer.eventrid.com.co/mmentremontanas'></script>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
		<script src='https://s3-us-west-2.amazonaws.com/static.eventrid.cl/files/iframe.resizer.js'></script>

		<noscript>
        <img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=718973520528019&ev=PageView&noscript=1"
    />
    </noscript>
	</head>
	<body>
    <div class="header-wrapper">
    <!-- SECCION DE CONTADOR -->
    <div class="alert-bar-wrapper">
        <div class="alert-bar-gradient">
            <div class="alert-content-container">
                <p class="alert-text">
                    ¡El tiempo perfecto para inscribirte es ahora!
                </p>

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

    <!-- SECCION DE NAVBAR -->
    <nav class="navbar navbar-expand-lg custom-navbar">
        <div class="container-fluid shared-container navbar-container d-flex align-items-center justify-content-between">
            <a href="index.php" class="navbar-logo-container">
                <img src="public/images/logo.svg" alt="Logo" class="navbar-logo">
                <span class="navbar-logo-container-date">13/sep/2026</span>
            </a>
            
            <div class="navbar-toggle-wrapper d-lg-none">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">INICIO</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle nav_link_subMenu" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            INFORMACIÓN
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="Reglamento.php">Reglamento</a></li>
                            <li><a class="dropdown-item" href="Informacion.php">Infomación general</a></li>
                        </ul>
                    </li>
                    <!-- <li class="nav-item me-3"><a class="nav-link" href="Resultados.php">MM2024</a></li> -->
                    <li class="nav-item" >
                        <a class="nav-link last-nav-link" href="Inscripciones.php" role="button" aria-expanded="false">
                            INSCRIPCIONES
                        </a>
                    </li>
                </ul>
                
            </div>
            <!-- <a class="btn-offer" href="https://www.biciq.com/info-event/black-days-entre-montanas-24bbc6b4" target="_blank">Black days entre montañas</a> -->
        </div>
    </nav>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js" defer></script>
    <script>
        // Tu script de JavaScript existente para el contador y el posicionamiento
        function updateCountdownAndHeaderPosition() {
            const targetDate = new Date("2026-09-13T00:00:00");
            const now = new Date();
            const diff = targetDate - now;

            const headerWrapper = document.querySelector('.header-wrapper');
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
            const headerHeight = headerWrapper
                ? headerWrapper.getBoundingClientRect().height
                : alertBarHeight + navbarHeight;

            const totalFixedHeaderHeight = headerHeight;
            body.style.paddingTop = `${totalFixedHeaderHeight}px`;
            document.documentElement.style.setProperty('--fixed-header-height', `${totalFixedHeaderHeight}px`);

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
            const toggleButton = document.querySelector('.navbar-toggler');
            const hamburgerIcon = `
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M3 6h18v2H3zm0 5h18v2H3zm0 5h18v2H3z"/>
                </svg>`;
            const closeIcon = `
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 7l10 10M7 17L17 7"/>
                </svg>`;

            const updateToggleIcon = () => {
                if (!toggleButton) return;
                if (navbarCollapseElement.classList.contains('show')) {
                    toggleButton.innerHTML = closeIcon;
                } else {
                    toggleButton.innerHTML = hamburgerIcon;
                }
            };

            toggleButton.addEventListener('click', () => {
                setTimeout(updateToggleIcon, 150);
            });

            navbarCollapseElement.addEventListener('shown.bs.collapse', () => {
                updateCountdownAndHeaderPosition();
                updateToggleIcon();
            });

            navbarCollapseElement.addEventListener('hidden.bs.collapse', () => {
                updateCountdownAndHeaderPosition();
                updateToggleIcon();
            });

            updateToggleIcon();
        } else {
            const toggleButton = document.querySelector('.navbar-toggler');
            if (toggleButton) {
                toggleButton.addEventListener('click', updateCountdownAndHeaderPosition);
            }
        }
    </script>