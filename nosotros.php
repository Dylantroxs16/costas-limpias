<?php
$tituloPagina = 'Nosotros - Costas Limpias CR';
include "header.php";
?>
<main>
    <!-- HISTORIA Y MISIÓN -->
    <section class="contenedor">
        <h1 style="text-align: center;">Nuestra historia</h1>
        <p style="text-align: center; max-width: 700px; margin: 0 auto 2rem;">Cómo nació Costas Limpias CR: un grupo pequeño de voluntarios locales con poca visibilidad pero alto impacto.</p>

        <div style="display: grid; gap: 2rem; margin-top: 2rem;">
            <article>
                <h2>El inicio: 2019, Playa Hermosa</h2>
                <p>Todo comenzó cuando <strong>María González</strong>, bióloga marina de Puntarenas, y <strong>Carlos Ruiz</strong>, pescador artesanal de Guanacaste, se encontraron limpiando la misma playa por separado. Cada uno con su saco, cada uno en silencio, cada uno pensando que era el único que le importaba.</p>
                <p>Se unieron. Invitaron a tres amigos. Luego a cinco. En seis meses eran cincuenta. Sin página web, sin redes sociales, sin presupuesto. Solo la convicción de que <em>"si no lo hacemos nosotros, nadie lo hará"</em>.</p>
                <p>Hoy seguimos siendo esencialmente lo mismo: <strong>voluntarios locales</strong> que conocen cada rincón de sus playas, que saben cuándo llegan las corrientes que traen basura, que conocen a los guardaparques por nombre. Lo que cambió es la escala del impacto.</p>
            </article>

            <aside style="background: var(--color-arena); padding: 2rem; border-radius: 12px; border-left: 4px solid var(--color-turquesa);">
                <h3>Nuestra misión</h3>
                <p style="font-weight: 500;"><strong>Limpiar y conservar las playas de Costa Rica</strong> mediante acción comunitaria, educación ambiental y alianzas locales, para que las generaciones futuras hereden costas vivas.</p>
                <ul style="list-style: none; padding: 0; display: flex; flex-direction: column; gap: 0.75rem;">
                    <li style="display: flex; align-items: center; gap: 0.75rem;"><img src="img/icono-check.svg" alt="" width="20" height="20" loading="lazy"> Acción directa: limpiezas semanales en playas prioritarias</li>
                    <li style="display: flex; align-items: center; gap: 0.75rem;"><img src="img/icono-check.svg" alt="" width="20" height="20" loading="lazy"> Educación: talleres en escuelas costeras y comunidades</li>
                    <li style="display: flex; align-items: center; gap: 0.75rem;"><img src="img/icono-check.svg" alt="" width="20" height="20" loading="lazy"> Incidencia: datos abiertos para políticas públicas costeras</li>
                    <li style="display: flex; align-items: center; gap: 0.75rem;"><img src="img/icono-check.svg" alt="" width="20" height="20" loading="lazy"> Custodia: adopción y monitoreo de tramos de playa</li>
                </ul>
            </aside>
        </div>
    </section>

    <!-- LOGROS EN NÚMEROS -->
    <section class="contenedor" style="background: var(--color-arena); border-radius: 12px; margin: 3rem auto; padding: 3rem 1rem;">
        <h2 style="text-align: center;">Logros medibles (2019–2024)</h2>
        <p style="text-align: center; max-width: 600px; margin: 0 auto 2rem;">Números reales de nuestro trabajo en ambas costas. Cada dato representa horas de voluntarios, playas recuperadas y vida marina protegida.</p>

        <div class="cards cards-estadisticas" style="max-width: 1100px; margin: 0 auto;">
            <article class="stat-card">
                <img src="img/icono-toneladas.png" alt="Toneladas de plástico" loading="lazy">
                <p class="numero">127.5</p>
                <p class="label">Toneladas de plástico recolectadas</p>
            </article>
            <article class="stat-card">
                <img src="img/icono-voluntarios.png" alt="Voluntarios" loading="lazy">
                <p class="numero">3,842</p>
                <p class="label">Voluntarios movilizados</p>
            </article>
            <article class="stat-card">
                <img src="img/icono-playas.png" alt="Playas intervenidas" loading="lazy">
                <p class="numero">47</p>
                <p class="label">Playas intervenidas (Pacífico + Caribe)</p>
            </article>
            <article class="stat-card">
                <img src="img/icono-tortugas.png" alt="Nidos de tortuga" loading="lazy">
                <p class="numero">1,240</p>
                <p class="label">Nidos de tortuga protegidos</p>
            </article>
            <article class="stat-card">
                <img src="img/icono-crias.png" alt="Crías de tortuga" loading="lazy">
                <p class="numero">112,000+</p>
                <p class="label">Crías llegadas al mar seguras</p>
            </article>
            <article class="stat-card">
                <img src="img/icono-jornadas.png" alt="Jornadas de limpieza" loading="lazy">
                <p class="numero">318</p>
                <p class="label">Jornadas de limpieza realizadas</p>
            </article>
        </div>
    </section>

    <!-- EQUIPO -->
    <section class="contenedor">
        <h2 style="text-align: center; margin-top: 3rem;">El equipo detrás de cada limpieza</h2>
        <p style="text-align: center; max-width: 600px; margin: 0 auto 2rem;">No tenemos oficina, ni sueldos, ni estructura corporativa. Solo personas que aman sus playas.</p>

        <div class="cards" style="margin-top: 2rem;">
            <article class="equipo-card">
                <img src="img/equipo-maria.jpg" alt="María González - Bióloga marina" loading="lazy">
                <h3>María González</h3>
                <p class="rol">Bióloga marina • Fundadora • Coordina Pacífico Central</p>
                <p class="frase">"El mar no tiene voz, nosotros somos su voz"</p>
            </article>

            <article class="equipo-card">
                <img src="img/equipo-carlos.jpg" alt="Carlos Ruiz - Pescador artesanal" loading="lazy">
                <h3>Carlos Ruiz</h3>
                <p class="rol">Pescador artesanal • Fundador • Coordina Guanacaste</p>
                <p class="frase">"Mi vida es el mar, mi deber cuidarlo"</p>
            </article>

            <article class="equipo-card">
                <img src="img/equipo-ana.jpg" alt="Ana López - Educadora ambiental" loading="lazy">
                <h3>Ana López</h3>
                <p class="rol">Educadora ambiental • Coordina Limón y Caribe</p>
                <p class="frase">"Enseñar a cuidar es sembrar futuro"</p>
            </article>

            <article class="equipo-card">
                <img src="img/equipo-voluntarios.jpg" alt="+3,800 Voluntarios" loading="lazy">
                <h3>+3,800 Voluntarios</h3>
                <p class="rol">Estudiantes, familias, empresas, turistas, locales</p>
                <p class="frase">"Tú también puedes ser parte"</p>
            </article>
        </div>

        <div style="text-align: center; margin-top: 2rem;">
            <a href="contacto.php" class="boton">Quiero ser voluntario</a>
        </div>
    </section>
</main>
<?php include "footer.php"; ?>