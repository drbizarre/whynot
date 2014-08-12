<!doctype html>
<html class="no-js" lang="en">
	<head>
    {{ $head }}
  </head>
<body>
    <!-- start topbar -->
    {{ $top }}
    <!-- end topbar -->

    <!-- start header -->
   {{ $header }}
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
                
                {{ isset($message) ? '<div class="alert alert-success">Hemos recibido tus datos correctamente, tan pronto lo veamos en nuestro buzon de correo te responderemo.</div>' : '' }}
                @foreach($errors->all('<div class="alert alert-danger">:message</div>') as $message)
                {{ $message }}
                @endforeach

                {{ Form::open(array('route' => 'contactar' , 'id' => 'contact' , 'name' => 'contactform' , 'class' => 'row' )) }}
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        {{ Form::text('name', $value = null, $attributes = array('id' => 'name' , 'class' => 'form-control' , 'placeholder' => 'Nombre')) }}
                        {{ Form::text('email', $value = null, $attributes = array('id' => 'email' , 'class' => 'form-control' , 'placeholder' => 'Correo')) }} 
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        {{ Form::text('phone', $value = null, $attributes = array('id' => 'phone', 'class' => 'form-control' , 'placeholder' => 'Telefono')) }}
                        {{ Form::text('subject', $value = null, $attributes = array('id' => 'subject', 'class' => 'form-control' , 'placeholder' => 'Asunto')) }}
                    </div>
                    <div class="clearfix"></div>                   
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                         {{ Form::textarea('comments', $value = null, $attributes = array('id' => 'comments', 'class' => 'form-control' , 'placeholder' => 'Comentarios' , 'rows' => '6')) }}
                    </div>   
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <div class="pull-right">
                            <input type="submit" value="Enviar" id="submit" class="button small">
                        </div>  
                    </div>
                {{ Form::close() }}
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
    {{ $footer }}
    <!-- end footer -->

    <div class="dmtop">Scroll to Top</div>

      <!-- Main Scripts-->

    {{ $scripts }}
        
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