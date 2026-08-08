<?php

/**
 * Carga la configuración SMTP desde un archivo ubicado fuera del document root.
 *
 * El archivo real (config-mail.php) vive un nivel por encima de public_html y
 * nunca se versiona. Ver config-mail.example.php para la estructura esperada.
 */
function cargarConfigMail(): array
{
    $ruta = __DIR__ . '/../config-mail.php';

    if (!is_readable($ruta)) {
        error_log('MMEM: no se encontró config-mail.php en ' . $ruta);
        throw new RuntimeException('Configuración de correo no disponible.');
    }

    $config = require $ruta;

    if (!is_array($config)) {
        error_log('MMEM: config-mail.php no devolvió un array.');
        throw new RuntimeException('Configuración de correo inválida.');
    }

    foreach (['host', 'usuario', 'clave', 'seguridad', 'puerto', 'remitente', 'destinatario'] as $campo) {
        if (empty($config[$campo])) {
            error_log("MMEM: falta el campo '$campo' en config-mail.php");
            throw new RuntimeException('Configuración de correo incompleta.');
        }
    }

    return $config;
}

/**
 * Aplica la configuración SMTP a una instancia de PHPMailer.
 */
function aplicarConfigMail(PHPMailer\PHPMailer\PHPMailer $mail, array $config): void
{
    $mail->isSMTP();
    $mail->Host       = $config['host'];
    $mail->SMTPAuth   = true;
    $mail->Username   = $config['usuario'];
    $mail->Password   = $config['clave'];
    $mail->SMTPSecure = $config['seguridad'];
    $mail->Port       = (int) $config['puerto'];
    $mail->CharSet    = 'UTF-8';
}
