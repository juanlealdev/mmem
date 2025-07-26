<?php
    $cdn = "https://cdn.mmem.com.co";
    $pageTitle = "Media Maratón Entre Montañas | Desafío Cocora";

    include_once('./Templates/header.php');
    include_once('./Templates/redes_icons.php'); // Asegúrate de que este archivo no imprima HTML antes de <body>
    
    // Tus definiciones de $patrocinadores y $logos
    $patrocinadores = [
        [ 'src' => $cdn .'/Images/2025/nexus.webp',           'alt' => 'Nexus' ],
        // [ 'src' => $cdn .'/Images/2025/healthySports.webp', 'alt' => 'Healthy Sports' ],
        [ 'src' => $cdn .'/Images/2025/imdera.webp',          'alt' => 'IMDERA' ],
        [ 'src' => $cdn .'/Images/2025/gatorade.webp',        'alt' => 'Gatorade' ],
        [ 'src' => $cdn .'/Images/2025/andiautos.webp',       'alt' => 'Andiautos' ],
        [ 'src' => $cdn .'/Images/2025/smartfit.webp',        'alt' => 'Smart Fit' ],
        [ 'src' => $cdn .'/Images/2025/perea.webp',           'alt' => 'Consejal Perea' ],
        [ 'src' => $cdn .'/Images/2025/sura.webp',            'alt' => 'Sura' ],
        [ 'src' => $cdn .'/Images/2025/ocaso.webp',           'alt' => 'Ocaso' ]
    ];
    $logos = array_merge($patrocinadores, $patrocinadores, $patrocinadores, $patrocinadores,$patrocinadores);
?>

<main class="site-main">

    <section class="carousel-section" style="margin-top: -90px;">
        <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?= $cdn ?>/Images/2025/BANNER_MMEM_1.webp" alt="Corredores en Valle de Cocora con texto: Corre 100% en asfalto.">
                </div>
                <div class="carousel-item">
                    <img src="<?= $cdn ?>/Images/2025/BANNER_MMEM_2.webp" alt="Corredores saltando con texto: 10K y 21K - 14 de septiembre.">
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

    <section class="sponsor-carousel">
  <!-- <h3 class="sponsor-title">Nuestros Patrocinadores</h3> -->
  <div class="slider-wrapper">
    <div class="slider-track">
      <?php foreach ($logos as $patrocinador): ?>
        <div class="logo-item">
          <img src="<?= $patrocinador['src'] ?>" alt="<?= htmlspecialchars($patrocinador['alt']) ?>">
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

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

<section class="video-shirt-container">
  <video src="<?= $cdn ?>/videos/MMEM_lanzamiento_camiseta.mp4" controls playsinline muted autoplay loop></video>
</section>


    <section  class="container section-inscribete my-5">
        <div id="section-inscribete" style="scroll-margin-top: 170px;"class="row g-4">
                            <div class="col-md-6">
                <div class="card div_card_inscribete">
                    <h5 class="card-title">INSCRIPCIONES 10K</h5>
                    <a class="btn btn-register" href="https://biciq.com/info-event/10k-media-maraton-entre-montanas-950d9e9f" target="_blank">INSCRÍBETE AHORA</a>
                </div>
            </div>

                            <div class="col-md-6">
                <div class="card div_card_inscribete">
                    <h5 class="card-title">INSCRIPCIONES 21K</h5>
                    <a class="btn btn-register" href="https://biciq.com/info-event/7b307c0e-9d2c-4243-9959-79f3652328d9" target="_blank">INSCRÍBETE AHORA</a>
                </div>
            </div>
        </div>
     </section>      

    <section class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="hero-section">
                    <h2 class="hero-title">¿Listo para correr Entre Montañas? ⛰️</h2>
                    <p class="hero-text">
                        La <strong>MM Entre Montañas</strong> te ofrece la oportunidad de combinar tu pasión por el running con la exploración de uno de los paisajes más emblemáticos de Colombia.
                        Corre 100% sobre asfalto, respira aire puro, disfruta de la brisa fresca de la montaña, del mejor paisaje natural de Colombia, de las emblemáticas casas pintorescas de Salento, del aroma a café y déjate envolver por la magia del Quindío.
                    </p>
                    <p class="hero-text">
                        Un evento sin igual en el Valle de Cocora. Corre rodeado de la majestuosa palma de cera y siente la adrenalina de una carrera inolvidable.
                    </p>
                    <p class="hero-text">
                        <strong>¡Sé parte de esta experiencia única y descubre por qué el Quindío es el destino favorito de los amantes de la naturaleza!</strong>
                    </p>
                </div>
            </div>
        </div>
    </section>

        <section class="container py-3" id="section_4">
        <div class="row text-center justify-content-center g-4">
                 
                            <div class="col-md-3 info-item">
                <div class="info-icon">
                    <img src="<?= $cdn ?>/Images/Icon/icono-fecha.svg" alt="Icono de calendario" loading="lazy" style="width: 80px; height: 80px;">
                </div>
                <div class="info-title" style="font-size: 16px;">FECHA</div>
                <div class="info-description" style="font-size: 14px;">SEPTIEMBRE 14/2025</div>
            </div>

                            <div class="col-md-3 info-item">
                <div class="info-icon">
                    <img src="<?= $cdn ?>/Images/Icon/ico-recorrido.webp" alt="Icono de mapa con marcador" loading="lazy" style="width: 80px; height: 80px;">
                </div>
                <div class="info-title" style="font-size: 16px;">DISTANCIAS</div>
                <div class="info-description" style="font-size: 14px;">21 K y 10 K</div>
            </div>

                            <div class="col-md-3 info-item">
                <div class="info-icon">
                    <img src="<?= $cdn ?>/Images/Icon/icono-zona.svg" alt="Icono de ubicación" loading="lazy" style="width: 80px; height: 80px;">
                </div>
                <div class="info-title" style="font-size: 16px;">SALIDA Y META</div>
                <div class="info-description" style="font-size: 14px;">
                    Plaza de Bolívar Salento<br>
                </div>
            </div>
        </div>
    </section>

    <section class="container my-3 my-md-5" id="section_6">
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
                        <h3 class="fw-bold">Recorrido 21K</h3>
                        <p>
                            ⛰️ La MM Entre Montañas te espera el 14 de septiembre en el Valle de Cócora. Disfruta de una carrera de 21 km sobre asfalto con vistas espectaculares de la Cordillera Central. Esta ruta inicia en la Plaza de Bolívar Salento, pasa por la calle real de Salento y alcanza su punto de retorno a los 10k en el emblemático restaurante Donde JuanB, encontraras la meta en la Plaza de Bolívar Salento. Disfruta de la vista de las majestuosas palmas de cera y de las típicas casas pintorescas de Salento, descubre la magia del Quindío. ¡Inscríbete ahora y sé parte de esta gran aventura!
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
                            ¡Domina los 10K en el corazón del Quindío! ⛰️ La MM Entre Montañas te invita a poner a prueba tus límites el 14 de septiembre en el Valle de Cocora. Disfruta de un desafiante recorrido de 10 km sobre asfalto con vistas panorámicas de la Cordillera Central. Esta ruta inicia en la Plaza de Bolívar Salento, pasa por la calle real de Salento y alcanza su punto de retorno a los 5k, encontraras la meta en la Plaza de Bolívar Salento. Vive la emoción de la competencia, respira aire puro y descubre la magia del Quindío. "¿Eres un #runner de corazón? ¡Demuéstralo! Inscripciones abiertas para los más locos por correr."
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
    </section>

    <section class="testimonial-section">
  <div class="testimonial-frame">
    <h2 class="testimonial-title">Testimonios <strong>MMEM</strong></h2>
      
    <div class="testimonial-body">
            <div class="testimonial-videos">
        <video class="testimonial-1" src="<?= $cdn ?>/videos/lv_0_20250522122720.mp4" title="Testimonio 1" controls playsinline></video>
        <video class="testimonial-2" src="<?= $cdn ?>/videos/lv_0_20250709181342.mp4" title="Testimonio 2" controls playsinline></video>
    </div>

            <div class="testimonial-carousel">
        <div class="arrow left" onclick="prevTestimonial()">&#8249;</div>
        <div class="testimonial-image-wrapper">
        <div class="testimonial-slider" id="testimonial-slider">
                </div>
        </div>
        <div class="arrow right" onclick="nextTestimonial()">&#8250;</div>
        </div>

                <img class="testimonial-logo" src="<?= $cdn ?>/Images/2025/mmem_logo.svg" alt="MMEM Logo" />
    </div>
</section>

<script>
  // Este script de testimonial no debería ir en el head, está bien aquí o en un archivo JS separado.
  const testimonialImages = [
    { url: "<?= $cdn ?>/Images/2025/t2%402x.webp", alt: "Testimonio 1" },
    { url: "<?= $cdn ?>/Images/2025/t1%402x.webp", alt: "Testimonio 2" },
    { url: "<?= $cdn ?>/Images/2025/t4%402x.webp", alt: "Testimonio 3" },
    { url: "<?= $cdn ?>/Images/2025/t5%402x.webp", alt: "Testimonio 4" },
    { url: "<?= $cdn ?>/Images/2025/t6%402x.webp", alt: "Testimonio 5" },
    { url: "<?= $cdn ?>/Images/2025/t7%402x.webp", alt: "Testimonio 6" },
    { url: "<?= $cdn ?>/Images/2025/t8%402x.webp", alt: "Testimonio 7" }
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


<div class="plan-container">
  <div class="container">
    <h1 class="plan-title">ARMA TU PLAN</h1>
    <div id="plan-content"></div>
  </div>
</div>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const planData = {
      destacados: [
        {
          image: "<?= $cdn ?>/Images/2025/MMEM_TheCoffee.webp",
          title: "",
          description: "",
          extra: "",
          contact: ""
        },
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
          description: "27% de descuento, código: MMEM27\n@hotelsalentoreal\nwww.hotelsalentoreal.com",
          contact: "+57 316 629 6142"
        },
        {
          image: "<?= $cdn ?>/Images/2025/VIAJEROS_HOSTELS.webp",
          title: "Viajero Hostels",
          description: "Pregunta por tu descuento\n@viajerohostels\nwww.viajerohostels.com",
          contact: "+57 313 428 3448"
        },
        {
          image: "<?= $cdn ?>/Images/2025/CASA_DE%20_LAURITA.webp",
          title: "Hotel La Casa de Laurita",
          description: "10% de descuento\n@hotellacasadelaurita",
          contact: "+57 313 383 3294"
        },
        {
          image: "<?= $cdn ?>/Images/2025/HOTEL_CAFFEE_%20TREE.webp",
          title: "Hotel Coffee Tree Boutique Hostel",
          description: "15% de descuento\n@coffeetreesalento\nwww.coffeetreebh.com",
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
          description: "Ubicación: Valle de Cocora",
          contact: "+57 310 227-5091 | +57 314 827-8213"
        }
      ],
      otrasActividades: [
        {
          image: "<?= $cdn ?>/Images/2025/ASCAMUSA.webp",
          title: "Cabalgata Ascamusa",
          description: "15% de descuento\n@cabalgatasvalledeCocora",
          contact: "+57 322 933 4342 | +57 312 226 5527"
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
    const highlightKeywords = (text) => {
        if (!text) return "";

        return text
        .split("\n")
        .map(line => {
        let processedLine = line;

        // Regla 1: Resalta las palabras clave al inicio de la línea
         processedLine = processedLine.replace(
         /^(Ubicación|Horarios|Duración|Contacto):/i,
        '<span style="color: #F7CA46; font-weight: bold;">$&</span>'
        );

         // Regla 2: Resalta las @menciones en cualquier parte de la línea
         processedLine = processedLine.replace(
        /(@[\w.-]+)/g,
        '<span style="color: #F7CA46; font-weight: bold;">$1</span>'
        );

        // Regla 3: Resalta los enlaces (http, https, www)
        processedLine = processedLine.replace(
        /(https?:\/\/\S+|www\.\S+)/g,
        '<span style="color: #F7CA46; font-weight: bold;">$1</span>'
        );

      return processedLine;
    })
    .join("<br>");
};

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

        // Tarjeta especial sin contenido textual
        if (!item.title && !item.description && !item.extra && !item.contact) {
          card.innerHTML = `<img src="${item.image}" alt="Promo" style="width:100%; height:100%; object-fit:cover; border-radius:0;">`;
        } else {
            card.innerHTML = `
            <img src="${item.image}" alt="${item.title}" />
            <div class="card-content">
            <h3>${item.title}</h3>
            <div>
            ${item.description ? `<p>${highlightKeywords(item.description)}</p>` : ""}
            ${item.extra ? `<p>${highlightKeywords(item.extra)}</p>` : ""}
            </div>
            <div>
            ${item.contact ? `<p><span style="color: #F7CA46; font-weight: bold;">Contacto:</span> ${item.contact}</p>` : ""}
            </div>
            </div>
            `;
        }

        grid.appendChild(card);
      });

      section.appendChild(grid);
      return section;
    };

    contentDiv.appendChild(createSection("Destacados", planData.destacados));
    contentDiv.appendChild(createSection("Hoteles", planData.hoteles));
    contentDiv.appendChild(createSection("Restaurantes", planData.restaurantes));
    contentDiv.appendChild(createSection("Otras Actividades", planData.otrasActividades));
  });
</script>

    <section class="container-fluid my-5 d-flex gap-1 flex-column" id="section_8">
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-inner">

                                <div class="carousel-item active">
                    <div class="d-flex justify-content-center gap-2">
                        <img src="<?= $cdn ?>/Images/2025/MMEM_(226).webp" class="rounded img-fluid" alt="Corredores en la línea de salida de la Media Maratón Entre Montañas">
                        <img src="<?= $cdn ?>/Images/2025/MMEM_(283).webp" class="rounded img-fluid" alt="Participantes esperando el inicio de la Media Maratón Entre Montañas">
                        <img src="<?= $cdn ?>/Images/2025/MMEM_(280).webp" class="rounded img-fluid" alt="Corredora concentrada durante la Media Maratón Entre Montañas con dorsal 0308">
                    </div>
                </div>

                                <div class="carousel-item">
                    <div class="d-flex justify-content-center gap-2">
                        <img src="<?= $cdn ?>/Images/2025/MMEM_(234).webp" class="rounded img-fluid" alt="Imagen 4">
                        <img src="<?= $cdn ?>/Images/2025/MMEM_(233).webp" class="rounded img-fluid" alt="Imagen 5">
                        <img src="<?= $cdn ?>/Images/2025/MMEM_(232).webp" class="rounded img-fluid" alt="Imagen 6">
                    </div>
                </div>

                                <div class="carousel-item">
                    <div class="d-flex justify-content-center gap-2">
                        <img src="<?= $cdn ?>/Images/2025/MMEM_(270).webp" class="rounded img-fluid" alt="Grupo de corredores en la Media Maratón Entre Montañas.">
                        <img src="<?= $cdn ?>/Images/2025/MMEM_(7).webp" class="rounded img-fluid" alt="Corredora feliz cruza la meta de la Media Maratón Entre Montañas.">
                        <img src="<?= $cdn ?>/Images/2025/MMEM_(130).webp" class="rounded img-fluid" alt="Corredor en la salida de la Media Maratón Entre Montañas.">
                    </div>
                </div>
            </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
        </div>

        <div id="carouselExample_2" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-inner">

                                <div class="carousel-item active">
                    <div class="d-flex justify-content-center gap-2">
                        <img src="<?= $cdn ?>/Images/2025/Media_Maratón_Entre_Montañas_(602).webp" class="rounded img-fluid" alt="Media Maratón Entre Montañas: podio de ganadores.">
                        <img src="<?= $cdn ?>/Images/2025/MMEM_(1).webp" class="rounded img-fluid" alt="Grupo de participantes en Media Maratón Entre Montañas.">
                        <img src="<?= $cdn ?>/Images/2025/MMEM_(289).webp" class="rounded img-fluid" alt="Grupo de corredores en la Media Maratón Entre Montañas.">
                    </div>
                </div>

                                <div class="carousel-item">
                    <div class="d-flex justify-content-center gap-2">
                        <img src="<?= $cdn ?>/Images/2025/MMEM_(80).webp" alt="Corredor en la Media Maratón Entre Montañas.">
                        <img src="<?= $cdn ?>/Images/2025/MMEM_(257).webp" class="rounded img-fluid" alt="Corredora con dorsal 0332 en la salida de la Media Maratón Entre Montañas.">
                        <img src="<?= $cdn ?>/Images/2025/MMEM_(252).webp" class="rounded img-fluid" alt="Corredores en la salida de la Media Maratón Entre Montañas.">
                    </div>
                </div>

                                <div class="carousel-item">
                    <div class="d-flex justify-content-center gap-2">
                        <img src="<?= $cdn ?>/Images/2025/Media_Maratón_Entre_Montañas_(596).webp" class="rounded img-fluid" alt="Corredora cruza la meta de la Media Maratón Entre Montañas con los brazos en alto.">
                        <img src="<?= $cdn ?>/Images/2025/Media_Maratón_Entre_Montañas_(589).webp" class="rounded img-fluid" alt="Corredora sonriente en la Media Maratón Entre Montañas.">
                        <img src="<?= $cdn ?>/Images/2025/Media_Maratón_Entre_Montañas_(558).webp" class="rounded img-fluid" alt="Corredores en la Media Maratón Entre Montañas con el dorsal 0308.">
                    </div>
                </div>
            </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample_2" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample_2" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
        </div>
    </section>
</main>

<?php include_once('./Templates/footer.php'); ?>
</body>
</html>