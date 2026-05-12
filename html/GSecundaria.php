<!doctype html>
<html lang="es-ni">
<head>
<meta charset="utf-8">
<title>CEMB</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="insignia2_small.png" rel="icon" sizes="150x150" type="image/png">
<link href="font-awesome.min.css" rel="stylesheet">
<link href="CEMB.css" rel="stylesheet">
<link href="GSecundaria.css" rel="stylesheet">
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
   $("a[data-rel='PhotoGallery2']").attr('rel', 'PhotoGallery2');
   $("a[rel^='PhotoGallery2']").fancybox({});
   $("a[data-rel='PhotoGallery1']").attr('rel', 'PhotoGallery1');
   $("a[rel^='PhotoGallery1']").fancybox({});
   $("a[data-rel='PhotoGallery3']").attr('rel', 'PhotoGallery3');
   $("a[rel^='PhotoGallery3']").fancybox({});
   $("a[data-rel='PhotoGallery4']").attr('rel', 'PhotoGallery4');
   $("a[rel^='PhotoGallery4']").fancybox({});
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
<li class="nav-item"><a href="./GEducaxcionInicial.php" class="nav-link">Educación Inicial</a></li>
<li class="nav-item"><a href="./GPrimaria.php" class="nav-link">Primaria</a></li>
<li class="nav-item"><a href="./GSecundaria.php" class="nav-link active">Secundaria</a></li>
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
<h1 id="Heading2">Secundaria</h1>
</div>
</div>
</div>
</div>

<!------Start 16/05/2025 ------->

<div id="wb_LayoutGrid5">
<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>
<div id="LayoutGrid5">
<div class="row">
<div class="col-1">
<div id="Article5" style="overflow:hidden;">
<div class="blogitem">
     
   <span class="blogsubject">Celebración del día de las madre #somoscemb</span>
   <span style="color:#000000;"><br>28/05/2025</span><br>
   <div class="no-thumb"></div>
   <div class="blogdate">Wednesday, March 03, 2023<br></div>
   <br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Día%20de%20las%20Madres">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery4" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery4">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
       <a href="images/gsecundaria/dmadre2025/sec01.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/dmadre2025/sec01.jpeg" class="image"></a>
</div>
      </div>
      
      <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/dmadre2025/sec02.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/dmadre2025/sec02.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/dmadre2025/sec03.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/dmadre2025/sec03.jpeg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/dmadre2025/sec04.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/dmadre2025/sec04.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/dmadre2025/sec05.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/dmadre2025/sec05.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/dmadre2025/sec06.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/dmadre2025/sec06.jpeg" class="image"></a>
</div>
      </div>
      	   <div class="clearfix visible-col3"></div>
 <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/dmadre2025/sec07.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/dmadre2025/sec07.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/dmadre2025/sec08.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/dmadre2025/sec08.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/dmadre20255/sec09.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/dmadre2025/sec09.jpeg" class="image"></a>
</div>
      </div>
      	   <div class="clearfix visible-col3"></div>
 <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/dmadre2025/sec10.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/dmadre2025/sec10.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/dmadre2025/sec11.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/dmadre2025/sec11.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/dmadre2025/sec12.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/dmadre2025/sec12.jpeg" class="image"></a>
</div>
      </div>
      	   <div class="clearfix visible-col3"></div>  
      	   <div id="wb_PhotoGallery4" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery4">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
       <a href="images/gsecundaria/dmadre2025/sec13.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/dmadre2025/sec13.jpeg" class="image"></a>
</div>
      </div>
      
      <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/dmadre2025/sec14.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/dmadre2025/sec14.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/dmadre2025/sec15.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/dmadre2025/sec14.jpeg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/dmadre2025/sec16.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/dmadre2025/sec16.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/dmadre2025/sec17.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/dmadre2025/sec17.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/dmadre2025/sec18.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/dmadre2025/sec18.jpeg" class="image"></a>
</div>
      </div>
      	   <div class="clearfix visible-col3"></div>
 <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/dmadre2025/sec19.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/dmadre2025/sec19.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/dmadre2025/sec20.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/dmadre2025/sec20.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/dmadre20255/sec21.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/dmadre2025/sec21.jpeg" class="image"></a>
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

<!------End 16/05/2025 -------->


<!------Start 16/05/2025 ------->

<div id="wb_LayoutGrid5">
<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>
<div id="LayoutGrid5">
<div class="row">
<div class="col-1">
<div id="Article5" style="overflow:hidden;">
<div class="blogitem">
     
   <span class="blogsubject">Kermes por aniversario 59 de nuestro colegio #somoscemb</span>
   <span style="color:#000000;"><br>16/05/2025</span><br>
   <div class="no-thumb"></div>
   <div class="blogdate">Wednesday, March 03, 2023<br></div>
   <br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Día%20de%20las%20Madres">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery4" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery4">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
       <a href="images/gsecundaria/kermes2025/sec01.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/kermes2025/sec01.jpeg" class="image"></a>
</div>
      </div>
      
      <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/kermes2025/sec02.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/kermes2025/sec02.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/kermes2025/sec03.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/kermes2025/sec03.jpeg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/kermes2025/sec04.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/kermes2025/sec04.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/kermes2025/sec05.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/kermes2025/sec05.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/kermes2025/sec06.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/kermes2025/sec06.jpeg" class="image"></a>
</div>
      </div>
      	   <div class="clearfix visible-col3"></div>
 <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/kermes2025/sec07.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/kermes2025/sec07.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/kermes2025/sec08.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/kermes2025/sec08.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/kermes20255/sec09.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/kermes2025/sec09.jpeg" class="image"></a>
</div>
      </div>
      	   <div class="clearfix visible-col3"></div>
 <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/kermes2025/sec10.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/kermes2025/sec10.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/kermes2025/sec11.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/kermes2025/sec11.jpeg" class="image"></a>
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
</div>

<!------End 16/05/2025 -------->


<!------Start 15/05/2025 ------->

<div id="wb_LayoutGrid5">
<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>
<div id="LayoutGrid5">
<div class="row">
<div class="col-1">
<div id="Article5" style="overflow:hidden;">
<div class="blogitem">
     
   <span class="blogsubject">ÁNGELES Y Angelados #somoscemb</span>
   <span style="color:#000000;"><br>15/05/2025</span><br>
   <div class="no-thumb"></div>
   <div class="blogdate">Wednesday, March 03, 2023<br></div>
   <br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Día%20de%20las%20Madres">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery4" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery4">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
       <a href="images/gsecundaria/angel2025/sec01.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/angel2025/sec01.jpeg" class="image"></a>
</div>
      </div>
      
      <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/angel2025/sec02.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/angel2025/sec02.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/angel2025/sec03.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/angel2025/sec03.jpeg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/angel2025/sec04.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/angel2025/sec04.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/angel2025/sec05.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/angel2025/sec05.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/angel2025/sec06.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/angel2025/sec06.jpeg" class="image"></a>
</div>
      </div>
      	   <div class="clearfix visible-col3"></div>
 <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/angel2025/sec07.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/angel2025/sec07.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/angel2025/sec08.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/angel2025/sec08.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/angel20255/sec09.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/angel2025/sec09.jpeg" class="image"></a>
</div>
      </div>
      	   <div class="clearfix visible-col3"></div>
 <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/angel2025/sec10.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/angel2025/sec10.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/angel2025/sec11.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/angel2025/sec11.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/angel20255/sec12.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/angel2025/sec12.jpeg" class="image"></a>
</div>
      </div>
      	   <div class="clearfix visible-col3"></div>     	            	    <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/angel2025/sec13.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/angel2025/sec13.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/angel2025/sec14.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/angel2025/sec14.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/angel20255/sec15.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/angel2025/sec15.jpeg" class="image"></a>
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

<!------End 15/05/2025 -------->


<!------Start 14/05/2025 ------->

<div id="wb_LayoutGrid5">
<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>
<div id="LayoutGrid5">
<div class="row">
<div class="col-1">
<div id="Article5" style="overflow:hidden;">
<div class="blogitem">
     
   <span class="blogsubject">Día de playa #somoscemb</span>
   <span style="color:#000000;"><br>14/05/2025</span><br>
   <div class="no-thumb"></div>
   <div class="blogdate">Wednesday, March 03, 2023<br></div>
   <br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Día%20de%20las%20Madres">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery4" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery4">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
       <a href="images/gsecundaria/playa2025/sec01.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/playa2025/sec01.jpeg" class="image"></a>
</div>
      </div>
      
      <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/playa2025/sec02.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/playa2025/sec02.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/playa2025/sec03.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/playa2025/sec03.jpeg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/playa2025/sec04.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/playa2025/sec04.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/playa2025/sec05.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/playa2025/sec05.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/playa2025/sec06.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/playa2025/sec06.jpeg" class="image"></a>
</div>
      </div>
      	   <div class="clearfix visible-col3"></div>
 <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/playa2025/sec07.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/playa2025/sec07.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/playa2025/sec08.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/playa2025/sec08.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/playa20255/sec09.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/playa2025/sec09.jpeg" class="image"></a>
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

<!------End 14/05/2025 -------->

<!------Start 13/05/2025 ------->

<div id="wb_LayoutGrid5">
<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>
<div id="LayoutGrid5">
<div class="row">
<div class="col-1">
<div id="Article5" style="overflow:hidden;">
<div class="blogitem">
     
   <span class="blogsubject">Día de gemelos #somoscemb</span>
   <span style="color:#000000;"><br>12/05/2025</span><br>
   <div class="no-thumb"></div>
   <div class="blogdate">Wednesday, March 03, 2023<br></div>
   <br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Día%20de%20las%20Madres">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery4" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery4">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
       <a href="images/gsecundaria/gemelos2025/sec01.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/gemelos2025/sec01.jpeg" class="image"></a>
</div>
      </div>
      
      <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/gemelos2025/sec02.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/gemelos2025/sec02.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/gemelos2025/sec03.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/gemelos2025/sec03.jpeg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/gemelos2025/sec04.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/gemelos2025/sec04.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/gemelos2025/sec05.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/gemelos2025/sec05.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/gemelos2025/sec06.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/gemelos2025/sec06.jpeg" class="image"></a>
</div>
      </div>
      	   <div class="clearfix visible-col3"></div>
 <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/gemelos2025/sec07.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/gemelos2025/sec07.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/gemelos2025/sec08.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/gemelos2025/sec08.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/gemelos20255/sec09.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/gemelos2025/sec09.jpeg" class="image"></a>
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

<!------End 13/05/2025 -------->


<!------Start 12/05/2025 ------->

<div id="wb_LayoutGrid5">
<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>
<div id="LayoutGrid5">
<div class="row">
<div class="col-1">
<div id="Article5" style="overflow:hidden;">
<div class="blogitem">
     
   <span class="blogsubject">59 Años caminando y aprendiendo: una maravillosa mañana para una caminata en celebración del 59 aniversario de nuestro Centro Educativo CEMB. ¡Listos para seguir dejando una marca positiva en el mundo! #somoscemb</span>
   <span style="color:#000000;"><br>12/05/2025</span><br>
   <div class="no-thumb"></div>
   <div class="blogdate">Wednesday, March 03, 2023<br></div>
   <br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Día%20de%20las%20Madres">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery4" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery4">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
       <a href="images/gsecundaria/pijama2025/sec01.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/pijama2025/sec01.jpeg" class="image"></a>
</div>
      </div>
      
      <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/pijama2025/sec02.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/pijama2025/sec02.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/pijama2025/sec03.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/pijama2025/sec03.jpeg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/pijama2025/sec04.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/pijama2025/sec04.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/pijama2025/sec05.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/pijama2025/sec05.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/pijama2025/sec06.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/pijama2025/sec06.jpeg" class="image"></a>
</div>
      </div>
      	   <div class="clearfix visible-col3"></div>
 <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/pijama2025/sec07.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/pijama2025/sec07.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/pijama2025/sec08.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/pijama2025/sec08.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/pijama2025/sec09.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/pijama2025/sec09.jpeg" class="image"></a>
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

<!------End 12/05/2025 -------->



<!------Start 04/04/2025 ------->

<div id="wb_LayoutGrid5">
<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>
<div id="LayoutGrid5">
<div class="row">
<div class="col-1">
<div id="Article5" style="overflow:hidden;">
<div class="blogitem">
     
   <span class="blogsubject">Una mañana maravillosa para nuestros Seniors, escuchando, reflexionando y descubriendo el mundo de oportunidades que pueden conquistar. Día ocupacional 2025.</span>
   <span style="color:#000000;"><br>14/02/2025</span><br>
   <div class="no-thumb"></div>
   <div class="blogdate">Wednesday, March 03, 2023<br></div>
   <br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Día%20de%20las%20Madres">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery4" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery4">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
       <a href="images/gsecundaria/seniors2025/sen0420251.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/seniors2025/sen0420251.jpeg" class="image"></a>
</div>
      </div>
      
      <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/seniors2025/sen0420252.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/seniors2025/sen0420252.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/seniors2025/sen0420253.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/seniors2025/sen0420253.jpeg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/seniors2025/sen0420254.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/seniors2025/sen0420254.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/seniors2025/sen0420255.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/seniors2025/sen0420255.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/seniors2025/sen0420256.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/seniors2025/sen0420256.jpeg" class="image"></a>
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

<!------End 04/04/2025 -------->




<!------Start 06/03/2025 ------->

<div id="wb_LayoutGrid5">
<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>
<div id="LayoutGrid5">
<div class="row">
<div class="col-1">
<div id="Article5" style="overflow:hidden;">
<div class="blogitem">
     
   <span class="blogsubject">Día del amor y la amistad (San Valentin) 2025</span>
   <span style="color:#000000;"><br>14/02/2025</span><br>
   <div class="no-thumb"></div>
   <div class="blogdate">Wednesday, March 03, 2023<br></div>
   <br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Día%20de%20las%20Madres">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery4" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery4">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
       <a href="images/gsecundaria/sv2025/sv202501.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/sv2025/sv202501.jpeg" class="image"></a>
</div>
      </div>
      
      <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/sv2025/sv202502.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/sv2025/sv202502.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/sv2025/sv202503.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/sv2025/sv202503.jpeg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/sv2025/sv202504.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/sv2025/sv202504.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/sv2025/sv202505.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/sv2025/sv202505.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/sv2025/sv202506.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/sv2025/sv202506.jpeg" class="image"></a>
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


<!------End 06/03/2025 -------->

<!------Start 14/10/2024 ------->

<div id="wb_LayoutGrid5">
<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>
<div id="LayoutGrid5">
<div class="row">
<div class="col-1">
<div id="Article5" style="overflow:hidden;">
<div class="blogitem">
     
   <span class="blogsubject">Feria científica 2024</span>
   <span style="color:#000000;"><br>14/10/2024</span><br>
   <div class="no-thumb"></div>
   <div class="blogdate">Wednesday, March 03, 2023<br></div>
   <br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Día%20de%20las%20Madres">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery4" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery4">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
       <a href="images/gsecundaria/fcientifica/fcs1020241.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/fcientifica/fcs1020241.jpeg" class="image"></a>
</div>
      </div>
      
      <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/fcientifica/fcs1020242.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/fcientifica/fcs1020242.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/fcientifica/fcs1020243.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/fcientifica/fcs1020243.jpeg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/fcientifica/fcs1020244.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/fcientifica/fcs1020244.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/fcientifica/fcs1020245.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/fcientifica/fcs1020245.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/fcientifica/fcs1020246.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/fcientifica/fcs1020246.jpeg" class="image"></a>
</div>
      </div>
      	   <div class="clearfix visible-col3"></div>
      	       
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/fcientifica/fcs1020247.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/fcientifica/fcs1020247.jpeg" class="image"></a>
</div>
      </div>
      
     
	  <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/fcientifica/fcs1020248.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/fcientifica/fcs1020248.jpeg" class="image"></a>
</div>
      </div>
  
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/fcientifica/fcs1020249.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/fcientifica/fcs1020249.jpeg" class="image"></a>
</div>
      </div>
<div class="clearfix visible-col3"></div>

<div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/fcientifica/fcs10202410.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/fcientifica/fcs10202410.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/fcientifica/fcs10202411.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/fcientifica/fcs10202411.jpeg" class="image"></a>
</div>
      </div>
	  
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/fcientifica/fcs10202412.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/fcientifica/fcs10202412.jpeg" class="image"></a>
</div>
      </div>
      
	<div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/fcientifica/fcs10202413.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/fcientifica/fcs10202413.jpeg" class="image"></a>
</div>
      </div>
      	  
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/fcientifica/fcs10202414.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/fcientifica/fcs10202414.jpeg" class="image"></a>
</div>
      </div>
      
     
	  <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/fcientifica/fcs10202415.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/fcientifica/fcs10202415.jpeg" class="image"></a>
</div>
      </div>
   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/fcientifica/fcs10202416.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/fcientifica/fcs10202416.jpeg" class="image"></a>
</div>
      </div>

  <div class="thumbnail">
<div class="frame">
       <a href="images/gsecundaria/fcientifica/fcs10202417.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/fcientifica/fcs10202417.jpeg" class="image"></a>
</div>
      </div>
      
      <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/fcientifica/fcs10202418.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/fcientifica/fcs10202418.jpeg" class="image"></a>
</div>
      </div>
      
       <div class="clearfix visible-col3"></div>
       
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/fcientifica/fcs10202419.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/fcientifica/fcs10202419.jpeg" class="image"></a>
</div>
      </div>
	  
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/fcientifica/fcs10202420.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/fcientifica/fcs10202420.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/fcientifica/fcs10202421.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/fcientifica/fcs10202421.jpeg" class="image"></a>
</div>
      </div>
       <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/fcientifica/fcs10202422.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/fcientifica/fcs10202422.jpeg" class="image"></a>
</div>
      </div>
      	  
      	       
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/fcientifica/fcs10202423.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/fcientifica/fcs10202423.jpeg" class="image"></a>
</div>
      </div>
      
     
	  <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/fcientifica/fcs10202424.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/fcientifica/fcs10202424.jpeg" class="image"></a>
</div>
      </div>
   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/fcientifica/fcs10202425.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/fcientifica/fcs10202425.jpeg" class="image"></a>
</div>
      </div>

<div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/fcientifica/fcs10202426.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/fcientifica/fcs10202426.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/fcientifica/fcs10202427.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/fcientifica/fcs10202427.jpeg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/fcientifica/fcs10202428.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/fcientifica/fcs10202428.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/fcientifica/fcs10202429.peg<img alt="" src="images/gsecundaria/fcientifica/fcs10202429.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/fcientifica/fcs10202430.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/fcientifica/fcs10202430.jpeg" class="image"></a>
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


<!------End 14/10/2024 -------->


<!------Start 13/09/2024 ------->

<div id="wb_LayoutGrid5">
<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>
<div id="LayoutGrid5">
<div class="row">
<div class="col-1">
<div id="Article5" style="overflow:hidden;">
<div class="blogitem">
     
   <span class="blogsubject">Feria del maíz.</span>
   <span style="color:#000000;"><br>13/09/2024</span><br>
   <div class="no-thumb"></div>
   <div class="blogdate">Wednesday, March 03, 2023<br></div>
   <br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Día%20de%20las%20Madres">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery4" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery4">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
       <a href="images/gsecundaria/feriamaiz/fm0920241.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/feriamaiz/fm0920241.jpeg" class="image"></a>
</div>
      </div>
      
      <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/feriamaiz/fm0920242.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/feriamaiz/fm0920242.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/feriamaiz/fm0920243.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/feriamaiz/fm0920243.jpeg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/feriamaiz/fm0920244.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/feriamaiz/fm0920244.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/feriamaiz/fm0920245.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/feriamaiz/fm0920245.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/feriamaiz/fm0920246.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/feriamaiz/fm0920246.jpeg" class="image"></a>
</div>
      </div>
      	   <div class="clearfix visible-col3"></div>
      	       
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/feriamaiz/fm0920247.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/feriamaiz/fm0920247.jpeg" class="image"></a>
</div>
      </div>
      
     
	  <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/feriamaiz/fm0920248.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/feriamaiz/fm0920248.jpeg" class="image"></a>
</div>
      </div>
  
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/feriamaiz/fm0920249.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/feriamaiz/fm0920249.jpeg" class="image"></a>
</div>
      </div>
<div class="clearfix visible-col3"></div>

<div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/feriamaiz/fm09202410.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/feriamaiz/fm09202410.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/feriamaiz/fm09202411.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/feriamaiz/fm09202411.jpeg" class="image"></a>
</div>
      </div>
	  
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/feriamaiz/fm09202412.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/feriamaiz/fm09202412.jpeg" class="image"></a>
</div>
      </div>
      
	<div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/feriamaiz/fm09202413.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/feriamaiz/fm09202413.jpeg" class="image"></a>
</div>
      </div>
      	  
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/feriamaiz/fm09202414.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/feriamaiz/fm09202414.jpeg" class="image"></a>
</div>
      </div>
      
     
	  <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/feriamaiz/fm09202415.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/feriamaiz/fm09202415.jpeg" class="image"></a>
</div>
      </div>
   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/feriamaiz/fm09202416.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/feriamaiz/fm09202416.jpeg" class="image"></a>
</div>
      </div>

  <div class="thumbnail">
<div class="frame">
       <a href="images/gsecundaria/feriamaiz/fm09202417.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/feriamaiz/fm09202417.jpeg" class="image"></a>
</div>
      </div>
      
      <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/feriamaiz/fm09202418.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/feriamaiz/fm09202418.jpeg" class="image"></a>
</div>
      </div>
      
       <div class="clearfix visible-col3"></div>
       
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/feriamaiz/fm09202419.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/feriamaiz/fm09202419.jpeg" class="image"></a>
</div>
      </div>
	  
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/feriamaiz/fm09202420.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/feriamaiz/fm09202420.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/feriamaiz/fm09202421.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/feriamaiz/fm09202421.jpeg" class="image"></a>
</div>
      </div>
       <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/feriamaiz/fm09202422.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/feriamaiz/fm09202422.jpeg" class="image"></a>
</div>
      </div>
      	  
      	       
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/feriamaiz/fm09202423.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/feriamaiz/fm09202423.jpeg" class="image"></a>
</div>
      </div>
      
     
	  <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/feriamaiz/fm09202424.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/feriamaiz/fm09202424.jpeg" class="image"></a>
</div>
      </div>
   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/feriamaiz/fm09202425.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/feriamaiz/fm09202425.jpeg" class="image"></a>
</div>
      </div>

<div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/feriamaiz/fm09202426.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/feriamaiz/fm09202426.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/feriamaiz/fm09202427.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/feriamaiz/fm09202427.jpeg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/feriamaiz/fm09202428.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/feriamaiz/fm09202428.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/feriamaiz/fm09202429.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/feriamaiz/fm09202429.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/feriamaiz/fm09202430.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/feriamaiz/fm09202430.jpeg" class="image"></a>
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


<!------End 13/09/2024 -------->



<!------Start 12/09/2024 ------->

<div id="wb_LayoutGrid5">
<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>
<div id="LayoutGrid5">
<div class="row">
<div class="col-1">
<div id="Article5" style="overflow:hidden;">
<div class="blogitem">
     
   <span class="blogsubject">Desfile Interno Secundaria.</span>
   <span style="color:#000000;"><br>12/09/2024</span><br>
   <div class="no-thumb"></div>
   <div class="blogdate">Wednesday, March 03, 2023<br></div>
   <br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Día%20de%20las%20Madres">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery4" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery4">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
       <a href="images/gsecundaria/desfile/ds0920241.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/desfile/ds0920241.jpeg" class="image"></a>
</div>
      </div>
      
      <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/desfile/ds0920242.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/desfile/ds0920242.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/desfile/ds0920243.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/desfile/ds0920243.jpeg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/desfile/ds0920244.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/desfile/ds0920244.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/desfile/ds0920245.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/desfile/ds0920245.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/desfile/ds0920246.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/desfile/ds0920246.jpeg" class="image"></a>
</div>
      </div>
      	   <div class="clearfix visible-col3"></div>
      	       
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/desfile/ds0920247.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/desfile/ds0920247.jpeg" class="image"></a>
</div>
      </div>
      
<!-------      
	  <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/caminata/c0920248.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/caminata/c0920248.jpeg" class="image"></a>
</div>
      </div>
  
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/caminata/c0920249.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/caminata/c0920249.jpeg" class="image"></a>
</div>
      </div>
      ----->
	   <div class="clearfix visible-col3"></div>
	   
   </div>
</div>
</div>
</div>
</div>
</div>
</div>


<!------End 12/09/2024 -------->





<!------Start 11/09/2024 ------->

<div id="wb_LayoutGrid5">
<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>
<div id="LayoutGrid5">
<div class="row">
<div class="col-1">
<div id="Article5" style="overflow:hidden;">
<div class="blogitem">
     
   <span class="blogsubject">"Caminante no hay camino, se hace camino al andar” Antonio Machado.
Un saludo a nuestra patria, celebrando el 203 aniversario de su independencia y 168 aniversario de la batalla de San Jacinto.</span>
   <span style="color:#000000;"><br>11/09/2024</span><br>
   <div class="no-thumb"></div>
   <div class="blogdate">Wednesday, March 03, 2023<br></div>
   <br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Día%20de%20las%20Madres">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery4" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery4">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
       <a href="images/gsecundaria/caminata/c0920241.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/caminata/c0920241.jpeg" class="image"></a>
</div>
      </div>
      
      <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/caminata/c0920242.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/caminata/c0920242.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/caminata/c0920243.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/caminata/c0920243.jpeg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/caminata/c0920244.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/caminata/c0920244.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/caminata/c0920245.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/caminata/c0920245.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/caminata/c0920246.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/caminata/c0920246.jpeg" class="image"></a>
</div>
      </div>
      	   <div class="clearfix visible-col3"></div>
      	       
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/caminata/c0920247.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/caminata/c0920247.jpeg" class="image"></a>
</div>
      </div>
	  <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/caminata/c0920248.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/caminata/c0920248.jpeg" class="image"></a>
</div>
      </div>
  
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/caminata/c0920249.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/caminata/c0920249.jpeg" class="image"></a>
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


<!------End 11/09/2024 -------->



<!------Start 10/09/2024 ------->
<div id="wb_LayoutGrid5">
<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>
<div id="LayoutGrid5">
<div class="row">
<div class="col-1">
<div id="Article5" style="overflow:hidden;">
<div class="blogitem">
     
   <span class="blogsubject">Acto civico 11mo</span>
   <span style="color:#000000;"><br>10/09/2024</span><br>
   <div class="no-thumb"></div>
   <div class="blogdate">Wednesday, March 03, 2023<br></div>
   <br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Día%20de%20las%20Madres">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery4" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery4">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
       <a href="images/gsecundaria/actocivico/gals09202410.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/actocivico/gals09202410.jpeg" class="image"></a>
</div>
      </div>
      
      <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/actocivico/gals09202411.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/actocivico/gals09202411.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/actocivico/gals09202412.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/actocivico/gals09202412.jpeg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/actocivico/gals09202413.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/actocivico/gals09202413.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/actocivico/gals09202414.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/actocivico/gals09202414.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/actocivico/gals09202415.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/actocivico/gals09202415.jpeg" class="image"></a>
</div>
      </div>
      	   <div class="clearfix visible-col3"></div>
      	       
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/actocivico/gals09202416.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/actocivico/gals09202416.jpeg" class="image"></a>
</div>
      </div>
	  <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/actocivico/gals09202417.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/actocivico/gals09202417.jpeg" class="image"></a>
</div>
      </div>
  
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/actocivico/gals09202418.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/actocivico/gals09202418.jpeg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   

      <div class="clearfix visible-col3"></div>      
      
   </div>
</div>
</div>
</div>
</div>
</div>
</div>


<!------End 10/09/2024 -------->



<!------Start 05/09/2024 ------->
<div id="wb_LayoutGrid5">
<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>
<div id="LayoutGrid5">
<div class="row">
<div class="col-1">
<div id="Article5" style="overflow:hidden;">
<div class="blogitem">
     
   <span class="blogsubject">Juntos impactamos nuestra comunidad! Juntos #somoscemb ! - Brigada de estudiantes trabajando para eliminar criaderos y desaparecer del dengue.</span>
   <span style="color:#000000;"><br>05/09/2024</span><br>
   <div class="no-thumb"></div>
   <div class="blogdate">Wednesday, March 03, 2023<br></div>
   <br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Día%20de%20las%20Madres">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery4" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery4">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/pdengue/gals0920241.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/pdengue/gals0920241.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/pdengue/gals0920242.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/pdengue/gals0920242.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/pdengue/gals0920243.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/pdengue/gals0920243.jpeg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/pdengue/gals0920244.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/pdengue/gals0920244.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/pdengue/gals0920245.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/pdengue/gals0920245.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/pdengue/gals0920246.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/pdengue/gals0920246.jpeg" class="image"></a>
</div>
      </div>
      	   <div class="clearfix visible-col3"></div>
      	       
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/diapadre2024/father7.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/diapadre2024/father7.jpg" class="image"></a>
</div>
      </div>
	  <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/diapadre2024/father8.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/diapadre2024/father8.jpg" class="image"></a>
</div>
      </div>
  
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/diapadre2024/father9.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/diapadre2024/father9.jpg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   

      <div class="clearfix visible-col3"></div>      
      
   </div>
</div>
</div>
</div>
</div>
</div>
</div>


<!------End 05/09/2024 -------->



<!------Start 21/06/2024 ------->
<div id="wb_LayoutGrid5">
<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>
<div id="LayoutGrid5">
<div class="row">
<div class="col-1">
<div id="Article5" style="overflow:hidden;">
<div class="blogitem">
     
   <span class="blogsubject">Día de del padre (2024)</span>
   <span style="color:#000000;"><br>21/06/2024</span><br>
   <div class="no-thumb"></div>
   <div class="blogdate">Wednesday, March 03, 2023<br></div>
   <br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Día%20de%20las%20Madres">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery4" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery4">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/diapadre2024/father1.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/diapadre2024/father1.jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/diapadre2024/father2.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/diapadre2024/father2.jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/diapadre2024/father3.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/diapadre2024/father3.jpg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/diapadre2024/father4.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/diapadre2024/father4.jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/diapadre2024/father5.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/diapadre2024/father5.jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/diapadre2024/father6.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/diapadre2024/father6.jpg" class="image"></a>
</div>
      </div>
      	   <div class="clearfix visible-col3"></div>
      	       
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/diapadre2024/father7.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/diapadre2024/father7.jpg" class="image"></a>
</div>
      </div>
	  <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/diapadre2024/father8.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/diapadre2024/father8.jpg" class="image"></a>
</div>
      </div>
  
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/diapadre2024/father9.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/diapadre2024/father9.jpg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   
	   <!-------
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/deporte2024/deporte55.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/deporte2024/deporte55.jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/deporte2024/deporte62.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/deporte2024/deporte62.jpg" class="image"></a>
</div>
      </div>
       <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/deporte2024/deporte74.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/deporte2024/deporte74.jpg" class="image"></a>
</div>
      </div>
      
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/deporte2024/deporte93.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/deporte2024/deporte93.jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/deporte2024/deporte106.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/deporte2024/deporte106.jpg" class="image"></a>
</div>
      </div>
       <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/deporte2024/deporte126.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/deporte2024/deporte126.jpg" class="image"></a>
</div>
      </div><!--------  ------>
      <div class="clearfix visible-col3"></div>      
      
   </div>
</div>
</div>
</div>
</div>
</div>
</div>


<!------End 21/06/2024 -------->

<!------Start 30/05/2024 ------->
<div id="wb_LayoutGrid5">
<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>
<div id="LayoutGrid5">
<div class="row">
<div class="col-1">
<div id="Article5" style="overflow:hidden;">
<div class="blogitem">
     
   <span class="blogsubject">Día de de la madre (2024)</span>
   <span style="color:#000000;"><br>30/05/2024</span><br>
   <div class="no-thumb"></div>
   <div class="blogdate">Wednesday, March 03, 2023<br></div>
   <br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Día%20de%20las%20Madres">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery4" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery4">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/diamadre2024/mds1.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/diamadre2024/mds1.jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/diamadre2024/mds2.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/diamadre2024/mds2.jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/diamadre2024/mds3.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/diamadre2024/mds3.jpg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/diamadre2024/mds4.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/diamadre2024/mds4.jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/diamadre2024/mds5.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/diamadre2024/mds5.jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/diamadre2024/mds6.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/diamadre2024/mds6.jpg" class="image"></a>
</div>
      </div>
      	   <div class="clearfix visible-col3"></div>
      	       
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/diamadre2024/mds7.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/diamadre2024/mds7.jpg" class="image"></a>
</div>
      </div>
	  <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/diamadre2024/mds8.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/diamadre2024/mds8.jpg" class="image"></a>
</div>
      </div>
  
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/diamadre2024/mds9.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/diamadre2024/mds9.jpg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   
	   <!-------
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/deporte2024/deporte55.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/deporte2024/deporte55.jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/deporte2024/deporte62.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/deporte2024/deporte62.jpg" class="image"></a>
</div>
      </div>
       <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/deporte2024/deporte74.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/deporte2024/deporte74.jpg" class="image"></a>
</div>
      </div>
      
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/deporte2024/deporte93.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/deporte2024/deporte93.jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/deporte2024/deporte106.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/deporte2024/deporte106.jpg" class="image"></a>
</div>
      </div>
       <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/deporte2024/deporte126.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/deporte2024/deporte126.jpg" class="image"></a>
</div>
      </div><!--------  ------>
      <div class="clearfix visible-col3"></div>      
      
   </div>
</div>
</div>
</div>
</div>
</div>
</div>


<!------End 30/05/2024 -------->


<!------Start 17/05/2024 ------->
<div id="wb_LayoutGrid5">
<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>
<div id="LayoutGrid5">
<div class="row">
<div class="col-1">
<div id="Article5" style="overflow:hidden;">
<div class="blogitem">
     
   <span class="blogsubject">Día de descombinado y Angeles y Angelados en Secundaria (Aniversario 58 del CEMB)</span>
   <span style="color:#000000;"><br>17/05/2024</span><br>
   <div class="no-thumb"></div>
   <div class="blogdate">Wednesday, March 03, 2023<br></div>
   <br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Día%20de%20las%20Madres">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery4" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery4">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/deporte2024/deporte1.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/deporte2024/deporte1.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/deporte2024/deporte2.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/deporte2024/deporte2.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/deporte2024/deporte152.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/deporte2024/deporte152.jpg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/deporte2024/deporte156.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/deporte2024/deporte156.jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/deporte2024/deporte10.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/deporte2024/deporte10.jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/deporte2024/deporte14.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/deporte2024/deporte14.jpg" class="image"></a>
</div>
      </div>
      	   <div class="clearfix visible-col3"></div>
      	       
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/deporte2024/deporte25.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/deporte2024/deporte25.jpg" class="image"></a>
</div>
      </div>
	  <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/deporte2024/deporte49.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/deporte2024/deporte49.jpg" class="image"></a>
</div>
      </div>
  
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/deporte2024/deporte53.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/deporte2024/deporte53.jpg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/deporte2024/deporte55.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/deporte2024/deporte55.jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/deporte2024/deporte62.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/deporte2024/deporte62.jpg" class="image"></a>
</div>
      </div><!--------  ------>
       <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/deporte2024/deporte74.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/deporte2024/deporte74.jpg" class="image"></a>
</div>
      </div><!--------  ------>
      
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/deporte2024/deporte93.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/deporte2024/deporte93.jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/deporte2024/deporte106.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/deporte2024/deporte106.jpg" class="image"></a>
</div>
      </div><!--------  ------>
       <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/deporte2024/deporte126.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/deporte2024/deporte126.jpg" class="image"></a>
</div>
      </div><!--------  ------>
      <div class="clearfix visible-col3"></div>      
      
   </div>
</div>
</div>
</div>
</div>
</div>
</div>


<!------End 17/05/2024 -------->

<!------Start 16/05/2024 ------->
<div id="wb_LayoutGrid5">
<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>
<div id="LayoutGrid5">
<div class="row">
<div class="col-1">
<div id="Article5" style="overflow:hidden;">
<div class="blogitem">
     
   <span class="blogsubject">Día de descombinado y Angeles y Angelados en Secundaria (Aniversario 58 del CEMB)</span>
   <span style="color:#000000;"><br>16/05/2024</span><br>
   <div class="no-thumb"></div>
   <div class="blogdate">Wednesday, March 03, 2023<br></div>
   <br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Día%20de%20las%20Madres">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery4" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery4">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/descombinado2024/descomb4.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/descombinado2024/descomb4.jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/descombinado2024/descomb6.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/descombinado2024/descomb6.jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/descombinado2024/descomb10.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/descombinado2024/descomb10.jpg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/descombinado2024/descomb12.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/descombinado2024/descomb12.jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/descombinado2024/descomb14.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/descombinado2024/descomb14.jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/descombinado2024/descomb15.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/descombinado2024/descomb15.jpg" class="image"></a>
</div>
      </div>
      	   <div class="clearfix visible-col3"></div>
      	       
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/descombinado2024/descomb16.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/descombinado2024/descomb16.jpg" class="image"></a>
</div>
      </div>
	  <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/descombinado2024/descomb20.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/descombinado2024/descomb20.jpg" class="image"></a>
</div>
      </div>
  
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/descombinado2024/descomb29.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/descombinado2024/descomb29.jpg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/descombinado2024/descomb31.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/descombinado2024/descomb31.jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/descombinado2024/descomb34.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/descombinado2024/descomb34.jpg" class="image"></a>
</div>
      </div><!--------  ------>
       <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/descombinado2024/descomb37.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/descombinado2024/descomb37.jpg" class="image"></a>
</div>
      </div><!--------  ------>
      <div class="clearfix visible-col3"></div>
   </div>
</div>
</div>
</div>
</div>
</div>
</div>


<!------End 16/05/2024 -------->


<!------Start 15/05/2024 ------->
<div id="wb_LayoutGrid5">
<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>
<div id="LayoutGrid5">
<div class="row">
<div class="col-1">
<div id="Article5" style="overflow:hidden;">
<div class="blogitem">
     
   <span class="blogsubject">Día de pijama en Secundaria (Aniversario 58 del CEMB)</span>
   <span style="color:#000000;"><br>15/05/2024</span><br>
   <div class="no-thumb"></div>
   <div class="blogdate">Wednesday, March 03, 2023<br></div>
   <br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Día%20de%20las%20Madres">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery4" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery4">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/pijama2024/pijama2.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/pijama2024/pijama2.jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/pijama2024/pijama3.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/pijama2024/pijama3.jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/pijama2024/pijama16.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/pijama2024/pijama16.jpg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/pijama2024/pijama15.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/pijama2024/pijama15.jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/pijama2024/pijama20.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/pijama2024/pijama20.jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/pijama2024/pijama26.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/pijama2024/pijama26.jpg" class="image"></a>
</div>
      </div>
      	   <div class="clearfix visible-col3"></div>
      	       <!-------- 
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/pijama2024/pijama2.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/pijama2024/pijama2.jpg" class="image"></a>
</div>
      </div>
	  <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/pijama2024/pijama3.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/pijama2024/pijama3.jpg" class="image"></a>
</div>
      </div>
  
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/seniors2024/seniors20249.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/seniors2024/seniors20249.jpeg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/seniors2024/seniors202410.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/seniors2024/seniors202410.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/seniors2024/seniors202411.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/seniors2024/seniors202411.jpeg" class="image"></a>
</div>
      </div> ------>
      
      <div class="clearfix visible-col3"></div>
   </div>
</div>
</div>
</div>
</div>
</div>
</div>


<!------End 15/05/2024 -------->


<!------Start 14/05/2024 ------->
<div id="wb_LayoutGrid5">
<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>
<div id="LayoutGrid5">
<div class="row">
<div class="col-1">
<div id="Article5" style="overflow:hidden;">
<div class="blogitem">
     
   <span class="blogsubject">Día de vaquero en Secundaria (Aniversario 58 del CEMB)</span>
   <span style="color:#000000;"><br>14/05/2024</span><br>
   <div class="no-thumb"></div>
   <div class="blogdate">Wednesday, March 03, 2023<br></div>
   <br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Día%20de%20las%20Madres">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery4" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery4">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/vaquero2024/vaquero49.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/vaquero2024/vaquero49.jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/vaquero2024/vaquero51.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/vaquero2024/vaquero51.jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/vaquero2024/vaquero59.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/vaquero2024/vaquero59.jpg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/vaquero2024/vaquero60.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/vaquero2024/vaquero60.jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/vaquero2024/vaquero65.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/vaquero2024/vaquero65.jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/gemelos2024/vaquero2024/vaquero43.jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/vaquero2024/vaquero43.jpg" class="image"></a>
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


<!------End 14/05/2024 -------->



<!------Start 13/05/2024 ------->
<div id="wb_LayoutGrid5">
<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>
<div id="LayoutGrid5">
<div class="row">
<div class="col-1">
<div id="Article5" style="overflow:hidden;">
<div class="blogitem">
     
   <span class="blogsubject">Día de gemelos en Secundaria (Aniversario 58 del CEMB)</span>
   <span style="color:#000000;"><br>13/05/2024</span><br>
   <div class="no-thumb"></div>
   <div class="blogdate">Wednesday, March 03, 2023<br></div>
   <br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Día%20de%20las%20Madres">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery4" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery4">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/gemelos2024/gemelo9.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/gemelos2024/gemelo9.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/gemelos2024/gemelo10.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/gemelos2024/gemelo10.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/gemelos2024/gemelo11.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/gemelos2024/gemelo11.jpeg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/gemelos2024/gemelo14.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/gemelos2024/gemelo14.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/gemelos2024/gemelo15.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/gemelos2024/gemelo15.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/gemelos2024/gemelo16.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/gemelos2024/gemelo16.jpeg" class="image"></a>
</div>
      </div>
 <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/gemelos2024/gemelo17.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/gemelos2024/gemelo17.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/gemelos2024/gemelo18.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/gemelos2024/gemelo18.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/gemelos2024/gemelo19.jpeg.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/gemelos2024/gemelo19.jpeg" class="image"></a>
</div>
      </div>     
      
 <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/gemelos2024/gemelo20.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/gemelos2024/gemelo20.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/gemelos2024/gemelo21.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/gemelos2024/gemelo21.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/gemelos2024/gemelo27.jpeg.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/gemelos2024/gemelo27.jpeg" class="image"></a>
</div>
      </div>      
 <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/gemelos2024/gemelo28.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/gemelos2024/gemelo28.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/gemelos2024/gemelo29.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/gemelos2024/gemelo29.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/gemelos2024/gemelo30.jpeg.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/gemelos2024/gemelo30.jpeg" class="image"></a>
</div>
      </div>
      
 <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/gemelos2024/gemelo31.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/gemelos2024/gemelo31.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/gemelos2024/gemelo34.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/gemelos2024/gemelo34.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/gemelos2024/gemelo35.jpeg.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/gemelos2024/gemelo35.jpeg" class="image"></a>
</div>
      </div>      
       <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/gemelos2024/gemelo36.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/gemelos2024/gemelo36.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/gemelos2024/gemelo38.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/gemelos2024/gemelo38.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/gemelos2024/gemelo39.jpeg.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/gemelos2024/gemelo39.jpeg" class="image"></a>
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


<!------End 13/05/2024 -------->


<!------Start 13/02/2024 ------->
<div id="wb_LayoutGrid5">
<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>
<div id="LayoutGrid5">
<div class="row">
<div class="col-1">
<div id="Article5" style="overflow:hidden;">
<div class="blogitem">
     
   <span class="blogsubject">Celebrando el día del amor y la amistad</span>
   <span style="color:#000000;"><br>13/02/2024</span><br>
   <div class="no-thumb"></div>
   <div class="blogdate">Wednesday, March 03, 2023<br></div>
   <br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Día%20de%20las%20Madres">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery4" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery4">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/sanvalentin2024/love202411.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/sanvalentin2024/love202411.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/sanvalentin2024/love202412.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/sanvalentin2024/love202412.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/sanvalentin2024/love202413.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/sanvalentin2024/love202413.jpeg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/sanvalentin2024/love202414.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/sanvalentin2024/love202414.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/sanvalentin2024/love202415.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/sanvalentin2024/love202415.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/sanvalentin2024/love202416.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/sanvalentin2024/love202416.jpeg" class="image"></a>
</div>
      </div>
      
<!--------      
      
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/seniors2024/seniors20247.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/seniors2024/seniors20247.jpeg" class="image"></a>
</div>
      </div>
	  <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/seniors2024/seniors20248.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/seniors2024/seniors20248.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/seniors2024/seniors20249.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/seniors2024/seniors20249.jpeg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/seniors2024/seniors202410.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/seniors2024/seniors202410.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/seniors2024/seniors202411.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/seniors2024/seniors202411.jpeg" class="image"></a>
</div>
      </div> ------>
      
      <div class="clearfix visible-col3"></div>
   </div>
</div>
</div>
</div>
</div>
</div>
</div>


<!------End 13/02/2024 -------->

<!------Start 29/01/2024 ------->
<div id="wb_LayoutGrid5">
<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>
<div id="LayoutGrid5">
<div class="row">
<div class="col-1">
<div id="Article5" style="overflow:hidden;">
<div class="blogitem">
     
   <span class="blogsubject">Bienvenida a los seniors 2024</span>
   <span style="color:#000000;"><br>29/01/2024</span><br>
   <div class="no-thumb"></div>
   <div class="blogdate">Wednesday, March 03, 2023<br></div>
   <br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Día%20de%20las%20Madres">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery4" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery4">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/seniors2024/seniors20241.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/seniors2024/seniors20241.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/seniors2024/seniors20242.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/seniors2024/seniors20242.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/seniors2024/seniors20243.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/seniors2024/seniors20243.jpeg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/seniors2024/seniors20244.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/seniors2024/seniors20244.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/seniors2024/seniors20245.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/seniors2024/seniors20245.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/seniors2024/seniors20246.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/seniors2024/seniors20246.jpeg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/seniors2024/seniors20247.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/seniors2024/seniors20247.jpeg" class="image"></a>
</div>
      </div>
	  <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/seniors2024/seniors20248.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/seniors2024/seniors20248.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/seniors2024/seniors20249.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/seniors2024/seniors20249.jpeg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/seniors2024/seniors202410.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/seniors2024/seniors202410.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/seniors2024/seniors202411.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/seniors2024/seniors202411.jpeg" class="image"></a>
</div>
      </div>
      
<!-----      
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/Carwash13052023/Carwash13052023 (12).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/Carwash13052023/Carwash13052023 (12).jpg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/Carwash13052023/Carwash13052023 (13).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/Carwash13052023/Carwash13052023 (13).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/Carwash13052023/Carwash13052023 (14).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/Carwash13052023/Carwash13052023 (14).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/Carwash13052023/Carwash13052023 (15).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/Carwash13052023/Carwash13052023 (15).jpg" class="image"></a>
</div>
      </div> ----->
      <div class="clearfix visible-col3"></div>
   </div>
</div>
</div>
</div>
</div>
</div>
</div>


<!------End 29/01/2024 -------->


<!--------
	<div id="wb_LayoutGrid2">
<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>
<div id="LayoutGrid5">
<div class="row">
<div class="col-1">
<div id="Article5" style="overflow:hidden;">
<div class="blogitem">
  <!-- <span class="blogsubject">15/02/2021</span>-->
<!------   <div class="no-thumb"></div>
   <div class="blogdate">Monday, February 15, 2021<br></div>
   <span class="blogsubject">Bienvenida a los seniors 2024</span>
	<span style="color:#000000;"><br>29/01/2024</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=15/02/2021">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
	<div class="col-1"></div>
	<div class="col-2">
<!--------<iframe width="560" height="315" src="https://www.youtube.com/embed/jeuwxQ9p60E?si=EXhgKwQIlstDJ4VM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
	</div>	
	<div class="col-3"></div>
	<div id="wb_PhotoGallery4" style="display:inline-block;width:100%;z-index:5;"> ---->
<!----- <div id="PhotoGallery4">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/seniors2024/seniors20241.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/seniors2024/seniors20241.jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
       <a href="images/gsecundaria/seniors2024/seniors20242.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/seniors2024/seniors20242.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
          <a href="images/gsecundaria/seniors2024/seniors20243.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/seniors2024/seniors20243.jpeg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
       <a href="images/gsecundaria/seniors2024/seniors20244.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/seniors2024/seniors20244.jpeg" class="image"></a>
</div>
</div>   
      <div class="thumbnail">
<div class="frame">
            <a href="images/gsecundaria/seniors2024/seniors20245.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/seniors2024/seniors20245.jpeg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
           <a href="images/gsecundaria/seniors2024/seniors20246.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/seniors2024/seniors20246.jpeg" class="image"></a>
</div>
<div class="clearfix visible-col3"></div>
<div class="thumbnail">
<div class="frame">
           <a href="images/gsecundaria/seniors2024/seniors20247.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/seniors2024/seniors20247.jpeg" class="image"></a>
</div>
<div class="thumbnail">
<div class="frame">
           <a href="images/gsecundaria/seniors2024/seniors20248.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/seniors2024/seniors20248.jpeg" class="image"></a>
</div>
<div class="thumbnail">
<div class="frame">
           <a href="images/gsecundaria/seniors2024/seniors20249.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/seniors2024/seniors20249.jpeg" class="image"></a>
</div>
<div class="clearfix visible-col3"></div>
<div class="thumbnail">
<div class="frame">
           <a href="images/gsecundaria/seniors2024/seniors202410.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/seniors2024/seniors202410.jpeg" class="image"></a>
</div>
<div class="thumbnail">
<div class="frame">
           <a href="images/gsecundaria/seniors2024/seniors202411.jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/seniors2024/seniors202411.jpeg" class="image"></a>
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
</div>
</div>
</div>
</div> ------>



	
	<div id="wb_LayoutGrid2">
<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>
<div id="LayoutGrid5">
<div class="row">
<div class="col-1">
<div id="Article5" style="overflow:hidden;">
<div class="blogitem">
  <!-- <span class="blogsubject">15/02/2021</span>-->
   <div class="no-thumb"></div>
   <div class="blogdate">Monday, February 15, 2021<br></div>
   <span class="blogsubject">Fería Interculturar CentroAméricana CEMB 2023</span>
	<span style="color:#000000;"><br>22/08/2023</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=15/02/2021">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
	<div class="col-1"></div>
	<div class="col-2">
<iframe width="560" height="315" src="https://www.youtube.com/embed/jeuwxQ9p60E?si=EXhgKwQIlstDJ4VM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
	</div>	
	<div class="col-3"></div>
	<div id="wb_PhotoGallery4" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery4">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/FeriaInterculturalCA2023/FeriaInterculturalCA2023 (1).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/FeriaInterculturalCA2023/FeriaInterculturalCA2023 (1).jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/FeriaInterculturalCA2023/FeriaInterculturalCA2023 (2).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/FeriaInterculturalCA2023/FeriaInterculturalCA2023 (2).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/FeriaInterculturalCA2023/FeriaInterculturalCA2023 (3).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/FeriaInterculturalCA2023/FeriaInterculturalCA2023 (3).jpg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/FeriaInterculturalCA2023/FeriaInterculturalCA2023 (4).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/FeriaInterculturalCA2023/FeriaInterculturalCA2023 (4).jpg" class="image"></a>
</div>
</div>   
      <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/FeriaInterculturalCA2023/FeriaInterculturalCA2023 (5).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/FeriaInterculturalCA2023/FeriaInterculturalCA2023 (5).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/FeriaInterculturalCA2023/FeriaInterculturalCA2023 (6).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/FeriaInterculturalCA2023/FeriaInterculturalCA2023 (6).jpg" class="image"></a>
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
<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>
<div id="LayoutGrid5">
<div class="row">
<div class="col-1">
<div id="Article5" style="overflow:hidden;">
<div class="blogitem">
  <!-- <span class="blogsubject">15/02/2021</span>-->
   <div class="no-thumb"></div>
   <div class="blogdate">Monday, February 15, 2021<br></div>
   <span class="blogsubject">Celebrando el día del Padre CEMB 2023</span>
	<span style="color:#000000;"><br>21/08/2023</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=15/02/2021">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
	<div class="col-1"></div>
	<div class="col-2">
<iframe width="560" height="315" src="https://www.youtube.com/embed/kZdrG8djEvo?si=7Y-JMhh1f2K6OyVM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
	</div>	
	<div class="col-3"></div>
</div>
</div>
</div>
</div>
		<div id="wb_LayoutGrid2">
<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>
<div id="LayoutGrid5">
<div class="row">
<div class="col-1">
<div id="Article5" style="overflow:hidden;">
<div class="blogitem">
  <!-- <span class="blogsubject">15/02/2021</span>-->
   <div class="no-thumb"></div>
   <div class="blogdate">Monday, February 15, 2021<br></div>
   <span class="blogsubject">Fería de Universidades 2023</span>
	<span style="color:#000000;"><br>15/08/2023</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=15/02/2021">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
	<div class="col-1"></div>
	<div class="col-2">
<iframe width="560" height="315" src="https://www.youtube.com/embed/oRtTSmV_UFw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
	</div>	
	<div class="col-3"></div>
</div>
</div>
</div>
</div>
	
<div id="wb_LayoutGrid5">
<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>
<div id="LayoutGrid5">
<div class="row">
<div class="col-1">
<div id="Article5" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">CarWash por alumnos de secundaria, 57 Aniversario CEMB 2023</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Wednesday, March 03, 2023<br></div>
   <br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Día%20de%20las%20Madres">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery4" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery4">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/Carwash13052023/Carwash13052023 (1).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/Carwash13052023/Carwash13052023 (1).jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/Carwash13052023/Carwash13052023 (2).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/Carwash13052023/Carwash13052023 (2).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/Carwash13052023/Carwash13052023 (3).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/Carwash13052023/Carwash13052023 (3).jpg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/Carwash13052023/Carwash13052023 (4).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/Carwash13052023/Carwash13052023 (4).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/Carwash13052023/Carwash13052023 (5).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/Carwash13052023/Carwash13052023 (5).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/Carwash13052023/Carwash13052023 (6).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/Carwash13052023/Carwash13052023 (6).jpg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/Carwash13052023/Carwash13052023 (7).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/Carwash13052023/Carwash13052023 (7).jpg" class="image"></a>
</div>
      </div>
	  <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/Carwash13052023/Carwash13052023 (8).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/Carwash13052023/Carwash13052023 (8).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/Carwash13052023/Carwash13052023 (9).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/Carwash13052023/Carwash13052023 (9).jpg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/Carwash13052023/Carwash13052023 (10).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/Carwash13052023/Carwash13052023 (10).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/Carwash13052023/Carwash13052023 (11).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/Carwash13052023/Carwash13052023 (11).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/Carwash13052023/Carwash13052023 (12).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/Carwash13052023/Carwash13052023 (12).jpg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/Carwash13052023/Carwash13052023 (13).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/Carwash13052023/Carwash13052023 (13).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/Carwash13052023/Carwash13052023 (14).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/Carwash13052023/Carwash13052023 (14).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/Carwash13052023/Carwash13052023 (15).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/Carwash13052023/Carwash13052023 (15).jpg" class="image"></a>
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
	<!------31/*01/2024
<div id="wb_LayoutGrid5">
<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>
<div id="LayoutGrid5">
<div class="row">
<div class="col-1">
<div id="Article5" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Celebrando el día Internacional de la Mujer CEMB 2023</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Wednesday, March 03, 2023<br></div>
   <br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Día%20de%20las%20Madres">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery4" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery4">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/DiadLamujer08032023/DiadLamujer08032023 (1).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/DiadLamujer08032023/DiadLamujer08032023 (1).jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/DiadLamujer08032023/DiadLamujer08032023 (2).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/DiadLamujer08032023/DiadLamujer08032023 (2).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/DiadLamujer08032023/DiadLamujer08032023 (3).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/DiadLamujer08032023/DiadLamujer08032023 (3).jpg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/DiadLamujer08032023/DiadLamujer08032023 (4).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/DiadLamujer08032023/DiadLamujer08032023 (4).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/DiadLamujer08032023/DiadLamujer08032023 (5).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/DiadLamujer08032023/DiadLamujer08032023 (5).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/DiadLamujer08032023/DiadLamujer08032023 (6).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/DiadLamujer08032023/DiadLamujer08032023 (6).jpg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/DiadLamujer08032023/DiadLamujer08032023 (7).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/DiadLamujer08032023/DiadLamujer08032023 (7).jpg" class="image"></a>
</div>
      </div>
	  <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/DiadLamujer08032023/DiadLamujer08032023 (8).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/DiadLamujer08032023/DiadLamujer08032023 (8).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/DiadLamujer08032023/DiadLamujer08032023 (9).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/DiadLamujer08032023/DiadLamujer08032023 (9).jpg" class="image"></a>
</div>
      </div>
	   <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/DiadLamujer08032023/DiadLamujer08032023 (10).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/DiadLamujer08032023/DiadLamujer08032023 (10).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/DiadLamujer08032023/DiadLamujer08032023 (11).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/DiadLamujer08032023/DiadLamujer08032023 (11).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/DiadLamujer08032023/DiadLamujer08032023 (12).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/DiadLamujer08032023/DiadLamujer08032023 (12).jpg" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/DiadLamujer08032023/DiadLamujer08032023 (13).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/DiadLamujer08032023/DiadLamujer08032023 (13).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/DiadLamujer08032023/DiadLamujer08032023 (14).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/DiadLamujer08032023/DiadLamujer08032023 (14).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/DiadLamujer08032023/DiadLamujer08032023 (15).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/DiadLamujer08032023/DiadLamujer08032023 (15).jpg" class="image"></a>
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
<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>
<div id="LayoutGrid5">
<div class="row">
<div class="col-1">
<div id="Article5" style="overflow:hidden;">
<div class="blogitem">
  <!-- <span class="blogsubject">15/02/2021</span>-->
  <!----31/01/2024
   <div class="no-thumb"></div>
   <div class="blogdate">Monday, February 15, 2021<br></div>
   <span class="blogsubject">¿Por qué el CEMB es tu mejor opción?</span>
	<span style="color:#000000;"><br>22/11/2022</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=15/02/2021">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
	<div class="col-1"></div>
	<div class="col-2">
<iframe width="560" height="315" src="https://www.youtube.com/embed/kU7rSCqnDhs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>	
	<div class="col-3"></div>
</div>
</div>
</div>
</div>
	
	
	<div id="wb_LayoutGrid2">
<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>
<div id="LayoutGrid5">
<div class="row">
<div class="col-1">
<div id="Article5" style="overflow:hidden;">
<div class="blogitem">
  <!-- <span class="blogsubject">15/02/2021</span>-->
  <!-----31/01/2024
   <div class="no-thumb"></div>
   <div class="blogdate">Monday, February 15, 2021<br></div>
   <span class="blogsubject">Talent Show CEMB 2022</span>
	<span style="color:#000000;"><br>09/11/2022</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=15/02/2021">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
	<div class="col-1"></div>
	<div class="col-2">
<iframe width="560" height="315" src="https://www.youtube.com/embed/vY1bLRTiID4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>	
	<div class="col-3"></div>
</div>
</div>
</div>
</div>
	
	
	<div id="wb_LayoutGrid2">
<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>
<div id="LayoutGrid5">
<div class="row">
<div class="col-1">
<div id="Article5" style="overflow:hidden;">
<div class="blogitem">
  <!-- <span class="blogsubject">15/02/2021</span>-->
  
  <!-----31/01/2024
   <div class="no-thumb"></div>
   <div class="blogdate">Monday, February 15, 2021<br></div>
   <span class="blogsubject">Alumnos de secundaria celebrando las fiestas Patrias</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=15/02/2021">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
	<div class="col-1"></div>
	<div class="col-2">
<iframe width="560" height="315" src="https://www.youtube.com/embed/-jtj-Htf8jg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>	
	<div class="col-3"></div>
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
   <span class="blogsubject">Concurso de Ajedrez</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Friday, June 17, 2022<br></div>
   <br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Día%20de%20las%20Madres">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery4" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery4">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/ConcursodeAjedrez26072022/ConcursodeAjedrez26072022 (1).jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/ConcursodeAjedrez26072022/ConcursodeAjedrez26072022 (1).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/ConcursodeAjedrez26072022/ConcursodeAjedrez26072022 (1).jpeg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/ConcursodeAjedrez26072022/ConcursodeAjedrez26072022 (2).jpeg" class="image"></a>
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
   <span class="blogsubject">Celebrando el día del Maestro CEMB 2022</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Friday, June 17, 2022<br></div>
   <br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Día%20de%20las%20Madres">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery4" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery4">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/DiaMaestroSecundaria2022/DiaMaestroSecundaria2022 (1).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/DiaMaestroSecundaria2022/DiaMaestroSecundaria2022 (1).jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/DiaMaestroSecundaria2022/DiaMaestroSecundaria2022 (2).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/DiaMaestroSecundaria2022/DiaMaestroSecundaria2022 (2).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/DiaMaestroSecundaria2022/DiaMaestroSecundaria2022 (3).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/DiaMaestroSecundaria2022/DiaMaestroSecundaria2022 (3).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/DiaMaestroSecundaria2022/DiaMaestroSecundaria2022 (4).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/DiaMaestroSecundaria2022/DiaMaestroSecundaria2022 (4).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/DiaMaestroSecundaria2022/DiaMaestroSecundaria2022 (5).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/DiaMaestroSecundaria2022/DiaMaestroSecundaria2022 (5).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/DiaMaestroSecundaria2022/DiaMaestroSecundaria2022 (6).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/DiaMaestroSecundaria2022/DiaMaestroSecundaria2022 (6).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/DiaMaestroSecundaria2022/DiaMaestroSecundaria2022 (7).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/DiaMaestroSecundaria2022/DiaMaestroSecundaria2022 (7).jpg" class="image"></a>
</div>
      </div>
	  <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/DiaMaestroSecundaria2022/DiaMaestroSecundaria2022 (8).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/DiaMaestroSecundaria2022/DiaMaestroSecundaria2022 (8).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/DiaMaestroSecundaria2022/DiaMaestroSecundaria2022 (9).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/DiaMaestroSecundaria2022/DiaMaestroSecundaria2022 (9).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/DiaMaestroSecundaria2022/DiaMaestroSecundaria2022 (10).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/DiaMaestroSecundaria2022/DiaMaestroSecundaria2022 (10).jpg" class="image"></a>
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
   <span class="blogsubject">Singing Contest Secundaria 2022</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Thursday, April 22, 2021<br></div>
   <br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Día%20de%20las%20Madres">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery4" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery4">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (1).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (1).jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (2).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (2).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (3).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (3).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (4).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (4).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (5).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (5).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (6).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (6).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (7).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (7).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (8).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (8).jpg" class="image"></a>
</div>
      </div>
	    <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (9).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (9).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (10).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (10).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (11).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (11).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (12).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (12).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (13).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (13).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (14).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (14).jpg" class="image"></a>
</div>
      </div>
	    <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (15).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (15).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (16).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (16).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (17).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (17).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (18).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (18).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (18).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (18).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (19).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (19).jpg" class="image"></a>
</div>
      </div>
	    <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (20).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (20).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (21).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (21).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (22).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (23).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (24).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (24).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (25).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (25).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (26).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (26).jpg" class="image"></a>
</div>
      </div>
	    <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (27).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (27).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (28).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (28).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (29).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (29).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (30).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (30).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (31).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (31).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (32).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (32).jpg" class="image"></a>
</div>
      </div>
	    <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (33).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (33).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (34).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (34).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (35).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (35).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (36).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (36).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (37).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (37).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (38).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (38).jpg" class="image"></a>
</div>
      </div>
	    <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (39).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (39).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (40).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (40).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (41).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (41).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (42).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (42).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (43).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (43).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (44).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (44).jpg" class="image"></a>
</div>
      </div>
	    <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (45).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (45).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (46).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (46).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (47).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (47).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (48).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (48).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (49).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (49).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (50).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/SingingContestSecundariaCEMB2022/SingingContestSecundariaCEMB2022 (50).jpg" class="image"></a>
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
   <span class="blogsubject">Celebrando el día de las Madres CEMB 2022</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Thursday, April 22, 2021<br></div>
   <br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Día%20de%20las%20Madres">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery4" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery4">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/DiaMadreSecundaria2022/DiaMadreSecundaria2022 (1).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/DiaMadreSecundaria2022/DiaMadreSecundaria2022 (1).jpg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/DiaMadreSecundaria2022/DiaMadreSecundaria2022 (2).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/DiaMadreSecundaria2022/DiaMadreSecundaria2022 (2).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/DiaMadreSecundaria2022/DiaMadreSecundaria2022 (3).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/DiaMadreSecundaria2022/DiaMadreSecundaria2022 (3).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/DiaMadreSecundaria2022/DiaMadreSecundaria2022 (4).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/DiaMadreSecundaria2022/DiaMadreSecundaria2022 (4).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/DiaMadreSecundaria2022/DiaMadreSecundaria2022 (5).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/DiaMadreSecundaria2022/DiaMadreSecundaria2022 (5).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/DiaMadreSecundaria2022/DiaMadreSecundaria2022 (6).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/DiaMadreSecundaria2022/DiaMadreSecundaria2022 (6).jpg" class="image"></a>
</div>
      </div>
	   <div class="thumbnail">
<div class="frame">
         <a href="images/gsecundaria/DiaMadreSecundaria2022/DiaMadreSecundaria2022 (7).jpg" data-rel="PhotoGallery4"><img alt="" src="images/gsecundaria/DiaMadreSecundaria2022/DiaMadreSecundaria2022 (7).jpg" class="image"></a>
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

<div id="wb_PhotoGallery5" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery5">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/agradecimiento-11mo-cemb-2021.jpeg"><img alt="" src="images/agradecimiento-11mo-cemb-2021.jpeg" class="image"></a>
</div>
      </div>
     
      <div class="clearfix visible-col2"></div>
   </div>
</div>
</div>
</div>
</div>
</div>
</div>
	<!--fin-->
	<!-----31/01/2024
<div id="wb_LayoutGrid5">
<div id="LayoutGrid5">
<div class="row">
<div class="col-1">
<div id="Article5" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Día de las Madres</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Thursday, April 22, 2021<br></div>
   <br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Día%20de%20las%20Madres">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery5" style="display:inline-block;width:100%;z-index:5;">
<div id="PhotoGallery5">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="https://docs.google.com/presentation/d/1K-HPiXoGjLem-fGL8QCa3IQCpzKFVI8z2zIrxhEWZzM/present?token=AC4w5VhelLRqz3AEt-E2veHM-CDl3Lhr4w:1622337110685&includes_info_params=1&eisi=CPiHwdmc8PACFQlJygodbC4KQg&slide=id.g711fbdbd1b_1_9"><img alt="" src="images/happy mother day 10mo.png" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="https://youtu.be/p0_Bo5o6qNU"><img alt="" src="images/happy mother day secundaria.png" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col2"></div>
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
<div id="Article4" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">Spelling Bee</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Thursday, April 22, 2021<br></div>
   <span style="color:#000080;"><br>
Este Viernes 23 de abril se realizó compentencia entre alumnos de primaria</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=Spelling%20Bee">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery4" style="display:inline-block;width:100%;z-index:7;">
<div id="PhotoGallery4">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00502.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00502.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00504.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00504.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00505.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00505.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00506.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00506.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00507.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00507.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00509.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00509.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00510.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00510.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00511.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00511.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00512.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00512.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00515.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00515.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00516.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00516.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00517.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00517.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00518.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00518.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00520.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00520.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00521.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00521.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00523.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00523.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00525.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00525.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00526.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00526.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00527.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00527.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00528.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00528.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00530.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00530.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00531.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00531.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00534.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00534.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00536.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00536.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00537.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00537.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00538.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00538.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00539.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00539.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00540.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00540.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00541.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00541.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00542.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00542.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00543.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00543.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00545.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00545.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00546.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00546.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00547.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00547.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00549.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00549.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00551.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00551.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00552.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00552.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00553.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00553.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00554.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00554.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00555.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00555.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00556.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00556.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00558.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00558.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00559.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00559.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00561.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00561.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00562.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00562.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00563.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00563.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00564.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00564.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00565.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00565.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00566.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00566.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00567.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00567.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00568.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00568.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00569.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00569.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00571.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00571.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00572.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00572.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00573.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00573.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00574.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00574.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00575.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00575.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00576.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00576.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00577.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00577.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00578.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00578.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00579.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00579.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00580.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00580.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00581.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00581.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00582.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00582.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00583.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00583.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00584.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00584.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00585.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00585.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00586.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00586.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00587.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00587.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00588.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00588.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00589.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00589.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00590.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00590.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00591.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00591.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00593.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00593.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00594.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00594.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00595.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00595.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00596.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00596.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00597.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00597.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00598.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00598.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00599.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00599.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00600.JPG" data-rel="PhotoGallery4"><img alt="" src="images/DSC00600.JPG" class="image"></a>
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
<div id="LayoutGrid3-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>
<div id="LayoutGrid3">
<div class="row">
<div class="col-1">
<div id="Article3" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">17/02/2021</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Wednesday, February 17, 2021<br></div>
   <span style="color:#000080;">Encuentro con cristo con alumnos de 11mo grado </span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=17/02/2021">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery3" style="display:inline-block;width:100%;z-index:9;">
<div id="PhotoGallery3">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00238.JPG" data-rel="PhotoGallery3"><img alt="" src="images/DSC00238.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00239.JPG" data-rel="PhotoGallery3"><img alt="" src="images/DSC00239.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00240.JPG" data-rel="PhotoGallery3"><img alt="" src="images/DSC00240.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00241.JPG" data-rel="PhotoGallery3"><img alt="" src="images/DSC00241.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00242.JPG" data-rel="PhotoGallery3"><img alt="" src="images/DSC00242.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00243.JPG" data-rel="PhotoGallery3"><img alt="" src="images/DSC00243.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00244.JPG" data-rel="PhotoGallery3"><img alt="" src="images/DSC00244.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00246.JPG" data-rel="PhotoGallery3"><img alt="" src="images/DSC00246.JPG" class="image"></a>
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
<div id="Article1" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">17/02/2021</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Wednesday, February 17, 2021<br></div>
   <span style="color:#000080;">Entrada a clases presenciales de los alumnos de 11mo grado</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=17/02/2021">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery1" style="display:inline-block;width:100%;z-index:11;">
<div id="PhotoGallery1">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00080.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00080.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00081.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00081.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00083.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00083.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00086.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00086.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00087.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00087.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00092.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00092.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00093.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00093.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00095.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00095.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00097.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00097.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00099.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00099.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00100.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00100.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00101.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00101.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00102.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00102.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00103.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00103.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00104.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00104.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00105.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00105.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00106.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00106.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00108.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00108.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00109.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00109.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00110.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00110.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00111.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00111.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00112.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00112.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00113.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00113.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00114.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00114.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00117.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00117.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00118.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00118.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00123.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00123.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00124.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00124.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00125.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00125.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00126.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00126.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00127.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00127.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00128.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00128.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00131.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00131.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00133.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00133.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00134.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00134.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00135.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00135.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00136.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00136.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00137.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00137.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00139.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00139.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00140.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00140.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00142.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00142.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00148.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00148.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00150.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00150.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00151.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00151.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00154.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00154.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00157.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00157.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00161.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00161.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00164.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00164.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00165.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00165.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00169.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00169.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00170.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00170.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00172.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00172.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00173.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00173.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00174.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00174.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00175.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00175.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00176.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00176.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00177.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00177.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00179.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00179.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00183.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00183.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00187.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00187.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00188.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00188.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00191.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00191.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00194.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00194.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00195.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00195.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00198.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00198.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00199.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00199.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00201.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00201.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00202.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00202.JPG" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00203.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00203.JPG" class="image"></a>
</div>
      </div>
      <div class="clearfix visible-col3"></div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/DSC00204.JPG" data-rel="PhotoGallery1"><img alt="" src="images/DSC00204.JPG" class="image"></a>
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
<div id="LayoutGrid2-divider-top">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 138" preserveAspectRatio="none">
<polygon class="divider-fill" style="opacity:0.2" points="0,136.28 0,36.28 1000,36.28 1000,136.28 500,46.28"  />
<polygon class="divider-fill" style="opacity:0.4" points="0,104.43 0,36.28 1000,36.28 1000,104.43 500,44.43" />
<polygon class="divider-fill" style="opacity:0.6" points="0,72.57 0,36.28 1000,36.28 1000,72.57 500,42.57" />
<rect class="divider-fill" width="1000" height="36.290001" x="0" y="0" />
</svg></div>
<div id="LayoutGrid2">
<div class="row">
<div class="col-1">
<div id="Article2" style="overflow:hidden;">
<div class="blogitem">
   <span class="blogsubject">15/02/2021</span>
   <div class="no-thumb"></div>
   <div class="blogdate">Monday, February 15, 2021<br></div>
   <span style="color:#000080;">Docentes de Secundaria celebrando el día del amor y la amistad</span><br>
   <div class="blogcomments"><a href="mailto:mail@yourwebsite.com?subject=15/02/2021">Send Comments</a></div>
</div>
<div class="clearfix visible-col1"></div>
</div>
<div id="wb_PhotoGallery2" style="display:inline-block;width:100%;z-index:13;">
<div id="PhotoGallery2">
   <div class="thumbnails">
      <div class="thumbnail">
<div class="frame">
         <a href="images/dprimaria-amor-amistad (1).jpeg" data-rel="PhotoGallery2"><img alt="" src="images/dprimaria-amor-amistad (1).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/dprimaria-amor-amistad (2).jpeg" data-rel="PhotoGallery2"><img alt="" src="images/dprimaria-amor-amistad (2).jpeg" class="image"></a>
</div>
      </div>
      <div class="thumbnail">
<div class="frame">
         <a href="images/dprimaria-amor-amistad (3).jpeg" data-rel="PhotoGallery2"><img alt="" src="images/dprimaria-amor-amistad (3).jpeg" class="image"></a>
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
<!-----31/01/2024 ------>
<div id="wb_Footer">
<div id="Footer">
<div class="row">
<div class="col-1">
<div id="wb_FontAwesomeIcon3" style="display:inline-block;width:40px;height:40px;text-align:center;z-index:14;">
<a href="https://www.facebook.com/cemanticaberio" target="_blank"><div id="FontAwesomeIcon3"><i class="fa fa-facebook"></i></div></a>
</div>
<div id="wb_FontAwesomeIcon11" style="display:inline-block;width:40px;height:40px;text-align:center;z-index:15;">
<a href="https://www.youtube.com/channel/UCAhJcrp_RsEv7Kz6uIQGPhg" target="_blank" title="Canal CEMB"><div id="FontAwesomeIcon11"><i class="fa fa-youtube"></i></div></a>
</div>
<div id="wb_IconFont1" style="display:inline-block;width:40px;height:40px;text-align:center;z-index:16;">
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
<div id="Html2" style="display:none;width:35px;height:24px;z-index:19">
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