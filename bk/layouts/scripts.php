	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.unveilEffects.js"></script>	
	<script src="js/retina-1.1.0.js"></script>
	<script src="js/jquery.hoverdir.js"></script>
    <script src="js/jetmenu.js"></script>	
	<script src="js/jquery.hoverex.min.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
	<script src="js/jquery.jigowatt.js"></script>

  	<script src="js/jquery.isotope.min.js"></script>	
	<script src="js/custom.js"></script>
    
	<!-- LayerSlider script files -->
	<script src="layerslider/js/greensock.js" type="text/javascript"></script>
	<script src="layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
	<script src="layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
	<!-- Initializing the slider -->
    <script type="text/javascript">
		jQuery("#layerslider").layerSlider({
			pauseOnHover: false,
			autoPlayVideos: false,
			responsive: false,
			responsiveUnder: 1280,
			layersContainer: 1280,
			skin: 'v5',
			skinsPath: 'layerslider/skins/'
		});
	</script>
    
    <script src="js/owl.carousel.js"></script>	
    <script type="text/javascript">
		$(document).ready(function() {
			$("#popularposts").owlCarousel({
			items : 3,
			lazyLoad : true,
			navigation : false
			});
		});
	</script>
    
	<script src="js/jquery.animate-enhanced.min.js"></script>
	<script src="js/jquery.easypiechart.min.js"></script>
    <script type="text/javascript">
		$('.chart').easyPieChart({
			easing: 'easeOutBounce',
			size : 200,
			animate : 2000,
			lineWidth : 10,
			lineCap : 'square',
			lineWidth : 19,
			barColor : false,
			trackColor : '#F5F5F5',
			scaleColor : false,
			onStep: function(from, to, percent) {
			$(this.el).find('.percent').text(Math.round(percent)+'%');
			}
		});
	</script>
	
  	<script src="js/jquery.isotope.min.js"></script>
   
    
	<script src="js/jquery.mb.YTPlayer.js"></script>    
    <script type="text/javascript">
    $(function(){
      $(".player").mb_YTPlayer();
    });
	</script>
    
	<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script src="js/jquery.gmap.js"></script>
    <script type="text/javascript">
			var mapMarkers = [{				
				address: "Saskatoon, SK S7V 0A4 Canada",
				html: "<strong>We Are ENVATO!</strong><br>Saskatoon, SK S7V 0A4 Canada<br><br><a href='#' onclick='mapCenterAt({latitude: 52.100343, longitude: -106.551482, zoom: 16}, event)'>[+] View Original Map</a>",
				icon: {
					image: "images/pin.png",
					iconsize: [100, 100],
					iconanchor: [64, 45]
				}
			}];
			<!-- select location on here : http://itouchmap.com/latlong.html -->
			var initLatitude = 52.100343;
			var initLongitude = -106.551482;
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
				zoom: 5
			};
			var map = $("#googlemaps").gMap(mapSettings);
			var mapCenterAt = function(options, e) {
				e.preventDefault();
				$("#googlemaps").gMap("centerAt", options);
			}
		</script>
        

    
	<!-- Demo Switcher JS -->
	<script type="text/javascript" src="switcher/js/fswit.js"></script> 
	<script type="text/javascript" src="switcher/js/jquery.backstretch.js"></script> 
    <script>
		 $("#bg1").click(function(e) {
			e.preventDefault();
			$.backstretch('switcher/images/b1-big.png');
		});
			 
		$("#bg2").click(function(e) {
			e.preventDefault();
			$.backstretch('switcher/images/b2-big.png');
		});

		$("#bg3").click(function(e) {
			e.preventDefault();
			$.backstretch('switcher/images/b3-big.png');
		});
		$("#bg4").click(function(e) {
			e.preventDefault();
			$.backstretch('switcher/images/b4-big.png');
		});
		$("#bg5").click(function(e) {
			e.preventDefault();
			$.backstretch('switcher/images/b5-big.png');
		});
// Portfolio
	(function($) {
		"use strict";
		var $container = $('.portfolio'),
			$items = $container.find('.market-item'),
			portfolioLayout = 'fitRows';
			
			if( $container.hasClass('portfolio-centered') ) {
				portfolioLayout = 'masonry';
			}
					
			$container.isotope({
				filter: '*',
				animationEngine: 'best-available',
				layoutMode: portfolioLayout,
				animationOptions: {
				duration: 750,
				easing: 'linear',
				queue: false
			},
			masonry: {
			}
			}, refreshWaypoints());
			
			function refreshWaypoints() {
				setTimeout(function() {
				}, 1000);   
			}
					
			$('nav.portfolio-filter ul a').on('click', function() {
					var selector = $(this).attr('data-filter');
					$container.isotope({ filter: selector }, refreshWaypoints());
					$('nav.portfolio-filter ul a').removeClass('active');
					$(this).addClass('active');
					return false;
			});
			
			function getColumnNumber() { 
				var winWidth = $(window).width(), 
				columnNumber = 2;
				}       
				
				function setColumns() {
					var winWidth = $(window).width(), 
					columnNumber = getColumnNumber(), 
					itemWidth = Math.floor(winWidth / columnNumber);
					
					$container.find('.market-item').each(function() { 
						$(this).css( { 
						width : itemWidth + 'px' 
					});
				});
			}
			
			function setPortfolio() { 
				setColumns();
				$container.isotope('reLayout');
			}
				
			$container.imagesLoaded(function () { 
				setPortfolio();
			});
			
			$(window).on('resize', function () { 
			setPortfolio();          
		});
	})(jQuery);		
    </script>