// ============================================================================
// MENÚ CENTRALIZADO DE CEMB
// ============================================================================
// Este archivo contiene todo el HTML del menú de navegación del sitio web.
//
// ¿POR QUÉ ESTE ARCHIVO?
// Antes, el menú estaba duplicado en cada uno de los 68 archivos HTML.
// Si querías cambiar algo en el menú, tenías que editar 68 archivos.
// Ahora, solo editas este archivo y el cambio se aplica a todas las páginas.
//
// ¿CÓMO FUNCIONA?
// 1. Este archivo define el HTML del menú en la variable menuHTML
// 2. La función loadMenu() inyecta este HTML en cada página
// 3. Cada página HTML solo necesita cargar este script con <script src="../js/menu.js"></script>
// 4. El script automáticamente busca el contenedor #wb_ThemeableMenu1 y llena el menú
//
// ¿CÓMO MODIFICAR EL MENÚ?
// 1. Abre este archivo (js/menu.js)
// 2. Busca la variable menuHTML (línea 19)
// 3. Edita el HTML del menú según necesites
// 4. Guarda el archivo
// 5. El cambio se aplicará automáticamente a todas las páginas
// ============================================================================

// Variable que contiene TODO el HTML del menú de navegación
// Este es el código HTML que antes estaba duplicado en cada página
const menuHTML = `
<div id="wb_ThemeableMenu1" style="display:inline-block;width:100%;text-align:center;z-index:1;">
<div id="ThemeableMenu1" class="ThemeableMenu1" style="width:100%;height:auto !important;">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".ThemeableMenu1-navbar-collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
</div>
<div class="ThemeableMenu1-navbar-collapse collapse">
<ul class="nav navbar-nav">
<li class="nav-item">
<a href="./index.html" class="nav-link">Inicio</a>
</li>
<li class="nav-item dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" >Nosotros<b class="caret"></b></a>
<ul class="dropdown-menu">
<li class="nav-item"><a href="./Bienvenida.html" class="nav-link">Bienvenida</a></li>
<li class="nav-item"><a href="./Quienes-Somos.html" class="nav-link">Quienes Somos</a></li>
<li class="nav-item"><a href="./Nuestra-Historia.html" class="nav-link">Nuestra Historia</a></li>
<li class="nav-item"><a href="./School-Profile.html" class="nav-link">School Profile</a></li>
<li class="nav-item"><a href="./Escudo.html" class="nav-link">Escudo</a></li>
<li class="nav-item"><a href="./Mision-y-Vision.html" class="nav-link">Misión y Visión</a></li>
<li class="nav-item"><a href="./Valores.html" class="nav-link">Valores</a></li>
</ul>
</li>
<li class="nav-item dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" >Organización<b class="caret"></b></a>
<ul class="dropdown-menu">
<li class="nav-item"><a href="./Estamentos.html" class="nav-link">Estamentos</a></li>
<li class="nav-item"><a href="./Comite-Ejecutivo.html" class="nav-link">Comité Ejecutivo</a></li>
<li class="nav-item"><a href="./Equipo-Direccion.html" class="nav-link">Equipo de Dirección</a></li>
<li class="nav-item"><a href="./Administracion.html" class="nav-link active">Administración</a></li>
<li class="nav-item"><a href="./Directiva-Docente.html" class="nav-link">Directiva Docente</a></li>
<li class="nav-item"><a href="./Docentes.html" class="nav-link">Personal Docente</a></li>
<li class="nav-item"><a href="./PersonalApoyo.html" class="nav-link">Personal de Apoyo</a></li>
<li class="nav-item"><a href="./Organigrama.html" class="nav-link">Organigrama</a></li>
<li class="nav-item"><a href="./C-Emergencia-CEMB.html" class="nav-link">Cadena de Emergencia</a></li>
</ul>
</li>
<li class="nav-item dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" >Doc. Académicos<b class="caret"></b></a>
<ul class="dropdown-menu">
<li class="nav-item"><a href="./Crono-Acti-Evaluativas.html" class="nav-link">Cronogramas AE</a></li>
<li class="nav-item"><a href="./Desempe-Academico.html" class="nav-link">Desempeño Académico</a></li>
<li class="nav-item"><a href="./Modalidad-Ensenanzas.html" class="nav-link">Modalidad de Enseñanza</a></li>
<li class="nav-item"><a href="./TemariosExamenes.html" class="nav-link">Temarios de Exámenes</a></li>
</ul>
</li>
<li class="nav-item dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" >Doc. Reglamentarios<b class="caret"></b></a>
<ul class="dropdown-menu">
<li class="nav-item"><a href="./Manual-Convivencia.html" class="nav-link">Manual de Convivencia</a></li>
<li class="nav-item"><a href="./PAD.html" class="nav-link">PAD</a></li>
</ul>
</li>
<li class="nav-item">
<a href="./Circulares.html" class="nav-link">Circulares</a>
</li>
<li class="nav-item">
<a href="./Noticias.html" class="nav-link">Noticias</a>
</li>
<li class="nav-item dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" >Admisión<b class="caret"></b></a>
<ul class="dropdown-menu">
<li class="nav-item"><a href="./Proceso-Admision.html" class="nav-link">Proceso Admisión</a></li>
<li class="nav-item"><a href="./SolicitudAdmision.html" class="nav-link">Solicitud de Admisión</a></li>
<li class="nav-item"><a href="./Preceso-AdmisionEI.html" class="nav-link">Proceso Admisión Educación Inicial</a></li>
<li class="nav-item"><a href="./Temarios-Admision.html" class="nav-link">Temarios de Admisión</a></li>
</ul>
</li>
<li class="nav-item dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" >Comunidad CEMB<b class="caret"></b></a>
<ul class="dropdown-menu">
<li class="nav-item"><a href="./Consejo-Estudiantil.html" class="nav-link">Consejo Estudiantil</a></li>

 <!---
<li class="nav-item"><a href="./Operacion-Sonrisa.html" class="nav-link">Club Operación Sonrisa</a></li> --->

<li class="nav-item"><a href="./Club-Mun.html" class="nav-link">Club MUN</a></li>
<li class="nav-item"><a href="./Stop-Bullying.html" class="nav-link">Stop Bullying</a></li>
<li class="nav-item"><a href="./Capacitaciones.html" class="nav-link">Capacitaciones</a></li>
<li class="nav-item"><a href="./ProyectoPASS.html" class="nav-link">Proyecto PASS</a></li>
<li class="nav-item"><a href="./Universidades.html" class="nav-link">Universidades</a></li>
<li class="nav-item"><a href="./Exalumnos.html" class="nav-link">Ex-Alumnos</a></li>
<li class="nav-item"><a href="./CoachingEstudiantil.html" class="nav-link">Coaching Estudiantil</a></li>
<li class="nav-item"><a href="./OrgulloCEMB.html" class="nav-link">Orgullo CEMB</a></li>
</ul>
</li>
<li class="nav-item dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" >Actividades Relevantes por Áreas<b class="caret"></b></a>
<ul class="dropdown-menu">
<li class="nav-item"><a href="./Matematica.html" class="nav-link">Matemática</a></li>
<li class="nav-item"><a href="./LeguayLiteratura.html" class="nav-link">Lengua y Literatura</a></li>
<li class="nav-item"><a href="./CCNN.html" class="nav-link">CCNN</a></li>
<li class="nav-item"><a href="./CCSS.html" class="nav-link">CCSS</a></li>
<li class="nav-item"><a href="./Ingles.html" class="nav-link">Inglés</a></li>
<li class="nav-item"><a href="./Pastoral.html" class="nav-link">Pastoral</a></li>
<li class="nav-item"><a href="./DeptoOrientacion.html" class="nav-link">Dpto. Orientación</a></li>
<li class="nav-item"><a href="./DanzaDeportes.html" class="nav-link">Danza y Deportes</a></li>
<li class="nav-item"><a href="./PPFF.html" class="nav-link">PPFF</a></li>
<li class="nav-item"><a href="./Teleton.html" class="nav-link">Teleton</a></li>
<li class="nav-item"><a href="./Fisica.html" class="nav-link">Inglés</a></li>
</ul>
</li>
<li class="nav-item dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" >Asociación PPMMFF<b class="caret"></b></a>
<ul class="dropdown-menu">
<li class="nav-item"><a href="./FuncionPMF.html" class="nav-link">Función</a></li>
<li class="nav-item"><a href="./DirectivaPMF.html" class="nav-link">Directiva</a></li>
<li class="nav-item"><a href="./RG-PMF.html" class="nav-link">Representantes de Grado</a></li>
</ul>
</li>
<li class="nav-item dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" >Galería<b class="caret"></b></a>
<ul class="dropdown-menu">
<li class="nav-item"><a href="./Campus.php" class="nav-link">Campus</a></li>
<li class="nav-item"><a href="./GEducaxcionInicial.php" class="nav-link">Educación Inicial</a></li>
<li class="nav-item"><a href="./GPrimaria.php" class="nav-link">Primaria</a></li>
<li class="nav-item"><a href="./GSecundaria.php" class="nav-link">Secundaria</a></li>
<li class="nav-item"><a href="./GPApoyo.php" class="nav-link">Personal de Apoyo</a></li>
<li class="nav-item"><a href="./GPadresFamilia.php" class="nav-link">Padres de Familia</a></li>
<li class="nav-item"><a href="./promociones/index.html" class="nav-link">Promociones</a></li>
<li class="nav-item"><a href="./GVideos.php" class="nav-link">Videos</a></li>
</ul>
</li>
<li class="nav-item">
<a href="./Contactanos.php" class="nav-link">Contáctanos</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
`;

// ============================================================================
// FUNCIÓN PARA CARGAR EL MENÚ
// ============================================================================
// Esta función se encarga de inyectar el HTML del menú en cada página
// Se ejecuta automáticamente cuando la página carga
// ============================================================================
function loadMenu() {
    // Paso 1: Buscar el contenedor donde se va a insertar el menú
    // El contenedor tiene el ID "wb_ThemeableMenu1"
    // Este contenedor está vacío en las páginas HTML (solo es un placeholder)
    const menuContainer = document.getElementById('wb_ThemeableMenu1');
    
    // Paso 2: Verificar que el contenedor existe
    // Si no existe, significa que la página no tiene el menú centralizado
    if (menuContainer) {
        // Paso 3: Reemplazar el contenedor vacío con el HTML completo del menú
        // outerHTML reemplaza el elemento completo (incluyendo el contenedor)
        // con el contenido de menuHTML
        menuContainer.outerHTML = menuHTML;
        
        // ============================================================================
        // INICIALIZACIÓN DE DROPDOWNS DE BOOTSTRAP
        // ============================================================================
        // El menú usa Bootstrap para los menús desplegables (dropdowns)
        // Estos necesitan ser inicializados con JavaScript para funcionar
        // Esta inicialización se hace automáticamente después de cargar el menú
        // ============================================================================
        
        // Verificar que jQuery está cargado ($) y que el plugin dropdown existe
        // typeof $ !== 'undefined' verifica que jQuery está cargado
        // $.fn.dropdown verifica que el plugin dropdown de Bootstrap está disponible
        if (typeof $ !== 'undefined' && $.fn.dropdown) {
            // Inicializar todos los dropdowns del menú
            // #ThemeableMenu1 .dropdown-toggle selecciona todos los botones de dropdown
            // .dropdown() es la función de Bootstrap que inicializa los dropdowns
            $('#ThemeableMenu1 .dropdown-toggle').dropdown({
                // Configuración de Popper.js (librería que posiciona los dropdowns)
                popperConfig: {
                    // placement: 'bottom-start' hace que el dropdown se abra hacia abajo
                    // y alineado a la izquierda del botón
                    placement: 'bottom-start',
                    // modifiers son ajustes adicionales al posicionamiento
                    modifiers: {
                        computeStyle: {
                            // gpuAcceleration: false evita problemas de renderizado en algunos navegadores
                            gpuAcceleration: false
                        }
                    }
                }
            });
        }
        // ============================================================================
        // NOTA: Si los dropdowns no funcionan, verifica que:
        // 1. jQuery esté cargado antes de este script
        // 2. Bootstrap dropdown.js esté cargado
        // 3. Los scripts estén en el orden correcto en el HTML
        // ============================================================================
    }
}

// ============================================================================
// EJECUCIÓN AUTOMÁTICA DE LA FUNCIÓN
// ============================================================================
// Este código asegura que loadMenu() se ejecute en el momento correcto
// Hay dos posibles escenarios:
// 1. El DOM todavía está cargando (document.readyState === 'loading')
// 2. El DOM ya está completamente cargado
// ============================================================================
if (document.readyState === 'loading') {
    // Escenario 1: El DOM todavía está cargando
    // Esperamos a que el DOM esté completamente cargado antes de ejecutar loadMenu()
    // DOMContentLoaded es un evento que se dispara cuando el HTML está completamente parseado
    document.addEventListener('DOMContentLoaded', loadMenu);
} else {
    // Escenario 2: El DOM ya está cargado
    // Ejecutamos loadMenu() inmediatamente
    loadMenu();
}
// ============================================================================
// ¿POR QUÉ ESTA COMPROBACIÓN?
// Si el script se carga al final del body, el DOM ya está listo y podemos ejecutar directamente
// Si el script se carga en el head, necesitamos esperar a DOMContentLoaded
// Esta comprobación cubre ambos casos
// ============================================================================
