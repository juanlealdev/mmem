<?php
  $pageTitle = "Media Maratón Entre Montañas | Valle de Cocora - Salento";

  include_once('./Templates/header.php');
  include_once('./Templates/redes_icons.php'); // Asegúrate de que este archivo no imprima HTML antes de <body>

  // Feedback para la sección Vincula tu marca
  $brandStatus = $_GET['brand_status'] ?? null;
  $brandStatus = in_array($brandStatus, ['success', 'error'], true) ? $brandStatus : null;
  $brandMessage = isset($_GET['brand_message']) ? htmlspecialchars($_GET['brand_message'], ENT_QUOTES, 'UTF-8') : null;
  
  // Tus definiciones de $patrocinadores y $logos
  $patrocinadores = [
    [ 'src' => $cdn .'/Images/2025/nexus.webp', 'alt' => 'Nexus', 'format' => 'horizontal' ],
    // [ 'src' => $cdn .'/Images/2025/healthySports.webp', 'alt' => 'Healthy Sports' ],
    [ 'src' => $cdn .'/Images/2025/imdera.webp', 'alt' => 'IMDERA', 'format' => 'horizontal' ],
    [ 'src' => $cdn .'/Images/2025/los-arrieros.webp', 'alt' => 'Parque Los Arrieros', 'format' => 'vertical' ],
    [ 'src' => $cdn .'/Images/2025/gatorade.webp', 'alt' => 'Gatorade', 'format' => 'vertical' ],
    [ 'src' => $cdn .'/Images/2025/andiautos.webp', 'alt' => 'Andiautos', 'format' => 'horizontal' ],
    [ 'src' => $cdn .'/Images/2025/smartfit.webp', 'alt' => 'Smart Fit', 'format' => 'horizontal' ],
    [ 'src' => $cdn .'/Images/2025/rivera-cp.webp', 'alt' => 'Rivera Coffee Park', 'format' => 'vertical' ],
    [ 'src' => $cdn .'/Images/2025/santa-barbara.webp', 'alt' => 'Industrias Santa Barbara', 'format' => 'horizontal' ],
    [ 'src' => $cdn .'/Images/2025/4-elementos.webp', 'alt' => '4 Elementos café artesanal', 'format' => 'vertical' ],
    [ 'src' => $cdn .'/Images/2025/perea.webp', 'alt' => 'Consejal Perea', 'format' => 'horizontal' ],
    [ 'src' => $cdn .'/Images/2025/sura.webp', 'alt' => 'Sura', 'format' => 'horizontal' ],
    [ 'src' => $cdn .'/Images/2025/ocaso.webp', 'alt' => 'Ocaso', 'format' => 'vertical' ],
    [ 'src' => $cdn .'/Images/2025/la-montaña.svg', 'alt' => 'La Montaña Agromercados', 'format' => 'horizontal' ],
    [ 'src' => $cdn .'/Images/2025/pc.webp', 'alt' => 'Producto Colombia', 'format' => 'vertical' ],
  ];
  $logos = array_merge($patrocinadores, $patrocinadores, $patrocinadores, $patrocinadores,$patrocinadores);
  
  $galleryFiles = [
    'F1-MIBUC (117).avif',
    'F1-MIBUC (124).avif',
    'F1-MIBUC (168).avif',
    'F1-MIBUC (169).avif',
    'F1-MIBUC (173).avif',
    'F1-MIBUC (181).avif',
    'F1-MIBUC (184).avif',
    'F1-MIBUC (192).avif',
    'F1-MIBUC (193).avif',
    'F1-MIBUC (198).avif',
    'F1-MIBUC (205).avif',
    'F1-MIBUC (232).avif',
    'F1-MIBUC (24).avif',
    'F1-MIBUC (250).avif',
    'F1-MIBUC (26).avif',
    'F1-MIBUC (263).avif',
    'F1-MIBUC (265).avif',
    'F1-MIBUC (30).avif',
    'F1-MIBUC (301).avif',
    'F1-MIBUC (354).avif',
    'F1-MIBUC (36).avif',
    'F1-MIBUC (37).avif',
    'F1-MIBUC (371).avif',
    'F1-MIBUC (387).avif',
    'F1-MIBUC (388).avif',
    'F1-MIBUC (396).avif',
    'F1-MIBUC (404).avif',
    'F1-MIBUC (408).avif',
    'F1-MIBUC (416).avif',
    'F1-MIBUC (54).avif',
    'F1-MIBUC (56).avif',
    'F1-MIBUC (73).avif',
    'F2-MIBUC (105).avif',
    'F2-MIBUC (110).avif',
    'F2-MIBUC (114).avif',
    'F2-MIBUC (125).avif',
    'F2-MIBUC (129).avif',
    'F2-MIBUC (152).avif',
    'F2-MIBUC (164).avif',
    'F2-MIBUC (165).avif',
    'F2-MIBUC (168).avif',
    'F2-MIBUC (170).avif',
    'F2-MIBUC (173).avif',
    'F2-MIBUC (174).avif',
    'F2-MIBUC (187).avif',
    'F2-MIBUC (214).avif',
    'F2-MIBUC (220).avif',
    'F2-MIBUC (238).avif',
    'F2-MIBUC (24).avif',
    'F2-MIBUC (256).avif',
    'F2-MIBUC (282).avif',
    'F2-MIBUC (3).avif',
    'F2-MIBUC (32).avif',
    'F2-MIBUC (336).avif',
    'F2-MIBUC (338).avif',
    'F2-MIBUC (341).avif',
    'F2-MIBUC (342).avif',
    'F2-MIBUC (344).avif',
    'F2-MIBUC (346).avif',
    'F2-MIBUC (352).avif',
    'F2-MIBUC (354).avif',
    'F2-MIBUC (358).avif',
    'F2-MIBUC (387).avif',
    'F2-MIBUC (397).avif',
    'F2-MIBUC (401).avif',
    'F2-MIBUC (403).avif',
    'F2-MIBUC (407).avif',
    'F2-MIBUC (408).avif',
    'F2-MIBUC (414).avif',
    'F2-MIBUC (423).avif',
    'F2-MIBUC (425).avif',
    'F2-MIBUC (426).avif',
    'F2-MIBUC (77).avif',
    'F2-MIBUC (84).avif',
    'F2-MIBUC (94).avif',
    'F2-MIBUC (96).avif',
  ];

  $galleryBaseUrl = $cdn . '/Images/2026/gallery';
  $galleryAltText = 'Recopilación fotográfica del día de la carrera de la Media Maratón Entre Montañas Salento';
  
  $totalGalleryFiles = count($galleryFiles);
  $firstCarouselCount = (int) ceil($totalGalleryFiles / 2);
  $galleryCarousels = [
    array_slice($galleryFiles, 0, $firstCarouselCount),
    array_slice($galleryFiles, $firstCarouselCount),
  ];

  if (!function_exists('encodeGalleryFileName')) {
    function encodeGalleryFileName(string $fileName): string
    {
      static $replacements = [
        '%28' => '(',
        '%29' => ')',
      ];

      return strtr(rawurlencode($fileName), $replacements);
    }
  }

  if (!function_exists('renderGalleryCarousel')) {
    function renderGalleryCarousel(string $id, array $images, string $baseUrl, string $altText): void
    {
      if (empty($images)) {
        return;
      }

      $slides = array_chunk($images, 3);
      ?>
      <div id="<?= $id ?>" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-inner">
          <?php foreach ($slides as $slideIndex => $slideImages): ?>
            <div class="carousel-item<?= $slideIndex === 0 ? ' active' : '' ?>">
              <div class="d-flex justify-content-center gap-2 flex-wrap">
                <?php foreach ($slideImages as $fileName): ?>
                  <img
                    src="<?= $baseUrl . '/' . encodeGalleryFileName($fileName) ?>"
                    class="img-fluid"
                    alt="<?= $altText ?>"
                    loading="lazy"
                    decoding="async"
                  >
                <?php endforeach; ?>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#<?= $id ?>" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#<?= $id ?>" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
      </div>
      <?php
    }
  }
?>

  <!-- BANNER DE LA CARRERA -->
  <main class="site-main">
    <section class="carousel-section" style="margin-top: -90px;">
      <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-inner">
          <div class="carousel-item">
            <picture>
              <source media="(max-width: 575.98px)" srcset="<?= $cdn ?>/Images/2026/MMEM26_bannervertical_1.avif">
              <img src="<?= $cdn ?>/Images/2026/MMEM26_banner_1.avif" alt="Banner promocional de la Media Maratón Entre Montañas 2026. A la izquierda, dos corredores ascienden por una carretera montañosa verde y soleada. A la derecha, una corredora sonriente pasa frente a una casa colorida de estilo colonial tradicional en Salento, Quindío. El texto central dice CARRERA DE CALLE DE AFORO LIMITADO con los colores de la bandera de Colombia. La fecha es 13 DOMINGO SEPTIEMBRE 2026.">
            </picture>
          </div>
          <div class="carousel-item active">
            <picture>
              <source media="(max-width: 575.98px)" srcset="<?= $cdn ?>/Images/2026/MMEM26_bannervertical_2.avif">
              <img src="<?= $cdn ?>/Images/2026/MMEM26_banner_2.avif" alt="Banner promocional de la Media Maratón Entre Montañas 2026. Muestra a un hombre y una mujer corredores sonrientes, luciendo camisetas negras de la carrera, con un fondo abstracto de franjas de colores. A la derecha, una gran multitud de corredores celebra en un pueblo. El texto destaca: UNA CARRERA QUE SOLO PODRÍA OCURRIR AQUÍ, RUNNING ENTRE EL VALLE DE COCORA. La fecha es 13 DOMINGO SEPTIEMBRE 2026.">
            </picture>
          </div>
        </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
          </button>
      </div>
    </section>

    <!-- SECCION DE PATROCINADORES -->
    <!-- <section class="sponsor-carousel">
      <h3 class="sponsor-title">Nuestros Patrocinadores</h3>
      <div class="slider-wrapper">
        <div class="slider-track">
          <?php foreach ($logos as $patrocinador): ?>
            <div class="logo-item <?= $patrocinador['format'] ?>">
              <img src="<?= $patrocinador['src'] ?>" alt="<?= htmlspecialchars($patrocinador['alt']) ?>">
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section> -->

    <!-- <section class="cupos-section">
      <div class="cupos-container">
        <div class="progress-bar-container">
          <div class="progress-fill"></div>
          <div class="progress-text">70%</div>
        </div>
        <div class="progress-label">
          CUPOS <span class="vendidos">VENDIDOS</span>
        </div>
      </div>
    </section> -->

    <!-- BOTONES DE INSCRIPCIONES -->
    <section id="section-inscribete" class="container section-inscribete my-5">
      <div class="card div_card_inscribete">
        <h5 class="card-title">10K y 22K</h5>
        <a class="btn btn-register" href="inscripciones.php">INSCRÍBETE AHORA</a>
        <div class="warning-register">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"><g fill="currentColor"><path d="M12 14a1 1 0 0 1-1-1v-3a1 1 0 1 1 2 0v3a1 1 0 0 1-1 1m-1.5 2.5a1.5 1.5 0 1 1 3 0a1.5 1.5 0 0 1-3 0"/><path d="M10.23 3.216c.75-1.425 2.79-1.425 3.54 0l8.343 15.852C22.814 20.4 21.85 22 20.343 22H3.657c-1.505 0-2.47-1.6-1.77-2.931zM20.344 20L12 4.147L3.656 20z"/></g></svg>
          <span>Solo para mayores de 18 años</span>
        </div>
      </div>
    </section>
    <!-- <section id="section-inscribete" class="container section-inscribete my-5">
      <div class="card div_card_inscribete">
        <h5 class="card-title">INSCRIPCIONES 10K</h5>
        <a class="btn btn-register" href="inscripciones.php">INSCRÍBETE AHORA</a>
        <div class="warning-register">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"><g fill="currentColor"><path d="M12 14a1 1 0 0 1-1-1v-3a1 1 0 1 1 2 0v3a1 1 0 0 1-1 1m-1.5 2.5a1.5 1.5 0 1 1 3 0a1.5 1.5 0 0 1-3 0"/><path d="M10.23 3.216c.75-1.425 2.79-1.425 3.54 0l8.343 15.852C22.814 20.4 21.85 22 20.343 22H3.657c-1.505 0-2.47-1.6-1.77-2.931zM20.344 20L12 4.147L3.656 20z"/></g></svg>
          <span>Solo para mayores de 18 años</span>
        </div>
      </div>
    
      <div class="card div_card_inscribete">
        <h5 class="card-title">INSCRIPCIONES 22K</h5>
        <a class="btn btn-register" href="inscripciones.php">INSCRÍBETE AHORA</a>
        <div class="warning-register">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"><g fill="currentColor"><path d="M12 14a1 1 0 0 1-1-1v-3a1 1 0 1 1 2 0v3a1 1 0 0 1-1 1m-1.5 2.5a1.5 1.5 0 1 1 3 0a1.5 1.5 0 0 1-3 0"/><path d="M10.23 3.216c.75-1.425 2.79-1.425 3.54 0l8.343 15.852C22.814 20.4 21.85 22 20.343 22H3.657c-1.505 0-2.47-1.6-1.77-2.931zM20.344 20L12 4.147L3.656 20z"/></g></svg>
          <span>Solo para mayores de 18 años</span>
        </div>
      </div>
    </section> -->

    <section class="container section-intro my-5">
      <h2 class="hero-title">Running en uno de los paisajes más impresionantes del planeta</h2>
      <div class="intro-content">

      <!-- VIDEO INTRODUCCIÓN -->
      <div class="video-intro-container">
        <video src="<?= $cdn ?>/videos/RESUMEN_MMEM2025.mp4" controls playsinline muted autoplay loop></video>
      </div>
      
      <!-- INTRODUCCIÓN A LA CARRERA -->
      <div class="intro-description">
        <div style="margin-bottom: 24px;">
          <p>
            La <strong>MM Entre Montañas</strong> te ofrece la oportunidad de combinar tu pasión por el running con la exploración de uno de los paisajes más emblemáticos de Colombia.
            Corre 100% sobre asfalto, respira aire puro, disfruta de la brisa fresca de la montaña, del mejor paisaje natural de Colombia, de las emblemáticas casas pintorescas de Salento, del aroma a café y déjate envolver por la magia del Quindío.
          </p>
          <p>
            Un evento sin igual en el Valle de Cocora. Corre rodeado de la majestuosa palma de cera y siente la adrenalina de una carrera inolvidable.
          </p>
          <p style="margin-top: 32px; font-size: 18px;">
            <strong>¡Sé parte de esta experiencia única y descubre por qué el Quindío es el destino favorito de los amantes de la naturaleza!</strong>
          </p>
      </div>

      <!-- DETALLES DE LA CARRERA -->
      <div id="section_4" class="intro-details">
                  
        <div class="col-md-3">
          <div class="info-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 24 24"><path fill="currentColor" d="M19 19H5V8h14m-3-7v2H8V1H6v2H5c-1.11 0-2 .89-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-1V1m-1 11h-5v5h5z"/></svg>
          </div>
          <div class="info-title">FECHA</div>
          <div class="info-description">13 de septiembre de 2026</div>
        </div>

        <div class="col-md-3">
          <div class="info-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 24 24"><path fill="currentColor" d="M6.72 16.64a1 1 0 1 1 .56 1.92c-.5.146-.86.3-1.091.44c.238.143.614.303 1.136.452C8.48 19.782 10.133 20 12 20s3.52-.218 4.675-.548c.523-.149.898-.309 1.136-.452c-.23-.14-.59-.294-1.09-.44a1 1 0 0 1 .559-1.92c.668.195 1.28.445 1.75.766c.435.299.97.82.97 1.594c0 .783-.548 1.308-.99 1.607c-.478.322-1.103.573-1.786.768C15.846 21.77 14 22 12 22s-3.846-.23-5.224-.625c-.683-.195-1.308-.446-1.786-.768c-.442-.3-.99-.824-.99-1.607c0-.774.535-1.295.97-1.594c.47-.321 1.082-.571 1.75-.766M12 7.5c-1.54 0-2.502 1.667-1.732 3c.357.619 1.017 1 1.732 1c1.54 0 2.502-1.667 1.732-3A2 2 0 0 0 12 7.5" class="duoicon-primary-layer"/><path fill="currentColor" d="M12 2a7.5 7.5 0 0 1 7.5 7.5c0 2.568-1.4 4.656-2.85 6.14a16.4 16.4 0 0 1-1.853 1.615c-.594.446-1.952 1.282-1.952 1.282a1.71 1.71 0 0 1-1.69 0a21 21 0 0 1-1.952-1.282A16.4 16.4 0 0 1 7.35 15.64C5.9 14.156 4.5 12.068 4.5 9.5A7.5 7.5 0 0 1 12 2" class="duoicon-secondary-layer" opacity=".3"/></svg>
          </div>
          <div class="info-title">DISTANCIAS</div>
          <div class="info-description">22K y 10K</div>
        </div>

        <div class="col-md-3">
          <div class="info-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 512 512"><path fill="currentColor" d="M23 24v464h18V386.9c152.3 29.4 277.6 29.4 430 0V488h18V24h-18v16h-23v32h23v32h-23v32h23v232.6c-153.3 29.9-276.7 29.9-430 0V104h23V72H41V24zm41 48h32V40H64zm32 0v32h32V72zm32 0h32V40h-32zm32 0v32h32V72zm32 0h32V40h-32zm32 0v32h32V72zm32 0h32V40h-32zm32 0v32h32V72zm32 0h32V40h-32zm32 0v32h32V72zm32 0h32V40h-32zm32 0v32h32V72zm0 32h-32v32h32zm-64 0h-32v32h32zm-64 0h-32v32h32zm-64 0h-32v32h32zm-64 0h-32v32h32zm-64 0H64v32h32z"/></svg>
          </div>
          <div class="info-title">SALIDA Y META</div>
          <div class="info-description">Plaza de Bolívar Salento</div>
        </div>
        </div>
      </div>
      </div>
    </section>

    <!-- SECCION TEMPORAL DE MAPAS -->
    <section class="container my-3 my-md-5" id="section_6">
      <div class="temp-map-wrapper">
        <article class="temp-map-card">
          <div class="temp-map-copy">
            <div class="route-21k">
              <h3 class="fw-bold">Recorrido 22K</h3>
            </div>
            <p>
              La MM Entre Montañas te espera el 13 de septiembre en Salento. Disfruta de una carrera de 22 km sobre asfalto, con vistas espectaculares de la Cordillera Central. La ruta inicia en la Plaza de Bolívar de Salento, recorre la Calle Real, continúa hacia la vía al Valle de Cocora y alcanza su punto de retorno en el kilómetro 11, en el restaurante Las Palmas de Cocora. La meta estará en la Plaza de Bolívar de Salento. Disfruta de la vista de las majestuosas palmas de cera y de las típicas casas pintorescas de Salento, descubre la magia del Quindío. ¡Inscríbete ahora y sé parte de esta gran aventura!
            </p>
          </div>
          <div class="temp-map-media">
            <img 
              src="<?= $cdn ?>/Images/2025/MMEM_21k.webp" 
              alt="Corredores participando en la carrera 21K de Entre Montañas" 
              loading="lazy"
              width="570" 
              height="400"
            >
          </div>
        </article>
              
        <article class="temp-map-card">
          <div class="temp-map-copy">
            <h3 class="fw-bold">Recorrido 10K</h3>
            <p>
              La MM Entre Montañas te invita a poner a prueba tus límites el 13 de septiembre en Salento. Disfruta de un recorrido de 10 km sobre asfalto, con vistas panorámicas de la Cordillera Central. La ruta inicia en la Plaza de Bolívar de Salento, recorre la Calle Real, continúa hacia la vía al Valle de Cocora y alcanza su punto de retorno en el kilómetro 5. Encontraras la meta en la Plaza de Bolívar de Salento. Vive la emoción de la competencia, respira aire puro y descubre la magia del Salento.
              Inscríbete ahora y disfruta de unos 10K inolvidables, rodeado de naturaleza
            </p>
          </div>
          <div class="temp-map-media">
            <img 
              src="<?= $cdn ?>/Images/2025/MMEM_10k.webp" 
              alt="Corredores participando en la carrera 10K de Entre Montañas" 
              loading="lazy"
              width="570" 
              height="400"
            >
          </div>
        </article>
      </div>
    </section>

    <!-- SECCION DE MAPAS TEMPORALMENTE DESACTIVADA -->
    <!-- <section class="container my-3 my-md-5" id="section_6">
      <div class="row">
        <div class="col">
          <div class="img">
            <img 
              src="<?= $cdn ?>/Images/2025/MMEM_recorrido21k.webp" 
              class="rounded img-fluid" 
              alt="Mapa del recorrido 21K de la carrera Entre Montañas"
              loading="lazy"
            >
          </div>
            <div class="texto">
              <div>
                <div class="route-21k">
                  <h3 class="fw-bold">Recorrido 22K</h3>
                </div>
                <p>
                  La MM Entre Montañas te espera el 13 de septiembre en Salento. Disfruta de una carrera de 22 km sobre asfalto, con vistas espectaculares de la Cordillera Central. La ruta inicia en la Plaza de Bolívar de Salento, recorre la Calle Real, continúa hacia la vía al Valle de Cocora y alcanza su punto de retorno en el kilómetro 11, en el restaurante Las Palmas de Cocora. La meta estará en la Plaza de Bolívar de Salento. Disfruta de la vista de las majestuosas palmas de cera y de las típicas casas pintorescas de Salento, descubre la magia del Quindío. ¡Inscríbete ahora y sé parte de esta gran aventura!
                </p>
              </div>
                                            <div class="section">
              <img 
                src="<?= $cdn ?>/Images/2025/MMEM_21k.webp" 
                alt="Corredores participando en la carrera 21K de Entre Montañas" 
                loading="lazy"
                width="570" 
                height="400"
              >
            </div>
            <div class="section_6_link">
              <a href="https://api.coros.com/coros/data/share-track?regionId=1&id=466450603311333376" target="_blank" class="btn btn-primary">Descarga el Recorrido GPX</a>
            </div>
          </div>
        </div>
              
        <div class="col">
          <div class="img">
            <img 
              src="<?= $cdn ?>/Images/2025/MMEM_recorrido10k.webp" 
              class="rounded img-fluid" 
              alt="Mapa del recorrido 10K de la carrera Entre Montañas"
              loading="lazy"
            >
          </div>
          <div class="texto">
            <div>
              <h3 class="fw-bold">Recorrido 10K</h3>
              <p>
                La MM Entre Montañas te invita a poner a prueba tus límites el 13 de septiembre en Salento. Disfruta de un recorrido de 10 km sobre asfalto, con vistas panorámicas de la Cordillera Central. La ruta inicia en la Plaza de Bolívar de Salento, recorre la Calle Real, continúa hacia la vía al Valle de Cocora y alcanza su punto de retorno en el kilómetro 5. Encontraras la meta en la Plaza de Bolívar de Salento. Vive la emoción de la competencia, respira aire puro y descubre la magia del Salento.
                Inscríbete ahora y disfruta de unos 10K inolvidables, rodeado de naturaleza
              </p>
            </div>
            <div class="section">
              <img 
                src="<?= $cdn ?>/Images/2025/MMEM_10k.webp" 
                alt="Corredores participando en la carrera 10K de Entre Montañas" 
                loading="lazy"
                width="570" 
                height="400"
              >
            </div>
            <div class="section_6_link">
              <a href="https://api.coros.com/coros/data/share-track?regionId=1&id=467843139351314432" target="_blank" class="btn btn-primary">Descarga el Recorrido GPX</a>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <!-- SECCIÓN TESTIMONIOS -->
    <section class="testimonial-section">
      <div class="testimonial-frame">
        <h2 class="testimonial-title">Testimonios <strong>MMEM</strong></h2>
        
        <div class="testimonial-body">
          <!-- <div class="testimonial-videos">
            <video class="testimonial-1" src="<?= $cdn ?>/videos/lv_0_20250522122720.mp4" title="Testimonio 1" controls playsinline></video>
            <video class="testimonial-2" src="<?= $cdn ?>/videos/lv_0_20250709181342.mp4" title="Testimonio 2" controls playsinline></video>
          </div> -->

          <div class="testimonial-carousel">
            <div class="arrow left" onclick="prevTestimonial()">&#8249;</div>
            <div class="testimonial-image-wrapper">
            <div class="testimonial-slider" id="testimonial-slider"></div>
          </div>
          <div class="arrow right" onclick="nextTestimonial()">&#8250;</div>
        </div>
        <img class="testimonial-logo" src="<?= $cdn ?>/Images/2025/mmem_logo.svg" alt="MMEM Logo" />
      </div>
    </section>

    <!-- SECCIÓN VINCULA TU MARCA -->
    <section id="link-your-brand-section" style="display:none;">
      <div class="container link-brand-wrapper">
        <div class="link-brand-copy">
          <h1>Vincula tu marca a la Media Maratón Entre Montañas Salento</h1>
          
          <p class="link-brand-subtext">
            (Aliados, patrocinadores y expositores)
          </p>
          <p class="link-brand-invite">
            Déjanos tus datos de contacto
          </p>
        </div>
        <form class="link-brand-form" id="link-brand-form" method="post" action="link-brand-email.php" novalidate>
          <?php
            $hasBrandFeedback = $brandStatus && $brandMessage;
            $feedbackClasses = 'link-brand-feedback';
            if ($hasBrandFeedback) {
              $feedbackClasses .= $brandStatus === 'success' ? ' success' : ' error';
            }
          ?>
          <div
            class="<?= $feedbackClasses ?>"
            data-feedback
            role="status"
            aria-live="polite"
            <?= $hasBrandFeedback ? '' : 'hidden' ?>
          >
            <?= $hasBrandFeedback ? $brandMessage : '' ?>
          </div>
          <div class="form-field">
            <label for="brand-name">Nombre</label>
            <input
              type="text"
              id="brand-name"
              name="nombre"
              placeholder="Nombre completo"
              autocomplete="off"
              minlength="3"
              maxlength="80"
              pattern="^[A-Za-zÀ-ÿ'\s]{3,80}$"
              title="Usa solo letras y espacios (3 a 80 caracteres)."
              required
            >
          </div>
          <div class="form-field">
            <label for="brand-phone">Teléfono</label>
            <input
              type="tel"
              id="brand-phone"
              name="telefono"
              placeholder="Número de contacto"
              autocomplete="off"
              inputmode="tel"
              minlength="7"
              maxlength="20"
              pattern="^[0-9+()\-\s]{7,20}$"
              title="Entre 7 y 20 caracteres. Solo números, espacios y + ( ) -."
              required
            >
          </div>
          <div class="form-field">
            <label for="brand-email">Correo electrónico</label>
            <input
              type="email"
              id="brand-email"
              name="correo"
              placeholder="nombre@empresa.com"
              autocomplete="off"
              maxlength="120"
              title="Correo electrónico válido (máx. 120 caracteres)."
              required
            >
          </div>
          <button type="submit" class="btn btn-primary">
            Enviar
          </button>
        </form>
      </div>
    </section>

    <!-- SECCIÓN ARMA TU PLAN -->
    <section class="plan-container" data-nosnippet style="display: none;">
      <div class="container">
        <h1 class="plan-title">ARMA TU PLAN</h1>
        <div id="plan-content"></div>
      </div>
    </section>

    <!-- SECCIÓN GALERÍA -->
    <section class="container-fluid py-5 d-flex gap-1 flex-column" id="galeria">
        <?php
          $carouselIds = ['carouselExample', 'carouselExample_2'];
          foreach ($carouselIds as $index => $carouselId) {
            $images = $galleryCarousels[$index] ?? [];
            renderGalleryCarousel($carouselId, $images, $galleryBaseUrl, $galleryAltText);
          }
        ?>
      </section>
  </main>

  <?php include_once('./Templates/footer.php'); ?>

</body>
</html>

<!-- Script para el testimonios -->
<script>
  // Este script de testimonial no debería ir en el head, está bien aquí o en un archivo JS separado.
  const testimonialImages = [
    { url: "https://pub-beed5a84e0dc42b5a1c29e3473b62b98.r2.dev/Images/2026/testimonio1.JPG", alt: "Testimonio 1" },
    { url: "https://pub-beed5a84e0dc42b5a1c29e3473b62b98.r2.dev/Images/2026/testimonio2.JPG", alt: "Testimonio 2" },
    { url: "https://pub-beed5a84e0dc42b5a1c29e3473b62b98.r2.dev/Images/2026/testimonio3.JPG", alt: "Testimonio 3" },
    { url: "https://pub-beed5a84e0dc42b5a1c29e3473b62b98.r2.dev/Images/2026/testimonio4.JPG", alt: "Testimonio 4" },
    { url: "https://pub-beed5a84e0dc42b5a1c29e3473b62b98.r2.dev/Images/2026/testimonio5.JPG", alt: "Testimonio 5" },
  ];

  const slider = document.getElementById("testimonial-slider");
  const wrapper = document.querySelector(".testimonial-image-wrapper");

  const images = [
    testimonialImages[testimonialImages.length - 1],
    ...testimonialImages,
    testimonialImages[0]
  ];

  images.forEach(({ url, alt }) => {
    const img = document.createElement("img");
    img.src = url;
    img.alt = alt;
    slider.appendChild(img);
  });

  let currentIndex = 1;
  const total = testimonialImages.length;
  let isTransitioning = false;
  let autoSlideInterval = null;
  let autoPaused = false;

  function getSlideWidth() {
    return wrapper.clientWidth;
  }

  function moveSlider() {
    if (!slider) return;
    const width = getSlideWidth();
    slider.style.transition = "transform 0.5s ease-in-out";
    slider.style.transform = `translateX(-${currentIndex * width}px)`;
  }

  function resetSlider(index) {
    const width = getSlideWidth();
    slider.style.transition = "none";
    slider.style.transform = `translateX(-${index * width}px)`;
    currentIndex = index;
  }

  function nextTestimonial() {
    if (isTransitioning) return;
    stopAutoSlide();
    autoPaused = true;
    isTransitioning = true;
    currentIndex++;
    moveSlider();
  }

  function prevTestimonial() {
    if (isTransitioning) return;
    stopAutoSlide();
    autoPaused = true;
    isTransitioning = true;
    currentIndex--;
    moveSlider();
  }

  slider.addEventListener("transitionend", () => {
    isTransitioning = false;
    if (currentIndex === total + 1) resetSlider(1);
    else if (currentIndex === 0) resetSlider(total);
  });

  function startAutoSlide() {
    if (autoPaused) return;
    stopAutoSlide();
    autoSlideInterval = setInterval(() => {
      currentIndex++;
      moveSlider();
    }, 7000);
  }

  function stopAutoSlide() {
    clearInterval(autoSlideInterval);
  }

  document.addEventListener("DOMContentLoaded", () => {
    resetSlider(1);
    startAutoSlide();

    document.addEventListener("click", (e) => {
      const isArrow = e.target.classList.contains("arrow");
      if (!isArrow) {
        autoPaused = false;
        startAutoSlide();
      }
    });
  });

  window.addEventListener("resize", () => {
    resetSlider(currentIndex);
  });
</script>

<!-- Script para Arma Tu Plan -->
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const planData = {
      destacados: [
        {
          image: "<?= $cdn ?>/Images/2025/PARQUE_LOS_ARRIEROS.webp",
          title: "Parque Los Arrieros",
          description: `Parque temático del Quindío cortesía MMEM.\nReclama tu pase con tu kit.\n@parquelosarrieros`,
          extra: `Horarios: 9:00am a 5:00pm. Todos los días.\nUbicación: km 3 vía Montenegro - Quimbaya\nVereda Santana - Quindío`,
          contact: "+57 311 344 8451"
        },
        {
          image: "<?= $cdn ?>/Images/2025/OCASO.webp",
          title: "Finca El Ocaso",
          description: `Recorrido caficultor cortesía MMEM. Reclama tu pase con tu kit.\n@fincaelocasosalento`,
          extra: `Horarios: 10:00 am a 12:00 m | 2:00 pm a 3:00 pm\nDías: Todos los días\nDuración: 1h:30`,
          contact: "+57 313 425 3669"
        }
      ],
      hoteles: [
        {
          image: "<?= $cdn ?>/Images/2025/HOTEL_SALENTO_REAL.webp",
          title: "Hotel Salento Real",
          description: "@hsalentoreal\nwww.hotelsalentoreal.com",
          contact: "+57 316 629 6142"
        },
        {
          image: "<?= $cdn ?>/Images/2025/VIAJEROS_HOSTELS.webp",
          title: "Viajero Hostels",
          description: "Pregunta por tu descuento\n@viajerohostels\nwww.viajerohostels.com",
          contact: "+57 313 428 3448"
        },
        {
          image: "<?= $cdn ?>/Images/2025/HOTEL_CAFFEE_%20TREE.webp",
          title: "Hotel Coffee Tree Boutique Hostel",
          description: "@coffeetreebhsalento\nwww.coffeetreebh.com",
          contact: "+57 318 890 6999"
        }
      ],
      restaurantes: [
        {
          image: "<?= $cdn ?>/Images/2025/RECINTO.webp",
          title: "Recinto Gastronómico y Artesanal Villa Nueva de Salento",
          description: "Ubicación: cra 7a # 6-2 esquina plaza principal Salento"
        },
        {
          image: "<?= $cdn ?>/Images/2025/RESTAURANTE_%20DONDE_LAURITA.webp",
          title: "Restaurante Donde Laurita",
          description: "Ubicación: Sede parque - cll 5#5-34, Salento, Quindío / Sede Campestre - KM2 Vía Salento - Cocora"
        },
        {
          image: "<?= $cdn ?>/Images/2025/GATA_CAROLA.webp",
          title: "Restaurante La Gata Carola",
          description: "Ubicación: Cl. 4 #5-25, Salento, Quindío",
          contact: "+57 321 759 5489"
        },
        {
          image: "<?= $cdn ?>/Images/2025/DONDE_JUAN%20B.webp",
          title: "Restaurante Donde JuanB",
          description: "Ubicación: Valle de Cocora\nhttps://www.valledelcocora.com.co",
          contact: "+57 310 227-5091 | +57 314 827-8213"
        }
      ],
      otrasActividades: [
        {
          image: "<?= $cdn ?>/Images/2025/ASCAMUSA.webp",
          title: "Cabalgata Ascamusa",
          description: "",
          contact: "+57 322 933 4342 | +57 312 226 5527 | +57 3122156116"
        },
        {
          image: "<?= $cdn ?>/Images/2025/COOTRACOCORA.webp",
          title: "Cootracocora",
          description: "Transporte público de Salento. Rutas turísticas\nwww.cootracocora.com.co",
          extra: "Ubicación: plaza de Bolívar Salento",
          contact: "+57 310 437 2944"
        },
        {
          image: "<?= $cdn ?>/Images/2025/MORROGACHO.webp",
          title: "Caminata Morrogacho",
          description: "@expedicionmorrogacho",
          contact: "+57 310 842 558"
        }
      ]
    };

    const contentDiv = document.getElementById("plan-content");
  
    /* Función para resaltar palabras clave y enlaces */
    const highlightKeywords = (text) => {
    if (!text) return "";

    const instagramUrls = {
      "@parquelosarrieros": "https://www.instagram.com/parquelosarrieros/",
      "@fincaelocasosalento": "https://www.instagram.com/fincaelocasosalento/",
      "@hsalentoreal": "https://www.instagram.com/hsalentoreal/",
      "@viajerohostels": "https://www.instagram.com/viajerohostels/",
      "@hotelacasadelaurita": "https://www.instagram.com/hotelacasadelaurita/",
      "@coffeetreebhsalento": "https://www.instagram.com/coffeetreebhsalento/",
      "@expedicionmorrogacho": "https://www.instagram.com/expedicionmorrogacho/"
    };

    // @coffeetreebhsalento
    
    const linkStyle = "color: #FFFFFF; font-weight: bold; text-decoration: underline;";

    // Regex que captura los 3 tipos de elementos en grupos separados
    const regex = /^(Ubicación:|Horarios:|Duración:|Contacto:)|(@[\w.-]+)|(https?:\/\/\S+|www\.\S+)/gim;

    const highlightedText = text.replace(regex, (match, keyword, mention, link) => {
        // Grupo 1: Si es una palabra clave (Ubicación, etc.)
        if (keyword) {
            return `<span style="color: #FFFFFF; font-weight: bold;">${keyword}</span>`;
        }
        // Grupo 2: Si es una @mención
        if (mention) {
            const url = instagramUrls[mention.toLowerCase()];
            if (url) {
                return `<a href="${url}" target="_blank" rel="noopener noreferrer" style="${linkStyle}">${mention}</a>`;
            }
            return `<span style="color: #FFFFFF; font-weight: bold;">${mention}</span>`;
        }
        // Grupo 3: Si es un enlace (http o www)
        if (link) {
            const url = link.startsWith('www.') ? `https://${link}` : link;
            return `<a href="${url}" target="_blank" rel="noopener noreferrer" style="${linkStyle}">${link}</a>`;
        }
        return match; // Fallback por si acaso
    });

    // Finalmente, convierte los saltos de línea a <br>
    return highlightedText.replace(/\n/g, "<br>");
  };

  const transparentPlaceholder = "data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA=";

  const createSection = (title, items) => {
    const section = document.createElement("div");
    section.className = "plan-section";

    const heading = document.createElement("h2");
    heading.textContent = title;
    section.appendChild(heading);

    const grid = document.createElement("div");
    grid.className = "plan-grid";

    items.forEach((item) => {
      const card = document.createElement("div");
      card.className = "plan-card";

      if (!item.title && !item.description && !item.extra && !item.contact) {
        card.innerHTML = `<img src="${item.image}" alt="Promo" style="width:100%; height:100%; object-fit:cover; border-radius:0;">`;
      } else {
        card.innerHTML = `
        <img 
          src="${transparentPlaceholder}" 
          data-src="${item.image}" 
          alt="${item.title}" 
          loading="lazy"
          decoding="async"
        />
        <div class="card-content">
        <h3>${item.title}</h3>
        <div>
        ${item.description ? `<p>${highlightKeywords(item.description)}</p>` : ""}
        ${item.extra ? `<p>${highlightKeywords(item.extra)}</p>` : ""}
        </div>
        <div>
        ${item.contact ? `<p><span style="color: #FFFFFF; font-weight: bold;">Contacto:</span> ${item.contact}</p>` : ""}
        </div>
        </div>
        `;
      }
      grid.appendChild(card);
    });
    section.appendChild(grid);
    return section;
  };

  //contentDiv.appendChild(createSection("Destacados", planData.destacados));
  contentDiv.appendChild(createSection("Hoteles", planData.hoteles));
  contentDiv.appendChild(createSection("Restaurantes", planData.restaurantes));
  contentDiv.appendChild(createSection("Otras Actividades", planData.otrasActividades));

  const lazyLoadPlanImages = () => {
    const planImages = document.querySelectorAll('.plan-card img[data-src]');
    if (!('IntersectionObserver' in window) || planImages.length === 0) {
      planImages.forEach((img) => {
        if (img.dataset.src) {
          img.src = img.dataset.src;
          img.removeAttribute('data-src');
        }
      });
      return;
    }

    const observer = new IntersectionObserver((entries, obs) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) {
          return;
        }
        const target = entry.target;
        if (target.dataset.src) {
          target.src = target.dataset.src;
          target.removeAttribute('data-src');
        }
        obs.unobserve(target);
      });
    }, { rootMargin: '200px 0px' });

    planImages.forEach((img) => observer.observe(img));
  };

  lazyLoadPlanImages();
});
</script>

<!-- Script para Vincula tu marca -->
<script>
  document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("link-brand-form");
    if (!form) return;

    const feedbackEl = form.querySelector("[data-feedback]");
    const submitButton = form.querySelector('button[type="submit"]');
    const defaultButtonText = submitButton ? submitButton.textContent.trim() : "";
    const defaultError = "No pudimos enviar tu solicitud. Inténtalo nuevamente en unos minutos.";

    const setFeedback = (status, message) => {
      if (!feedbackEl) return;
      feedbackEl.classList.remove("success", "error");
      if (status) {
        feedbackEl.classList.add(status);
      }
      if (!message) {
        feedbackEl.hidden = true;
        feedbackEl.textContent = "";
        return;
      }
      feedbackEl.hidden = false;
      feedbackEl.textContent = message;
    };

    const toggleSubmitting = (isSubmitting) => {
      if (!submitButton) return;
      submitButton.disabled = isSubmitting;
      submitButton.textContent = isSubmitting ? "Enviando…" : defaultButtonText;
    };

    form.addEventListener("submit", async (event) => {
      event.preventDefault();

      if (!form.checkValidity()) {
        form.reportValidity();
        return;
      }

      const formData = new FormData(form);
      setFeedback(null, "Enviando tu solicitud...");
      toggleSubmitting(true);

      try {
        const response = await fetch(form.action, {
          method: "POST",
          body: formData,
          headers: {
            "X-Requested-With": "XMLHttpRequest",
            "Accept": "application/json"
          }
        });

        const data = await response.json().catch(() => null);
        const status = data?.status === "success" ? "success" : "error";
        const message = data?.message || (status === "success"
          ? "¡Gracias! Recibimos tus datos y te contactaremos muy pronto."
          : defaultError);

        setFeedback(status, message);

        if (status === "success") {
          form.reset();
        }
      } catch (error) {
        setFeedback("error", defaultError);
      } finally {
        toggleSubmitting(false);
      }
    });
  });
</script>
