<?php
$tituloPagina = 'Cómo ayudar - Costas Limpias CR';
include "header.php";
?>
<main>
    <section class="contenedor">
        <h1 style="text-align: center;">Formas de sumarse</h1>
        <p style="text-align: center; max-width: 700px; margin: 0 auto 2rem;">No hace falta ser biólogo ni vivir en la costa. Hay una forma de ayudar que encaja con tu tiempo, tus recursos y tu realidad. Elige la tuya.</p>

        <!-- Contenedor dinámico - se llena desde js/main.js -->
        <div class="cards" id="contenedor-ayuda"></div>

        <noscript>
            <div style="text-align: center; padding: 2rem; color: var(--color-texto-claro);">
                <p>Para ver las opciones de ayuda, habilita JavaScript en tu navegador.</p>
                <a href="contacto.php" class="boton" style="margin-top: 1rem;">Contactar directamente</a>
            </div>
        </noscript>
    </section>

    <!-- IMPACTO DE CADA ACCIÓN -->
    <section class="contenedor" style="background: var(--color-arena); border-radius: 12px; margin: 3rem auto; padding: 3rem 1rem;">
        <h2 style="text-align: center;">¿Qué logra tu apoyo?</h2>
        <p style="text-align: center; max-width: 600px; margin: 0 auto 2rem;">Transparencia total: así se traduce cada forma de ayuda en impacto real.</p>

        <div class="cards" style="max-width: 1000px; margin: 0 auto;">
            <article class="tarjeta">
                <img src="img/impacto-voluntariado.jpg" alt="Impacto voluntariado" loading="lazy">
                <div class="tarjeta-contenido">
                    <h3>1 jornada de voluntariado</h3>
                    <p>= ~15 kg residuos retirados + 200 m² playa limpia + datos ciencia ciudadana</p>
                </div>
            </article>
            <article class="tarjeta">
                <img src="img/impacto-adopcion.jpg" alt="Impacto adopción" loading="lazy">
                <div class="tarjeta-contenido">
                    <h3>1 tramo adoptado (1 km/año)</h3>
                    <p>= 12 limpiezas programadas + monitoreo continuo + reducción 70-80% residuos</p>
                </div>
            </article>
            <article class="tarjeta">
                <img src="img/impacto-insumos.jpg" alt="Impacto insumos" loading="lazy">
                <div class="tarjeta-contenido">
                    <h3>1 kit de insumos</h3>
                    <p>= Equipa 10 voluntarios = ~150 kg capacidad de recolección</p>
                </div>
            </article>
            <article class="tarjeta">
                <img src="img/impacto-educacion.jpg" alt="Impacto educación" loading="lazy">
                <div class="tarjeta-contenido">
                    <h3>1 charla en escuela</h3>
                    <p>= 30-50 niños educados + familias impactadas + futuros guardianes</p>
                </div>
            </article>
        </div>

        <div style="text-align: center; margin-top: 2rem;">
            <a href="contacto.php" class="boton">Elige tu forma de ayudar</a>
        </div>
    </section>
</main>
<?php include "footer.php"; ?>