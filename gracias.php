<?php
$tituloPagina = '¡Gracias por sumarte! - Costas Limpias CR';
$nombre      = isset($_GET['nombre']) ? htmlspecialchars($_GET['nombre'], ENT_QUOTES, 'UTF-8') : 'Amigo/a';
$tipo_ayuda  = isset($_GET['tipo_ayuda']) ? htmlspecialchars($_GET['tipo_ayuda'], ENT_QUOTES, 'UTF-8') : 'ayudar';
include "header.php";
?>
<main>
    <section class="contenedor">
        <div class="confirmacion">
            <img src="img/icono-exito.svg" alt="¡Éxito!" loading="lazy" aria-hidden="true">
            <h1>¡Gracias, <strong><?= $nombre ?></strong>!</h1>
            <p>Tu solicitud para <strong><?= $tipo_ayuda ?></strong> ha sido recibida correctamente. En menos de 48 horas te contactaremos por WhatsApp o correo para coordinar los detalles.</p>

            <div class="detalles">
                <h4>¿Qué sigue ahora?</h4>
                <p><strong>1. Confirmación:</strong> Revisa tu correo (también carpeta spam) para confirmar tus datos.</p>
                <p><strong>2. Contacto:</strong> Nuestro coordinador de zona te escribirá por WhatsApp para agendar tu primera jornada.</p>
                <p><strong>3. Bienvenida:</strong> Recibirás guía rápida con qué llevar, punto de encuentro y coordinador asignado.</p>
                <p><strong>4. ¡A la playa!</strong> Tu primera limpieza será el sábado próximo disponible.</p>
            </div>

            <a href="index.php" class="boton">Volver al inicio</a>

            <p class="info-contacto">¿Dudas? Escríbenos a <a href="mailto:info@costaslimpiascr.org" style="color: var(--color-turquesa);">info@costaslimpiascr.org</a> o <a href="https://wa.me/50688887777" target="_blank" rel="noopener" style="color: var(--color-turquesa);">WhatsApp +506 8888-7777</a></p>
        </div>
    </section>
</main>
<?php include "footer.php"; ?>