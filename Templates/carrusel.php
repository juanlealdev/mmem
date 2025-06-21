<?php
// Lista de logos de patrocinadores
$logos = [
    './Images/logo/logo.png',
    './Images/logo/logo_2.png',
    './Images/logo/logo_3.png'
];
?>

<section class="patrocinadores-carousel my-5 py-4 bg-light">
    <div class="container overflow-hidden">
        <h4 class="text-center mb-4 fw-bold">Nuestros Patrocinadores</h4>
        <div class="slider-wrapper">
            <div class="slider-track d-flex align-items-center gap-5">
                <?php
                // Repetimos los logos dos veces para dar la ilusión de infinito
                for ($i = 0; $i < 2; $i++) {
                    foreach ($logos as $logo) {
                        echo '<div class="logo-item"><img src="' . $logo . '" alt="Logo patrocinador"></div>';
                    }
                }
                ?>
            </div>
        </div>
    </div>
</section>
