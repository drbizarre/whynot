<!doctype html>
<html class="no-js" lang="en">
	<head>
    <?php
    include("layouts/head.php"); 
    ?>
  </head>
<body>
    <!-- start topbar -->
    <?php
    include("layouts/top.php"); 
    ?>
    <!-- end topbar -->

    <!-- start header -->
   <?php
   include("layouts/header.php"); 
   ?>
    <!-- end header -->
	<section class="post-wrapper-top">
    	<div class="container">
            <div class="post-wrapper-top-shadow">
                <span class="s1"></span>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <ul class="breadcrumb">
                    <li><a href="index.php">Inicio</a></li>
                    <li>Servicios</li>
                    <li>Desarollo Web</li>
                </ul>
                <h2>Desarollo Web</h2>
            </div>

        </div>
	</section><!-- end post-wrapper-top -->
    
    <section class="section1">
    	<div class="container clearfix">
			<div class="content col-lg-12 col-md-12 col-sm-12 clearfix">
                  
            <div class="tabbable servicetab tabs-left">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#webdesign" data-toggle="tab"><i class="fa fa-laptop"></i> Desarrollo Web</a></li>
                <li><a href="#webdevelopment" data-toggle="tab"><i class="fa fa-cogs"></i> Diseño Web</a></li>
                <li><a href="#seoservices" data-toggle="tab"><i class="fa fa-bar-chart-o"></i> SEO</a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="webdesign">
                <h5 class="title"><i class="fa fa-laptop"></i> Desarrollo Web</h5>
                  <p> Con bases en la ingeniería de software, analizamos y construimos sistemas de información desde lo básico hasta lo complejo. Nuestro entendimiento del ecosistema de tecnología nos permite desarrollar soluciones reales a tus problemas de control o administración.</p>
                </div>
                <div class="tab-pane" id="webdevelopment">
                <h5 class="title"><i class="fa fa-cogs"></i> Diseño Web</h5>
                     <p>El dispositivo quedó fuera de la ecuación, el diseño de páginas web evolucionó al punto de enfocarse exclusivamente al contenido, atrás quedaron los diseños enfocados en resoluciones de pantalla para poder explotar el talento de los diseñadores gráficos.</p>
                     <p>Con la innovación de dispositivos y su creciente penetración han creado la necesidad de ofrecer el contenido de un sitio web en diferentes resoluciones de pantalla por ello la tendencia a dirigirse 'al grano' en los sitios web modernos.</p>
                    <p>En ¿Why Not? nos preocupamos por el usuario final: <strong>el visitante</strong>. Nos interesa ofrecer el contenido de tu sitio web de la mejor forma para su correcta visualización.</p>
                    <p>Con el correcto consumo de información aumentan tremendamente las posibilidades de interacción con el visitante, esto se traduce en oportunidades de venta.</p>
                    <p>Estamos convencidos que un sitio web funcional es la mejor herramienta de venta.</p>
                    <p>Tenemos en nuestra área de proyectos ejemplos reales de casos de éxito de nuestros <a title="servicios" href="http://www.whynot.mx/servicios">servicios</a>, visítala y contáctanos.</p>
      
                </div>
                <div class="tab-pane" id="seoservices">
                <h5 class="title"><i class="fa fa-bar-chart-o"></i> SEO</h5>
                <p>No existe magia ni trucos para posicionar un sitio web en lugares importantes en los resultados de búsqueda, solo existe la optimización.</p>
                <ul>
                <li>Escribir correctamente documentos html.</li>
                <li>Respetar reglas semánticas en la estructura html.</li>
                <li>Tener contenido único y enfocado en tu objetivo.</li>
                <li>Lenguaje estandarizado de acuerdo a la audiencia.</li>
                </ul>
                <p>¿Why not? tiene experiencia en el proceso de aumentar el tráfico de sitios de manera orgánica y elevar el ranking de posicionamiento.</p>
                <p>Te invitamos a visitar la sección de <a title="proyectos" href="http://www.whynot.mx/proyectos">Proyectos</a> y revisar las colaboraciones que hemos realizado con gran éxito.</p>
                <p>El <strong>SEO</strong> no es un producto empaquetado que se compra, sino un proceso de estrategias constantes para lograr el objetivo a lo largo del tiempo y contra la competencia.</p>
                <p>Permitenos realizar a tu sitio web un análisis de factibilidad de las palabras que deseas posicionar ó mejor aún permitenos diseñar tu sitio web potenciando el SEO en él.</p>
                <p>Garantizamos tu satisfacción 100% con metas reales y comproblables.</p>
                       
                </div>
              </div>
            </div>
          
  			</div><!-- end content -->
		</div><!-- end container -->
	</section><!-- end section -->
   
    <!-- start footer -->
    <?php include("layouts/footer.php");  ?>
    <!-- end footer -->

    <div class="dmtop">Scroll to Top</div>

      <!-- Main Scripts-->
      <?php
      include("layouts/scripts.php"); 
      ?>
	</body>
</html>