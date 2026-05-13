# ============================================================================
# SCRIPT PARA CENTRALIZAR EL MENÚ EN TODOS LOS ARCHIVOS HTML
# ============================================================================
# Este script automatiza el proceso de reemplazar el menú duplicado
# con el menú centralizado en todos los archivos HTML de la carpeta html/
#
# ¿QUÉ HACE ESTE SCRIPT?
# 1. Busca todos los archivos .html en la carpeta html/
# 2. Para cada archivo:
#    - Agrega <script src="../js/menu.js"></script> después de wwb16.min.js
#    - Reemplaza el menú HTML completo con un contenedor vacío
# 3. Muestra un resumen de cuántos archivos modificó
#
# ¿CÓMO USARLO?
# 1. Abre PowerShell en la carpeta del proyecto
# 2. Ejecuta: .\centralizar-menu.ps1
# 3. Revisa el resumen al final
#
# ¿POR QUÉ USAR ESTE SCRIPT?
# - Modificar 68 archivos manualmente es tedioso y propenso a errores
# - Este script hace el trabajo automáticamente en segundos
# - Es consistente y no comete errores humanos
#
# NOTA: Siempre haz un backup antes de ejecutar scripts de modificación masiva
# ============================================================================

# ============================================================================
# CONFIGURACIÓN
# ============================================================================

# Ruta a la carpeta que contiene los archivos HTML
$htmlPath = "d:\CEMB\PAGINA WEB CEMB\cembwebsite\html"

# Ruta al archivo menu.js (se verifica que exista antes de continuar)
$scriptPath = "d:\CEMB\PAGINA WEB CEMB\cembwebsite\js\menu.js"

# ============================================================================
# VERIFICACIÓN PREVIA
# ============================================================================

# Verificar que el archivo menu.js existe
# Si no existe, no tiene sentido continuar
if (-not (Test-Path $scriptPath)) {
    Write-Host "ERROR: No se encuentra el archivo js/menu.js" -ForegroundColor Red
    Write-Host "Por favor, asegúrate de que el archivo exista antes de ejecutar este script." -ForegroundColor Yellow
    exit
}

# ============================================================================
# OBTENER ARCHIVOS HTML
# ============================================================================

# Get-ChildItem obtiene todos los archivos en la carpeta especificada
# -Path: la carpeta a buscar
# -Filter: solo archivos .html
$htmlFiles = Get-ChildItem -Path $htmlPath -Filter "*.html"

# Mostrar cuántos archivos se encontraron
Write-Host "Se encontraron $($htmlFiles.Count) archivos HTML" -ForegroundColor Green
Write-Host "Procesando archivos..." -ForegroundColor Yellow

# ============================================================================
# VARIABLES PARA EL RESUMEN
# ============================================================================

$modifiedCount = 0        # Cantidad de archivos modificados
$alreadyModifiedCount = 0 # Cantidad de archivos que ya tenían el menú centralizado

# ============================================================================
# PROCESAR CADA ARCHIVO HTML
# ============================================================================

foreach ($file in $htmlFiles) {
    # Leer el contenido completo del archivo
    # -Raw: lee todo el archivo como una sola cadena
    # -Encoding UTF8: asegura que se lea con la codificación correcta
    $content = Get-Content $file.FullName -Raw -Encoding UTF8
    
    # ============================================================================
    # VERIFICAR SI EL ARCHIVO YA TIENE EL MENÚ CENTRALIZADO
    # ============================================================================
    
    # Buscar si ya tiene el script del menú
    # -match: busca el patrón en el contenido
    # src="../js/menu.js": el patrón a buscar
    if ($content -match 'src="../js/menu.js"') {
        # Si ya tiene el script, saltar este archivo
        Write-Host "  $($file.Name) - Ya modificado" -ForegroundColor Gray
        $alreadyModifiedCount++
        continue  # Saltar a la siguiente iteración del bucle
    }
    
    # ============================================================================
    # PASO 1: AGREGAR EL SCRIPT DEL MENÚ
    # ============================================================================
    
    # Reemplazar: busca <script src="wwb16.min.js"></script>
    # y agrega una nueva línea con <script src="../js/menu.js"></script> después
    # -replace: busca y reemplaza texto
    # $1: representa el texto encontrado (wwb16.min.js)
    # `n: nueva línea
    $content = $content -replace '(<script src="wwb16\.min\.js"></script>)', '$1`n<script src="../js/menu.js"></script>'
    
    # ============================================================================
    # PASO 2: REEMPLAZAR EL MENÚ HTML COMPLETO
    # ============================================================================
    
    # Patrón regex para buscar el menú HTML completo
    # (<div class="col-2">): captura el div col-2
    # \s*: cualquier cantidad de espacios en blanco
    # <div id="wb_ThemeableMenu1"[^>]*>: el div del menú
    # .*?: cualquier contenido (no greedy)
    # </div>\s*</div>: cierra los divs
    $menuPattern = '(<div class="col-2">)\s*<div id="wb_ThemeableMenu1"[^>]*>.*?</div>\s*</div>'
    
    # Texto de reemplazo
    # $1: el div col-2 capturado
    # `n: nueva línea
    # El resto es el contenedor vacío del menú
    $replacement = '$1`n               <!-- Menú centralizado - se carga desde js/menu.js -->`n               <div id="wb_ThemeableMenu1" style="display:inline-block;width:100%;text-align:center;z-index:1;"></div>`n            </div>'
    
    # Realizar el reemplazo
    # NOTA: Esta es una aproximación con regex
    # Puede necesitar ajustes manuales para algunos archivos con formato diferente
    $content = $content -replace $menuPattern, $replacement
    
    # ============================================================================
    # GUARDAR EL ARCHIVO MODIFICADO
    # ============================================================================
    
    # Guardar el contenido modificado de vuelta al archivo
    # -Encoding UTF8: asegura la codificación correcta
    # -NoNewline: no agregar una nueva línea al final
    $content | Out-File $file.FullName -Encoding UTF8 -NoNewline
    
    # Mostrar que el archivo fue modificado
    Write-Host "  $($file.Name) - Modificado" -ForegroundColor Green
    $modifiedCount++
}

# ============================================================================
# RESUMEN FINAL
# ============================================================================

Write-Host "`nResumen:" -ForegroundColor Cyan
Write-Host "  Archivos modificados: $modifiedCount" -ForegroundColor Green
Write-Host "  Archivos ya modificados: $alreadyModifiedCount" -ForegroundColor Gray
Write-Host "  Total archivos: $($htmlFiles.Count)" -ForegroundColor Cyan
Write-Host "`nNOTA: Es posible que algunos archivos necesiten revisión manual" -ForegroundColor Yellow
Write-Host "      si el formato del menú es diferente al esperado." -ForegroundColor Yellow
