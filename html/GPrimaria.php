<!doctype html>
<html lang="es-ni">
<head>
<meta charset="utf-8">
<title>CEMB</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="insignia2_small.png" rel="icon" sizes="150x150" type="image/png">
<link href="font-awesome.min.css" rel="stylesheet">
<link href="CEMB.css" rel="stylesheet">
<link href="GPrimaria.css" rel="stylesheet">
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
   $("a[data-rel='PhotoGallery3']").attr('rel', 'PhotoGallery3');
   $("a[rel^='PhotoGallery3']").fancybox({});
   $("a[data-rel='PhotoGallery1']").attr('rel', 'PhotoGallery1');
   $("a[rel^='PhotoGallery1']").fancybox({});
   $("a[data-rel='PhotoGallery2']").attr('rel', 'PhotoGallery2');
   $("a[rel^='PhotoGallery2']").fancybox({});
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
<li class="nav-item"><a href="./Informatica.html" class="nav-link">Informatica</a></li>
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
<li class="nav-item"><a href="./GPrimaria.php" class="nav-link active">Primaria</a></li>
<li class="nav-item"><a href="./GSecundaria.php" class="nav-link">Secundaria</a></li>
<li class="nav-item"><a href="./GPApoyo.php" class="nav-link">Personal de Apoyo</a></li>
<li class="nav-item"><a href="./GPadresFamilia.php" class="nav-link">Padres de Familia</a></li>
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
<h1 id="Heading2">Primaria</h1>
</div>
</div>
</div>
</div>

<!--inicio 10/11/2025-->
	<div id="wb_LayoutGrid4">
		<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>	
	
	
<div id="wb_LayoutGrid7">
<div id="LayoutGrid7">
<div class="row">
<div class="col-1">
<div id="Article5" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Feria de emprendedores #somoscemb</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Wednesday, Noviembre 04, 2021<br></div>
   <span style="color:#000080;"><br>10/11/2025</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Modelaje%2070%20y%2080%20por%20alumnos%20de%203ro%20A">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery3" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery3">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/emp2025/e20251.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/emp2025/e20251.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/emp2025/e20252.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/emp2025/e20252.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/emp2025/e20253.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/emp2025/e20253.jpeg" class="image"></a>
</div>
      </div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery3" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery3">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/emp2025/e20254.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/emp2025/e20254.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/emp2025/e20255.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/emp2025/e20255.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/emp2025/e20256.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/emp2025/e20256.jpeg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
<div id="wb_PhotoGallery3" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery3">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/emp2025/e20257.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/emp2025/e20257.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/emp2025/e20258.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/emp2025/e20258.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/emp2025/e20259.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/emp2025/e20259.jpeg" class="image"></a>
</div>
</div>
<div class="clearfix visible-col3"></div>

</div>
</div>
</div>
</div>
</div>
</div>
	<!--fin 10/11/2025-->
	
<!--inicio 28/05/2025-->
	<div id="wb_LayoutGrid4">
		<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>	

<!--inicio 03/03/2025-->
	<div id="wb_LayoutGrid4">
		<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>	
	
	
<div id="wb_LayoutGrid7">
<div id="LayoutGrid7">
<div class="row">
<div class="col-1">
<div id="Article5" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Celebración del día de las madre #somoscemb</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Wednesday, Noviembre 04, 2021<br></div>
   <span style="color:#000080;"><br>28/05/2025</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Modelaje%2070%20y%2080%20por%20alumnos%20de%203ro%20A">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery3" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery3">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/dmadre2025/prim01.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/dmadre2025/prim01.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/dmadre2025/prim02.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/dmadre2025/prim02.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/dmadre2025/prim03.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/dmadre2025/prim03.jpeg" class="image"></a>
</div>
      </div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery3" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery3">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/dmadre2025/prim04.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/dmadre2025/prim04.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/dmadre2025/prim05.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/dmadre2025/prim05.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/dmadre2025/prim06.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/dmadre2025/prim06.jpeg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
<div id="wb_PhotoGallery3" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery3">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/dmadre2025/prim07.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/dmadre2025/prim07.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/dmadre2025/prim08.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/dmadre2025/prim08.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/dmadre2025/prim09.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/dmadre2025/prim09.jpeg" class="image"></a>
</div>
</div>
<div class="clearfix visible-col3"></div>
<div id="wb_PhotoGallery3" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery3">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/dmadre2025/prim10.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/dmadre2025/prim10.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/dmadre2025/prim11.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/dmadre2025/prim11.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/dmadre2025prim12.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/dmadre2025/prim12.jpeg" class="image"></a>
</div>
      </div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery3" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery3">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/dmadre2025/prim13.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/dmadre2025/prim13.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/dmadre2025/prim14.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/dmadre2025/prim14.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/dmadre2025/prim15.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/dmadre2025/prim15.jpeg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
<div id="wb_PhotoGallery3" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery3">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/dmadre2025/prim16.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/dmadre2025/prim16.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/dmadre2025/prim17.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/dmadre2025/prim17.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/dmadre2025/prim18.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/dmadre2025/prim18.jpeg" class="image"></a>
</div>
</div>
<div class="clearfix visible-col3"></div>  
</div>
</div>
</div>
</div>
</div>
</div>
	<!--fin 28/05/2025-->
	
<!--inicio 16/05/2025-->
	<div id="wb_LayoutGrid4">
		<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>	

<!--inicio 03/03/2025-->
	<div id="wb_LayoutGrid4">
		<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>	
	
	
<div id="wb_LayoutGrid7">
<div id="LayoutGrid7">
<div class="row">
<div class="col-1">
<div id="Article5" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Kermes por aniversario 59 de nuestro colegio #somoscemb</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Wednesday, Noviembre 04, 2021<br></div>
   <span style="color:#000080;"><br>16/05/2025</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Modelaje%2070%20y%2080%20por%20alumnos%20de%203ro%20A">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery3" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery3">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/kermes2025/prim01.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/kermes2025/prim01.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/kermes2025/prim02.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/kermes2025/prim02.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/kermes2025prim03.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/kermes2025/prim03.jpeg" class="image"></a>
</div>
      </div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery3" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery3">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/kermes2025/prim04.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/kermes2025/prim04.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/kermes2025/prim05.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/kermes2025/prim05.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/kermes2025/prim06.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/kermes2025/prim06.jpeg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
<div id="wb_PhotoGallery3" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery3">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/kermes2025/prim07.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/kermes2025/prim07.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/kermes2025/prim08.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/kermes2025/prim08.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/kermes2025/prim09.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/kermes2025/prim09.jpeg" class="image"></a>
</div>
</div>
<div class="clearfix visible-col3"></div>
<div id="wb_PhotoGallery3" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery3">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/kermes2025/prim10.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/kermes2025/prim10.jpeg" class="image"></a>
</div>
      </div>
  </div>	  
</div>
</div>
</div>
</div>
</div>
</div>
	<!--fin 16/05/2025-->



<!--inicio 03/03/2025-->
	<div id="wb_LayoutGrid4">
		<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>	
	
	
<div id="wb_LayoutGrid7">
<div id="LayoutGrid7">
<div class="row">
<div class="col-1">
<div id="Article5" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Ángeles y Angelados #somoscemb</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Wednesday, Noviembre 04, 2021<br></div>
   <span style="color:#000080;"><br>15/05/2025</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Modelaje%2070%20y%2080%20por%20alumnos%20de%203ro%20A">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery3" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery3">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/angel2025/prim01.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/angel2025/prim01.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/angel2025/prim02.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/angel2025/prim02.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/angel2025prim03.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/angel2025/prim03.jpeg" class="image"></a>
</div>
      </div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery3" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery3">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/angel2025/prim04.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/angel2025/prim04.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/angel2025/prim05.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/angel2025/prim05.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/angel2025/prim06.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/angel2025/prim06.jpeg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
<div id="wb_PhotoGallery3" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery3">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/angel2025/prim07.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/angel2025/prim07.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/angel2025/prim08.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/angel2025/prim08.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/angel2025/prim09.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/angel2025/prim09.jpeg" class="image"></a>
</div>
</div>
<div class="clearfix visible-col3"></div>
<div id="wb_PhotoGallery3" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery3">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/angel2025/prim10.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/angel2025/prim10.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/angel2025/prim11.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/angel2025/prim11.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/angel2025/prim12.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/angel2025/prim12.jpeg" class="image"></a>
</div>
</div>
</div>
<div class="clearfix visible-col3"></div>
<div id="wb_PhotoGallery3" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery3">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/angel2025/prim13.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/angel2025/prim13.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/angel2025/prim14.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/angel2025/prim14.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/angel2025/prim15.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/angel2025/prim15.jpeg" class="image"></a>
</div>

      </div>	  
</div>
</div>
</div>
</div>
</div>
</div>
	<!--fin 15/05/2025-->



<!--inicio 14/05/2025-->
	<div id="wb_LayoutGrid4">
		<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>	

<!--inicio 03/03/2025-->
	<div id="wb_LayoutGrid4">
		<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>	
	
	
<div id="wb_LayoutGrid7">
<div id="LayoutGrid7">
<div class="row">
<div class="col-1">
<div id="Article5" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Día de playa #somoscemb</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Wednesday, Noviembre 04, 2021<br></div>
   <span style="color:#000080;"><br>14/05/2025</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Modelaje%2070%20y%2080%20por%20alumnos%20de%203ro%20A">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery3" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery3">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/playa2025/prim01.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/playa2025/prim01.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/playa2025/prim02.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/playa2025/prim02.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/playa2025prim03.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/playa2025/prim03.jpeg" class="image"></a>
</div>
      </div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery3" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery3">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/playa2025/prim04.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/playa2025/prim04.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/playa2025/prim05.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/playa2025/prim05.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/playa2025/prim06.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/playa2025/prim06.jpeg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
<div id="wb_PhotoGallery3" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery3">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/playa2025/prim07.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/playa2025/prim07.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/playa2025/prim08.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/playa2025/prim08.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/playa2025/prim09.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/playa2025/prim09.jpeg" class="image"></a>
</div>
      </div>	  
</div>
</div>
</div>
</div>
</div>
</div>
	<!--fin 14/05/2025-->




<!--inicio 13/05/2025-->
	<div id="wb_LayoutGrid4">
		<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>	

<!--inicio 03/03/2025-->
	<div id="wb_LayoutGrid4">
		<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>	
	
	
<div id="wb_LayoutGrid7">
<div id="LayoutGrid7">
<div class="row">
<div class="col-1">
<div id="Article5" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Día de gemelos #somoscemb</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Wednesday, Noviembre 04, 2021<br></div>
   <span style="color:#000080;"><br>15/05/2025</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Modelaje%2070%20y%2080%20por%20alumnos%20de%203ro%20A">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery3" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery3">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/gemelos2025/prim01.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/gemelos2025/prim01.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/gemelos2025/prim02.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/gemelos2025/prim02.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/gemelos2025prim03.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/gemelos2025/prim03.jpeg" class="image"></a>
</div>
      </div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery3" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery3">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/gemelos2025/prim04.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/gemelos2025/prim04.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/gemelos2025/prim05.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/gemelos2025/prim05.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/gemelos2025/prim06.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/gemelos2025/prim06.jpeg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
<div id="wb_PhotoGallery3" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery3">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/gemelos2025/prim07.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/gemelos2025/prim07.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/gemelos2025/prim08.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/gemelos2025/prim08.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/gemelos2025/prim09.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/gemelos2025/prim09.jpeg" class="image"></a>
</div>
      </div>	  
</div>
</div>
</div>
</div>
</div>
</div>
	<!--fin 13/05/2025-->


<!--inicio 03/03/2025-->
	<div id="wb_LayoutGrid4">
		<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>	

<!--inicio 03/03/2025-->
	<div id="wb_LayoutGrid4">
		<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>	
	
	
<div id="wb_LayoutGrid7">
<div id="LayoutGrid7">
<div class="row">
<div class="col-1">
<div id="Article5" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Nuestros pasillos se llenan de color y música para celebrar 59 años de aprendizaje, comunidad, crecimiento y diversión! - echa un vistazo a lo alegre que hemos pasado en Primaria con pinta caritas y ZUMBA en ocasión del 59 aniversario del CEMB #somoscemb</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Wednesday, Noviembre 04, 2021<br></div>
   <span style="color:#000080;"><br>14/05/2025</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Modelaje%2070%20y%2080%20por%20alumnos%20de%203ro%20A">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery3" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery3">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/pijama2025/prim01.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/pijama2025/prim01.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/pijama2025/prim02.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/pijama2025/prim02.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/pijama2025/prim03.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/pijama2025/prim03.jpeg" class="image"></a>
</div>
      </div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery3" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery3">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/pijama2025/prim04.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/pijama2025/prim04.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/pijama2025/prim05.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/pijama2025/prim05.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/pijama2025/prim06.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/pijama2025/prim06.jpeg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	  
</div>
</div>
</div>
</div>
</div>
</div>
	<!--fin 03/03/2025-->




<!--inicio 03/03/2025-->
	<div id="wb_LayoutGrid4">
		<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>	

<!--inicio 03/03/2025-->
	<div id="wb_LayoutGrid4">
		<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>	
	
	
<div id="wb_LayoutGrid7">
<div id="LayoutGrid7">
<div class="row">
<div class="col-1">
<div id="Article5" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Día del amor y la amistad (San Valentin) 2025</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Wednesday, Noviembre 04, 2021<br></div>
   <span style="color:#000080;"><br>14/02/2025</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Modelaje%2070%20y%2080%20por%20alumnos%20de%203ro%20A">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery3" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery3">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/sv2025/sv202501.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/sv2025/sv202501.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/sv2025/sv202502.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/sv2025/sv202502.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/sv2025/sv202503.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/sv2025/sv202503.jpeg" class="image"></a>
</div>
      </div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery3" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery3">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/sv2025/sv202504.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/sv2025/sv202504.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/sv2025/sv202505.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/sv2025/sv202505.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/sv2025/sv202506.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/sv2025/sv202506.jpeg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	  
</div>
</div>
</div>
</div>
</div>
</div>
	<!--fin 03/03/2025-->



<!--inicio 11/09/2024-->
	<div id="wb_LayoutGrid4">
		<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>	

<!--inicio 11/09/2024-->
	<div id="wb_LayoutGrid4">
		<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>	
	
	
<div id="wb_LayoutGrid7">
<div id="LayoutGrid7">
<div class="row">
<div class="col-1">
<div id="Article5" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Desfile patrio interno de primaria</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Wednesday, Noviembre 04, 2021<br></div>
   <span style="color:#000080;"><br>11/09/2024</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Modelaje%2070%20y%2080%20por%20alumnos%20de%203ro%20A">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery3" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery3">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/desfile/desfile0920241.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/desfile/desfile0920241.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/desfile/desfile0920242.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/desfile/desfile0920242.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/desfile/desfile0920243.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/desfile/desfile0920243.jpeg" class="image"></a>
</div>
      </div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery3" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery3">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/desfile/desfile0920244.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/desfile/desfile0920244.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/desfile/desfile0920245.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/desfile/desfile0920245.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/desfile/desfile0920246.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/desfile/desfile0920246.jpeg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/desfile/desfile0920247.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/desfile/desfile0920247.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/desfile/desfile0920248.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/desfile/desfile0920248.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/desfile/desfile0920249.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/desfile/desfile0920249.jpeg" class="image"></a>
</div>
      </div>
    
<div class="clearfix visible-col3"></div>
	  <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/desfile/desfile09202410.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/desfile/desfile09202410.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/desfile/desfile09202411.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/desfile/desfile09202411.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/desfile/desfile09202412.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/desfile/desfile09202412.jpeg" class="image"></a>
</div>
         </div>  
<div class="clearfix visible-col3"></div>
 <!-----
	  <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/desfile/desfile09202413.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/desfile/desfile09202413.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/desfile/desfile09202414.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/desfile/desfile09202414.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/desfile/desfile09202415.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/desfile/desfile09202415.jpeg" class="image"></a>         
      </div>   
   
</div>
</div>
</div>
</div>
</div>
</div>
	<!--fin 11/09/2024-->

<!--inicio 21/06/2024-->
	<div id="wb_LayoutGrid4">
		<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>	

<!--inicio 21/06/2024-->
	<div id="wb_LayoutGrid4">
		<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>	
	
	
<div id="wb_LayoutGrid7">
<div id="LayoutGrid7">
<div class="row">
<div class="col-1">
<div id="Article5" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Día del padre (2024)</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Wednesday, Noviembre 04, 2021<br></div>
   <span style="color:#000080;"><br>21/06/2024</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Modelaje%2070%20y%2080%20por%20alumnos%20de%203ro%20A">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery3" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery3">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/diapadre2024/father1.jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/diapadre2024/father1.jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/diapadre2024/father2.jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/diapadre2024/father2.jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/diapadre2024/father3.jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/diapadre2024/father3.jpg" class="image"></a>
</div>
      </div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery3" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery3">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/diapadre2024/father4.jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/diapadre2024/father4.jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/diapadre2024/father5.jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/diapadre2024/father5.jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/diapadre2024/father6.jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/diapadre2024/father6.jpg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/diapadre2024/father7.jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/diapadre2024/father7.jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/diapadre2024/father8.jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/diapadre2024/father8.jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/diapadre2024/father9.jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/diapadre2024/father9.jpg" class="image"></a>
</div>
      </div>
      <!----
<div class="clearfix visible-col3"></div>
	  <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/diamadre2024/mdp10.jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/diamadre2024/mdp10.jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/diamadre2024/mdp11.jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/diamadre2024/mdp11.jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/diamadre2024/mdp12.jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/diamadre2024/mdp12.jpg" class="image"></a>
</div>
         </div>  
<div class="clearfix visible-col3"></div>
 <!-----
	  <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/deporte2024/deporte1.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/deporte2024/deporte1.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/deporte2024/deporte48.jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/deporte2024/deporte48.jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/deporte2024/deporte50.jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/deporte2024/deporte50.jpg" class="image"></a>         
      </div>   
   
</div>
</div>
</div>
</div>
</div>
</div>
	<!--fin 21/06/2024-->


<!--inicio 30/05/2024-->
	<div id="wb_LayoutGrid4">
		<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>	

<!--inicio 30/05/2024-->
	<div id="wb_LayoutGrid4">
		<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>	
	
	
<div id="wb_LayoutGrid7">
<div id="LayoutGrid7">
<div class="row">
<div class="col-1">
<div id="Article5" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Día de la madre (2024)</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Wednesday, Noviembre 04, 2021<br></div>
   <span style="color:#000080;"><br>30/05/2024</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Modelaje%2070%20y%2080%20por%20alumnos%20de%203ro%20A">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery3" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery3">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/diamadre2024/mdp1.jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/diamadre2024/mdp1.jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/diamadre2024/mdp2.jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/diamadre2024/mdp2.jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/diamadre2024/mdp3.jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/diamadre2024/mdp3.jpg" class="image"></a>
</div>
      </div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery3" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery3">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/diamadre2024/mdp4.jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/diamadre2024/mdp4.jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/diamadre2024/mdp5.jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/diamadre2024/mdp5.jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/diamadre2024/mdp6.jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/diamadre2024/mdp6.jpg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/diamadre2024/mdp7.jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/diamadre2024/mdp7.jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/diamadre2024/mdp8.jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/diamadre2024/mdp8.jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/diamadre2024/mdp9.jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/diamadre2024/mdp9.jpg" class="image"></a>
</div>
      </div>
      
<div class="clearfix visible-col3"></div>
	  <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/diamadre2024/mdp10.jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/diamadre2024/mdp10.jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/diamadre2024/mdp11.jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/diamadre2024/mdp11.jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/diamadre2024/mdp12.jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/diamadre2024/mdp12.jpg" class="image"></a>
</div>
         </div>  
<div class="clearfix visible-col3"></div>
 <!-----
	  <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/deporte2024/deporte1.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/deporte2024/deporte1.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/deporte2024/deporte48.jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/deporte2024/deporte48.jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/deporte2024/deporte50.jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/deporte2024/deporte50.jpg" class="image"></a>         
      </div>   
   
</div>
</div>
</div>
</div>
</div>
</div>
	<!--fin 30/05/2024-->



<!--inicio 17/05/2024-->
	<div id="wb_LayoutGrid4">
		<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>	

<!--inicio 17/05/2024-->
	<div id="wb_LayoutGrid4">
		<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>	
	
	
<div id="wb_LayoutGrid7">
<div id="LayoutGrid7">
<div class="row">
<div class="col-1">
<div id="Article5" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Día de Deporte en Primaria (Aniversario 58 del CEMB)</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Wednesday, Noviembre 04, 2021<br></div>
   <span style="color:#000080;"><br>17/05/2024</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Modelaje%2070%20y%2080%20por%20alumnos%20de%203ro%20A">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery3" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery3">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/deporte2024/deporte2.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/deporte2024/deporte2.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/deporte2024/deporte3.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/deporte2024/deporte3.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/deporte2024/deporte4.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/deporte2024/deporte4.jpeg" class="image"></a>
</div>
      </div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery3" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery3">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/deporte2024/deporte31.jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/deporte2024/deporte31.jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/deporte2024/deporte32.jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/deporte2024/deporte32.jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/deporte2024/deporte37.jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/deporte2024/deporte37.jpg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/deporte2024/deporte40.jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/deporte2024/deporte40.jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/deporte2024/deporte41.jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/deporte2024/deporte41.jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/deporte2024/deporte43.jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/deporte2024/deporte43.jpg" class="image"></a>
</div>
      </div>
      
<div class="clearfix visible-col3"></div>
	  <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/deporte2024/deporte44.jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/deporte2024/deporte44.jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/deporte2024/deporte45.jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/deporte2024/deporte45.jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/deporte2024/deporte46.jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/deporte2024/deporte46.jpg" class="image"></a>
</div>
         </div>  
<div class="clearfix visible-col3"></div>
 
	  <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/deporte2024/deporte1.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/deporte2024/deporte1.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/deporte2024/deporte48.jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/deporte2024/deporte48.jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/deporte2024/deporte50.jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/deporte2024/deporte50.jpg" class="image"></a>         
      </div>   
   
</div>
</div>
</div>
</div>
</div>
</div>
	<!--fin 16/05/2024-->
	
	<!--inicio 16/05/2024-->
	
<div id="wb_LayoutGrid7">
<div id="LayoutGrid7">
<div class="row">
<div class="col-1">
<div id="Article5" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Día de Desacobinado y Angeles y Angelados en Primaria (Aniversario 58 del CEMB)</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Wednesday, Noviembre 04, 2021<br></div>
   <span style="color:#000080;"><br>16/05/2024</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Modelaje%2070%20y%2080%20por%20alumnos%20de%203ro%20A">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery3" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery3">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/descombinado2024/descomb3.jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/descombinado2024/descomb3.jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/descombinado2024/descomb3.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/descombinado2024/descomb3.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/descombinado2024/descomb5.jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/descombinado2024/descomb5.jpg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/descombinado2024/descomb7.jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/descombinado2024/descomb7.jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/descombinado2024/descomb8.jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/descombinado2024/descomb8.jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/descombinado2024/descomb8.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/descombinado2024/descomb8.jpeg" class="image"></a>
</div>
      </div>
      
<div class="clearfix visible-col3"></div>
	  <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/descombinado2024/descomb11.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/descombinado2024/descomb11.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/descombinado2024/descomb12.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/descombinado2024/descomb12.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/descombinado2024/descomb13.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/descombinado2024/descomb13.jpeg" class="image"></a>
</div>
         </div>  
<div class="clearfix visible-col3"></div>
 
	  <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/descombinado2024/descomb14.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/descombinado2024/descomb14.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/descombinado2024/descomb23.jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/descombinado2024/descomb23.jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/descombinado2024/descomb24.jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/descombinado2024/descomb24.jpg" class="image"></a>         
      </div>   
   
</div>
</div>
</div>
</div>
</div>
</div>
	<!--fin 16/05/2024-->

<!--inicio 15/05/2024-->
	<div id="wb_LayoutGrid4">
		<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>	
	
	
<div id="wb_LayoutGrid7">
<div id="LayoutGrid7">
<div class="row">
<div class="col-1">
<div id="Article5" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Día de Pijama en Primaria (Aniversario 58 del CEMB)</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Wednesday, Noviembre 04, 2021<br></div>
   <span style="color:#000080;"><br>15/05/2024</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Modelaje%2070%20y%2080%20por%20alumnos%20de%203ro%20A">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery3" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery3">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/pijama2024/pijama1.jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/pijama2024/pijama1.jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/pijama2024/pijama8.jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/pijama2024/pijama8.jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/pijama2024/pijama9.jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/pijama2024/pijama9.jpg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/pijama2024/pijama38.jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/pijama2024/pijama38.jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/pijama2024/pijama39.jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/pijama2024/pijama39.jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/pijama2024/pijama124.jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/pijama2024/pijama124.jpg" class="image"></a>
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
	<!--fin 15/05/2024-->


<!--inicio 14/05/2024-->
	<div id="wb_LayoutGrid4">
		<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>	
	
	
<div id="wb_LayoutGrid7">
<div id="LayoutGrid7">
<div class="row">
<div class="col-1">
<div id="Article5" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Día de Vaqueros en Primaria (Aniversario 58 del CEMB)</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Wednesday, Noviembre 04, 2021<br></div>
   <span style="color:#000080;"><br>14/05/2024</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Modelaje%2070%20y%2080%20por%20alumnos%20de%203ro%20A">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery3" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery3">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/vaquero2024/vaquero21.jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/vaquero2024/vaquero21.jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/vaquero2024/vaquero22.jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/vaquero2024/vaquero22.jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/vaquero2024/vaquero24.jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/vaquero2024/vaquero24.jpg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/vaquero2024/vaquero30.jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/vaquero2024/vaquero30.jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/vaquero2024/vaquero35.jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/vaquero2024/vaquero35.jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/vaquero2024/vaquero231.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/vaquero2024/vaquero231.jpeg" class="image"></a>
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
	<!--fin 14/05/2024-->


<!--inicio 13/05/2024-->
	<div id="wb_LayoutGrid4">
		<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>	
	
	
<div id="wb_LayoutGrid7">
<div id="LayoutGrid7">
<div class="row">
<div class="col-1">
<div id="Article5" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Día de gemelos en Primaria (Aniversario 58 del CEMB)</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Wednesday, Noviembre 04, 2021<br></div>
   <span style="color:#000080;"><br>13/02/2024</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Modelaje%2070%20y%2080%20por%20alumnos%20de%203ro%20A">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery3" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery3">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/gemelos2024/gemelo1.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/gemelos2024/gemelo1.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/gemelos2024/gemelo2.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/gemelos2024/gemelo2.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/gemelos2024/gemelo3.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/gemelos2024/gemelo3.jpeg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/gemelos2024/gemelo4.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/gemelos2024/gemelo4.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/gemelos2024/gemelo5.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/gemelos2024/gemelo5.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/gemelos2024/gemelo6.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/gemelos2024/gemelo6.jpeg" class="image"></a>
</div>
      </div>
      
<div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/gemelos2024/gemelo7.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/gemelos2024/gemelo7.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/gemelos2024/gemelo8.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/gemelos2024/gemelo8.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/gemelos2024/gemelo12.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/gemelos2024/gemelo12.jpeg" class="image"></a>
</div>
      </div>
      
      <div class="clearfix visible-col3"></div>
   </div>
<div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/gemelos2024/gemelo13.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/gemelos2024/gemelo13.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/gemelos2024/gemelo32.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/gemelos2024/gemelo32.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/gemelos2024/gemelo33.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/gemelos2024/gemelo33.jpeg" class="image"></a>
</div>
      </div>
      
<div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/gemelos2024/gemelo37.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/gemelos2024/gemelo37.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/gemelos2024/gemelo40.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/gemelos2024/gemelo40.jpeg" class="image"></a>
</div>
      </div>
	   
      </div>   
   
</div>
</div>
</div>
</div>
</div>
</div>
	<!--fin 13/05/2024-->


	<!--inicio 13/02/2024-->
	<div id="wb_LayoutGrid4">
		<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>	
	
	
<div id="wb_LayoutGrid7">
<div id="LayoutGrid7">
<div class="row">
<div class="col-1">
<div id="Article5" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Celebrando el día del amor y la amistad</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Wednesday, Noviembre 04, 2021<br></div>
   <span style="color:#000080;"><br>13/02/2024</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Modelaje%2070%20y%2080%20por%20alumnos%20de%203ro%20A">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery3" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery3">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/sanvalentin2024/love20241.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/sanvalentin2024/love20241.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/sanvalentin2024/love20242.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/sanvalentin2024/love20242.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/sanvalentin2024/love20243.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/sanvalentin2024/love20243.jpeg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/sanvalentin2024/love20244.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/sanvalentin2024/love20244.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/sanvalentin2024/love20245.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/sanvalentin2024/love20245.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/sanvalentin2024/love20246.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/sanvalentin2024/love20246.jpeg" class="image"></a>
</div>
      </div>
      
<div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/sanvalentin2024/love20247.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/sanvalentin2024/love20247.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/sanvalentin2024/love20249.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/sanvalentin2024/love20249.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/sanvalentin2024/love2024910.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/sanvalentin2024/love2024910.jpeg" class="image"></a>
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
	<!--fin 13/02/2024-->

	<!--INICIO-->
	<div id="wb_LayoutGrid4">
		<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>
<div id="LayoutGrid14">
<div class="row">
<div class="col-1">
<div id="Article3" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Feria Intercultural por alumnos de primaria CEMB 2023</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Friday, October 01, 2021<br></div>
   <span style="color:#000000;"><br>25/08/2023</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Trajes%20Tipicos">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
	   <iframe width="560" height="315" src="https://www.youtube.com/embed/XSe4Xf38_1U?si=riwmtFPqD27JGhqG" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/_tUszQbGVjg?si=J4NeGLa0DEs_i175" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
	   <iframe width="560" height="315" src="https://www.youtube.com/embed/C1ORNFnLARA?si=csrOp_GKeAGGPJH1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
	   
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
	<div id="wb_LayoutGrid4">
		<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>
<div id="LayoutGrid14">
<div class="row">
<div class="col-1">
<div id="Article3" style="overflow:hidden;">
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
	
	<!--inicio-->
		<div id="wb_LayoutGrid7">
<div id="LayoutGrid7">
<div class="row">
<div class="col-1">
<div id="Article5" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Piscinada de Alumnos de 1ro y 2do grado celebrando 57 Aniversario CEMB 2023</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Wednesday, Noviembre 04, 2021<br></div>
   <span style="color:#000080;"><br>09/05/2023</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Modelaje%2070%20y%2080%20por%20alumnos%20de%203ro%20A">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery3" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery3">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/Psicinada1ery2doGrado/Psicinada1ery2doGrado (1).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/Psicinada1ery2doGrado/Psicinada1ery2doGrado (1).jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/Psicinada1ery2doGrado/Psicinada1ery2doGrado (2).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/Psicinada1ery2doGrado/Psicinada1ery2doGrado (2).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/Psicinada1ery2doGrado/Psicinada1ery2doGrado (3).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/Psicinada1ery2doGrado/Psicinada1ery2doGrado (3).jpg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/Psicinada1ery2doGrado/Psicinada1ery2doGrado (4).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/Psicinada1ery2doGrado/Psicinada1ery2doGrado (4).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/Psicinada1ery2doGrado/Psicinada1ery2doGrado (5).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/Psicinada1ery2doGrado/Psicinada1ery2doGrado (5).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/Psicinada1ery2doGrado/Psicinada1ery2doGrado (6).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/Psicinada1ery2doGrado/Psicinada1ery2doGrado (6).jpg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
	      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/Psicinada1ery2doGrado/Psicinada1ery2doGrado (7).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/Psicinada1ery2doGrado/Psicinada1ery2doGrado (7).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/Psicinada1ery2doGrado/Psicinada1ery2doGrado (8).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/Psicinada1ery2doGrado/Psicinada1ery2doGrado (8).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/Psicinada1ery2doGrado/Psicinada1ery2doGrado (9).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/Psicinada1ery2doGrado/Psicinada1ery2doGrado (9).jpg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
	      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/Psicinada1ery2doGrado/Psicinada1ery2doGrado (10).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/Psicinada1ery2doGrado/Psicinada1ery2doGrado (10).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/Psicinada1ery2doGrado/Psicinada1ery2doGrado (11).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/Psicinada1ery2doGrado/Psicinada1ery2doGrado (11).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/Psicinada1ery2doGrado/Psicinada1ery2doGrado (12).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/Psicinada1ery2doGrado/Psicinada1ery2doGrado (12).jpg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
	      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/Psicinada1ery2doGrado/Psicinada1ery2doGrado (13).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/Psicinada1ery2doGrado/Psicinada1ery2doGrado (13).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/Psicinada1ery2doGrado/Psicinada1ery2doGrado (14).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/Psicinada1ery2doGrado/Psicinada1ery2doGrado (14).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/Psicinada1ery2doGrado/Psicinada1ery2doGrado (15).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/Psicinada1ery2doGrado/Psicinada1ery2doGrado (15).jpg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
	      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/Psicinada1ery2doGrado/Psicinada1ery2doGrado (16).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/Psicinada1ery2doGrado/Psicinada1ery2doGrado (16).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/Psicinada1ery2doGrado/Psicinada1ery2doGrado (17).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/Psicinada1ery2doGrado/Psicinada1ery2doGrado (17).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/Psicinada1ery2doGrado/Psicinada1ery2doGrado (18).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/Psicinada1ery2doGrado/Psicinada1ery2doGrado (18).jpg" class="image"></a>
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
		<div id="wb_LayoutGrid7">
<div id="LayoutGrid7">
<div class="row">
<div class="col-1">
<div id="Article5" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Día de Pijamada en Celebracion al 57 Aniversario CEMB 2023</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Wednesday, Noviembre 04, 2021<br></div>
   <span style="color:#000080;"><br>09/0/2023</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Modelaje%2070%20y%2080%20por%20alumnos%20de%203ro%20A">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery3" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery3">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/Pijamada57Aniv09052023/Pijamada57Aniv09052023 (1).jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/Pijamada57Aniv09052023/Pijamada57Aniv09052023 (1).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/Pijamada57Aniv09052023/Pijamada57Aniv09052023 (2).jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/Pijamada57Aniv09052023/Pijamada57Aniv09052023 (2).jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/Pijamada57Aniv09052023/Pijamada57Aniv09052023 (3).jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/Pijamada57Aniv09052023/Pijamada57Aniv09052023 (3).jpeg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/Pijamada57Aniv09052023/Pijamada57Aniv09052023 (4).jpeg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/Pijamada57Aniv09052023/Pijamada57Aniv09052023 (4).jpeg" class="image"></a>
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
		<div id="wb_LayoutGrid7">
<div id="LayoutGrid7">
<div class="row">
<div class="col-1">
<div id="Article5" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Cuenta Cuentos, Muchas gracias a la directiva de padres de familia por su iniciativa y disponibilidad para leer e incentivar la lectura en nuestros estudiantes de primaria.</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Wednesday, Noviembre 04, 2021<br></div>
   <span style="color:#000080;"><br>20/04/2023</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Modelaje%2070%20y%2080%20por%20alumnos%20de%203ro%20A">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery3" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery3">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/CuentaCuentos20042023/CuentaCuentos20042023 (1).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/CuentaCuentos20042023/CuentaCuentos20042023 (1).jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/CuentaCuentos20042023/CuentaCuentos20042023 (2).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/CuentaCuentos20042023/CuentaCuentos20042023 (2).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/CuentaCuentos20042023/CuentaCuentos20042023 (3).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/CuentaCuentos20042023/CuentaCuentos20042023 (3).jpg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/CuentaCuentos20042023/CuentaCuentos20042023 (4).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/CuentaCuentos20042023/CuentaCuentos20042023 (4).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/CuentaCuentos20042023/CuentaCuentos20042023 (5).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/CuentaCuentos20042023/CuentaCuentos20042023 (5).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/CuentaCuentos20042023/CuentaCuentos20042023 (6).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/CuentaCuentos20042023/CuentaCuentos20042023 (6).jpg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/CuentaCuentos20042023/CuentaCuentos20042023 (7).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/CuentaCuentos20042023/CuentaCuentos20042023 (7).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/CuentaCuentos20042023/CuentaCuentos20042023 (8).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/CuentaCuentos20042023/CuentaCuentos20042023 (8).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/CuentaCuentos20042023/CuentaCuentos20042023 (9).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/CuentaCuentos20042023/CuentaCuentos20042023 (9).jpg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/CuentaCuentos20042023/CuentaCuentos20042023 (10).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/CuentaCuentos20042023/CuentaCuentos20042023 (10).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/CuentaCuentos20042023/CuentaCuentos20042023 (11).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/CuentaCuentos20042023/CuentaCuentos20042023 (11).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/CuentaCuentos20042023/CuentaCuentos20042023 (12).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/CuentaCuentos20042023/CuentaCuentos20042023 (12).jpg" class="image"></a>
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
		<div id="wb_LayoutGrid7">
<div id="LayoutGrid7">
<div class="row">
<div class="col-1">
<div id="Article5" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Visita de Aproquen y el capitán Rocky a niños de Primaria dónde les enseñaron cómo evitar y cuidarse de quemaduras.</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Wednesday, Noviembre 04, 2021<br></div>
   <span style="color:#000080;"><br>18/04/2023</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Modelaje%2070%20y%2080%20por%20alumnos%20de%203ro%20A">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery3" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery3">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/VisitaAproquenyRockyPrimaria2023/VisitaAproquenyRockyPrimaria2023 (1).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/VisitaAproquenyRockyPrimaria2023/VisitaAproquenyRockyPrimaria2023 (1).jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/VisitaAproquenyRockyPrimaria2023/VisitaAproquenyRockyPrimaria2023 (2).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/VisitaAproquenyRockyPrimaria2023/VisitaAproquenyRockyPrimaria2023 (2).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/VisitaAproquenyRockyPrimaria2023/VisitaAproquenyRockyPrimaria2023 (3).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/VisitaAproquenyRockyPrimaria2023/VisitaAproquenyRockyPrimaria2023 (3).jpg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/VisitaAproquenyRockyPrimaria2023/VisitaAproquenyRockyPrimaria2023 (4).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/VisitaAproquenyRockyPrimaria2023/VisitaAproquenyRockyPrimaria2023 (4).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/VisitaAproquenyRockyPrimaria2023/VisitaAproquenyRockyPrimaria2023 (5).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/VisitaAproquenyRockyPrimaria2023/VisitaAproquenyRockyPrimaria2023 (5).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/VisitaAproquenyRockyPrimaria2023/VisitaAproquenyRockyPrimaria2023 (6).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/VisitaAproquenyRockyPrimaria2023/VisitaAproquenyRockyPrimaria2023 (6).jpg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/VisitaAproquenyRockyPrimaria2023/VisitaAproquenyRockyPrimaria2023 (7).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/VisitaAproquenyRockyPrimaria2023/VisitaAproquenyRockyPrimaria2023 (7).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/VisitaAproquenyRockyPrimaria2023/VisitaAproquenyRockyPrimaria2023 (8).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/VisitaAproquenyRockyPrimaria2023/VisitaAproquenyRockyPrimaria2023 (8).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/VisitaAproquenyRockyPrimaria2023/VisitaAproquenyRockyPrimaria2023 (9).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/VisitaAproquenyRockyPrimaria2023/VisitaAproquenyRockyPrimaria2023 (9).jpg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/VisitaAproquenyRockyPrimaria2023/VisitaAproquenyRockyPrimaria2023 (10).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/VisitaAproquenyRockyPrimaria2023/VisitaAproquenyRockyPrimaria2023 (10).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/VisitaAproquenyRockyPrimaria2023/VisitaAproquenyRockyPrimaria2023 (11).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/VisitaAproquenyRockyPrimaria2023/VisitaAproquenyRockyPrimaria2023 (11).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/VisitaAproquenyRockyPrimaria2023/VisitaAproquenyRockyPrimaria2023 (12).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/VisitaAproquenyRockyPrimaria2023/VisitaAproquenyRockyPrimaria2023 (12).jpg" class="image"></a>
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
	
	<!--INICIO-->
	<!-----31/01/2024
	<div id="wb_LayoutGrid4">
		<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>
<div id="LayoutGrid14">
<div class="row">
<div class="col-1">
<div id="Article3" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Nuestros Departamentos y areas CEMB</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Friday, October 01, 2021<br></div>
   <span style="color:#000000;"><br>15/11/2022</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Trajes%20Tipicos">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery16" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery16">
   <div class="thumbnails">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/k5JFfqMUB5o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <div class="clearfix visible-col3"></div>
	   
	    
   </div>
</div>
</div>
<!--<a id="Button2" href="./GEFeriaInovadora2022.php" style="display:inline-block;width:96px;height:25px;z-index:8;">Mas..</a>-->
<!-----31/01/2024
</div>
</div>
</div>
</div>
		<!--INICIO-->
		<!------31/01/2024
	<div id="wb_LayoutGrid4">
		<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>
<div id="LayoutGrid14">
<div class="row">
<div class="col-1">
<div id="Article3" style="overflow:hidden;">
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

<!-----31/01/2024
</div>
</div>
</div>
</div>
	
	<!--inicio-->
<!-----31/01/2024	
	
	<div id="wb_LayoutGrid4">
<div id="LayoutGrid4">
<div class="row">
<div class="col-1">
<div id="Article3" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Alumnos de primaria celebrando las fiestas patrias</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Wednesday, June 22, 2022<br></div>
   <br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Día%20de%20las%20Madres">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_LayoutGrid5">
<div id="LayoutGrid5">
<div class="row">
<div class="col-1">
<div class="col-1-padding">
</div>
</div>
<div class="col-2">
<div id="wb_YouTube1" style="display:inline-block;width:100%;z-index:10;">
<iframe id="YouTube1" src="https://www.youtube.com/embed/HBsfkAOQ8aQ?rel=1&amp;autohide=0"></iframe>

</div>
</div>
<div class="col-3">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
	
	<!--inicio-->
<!-----31/01/2024	
	
	<div id="wb_LayoutGrid4">
<div id="LayoutGrid4">
<div class="row">
<div class="col-1">
<div id="Article3" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Día del Maestro</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Wednesday, June 22, 2022<br></div>
   <br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Día%20de%20las%20Madres">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_LayoutGrid5">
<div id="LayoutGrid5">
<div class="row">
<div class="col-1">
<div class="col-1-padding">
</div>
</div>
<div class="col-2">
<div id="wb_YouTube1" style="display:inline-block;width:100%;z-index:10;">
<iframe id="YouTube1" src="https://www.youtube.com/embed/vNDThB5wlow?rel=1&amp;autohide=0"></iframe>

</div>
</div>
<div class="col-3">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
	
	<!--inicio-->
	<!----31/01/2024
		<div id="wb_LayoutGrid7">
<div id="LayoutGrid7">
<div class="row">
<div class="col-1">
<div id="Article5" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Celebrando el día de las Madres CEMB 2022</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Wednesday, Noviembre 04, 2021<br></div>
   <span style="color:#000080;"><br>30/05/2022</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Modelaje%2070%20y%2080%20por%20alumnos%20de%203ro%20A">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery3" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery3">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/DiaMadresPrimaria2022/DiaMadresprimaria2022 (1).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/DiaMadresPrimaria2022/DiaMadresprimaria2022 (1).jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/DiaMadresPrimaria2022/DiaMadresprimaria2022 (2).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/DiaMadresPrimaria2022/DiaMadresprimaria2022 (2).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/DiaMadresPrimaria2022/DiaMadresprimaria2022 (3).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/DiaMadresPrimaria2022/DiaMadresprimaria2022 (3).jpg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/DiaMadresPrimaria2022/DiaMadresprimaria2022 (4).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/DiaMadresPrimaria2022/DiaMadresprimaria2022 (4).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/DiaMadresPrimaria2022/DiaMadresprimaria2022 (5).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/DiaMadresPrimaria2022/DiaMadresprimaria2022 (5).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/DiaMadresPrimaria2022/DiaMadresprimaria2022 (6).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/DiaMadresPrimaria2022/DiaMadresprimaria2022 (6).jpg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/DiaMadresPrimaria2022/DiaMadresprimaria2022 (7).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/DiaMadresPrimaria2022/DiaMadresprimaria2022 (7).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/DiaMadresPrimaria2022/DiaMadresprimaria2022 (8).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/DiaMadresPrimaria2022/DiaMadresprimaria2022 (8).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/DiaMadresPrimaria2022/DiaMadresprimaria2022 (9).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/DiaMadresPrimaria2022/DiaMadresprimaria2022 (9).jpg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/DiaMadresPrimaria2022/DiaMadresprimaria2022 (10).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/DiaMadresPrimaria2022/DiaMadresprimaria2022 (10).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/DiaMadresPrimaria2022/DiaMadresprimaria2022 (11).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/DiaMadresPrimaria2022/DiaMadresprimaria2022 (11).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/DiaMadresPrimaria2022/DiaMadresprimaria2022 (12).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/DiaMadresPrimaria2022/DiaMadresprimaria2022 (12).jpg" class="image"></a>
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
<!-----31/01/2024

		<div id="wb_LayoutGrid7">
<div id="LayoutGrid7">
<div class="row">
<div class="col-1">
<div id="Article5" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Actividades en celebracion del 56 Aniversario del Colegio</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Wednesday, Noviembre 04, 2021<br></div>
   <span style="color:#000080;"><br>20/05/2022</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Modelaje%2070%20y%2080%20por%20alumnos%20de%203ro%20A">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery3" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery3">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/Actividades del 56 aniv CEMB 2022/Actividades del 56 aniv CEMB 2022 (1).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/Actividades del 56 aniv CEMB 2022/Actividades del 56 aniv CEMB 2022 (1).jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/Actividades del 56 aniv CEMB 2022/Actividades del 56 aniv CEMB 2022 (2).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/Actividades del 56 aniv CEMB 2022/Actividades del 56 aniv CEMB 2022 (2).jpg" class="image"></a>
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
	<div id="wb_LayoutGrid7">
<div id="LayoutGrid7">
<div class="row">
<div class="col-1">
<div id="Article5" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Celebracion del Día del amor y la amistad</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Wednesday, Noviembre 04, 2021<br></div>
   <span style="color:#000080;"><br>14/02/2022</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Modelaje%2070%20y%2080%20por%20alumnos%20de%203ro%20A">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery3" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery3">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/dia del amor y la amistad/dia-amor-amidtd-cemb-2022 (1).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/dia del amor y la amistad/dia-amor-amidtd-cemb-2022 (1).jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/dia del amor y la amistad/dia-amor-amidtd-cemb-2022 (2).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/dia del amor y la amistad/dia-amor-amidtd-cemb-2022 (2).jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/dia del amor y la amistad/dia-amor-amidtd-cemb-2022 (3).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/dia del amor y la amistad/dia-amor-amidtd-cemb-2022 (3).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/dia del amor y la amistad/dia-amor-amidtd-cemb-2022 (4).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/dia del amor y la amistad/dia-amor-amidtd-cemb-2022 (4).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/dia del amor y la amistad/dia-amor-amidtd-cemb-2022 (5).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/dia del amor y la amistad/dia-amor-amidtd-cemb-2022 (5).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/dia del amor y la amistad/dia-amor-amidtd-cemb-2022 (6).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/dia del amor y la amistad/dia-amor-amidtd-cemb-2022 (6).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/dia del amor y la amistad/dia-amor-amidtd-cemb-2022 (7).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/dia del amor y la amistad/dia-amor-amidtd-cemb-2022 (7).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/dia del amor y la amistad/dia-amor-amidtd-cemb-2022 (8).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/dia del amor y la amistad/dia-amor-amidtd-cemb-2022 (8).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/dia del amor y la amistad/dia-amor-amidtd-cemb-2022 (9).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/dia del amor y la amistad/dia-amor-amidtd-cemb-2022 (9).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/dia del amor y la amistad/dia-amor-amidtd-cemb-2022 (10).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/dia del amor y la amistad/dia-amor-amidtd-cemb-2022 (10).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/dia del amor y la amistad/dia-amor-amidtd-cemb-2022 (11).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/dia del amor y la amistad/dia-amor-amidtd-cemb-2022 (11).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gprimaria/dia del amor y la amistad/dia-amor-amidtd-cemb-2022 (12).jpg" data-rel="PhotoGallery3"><img alt="" src="images/gprimaria/dia del amor y la amistad/dia-amor-amidtd-cemb-2022 (12).jpg" class="image"></a>
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
<div id="wb_LayoutGrid7">
<div id="LayoutGrid7">
<div class="row">
<div class="col-1">

<div id="wb_PhotoGallery3" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery3">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/Agradecimiento-6to-CEMB2021.jpeg" data-rel="PhotoGallery3"><img alt="" src="images/Agradecimiento-6to-CEMB2021.jpeg" class="image"></a>
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
<!----31/01/024
<div id="wb_LayoutGrid7">
<div id="LayoutGrid7">
<div class="row">
<div class="col-1">
<div id="Article5" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Actividades de despedida de primaria</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Wednesday, Noviembre 04, 2021<br></div>
   <span style="color:#000080;"><br>04/11/2021</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Modelaje%2070%20y%2080%20por%20alumnos%20de%203ro%20A">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery3" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery3">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/despedida-de-primaria-2021/DespedidaPrimaria2021 (1).jpeg" data-rel="PhotoGallery3"><img alt="" src="images/despedida-de-primaria-2021/DespedidaPrimaria2021 (1).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/despedida-de-primaria-2021/DespedidaPrimaria2021 (2).jpeg" data-rel="PhotoGallery3"><img alt="" src="images/despedida-de-primaria-2021/DespedidaPrimaria2021 (2).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/despedida-de-primaria-2021/DespedidaPrimaria2021 (3).jpeg" data-rel="PhotoGallery3"><img alt="" src="images/despedida-de-primaria-2021/DespedidaPrimaria2021 (3).jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/despedida-de-primaria-2021/DespedidaPrimaria2021 (4).jpeg" data-rel="PhotoGallery3"><img alt="" src="images/despedida-de-primaria-2021/DespedidaPrimaria2021 (4).jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/despedida-de-primaria-2021/DespedidaPrimaria2021 (5).jpeg" data-rel="PhotoGallery3"><img alt="" src="images/despedida-de-primaria-2021/DespedidaPrimaria2021 (5).jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/despedida-de-primaria-2021/DespedidaPrimaria2021 (6).jpeg" data-rel="PhotoGallery3"><img alt="" src="images/despedida-de-primaria-2021/DespedidaPrimaria2021 (6).jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/despedida-de-primaria-2021/DespedidaPrimaria2021 (7).jpeg" data-rel="PhotoGallery3"><img alt="" src="images/despedida-de-primaria-2021/DespedidaPrimaria2021 (7).jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/despedida-de-primaria-2021/DespedidaPrimaria2021 (8).jpeg" data-rel="PhotoGallery3"><img alt="" src="images/despedida-de-primaria-2021/DespedidaPrimaria2021 (8).jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/despedida-de-primaria-2021/DespedidaPrimaria2021 (9).jpeg" data-rel="PhotoGallery3"><img alt="" src="images/despedida-de-primaria-2021/DespedidaPrimaria2021 (9).jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/despedida-de-primaria-2021/DespedidaPrimaria2021 (10).jpeg" data-rel="PhotoGallery3"><img alt="" src="images/despedida-de-primaria-2021/DespedidaPrimaria2021 (10).jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/despedida-de-primaria-2021/DespedidaPrimaria2021 (11).jpeg" data-rel="PhotoGallery3"><img alt="" src="images/despedida-de-primaria-2021/DespedidaPrimaria2021 (11).jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/despedida-de-primaria-2021/DespedidaPrimaria2021 (12).jpeg" data-rel="PhotoGallery3"><img alt="" src="images/despedida-de-primaria-2021/DespedidaPrimaria2021 (12).jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/despedida-de-primaria-2021/DespedidaPrimaria2021 (13).jpeg" data-rel="PhotoGallery3"><img alt="" src="images/despedida-de-primaria-2021/DespedidaPrimaria2021 (13).jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/despedida-de-primaria-2021/DespedidaPrimaria2021 (14).jpeg" data-rel="PhotoGallery3"><img alt="" src="images/despedida-de-primaria-2021/DespedidaPrimaria2021 (15).jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/despedida-de-primaria-2021/DespedidaPrimaria2021 (16).jpeg" data-rel="PhotoGallery3"><img alt="" src="images/despedida-de-primaria-2021/DespedidaPrimaria2021 (16).jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/despedida-de-primaria-2021/DespedidaPrimaria2021 (17).jpeg" data-rel="PhotoGallery3"><img alt="" src="images/despedida-de-primaria-2021/DespedidaPrimaria2021 (17).jpeg" class="image"></a>
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
<div id="wb_LayoutGrid6">
<div id="LayoutGrid6">
<div class="row">
<div class="col-1">
<div id="Article4" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Modelaje 70 y 80 por alumnos de 3ro A</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Tuesday, August 31, 2021<br></div>
   <span style="color:#000080;"><br>
31/08/2021</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Modelaje%2070%20y%2080%20por%20alumnos%20de%203ro%20A">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery2" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery2">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/IMG-20210831-WA0059.jpg" data-rel="PhotoGallery2"><img alt="" src="images/IMG-20210831-WA0059.jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/IMG-20210831-WA0060.jpg" data-rel="PhotoGallery2"><img alt="" src="images/IMG-20210831-WA0060.jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/IMG-20210831-WA0061.jpg" data-rel="PhotoGallery2"><img alt="" src="images/IMG-20210831-WA0061.jpg" class="image"></a>
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
<div id="Article5" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Día de los Padres</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Thursday, April 22, 2021<br></div>
   <br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Día%20de%20los%20Padres">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_LayoutGrid8">
<div id="LayoutGrid8">
<div class="row">
<div class="col-1">
<div class="col-1-padding">
</div>
</div>
<div class="col-2">
<div id="wb_YouTube8" style="display:inline-block;width:100%;z-index:6;">
<iframe id="YouTube8" src="https://www.youtube.com/embed/ODL07xLoqGU?rel=1&amp;autohide=0"></iframe>

</div>
</div>
<div class="col-3">
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
<div id="wb_LayoutGrid5">
<div id="LayoutGrid5">
<div class="row">
<div class="col-1">
<div class="col-1-padding">
</div>
</div>
<div class="col-2">
<div id="wb_YouTube1" style="display:inline-block;width:100%;z-index:10;">
<iframe id="YouTube1" src="https://www.youtube.com/embed/JautbHTqjGc?rel=1&amp;autohide=0"></iframe>

</div>
</div>
<div class="col-3">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid1">
<div id="LayoutGrid1">
<div class="row">
<div class="col-1">
<div id="Article2" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Spelling Bee</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Thursday, April 22, 2021<br></div>
   <span style="color:#000080;"><br>
Este Jueves 22 de abril se realizó compentencia entre alumnos de primaria</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Spelling%20Bee">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery1" style="display:inline-block;width:100%;z-index:14;">
<div id="PhotoGallery1">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00408.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00408.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00412.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00412.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00413.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00413.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00414.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00414.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00415.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00415.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00416.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00416.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00417.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00417.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00419.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00419.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00420.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00420.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00421.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00421.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00422.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00422.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00423.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00423.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00424.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00424.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00425.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00425.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00426.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00426.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00427.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00427.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00428.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00428.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00429.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00429.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00431.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00431.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00432.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00432.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00433.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00433.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00434.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00434.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00435.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00435.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00436.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00436.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00437.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00437.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00438.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00438.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00439.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00439.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00440.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00440.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00442.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00442.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00443.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00443.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00444.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00444.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00445.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00445.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00446.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00446.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00447.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00447.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00448.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00448.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00449.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00449.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00450.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00450.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00451.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00451.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00452.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00452.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00454.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00454.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00456.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00456.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00457.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00457.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00458.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00458.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00459.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00459.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00462.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00462.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00463.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00463.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00465.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00465.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00468.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00468.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00471.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00471.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00476.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00476.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00480.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00480.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00482.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00482.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00486.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00486.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00488.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00488.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00491.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00491.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00494.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00494.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00497.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00497.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00499.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00499.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00501.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00501.JPG" class="image"></a>
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
   <span class="blogsubject">Viacrusis</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Friday, March 05, 2021<br></div>
   <span style="color:#000080;"><br>
“No hay amor más grande que el que da la vida por sus amigos”<br>
<br>
Los distintos colectivos de maestros del CEMB se han unido en la práctica piadosa del Vía crucis, recordando así la pasión y muerte de Jesús en este tiempo de Cuaresma, en la que nos estamos preparando para la celebración de la fiesta más <br>
importante para nuestra Iglesia Católica como es la Pascua.<br>
<br>
Esperamos en el Señor que nos permita descubrir el verdadero sentido de este tiempo y poder poner en práctica en nuestras vidas la oración, el ayuno y la limosna.</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Viacrusis">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery3" style="display:inline-block;width:100%;z-index:16;">
<div id="PhotoGallery3">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/viacrusis-primaria-16032021 (1).jpeg" data-rel="PhotoGallery3"><img alt="" src="images/viacrusis-primaria-16032021 (1).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/viacrusis-primaria-16032021 (14).jpeg" data-rel="PhotoGallery3"><img alt="" src="images/viacrusis-primaria-16032021 (14).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/viacrusis-primaria-16032021 (15).jpeg" data-rel="PhotoGallery3"><img alt="" src="images/viacrusis-primaria-16032021 (15).jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/viacrusis-primaria-16032021 (16).jpeg" data-rel="PhotoGallery3"><img alt="" src="images/viacrusis-primaria-16032021 (16).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/viacrusis-primaria-16032021 (17).jpeg" data-rel="PhotoGallery3"><img alt="" src="images/viacrusis-primaria-16032021 (17).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/viacrusis-primaria-16032021 (18).jpeg" data-rel="PhotoGallery3"><img alt="" src="images/viacrusis-primaria-16032021 (18).jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/viacrusis-primaria-16032021 (19).jpeg" data-rel="PhotoGallery3"><img alt="" src="images/viacrusis-primaria-16032021 (19).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/viacrusis-primaria-16032021 (20).jpeg" data-rel="PhotoGallery3"><img alt="" src="images/viacrusis-primaria-16032021 (20).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/viacrusis-primaria-16032021 (21).jpeg" data-rel="PhotoGallery3"><img alt="" src="images/viacrusis-primaria-16032021 (21).jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/viacrusis-primaria-16032021 (22).jpeg" data-rel="PhotoGallery3"><img alt="" src="images/viacrusis-primaria-16032021 (22).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/viacrusis-primaria-16032021 (23).jpeg" data-rel="PhotoGallery3"><img alt="" src="images/viacrusis-primaria-16032021 (23).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/viacrusis-primaria-16032021 (24).jpeg" data-rel="PhotoGallery3"><img alt="" src="images/viacrusis-primaria-16032021 (24).jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/viacrusis-primaria-16032021 (25).jpeg" data-rel="PhotoGallery3"><img alt="" src="images/viacrusis-primaria-16032021 (25).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/viacrusis-primaria-16032021 (26).jpeg" data-rel="PhotoGallery3"><img alt="" src="images/viacrusis-primaria-16032021 (26).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/viacrusis-primaria-16032021 (27).jpeg" data-rel="PhotoGallery3"><img alt="" src="images/viacrusis-primaria-16032021 (27).jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/viacrusis-primaria-16032021 (28).jpeg" data-rel="PhotoGallery3"><img alt="" src="images/viacrusis-primaria-16032021 (28).jpeg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
   </div>
</div>
</div>
</div>
</div>
</div>
</div> 31/01/2024----->
<div id="wb_Footer">
<div id="Footer">
<div class="row">
<div class="col-1">
<div id="wb_FontAwesomeIcon3" style="display:inline-block;width:40px;height:40px;text-align:center;z-index:17;">
<a href="https://www.facebook.com/cemanticaberio" target="_blank"><div id="FontAwesomeIcon3"><i class="fa fa-facebook"></i></div></a>
</div>
<div id="wb_FontAwesomeIcon11" style="display:inline-block;width:40px;height:40px;text-align:center;z-index:18;">
<a href="https://www.youtube.com/channel/UCAhJcrp_RsEv7Kz6uIQGPhg" target="_blank" title="Canal CEMB"><div id="FontAwesomeIcon11"><i class="fa fa-youtube"></i></div></a>
</div>
<div id="wb_IconFont1" style="display:inline-block;width:40px;height:40px;text-align:center;z-index:19;">
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
<div id="Html2" style="display:none;width:35px;height:24px;z-index:22">
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