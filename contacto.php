<?php
$tituloPagina = 'Contacto y voluntariado - Costas Limpias CR';

// Capturar errores y valores previos desde enviar.php
$errores = [];
if (isset($_GET['errores'])) parse_str($_GET['errores'], $errores);
$valores = [
    'nombre' => $_GET['nombre'] ?? '',
    'correo' => $_GET['correo'] ?? '',
    'telefono' => $_GET['telefono'] ?? '',
    'tipo_ayuda' => $_GET['tipo_ayuda'] ?? '',
    'motivo' => $_GET['motivo'] ?? '',
];
include "header.php";
?>
<main>
    <section class="contenedor">
        <h1 style="text-align: center;">Quiero ayudar</h1>
        <p style="text-align: center; max-width: 600px; margin: 0 auto 2rem;">Completa el formulario y te contactaremos en menos de 48 horas para coordinar tu participación.</p>

        <form class="formulario" action="enviar.php" method="POST" novalidate>
            <div class="form-grupo">
                <label for="nombre">Nombre completo <span class="requerido">*</span></label>
                <input type="text" id="nombre" name="nombre" value="<?= htmlspecialchars($valores['nombre']) ?>" placeholder="Tu nombre y apellidos" required autocomplete="name" aria-describedby="nombre-error">
                <span id="nombre-error" class="error-msg"></span>
            </div>

            <div class="form-grupo">
                <label for="correo">Correo electrónico <span class="requerido">*</span></label>
                <input type="email" id="correo" name="correo" value="<?= htmlspecialchars($valores['correo']) ?>" placeholder="tu@email.com" required autocomplete="email" aria-describedby="correo-error">
                <span id="correo-error" class="error-msg"></span>
            </div>

            <div class="form-grupo">
                <label for="telefono">Teléfono (8 dígitos) <span class="requerido">*</span></label>
                <input type="tel" id="telefono" name="telefono" value="<?= htmlspecialchars($valores['telefono']) ?>" placeholder="88887777" pattern="[0-9]{8}" maxlength="8" required autocomplete="tel" aria-describedby="telefono-error telefono-ayuda">
                <span id="telefono-ayuda" class="ayuda">Formato: 8 dígitos sin guiones ni espacios (ej. 88887777)</span>
                <span id="telefono-error" class="error-msg"></span>
            </div>

            <div class="form-grupo">
                <label for="tipo_ayuda">¿Cómo te gustaría ayudar? <span class="requerido">*</span></label>
                <select id="tipo_ayuda" name="tipo_ayuda" required aria-describedby="tipo_ayuda-error">
                    <option value="">Selecciona una opción</option>
                    <option value="Voluntariado en playa" <?= $valores['tipo_ayuda']==='Voluntariado en playa'?'selected':'' ?>>Voluntariado en playa (jornadas sabatinas)</option>
                    <option value="Adopción de tramo de playa" <?= $valores['tipo_ayuda']==='Adopción de tramo de playa'?'selected':'' ?>>Adopción de tramo de playa (empresa/grupo)</option>
                    <option value="Donación de insumos o fondos" <?= $valores['tipo_ayuda']==='Donación de insumos o fondos'?'selected':'' ?>>Donación de insumos o fondos</option>
                    <option value="Logística y transporte" <?= $valores['tipo_ayuda']==='Logística y transporte'?'selected':'' ?>>Logística y transporte de residuos</option>
                    <option value="Educación ambiental en escuelas" <?= $valores['tipo_ayuda']==='Educación ambiental en escuelas'?'selected':'' ?>>Educación ambiental en escuelas costeras</option>
                    <option value="Patrocinio corporativo" <?= $valores['tipo_ayuda']==='Patrocinio corporativo'?'selected':'' ?>>Patrocinio corporativo</option>
                </select>
                <span id="tipo_ayuda-error" class="error-msg"></span>
            </div>

            <div class="form-grupo">
                <label for="motivo">Disponibilidad, motivos o comentarios <span class="requerido">*</span></label>
                <textarea id="motivo" name="motivo" rows="5" placeholder="Cuéntanos tu disponibilidad (días, horarios), por qué te interesa, experiencia previa o cualquier duda..." required minlength="20" aria-describedby="motivo-error motivo-contador"><?= htmlspecialchars($valores['motivo']) ?></textarea>
                <span id="motivo-contador" class="contador"><span id="motivo-longitud"><?= mb_strlen($valores['motivo']) ?></span> / 20 caracteres mínimo</span>
                <span id="motivo-error" class="error-msg"></span>
            </div>

            <div class="form-grupo">
                <label class="check-label" for="privacidad">
                    <input type="checkbox" id="privacidad" name="privacidad" required aria-describedby="privacidad-error">
                    <span class="check-indicador" aria-hidden="true"><img src="img/icono-check.svg" alt="" width="16" height="16" loading="lazy"></span>
                    <span class="check-texto">Acepto la <a href="#" target="_blank" rel="noopener">política de privacidad</a> y autorizo el tratamiento de mis datos para contactarme sobre voluntariado.</span>
                </label>
                <span id="privacidad-error" class="error-msg"></span>
            </div>

            <div class="form-acciones">
                <button type="submit" class="boton boton-primario" id="btn-enviar">
                    <span class="btn-texto">Enviar solicitud</span>
                    <span class="btn-cargando" style="display:none;" aria-hidden="true">
                        <svg class="spinner" viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10" stroke-opacity="0.25"/>
                            <path d="M12 2a10 10 0 0 1 10 10" stroke-opacity="1" stroke-linecap="round">
                                <animateTransform attributeName="transform" type="rotate" dur="1s" from="0 12 12" to="360 12 12" repeatCount="indefinite"/>
                            </path>
                        </svg>
                        Enviando...
                    </span>
                </button>
                <a href="index.php" class="boton secundario">Volver al inicio</a>
            </div>

            <div id="formulario-exito" class="form-exito" role="alert" hidden><strong>¡Gracias!</strong> Tu solicitud ha sido enviada. Te contactaremos pronto.</div>
        </form>
    </section>

    <!-- ACORDEÓN FAQ -->
    <section class="contenedor" style="background: var(--color-arena); border-radius: 12px; margin: 3rem auto; padding: 3rem 1rem;">
        <h2 style="text-align: center;">Preguntas frecuentes</h2>
        <p style="text-align: center; max-width: 600px; margin: 0 auto 2rem;">Resolvemos tus dudas antes de que te animes a participar.</p>

        <div class="accordion" style="max-width: 800px; margin: 0 auto;">
            <div class="item">
                <button class="titulo" aria-expanded="false">¿Qué requisitos necesito para ser voluntario?<img src="img/icono-chevron-abajo.svg" alt="" class="icono" width="24" height="24" loading="lazy"></button>
                <div class="contenido">
                    <p><strong>Ningún requisito especial.</strong> Solo ganas de ayudar y respeto por el entorno.</p>
                    <ul style="margin: 0.5rem 0 0 1.5rem; color: var(--color-texto-claro);">
                        <li>Mayores de 12 años (menores con adulto responsable)</li>
                        <li>Condición física básica para caminar en arena y agacharse</li>
                        <li>Calzado cerrado (botas o tenis) y ropa cómoda</li>
                        <li>Protector solar, gorra y botella de agua reutilizable</li>
                    </ul>
                    <p style="margin-top: 0.5rem;">Proveemos guantes, sacos, bolsas de separación y capacitación en sitio.</p>
                </div>
            </div>

            <div class="item">
                <button class="titulo" aria-expanded="false">¿Cuáles son los horarios y puntos de encuentro?<img src="img/icono-chevron-abajo.svg" alt="" class="icono" width="24" height="24" loading="lazy"></button>
                <div class="contenido">
                    <p><strong>Jornadas habituales:</strong> Sábados 7:00–11:00 AM (evita sol fuerte y marea alta).</p>
                    <p style="margin-top: 0.5rem;"><strong>Puntos principales:</strong></p>
                    <ul style="margin: 0.5rem 0 0 1.5rem; color: var(--color-texto-claro);">
                        <li><strong>Pacífico Central:</strong> Playa Jacó (parqueo principal), Playa Hermosa (entrada sur)</li>
                        <li><strong>Guanacaste:</strong> Playa Tamarindo (frente a parque), Playa Grande (estación MINAE)</li>
                        <li><strong>Caribe:</strong> Puerto Viejo (oficina ASADA), Cahuita (entrada parque nacional)</li>
                    </ul>
                    <p style="margin-top: 0.5rem;">Al inscribirte recibes WhatsApp con ubicación exacta, coordinador y clima 24h antes.</p>
                </div>
            </div>

            <div class="item">
                <button class="titulo" aria-expanded="false">¿Cómo se usan y transparentan las donaciones?<img src="img/icono-chevron-abajo.svg" alt="" class="icono" width="24" height="24" loading="lazy"></button>
                <div class="contenido">
                    <p><strong>100% de donaciones van a terreno.</strong> Ningún peso paga sueldos, oficina ni publicidad.</p>
                    <p style="margin-top: 0.5rem;"><strong>Desglose típico:</strong></p>
                    <ul style="margin: 0.5rem 0 0 1.5rem; color: var(--color-texto-claro);">
                        <li>Insumos (sacos, guantes, bolsas separación): ~45%</li>
                        <li>Logística (transporte, combustible): ~30%</li>
                        <li>Equipo seguridad (botas, chalecos, botiquines): ~15%</li>
                        <li>Material educativo (cartillas, señalética, talleres): ~10%</li>
                    </ul>
                    <p style="margin-top: 0.5rem;">Publicamos reportes trimestrales con facturas en web y redes. Cada donante recibe certificado.</p>
                </div>
            </div>

            <div class="item">
                <button class="titulo" aria-expanded="false">¿Qué debo llevar a una jornada?<img src="img/icono-chevron-abajo.svg" alt="" class="icono" width="24" height="24" loading="lazy"></button>
                <div class="contenido">
                    <p><strong>Imprescindible (tu responsabilidad):</strong></p>
                    <ul style="margin: 0.5rem 0 0.5rem 1.5rem; color: var(--color-texto-claro); columns: 2; column-gap: 2rem;">
                        <li>Calzado cerrado (obligatorio)</li>
                        <li>Ropa cómoda que se pueda ensuciar</li>
                        <li>Protector solar (reef-safe preferible)</li>
                        <li>Gorra o sombrero</li>
                        <li>Botella de agua (mínimo 1.5 L)</li>
                        <li>Repelente de insectos</li>
                    </ul>
                    <p><strong>Proveemos nosotros:</strong></p>
                    <ul style="margin: 0.5rem 0 0 1.5rem; color: var(--color-texto-claro); columns: 2; column-gap: 2rem;">
                        <li>Guantes reforzados</li>
                        <li>Sacos y bolsas de separación</li>
                        <li>Pinzas recolectoras</li>
                        <li>Chaleco reflectivo</li>
                        <li>Botiquín básico</li>
                        <li>Frutas e hidratación al cierre</li>
                    </ul>
                    <p style="margin-top: 0.5rem; font-weight: 500; color: var(--color-bosque);">¡Solo trae tu energía y ganas de dejar la playa mejor!</p>
                </div>
            </div>

            <div class="item">
                <button class="titulo" aria-expanded="false">¿Pueden participar empresas o grupos?<img src="img/icono-chevron-abajo.svg" alt="" class="icono" width="24" height="24" loading="lazy"></button>
                <div class="contenido">
                    <p><strong>¡Sí! Es una de las formas de mayor impacto.</strong></p>
                    <ul style="margin: 0.5rem 0 0 1.5rem; color: var(--color-texto-claro);">
                        <li><strong>Jornadas corporativas:</strong> Diseñamos jornada a medida (medio día, día completo, fin de semana)</li>
                        <li><strong>Adopción de tramo:</strong> 1 km monitoreado 12 meses con logo en señalética</li>
                        <li><strong>RSE medible:</strong> Informe de impacto con kg, voluntarios, playas, fotos georreferenciadas</li>
                        <li><strong>Equipos mixtos:</strong> Empleados + comunidad local = integración real</li>
                    </ul>
                    <p style="margin-top: 0.5rem;">Contacta en <a href="mailto:empresas@costaslimpiascr.org" style="color: var(--color-turquesa);">empresas@costaslimpiascr.org</a> para propuesta personalizada.</p>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include "footer.php"; ?>