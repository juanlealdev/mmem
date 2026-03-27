<?php
    $pageTitle = "Información | Media Maratón Entre Montañas | Desafío Cocora";
    include_once('./Templates/header.php');
    include_once('./Templates/redes_icons.php');
?>

<main id="inscripciones" style="min-height: 100vh;">
    <section class="container">
        <h1>Inscripciones</h1>
        <iframe src="https://organizer.eventrid.com.co/mmentremontanas/eventos/mmentremontanas2026/participantes/inscripcion/iframe" width="100%" height="100%" frameborder="0" scrolling="no" allowtransparency="true"></iframe>
    </section>
</main>

<?php
    include_once('./Templates/footer.php');
?>

</body>
</html>

<script>iFrameResize({log:false,checkOrigin:false}, 'iframe');</script>