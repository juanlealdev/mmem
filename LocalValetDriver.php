<?php

use Valet\Drivers\BasicValetDriver;

/**
 * Driver local para Herd/Valet — SOLO afecta al entorno de desarrollo.
 *
 * Sin este archivo, Valet detecta la carpeta public/ y asume que es el
 * document root (convención de Laravel). Aquí public/ solo contiene assets
 * (fonts, images) y el index.php vive en la raíz, igual que en producción,
 * donde el document root es public_html/.
 *
 * Forzando BasicValetDriver, el sitio se sirve desde la raíz del proyecto y
 * el entorno local replica al servidor.
 *
 * En producción este archivo es inerte: Apache nunca lo carga.
 */
class LocalValetDriver extends BasicValetDriver
{
    public function serves(string $sitePath, string $siteName, string $uri): bool
    {
        return true;
    }
}
