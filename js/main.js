/* ==========================================================================
   MAIN.JS - JavaScript vanilla para Costas Limpias CR
   Funcionalidades:
   1. Menú hamburguesa (mobile)
   2. Carrusel simple (estilo referencia)
   3. Cards dinámicas (servicios.php)
   4. Acordeón FAQ (contacto.php)
   5. Validación formulario (contacto.php)
   ========================================================================== */

// ============================================================================
// UTILIDADES COMUNES
// ============================================================================
const $ = (sel, ctx = document) => ctx.querySelector(sel);
const $$ = (sel, ctx = document) => ctx.querySelectorAll(sel);

// ============================================================================
// 1. MENÚ HAMBURGUESA (MOBILE)
// ============================================================================
function initNavbar() {
    const btnMenu = $("#btnMenu");
    const menu = $(".menu");

    if (!btnMenu || !menu) return;

    btnMenu.addEventListener("click", () => {
        menu.classList.toggle("abierto");
        btnMenu.classList.toggle("activo");
    });

    // Cerrar menú al click en enlace
    $$(".menu a", menu).forEach(enlace => {
        enlace.addEventListener("click", () => {
            menu.classList.remove("abierto");
            btnMenu.classList.remove("activo");
        });
    });

    // Cerrar menú al redimensionar a desktop
    window.addEventListener("resize", () => {
        if (window.innerWidth >= 992 && menu.classList.contains("abierto")) {
            menu.classList.remove("abierto");
            btnMenu.classList.remove("activo");
        }
    });
}

// ============================================================================
// 2. CARRUSEL SIMPLE (estilo referencia)
// ============================================================================
function initCarrusel() {
    const carrusel = $(".carrusel");
    if (!carrusel) return; // Solo en index.php

    const slides = $$(".slide", carrusel);
    const btnPrev = $("#anterior", carrusel);
    const btnNext = $("#siguiente", carrusel);
    const indicadores = $$(".carrusel-indicador", carrusel);

    if (slides.length === 0) return;

    let actual = 0;
    const total = slides.length;
    let autoPlay = null;

    // Mostrar slide indicado
    function mostrar(i) {
        slides.forEach(s => s.classList.remove("activa"));
        slides[i].classList.add("activa");

        // Actualizar indicadores
        indicadores.forEach((ind, idx) => {
            ind.classList.toggle("activa", idx === i);
            ind.setAttribute("aria-selected", idx === i);
        });
    }

    // Siguiente / Anterior
    function siguiente() {
        actual = (actual + 1) % total;
        mostrar(actual);
    }
    function anterior() {
        actual = (actual - 1 + total) % total;
        mostrar(actual);
    }

    // Auto-play cada 5 segundos
    function iniciarAutoPlay() {
        autoPlay = setInterval(siguiente, 5000);
    }
    function detenerAutoPlay() {
        clearInterval(autoPlay);
        autoPlay = null;
    }
    function reiniciarAutoPlay() {
        detenerAutoPlay();
        iniciarAutoPlay();
    }

    // Event listeners botones
    if (btnNext) btnNext.addEventListener("click", () => { siguiente(); reiniciarAutoPlay(); });
    if (btnPrev) btnPrev.addEventListener("click", () => { anterior(); reiniciarAutoPlay(); });

    // Indicadores clicables
    indicadores.forEach((ind, i) => {
        ind.addEventListener("click", () => { mostrar(i); reiniciarAutoPlay(); });
    });

    // Pausar auto-play en hover/focus
    carrusel.addEventListener("mouseenter", detenerAutoPlay);
    carrusel.addEventListener("mouseleave", iniciarAutoPlay);
    carrusel.addEventListener("focusin", detenerAutoPlay);
    carrusel.addEventListener("focusout", iniciarAutoPlay);

    // Teclado
    carrusel.addEventListener("keydown", e => {
        if (e.key === "ArrowLeft") { anterior(); reiniciarAutoPlay(); }
        if (e.key === "ArrowRight") { siguiente(); reiniciarAutoPlay(); }
    });

    // Inicializar
    mostrar(0);
    iniciarAutoPlay();
}

// ============================================================================
// 3. CARDS DINÁMICAS (servicios.php)
// ============================================================================
function initCardsAyuda() {
    const contenedor = $("#contenedor-ayuda");
    if (!contenedor) return; // Solo en servicios.php

    const formasAyuda = [
        {
            titulo: "Voluntariado sabatino",
            descripcion: "Únete a limpiezas semanales los sábados 7-11 AM. Sin experiencia previa, solo ganas de ayudar.",
            modalidad: "Presencial • Sábados 7-11 AM • Pacífico y Caribe",
            impacto: "~15 kg residuos/jornada • 200 m² playa limpia",
            img: "img/impacto-voluntariado.jpg"
        },
        {
            titulo: "Adopción de tramo de playa",
            descripcion: "Tu empresa o grupo adopta 1 km de playa por 1 año. 12 limpiezas + monitoreo + señalética con tu logo.",
            modalidad: "Compromiso anual • 12 jornadas • Señalética inclusiva",
            impacto: "Reducción 70-80% residuos • Custodia continua",
            img: "img/impacto-adopcion.jpg"
        },
        {
            titulo: "Donación de insumos",
            descripcion: "Provee sacos biodegradables, guantes reforzados, bolsas de separación, pinzas, chalecos, botiquines.",
            modalidad: "Donación única o recurrente • Entrega en bodega o envío",
            impacto: "1 kit = equipa 10 voluntarios • ~150 kg capacidad",
            img: "img/impacto-insumos.jpg"
        },
        {
            titulo: "Logística y transporte",
            descripcion: "Facilita vehículos, combustible o conductores para llevar residuos a centros de acopio autorizados.",
            modalidad: "Vehículo propio o patrocinio combustible • Rutas programadas",
            impacto: "Evita vertederos ilegales • Trazabilidad • Economía circular",
            img: "img/impacto-logistica.jpg"
        },
        {
            titulo: "Educación ambiental",
            descripcion: "Patrocina talleres en escuelas costeras: limpieza simulada, charlas de biólogos, kits didácticos.",
            modalidad: "1-2 días por escuela • Grados 4-6 • Material incluido",
            impacto: "30-50 niños/jornada • Familias impactadas • Guardianes futuros",
            img: "img/impacto-educacion.jpg"
        },
        {
            titulo: "Patrocinio corporativo",
            descripcion: "Alianza anual: jornadas corporativas, adopción de tramo, reportes RSE, visibilidad en redes y playas.",
            modalidad: "Convenio 12 meses • KPIs definidos • Informe trimestral",
            impacto: "Impacto medible + reputación + equipo cohesionado",
            img: "img/impacto-patrocinio.jpg"
        }
    ];

    function pintarCardsAyuda(lista) {
        contenedor.innerHTML = "";
        lista.forEach(item => {
            const article = document.createElement("article");
            article.classList.add("tarjeta");
            article.innerHTML = `
                <img src="${item.img}" alt="${item.titulo}" loading="lazy">
                <div class="tarjeta-contenido">
                    <h3>${item.titulo}</h3>
                    <p>${item.descripcion}</p>
                    <div style="margin-top: 1rem; padding-top: 1rem; border-top: 1px solid #e2e8f0;">
                        <p style="font-size: 0.85rem; color: var(--color-texto-claro); margin-bottom: 0.25rem;"><strong>Modalidad:</strong> ${item.modalidad}</p>
                        <p style="font-size: 0.85rem; color: var(--color-verde-costa); font-weight: 600;"><strong>Impacto:</strong> ${item.impacto}</p>
                    </div>
                    <a href="contacto.php?tipo=${encodeURIComponent(item.titulo)}" class="boton boton-primario" style="align-self: flex-start;">Sumarme a esta acción</a>
                </div>
            `;
            contenedor.appendChild(article);
        });
    }

    pintarCardsAyuda(formasAyuda);
}

// ============================================================================
// 4. ACORDEÓN FAQ (contacto.php)
// ============================================================================
function initAcordeon() {
    const titulos = $$(".accordion .titulo");
    if (titulos.length === 0) return; // Solo en contacto.php

    titulos.forEach(titulo => {
        titulo.addEventListener("click", () => {
            const item = titulo.parentElement;

            // Cerrar los demás (acordeón simple)
            $$(".accordion .item").forEach(otro => {
                if (otro !== item) otro.classList.remove("activa");
            });

            item.classList.toggle("activa");
        });
    });
}

// ============================================================================
// 5. VALIDACIÓN FORMULARIO (contacto.php)
// ============================================================================
function initFormulario() {
    const form = $(".formulario");
    if (!form) return; // Solo en contacto.php

    const btnEnviar = $("#btn-enviar");
    const btnTexto = btnEnviar ? btnEnviar.querySelector(".btn-texto") : null;
    const btnCargando = btnEnviar ? btnEnviar.querySelector(".btn-cargando") : null;

    const campos = {
        nombre: {
            el: form.nombre,
            validar: v => v.trim() ? null : "El nombre es obligatorio."
        },
        correo: {
            el: form.correo,
            validar: v => (v.trim() && v.includes("@") && v.includes(".")) ? null : "Correo inválido."
        },
        telefono: {
            el: form.telefono,
            validar: v => /^\d{8}$/.test(v.trim()) ? null : "Teléfono: 8 dígitos numéricos."
        },
        tipo_ayuda: {
            el: form.tipo_ayuda,
            validar: v => v ? null : "Selecciona una opción."
        },
        motivo: {
            el: form.motivo,
            validar: v => {
                const len = v.trim().length;
                const contador = $("#motivo-longitud");
                if (contador) contador.textContent = len;
                if (len === 0) return "El motivo es obligatorio.";
                if (len < 20) return `Mínimo 20 caracteres (${len}/20).`;
                return null;
            }
        },
        privacidad: {
            el: form.privacidad,
            validar: v => v.checked ? null : "Debes aceptar la política de privacidad."
        }
    };

    function mostrarError(campo, msg) {
        const cfg = campos[campo];
        if (!cfg || !cfg.el) return;
        const errorEl = cfg.el.parentElement.querySelector(".error-msg");
        if (msg) {
            cfg.el.classList.add("error");
            cfg.el.setAttribute("aria-invalid", "true");
            if (errorEl) errorEl.textContent = msg;
        } else {
            cfg.el.classList.remove("error");
            cfg.el.removeAttribute("aria-invalid");
            if (errorEl) errorEl.textContent = "";
        }
    }

    function validarCampo(campo) {
        const cfg = campos[campo];
        if (!cfg || !cfg.el) return true;
        const valor = campo === "privacidad" ? cfg.el.checked : cfg.el.value;
        const error = cfg.validar(valor);
        mostrarError(campo, error);
        return !error;
    }

    // Validación en tiempo real
    Object.keys(campos).forEach(campo => {
        const cfg = campos[campo];
        if (!cfg || !cfg.el) return;
        const evento = campo === "privacidad" ? "change" : "input";
        cfg.el.addEventListener(evento, () => validarCampo(campo));
        if (campo !== "privacidad") cfg.el.addEventListener("blur", () => validarCampo(campo));
    });

    // Envío del formulario con feedback visual
    form.addEventListener("submit", e => {
        console.log("[Formulario] Iniciando validación...");

        let valido = true;
        Object.keys(campos).forEach(c => {
            const resultado = validarCampo(c);
            console.log(`[Formulario] Campo ${c}: ${resultado ? "válido" : "inválido"}`);
            if (!resultado) valido = false;
        });

        if (!valido) {
            e.preventDefault();
            console.log("[Formulario] Validación fallida, enviando prevenido");
            const primerError = form.querySelector(".error");
            if (primerError) {
                primerError.focus();
                primerError.scrollIntoView({ behavior: "smooth", block: "center" });
            }
            return;
        }

        console.log("[Formulario] Validación exitosa, enviando...");

        // Mostrar estado de carga
        if (btnEnviar) {
            btnEnviar.disabled = true;
            if (btnTexto) btnTexto.style.display = "none";
            if (btnCargando) btnCargando.style.display = "inline-flex";
        }

        // Si hay error en el servidor, el PHP redirige de vuelta con errores
        // Si todo va bien, redirige a gracias.php
        // No prevenimos el envío normal
    });

    // Inicializar contador
    const contador = $("#motivo-longitud");
    if (contador && form.motivo) contador.textContent = form.motivo.value.length;

    console.log("[Formulario] Inicializado correctamente");
}

// ============================================================================
// INICIALIZACIÓN
// ============================================================================
document.addEventListener("DOMContentLoaded", () => {
    initNavbar();
    initCarrusel();
    initCardsAyuda();
    initAcordeon();
    initFormulario();
});