<?php
// Solo procesa POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: contacto.php');
    exit;
}

$nombre      = trim($_POST['nombre'] ?? '');
$correo      = trim($_POST['correo'] ?? '');
$telefono    = trim($_POST['telefono'] ?? '');
$tipo_ayuda  = trim($_POST['tipo_ayuda'] ?? '');
$motivo      = trim($_POST['motivo'] ?? '');
$privacidad  = isset($_POST['privacidad']);

$errores = [];

if ($nombre === '') $errores['nombre'] = 'El nombre es obligatorio.';
if ($correo === '' || !filter_var($correo, FILTER_VALIDATE_EMAIL)) $errores['correo'] = 'Correo inválido.';
if ($telefono === '' || !preg_match('/^\d{8}$/', $telefono)) $errores['telefono'] = 'Teléfono: 8 dígitos numéricos.';
$opciones = ['Voluntariado en playa','Adopción de tramo de playa','Donación de insumos o fondos','Logística y transporte','Educación ambiental en escuelas','Patrocinio corporativo'];
if ($tipo_ayuda === '' || !in_array($tipo_ayuda, $opciones, true)) $errores['tipo_ayuda'] = 'Selecciona una opción válida.';
if ($motivo === '' || mb_strlen($motivo, 'UTF-8') < 20) $errores['motivo'] = 'Mínimo 20 caracteres (actual: '.mb_strlen($motivo, 'UTF-8').').';
if (!$privacidad) $errores['privacidad'] = 'Debes aceptar la política de privacidad.';

if ($errores) {
    $qs = http_build_query(['errores' => $errores]) . '&' . http_build_query([
        'nombre' => $nombre, 'correo' => $correo, 'telefono' => $telefono,
        'tipo_ayuda' => $tipo_ayuda, 'motivo' => $motivo
    ]);
    header('Location: contacto.php?' . $qs);
    exit;
}

// Éxito → redirige a gracias.php con datos sanitizados
header('Location: gracias.php?nombre=' . urlencode(htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8')) . '&tipo_ayuda=' . urlencode(htmlspecialchars($tipo_ayuda, ENT_QUOTES, 'UTF-8')));
exit;