<?php
    header('X-Robots-Tag: noindex, nofollow, noimageindex', true);
    $pageTitle = "Resultados | Media Maratón Entre Montañas | Valle de Cocora - Salento";
    $pageDescription = "Consulta los resultados oficiales de ediciones anteriores de la Media Maratón Entre Montañas. La versión 2026 aún no publica resultados.";
    $pageUrl = "https://mediamaratonentremontanas.com.co/Resultados.php";
    $pageRobots = "noindex, nofollow, noimageindex";
    include_once('./Templates/header.php');
    include_once('./Templates/redes_icons.php');
?>

<section id="resultados-maraton">
    <!-- <h2>M.M. Entre Montañas 2024</h2> -->

    <div class="container my-5">
        <div class="video-section text-center">
            <h3 class="mb-3">🎥 Video Entre Montañas 2024</h3>
            <div class="ratio ratio-16x9">
                <iframe
                    width="560"
                    height="315"
                    src="https://www.youtube.com/embed/NztZJIUBlkQ"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>



    <div class="resultados-section">
        <h3>Resultados Entre Montañas 2024</h3>
        <p style="max-width:600px;margin:0 auto 1rem;">
            Aún no habilitamos el módulo de resultados para la edición 2026. Te invitamos a revivir la experiencia 2024 mientras actualizamos la nueva información.
        </p>
        <a href="https://tustiempos.com/resultados/media-maraton-entre-montanas/" class="btn-resultado" target="_blank" rel="noopener">
            📊 Consulta aquí tus resultados 2024
        </a>
    </div>
</section>


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

</body>
</html>