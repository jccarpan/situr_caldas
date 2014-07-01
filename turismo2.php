<!doctype html>
<html class="no-js" lang="en">
	<?php include ('_inc/cabecera.php'); ?>

  <style>
.bg {
  background: url('imagenes/turismo_naturaleza_m.jpg') no-repeat center center;
  position: fixed;
  width: 100%;
  height: 400px; /*same height as jumbotron */
  top:0;
  left:0;
  z-index: -1;
}

.jumbotron {
  height: 400px;
  color: white;
  text-shadow: #444 0 1px 1px;
  background:transparent;
}




  </style>
<body>

	<!-- MENU PRINCIPAL -->
<?php include ('_inc/menu.php');?>

<!-- jumbo ejemplo -->
<div class="bg"></div>
<div class="jumbotron">
  <h1>Bootstrap Jumbotron</h1>
  <p class="lead">+ Parallax Effect using jQuery</p>
</div>


<!-- ******************** PESTAÑAS ************************ -->

<!-- <div class="container">
  <div class="container well">
    <h4><center>DESTACADOS</center></42>
</div> -->

<hr style="height: 20px; background: url(../../imagenes/redstar_hr.png) no-repeat center; border: none;">

<div class="container">
  <div class="row">
    <h2>Page Content</h2>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
    Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
    dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
    Aliquam in felis sit amet augue.
    <br>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
    Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
    dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
    Aliquam in felis sit amet augue.
    <br>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
    Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
    dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
    Aliquam in felis sit amet augue.
    <br>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
    Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
    dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
    Aliquam in felis sit amet augue.
  </div>
  <hr>
  <div class="row">
    <h2>Page Content</h2>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
    Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
    dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
    Aliquam in felis sit amet augue.
    <h2>Page Content</h2>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
    Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
    dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
    Aliquam in felis sit amet augue.
    <h2>Page Content</h2>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
    Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
    dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
    Aliquam in felis sit amet augue.
    
  </div>
  <hr>
  <div class="row">
    <h2>Page Content</h2>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
    Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
    dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
    Aliquam in felis sit amet augue.
  </div>
</div>

<hr>

<div class="container">
  <div class="row">
      <div class="col-md-12 text-center"><p>The End.</p></div>
    </div>
</div>




	<!-- <footer class="text-center">
    	<div class="container">
        	<div class="row">
            	<div class="col-sm-4">
                	<h3 class="plugin-title">FBAR - WordPress Theme Demo Bar</h3>
                	<a href="http://codecanyon.net/item/fbar-responsive-wordpress-demo-switch-bar-plugin/5117122" target="_blank"><img src="http://3.s3.envato.com/files/63624446/fbar-screen.png" alt="" class="img-thumbnail"></a>
                </div>
            	<div class="col-sm-4">
                	<h3 class="plugin-title">FSWIT - jQuery Style Switcher Plugin</h3>
                	<a href="http://codecanyon.net/item/fswit-jquery-style-switcher/5069105" target="_blank"><img src="http://1.s3.envato.com/files/60382052/fswit-590.png" alt="" class="img-thumbnail"></a>
                </div>
            	<div class="col-sm-4">
                	<h3 class="plugin-title">FBAR - PHP Theme Demo Bar Plugin</h3>
                	<a href="http://codecanyon.net/item/fbar-responsive-php-theme-switcher-demo-bar/5045579" target="_blank"><img src="http://0.s3.envato.com/files/61209025/fbar-screen.png" alt="" class="img-thumbnail"></a>
                </div>
            </div>
		</div>
    </footer> -->





    <!-- Bootstrap core JavaScript-->
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-hover-dropdown.js"></script>
    <script src="js/fitdivs.js"></script>

    <script>
		$(document).ready(function(){
		// Target your .container, .wrapper, .post, etc.
			$(".fhmm").fitVids();
		});
	</script>
    <script>
		// Menu drop down effect
		$('.dropdown-toggle').dropdownHover().dropdown();
		$(document).on('click', '.fhmm .dropdown-menu', function(e) {
		  e.stopPropagation()
		})
	</script>
	<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script src="js/jquery.gmap.js"></script>
	<script>
		// Google map
			var mapMarkers = [{				
				address: "Saskatoon, SK S7V 0A4 Canada",
				html: "<strong>We Are ENVATO!</strong><br>Saskatoon, SK S7V 0A4 Canada<br><br><a href='#' onclick='mapCenterAt({latitude: 5.067290, longitude: -75.517583, zoom: 16}, event)'>[+] View Original Map</a>",
				icon: {
					image: "images/pin.png",
					iconsize: [100, 100],
					iconanchor: [64, 45]
				}
			}];
			<!-- select location on here : http://itouchmap.com/latlong.html -->
			var initLatitude = 5.067290;
			var initLongitude = -75.517583;
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
				zoom: 10
			};
			var map = $("#googlemaps1, #googlemaps2, #googlemaps3, #googlemaps4, #googlemaps5, #googlemaps6").gMap(mapSettings);
			var mapCenterAt = function(options, e) {
				e.preventDefault();
				$("#googlemaps1, #googlemaps2, #googlemaps3, #googlemaps4, #googlemaps5, #googlemaps6").gMap("centerAt", options);
			}
		</script>

<script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?lang=css"></script>
    <script src="js/bootslider.js"></script>
    <script>
      $(function() {
        window.prettyPrint && prettyPrint()
        $(document).on('click', '.yamm .dropdown-menu', function(e) {
          e.stopPropagation()
        })
      })
    </script>



    <!-- script carrusel -->

<script type="text/javascript">
$(document).ready(function() {    
    //Events that reset and restart the timer animation when the slides change
    $("#transition-timer-carousel").on("slide.bs.carousel", function(event) {
        //The animate class gets removed so that it jumps straight back to 0%
        $(".transition-timer-carousel-progress-bar", this)
            .removeClass("animate").css("width", "0%");
    }).on("slid.bs.carousel", function(event) {
        //The slide transition finished, so re-add the animate class so that
        //the timer bar takes time to fill up
        $(".transition-timer-carousel-progress-bar", this)
            .addClass("animate").css("width", "100%");
    });
    
    //Kick off the initial slide animation when the document is ready
    $(".transition-timer-carousel-progress-bar", "#transition-timer-carousel")
        .css("width", "100%");
});
</script>

<script>
  
var jumboHeight = $('.jumbotron').outerHeight();
function parallax(){
    var scrolled = $(window).scrollTop();
    $('.bg').css('height', (jumboHeight-scrolled) + 'px');
}

$(window).scroll(function(e){
    parallax();
});

</script>




	</body>
</html>





<header class="headerini">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h2><span class="highlighted">MANIZALES</span></h2>
      </div>
      <div class="col-sm-2">
        <!-- ATRACTIVOS -->
        <a href="#" class="btn btn-primary btn-lg btn-custom btn-block" role="button">ATRACTIVOS</a>
      </div>
      <div class="col-sm-2">
        <!-- ALOJAMIENTO -->
        <a href="#" class="btn btn-primary btn-lg btn-custom btn-block" role="button">ALOJAMIENTO</a>
      </div>
      <div class="col-sm-2">
        <!-- RESTAURANTES -->
        <a href="#" class="btn btn-primary btn-lg btn-custom btn-block" role="button">RESTAURANTES</a>
      </div>
      <div class="col-sm-2">
        <!-- BARES -->
        <a href="#" class="btn btn-primary btn-lg btn-custom btn-block" role="button">BARES</a>
      </div>
      <div class="col-sm-2">
        <!-- OTRA OPCION -->
        <a href="#" class="btn btn-primary btn-lg btn-custom btn-block" role="button">PUNTOS DE INFORMACION</a>
      </div>
      <div class="col-sm-2">
        <!-- OTRA OPCION -->
        <a href="#" class="btn btn-primary btn-lg btn-custom btn-block" role="button">MAS...</a>
      </div>
    </div>
  </div>
</header>
