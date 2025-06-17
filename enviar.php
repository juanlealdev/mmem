<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Cargar PHPMailer
require 'vendor/autoload.php'; // Si usas Composer

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
     $sexo = $_POST['sexo'];
    $documento = $_POST['documento'];
    $identificacion = $_POST['identificacion'];
    $celular = $_POST['celular'];
    $correo = $_POST['correo'];
    $ciudad = $_POST['ciudad'];
    $direccion = $_POST['direccion'];
    $distancia = $_POST['distancia'];

    // Link de pago según distancia
    $link_pago = '';
    if ($distancia === '10K') {
        $link_pago = 'https://biciq.com/info-event/10k-media-maraton-entre-montanas-950d9e9f'; // 🟡 Reemplaza este link
    } elseif ($distancia === '21K') {
        $link_pago = 'https://biciq.com/info-event/7b307c0e-9d2c-4243-9959-79f3652328d9'; // 🟡 Reemplaza este link
    } else {
        die("Distancia no válida.");
    }

    // Enviar correo
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'mmentremontanas@gmail.com'; // 🟡 Tu correo Gmail
        $mail->Password   = 'clave-de-aplicacion'; // 🟡 Contraseña de aplicación
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        $mail->setFrom('tucorreo@gmail.com', 'Formulario Web');
        $mail->addAddress('tucorreo@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = 'Nuevo registro de carrera';
        $mail->Body    = "
            <strong>Nombre:</strong> $nombre <br>
            <strong>Sexo:</strong> $sexo <br>
            <strong>Tipo de Documento:</strong> $documento <br>
            <strong>Número de Documento:</strong> $identificacion <br>
            <strong>Número Celular:</strong> $celular <br>
            <strong>Correo Electrónico:</strong> $correo <br>
            <strong>Ciudad:</strong> $ciudad <br>
            <strong>Dirección:</strong> $direccion <br>
            <strong>Distancia:</strong> $distancia
        ";

        $mail->send();

        // Redirige al link correspondiente
        header("Location: $link_pago");
        exit();
    } catch (Exception $e) {
        echo "Error al enviar el mensaje: {$mail->ErrorInfo}";
    }
}
?>