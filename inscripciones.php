<?php
    $pageTitle = "Inscripciones | Media Maratón Entre Montañas | Desafío Cocora";
    $pageDescription = "Inscríbete a la Media Maratón Entre Montañas 2027 en Salento, Quindío: 22K y 10K el domingo 19 de septiembre. Aforo limitado, solo mayores de 18 años.";
    $pageUrl = "https://mediamaratonentremontanas.com.co/inscripciones.php";

    // URL directa del formulario. Se usa como respaldo si eventrid.min.js no llega a correr.
    $eventridUrl = "https://organizer.eventrid.com.co/mmentremontanas/eventos/media-maraton-entre-montanas-salento-2027/inscripciones/seleccion_tickets";

    include_once('./Templates/header.php');
    include_once('./Templates/redes_icons.php');
?>

<main id="inscripciones" style="min-height: 100vh;">
    <section class="container">
        <h1>Inscripciones</h1>

        <!--
            Integración Eventrid 2027.
            eventrid.min.js busca este div por id="eventrid", crea el iframe adentro y le
            agrega user_hash, referer y los utm_* a la URL para la atribución.
            El id y los nombres de los data-* los define el script: no cambiarlos.
        -->
        <div id="eventrid"
             data-src="https://organizer.eventrid.com.co/mmentremontanas/eventos/media-maraton-entre-montanas-salento-2027/participantes/inscripcion/iframe"
             data-width="100%"
             data-height="1200px"></div>

        <!-- Respaldo con JavaScript desactivado. -->
        <noscript>
            <div class="inscripciones-respaldo">
                <p>Para mostrar el formulario de inscripción aquí necesitás JavaScript activado.</p>
                <a class="btn-respaldo" href="<?= htmlspecialchars($eventridUrl) ?>" target="_blank" rel="noopener">
                    Abrir el formulario de inscripción
                </a>
            </div>
        </noscript>

        <!-- Respaldo si el script no carga (CDN caído, bloqueador). Se revela solo si no apareció el iframe. -->
        <div class="inscripciones-respaldo" id="eventrid-respaldo" hidden>
            <p>No pudimos cargar el formulario de inscripción en esta página.</p>
            <a class="btn-respaldo" href="<?= htmlspecialchars($eventridUrl) ?>" target="_blank" rel="noopener">
                Abrir el formulario de inscripción
            </a>
        </div>

        <script src="https://d10347yu6bo3wz.cloudfront.net/js/eventrid.min.js"></script>
        <script>
            // Corre en 'load': para entonces eventrid.min.js ya cargó y creó el iframe, o falló.
            window.addEventListener('load', function () {
                var frame = document.querySelector('#eventrid iframe');

                if (!frame) {
                    document.getElementById('eventrid-respaldo').hidden = false;
                    return;
                }

                // El script de Eventrid no le pone nombre accesible al iframe que crea.
                frame.title = 'Formulario de inscripción — Media Maratón Entre Montañas';

                // El iframe de Eventrid trae iframeSizer.contentWindow, así que puede
                // ajustar su alto al contenido en vez de quedarse en el data-height fijo.
                // Si el resizer no está disponible, el iframe conserva ese alto.
                if (typeof window.iFrameResize === 'function') {
                    iFrameResize({ log: false, checkOrigin: false }, frame);
                }
            });
        </script>
    </section>
</main>

<?php
    include_once('./Templates/footer.php');
?>

</body>
</html>
