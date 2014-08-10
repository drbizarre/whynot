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
		<div class="post-wrapper-top-shadow">
			<span class="s1"></span>
		</div>
		<div id="googlemaps" class="google-map hidden-xs"></div>
	</section><!-- end post-wrapper-top -->
    
    <section class="section1">
    	<div class="container clearfix">
			<div class="content col-lg-12 col-md-12 col-sm-12 clearfix">
                <div class="col-lg-6 col-md-6 col-sm-6">
                <h4 class="title">Escríbenos</h4>
                <div id="message"></div>
                <form id="contact" action="http://designingmedia.com/html/genuine/contact.php" name="contactform" class="row" method="post">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <input type="text" name="name" id="name" class="form-control" placeholder="Nombre"> 
                        <input type="text" name="email" id="email" class="form-control" placeholder="Correo"> 
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Telefono">
                        <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject"> 
                    </div>
                    <div class="clearfix"></div>                   
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Comentarios ..."></textarea>
                    </div>   
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <div class="pull-right">
                            <input type="submit" value="Enviar" id="submit" class="button small">
                        </div>  
                    </div>
                </form>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 contactus">
                <h4 class="title">Cotizaciones, contrataciones ó dudas</h4>
                <p>Conoce nuestros justos precios, revisa nuestra lista de proyectos exitosos y compáranos. Estamos a tus órdenes para empujar ese proyecto que tienes en mente.</p>
               
                    <ul class="contact_details">
                        <li><i class="fa fa-envelope-o"></i> hola@whynot.mx</li>
                        
                        <li><i class="fa fa-phone-square"></i>  664 110-8064</li>
                        <li><i class="fa fa-home"></i> Av Revolución 1025 Zona Centro Tijuana, Baja California, Mexico</li>
                    </ul><!-- contact_details -->
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
        
	<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script src="js/jquery.gmap.js"></script>
		<script>
			var mapMarkers = [{				
				address: "Av Revolución 1025 Zona Centro Tijuana, Baja California, Mexico",
				html: "<strong>Why Not?</strong><br>Av Revolución 1025 Zona Centro Tijuana, Baja California, Mexico<br><br><a href='#' onclick='mapCenterAt({latitude: 32.530217, longitude: -117.036811, zoom: 16}, event)'>[+] ampliar</a>",
				icon: {
					image: "images/pin.png",
					iconsize: [100, 100],
					iconanchor: [64, 45]
				}
			}];
			<!-- select location on here : http://itouchmap.com/latlong.html -->
			var initLatitude = 32.530217;
			var initLongitude = -117.036811;
			var mapSettings = {
				controls: {
					panControl: true,
					zoomControl: true,
					mapTypeControl: true,
					scaleControl: true,
					streetViewControl: true,
					overviewMapControl: true
				},
				scrollwheel: false,
				markers: mapMarkers,
				latitude: initLatitude,
				longitude: initLongitude,
				zoom: 13
			};
			var map = $("#googlemaps").gMap(mapSettings);
			var mapCenterAt = function(options, e) {
				e.preventDefault();
				$("#googlemaps").gMap("centerAt", options);
			}
		</script>
	</body>
</html>