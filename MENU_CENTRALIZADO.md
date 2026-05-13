# Instrucciones para Centralizar el Menú

## ¿QUÉ SE HA HECHO?

Se ha centralizado el menú de navegación en un solo archivo JavaScript (`js/menu.js`) para que solo necesites editarlo en un lugar en lugar de en cada página HTML individualmente.

**ANTES:** El menú estaba duplicado en cada uno de los 68 archivos HTML. Si querías cambiar un enlace, tenías que editar 68 archivos.

**AHORA:** El menú está en un solo archivo (`js/menu.js`). Si quieres cambiar un enlace, solo editas ese archivo y el cambio se aplica automáticamente a todas las páginas.

## ARCHIVOS CREADOS/MODIFICADOS

### js/menu.js (NUEVO)

- **Contiene:** Todo el HTML del menú de navegación
- **Función:** loadMenu() - Inyecta el menú en cada página automáticamente
- **Comentarios:** Cada línea está comentada para que entiendas qué hace
- **Cómo modificar:** Edita la variable `menuHTML` (línea 27)

### html/Administracion.html (MODIFICADO - Ejemplo)

- **Cambio 1:** Agregado `<script src="../js/menu.js"></script>` en el head (línea 21)
- **Cambio 2:** Reemplazado el menú HTML completo con un contenedor vacío (líneas 123-124)
- **Cambio 3:** Eliminada la inicialización duplicada del dropdown

## CÓMO APLICAR A LOS DEMÁS ARCHIVOS HTML

Para cada archivo HTML en la carpeta `html/`, sigue estos pasos:

### Paso 1: Agregar el script del menú al head

**¿Qué hace?** Esta línea carga el archivo JavaScript que contiene el menú.

**¿Dónde ponerlo?** Después de los otros scripts en el `<head>`, específicamente después de `wwb16.min.js`.

**Código a agregar:**

```html
<script src="../js/menu.js"></script>
```

**¿Por qué después de wwb16.min.js?** Porque menu.js usa jQuery ($) que se carga en wwb16.min.js. Si se carga antes, jQuery no estará disponible y el script fallará.

**Ejemplo de cómo debe verse:**

```html
<script src="jquery-1.12.4.min.js"></script>
<script src="wb.lazyload.min.js"></script>
<script src="jquery-ui.min.js"></script>
<script src="owl.carousel.min.js"></script>
<script src="popper.min.js"></script>
<script src="util.min.js"></script>
<script src="collapse.min.js"></script>
<script src="dropdown.min.js"></script>
<script src="wwb16.min.js"></script>
<script src="../js/menu.js"></script>
<!-- AGREGAR ESTA LÍNEA -->
```

### Paso 2: Reemplazar el menú HTML completo

**¿Qué hace?** Reemplaza todo el código HTML del menú (que antes estaba duplicado) con un contenedor vacío que será llenado por el JavaScript.

**¿Por qué un contenedor vacío?** Porque el JavaScript buscará este contenedor por su ID (`wb_ThemeableMenu1`) e inyectará el menú automáticamente.

**Bloque a buscar (comienza así):**

```html
<div class="col-2">
  <div
    id="wb_ThemeableMenu1"
    style="display:inline-block;width:100%;text-align:center;z-index:1;"
  >
    <div
      id="ThemeableMenu1"
      class="ThemeableMenu1"
      style="width:100%;height:auto !important;"
    >
      <!-- ... todo el HTML del menú ... -->
    </div>
  </div>
</div>
```

**Bloque de reemplazo:**

```html
<div class="col-2">
  <!-- Menú centralizado - se carga desde js/menu.js -->
  <div
    id="wb_ThemeableMenu1"
    style="display:inline-block;width:100%;text-align:center;z-index:1;"
  ></div>
</div>
```

**NOTA IMPORTANTE:** El bloque original es muy largo (aproximadamente 140 líneas). Asegúrate de seleccionar desde `<div class="col-2">` hasta el `</div>` que cierra ese col-2.

### Paso 3: Eliminar la inicialización duplicada del dropdown

**¿Qué hace?** Esta línea inicializa los menús desplegables de Bootstrap. Como ahora está en menu.js, no necesita duplicarse.

**Línea a buscar y eliminar:**

```javascript
$("#ThemeableMenu1 .dropdown-toggle").dropdown({
  popperConfig: {
    placement: "bottom-start",
    modifiers: { computeStyle: { gpuAcceleration: false } },
  },
});
```

**¿Dónde está?** En el script jQuery del documento, dentro de `$(document).ready(function() { ... });`

**¿Por qué eliminarla?** Porque menu.js ya hace esta inicialización automáticamente. Si la dejas, se inicializará dos veces, lo cual puede causar problemas.

## CÓMO MODIFICAR EL MENÚ

Ahora, para modificar el menú, solo necesitas editar el archivo `js/menu.js`:

### Paso a paso:

1. **Abre el archivo:** `js/menu.js`
2. **Busca la variable:** `menuHTML` (está en la línea 27 aproximadamente)
3. **Edita el HTML:** Modifica el contenido según necesites
   - Para agregar un enlace: `<li class="nav-item"><a href="./nueva-pagina.html" class="nav-link">Nuevo Enlace</a></li>`
   - Para eliminar un enlace: Borra la línea `<li>` correspondiente
   - Para cambiar un enlace: Modifica el `href` o el texto del enlace
4. **Guarda el archivo:** Ctrl+S
5. **Verifica el cambio:** Abre cualquier página HTML del sitio y verás el cambio reflejado

### Ejemplos de modificaciones comunes:

#### Agregar un nuevo item al menú principal:

```html
<li class="nav-item">
  <a href="./NuevaPagina.html" class="nav-link">Nueva Página</a>
</li>
```

#### Agregar un nuevo item a un dropdown existente (ej: en "Nosotros"):

```html
<li class="nav-item dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown"
    >Nosotros<b class="caret"></b
  ></a>
  <ul class="dropdown-menu">
    <li class="nav-item">
      <a href="./Bienvenida.html" class="nav-link">Bienvenida</a>
    </li>
    <!-- ... otros items ... -->
    <li class="nav-item">
      <a href="./NuevaPagina.html" class="nav-link">Nueva Página</a>
    </li>
    <!-- AGREGAR ESTO -->
  </ul>
</li>
```

#### Crear un nuevo dropdown:

```html
<li class="nav-item dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown"
    >Nuevo Dropdown<b class="caret"></b
  ></a>
  <ul class="dropdown-menu">
    <li class="nav-item">
      <a href="./Pagina1.html" class="nav-link">Página 1</a>
    </li>
    <li class="nav-item">
      <a href="./Pagina2.html" class="nav-link">Página 2</a>
    </li>
  </ul>
</li>
```

## VENTAJAS DE ESTE MÉTODO

### Antes (sin centralizar):

- **68 archivos** con el mismo menú duplicado
- Cambiar un enlace = editar 68 archivos
- Alto riesgo de errores humanos
- Difícil mantener consistencia
- Mucho código repetido

### Después (centralizado):

- **1 archivo** con el menú (js/menu.js)
- Cambiar un enlace = editar 1 archivo
- Cero riesgo de inconsistencia
- Fácil de mantener
- Menos código en cada página

### Beneficios específicos:

- **Mantenimiento simplificado:** Solo editas el menú en un lugar
- **Consistencia:** El menú será idéntico en todas las páginas automáticamente
- **Fácil de actualizar:** Cualquier cambio se propaga a todas las páginas instantáneamente
- **Menos código:** Cada página HTML tiene ~140 líneas menos de código
- **Menos errores:** No puedes olvidar actualizar una página porque todas usan el mismo archivo
- **Version control:** Cambios al menú se ven claramente en el historial de git

## ARCHIVOS QUE NECESITAN ACTUALIZACIÓN

Hay 68 archivos HTML en la carpeta `html/` que necesitan este cambio. Tienes dos opciones:

### Opción 1: Automatizado (Recomendado)

Usa el script PowerShell `centralizar-menu.ps1` que hace todo automáticamente.

**Cómo usarlo:**

1. Abre PowerShell en la carpeta del proyecto
2. Ejecuta: `.\centralizar-menu.ps1`
3. El script modificará todos los archivos HTML automáticamente

**¿Qué hace el script?**

- Busca todos los archivos .html en la carpeta html/
- Agrega `<script src="../js/menu.js"></script>` después de wwb16.min.js
- Reemplaza el menú HTML completo con el contenedor vacío
- Te muestra cuántos archivos modificó

### Opción 2: Manual

Sigue los pasos detallados arriba para cada archivo HTML individualmente.

**NOTA:** La opción manual es tediosa (68 archivos) pero te da más control si algo sale mal.

## SOLUCIÓN DE PROBLEMAS

### El menú no aparece:

- **Verifica:** Que el archivo `js/menu.js` exista en la ubicación correcta
- **Verifica:** Que la ruta en el script sea `../js/menu.js` (desde html/)
- **Verifica:** Que jQuery esté cargado antes de menu.js
- **Abre la consola del navegador:** F12 → Console para ver errores de JavaScript

### Los dropdowns no funcionan:

- **Verifica:** Que dropdown.js esté cargado antes de menu.js
- **Verifica:** Que jQuery esté cargado
- **Verifica:** Que no haya inicialización duplicada del dropdown en el HTML

### El menú aparece pero con errores:

- **Abre la consola del navegador:** F12 → Console para ver errores específicos
- **Verifica:** Que todos los archivos JavaScript estén cargando correctamente
- **Verifica:** Que no haya errores de sintaxis en menu.js

## RESUMEN RÁPIDO

**Para modificar el menú:**

1. Abre `js/menu.js`
2. Edita la variable `menuHTML`
3. Guarda
4. Listo - el cambio se aplica a todas las páginas

**Para aplicar a nuevas páginas:**

1. Agrega `<script src="../js/menu.js"></script>` al head
2. Reemplaza el menú HTML con `<div id="wb_ThemeableMenu1"></div>`
3. Elimina la inicialización duplicada del dropdown
