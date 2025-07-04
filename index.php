<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media Maratón Entre Montañas | Desafío Cocora</title>
    <link rel="icon" type="image/png" href="favicon.png">
    <meta name="description" content="Corre 100% sobre asfalto, entre las montañas del Valle del Cocora. Respira aire puro, disfruta de la brisa fresca de la montaña, del mejor paisaje natural de Colombia, de las emblemáticas casas pintorescas de Salento, del aroma a café y déjate envolver por la magia del Quindío.">
    <meta name="keywords" content="Media Maratón, Carrera 10K, Quindío, Colombia, Valle del Cocora, Salento,">
    <meta name="author" content="Media Maratón Entre Montañas | Desafío Cocora ">
    <meta name="copyright" content="© 2025 MMEM | Desafío Cocora">

    <!-- Favicon -->
    <link rel="icon" href="https://tudominio.com/favicon.ico" type="image/x-icon">

    <!-- Canonical para evitar contenido duplicado -->
    <link rel="canonical" href="https://mediamaratonentremontanas.com.co">

    <!-- CSS -->
    <link rel="stylesheet" href="styles.css">
    <link rel ="stylesheet" href="styles/carrusel.css">

    <!-- JavaScript -->
    <script src="script.js" defer></script>

   <!-- Google Search Console Verification -->
    <meta name="google-site-verification" content="<meta name="google-site-verification" content="o_baRqjiHFjfs-EFKfBLLMNLCr99TN1GQsJmcWJ25NM" />">

    <meta name="robots" content="index, follow">
    <!-- Meta Pixel Code -->
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
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=718973520528019&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
</head>

<?php
include_once('./Templates/alert.php')?>;


<?php

include_once('./Templates/header.php');
?>



<main class="site-main">

    <!-- Carrusel con Indicadores de Imágenes -->
    <section class="carousel-section">
        <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?= $cdn ?>/Images/2025/BANNER_MMEM_1.webp" alt="Corredores en Valle de Cocora con texto: Corre 100% en asfalto.">
                </div>
                <div class="carousel-item">
                    <img src="<?= $cdn ?>/Images/2025/BANNER_MMEM_2.webp" alt="Corredores saltando con texto: 10K y 21K - 14 de septiembre.">
                </div>
                <!-- <div class="carousel-item">
                    <img src="./Images/portada1-1-1019x1024.png" alt="">
                </div> -->
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




    <section  class="container section-inscribete my-5">
        <div id="section-inscribete" style="scroll-margin-top: 170px;"class="row g-4">
            <!-- Tarjeta 10K -->
            <div class="col-md-6">
                <div class="card div_card_inscribete">
                    <h5 class="card-title">INSCRIPCIONES 10K</h5>
                    <a class="btn btn-register" href="https://biciq.com/info-event/10k-media-maraton-entre-montanas-950d9e9f" target="_blank">INSCRÍBETE AHORA</a>
                </div>
            </div>

            <!-- Tarjeta 21K -->
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

    <!-- Sección principal más compacta -->
    <section class="container py-3" id="section_4">
        <div class="row text-center justify-content-center g-4">
            
            <!-- Ítem 1 -->
            <div class="col-md-3 info-item">
                <div class="info-icon">
                    <img src="<?= $cdn ?>/Images/Icon/icono-fecha.svg" alt="Icono de calendario" loading="lazy" style="width: 80px; height: 80px;">
                </div>
                <div class="info-title" style="font-size: 16px;">FECHA</div>
                <div class="info-description" style="font-size: 14px;">SEPTIEMBRE 14/2025</div>
            </div>

            <!-- Ítem 2 -->
            <div class="col-md-3 info-item">
                <div class="info-icon">
                    <img src="<?= $cdn ?>/Images/Icon/ico-recorrido.webp" alt="Icono de mapa con marcador" loading="lazy" style="width: 80px; height: 80px;">
                </div>
                <div class="info-title" style="font-size: 16px;">DISTANCIAS</div>
                <div class="info-description" style="font-size: 14px;">21 K y 10 K</div>
            </div>

            <!-- Ítem 3 -->
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

    <section class="container my-5" id="section_6">
        <div class="row">
            <div class="col ">

                <!-- Primer bloque: Recorrido 21K -->
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
                    <!-- <div class="nubes"></div> -->
                    <div class="section">
                        <img 
                            src="<?= $cdn ?>/Images/2025/MMEM_21k.webp" 
                            alt="Palmas de cera en el Valle de Cocora" 
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
            
            <div class="col ">
                <!-- Primer bloque: Recorrido 21K -->
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
                    <!-- <div class="nubes"></div> -->
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
                        <a href="https://api.coros.com/coros/data/share-track?regionId=1&id=466450603311333376" target="_blank" class="btn btn-primary">Descarga el Recorrido GPX</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container my-5 text-center">
        <div class="d-flex justify-content-center align-items-center gap-3">
            <span class="custom-text">PLANEA TU VIAJE</span>
            <button class="custom-button" id="bton_viaje">HAZ TU PLAN</button>
        </div>
    </section>

    <section class="patrocinadores-carousel">
  <h3>Nuestros Patrocinadores</h3>
  <div class="slider-wrapper">
    <div class="slider-track">
      <?php
      $patrocinadores = ['Logo.png', 'Logo_2.png', 'Logo_3.png'];
      $logos = array_merge($patrocinadores, $patrocinadores, $patrocinadores, $patrocinadores, $patrocinadores);

      foreach ($logos as $logo) {
        echo "<div class='logo-item'>
                <img src='Images/logo/$logo' alt='Patrocinador'>
              </div>";
      }
      ?>
    </div>
  </div>
</section>

    <section class="container-fluid my-5 d-flex gap-1 flex-column" id="section_8">
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-inner">

                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="d-flex justify-content-center gap-2">
                        <img src="<?= $cdn ?>/Images/2025/MMEM_(226).webp" class="rounded img-fluid" alt="Imagen 4" loading="lazy">
                        <img src="<?= $cdn ?>/Images/2025/MMEM_(283).webp" class="rounded img-fluid" alt="Imagen 5" loading="lazy">
                        <img src="<?= $cdn ?>/Images/2025/MMEM_(280).webp" class="rounded img-fluid" alt="Imagen 6" loading="lazy">
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item">
                    <div class="d-flex justify-content-center gap-2">
                        <img src="<?= $cdn ?>/Images/2025/MMEM_(234).webp" class="rounded img-fluid" alt="Imagen 4" loading="lazy">
                        <img src="<?= $cdn ?>/Images/2025/MMEM_(233).webp" class="rounded img-fluid" alt="Imagen 5" loading="lazy">
                        <img src="<?= $cdn ?>/Images/2025/MMEM_(232).webp" class="rounded img-fluid" alt="Imagen 6" loading="lazy">
                    </div>
                </div>

                <!-- Slide 3 (Solo 2 imágenes) -->
                <div class="carousel-item">
                    <div class="d-flex justify-content-center gap-2">
                        <img src="<?= $cdn ?>/Images/2025/MMEM_(270).webp" class="rounded img-fluid" alt="Imagen 4" loading="lazy">
                        <img src="<?= $cdn ?>/Images/2025/MMEM_(7).webp" class="rounded img-fluid" alt="Imagen 5" loading="lazy">
                        <img src="<?= $cdn ?>/Images/2025/MMEM_(130).webp" class="rounded img-fluid" alt="Imagen 3" loading="lazy">
                    </div>
                </div>
            </div>

            <!-- Controles de navegación -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
        </div>

        <div id="carouselExample_2" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-inner">

                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="d-flex justify-content-center gap-2">
                        <img src="<?= $cdn ?>/Images/2025/Media_Maratón_Entre_Montañas_(602).webp" class="rounded img-fluid" alt="Imagen 1" loading="lazy">
                        <img src="<?= $cdn ?>/Images/2025/MMEM_(1).webp" class="rounded img-fluid" alt="Imagen 2" loading="lazy">
                        <img src="<?= $cdn ?>/Images/2025/MMEM_(289).webp" class="rounded img-fluid" alt="Imagen 3" loading="lazy">
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item">
                    <div class="d-flex justify-content-center gap-2">
                        <img src="<?= $cdn ?>/Images/2025/MMEM_(80).webp" alt="Imagen 4" loading="lazy">
                        <img src="<?= $cdn ?>/Images/2025/MMEM_(257).webp" class="rounded img-fluid" alt="Imagen 6" loading="lazy">
                        <img src="<?= $cdn ?>/Images/2025/MMEM_(252).webp" class="rounded img-fluid" alt="Imagen 6" loading="lazy">
                    </div>
                </div>

                <!-- Slide 3 (Solo 2 imágenes) -->
                <div class="carousel-item">
                    <div class="d-flex justify-content-center gap-2">
                        <img src="<?= $cdn ?>/Images/2025/Media_Maratón_Entre_Montañas_(596).webp" class="rounded img-fluid" alt="Imagen 6" loading="lazy">
                        <img src="<?= $cdn ?>/Images/2025/Media_Maratón_Entre_Montañas_(589).webp" class="rounded img-fluid" alt="Imagen 6" loading="lazy">
                        <img src="<?= $cdn ?>/Images/2025/Media_Maratón_Entre_Montañas_(558).webp" class="rounded img-fluid" alt="Imagen 6" loading="lazy">
                    </div>
                </div>
            </div>

            <!-- Controles de navegación -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample_2" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample_2" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
        </div>
    </section>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let carousels = document.querySelectorAll(".carousel");

        <div class="carousel-item">

            <div class="d-flex justify-content-center gap-2">

                <img src="./Images/2025/MMEM (80).jpg" alt="Imagen 4">

                <img src="./Images/2025/MMEM (257).jpg" class="rounded img-fluid" alt="Imagen 6">
                <img src="./Images/2025/MMEM (252).jpg" class="rounded img-fluid" alt="Imagen 6">

            </div>

        </div>

        <!-- Slide 3 (Solo 2 imágenes) -->

        <div class="carousel-item">

            <div class="d-flex justify-content-center gap-2">


                <img src="./Images/2025/Media Maratón Entre Montañas (596).jpg" class="rounded img-fluid" alt="Imagen 6">
                <img src="./Images/2025/Media Maratón Entre Montañas (589).jpg" class="rounded img-fluid" alt="Imagen 6">
                <img src="./Images/2025/Media Maratón Entre Montañas (558).jpg" class="rounded img-fluid" alt="Imagen 6">

            </div>

        </div>

    </div>

    <!-- Controles de navegación -->

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample_2" data-bs-slide="prev">

        <span class="carousel-control-prev-icon" aria-hidden="true"></span>

    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample_2" data-bs-slide="next">

        <span class="carousel-control-next-icon" aria-hidden="true"></span>

    </button>

</div>

</section>

<script>
document.addEventListener("DOMContentLoaded", function() {
    let carousels = document.querySelectorAll(".carousel");

    carousels.forEach(carousel => {
        let touchStartX = 0;
        let touchEndX = 0;

        carousel.addEventListener("touchstart", function(event) {
            touchStartX = event.changedTouches[0].screenX;
        });

        carousel.addEventListener("touchend", function(event) {
            touchEndX = event.changedTouches[0].screenX;
            if (touchStartX - touchEndX > 50) {
                // Deslizamiento hacia la izquierda -> Avanza una imagen
                let nextButton = carousel.querySelector(".carousel-control-next");
                if (nextButton) nextButton.click();
            } else if (touchEndX - touchStartX > 50) {
                // Deslizamiento hacia la derecha -> Retrocede una imagen
                let prevButton = carousel.querySelector(".carousel-control-prev");
                if (prevButton) prevButton.click();
            }
        });
    });
});
</script>



</main>

<!-- Footer -->
<footer class="text-center text-white py-3 footer_marathon">
    <div class="container">
        <p class="mb-1"><i class="ri-whatsapp-fill"></i> Whatsapp: 3138157376</p>
        <p class="mb-1"><i class="ri-mail-fill"></i> Correo: mediamaratonentremontanas@gmail.com</p>
        <p class="mb-0"><i class="ri-time-fill"></i> Horario de atención: 8 am a 12 m y de 2 pm a 6 pm de lunes a viernes</p>
        <b>
            <p>Armenia-Quindío</p>
        </b>
    </div>
</footer>
