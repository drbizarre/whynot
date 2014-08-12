<!doctype html>
<html class="no-js" lang="en">
	<head>
    <?php echo $head; ?>
  </head>
<body>
    <!-- start topbar -->
    <?php echo $top; ?>
    <!-- end topbar -->

    <!-- start header -->
   <?php echo $header; ?>
    <!-- end header -->
    
	<section class="post-wrapper-top">
    	<div class="container">
            <div class="post-wrapper-top-shadow">
                <span class="s1"></span>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <ul class="breadcrumb">
                    <li><a href="<?php link_to_action('SiteController@showIndex'); ?>">Inicio</a></li>
                    <li>Why Not</li>
                </ul>
                <h2>Agencia Tecnológica</h2>
            </div>
        </div>
	</section><!-- end post-wrapper-top -->
    
    <section class="section1">
    	<div class="container clearfix">
			<div class="content col-lg-12 col-md-12 col-sm-12 clearfix">

                <div class="divider"></div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="he-wrap tpl2">
                        <img src="demos/office.png" alt="" class="img-responsive " data-effect="fall">

                    </div><!-- he wrap -->
				</div><!-- end col-4 -->

				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                  <h3>El Team</h3>
                  <p><strong>¿Why Not?</strong> es un equipo de jovenes con experiencia en internet y todo su ecosistema.</p>
                  <h3>El Nóumeno</h3>
                  <p><strong>¿Why Not?</strong> analiza, planea y ejecuta desde la idea hasta el producto final, buscando el éxito a través del compromiso.</p>
                  <h3>El Fenómeno</h3>
                  <p>En <strong>¿Why Not?</strong> creemos que el excesivo análisis y estrategias ralentizan la productividad y el éxito, creemos en el error como forma de crecimiento y tomamos el riesgo de ir más allá, siempre.</p>
                </div>
               
                <div class="clearfix"></div>
                <div class="divider"></div>
                

                       
  			</div><!-- end content -->
		</div><!-- end container -->
	</section><!-- end section -->

    <!-- start call to action -->
    <?php echo $call2action; ?>
    <!-- start call to action -->    
    
    <!-- start footer -->
    <?php echo $footer;  ?>
    <!-- end footer -->

    <div class="dmtop">Scroll to Top</div>

      <!-- Main Scripts-->
      <?php echo $scripts; 
      ?>
    </body>
	</body>
</html>