<?php

/**
 * PLANTILLA — copiar como config-mail.php UN NIVEL POR ENCIMA de este proyecto.
 *
 *   Producción:  /home/mediamar/config-mail.php   (fuera de public_html)
 *   Local:       ../config-mail.php               (fuera del repositorio)
 *
 * Este archivo solo contiene placeholders y sí se versiona.
 * El config-mail.php real NUNCA debe subirse a git.
 */

return [
    'host'      => 'mail.ejemplo.com',
    'usuario'   => 'info@ejemplo.com',
    'clave'     => 'REEMPLAZAR',
    'seguridad' => 'ssl',
    'puerto'    => 465,

    // Remitente que aparece en el correo.
    'remitente' => [
        'correo' => 'info@ejemplo.com',
        'nombre' => 'MMEM',
    ],

    // Buzón que recibe los formularios.
    'destinatario' => 'destino@ejemplo.com',
];
