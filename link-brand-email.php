<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

/**
 * Determina si la solicitud espera una respuesta JSON (fetch/AJAX).
 */
function isJsonRequest(): bool
{
    $isAjax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
        strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';

    $acceptsJson = isset($_SERVER['HTTP_ACCEPT']) &&
        stripos($_SERVER['HTTP_ACCEPT'], 'application/json') !== false;

    return $isAjax || $acceptsJson;
}

/**
 * Redirige al home con un mensaje contextual para la sección Vincula tu marca.
 */
function redirectBrandFeedback(string $status, string $message): void
{
    $status = $status === 'success' ? 'success' : 'error';
    $query = http_build_query([
        'brand_status' => $status,
        'brand_message' => $message,
    ]);
    header('Location: index.php?' . $query . '#link-your-brand-section');
    exit();
}

/**
 * Envía la respuesta acorde al tipo de solicitud (JSON o redirect).
 */
function respondBrandFeedback(string $status, string $message): void
{
    $status = $status === 'success' ? 'success' : 'error';

    if (isJsonRequest()) {
        header('Content-Type: application/json; charset=UTF-8');
        echo json_encode(
            ['status' => $status, 'message' => $message],
            JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES
        );
        exit();
    }

    redirectBrandFeedback($status, $message);
}

/**
 * Limpia un string recibido del formulario.
 */
function cleanInput(?string $value): string
{
    return trim($value ?? '');
}

function isValidName(string $nombre): bool
{
    return (bool) preg_match("/^[A-Za-zÀ-ÿ'\\s]{3,80}$/u", $nombre);
}

function isValidPhone(string $telefono): bool
{
    return (bool) preg_match('/^[0-9+()\-\s]{7,20}$/', $telefono);
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    respondBrandFeedback('error', 'Método no permitido.');
}

$nombre = cleanInput($_POST['nombre'] ?? '');
$telefono = cleanInput($_POST['telefono'] ?? '');
$correo = cleanInput($_POST['correo'] ?? '');

if ($nombre === '' || $telefono === '' || $correo === '') {
    respondBrandFeedback('error', 'Por favor completa todos los campos antes de enviar.');
}

if (!isValidName($nombre)) {
    respondBrandFeedback('error', 'Ingresa un nombre válido (solo letras y espacios).');
}

if (!isValidPhone($telefono)) {
    respondBrandFeedback('error', 'Ingresa un teléfono válido (7 a 20 caracteres numéricos).');
}

if (!filter_var($correo, FILTER_VALIDATE_EMAIL) || strlen($correo) > 120) {
    respondBrandFeedback('error', 'Ingresa un correo electrónico válido.');
}

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'mail.mediamaratonentremontanas.com.co';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'info@mediamaratonentremontanas.com.co';
    $mail->Password   = 'Z}RGi1v%~I,=n%7,';
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;

    $mail->CharSet = 'UTF-8';
    $mail->setFrom('info@mediamaratonentremontanas.com.co', 'MMEM');
    $mail->addAddress('mmentremontanas@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'MMEM - Solicitud de vinculación de marca';
    $mail->Body    = "
        <p>Hola, se ha realizado una nueva solicitud de vinculación de marca a la Media Maratón Entre Montañas Salento.</p>
        <strong>Nombre:</strong> " . htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8') . " <br>
        <strong>Teléfono:</strong> " . htmlspecialchars($telefono, ENT_QUOTES, 'UTF-8') . " <br>
        <strong>Correo Electrónico:</strong> " . htmlspecialchars($correo, ENT_QUOTES, 'UTF-8') . " <br>
    ";

    $response = $mail->send();

    if ($response) {
        respondBrandFeedback('success', '¡Gracias! Recibimos tus datos y te contactaremos muy pronto.');
    }

    respondBrandFeedback('error', 'No pudimos enviar tu solicitud. Inténtalo nuevamente en unos minutos.');
} catch (Exception $e) {
    respondBrandFeedback('error', 'Ocurrió un error al enviar tu solicitud. Escríbenos a info@mediamaratonentremontanas.com.co.');
}
?>