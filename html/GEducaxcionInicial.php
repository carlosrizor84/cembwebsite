<!doctype html>
<html lang="es-ni">
<head>
<meta charset="utf-8">
<title>CEMB</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="insignia2_small.png" rel="icon" sizes="150x150" type="image/png">
<link href="font-awesome.min.css" rel="stylesheet">
<link href="CEMB.css" rel="stylesheet">
<link href="GEducaxcionInicial.css" rel="stylesheet">
<script src="jquery-1.12.4.min.js"></script>
<script src="wb.lazyload.min.js"></script>
<script src="jquery-ui.min.js"></script>
<script src="popper.min.js"></script>
<script src="util.min.js"></script>
<script src="collapse.min.js"></script>
<script src="dropdown.min.js"></script>
<link rel="stylesheet" href="fancybox/jquery.fancybox-1.3.4.css">
<script src="fancybox/jquery.easing-1.3.pack.js"></script>
<script src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script src="fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script src="wwb16.min.js"></script>
<script>
$(document).ready(function()
{
   $('#wb_FontAwesomeIcon3').addClass('visibility-hidden');
   $('#wb_FontAwesomeIcon11').addClass('visibility-hidden');
   $('#wb_IconFont1').addClass('visibility-hidden');
   function onScrollPageHeaderDividerTop()
   {
      var $obj = $('#PageHeader-divider-top');
      if (!$obj.hasClass('show') && $obj.inViewPort(false))
      {
         $obj.addClass('show');
      }
   }
   onScrollPageHeaderDividerTop();
   $(window).scroll(function(event)
   {
      onScrollPageHeaderDividerTop();
   });
   $("a[href*='#header']").click(function(event)
   {
      event.preventDefault();
      $('html, body').stop().animate({ scrollTop: $('#wb_header').offset().top }, 600, 'easeOutSine');
   });
   $("a[href*='#infoBlock1']").click(function(event)
   {
      event.preventDefault();
      $('html, body').stop().animate({ scrollTop: $('#wb_infoBlock1').offset().top }, 600, 'easeOutSine');
   });
   $('#ThemeableMenu1 .dropdown-toggle').dropdown({popperConfig:{placement:'bottom-start',modifiers:{computeStyle:{gpuAcceleration:false}}}});
   $(document).on('click','.ThemeableMenu1-navbar-collapse.show',function(e)
   {
      if ($(e.target).is('a') && ($(e.target).attr('class') != 'dropdown-toggle')) 
      {
         $(this).collapse('hide');
      }
   });
   function onScrollFontAwesomeIcon3()
   {
      var $obj = $("#wb_FontAwesomeIcon3");
      if (!$obj.hasClass("in-viewport") && $obj.inViewPort(false))
      {
         $obj.addClass("in-viewport");
         AnimateCss('wb_FontAwesomeIcon3', 'transform-lightspeed-in', 100, 1000);
      }
   }
   onScrollFontAwesomeIcon3();
   $(window).scroll(function(event)
   {
      onScrollFontAwesomeIcon3();
   });
   function onScrollFontAwesomeIcon11()
   {
      var $obj = $("#wb_FontAwesomeIcon11");
      if (!$obj.hasClass("in-viewport") && $obj.inViewPort(false))
      {
         $obj.addClass("in-viewport");
         AnimateCss('wb_FontAwesomeIcon11', 'transform-lightspeed-in', 400, 1000);
      }
   }
   onScrollFontAwesomeIcon11();
   $(window).scroll(function(event)
   {
      onScrollFontAwesomeIcon11();
   });
   function onScrollIconFont1()
   {
      var $obj = $("#wb_IconFont1");
      if (!$obj.hasClass("in-viewport") && $obj.inViewPort(false))
      {
         $obj.addClass("in-viewport");
         AnimateCss('wb_IconFont1', 'transform-lightspeed-in', 400, 1000);
      }
   }
   onScrollIconFont1();
   $(window).scroll(function(event)
   {
      onScrollIconFont1();
   });
   $("a[data-rel='PhotoGallery1']").attr('rel', 'PhotoGallery1');
   $("a[rel^='PhotoGallery1']").fancybox({});
   $("a[data-rel='PhotoGallery2']").attr('rel', 'PhotoGallery2');
   $("a[rel^='PhotoGallery2']").fancybox({});
   $("a[data-rel='PhotoGallery3']").attr('rel', 'PhotoGallery3');
   $("a[rel^='PhotoGallery3']").fancybox({});
   $("a[data-rel='PhotoGallery4']").attr('rel', 'PhotoGallery4');
   $("a[rel^='PhotoGallery4']").fancybox({});
   $("a[data-rel='PhotoGallery5']").attr('rel', 'PhotoGallery5');
   $("a[rel^='PhotoGallery5']").fancybox({});
   $("a[data-rel='PhotoGallery6']").attr('rel', 'PhotoGallery6');
   $("a[rel^='PhotoGallery6']").fancybox({});
   $("a[data-rel='PhotoGallery7']").attr('rel', 'PhotoGallery7');
   $("a[rel^='PhotoGallery7']").fancybox({});
   $("a[data-rel='PhotoGallery8']").attr('rel', 'PhotoGallery8');
   $("a[rel^='PhotoGallery8']").fancybox({});
   $("a[data-rel='PhotoGallery9']").attr('rel', 'PhotoGallery9');
   $("a[rel^='PhotoGallery9']").fancybox({});
   $("a[data-rel='PhotoGallery10']").attr('rel', 'PhotoGallery10');
   $("a[rel^='PhotoGallery10']").fancybox({});
   $("a[data-rel='PhotoGallery11']").attr('rel', 'PhotoGallery11');
   $("a[rel^='PhotoGallery11']").fancybox({});
   $("a[data-rel='PhotoGallery12']").attr('rel', 'PhotoGallery12');
   $("a[rel^='PhotoGallery12']").fancybox({});
   $("a[data-rel='PhotoGallery13']").attr('rel', 'PhotoGallery13');
   $("a[rel^='PhotoGallery13']").fancybox({});
   $("a[data-rel='PhotoGallery14']").attr('rel', 'PhotoGallery14');
   $("a[rel^='PhotoGallery14']").fancybox({});
   $("a[data-rel='PhotoGallery15']").attr('rel', 'PhotoGallery15');
   $("a[rel^='PhotoGallery15']").fancybox({});
   $("a[data-rel='PhotoGallery16']").attr('rel', 'PhotoGallery16');
   $("a[rel^='PhotoGallery16']").fancybox({});
   $("a[data-rel='PhotoGallery17']").attr('rel', 'PhotoGallery17');
   $("a[rel^='PhotoGallery17']").fancybox({});
	$("a[data-rel='PhotoGallery18']").attr('rel', 'PhotoGallery18');
   $("a[rel^='PhotoGallery18']").fancybox({});
   $('img[data-src]').lazyload();
});
</script>
</head>
<body>


<div id="wb_PageHeader">
<div id="PageHeader-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
<path class="divider-fill" d="M66.709,62.141C63.674,62.141 62.115,50.388 60.619,37.105C62.048,29.579 63.814,24.051 66.352,24.051C69.374,24.051 71.362,33.025 73.031,44.299C71.577,51.437 70.374,62.141 66.709,62.141ZM41.114,57.818C40.604,57.416 40.051,57.19 39.441,57.19C33.91,57.19 32.305,76.639 28.938,82.663C30.102,85.32 31.71,87.871 33.333,87.871C36.993,87.87 39.088,73.872 41.114,57.818z" style="fill-opacity:0.3;"/>
<path class="divider-fill" d="M51.832,78.336C46.587,78.336 45.555,61.319 41.114,57.818C44.303,32.539 46.669,0 52.006,0C56.839,0 58.676,19.844 60.619,37.105C57.568,53.167 56.051,78.336 51.832,78.336ZM17.005,67.259C21.378,67.259 21.89,84.421 26.875,84.421C27.646,84.421 28.321,83.766 28.938,82.663C24.471,72.464 22.587,44.705 18.018,44.705C11.998,44.705 10.296,82.492 6.25,82.492C3.124,82.492 1.562,73.774 -0.001,61.416L-0.001,73.421C1.562,81.2 3.342,90.679 6.468,90.679C12.718,90.679 12.39,67.259 17.005,67.259ZM94.15,31.54C89.658,31.54 89.31,66.348 84.772,66.348C80.584,66.348 80.104,38.746 75.741,38.746C74.548,38.746 73.758,40.729 73.031,44.299C75.851,63.352 77.758,88.979 82.198,88.979C87.608,88.979 88.132,57.865 93.758,57.865C96.867,57.865 98.444,65.681 99.999,73.42L99.999,61.416C98.444,49.122 97.26,31.54 94.15,31.54z" style="fill-opacity:0.5;"/>
<path class="divider-fill" d="M82.198,88.979C77.757,88.979 75.851,63.353 73.031,44.299C71.577,51.437 70.374,62.141 66.709,62.141C63.674,62.141 62.115,50.388 60.619,37.105C57.568,53.167 56.05,78.336 51.832,78.336C46.587,78.336 45.555,61.319 41.113,57.818C39.088,73.871 36.862,87.87 33.202,87.87C31.578,87.87 30.102,85.32 28.938,82.662C28.321,83.766 27.645,84.42 26.875,84.42C21.89,84.42 21.378,67.259 17.005,67.259C12.39,67.259 12.674,90.634 6.424,90.634C3.298,90.634 1.562,81.199 -0.001,73.419L-0.001,100L99.999,100L99.999,73.42C98.444,65.681 96.867,57.865 93.758,57.865C88.132,57.865 87.608,88.979 82.198,88.979z"/>
</svg></div>
<div id="PageHeader">
<div class="row">
<div class="col-1">
<div id="wb_CEMB-INSIGNIA" style="display:inline-block;width:44px;height:45px;z-index:0;">
<a href="./index.html" onmouseover="AnimateCss('wb_CEMB-INSIGNIA', 'animate-flash', 0, 500);return false;"><img src="images/placeholder.gif" data-src="images/INSIGNIA2.png" id="CEMB-INSIGNIA" alt=""></a>
</div>
</div>
<div class="col-2">
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
<li class="nav-item"><a href="./Administracion.html" class="nav-link">Administración</a></li>
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
<li class="nav-item"><a href="./Operacion-Sonrisa.html" class="nav-link">Club Operación Sonrisa</a></li>  --->

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
<li class="nav-item"><a href="./GEducaxcionInicial.php" class="nav-link active">Educación Inicial</a></li>
<li class="nav-item"><a href="./GPrimaria.php" class="nav-link">Primaria</a></li>
<li class="nav-item"><a href="./GSecundaria.php" class="nav-link">Secundaria</a></li>
<li class="nav-item"><a href="./GPApoyo.php" class="nav-link">Personal de Apoyo</a></li>
<li class="nav-item"><a href="./GPadresFamilia.php" class="nav-link">Padres de Familia</a></li>
	<li class="nav-item"><a href="./GDocentes.html" class="nav-link">Docentes</a></li>
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
</div>
</div>
</div>
<div id="wb_header">
<div id="header">
<div class="row">
<div class="col-1">
<div id="wb_Heading1" style="display:inline-block;width:100%;z-index:2;">
<h1 id="Heading1">Centro Educacional Mantica Berio</h1>
</div>
</div>
</div>
</div>
</div>
<div id="wb_infoBlock1">
<div id="infoBlock1-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 24" preserveAspectRatio="none">
<defs>
   <path id="wave-animated" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
</defs>
<g class="wave-animated">
   <use xlink:href="#wave-animated" x="48" y="0" class="divider-fill" style="opacity:0.7" />
   <use xlink:href="#wave-animated" x="48" y="3" class="divider-fill" style="opacity:0.5" />
   <use xlink:href="#wave-animated" x="48" y="5" class="divider-fill" style="opacity:0.3" />
   <use xlink:href="#wave-animated" x="48" y="7" class="divider-fill"  />
</g>
</svg>
</div>
<div id="infoBlock1">
<div class="col-1">
<div id="wb_Heading2" style="display:inline-block;width:100%;z-index:3;">
<h1 id="Heading2">Educación Inicial</h1>
</div>
</div>
</div>
</div>

<!--START 10/11/2025-->

<div id="wb_LayoutGrid19">
<div id="LayoutGrid19">
<div class="row">
<div class="col-1">
<div id="Article14" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Día de color (navideño) #somoscemb</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Friday, October 01, 2021<br></div>
   <span style="color:#000000;"><br>07/11/2025</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Trajes%20Tipicos">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/xmas2025/xmas20251.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/xmas2025/xmas20251.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/xmas2025/xmas20252.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/xmas2025/xmas20252.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/xmas2025/xmas20253.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/xmas2025/xmas20253.jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col2"></div>
</div>
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/xmas2025/xmas20254.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/xmas2025/xmas20254.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
          
        
<div class="frame">
         <a href="images/GEI/xmas2025/xmas20255.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/xmas2025/xmas20255.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/xmas2025/xmas20256.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/xmas2025/xmas20256.jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
</div>
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/xmas2025/xmas20257.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/xmas2025/xmas20257.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
          
        
<div class="frame">
         <a href="images/GEI/xmas2025/xmas20258.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/xmas2025/xmas20258.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/xmas2025/xmas20259.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/xmas2025/xmas20259.jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>	    

         
   
      
</div>
</div>
</div>
</div>
</div>
</div>

<!-----END 10/11/2025 ----->


<!--START 02/06/2025-->

<div id="wb_LayoutGrid19">
<div id="LayoutGrid19">
<div class="row">
<div class="col-1">
<div id="Article14" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Celebración del día del niño #somoscemb</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Friday, October 01, 2021<br></div>
   <span style="color:#000000;"><br>02/06/2025</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Trajes%20Tipicos">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/dnino2025/prek01.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/dnino2025/prek01.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/dnino2025/prek02.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/dnino2025/prek02.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/dnino2025/prek03.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/dnino2025/prek03.jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col2"></div>
</div>
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/dnino2025/prek04.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/dnino2025/prek04.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
          
        
<div class="frame">
         <a href="images/GEI/dnino2025/prek05.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/dnino2025/prek05.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/dnino2025/prek06.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/dnino2025/prek06.jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
</div>
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/dnino2025/prek07.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/dnino2025/prek07.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
          
        
<div class="frame">
         <a href="images/GEI/dnino2025/prek08.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/dnino2025/prek08.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/dnino2025/prek09.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/dnino2025/prek09.jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>	    
      
   
      
</div>
</div>
</div>
</div>
</div>
</div>

<!-----END 02/06/2025 ----->

<!--START 16/05/2025-->

<div id="wb_LayoutGrid19">
<div id="LayoutGrid19">
<div class="row">
<div class="col-1">
<div id="Article14" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Celebración del día de las madres #somoscemb</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Friday, October 01, 2021<br></div>
   <span style="color:#000000;"><br>28/05/2025</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Trajes%20Tipicos">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/diamadre2025/prek01.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/diamadre2025/prek01.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/diamadre2025/prek02.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/diamadre2025/prek02.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/diamadre2025/prek03.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/diamadre2025/prek03.jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col2"></div>
</div>
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/diamadre2025/prek04.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/diamadre2025/prek04.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
          
        
<div class="frame">
         <a href="images/GEI/diamadre2025/prek05.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/diamadre2025/prek05.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/diamadre2025/prek06.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/diamadre2025/prek06.jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
</div>
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/diamadre2025/prek07.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/diamadre2025/prek07.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
          
        
<div class="frame">
         <a href="images/GEI/diamadre2025/prek08.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/diamadre2025/prek08.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/diamadre2025/prek09.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/diamadre2025/prek09.jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>	    
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/diamadre2025/prek10.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/diamadre2025/prek10.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
          
        
<div class="frame">
         <a href="images/GEI/diamadre2025/prek11.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/diamadre2025/prek11.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/diamadre2025/prek12.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/diamadre2025/prek12.jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>	      
   
      
</div>
</div>
</div>
</div>
</div>
</div>

<!-----END 29/05/2025 ----->



<!--START 16/05/2025-->

<div id="wb_LayoutGrid19">
<div id="LayoutGrid19">
<div class="row">
<div class="col-1">
<div id="Article14" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Kermes por aniversario 59 de nuestro colegio #somoscemb</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Friday, October 01, 2021<br></div>
   <span style="color:#000000;"><br>16/05/2025</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Trajes%20Tipicos">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/kermes2025/prek01.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/kermes2025/prek01.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/kermes025/prek02.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/kermes2025/prek02.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/kermes2025/prek03.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/kermes2025/prek03.jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col2"></div>
</div>
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/kermes2025/prek04.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/kermes2025/prek04.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
          
        
<div class="frame">
         <a href="images/GEI/kermes2025/prek05.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/kermes2025/prek05.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/kermes2025/prek06.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/kermes2025/prek06.jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
</div>
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/kermes2025/prek07.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/kermes2025/prek07.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
          
        
<div class="frame">
         <a href="images/GEI/kermes2025/prek08.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/kermes2025/prek08.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/kermes2025/prek09.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/kermes2025/prek09.jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>	    
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/kermes2025/prek10.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/kermes2025/prek10.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
          
        
<div class="frame">
         <a href="images/GEI/kermes2025/prek11.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/kermes2025/prek11.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">

      </div>
      <div class="clearfix visible-col3"></div>	      
   
      
</div>
</div>
</div>
</div>
</div>
</div>

<!-----END 16/05/2025 ----->


<!--START 15/05/2025-->

<div id="wb_LayoutGrid19">
<div id="LayoutGrid19">
<div class="row">
<div class="col-1">
<div id="Article14" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Mañana Deportiva #somoscemb</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Friday, October 01, 2021<br></div>
   <span style="color:#000000;"><br>15/05/2025</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Trajes%20Tipicos">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/angel2025/prek01.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/angel2025/prek01.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/angel025/prek02.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/angel2025/prek02.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/angel2025/prek03.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/angel2025/prek03.jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col2"></div>
</div>
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/angel2025/prek04.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/angel2025/prek04.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
          
        
<div class="frame">
         <a href="images/GEI/angel2025/prek05.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/angel2025/prek05.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/angel2025/prek06.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/angel2025/prek06.jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
</div>
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/angel2025/prek07.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/angel2025/prek07.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
          
        
<div class="frame">
         <a href="images/GEI/angel2025/prek08.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/angel2025/prek08.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/angel2025/prek09.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/angel2025/prek09.jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>	    
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/angel2025/prek10.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/angel2025/prek10.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
          
        
<div class="frame">
         <a href="images/GEI/angel2025/prek11.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/angel2025/prek11.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">

      </div>
      <div class="clearfix visible-col3"></div>	      
   
      
</div>
</div>
</div>
</div>
</div>
</div>

<!-----END 15/05/2025 ----->


<!--START 14/05/2025-->

<div id="wb_LayoutGrid19">
<div id="LayoutGrid19">
<div class="row">
<div class="col-1">
<div id="Article14" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Día de playa #somoscemb</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Friday, October 01, 2021<br></div>
   <span style="color:#000000;"><br>14/05/2025</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Trajes%20Tipicos">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/playa2025/prek01.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/playa2025/prek01.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/playa025/prek02.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/playa2025/prek02.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/playa2025/prek03.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/playa2025/prek03.jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col2"></div>
</div>
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/playa2025/prek04.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/playa2025/prek04.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
          
        
<div class="frame">
         <a href="images/GEI/playa2025/prek05.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/playa2025/prek05.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/playa2025/prek06.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/playa2025/prek06.jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
</div>
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/playa2025/prek07.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/playa2025/prek07.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
          
        
<div class="frame">
         <a href="images/GEI/playa2025/prek08.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/playa2025/prek08.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/playa2025/prek09.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/playa2025/prek09.jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>	    
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/playa2025/prek010.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/playa2025/prek010.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
          
        
<div class="frame">
         <a href="images/GEI/playa2025/prek011.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/playa2025/prek011.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/playa2025/prek012.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/playa2025/prek012.jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>	      
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/playa2025/prek013.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/playa2025/prek013.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
          
        
<div class="frame">
         <a href="images/GEI/playa2025/prek014.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/playa2025/prek014.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/playa2025/prek015.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/playa2025/prek015.jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>	      
      
</div>
</div>
</div>
</div>
</div>
</div>

<!-----END 14/05/2025 ----->



<!--START 13/05/2025-->

<div id="wb_LayoutGrid19">
<div id="LayoutGrid19">
<div class="row">
<div class="col-1">
<div id="Article14" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Día de gemelos #somoscemb</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Friday, October 01, 2021<br></div>
   <span style="color:#000000;"><br>13/05/2025</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Trajes%20Tipicos">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/gemelos2025/prek01.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/gemelos2025/prek01.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/gemelos2025/prek02.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/gemelos2025/prek02.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/gemelos2025/prek03.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/gemelos2025/prek03.jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col2"></div>
</div>
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/gemelos2025/prek04.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/gemelos2025/prek04.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
          
        
<div class="frame">
         <a href="images/GEI/gemelos2025/prek05.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/gemelos2025/prek05.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/gemelos2025/prek06.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/gemelos2025/prek06.jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
</div>
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/gemelos2025/prek07.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/gemelos2025/prek07.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
          
        
<div class="frame">
         <a href="images/GEI/gemelos2025/prek08.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/gemelos2025/prek08.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/gemelos2025/prek09.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/gemelos2025/prek09.jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>	    
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/gemelos2025/prek10.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/gemelos2025/prek10.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
          
        
<div class="frame">
         <a href="images/GEI/gemelos2025/prek11.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/gemelos2025/prek11.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/gemelos2025/prek12.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/gemelos2025/prek12.jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>	      
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/gemelos2025/prek13.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/gemelos2025/prek13.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
          
        
<div class="frame">
         <a href="images/GEI/gemelos2025/prek14.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/gemelos2025/prek14.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/gemelos2025/prek15.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/gemelos2025/prek15.jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>	      
      
</div>
</div>
</div>
</div>
</div>
</div>

<!-----END 13/05/2025 ----->



<!--START 12/05/2025-->

<div id="wb_LayoutGrid19">
<div id="LayoutGrid19">
<div class="row">
<div class="col-1">
<div id="Article14" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Nuestros pasillos se llenan de color y música para celebrar 59 años de aprendizaje, comunidad, crecimiento y diversión! - echa un vistazo a lo alegre que hemos pasado en Pre K con pinta caritas en ocasión del 59 aniversario del CEMB #somoscemb</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Friday, October 01, 2021<br></div>
   <span style="color:#000000;"><br>12/05/2025</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Trajes%20Tipicos">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/pijama2025/prek01.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/pijama2025/prek01.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/pijama2025/prek02.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/pijama2025/prek02.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/pijama2025/prek03.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/pijama2025/prek03.jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col2"></div>
</div>
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/pijama2025/prek04.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/pijama2025/prek04.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
          
        
<div class="frame">
         <a href="images/GEI/pijama2025/prek05.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/pijama2025/prek05.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/pijama2025/prek06.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/pijama2025/prek06.jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
</div>
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/pijama2025/prek07.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/pijama2025/prek07.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
          
        
<div class="frame">
         <a href="images/GEI/pijama2025/prek08.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/pijama2025/prek08.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/pijama2025/prek09.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/pijama2025/prek09.jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>	      
</div>
</div>
</div>
</div>
</div>
</div>

<!-----END 12/05/2025 ----->

<!--START 06/03/2025-->

<div id="wb_LayoutGrid19">
<div id="LayoutGrid19">
<div class="row">
<div class="col-1">
<div id="Article14" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Día del amor y la amistad (San Valentin) 2025</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Friday, October 01, 2021<br></div>
   <span style="color:#000000;"><br>14/02/2025</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Trajes%20Tipicos">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/svp2025/prek202501.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/svp2025/prek202501.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/svp2025/prek202502.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/svp2025/prek202502.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/svp2025/prek202503.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/svp2025/prek202502.jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col2"></div>
</div>
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/svp2025/prek202504.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/svp2025/prek202504.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
          
        
<div class="frame">
         <a href="images/GEI/svp2025/prek202505.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/svp2025/prek202505.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/svp2025/prek202506.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/svp2025/prek202506.jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
	      
</div>
</div>
</div>
</div>
</div>
</div>

<!-----END 06/03/2025 ----->



<!---Pausa inicio 15/10/2024--->
<!---One video only--->
<div id="wb_LayoutGrid19">
<div id="LayoutGrid19">
<div class="row">
<div class="col-1">
<div id="Article14" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Educación Inicial CEMB 2024</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Friday, October 01, 2021<br></div>
   <span style="color:#000000;"><br>15/10/2024</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Trajes%20Tipicos">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <iframe width="760" height="515" src="https://www.youtube.com/embed/ehZAtxWmEC8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      <div class="clearfix visible-col3"></div>
	   
	    
   </div>
</div>
</div>
<!--<a id="Button2" href="./GEFeriaInovadora2022.php" style="display:inline-block;width:96px;height:25px;z-index:8;">Mas..</a>-->
</div>
</div>
</div>
</div>
<!---Pausa final 15/10/2024--->


<!--START 10/09/2024-->

<div id="wb_LayoutGrid19">
<div id="LayoutGrid19">
<div class="row">
<div class="col-1">
<div id="Article14" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Defile interno Educación inicial</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Friday, October 01, 2021<br></div>
   <span style="color:#000000;"><br>10/09/2024</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Trajes%20Tipicos">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/desfile/desfile0920241.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/desfile/desfile0920241.jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/desfile/desfile0920242.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/desfile/desfile0920242.jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/desfile/desfile0920243.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/desfile/desfile0920243.jpg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col2"></div>
</div>
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/desfile/desfile0920244.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/desfile/desfile0920244.jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
          
        
<div class="frame">
         <a href="images/GEI/desfile/desfile0920245.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/desfile/desfile0920245.jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/desfile/desfile0920246.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/desfile/desfile0920246.jpg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
	      <div class="thumbnail">
	           
<div class="frame">
         <a href="images/GEI/desfile/desfile0920247.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/desfile/desfile0920247.jpg" class="image"></a>
</div>
      </div>
 <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/desfile/desfile0920248.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/desfile/desfile0920248.jpg" class="image"></a>
</div>
      </div>      
	      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/desfile/desfile0920249.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/desfile/desfile0920249.jpg" class="image"></a>
</div>
      </div>
<div class="clearfix visible-col3"></div>
	      <div class="thumbnail">
	           
<div class="frame">
         <a href="images/GEI/desfile/desfile09202410.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/desfile/desfile09202410.jpg" class="image"></a>
</div>
      </div>
 <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/desfile/desfile09202411.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/desfile/desfile09202411.jpg" class="image"></a>
</div>
      </div>      
	      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/desfile/desfile09202412.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/desfile/desfile09202412.jpg" class="image"></a>
</div>
      </div>      

	   <div class="clearfix visible-col3"></div>
    <div class="thumbnail">
	           
<div class="frame">
         <a href="images/GEI/desfile/desfile09202413.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/desfile/desfile09202413.jpg" class="image"></a>
</div>
      </div>
 <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/desfile/desfile09202414.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/desfile/desfile09202414.jpg" class="image"></a>
</div>
      </div>      
	      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/desfile/desfile09202415.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/desfile/desfile09202415.jpg" class="image"></a>
</div>
      </div>      

	   <div class="clearfix visible-col3"></div>
    <div class="thumbnail">
	           
<div class="frame">
         <a href="images/GEI/desfile/desfile09202416.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/desfile/desfile09202416.jpg" class="image"></a>
</div>
      </div>
 <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/desfile/desfile09202417.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/desfile/desfile09202417.jpg" class="image"></a>
</div>
      </div>      
	      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/desfile/desfile09202418.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/desfile/desfile09202418.jpg" class="image"></a>
</div>
      </div>      

	   <div class="clearfix visible-col3"></div>
	   
	   <div class="thumbnail">
	           
<div class="frame">
         <a href="images/GEI/desfile/desfile09202419.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/desfile/desfile09202419.jpg" class="image"></a>
</div>
      </div>
 <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/desfile/desfile09202420.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/desfile/desfile09202420.jpg" class="image"></a>
</div>
      </div>      
	      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/desfile/desfile09202421.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/desfile/desfile09202421.jpeg" class="image"></a>
</div>
      </div>      
   </div>
</div>
</div>
</div>
</div>
</div>
</div>

<!-----END 10/09/2024 ----->



<!--START 05/09/2024-->

<div id="wb_LayoutGrid19">
<div id="LayoutGrid19">
<div class="row">
<div class="col-1">
<div id="Article14" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">¡Qué Viva Nicaragua! Así celebramos nuestras Fiestas Patrias en CEMB #somoscemb</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Friday, October 01, 2021<br></div>
   <span style="color:#000000;"><br>05/09/2024</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Trajes%20Tipicos">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/sep2024/gei0920241.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/sep2024/gei0920241.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/sep2024/gei0920242.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/sep2024/gei0920242.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/sep2024/gei0920243.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/sep2024/gei0920243.jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col2"></div>
</div>
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/sep2024/gei0920244.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/sep2024/gei0920244.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
          
        
<div class="frame">
         <a href="images/GEI/sep2024/gei0920245.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/sep2024/gei0920245.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/sep2024/gei0920246.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/sep2024/gei0920246.jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
	      <div class="thumbnail">
	           
<div class="frame">
         <a href="images/GEI/sep2024/gei0920247.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/sep2024/gei0920247.jpeg" class="image"></a>
</div>
      </div>
 <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/sep2024/gei09202418.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/sep2024/gei0920248.jpeg" class="image"></a>
</div>
      </div>      
	      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/sep2024/gei0920249.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/sep2024/gei0920249.jpeg" class="image"></a>
</div>
      </div>
<div class="clearfix visible-col3"></div>
	      <div class="thumbnail">
	           
<div class="frame">
         <a href="images/GEI/sep2024/gei09202410.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/sep2024/gei09202410.jpeg" class="image"></a>
</div>
      </div>
 <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/sep2024/gei09202411.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/sep2024/gei09202411.jpeg" class="image"></a>
</div>
      </div>      
	      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/sep2024/gei09202412.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/sep2024/gei09202412.jpeg" class="image"></a>
</div>
      </div>      

	   <div class="clearfix visible-col3"></div>
    <div class="thumbnail">
	           
<div class="frame">
         <a href="images/GEI/sep2024/gei09202413.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/sep2024/gei09202413.jpeg" class="image"></a>
</div>
      </div>
 <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/sep2024/gei09202414.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/sep2024/gei09202414.jpeg" class="image"></a>
</div>
      </div>      
	      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/sep2024/gei09202415.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/sep2024/gei09202415.jpeg" class="image"></a>
</div>
      </div>      

	   <div class="clearfix visible-col3"></div>
    <div class="thumbnail">
	           
<div class="frame">
         <a href="images/GEI/sep2024/gei09202416.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/sep2024/gei09202416.jpeg" class="image"></a>
</div>
      </div>
 <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/sep2024/gei09202417.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/sep2024/gei09202417.jpeg" class="image"></a>
</div>
      </div>      
	      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/sep2024/gei09202418.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/sep2024/gei09202418.jpeg" class="image"></a>
</div>
      </div>      

	   <div class="clearfix visible-col3"></div>
   </div>
</div>
</div>
</div>
</div>
</div>
</div>

<!-----END 05/09/2024 ----->


<!--START 02/08/2024-->

<div id="wb_LayoutGrid19">
<div id="LayoutGrid19">
<div class="row">
<div class="col-1">
<div id="Article14" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Día de color (Tematica:Oficios).</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Friday, October 01, 2021<br></div>
   <span style="color:#000000;"><br>02/08/2024</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Trajes%20Tipicos">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/workday2024/work0820241.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/workday2024/work0820241.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/workday2024/work0820242.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/workday2024/work0820242.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/workday2024/work0820243.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/workday2024/work0820243.jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col2"></div>
</div>
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/workday2024/work0820244.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/workday2024/work0820244.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
          
        
<div class="frame">
         <a href="images/GEI/workday2024/work0820245.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/workday2024/work0820245.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/workday2024/work0820246.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/workday2024/work0820246.jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
	      <div class="thumbnail">
	           
<div class="frame">
         <a href="images/GEI/workday2024/work0820247.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/workday2024/work0820247.jpeg" class="image"></a>
</div>
      </div>
 <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/workday2024/work0820248.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/workday2024/work0820248.jpeg" class="image"></a>
</div>
      </div>      
	      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/workday2024/work0820249.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/workday2024/work0820249.jpeg" class="image"></a>
</div>
      </div>
<div class="clearfix visible-col3"></div>
	      <div class="thumbnail">
	           
<div class="frame">
         <a href="images/GEI/workday2024/work08202410.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/workday2024/work08202410.jpeg" class="image"></a>
</div>
      </div>
 <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/workday2024/work08202411.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/workday2024/work08202411.jpeg" class="image"></a>
</div>
      </div>      
	      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/workday2024/work08202412.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/workday2024/work08202412.jpeg" class="image"></a>
</div>
      </div>      

	   <div class="clearfix visible-col3"></div>
   </div>
</div>
</div>
</div>
</div>
</div>
</div>

<!-----END 02/08/2024 ----->

<!--START 06/06/2024-->

<div id="wb_LayoutGrid19">
<div id="LayoutGrid19">
<div class="row">
<div class="col-1">
<div id="Article14" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Celebración del día del niño 2024 (Tematica:Piratas).</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Friday, October 01, 2021<br></div>
   <span style="color:#000000;"><br>06/06/2024</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Trajes%20Tipicos">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/dianiño2024/pirata1.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/dianiño2024/pirata1.jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/dianiño2024/pirata2.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/dianiño2024/pirata2.jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/dianiño2024/pirata3.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/dianiño2024/pirata3.jpg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col2"></div>
</div>
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/dianiño2024/pirata4.jpgg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/dianiño2024/pirata4.jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
          
        
<div class="frame">
         <a href="images/GEI/dianiño2024/pirata5.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/dianiño2024/pirata5.jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/dianiño2024/pirata6.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/dianiño2024/pirata6.jpg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
	      <div class="thumbnail">
	           
<div class="frame">
         <a href="images/GEI/dianiño2024/pirata7.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/dianiño2024/pirata7.jpg" class="image"></a>
</div>
      </div>
 <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/dianiño2024/pirata8.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/dianiño2024/pirata8.jpg" class="image"></a>
</div>
      </div>      
	      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/dianiño2024/pirata9.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/dianiño2024/pirata9.jpg" class="image"></a>
</div>
      </div>
<div class="clearfix visible-col3"></div>
	      <div class="thumbnail">
	           
<div class="frame">
         <a href="images/GEI/dianiño2024/pirata10.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/dianiño2024/pirata10.jpg" class="image"></a>
</div>
      </div>
 <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/dianiño2024/pirata11.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/dianiño2024/pirata11.jpg" class="image"></a>
</div>
      </div>      
	      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/dianiño2024/pirata12.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/dianiño2024/pirata12.jpg" class="image"></a>
</div>
      </div>      

	   <div class="clearfix visible-col3"></div>
   </div>
</div>
</div>
</div>
</div>
</div>
</div>

<!-----END 06/06/2024 ----->

<!--START 30/05/2024-->

<div id="wb_LayoutGrid19">
<div id="LayoutGrid19">
<div class="row">
<div class="col-1">
<div id="Article14" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Día de la madre en Educación Inicial (2024).</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Friday, October 01, 2021<br></div>
   <span style="color:#000000;"><br>30/05/2024</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Trajes%20Tipicos">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/diamadre2024/mdei1.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/diamadre2024/mdei1.jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/diamadre2024/mdei2.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/diamadre2024/mdei2.jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/diamadre2024/mdei3.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/diamadre2024/mdei3.jpg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col2"></div>
</div>
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/diamadre2024/mdei4.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/diamadre2024/mdei4.jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
          
        
<div class="frame">
         <a href="images/GEI/diamadre2024/mdei5.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/diamadre2024/mdei5.jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/diamadre2024/mdei6.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/diamadre2024/mdei6.jpg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
	      <div class="thumbnail">
	          <!----  
<div class="frame">
         <a href="images/GEI/pijama2024/pijama52.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/pijama2024/pijama52.jpg" class="image"></a>
</div>
      </div>
 <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/pijama2024/pijama55.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/pijama2024/pijama55.jpg" class="image"></a>
</div>
      </div>      
	      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/pijama2024/pijama74.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/pijama2024/pijama74.jpg" class="image"></a>
</div>
      </div>
	      ------>
	   <div class="clearfix visible-col3"></div>
   </div>
</div>
</div>
</div>
</div>
</div>
</div>

<!-----END 30/05/2024 ----->



<!--START 16/05/2024-->

<div id="wb_LayoutGrid19">
<div id="LayoutGrid19">
<div class="row">
<div class="col-1">
<div id="Article14" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Día de Descombinados en Educación Inicial (Aniversario 58 del CEMB).</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Friday, October 01, 2021<br></div>
   <span style="color:#000000;"><br>16/05/2024</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Trajes%20Tipicos">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/descombinado2024/descomb9.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/descombinado2024/descomb9.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/descombinado2024/descomb1.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/descombinado2024/descomb1.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/descombinado2024/descomb5.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/descombinado2024/descomb5.jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col2"></div>
</div>
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/descombinado2024/descomb6.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/descombinado2024/descomb9.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
          
<!----          
<div class="frame">
         <a href="images/GEI/pijama2024/pijama94.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/pijama2024/pijama94.jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/pijama2024/pijama43.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/pijama2024/pijama43.jpg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
	      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/pijama2024/pijama52.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/pijama2024/pijama52.jpg" class="image"></a>
</div>
      </div>
 <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/pijama2024/pijama55.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/pijama2024/pijama55.jpg" class="image"></a>
</div>
      </div>      
	      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/pijama2024/pijama74.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/pijama2024/pijama74.jpg" class="image"></a>
</div>
      </div>
	      ------>
	   <div class="clearfix visible-col3"></div>
   </div>
</div>
</div>
</div>
</div>
</div>
</div>

<!-----END 16/05/2024 ----->

<!--START 15/05/2024-->

<div id="wb_LayoutGrid19">
<div id="LayoutGrid19">
<div class="row">
<div class="col-1">
<div id="Article14" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Día de pijamas en Educación Inicial (Aniversario 58 del CEMB).</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Friday, October 01, 2021<br></div>
   <span style="color:#000000;"><br>15/05/2024</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Trajes%20Tipicos">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/pijama2024/pijama78.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/pijama2024/pijama78.jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/pijama2024/pijama82.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/pijama2024/pijama82.jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/pijama2024/pijama87.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/pijama2024/pijama87.jpg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col2"></div>
</div>
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/pijama2024/pijama89.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/pijama2024/pijama89.jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/pijama2024/pijama94.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/pijama2024/pijama94.jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/pijama2024/pijama43.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/pijama2024/pijama43.jpg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
	      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/pijama2024/pijama52.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/pijama2024/pijama52.jpg" class="image"></a>
</div>
      </div>
 <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/pijama2024/pijama55.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/pijama2024/pijama55.jpg" class="image"></a>
</div>
      </div>      
	      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/pijama2024/pijama74.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/pijama2024/pijama74.jpg" class="image"></a>
</div>
      </div>
	      
	   <div class="clearfix visible-col3"></div>
   </div>
</div>
</div>
</div>
</div>
</div>
</div>

<!-----END 15/05/2024 ----->

<!--START 14/05/2024-->

<div id="wb_LayoutGrid19">
<div id="LayoutGrid19">
<div class="row">
<div class="col-1">
<div id="Article14" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Día de vaqueros en Educación Inicial (Aniversario 58 del CEMB).</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Friday, October 01, 2021<br></div>
   <span style="color:#000000;"><br>14/05/2024</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Trajes%20Tipicos">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/vaquero2024/vaquero1.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/vaquero2024/vaquero1.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/vaquero2024/vaquero3.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/vaquero2024/vaquero3.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/vaquero2024/vaquero4.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/vaquero2024/vaquero4.jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
	      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/vaquero2024/vaquero5.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/vaquero2024/vaquero5.jpeg" class="image"></a>
</div>
      </div>
 <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/vaquero2024/vaquero6.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/vaquero2024/vaquero6.jpeg" class="image"></a>
</div>
      </div>      
	      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/vaquero2024/vaquero21.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/vaquero2024/vaquero21.jpeg" class="image"></a>
</div>
      </div>
	      
	   <div class="clearfix visible-col3"></div>
   </div>
</div>
</div>
</div>
</div>
</div>
</div>

<!-----END 14/05/2024 ----->

<!--START 13/05/2024-->

<div id="wb_LayoutGrid19">
<div id="LayoutGrid19">
<div class="row">
<div class="col-1">
<div id="Article14" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Día de gemelos en Educación Inicial (Aniversario 58 del CEMB).</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Friday, October 01, 2021<br></div>
   <span style="color:#000000;"><br>13/05/2024</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Trajes%20Tipicos">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/gemelos2024/gemelo22.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/gemelos2024/gemelo22.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/gemelos2024/gemelo23.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/gemelos2024/gemelo23.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/gemelos2024/gemelo24.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/gemelos2024/gemelo24.jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
	      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/gemelos2024/gemelo25.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/gemelos2024/gemelo25.jpeg" class="image"></a>
</div>
      </div>
	      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/gemelos2024/gemelo26.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/gemelos2024/gemelo26.jpeg" class="image"></a>
</div>
      </div>
	      
	   <div class="clearfix visible-col3"></div>
   </div>
</div>
</div>
</div>
</div>
</div>
</div>

<!-----END 13/05/2024 ----->


<!--INICIO 30/04/2024-->
	<div id="wb_LayoutGrid19">
<div id="LayoutGrid19">
<div class="row">
<div class="col-1">
<div id="Article14" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">En la clase de Proceso Lógico III Nivel Educación Inicial</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Friday, October 01, 2021<br></div>
   <span style="color:#000000;"><br>30/04/2024</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Trajes%20Tipicos">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/TuGX5chKVLM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      <div class="clearfix visible-col3"></div>
	   
	    
   </div>
</div>
</div>
<!--<a id="Button2" href="./GEFeriaInovadora2022.php" style="display:inline-block;width:96px;height:25px;z-index:8;">Mas..</a>-->
</div>
</div>
</div>
</div>
	<!--END 30/04/2024-->
	

<!--START 29/02/2024-->
<!--
<div id="wb_LayoutGrid19">
<div id="LayoutGrid19">
<div class="row">
<div class="col-1">
<div id="Article14" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Teleton 2024. #Latiendofuerte</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Friday, October 01, 2021<br></div>
   <span style="color:#000000;"><br>01/03/2024</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Trajes%20Tipicos">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/teleton2024/prek1.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/teleton2024/prek1.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/teleton2024/prek2.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/teleton2024/prek2.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/teleton2024/prek3.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/teleton2024/prek3.jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
	      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/teleton2024/prek4.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/teleton2024/prek4.jpeg" class="image"></a>
</div>
      </div>
	      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/teleton2024/prek5.jpeg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/teleton2024/prek5.jpeg" class="image"></a>
</div>
      </div>
	      
	   <div class="clearfix visible-col3"></div>
   </div>
</div>
</div>
<!--<a id="Button2" href="./GEIViacrusis2023.php" style="display:inline-block;width:96px;height:25px;z-index:8;">Mas..</a>-->
<!--
</div>
</div>
</div>
</div>

<!-----END 29/02/2024 ----->

<!--START 12/02/2024-->

<div id="wb_LayoutGrid19">
<div id="LayoutGrid19">
<div class="row">
<div class="col-1">
<div id="Article14" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Este pasado viernes celebramos con nuestros pequeños niños de Educación Inicial el día de San Valentín. Disfrutaron de un ambiente lleno de diversión y alegría.</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Friday, October 01, 2021<br></div>
   <span style="color:#000000;"><br>09/02/2024</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Trajes%20Tipicos">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/daylove2024/prekl1.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/daylove2024/prekl1.jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/daylove2024/prekl2.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/daylove2024/prekl2.jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/daylove2024/prekl3.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/daylove2024/prekl3.jpg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
	      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/daylove2024/prekl4.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/daylove2024/prekl4.jpg" class="image"></a>
</div>
      </div>
	      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/daylove2024/prekl5.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/daylove2024/prekl5.jpg" class="image"></a>
</div>
      </div>
	      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/daylove2024/prekl6.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/daylove2024/prekl6.jpg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/daylove2024/prekl7.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/daylove2024/prekl7.jpg" class="image"></a>
</div>
      </div>
	      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/daylove2024/prekl9.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/daylove2024/prekl9.jpg" class="image"></a>
</div>
      </div>
           <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/daylove2024/prekl10.jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/daylove2024/prekl10.jpg" class="image"></a>
</div>
      </div>      
	   <div class="clearfix visible-col3"></div>
   </div>
</div>
</div>
<!--<a id="Button2" href="./GEIViacrusis2023.php" style="display:inline-block;width:96px;height:25px;z-index:8;">Mas..</a>-->
</div>
</div>
</div>
</div>

<!-----END 11/02/2024 ----->



<!--INICIO 13/09/2023-->
	<div id="wb_LayoutGrid19">
<div id="LayoutGrid19">
<div class="row">
<div class="col-1">
<div id="Article14" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Actividades que hacemos en Educación Inicial</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Friday, October 01, 2021<br></div>
   <span style="color:#000000;"><br>13/09/2023</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Trajes%20Tipicos">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/qgtEXR4Ialg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      <div class="clearfix visible-col3"></div>
	   
	    
   </div>
</div>
</div>
<!--<a id="Button2" href="./GEFeriaInovadora2022.php" style="display:inline-block;width:96px;height:25px;z-index:8;">Mas..</a>-->
</div>
</div>
</div>
</div>
	<!--END 13/09/2023-->
	
	<!--INICIO-->
	<div id="wb_LayoutGrid19">
<div id="LayoutGrid19">
<div class="row">
<div class="col-1">
<div id="Article14" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Celebrando el día del Padre CEMB 2023</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Friday, October 01, 2021<br></div>
   <span style="color:#000000;"><br>21/08/2023</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Trajes%20Tipicos">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/kZdrG8djEvo?si=8avbI2yLcewIluJY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      <div class="clearfix visible-col3"></div>
	   
	    
   </div>
</div>
</div>
<!--<a id="Button2" href="./GEFeriaInovadora2022.php" style="display:inline-block;width:96px;height:25px;z-index:8;">Mas..</a>-->
</div>
</div>
</div>
</div>
	
	<!--INICIO-->
	<div id="wb_LayoutGrid19">
<div id="LayoutGrid19">
<div class="row">
<div class="col-1">
<div id="Article14" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Feria Intercultural 2023</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Friday, October 01, 2021<br></div>
   <span style="color:#000000;"><br>07/08/2023</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Trajes%20Tipicos">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/SKoMCMh1wyI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      <div class="clearfix visible-col3"></div>
	   
	    
   </div>
</div>
</div>
<!--<a id="Button2" href="./GEFeriaInovadora2022.php" style="display:inline-block;width:96px;height:25px;z-index:8;">Mas..</a>-->
</div>
</div>
</div>
</div>
	<!--INICIO-->
	<!--------11/02/2024
<div id="wb_LayoutGrid19">
<div id="LayoutGrid19">
<div class="row">
<div class="col-1">
<div id="Article14" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Piscinada de nuestros pequeños de Educación Inicial</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Friday, October 01, 2021<br></div>
   <span style="color:#000000;"><br>18/04/2023</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Trajes%20Tipicos">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/PisicinadaEI/PisicinadaEI (1).jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/PisicinadaEI/PisicinadaEI (1).jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/PisicinadaEI/PisicinadaEI (2).jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/PisicinadaEI/PisicinadaEI (2).jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/PisicinadaEI/PisicinadaEI (3).jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/PisicinadaEI/PisicinadaEI (3).jpg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
	      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/PisicinadaEI/PisicinadaEI (4).jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/PisicinadaEI/PisicinadaEI (4).jpg" class="image"></a>
</div>
      </div>
	      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/PisicinadaEI/PisicinadaEI (5).jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/PisicinadaEI/PisicinadaEI (5).jpg" class="image"></a>
</div>
      </div>
	      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/PisicinadaEI/PisicinadaEI (6).jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/PisicinadaEI/PisicinadaEI (6).jpg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/PisicinadaEI/PisicinadaEI (7).jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/PisicinadaEI/PisicinadaEI (7).jpg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
   </div>
</div>
</div>
<!--<a id="Button2" href="./GEIViacrusis2023.php" style="display:inline-block;width:96px;height:25px;z-index:8;">Mas..</a>-->
<!-------11/02/2024

</div>
</div>
</div>
</div>
                 11/02/2024-------->
	<!--INICIO-->
	<div id="wb_LayoutGrid19">
<div id="LayoutGrid19">
<div class="row">
<div class="col-1">
<div id="Article14" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Visita de Aproquen y el capitán Rocky a niños de Educación Inicial dónde les enseñaron cómo evitar y cuidarse de quemaduras.</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Friday, October 01, 2021<br></div>
   <span style="color:#000000;"><br>18/04/2023</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Trajes%20Tipicos">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/VisitaAproquenyRocky2023/VisitaAproquenyRocky2023 (1).jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/VisitaAproquenyRocky2023/VisitaAproquenyRocky2023 (1).jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/VisitaAproquenyRocky2023/VisitaAproquenyRocky2023 (2).jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/VisitaAproquenyRocky2023/VisitaAproquenyRocky2023 (2).jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/VisitaAproquenyRocky2023/VisitaAproquenyRocky2023 (3).jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/VisitaAproquenyRocky2023/VisitaAproquenyRocky2023 (3).jpg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
	      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/VisitaAproquenyRocky2023/VisitaAproquenyRocky2023 (4).jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/VisitaAproquenyRocky2023/VisitaAproquenyRocky2023 (4).jpg" class="image"></a>
</div>
      </div>
	      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/VisitaAproquenyRocky2023/VisitaAproquenyRocky2023 (5).jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/VisitaAproquenyRocky2023/VisitaAproquenyRocky2023 (5).jpg" class="image"></a>
</div>
      </div>
	      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/VisitaAproquenyRocky2023/VisitaAproquenyRocky2023 (6).jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/VisitaAproquenyRocky2023/VisitaAproquenyRocky2023 (6).jpg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/VisitaAproquenyRocky2023/VisitaAproquenyRocky2023 (7).jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/VisitaAproquenyRocky2023/VisitaAproquenyRocky2023 (7).jpg" class="image"></a>
</div>
      </div>
	      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/VisitaAproquenyRocky2023/VisitaAproquenyRocky2023 (8).jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/VisitaAproquenyRocky2023/VisitaAproquenyRocky2023 (8).jpg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
   </div>
</div>
</div>
<!--<a id="Button2" href="./GEIViacrusis2023.php" style="display:inline-block;width:96px;height:25px;z-index:8;">Mas..</a>-->
</div>
</div>
</div>
</div>
	
	
	<!--INICIO-->
	<div id="wb_LayoutGrid19">
<div id="LayoutGrid19">
<div class="row">
<div class="col-1">
<div id="Article14" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Viacrucis Viviente de Educación Inicial 2023</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Friday, October 01, 2021<br></div>
   <span style="color:#000000;"><br>13/03/2023</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Trajes%20Tipicos">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/Viacrusis2023/Viacrusis2023 (1).jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/Viacrusis2023/Viacrusis2023 (1).jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/Viacrusis2023/Viacrusis2023 (2).jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/Viacrusis2023/Viacrusis2023 (2).jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/Viacrusis2023/Viacrusis2023 (3).jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/Viacrusis2023/Viacrusis2023 (3).jpg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
   </div>
</div>
</div>
<a id="Button2" href="./GEIViacrusis2023.php" style="display:inline-block;width:96px;height:25px;z-index:8;">Mas..</a>
</div>
</div>
</div>
</div>
	
	
	
	<!--INICIO-->
	<!------31/01/2024
	<div id="wb_LayoutGrid19">
<div id="LayoutGrid19">
<div class="row">
<div class="col-1">
<div id="Article14" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Talent Show CEMB 2022</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Friday, October 01, 2021<br></div>
   <span style="color:#000000;"><br>09/11/2022</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Trajes%20Tipicos">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/vY1bLRTiID4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <div class="clearfix visible-col3"></div>
	   
	    
   </div>
</div>
</div>
<!--<a id="Button2" href="./GEFeriaInovadora2022.php" style="display:inline-block;width:96px;height:25px;z-index:8;">Mas..</a>-->
</div>
</div>
</div>
</div>
		<!--INICIO-->
		<!------31/01/2024
	<div id="wb_LayoutGrid19">
<div id="LayoutGrid19">
<div class="row">
<div class="col-1">
<div id="Article14" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Feria Intercultural CEMB 2022</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Friday, October 01, 2021<br></div>
   <span style="color:#000000;"><br>07/11/2022</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Trajes%20Tipicos">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <iframe width="100%" height="300" src="https://www.youtube.com/embed/mvdYVIUyfBg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <iframe width="100%" height="300" src="https://www.youtube.com/embed/UikmrglbKik" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <iframe width="560" height="315" src="https://www.youtube.com/embed/ORMOCHQZXJY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
	   
	     <div class="thumbnail">
<div class="frame">
         <iframe width="100%" height="300" src="https://www.youtube.com/embed/kjLlo9s2suk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <iframe width="100%" height="300" src="https://www.youtube.com/embed/-Q5DJTAoFF8 " title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <iframe width="560" height="315" src="https://www.youtube.com/embed/dkIHZV_l9kY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
   </div>
</div>
</div>
<!--<a id="Button2" href="./GEFeriaInovadora2022.php" style="display:inline-block;width:96px;height:25px;z-index:8;">Mas..</a>-->
<!------31/01/2024
</div>
</div>
</div>
</div>
	
	<!--INICIO-->
	<!------31/01/2024
	<div id="wb_LayoutGrid19">
<div id="LayoutGrid19">
<div class="row">
<div class="col-1">
<div id="Article14" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Feria Innovadora con nuestros pequeños de Educacion Inicial</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Friday, October 01, 2021<br></div>
   <span style="color:#000000;"><br>17/10/2022</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Trajes%20Tipicos">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/feriainnovadora17102022/FeriaInovaxdroaEI171022 (1).jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/feriainnovadora17102022/FeriaInovaxdroaEI171022 (1).jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/feriainnovadora17102022/FeriaInovaxdroaEI171022 (2).jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/feriainnovadora17102022/FeriaInovaxdroaEI171022 (2).jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/feriainnovadora17102022/FeriaInovaxdroaEI171022 (3).jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/GEI/feriainnovadora17102022/FeriaInovaxdroaEI171022 (3).jpg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
   </div>
</div>
</div>
<a id="Button2" href="./GEFeriaInovadora2022.php" style="display:inline-block;width:96px;height:25px;z-index:8;">Mas..</a>
</div>
</div>
</div>
</div>
	
	<!--inicio-->
	<!------31/01/2024
		<div id="wb_LayoutGrid22">
<div id="LayoutGrid22">
<div class="row">
<div class="col-1">
<div id="Article16" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Día de color </span>
   <div class="no-thumb"></div>
   <div class="blogdate">friday, November 12, 2021<br></div>
   <span style="color:#000000;">23/09/2022<br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Educación%20Inicial">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery18" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery18">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/DIADECOLOR23-09-2022/DIADECOLOR23-09-2022 (1).jpeg"><img alt="" src="images/placeholder.gif" data-src="images/GEI/DIADECOLOR23-09-2022/DIADECOLOR23-09-2022 (1).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/DIADECOLOR23-09-2022/DIADECOLOR23-09-2022 (2).jpeg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/DIADECOLOR23-09-2022/DIADECOLOR23-09-2022 (2).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/DIADECOLOR23-09-2022/DIADECOLOR23-09-2022 (3).jpeg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/DIADECOLOR23-09-2022/DIADECOLOR23-09-2022 (3).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/DIADECOLOR23-09-2022/DIADECOLOR23-09-2022 (4).jpeg"><img alt="" src="images/placeholder.gif" data-src="images/GEI/DIADECOLOR23-09-2022/DIADECOLOR23-09-2022 (4).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/DIADECOLOR23-09-2022/DIADECOLOR23-09-2022 (5).jpeg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/DIADECOLOR23-09-2022/DIADECOLOR23-09-2022 (5).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/DIADECOLOR23-09-2022/DIADECOLOR23-09-2022 (6).jpeg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/DIADECOLOR23-09-2022/DIADECOLOR23-09-2022 (6).jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/DIADECOLOR23-09-2022/DIADECOLOR23-09-2022 (7).jpeg"><img alt="" src="images/placeholder.gif" data-src="images/GEI/DIADECOLOR23-09-2022/DIADECOLOR23-09-2022 (7).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/DIADECOLOR23-09-2022/DIADECOLOR23-09-2022 (2).jpeg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/DIADECOLOR23-09-2022/DIADECOLOR23-09-2022 (2).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/DIADECOLOR23-09-2022/DIADECOLOR23-09-2022 (8).jpeg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/DIADECOLOR23-09-2022/DIADECOLOR23-09-2022 (8).jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/DIADECOLOR23-09-2022/DIADECOLOR23-09-2022 (9).jpeg"><img alt="" src="images/placeholder.gif" data-src="images/GEI/DIADECOLOR23-09-2022/DIADECOLOR23-09-2022 (9).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/DIADECOLOR23-09-2022/DIADECOLOR23-09-2022 (10).jpeg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/DIADECOLOR23-09-2022/DIADECOLOR23-09-2022 (10).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/DIADECOLOR23-09-2022/DIADECOLOR23-09-2022 (11).jpeg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/DIADECOLOR23-09-2022/DIADECOLOR23-09-2022 (11).jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/DIADECOLOR23-09-2022/DIADECOLOR23-09-2022 (12).jpeg"><img alt="" src="images/placeholder.gif" data-src="images/GEI/DIADECOLOR23-09-2022/DIADECOLOR23-09-2022 (12).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/DIADECOLOR23-09-2022/DIADECOLOR23-09-2022 (13).jpeg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/DIADECOLOR23-09-2022/DIADECOLOR23-09-2022 (13).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/DIADECOLOR23-09-2022/DIADECOLOR23-09-2022 (14).jpeg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/DIADECOLOR23-09-2022/DIADECOLOR23-09-2022 (14).jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/DIADECOLOR23-09-2022/DIADECOLOR23-09-2022 (15).jpeg"><img alt="" src="images/placeholder.gif" data-src="images/GEI/DIADECOLOR23-09-2022/DIADECOLOR23-09-2022 (15).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/DIADECOLOR23-09-2022/DIADECOLOR23-09-2022 (16).jpeg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/DIADECOLOR23-09-2022/DIADECOLOR23-09-2022 (16).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/DIADECOLOR23-09-2022/DIADECOLOR23-09-2022 (17).jpeg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/DIADECOLOR23-09-2022/DIADECOLOR23-09-2022 (17).jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/DIADECOLOR23-09-2022/DIADECOLOR23-09-2022 (18).jpeg"><img alt="" src="images/placeholder.gif" data-src="images/GEI/DIADECOLOR23-09-2022/DIADECOLOR23-09-2022 (18).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/DIADECOLOR23-09-2022/DIADECOLOR23-09-2022 (19).jpeg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/DIADECOLOR23-09-2022/DIADECOLOR23-09-2022 (19).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/DIADECOLOR23-09-2022/DIADECOLOR23-09-2022 (20).jpeg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/DIADECOLOR23-09-2022/DIADECOLOR23-09-2022 (20).jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/DIADECOLOR23-09-2022/DIADECOLOR23-09-2022 (21).jpeg"><img alt="" src="images/placeholder.gif" data-src="images/GEI/DIADECOLOR23-09-2022/DIADECOLOR23-09-2022 (21).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/DIADECOLOR23-09-2022/DIADECOLOR23-09-2022 (22).jpeg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/DIADECOLOR23-09-2022/DIADECOLOR23-09-2022 (22).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/DIADECOLOR23-09-2022/DIADECOLOR23-09-2022 (23).jpeg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/DIADECOLOR23-09-2022/DIADECOLOR23-09-2022 (23).jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/DIADECOLOR23-09-2022/DIADECOLOR23-09-2022 (24).jpeg"><img alt="" src="images/placeholder.gif" data-src="images/GEI/DIADECOLOR23-09-2022/DIADECOLOR23-09-2022 (24).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/DIADECOLOR23-09-2022/DIADECOLOR23-09-2022 (25).jpeg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/DIADECOLOR23-09-2022/DIADECOLOR23-09-2022 (25).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/DIADECOLOR23-09-2022/DIADECOLOR23-09-2022 (26).jpeg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/DIADECOLOR23-09-2022/DIADECOLOR23-09-2022 (26).jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/DIADECOLOR23-09-2022/DIADECOLOR23-09-2022 (27).jpeg"><img alt="" src="images/placeholder.gif" data-src="images/GEI/DIADECOLOR23-09-2022/DIADECOLOR23-09-2022 (27).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/DIADECOLOR23-09-2022/DIADECOLOR23-09-2022 (28).jpeg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/DIADECOLOR23-09-2022/DIADECOLOR23-09-2022 (28).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/DIADECOLOR23-09-2022/DIADECOLOR23-09-2022 (29).jpeg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/DIADECOLOR23-09-2022/DIADECOLOR23-09-2022 (29).jpeg" class="image"></a>
</div>
      </div>
	   
	    
      <div class="clearfix visible-col3"></div>
   </div>
</div>
</div>
</div>
</div>
</div>
</div>
	<!--fin-->
	<!------31/01/2024
	<div id="wb_LayoutGrid12">
<div id="LayoutGrid12">
<div class="row">
	<div id="Article16" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Nuestros pequeños de Eduacion inicial celebrando las fistas Patrias </span>
   <div class="no-thumb"></div>
   <div class="blogdate">friday, November 12, 2021<br></div>
   <!--<span style="color:#000000;">01/08/2022<br>-->
   
   <!------31/01/2024
   
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Educación%20Inicial">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div class="col-1">
<div class="col-1-padding">
</div>
</div>
<div class="col-2">
<div id="wb_YouTube14" style="display:inline-block;width:100%;z-index:31;">
<iframe id="YouTube14" src="https://www.youtube.com/embed/iPLyT7VNO8E?rel=1&amp;autohide=0"></iframe>

</div>
</div>
<div class="col-3">
</div>
</div>
</div>
</div>
	
	
	<!--inicio-->
	<!------31/01/2024
			<div id="wb_LayoutGrid22">
<div id="LayoutGrid22">
<div class="row">
<div class="col-1">
<div id="Article16" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Metodología Aprendiendo-Jugando</span>
   <div class="no-thumb"></div>
   <div class="blogdate">friday, November 12, 2021<br></div>
   <!--<span style="color:#000000;">01/08/2022<br>-->
   
   <!------31/01/2024
   
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Educación%20Inicial">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery18" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery18">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/metodologia-aprendo-jugando.jpeg"><img alt="" src="images/placeholder.gif" data-src="images/GEI/metodologia-aprendo-jugando.jpeg" class="image"></a>
</div>
      </div>
      
	    
      <div class="clearfix visible-col3"></div>
   </div>
</div>
</div>
</div>
</div>
</div>
</div>
	<!--fin-->
	
	<!--inicio-->
	<!------31/01/2024
		<div id="wb_LayoutGrid22">
<div id="LayoutGrid22">
<div class="row">
<div class="col-1">
<div id="Article16" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Inaguración de Fiestas Patrias</span>
   <div class="no-thumb"></div>
   <div class="blogdate">friday, November 12, 2021<br></div>
   <span style="color:#000000;">01/08/2022<br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Educación%20Inicial">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery18" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery18">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/InaguracionFiestasPatriasEI01082022/inaguracionfiestaspatriasei3082022 (1).jpeg"><img alt="" src="images/placeholder.gif" data-src="images/GEI/InaguracionFiestasPatriasEI01082022/inaguracionfiestaspatriasei3082022 (1).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/InaguracionFiestasPatriasEI01082022/inaguracionfiestaspatriasei3082022 (2).jpeg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/InaguracionFiestasPatriasEI01082022/inaguracionfiestaspatriasei3082022 (2).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/InaguracionFiestasPatriasEI01082022/inaguracionfiestaspatriasei3082022 (3).jpeg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/InaguracionFiestasPatriasEI01082022/inaguracionfiestaspatriasei3082022 (3).jpeg" class="image"></a>
</div>
      </div>
      
	    
      <div class="clearfix visible-col3"></div>
   </div>
</div>
</div>
</div>
</div>
</div>
</div>
	<!--fin-->
	
	<!--inicio-->
	<!------31/01/2024
		<div id="wb_LayoutGrid22">
<div id="LayoutGrid22">
<div class="row">
<div class="col-1">
<div id="Article16" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Actividades con nuestros pequeños de I Nivel</span>
   <div class="no-thumb"></div>
   <div class="blogdate">friday, November 12, 2021<br></div>
   <span style="color:#000000;">20/07/2022<br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Educación%20Inicial">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery18" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery18">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/Actividades1nivel20072022/Actividades1nivel20072022 (1).jpg"><img alt="" src="images/placeholder.gif" data-src="images/GEI/Actividades1nivel20072022/Actividades1nivel20072022 (1).jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/Actividades1nivel20072022/Actividades1nivel20072022 (2).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/Actividades1nivel20072022/Actividades1nivel20072022 (2).jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/Actividades1nivel20072022/Actividades1nivel20072022 (3).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/Actividades1nivel20072022/Actividades1nivel20072022 (3).jpg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/Actividades1nivel20072022/Actividades1nivel20072022 (4).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/Actividades1nivel20072022/Actividades1nivel20072022 (4).jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/Actividades1nivel20072022/Actividades1nivel20072022 (5).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/Actividades1nivel20072022/Actividades1nivel20072022 (5).jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/Actividades1nivel20072022/Actividades1nivel20072022 (6).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/Actividades1nivel20072022/Actividades1nivel20072022 (6).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/Actividades1nivel20072022/Actividades1nivel20072022 (7).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/Actividades1nivel20072022/Actividades1nivel20072022 (7).jpg" class="image"></a>
</div>
      </div>
	    
      <div class="clearfix visible-col3"></div>
   </div>
</div>
</div>
</div>
</div>
</div>
</div>
	<!--fin-->
	
	<!--inicio-->
	<!------31/01/2024
		<div id="wb_LayoutGrid22">
<div id="LayoutGrid22">
<div class="row">
<div class="col-1">
<div id="Article16" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Celebrando el día de las Madres CEMB 2022</span>
   <div class="no-thumb"></div>
   <div class="blogdate">friday, November 12, 2021<br></div>
   <span style="color:#000000;">30/05/2022<br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Educación%20Inicial">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery18" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery18">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/DiaMadres2022EI/DiaMadresEI2022 (1).jpg"><img alt="" src="images/placeholder.gif" data-src="images/GEI/DiaMadres2022EI/DiaMadresEI2022 (1).jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/DiaMadres2022EI/DiaMadresEI2022 (2).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/DiaMadres2022EI/DiaMadresEI2022 (2).jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/DiaMadres2022EI/DiaMadresEI2022 (3).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/DiaMadres2022EI/DiaMadresEI2022 (3).jpg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/DiaMadres2022EI/DiaMadresEI2022 (4).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/DiaMadres2022EI/DiaMadresEI2022 (4).jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/DiaMadres2022EI/DiaMadresEI2022 (5).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/DiaMadres2022EI/DiaMadresEI2022 (5).jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/DiaMadres2022EI/DiaMadresEI2022 (6).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/DiaMadres2022EI/DiaMadresEI2022 (6).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/DiaMadres2022EI/DiaMadresEI2022 (7).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/DiaMadres2022EI/DiaMadresEI2022 (7).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/DiaMadres2022EI/DiaMadresEI2022 (8).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/DiaMadres2022EI/DiaMadresEI2022 (8).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/DiaMadres2022EI/DiaMadresEI2022 (9).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/DiaMadres2022EI/DiaMadresEI2022 (9).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/DiaMadres2022EI/DiaMadresEI2022 (10).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/DiaMadres2022EI/DiaMadresEI2022 (10).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/DiaMadres2022EI/DiaMadresEI2022 (11).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/DiaMadres2022EI/DiaMadresEI2022 (11).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/DiaMadres2022EI/DiaMadresEI2022 (12).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/DiaMadres2022EI/DiaMadresEI2022 (12).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/DiaMadres2022EI/DiaMadresEI2022 (13).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/DiaMadres2022EI/DiaMadresEI2022 (13).jpg" class="image"></a>
</div>
      </div>
	    <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/DiaMadres2022EI/DiaMadresEI2022 (14).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/DiaMadres2022EI/DiaMadresEI2022 (14).jpg" class="image"></a>
</div>
      </div>
	    <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/DiaMadres2022EI/DiaMadresEI2022 (15).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/DiaMadres2022EI/DiaMadresEI2022 (15).jpg" class="image"></a>
</div>
      </div>
	    <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/DiaMadres2022EI/DiaMadresEI2022 (16).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/DiaMadres2022EI/DiaMadresEI2022 (16).jpg" class="image"></a>
</div>
      </div>
	    <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/DiaMadres2022EI/DiaMadresEI2022 (17).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/DiaMadres2022EI/DiaMadresEI2022 (17).jpg" class="image"></a>
</div>
      </div>
	    <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/DiaMadres2022EI/DiaMadresEI2022 (18).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/DiaMadres2022EI/DiaMadresEI2022 (18).jpg" class="image"></a>
</div>
      </div>
	    <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/DiaMadres2022EI/DiaMadresEI2022 (19).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/DiaMadres2022EI/DiaMadresEI2022 (19).jpg" class="image"></a>
</div>
      </div>
	    <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/DiaMadres2022EI/DiaMadresEI2022 (20).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/DiaMadres2022EI/DiaMadresEI2022 (20).jpg" class="image"></a>
</div>
      </div>
	    <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/DiaMadres2022EI/DiaMadresEI2022 (21).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/DiaMadres2022EI/DiaMadresEI2022 (21).jpg" class="image"></a>
</div>
      </div>
	    <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/DiaMadres2022EI/DiaMadresEI2022 (22).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/DiaMadres2022EI/DiaMadresEI2022 (22).jpg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
   </div>
</div>
</div>
</div>
</div>
</div>
</div>
	<!--fin-->
	
	
	<!--inicio-->
	<!------31/01/2024
		<div id="wb_LayoutGrid22">
<div id="LayoutGrid22">
<div class="row">
<div class="col-1">
<div id="Article16" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Estudiantes y Docentes de Educación Inicial celebrando el 56 Aniversairo del Colegio</span>
   <div class="no-thumb"></div>
   <div class="blogdate">friday, November 12, 2021<br></div>
   <span style="color:#000000;">20/05/2022<br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Educación%20Inicial">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery18" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery18">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/Celebrando 56 aniversario EI 2022/Celebrando 56 aniversario EI 2022 (1).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/Celebrando 56 aniversario EI 2022/Celebrando 56 aniversario EI 2022 (1).jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/Celebrando 56 aniversario EI 2022/Celebrando 56 aniversario EI 2022 (2).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/Celebrando 56 aniversario EI 2022/Celebrando 56 aniversario EI 2022 (2).jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/Celebrando 56 aniversario EI 2022/Celebrando 56 aniversario EI 2022 (3).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/Celebrando 56 aniversario EI 2022/Celebrando 56 aniversario EI 2022 (3).jpg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/Celebrando 56 aniversario EI 2022/Celebrando 56 aniversario EI 2022 (4).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/Celebrando 56 aniversario EI 2022/Celebrando 56 aniversario EI 2022 (4).jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/Celebrando 56 aniversario EI 2022/Celebrando 56 aniversario EI 2022 (5).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/Celebrando 56 aniversario EI 2022/Celebrando 56 aniversario EI 2022 (5).jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/Celebrando 56 aniversario EI 2022/Celebrando 56 aniversario EI 2022 (6).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/Celebrando 56 aniversario EI 2022/Celebrando 56 aniversario EI 2022 (6).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/Celebrando 56 aniversario EI 2022/Celebrando 56 aniversario EI 2022 (7).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/Celebrando 56 aniversario EI 2022/Celebrando 56 aniversario EI 2022 (7).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/Celebrando 56 aniversario EI 2022/Celebrando 56 aniversario EI 2022 (8).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/Celebrando 56 aniversario EI 2022/Celebrando 56 aniversario EI 2022 (8).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/Celebrando 56 aniversario EI 2022/Celebrando 56 aniversario EI 2022 (9).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/Celebrando 56 aniversario EI 2022/Celebrando 56 aniversario EI 2022 (9).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/Celebrando 56 aniversario EI 2022/Celebrando 56 aniversario EI 2022 (10).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/Celebrando 56 aniversario EI 2022/Celebrando 56 aniversario EI 2022 (10).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/Celebrando 56 aniversario EI 2022/Celebrando 56 aniversario EI 2022 (11).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/Celebrando 56 aniversario EI 2022/Celebrando 56 aniversario EI 2022 (11).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/Celebrando 56 aniversario EI 2022/Celebrando 56 aniversario EI 2022 (12).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/Celebrando 56 aniversario EI 2022/Celebrando 56 aniversario EI 2022 (12).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/Celebrando 56 aniversario EI 2022/Celebrando 56 aniversario EI 2022 (13).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/Celebrando 56 aniversario EI 2022/Celebrando 56 aniversario EI 2022 (13).jpg" class="image"></a>
</div>
      </div>
	    <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/Celebrando 56 aniversario EI 2022/Celebrando 56 aniversario EI 2022 (14).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/Celebrando 56 aniversario EI 2022/Celebrando 56 aniversario EI 2022 (14).jpg" class="image"></a>
</div>
      </div>
	   
      <div class="clearfix visible-col3"></div>
   </div>
</div>
</div>
</div>
</div>
</div>
</div>
	<!--fin-->
	<!------31/01/2024
	<div id="wb_LayoutGrid22">
<div id="LayoutGrid22">
<div class="row">
<div class="col-1">
<div id="Article16" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Estudiantes de III nivel utilizando el Mimio en la clase de ciencias naturales</span>
   <div class="no-thumb"></div>
   <div class="blogdate">friday, November 12, 2021<br></div>
   <span style="color:#000000;">22/02/2022<br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Educación%20Inicial">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery18" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery18">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/3er-nivel-mimio-ccnn/3er-nivel-mimio-ccnn-2022 (1).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/3er-nivel-mimio-ccnn/3er-nivel-mimio-ccnn-2022 (1).jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/3er-nivel-mimio-ccnn/3er-nivel-mimio-ccnn-2022 (2).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/3er-nivel-mimio-ccnn/3er-nivel-mimio-ccnn-2022 (2).jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/3er-nivel-mimio-ccnn/3er-nivel-mimio-ccnn-2022 (3).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/3er-nivel-mimio-ccnn/3er-nivel-mimio-ccnn-2022 (3).jpg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/3er-nivel-mimio-ccnn/3er-nivel-mimio-ccnn-2022 (4).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/3er-nivel-mimio-ccnn/3er-nivel-mimio-ccnn-2022 (4).jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/3er-nivel-mimio-ccnn/3er-nivel-mimio-ccnn-2022 (5).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/3er-nivel-mimio-ccnn/3er-nivel-mimio-ccnn-2022 (5).jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/3er-nivel-mimio-ccnn/3er-nivel-mimio-ccnn-2022 (6).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/3er-nivel-mimio-ccnn/3er-nivel-mimio-ccnn-2022 (6).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/3er-nivel-mimio-ccnn/3er-nivel-mimio-ccnn-2022 (7).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/3er-nivel-mimio-ccnn/3er-nivel-mimio-ccnn-2022 (7).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/3er-nivel-mimio-ccnn/3er-nivel-mimio-ccnn-2022 (8).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/3er-nivel-mimio-ccnn/3er-nivel-mimio-ccnn-2022 (8).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/3er-nivel-mimio-ccnn/3er-nivel-mimio-ccnn-2022 (9).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/3er-nivel-mimio-ccnn/3er-nivel-mimio-ccnn-2022 (9).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/3er-nivel-mimio-ccnn/3er-nivel-mimio-ccnn-2022 (10).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/3er-nivel-mimio-ccnn/3er-nivel-mimio-ccnn-2022 (10).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/3er-nivel-mimio-ccnn/3er-nivel-mimio-ccnn-2022 (11).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/3er-nivel-mimio-ccnn/3er-nivel-mimio-ccnn-2022 (11).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/3er-nivel-mimio-ccnn/3er-nivel-mimio-ccnn-2022 (12).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/3er-nivel-mimio-ccnn/3er-nivel-mimio-ccnn-2022 (12).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/3er-nivel-mimio-ccnn/3er-nivel-mimio-ccnn-2022 (13).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/3er-nivel-mimio-ccnn/3er-nivel-mimio-ccnn-2022 (13).jpg" class="image"></a>
</div>
      </div>
	   
      <div class="clearfix visible-col3"></div>
   </div>
</div>
</div>
</div>
</div>
</div>
</div>
	<!--fin-->
	
	
<!-----	31/01/2024
	
	<div id="wb_LayoutGrid22">
<div id="LayoutGrid22">
<div class="row">
<div class="col-1">
<div id="Article16" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Bienvenida a nuestros pequeños de Educación Inicial</span>
   <div class="no-thumb"></div>
   <div class="blogdate">friday, November 12, 2021<br></div>
   <span style="color:#000000;">15/02/2022<br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Educación%20Inicial">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery18" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery18">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/Bienvenida Educacion Inicial/bienvenida-ei-2022 (1).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/Bienvenida Educacion Inicial/bienvenida-ei-2022 (1).jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/Bienvenida Educacion Inicial/bienvenida-ei-2022 (2).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/Bienvenida Educacion Inicial/bienvenida-ei-2022 (2).jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/Bienvenida Educacion Inicial/bienvenida-ei-2022 (3).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/Bienvenida Educacion Inicial/bienvenida-ei-2022 (3).jpg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/Bienvenida Educacion Inicial/bienvenida-ei-2022 (4).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/Bienvenida Educacion Inicial/bienvenida-ei-2022 (4).jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/Bienvenida Educacion Inicial/bienvenida-ei-2022 (5).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/Bienvenida Educacion Inicial/bienvenida-ei-2022 (5).jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/Bienvenida Educacion Inicial/bienvenida-ei-2022 (6).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/Bienvenida Educacion Inicial/bienvenida-ei-2022 (6).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/Bienvenida Educacion Inicial/bienvenida-ei-2022 (7).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/Bienvenida Educacion Inicial/bienvenida-ei-2022 (7).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/Bienvenida Educacion Inicial/bienvenida-ei-2022 (8).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/Bienvenida Educacion Inicial/bienvenida-ei-2022 (8).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/Bienvenida Educacion Inicial/bienvenida-ei-2022 (9).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/Bienvenida Educacion Inicial/bienvenida-ei-2022 (9).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/Bienvenida Educacion Inicial/bienvenida-ei-2022 (10).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/Bienvenida Educacion Inicial/bienvenida-ei-2022 (10).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/Bienvenida Educacion Inicial/bienvenida-ei-2022 (11).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/Bienvenida Educacion Inicial/bienvenida-ei-2022 (11).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/Bienvenida Educacion Inicial/bienvenida-ei-2022 (12).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/Bienvenida Educacion Inicial/bienvenida-ei-2022 (12).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/Bienvenida Educacion Inicial/bienvenida-ei-2022 (13).jpg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/Bienvenida Educacion Inicial/bienvenida-ei-2022 (13).jpg" class="image"></a>
</div>
      </div>
	   
      <div class="clearfix visible-col3"></div>
   </div>
</div>
</div>
</div>
</div>
</div>
</div>
	<!--fin-->

<!-------31/01/2024	
	<div id="wb_LayoutGrid22">
<div id="LayoutGrid22">
<div class="row">
<div class="col-1">

<div id="wb_PhotoGallery18" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery18">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/Agradecimineto3erNivelCEMB2021.jpeg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/Agradecimineto3erNivelCEMB2021.jpeg" class="image"></a>
</div>
      </div>
    
      
	   
      <div class="clearfix visible-col3"></div>
   </div>
</div>
</div>
</div>
</div>
</div>
</div>
	<!--fin-->
	
<!------31/01/2024	
	
<div id="wb_LayoutGrid22">
<div id="LayoutGrid22">
<div class="row">
<div class="col-1">
<div id="Article16" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Educación Inicial</span>
   <div class="no-thumb"></div>
   <div class="blogdate">friday, November 12, 2021<br></div>
   <span style="color:#000000;">12/11/2021<br>
<br>Artes para navidad por nuestros pequeños de Educación Inicial</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Educación%20Inicial">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery18" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery18">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/AdornosNavidenos2021/AdornosNavidenosCEMB2021 (1).jpeg" data-rel="PhotoGallery18"><img alt="" src="images/GEI/AdornosNavidenos2021/AdornosNavidenosCEMB2021 (1).jpeg" data-src="images/GEI/AdornosNavidenos2021/AdornosNavidenosCEMB2021 (1).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/AdornosNavidenos2021/AdornosNavidenosCEMB2021 (2).jpeg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/AdornosNavidenos2021/AdornosNavidenosCEMB2021 (2).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/AdornosNavidenos2021/AdornosNavidenosCEMB2021 (3).jpeg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/AdornosNavidenos2021/AdornosNavidenosCEMB2021 (3).jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/AdornosNavidenos2021/AdornosNavidenosCEMB2021 (4).jpeg.jpeg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/AdornosNavidenos2021/AdornosNavidenosCEMB2021 (4).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/AdornosNavidenos2021/AdornosNavidenosCEMB2021 (5).jpeg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/AdornosNavidenos2021/AdornosNavidenosCEMB2021 (5).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/AdornosNavidenos2021/AdornosNavidenosCEMB2021 (6).jpeg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/AdornosNavidenos2021/AdornosNavidenosCEMB2021 (6).jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/AdornosNavidenos2021/AdornosNavidenosCEMB2021 (7).jpeg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/AdornosNavidenos2021/AdornosNavidenosCEMB2021 (7).jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/AdornosNavidenos2021/AdornosNavidenosCEMB2021 (8).jpeg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/AdornosNavidenos2021/AdornosNavidenosCEMB2021 (8).jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/AdornosNavidenos2021/AdornosNavidenosCEMB2021 (9).jpeg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/AdornosNavidenos2021/AdornosNavidenosCEMB2021 (9).jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/AdornosNavidenos2021/AdornosNavidenosCEMB2021 (10).jpeg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/AdornosNavidenos2021/AdornosNavidenosCEMB2021 (10).jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/AdornosNavidenos2021/AdornosNavidenosCEMB2021 (11).jpeg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/AdornosNavidenos2021/AdornosNavidenosCEMB2021 (11).jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/AdornosNavidenos2021/AdornosNavidenosCEMB2021 (12).jpeg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/AdornosNavidenos2021/AdornosNavidenosCEMB2021 (12).jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/GEI/AdornosNavidenos2021/AdornosNavidenosCEMB2021 (13).jpeg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/GEI/AdornosNavidenos2021/AdornosNavidenosCEMB2021 (13).jpeg" class="image"></a>
</div>
      </div>
	   
      <div class="clearfix visible-col3"></div>
   </div>
</div>
</div>
</div>
</div>
</div>
</div>
	<!--fin-->
	
<!-----31/01/2024	
	
<div id="wb_LayoutGrid21">
<div id="LayoutGrid21">
<div class="row">
<div class="col-1">
<div id="Article16" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Educación Inicial</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Thursday, November 04, 2021<br></div>
   <span style="color:#000000;">04/11/2021<br>
<br>Transición de preescolar a primaria</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Educación%20Inicial">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery18" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery18">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/preescolar-a-primaria-2021/preescolar-a-primaria-2021 (1).jpeg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/preescolar-a-primaria-2021/preescolar-a-primaria-2021 (1).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/preescolar-a-primaria-2021/preescolar-a-primaria-2021 (2).jpeg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/preescolar-a-primaria-2021/preescolar-a-primaria-2021 (2).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/preescolar-a-primaria-2021/preescolar-a-primaria-2021 (3).jpeg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/preescolar-a-primaria-2021/preescolar-a-primaria-2021 (3).jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/preescolar-a-primaria-2021/preescolar-a-primaria-2021 (4).jpeg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/preescolar-a-primaria-2021/preescolar-a-primaria-2021 (4).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/preescolar-a-primaria-2021/preescolar-a-primaria-2021 (5).jpeg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/preescolar-a-primaria-2021/preescolar-a-primaria-2021 (5).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/preescolar-a-primaria-2021/preescolar-a-primaria-2021 (6).jpeg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/preescolar-a-primaria-2021/preescolar-a-primaria-2021 (6).jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/preescolar-a-primaria-2021/preescolar-a-primaria-2021 (7).jpeg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/preescolar-a-primaria-2021/preescolar-a-primaria-2021 (7).jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/preescolar-a-primaria-2021/preescolar-a-primaria-2021 (8).jpeg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/preescolar-a-primaria-2021/preescolar-a-primaria-2021 (8).jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/preescolar-a-primaria-2021/preescolar-a-primaria-2021 (9).jpeg" data-rel="PhotoGallery18"><img alt="" src="images/placeholder.gif" data-src="images/preescolar-a-primaria-2021/preescolar-a-primaria-2021 (9).jpeg" class="image"></a>
</div>
      </div>
	   
      <div class="clearfix visible-col3"></div>
   </div>
</div>
</div>
</div>
</div>
</div>
</div>
	<!--fin-->
	
<!-----31/01/2024
	
<div id="wb_LayoutGrid20">
<div id="LayoutGrid20">
<div class="row">
<div class="col-1">
<div id="Article15" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Educación Inicial</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Thursday, September 23, 2021<br></div>
   <span style="color:#000000;">05/10/2021<br>
<br>
Lenguaje. Cristóbal Colón y el descubrimiento de América</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Educación%20Inicial">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery17" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery17">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/Descubrimiento de america (1).jpg" data-rel="PhotoGallery17"><img alt="" src="images/placeholder.gif" data-src="images/Descubrimiento de america (1).jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/Descubrimiento de america (2).jpg" data-rel="PhotoGallery17"><img alt="" src="images/placeholder.gif" data-src="images/Descubrimiento de america (2).jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/Descubrimiento de america (3).jpg" data-rel="PhotoGallery17"><img alt="" src="images/placeholder.gif" data-src="images/Descubrimiento de america (3).jpg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/Descubrimiento de america (4).jpg" data-rel="PhotoGallery17"><img alt="" src="images/placeholder.gif" data-src="images/Descubrimiento de america (4).jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/Descubrimiento de america (5).jpg" data-rel="PhotoGallery17"><img alt="" src="images/placeholder.gif" data-src="images/Descubrimiento de america (5).jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/Descubrimiento de america (6).jpg" data-rel="PhotoGallery17"><img alt="" src="images/placeholder.gif" data-src="images/Descubrimiento de america (6).jpg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
   </div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid19">
<div id="LayoutGrid19">
<div class="row">
<div class="col-1">
<div id="Article14" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Trajes Tipicos</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Friday, October 01, 2021<br></div>
   <span style="color:#000000;"><br>
01/10/2021</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Trajes%20Tipicos">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/trajestipicos01102021 (2).jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/trajestipicos01102021 (2).jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/trajestipicos01102021 (6).jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/trajestipicos01102021 (6).jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/trajestipicos01102021 (8).jpg" data-rel="PhotoGallery16"><img alt="" src="images/placeholder.gif" data-src="images/trajestipicos01102021 (8).jpg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
   </div>
</div>
</div>
<a id="Button2" href="./TrajesTipicosEI01102021.php" style="display:inline-block;width:96px;height:25px;z-index:8;">Mas..</a>
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid18">
<div id="LayoutGrid18">
<div class="row">
<div class="col-1">
<div id="Article13" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Actividad Arrugar</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Monday, September 27, 2021<br></div>
   <span style="color:#000000;"><br>
27/09/2021</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Actividad%20Arrugar">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery15" style="display:inline-block;width:100%;z-index:10;">
<div id="PhotoGallery15">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/arrugar27092021 (1).jpeg" data-rel="PhotoGallery15"><img alt="" src="images/placeholder.gif" data-src="images/arrugar27092021 (1).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/arrugar27092021 (3).jpeg" data-rel="PhotoGallery15"><img alt="" src="images/placeholder.gif" data-src="images/arrugar27092021 (3).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/arrugar27092021 (4).jpeg" data-rel="PhotoGallery15"><img alt="" src="images/placeholder.gif" data-src="images/arrugar27092021 (4).jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
   </div>
</div>
</div>
<a id="Button1" href="./ArrugarEI27092021.php" style="display:inline-block;width:96px;height:25px;z-index:11;">Mas..</a>
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid17">
<div id="LayoutGrid17">
<div class="row">
<div class="col-1">
<div id="Article12" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Educación Inicial</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Thursday, September 23, 2021<br></div>
   <span style="color:#000000;">23/09/2021<br>
<br>
Nuestros pequeños experimentando </span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Educación%20Inicial">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery14" style="display:inline-block;width:100%;z-index:13;">
<div id="PhotoGallery14">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/elava23092021 (1).jpg" data-rel="PhotoGallery14"><img alt="" src="images/placeholder.gif" data-src="images/elava23092021 (1).jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/elava23092021 (2).jpg" data-rel="PhotoGallery14"><img alt="" src="images/placeholder.gif" data-src="images/elava23092021 (2).jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/elava23092021 (3).jpg" data-rel="PhotoGallery14"><img alt="" src="images/placeholder.gif" data-src="images/elava23092021 (3).jpg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/elava23092021 (4).jpg" data-rel="PhotoGallery14"><img alt="" src="images/placeholder.gif" data-src="images/elava23092021 (4).jpg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
   </div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid16">
<div id="LayoutGrid16">
<div class="row">
<div class="col-1">
<div id="Article11" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Nuestros pequeños en trajes tipico</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Friday, September 10, 2021<br></div>
   <span style="color:#000000;"><br>
10/09/2021</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Nuestros%20pequeños%20en%20trajes%20tipico">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery13" style="display:inline-block;width:100%;z-index:15;">
<div id="PhotoGallery13">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/trajesFolklor (1).jpg" data-rel="PhotoGallery13"><img alt="" src="images/placeholder.gif" data-src="images/trajesFolklor (1).jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/trajesFolklor (2).jpg" data-rel="PhotoGallery13"><img alt="" src="images/placeholder.gif" data-src="images/trajesFolklor (2).jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/trajesFolklor (3).jpg" data-rel="PhotoGallery13"><img alt="" src="images/placeholder.gif" data-src="images/trajesFolklor (3).jpg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/trajesFolklor (4).jpg" data-rel="PhotoGallery13"><img alt="" src="images/placeholder.gif" data-src="images/trajesFolklor (4).jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/trajesFolklor (5).jpg" data-rel="PhotoGallery13"><img alt="" src="images/placeholder.gif" data-src="images/trajesFolklor (5).jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/trajesFolklor (6).jpg" data-rel="PhotoGallery13"><img alt="" src="images/placeholder.gif" data-src="images/trajesFolklor (6).jpg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
   </div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid15">
<div id="LayoutGrid15">
<div class="row">
<div class="col-1">
<div id="Article10" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Experimentos de Ciencia</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Friday, September 10, 2021<br></div>
   <span style="color:#000000;"><br>
10/09/2021</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Experimentos%20de%20Ciencia">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery12" style="display:inline-block;width:100%;z-index:17;">
<div id="PhotoGallery12">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/experimentociencias10092021 (1).jpg" data-rel="PhotoGallery12"><img alt="" src="images/placeholder.gif" data-src="images/experimentociencias10092021 (1).jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/experimentociencias10092021 (2).jpg" data-rel="PhotoGallery12"><img alt="" src="images/placeholder.gif" data-src="images/experimentociencias10092021 (2).jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/experimentociencias10092021 (3).jpg" data-rel="PhotoGallery12"><img alt="" src="images/placeholder.gif" data-src="images/experimentociencias10092021 (3).jpg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
   </div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid14">
<div id="LayoutGrid14">
<div class="row">
<div class="col-1">
<div id="Article9" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Clase de Grafismo II Nivel</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Tuesday, August 31, 2021<br></div>
   <span style="color:#000000;"><br>
31/08/2021</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Clase%20de%20Grafismo%20II%20Nivel">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery11" style="display:inline-block;width:100%;z-index:19;">
<div id="PhotoGallery11">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/Grafismo2nivel31082021 (2).jpg" data-rel="PhotoGallery11"><img alt="" src="images/placeholder.gif" data-src="images/Grafismo2nivel31082021 (2).jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/Grafismo2nivel31082021 (3).jpg" data-rel="PhotoGallery11"><img alt="" src="images/placeholder.gif" data-src="images/Grafismo2nivel31082021 (3).jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/Grafismo2nivel31082021 (4).jpg" data-rel="PhotoGallery11"><img alt="" src="images/placeholder.gif" data-src="images/Grafismo2nivel31082021 (4).jpg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
   </div>
</div>
</div>
<a id="Button5" href="./Grafismo2N31082021.php" style="display:inline-block;width:96px;height:25px;z-index:20;">Mas..</a>
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid13">
<div id="LayoutGrid13">
<div class="row">
<div class="col-1">
<div id="Article8" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Educación Inicial</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Thursday, August 26, 2021<br></div>
   <span style="color:#000000;">26/08/2021<br>
<br>
Entrenamiento en estrategias para mejorar la conducta</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Educación%20Inicial">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery10" style="display:inline-block;width:100%;z-index:22;">
<div id="PhotoGallery10">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/EMejorasConductas (1).jpeg" data-rel="PhotoGallery10"><img alt="" src="images/placeholder.gif" data-src="images/EMejorasConductas (1).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/EMejorasConductas (2).jpeg" data-rel="PhotoGallery10"><img alt="" src="images/placeholder.gif" data-src="images/EMejorasConductas (2).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/EMejorasConductas (3).jpeg" data-rel="PhotoGallery10"><img alt="" src="images/placeholder.gif" data-src="images/EMejorasConductas (3).jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
   </div>
</div>
</div>
</div>
</div>
</div>
</div>

<!-----31/01/2024

<div id="wb_LayoutGrid8">
<div id="LayoutGrid8">
<div class="row">
<div class="col-1">
<div id="Article7" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Educación Inicial</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Thursday, August 12, 2021<br></div>
   <span style="color:#000000;">13/08/2021<br>
<br>
Nuestros pequeños siempre aprendiendo </span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Educación%20Inicial">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery9" style="display:inline-block;width:100%;z-index:24;">
<div id="PhotoGallery9">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/IMG-20210813-WA0029.jpg" data-rel="PhotoGallery9"><img alt="" src="images/IMG-20210813-WA0029.jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/IMG-20210813-WA0030.jpg" data-rel="PhotoGallery9"><img alt="" src="images/IMG-20210813-WA0030.jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/IMG-20210813-WA0031.jpg" data-rel="PhotoGallery9"><img alt="" src="images/IMG-20210813-WA0031.jpg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/IMG-20210813-WA0032.jpg" data-rel="PhotoGallery9"><img alt="" src="images/IMG-20210813-WA0032.jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/IMG-20210813-WA0033.jpg" data-rel="PhotoGallery9"><img alt="" src="images/IMG-20210813-WA0033.jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/IMG-20210813-WA0034.jpg" data-rel="PhotoGallery9"><img alt="" src="images/IMG-20210813-WA0034.jpg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/IMG-20210813-WA0035.jpg" data-rel="PhotoGallery9"><img alt="" src="images/IMG-20210813-WA0035.jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/IMG-20210813-WA0036.jpg" data-rel="PhotoGallery9"><img alt="" src="images/IMG-20210813-WA0036.jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/IMG-20210813-WA0037.jpg" data-rel="PhotoGallery9"><img alt="" src="images/IMG-20210813-WA0037.jpg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/IMG-20210813-WA0038.jpg" data-rel="PhotoGallery9"><img alt="" src="images/IMG-20210813-WA0038.jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/IMG-20210813-WA0039.jpg" data-rel="PhotoGallery9"><img alt="" src="images/IMG-20210813-WA0039.jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/IMG-20210813-WA0040.jpg" data-rel="PhotoGallery9"><img alt="" src="images/IMG-20210813-WA0040.jpg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/IMG-20210813-WA0041.jpg" data-rel="PhotoGallery9"><img alt="" src="images/IMG-20210813-WA0041.jpg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
   </div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid7">
<div id="LayoutGrid7">
<div class="row">
<div class="col-1">
<div id="Article6" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Educación Inicial</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Thursday, August 12, 2021<br></div>
   <span style="color:#000000;">12/08/2021<br>
<br>
Momentos con nuestros pequeños de Educación Inicial </span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Educación%20Inicial">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery8" style="display:inline-block;width:100%;z-index:26;">
<div id="PhotoGallery8">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/IMG-20210812-WA0024.jpg" data-rel="PhotoGallery8"><img alt="" src="images/IMG-20210812-WA0024.jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/IMG-20210812-WA0025.jpg" data-rel="PhotoGallery8"><img alt="" src="images/IMG-20210812-WA0025.jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/IMG-20210812-WA0026.jpg" data-rel="PhotoGallery8"><img alt="" src="images/IMG-20210812-WA0026.jpg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/IMG-20210812-WA0027.jpg" data-rel="PhotoGallery8"><img alt="" src="images/IMG-20210812-WA0027.jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/IMG-20210812-WA0028.jpg" data-rel="PhotoGallery8"><img alt="" src="images/IMG-20210812-WA0028.jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/IMG-20210812-WA0029.jpg" data-rel="PhotoGallery8"><img alt="" src="images/IMG-20210812-WA0029.jpg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/IMG-20210812-WA0030.jpg" data-rel="PhotoGallery8"><img alt="" src="images/IMG-20210812-WA0030.jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/IMG-20210812-WA0031.jpg" data-rel="PhotoGallery8"><img alt="" src="images/IMG-20210812-WA0031.jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/IMG-20210812-WA0032.jpg" data-rel="PhotoGallery8"><img alt="" src="images/IMG-20210812-WA0032.jpg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/IMG-20210812-WA0033.jpg" data-rel="PhotoGallery8"><img alt="" src="images/IMG-20210812-WA0033.jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/IMG-20210812-WA0034.jpg" data-rel="PhotoGallery8"><img alt="" src="images/IMG-20210812-WA0034.jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/IMG-20210812-WA0035.jpg" data-rel="PhotoGallery8"><img alt="" src="images/IMG-20210812-WA0035.jpg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/IMG-20210812-WA0036.jpg" data-rel="PhotoGallery8"><img alt="" src="images/IMG-20210812-WA0036.jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/IMG-20210812-WA0037.jpg" data-rel="PhotoGallery8"><img alt="" src="images/IMG-20210812-WA0037.jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/IMG-20210812-WA0038.jpg" data-rel="PhotoGallery8"><img alt="" src="images/IMG-20210812-WA0038.jpg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/IMG-20210812-WA0039.jpg" data-rel="PhotoGallery8"><img alt="" src="images/IMG-20210812-WA0039.jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/IMG-20210812-WA0040.jpg" data-rel="PhotoGallery8"><img alt="" src="images/IMG-20210812-WA0040.jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/IMG-20210812-WA0041.jpg" data-rel="PhotoGallery8"><img alt="" src="images/IMG-20210812-WA0041.jpg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/IMG-20210812-WA0042.jpg" data-rel="PhotoGallery8"><img alt="" src="images/IMG-20210812-WA0042.jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/IMG-20210812-WA0043.jpg" data-rel="PhotoGallery8"><img alt="" src="images/IMG-20210812-WA0043.jpg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
   </div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid6">
<div id="LayoutGrid6">
<div class="row">
<div class="col-1">
<div id="Article4" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Medios de Comunicación</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Tuesday, July 20, 2021<br></div>
   <span style="color:#000000;"><br>
Nuestros pequeños de Educación Inicial Mostrando sus trabajos acerca de los medios de comunicación</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Medios%20de%20Comunicación">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery7" style="display:inline-block;width:100%;z-index:28;">
<div id="PhotoGallery7">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/EI-MC20072021 (1).jpeg" data-rel="PhotoGallery7"><img alt="" src="images/EI-MC20072021 (1).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/EI-MC20072021 (2).jpeg" data-rel="PhotoGallery7"><img alt="" src="images/EI-MC20072021 (2).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/EI-MC20072021 (3).jpeg" data-rel="PhotoGallery7"><img alt="" src="images/EI-MC20072021 (3).jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/EI-MC20072021 (4).jpeg" data-rel="PhotoGallery7"><img alt="" src="images/EI-MC20072021 (4).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/EI-MC20072021 (5).jpeg" data-rel="PhotoGallery7"><img alt="" src="images/EI-MC20072021 (5).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/EI-MC20072021 (6).jpeg" data-rel="PhotoGallery7"><img alt="" src="images/EI-MC20072021 (6).jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/EI-MC20072021 (7).jpeg" data-rel="PhotoGallery7"><img alt="" src="images/EI-MC20072021 (7).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/EI-MC20072021 (8).jpeg" data-rel="PhotoGallery7"><img alt="" src="images/EI-MC20072021 (8).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/EI-MC20072021 (9).jpeg" data-rel="PhotoGallery7"><img alt="" src="images/EI-MC20072021 (9).jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/EI-MC20072021 (10).jpeg" data-rel="PhotoGallery7"><img alt="" src="images/EI-MC20072021 (10).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/EI-MC20072021 (11).jpeg" data-rel="PhotoGallery7"><img alt="" src="images/EI-MC20072021 (11).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/EI-MC20072021 (12).jpeg" data-rel="PhotoGallery7"><img alt="" src="images/EI-MC20072021 (12).jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/EI-MC20072021 (13).jpeg" data-rel="PhotoGallery7"><img alt="" src="images/EI-MC20072021 (13).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/EI-MC20072021 (14).jpeg" data-rel="PhotoGallery7"><img alt="" src="images/EI-MC20072021 (14).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/EI-MC20072021 (15).jpeg" data-rel="PhotoGallery7"><img alt="" src="images/EI-MC20072021 (15).jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/EI-MC20072021 (16).jpeg" data-rel="PhotoGallery7"><img alt="" src="images/EI-MC20072021 (16).jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
   </div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid5">
<div id="LayoutGrid5">
<div class="row">
<div class="col-1">
<div id="Article5" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Taller de Educación Inicial</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Tuesday, June 29, 2021<br></div>
   <span style="color:#000000;">El día de hoy 29 de junio maestros de Educación Inicial recibieron taller tecnologico.</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Taller%20de%20Educación%20Inicial">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery5" style="display:inline-block;width:100%;z-index:30;">
<div id="PhotoGallery5">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/tallerEI29062021 (1).jpg" data-rel="PhotoGallery5"><img alt="" src="images/tallerEI29062021 (1).jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/tallerEI29062021 (2).jpg" data-rel="PhotoGallery5"><img alt="" src="images/tallerEI29062021 (2).jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/tallerEI29062021 (3).jpg" data-rel="PhotoGallery5"><img alt="" src="images/tallerEI29062021 (3).jpg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/tallerEI29062021 (4).jpg" data-rel="PhotoGallery5"><img alt="" src="images/tallerEI29062021 (4).jpg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
   </div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid9">
<div id="LayoutGrid9">
<div class="row">
<div class="col-1">
<div id="Article3" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Día de las Madres</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Thursday, April 22, 2021<br></div>
   <br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Día%20de%20las%20Madres">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery6" style="display:inline-block;width:100%;z-index:39;">
<div id="PhotoGallery6">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/motherdayGI-2021 (1).jpeg" data-rel="PhotoGallery6"><img alt="" src="images/motherdayGI-2021 (1).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/motherdayGI-2021 (2).jpeg" data-rel="PhotoGallery6"><img alt="" src="images/motherdayGI-2021 (2).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/motherdayGI-2021 (3).jpeg" data-rel="PhotoGallery6"><img alt="" src="images/motherdayGI-2021 (3).jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/motherdayGI-2021 (4).jpeg" data-rel="PhotoGallery6"><img alt="" src="images/motherdayGI-2021 (4).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/motherdayGI-2021 (5).jpeg" data-rel="PhotoGallery6"><img alt="" src="images/motherdayGI-2021 (5).jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
   </div>
</div>
</div>
<div id="wb_LayoutGrid12">
<div id="LayoutGrid12">
<div class="row">
<div class="col-1">
<div class="col-1-padding">
</div>
</div>
<div class="col-2">
<div id="wb_YouTube14" style="display:inline-block;width:100%;z-index:31;">
<iframe id="YouTube14" src="https://www.youtube.com/embed/RgjNrAjJ2gY?rel=1&amp;autohide=0"></iframe>

</div>
</div>
<div class="col-3">
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid11">
<div id="LayoutGrid11">
<div class="row">
<div class="col-1">
<div class="col-1-padding">
<div id="wb_YouTube11" style="display:inline-block;width:100%;z-index:32;">
<iframe id="YouTube11" src="https://www.youtube.com/embed/0Z1E0w6Gyfs?rel=1&amp;autohide=0"></iframe>

</div>
</div>
</div>
<div class="col-2">
<div id="wb_YouTube12" style="display:inline-block;width:100%;z-index:33;">
<iframe id="YouTube12" src="https://www.youtube.com/embed/GQb-GZbFZhA?rel=1&amp;autohide=0"></iframe>

</div>
</div>
<div class="col-3">
<div id="wb_YouTube13" style="display:inline-block;width:100%;z-index:34;">
<iframe id="YouTube13" src="https://www.youtube.com/embed/ArCAaoVEpGk?rel=1&amp;autohide=0"></iframe>

</div>
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid10">
<div id="LayoutGrid10">
<div class="row">
<div class="col-1">
<div class="col-1-padding">
<div id="wb_YouTube7" style="display:inline-block;width:100%;z-index:35;">
<iframe id="YouTube7" src="https://www.youtube.com/embed/Er6Z8ohEY9g?rel=1&amp;autohide=0"></iframe>

</div>
</div>
</div>
<div class="col-2">
<div id="wb_YouTube9" style="display:inline-block;width:100%;z-index:36;">
<iframe id="YouTube9" src="https://www.youtube.com/embed/QMF8CvzIYT4?rel=1&amp;autohide=0"></iframe>

</div>
</div>
<div class="col-3">
<div id="wb_YouTube10" style="display:inline-block;width:100%;z-index:37;">
<iframe id="YouTube10" src="https://www.youtube.com/embed/w-Be-QkX5nY?rel=1&amp;autohide=0"></iframe>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid4">
<div id="LayoutGrid4">
<div class="row">
<div class="col-1">
<div id="Article2" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Presentación Día del Libro</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Friday, March 05, 2021<br></div>
   <span style="color:#000080;"><br>
</span><span style="background-color:#FFFFFF;color:#000080;">Presentación de padres de familia de I Nivel en celebración del día del libro.</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Presentación%20Día%20del%20Libro">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery4" style="display:inline-block;width:100%;z-index:44;">
<div id="PhotoGallery4">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/DiadeLibro23042021 (1).jpeg" data-rel="PhotoGallery4"><img alt="" src="images/DiadeLibro23042021 (1).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DiadeLibro23042021 (2).jpeg" data-rel="PhotoGallery4"><img alt="" src="images/DiadeLibro23042021 (2).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DiadeLibro23042021 (3).jpeg" data-rel="PhotoGallery4"><img alt="" src="images/DiadeLibro23042021 (3).jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DiadeLibro23042021 (4).jpeg" data-rel="PhotoGallery4"><img alt="" src="images/DiadeLibro23042021 (4).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DiadeLibro23042021 (5).jpeg" data-rel="PhotoGallery4"><img alt="" src="images/DiadeLibro23042021 (5).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DiadeLibro23042021 (6).jpeg" data-rel="PhotoGallery4"><img alt="" src="images/DiadeLibro23042021 (6).jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DiadeLibro23042021 (7).jpeg" data-rel="PhotoGallery4"><img alt="" src="images/DiadeLibro23042021 (7).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DiadeLibro23042021 (8).jpeg" data-rel="PhotoGallery4"><img alt="" src="images/DiadeLibro23042021 (8).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DiadeLibro23042021 (9).jpeg" data-rel="PhotoGallery4"><img alt="" src="images/DiadeLibro23042021 (9).jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DiadeLibro23042021 (10).jpeg" data-rel="PhotoGallery4"><img alt="" src="images/DiadeLibro23042021 (10).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DiadeLibro23042021 (11).jpeg" data-rel="PhotoGallery4"><img alt="" src="images/DiadeLibro23042021 (11).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DiadeLibro23042021 (12).jpeg" data-rel="PhotoGallery4"><img alt="" src="images/DiadeLibro23042021 (12).jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DiadeLibro23042021 (13).jpeg" data-rel="PhotoGallery4"><img alt="" src="images/DiadeLibro23042021 (13).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DiadeLibro23042021 (14).jpeg" data-rel="PhotoGallery4"><img alt="" src="images/DiadeLibro23042021 (14).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DiadeLibro23042021 (15).jpeg" data-rel="PhotoGallery4"><img alt="" src="images/DiadeLibro23042021 (15).jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
   </div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid3">
<div id="LayoutGrid3">
<div class="row">
<div class="col-1">
<div id="Article1" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">“En camino hacia la Pascua”</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Friday, March 05, 2021<br></div>
   <span style="color:#000080;"><br>
La cuaresma es un tiempo de oración, ayuno y penitencia, son 40 días para crecer en el amor de Dios y del prójimo; cada viernes nos acercamos a conmemorar la vida, pasión y muerte de nuestro Señor Jesucristo, tiempo que nos prepara a la gran fiesta de la Pascua.<br>
<br>
Como Católicos Cristianos hemos fortalecido nuestra fe en compañía de nuestros estudiantes con la vivencia del viacrusis, sembrando en los más pequeños la semilla del amor y la esperanza en un acto muy significativo donde cada nivel participo y se integró a las actividades.<br>
<br>
Nuestra actividad religiosa estuvo llena de amor, fe y esperanza.</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=&#8220;En%20camino%20hacia%20la%20Pascua&#8221;">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery3" style="display:inline-block;width:100%;z-index:46;">
<div id="PhotoGallery3">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/encuentro-con-cristo-05032021 (1).jpeg" data-rel="PhotoGallery3"><img alt="" src="images/encuentro-con-cristo-05032021 (1).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/encuentro-con-cristo-05032021 (2).jpeg" data-rel="PhotoGallery3"><img alt="" src="images/encuentro-con-cristo-05032021 (2).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/encuentro-con-cristo-05032021 (3).jpeg" data-rel="PhotoGallery3"><img alt="" src="images/encuentro-con-cristo-05032021 (3).jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/encuentro-con-cristo-05032021 (4).jpeg" data-rel="PhotoGallery3"><img alt="" src="images/encuentro-con-cristo-05032021 (4).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/encuentro-con-cristo-05032021 (5).jpeg" data-rel="PhotoGallery3"><img alt="" src="images/encuentro-con-cristo-05032021 (5).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/encuentro-con-cristo-05032021 (6).jpeg" data-rel="PhotoGallery3"><img alt="" src="images/encuentro-con-cristo-05032021 (6).jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/encuentro-con-cristo-05032021 (7).jpeg" data-rel="PhotoGallery3"><img alt="" src="images/encuentro-con-cristo-05032021 (7).jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
   </div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid2">
<div id="LayoutGrid2">
<div class="row">
<div class="col-1">
<div id="wb_Heading3" style="display:inline-block;width:100%;z-index:47;">
<h6 id="Heading3">Docentes de Educación Inicial celebrando el día del amor y la amistad</h6>
</div>
<div id="wb_PhotoGallery2" style="display:inline-block;width:100%;z-index:48;">
<div id="PhotoGallery2">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/celebrando-el-amor-y amistad-16022021 (1).jpeg" data-rel="PhotoGallery2"><img alt="" src="images/celebrando-el-amor-y amistad-16022021 (1).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/celebrando-el-amor-y amistad-16022021 (2).jpeg" data-rel="PhotoGallery2"><img alt="" src="images/celebrando-el-amor-y amistad-16022021 (2).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/celebrando-el-amor-y amistad-16022021 (3).jpeg" data-rel="PhotoGallery2"><img alt="" src="images/celebrando-el-amor-y amistad-16022021 (3).jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/celebrando-el-amor-y amistad-16022021 (4).jpeg" data-rel="PhotoGallery2"><img alt="" src="images/celebrando-el-amor-y amistad-16022021 (4).jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
   </div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid1">
<div id="LayoutGrid1-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>
<div id="LayoutGrid1">
<div class="row">
<div class="col-1">
<div id="wb_PhotoGallery1" style="display:inline-block;width:100%;z-index:49;">
<div id="PhotoGallery1">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gei (1).jpeg" data-rel="PhotoGallery1"><img alt="" src="images/gei (1).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gei (2).jpeg" data-rel="PhotoGallery1"><img alt="" src="images/gei (2).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gei (3).jpeg" data-rel="PhotoGallery1"><img alt="" src="images/gei (3).jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
   </div>
</div>
</div>
</div>
</div>
</div>
</div>
31/01/2024------->

<div id="wb_Footer">
<div id="Footer">
<div class="row">
<div class="col-1">
<div id="wb_FontAwesomeIcon3" style="display:inline-block;width:40px;height:40px;text-align:center;z-index:50;">
<a href="https://www.facebook.com/cemanticaberio" target="_blank"><div id="FontAwesomeIcon3"><i class="fa fa-facebook"></i></div></a>
</div>
<div id="wb_FontAwesomeIcon11" style="display:inline-block;width:40px;height:40px;text-align:center;z-index:51;">
<a href="https://www.youtube.com/channel/UCAhJcrp_RsEv7Kz6uIQGPhg" target="_blank" title="Canal CEMB"><div id="FontAwesomeIcon11"><i class="fa fa-youtube"></i></div></a>
</div>
<div id="wb_IconFont1" style="display:inline-block;width:40px;height:40px;text-align:center;z-index:52;">
<a href="https://www.youtube.com/channel/UCwOuGJLlY5TBDs2xTcmWMPw" target="_blank" title="Canal Educacion Inicial"><div id="IconFont1"><i class="fa fa-youtube-play"></i></div></a>
</div>
<div id="wb_Text17">
<span style="color:#FFFFFF;font-family:Arial;font-size:12px;line-height:20px;">Dirección:<br></span><span style="color:#FFFFFF;font-family:Arial;font-size:12px;line-height:15px;">Km 132 Carretera a Somotillo. Chinandega.<br></span><span style="color:#FFFFFF;font-family:Arial;font-size:12px;line-height:20px;">Teléfono:<br>505-2341-2923<br>E-mail:<br></span><span style="color:#FFFFFF;font-family:Arial;font-size:12px;line-height:15px;">m.callejas@manticaberio.edu.ni</span>
</div>
</div>
</div>
</div>
</div>
<div id="wb_copyright">
<div id="copyright">
<div class="row">
<div class="col-1">
<div id="wb_Text12">
<span style="color:#FFFFFF;font-family:Arial;font-size:13px;">Copyright © CEMB 2021. All right reserved. </span>
</div>
<!-- POPUP -->
<div id="Html2" style="display:none;width:35px;height:24px;z-index:55">
<div class="modal" id="window-notice">
    <div class="content">
        <div class="content-text"><a href="https://youtu.be/d_hLZyJt48E">
<img src="http://www.manticaberio.edu.ni/assets/avisomatricula2021-640x480.jpg" width="100%"/></a>
          </div>
        <button class="btncerrar">
        <span>Cerrar</span>
        </button>
    </div>
</div>



<script>
    $(document).ready(function(){
	
	$(".modal").fadeIn();
	
	$(".btncerrar").click(function(){
		
		$(".modal").fadeOut(300);
		
	});

});
</script></div>
</div>
</div>
</div>
</div>
</body>
</html>