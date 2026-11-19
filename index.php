<?php
$tituloPagina = 'Costas Limpias CR - Limpieza y conservación de playas en Costa Rica';
include "header.php";
?>
<main>
    <!-- HERO / PORTADA (full-width edge-to-edge) -->
    <section class="portada" style="margin: 0; padding-left: 0; padding-right: 0;">
        <div class="contenedor">
            <h1>Costas Limpias CR</h1>
            <p>Cada año toneladas de plástico llegan a nuestras playas del Pacífico y el Caribe. Nosotros las limpiamos, pero necesitamos tu ayuda para que no vuelvan a ensuciarse.</p>
            <div class="botones">
                <a href="contacto.php" class="boton boton-primario">Quiero ayudar</a>
                <a href="nosotros.php" class="boton boton-secundario">Conócenos</a>
            </div>
        </div>
    </section>

    <!-- CARRUSEL HISTORIAS DE IMPACTO (full-width edge-to-edge) -->
    <section style="padding: 0; margin: 0;" aria-labelledby="carrusel-titulo">
        <div class="contenedor" style="margin-bottom: 1rem;">
            <h2 id="carrusel-titulo" style="text-align: center; margin-bottom: 0.5rem;">Historias de impacto</h2>
            <p style="text-align: center; max-width: 600px; margin: 0 auto 2rem;">Jornadas reales en playas de Costa Rica donde voluntarios como tú marcaron la diferencia.</p>
        </div>

        <div class="carrusel" role="region" aria-label="Historias de impacto en playas de Costa Rica">
            <!-- Slide 1: Playa Jacó - Recogida masiva -->
            <img class="slide activa" src="img/jaco.jpg" alt="Voluntarios recolectando plástico en Playa Jacó, Puntarenas - 2.3 toneladas" loading="eager">
            <!-- Slide 2: Playa Tamarindo - Tramo adoptado -->
            <img class="slide" src="img/tamarindo.jpg" alt="Grupo de voluntarios limpiando Playa Tamarindo, Guanacaste - 1.5 km adoptados" loading="lazy">
            <!-- Slide 3: Puerto Viejo - Nidos protegidos -->
            <img class="slide" src="img/puerto-viejo.jpg" alt="Protección de nidos de tortuga en Puerto Viejo, Limón - 42 nidos" loading="lazy">
            <!-- Slide 4: Playa Jacó - Detalle de microplásticos -->
            <img class="slide" src="img/jaco.jpg" alt="Detalle de microplásticos recolectados en Playa Jacó por voluntarios" loading="lazy">
            <!-- Slide 5: Playa Tamarindo - Voluntarios en acción -->
            <img class="slide" src="img/tamarindo.jpg" alt="Voluntarios trabajando en equipo en Playa Tamarindo al amanecer" loading="lazy">
            <!-- Slide 6: Puerto Viejo - Crías de tortuga -->
            <img class="slide" src="img/puerto-viejo.jpg" alt="Crías de tortuga baula llegando al mar en Puerto Viejo tras limpieza" loading="lazy">

            <!-- Controles navegación -->
            <div class="carrusel-controles">
                <button id="anterior" type="button" class="carrusel-btn" aria-label="Anterior">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 18l-6-6 6-6"/></svg>
                </button>
                <button id="siguiente" type="button" class="carrusel-btn" aria-label="Siguiente">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 6l6 6-6 6"/></svg>
                </button>
            </div>

            <!-- Indicadores -->
            <div class="carrusel-indicadores" role="tablist" aria-label="Seleccionar historia">
                <button role="tab" class="carrusel-indicador activa" aria-selected="true" aria-label="Historia 1: Playa Jacó - Recogida masiva"></button>
                <button role="tab" class="carrusel-indicador" aria-selected="false" aria-label="Historia 2: Playa Tamarindo - Tramo adoptado"></button>
                <button role="tab" class="carrusel-indicador" aria-selected="false" aria-label="Historia 3: Puerto Viejo - Nidos protegidos"></button>
                <button role="tab" class="carrusel-indicador" aria-selected="false" aria-label="Historia 4: Playa Jacó - Microplásticos"></button>
                <button role="tab" class="carrusel-indicador" aria-selected="false" aria-label="Historia 5: Playa Tamarindo - Equipo voluntarios"></button>
                <button role="tab" class="carrusel-indicador" aria-selected="false" aria-label="Historia 6: Puerto Viejo - Crías tortuga"></button>
            </div>
        </div>
    </section>

    <!-- CTA: POR QUÉ SUMARSE (full-width edge-to-edge) -->
    <section class="seccion-arena" style="padding: 4rem 0; margin: 0;">
        <div class="contenedor">
            <h2 style="text-align: center;">¿Por qué casi nadie conoce nuestro trabajo?</h2>
            <p style="text-align: center; max-width: 600px; margin: 0 auto 2.5rem;">Somos voluntarios locales con alto impacto pero poca visibilidad. No tenemos presupuesto para publicidad; nuestro marketing son las playas limpias.</p>

            <div class="cards cards-estadisticas">
                <article class="stat-card">
                    <img src="img/icono-publicidad.png" alt="Presupuesto publicidad" loading="lazy">
                    <p class="numero">0</p>
                    <p class="label">Presupuesto en publicidad</p>
                </article>
                <article class="stat-card">
                    <img src="img/icono-recursos.png" alt="Recursos a terreno" loading="lazy">
                    <p class="numero">100%</p>
                    <p class="label">Recursos van a terreno</p>
                </article>
                <article class="stat-card">
                    <img src="img/icono-playas-infinitas.png" alt="Playas infinitas" loading="lazy">
                    <p class="numero">∞</p>
                    <p class="label">Playas que necesitan ayuda</p>
                </article>
            </div>

            <div style="text-align: center; margin-top: 2.5rem;">
                <a href="contacto.php" class="boton boton-primario">Quiero sumarme hoy</a>
            </div>
        </div>
    </section>
</main>
<?php include "footer.php"; ?>