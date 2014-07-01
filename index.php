<!doctype html>
<html class="no-js" lang="en">
	
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Premium Responsive Mega Menu for Bootstrap 3">
    <meta name="author" content="@mediadesigning">
    <title>HOME | SITUR CALDAS</title>
    <!-- Bootstrap and demo CSS -->
    <link href="_libs/css/bootstrap.css" rel="stylesheet">
    <link href="_libs/css/fhmm.css" rel="stylesheet">
    <link href="_libs/css/font-awesome.min.css" rel="stylesheet">
    <link href="_libs/css/style.css" rel="stylesheet">    
    <link href="_libs/css/bootslider.css" rel="stylesheet">

    <!-- <link href="carrusel_municipio.css" rel="stylesheet"> -->
    <link href="menu_lateral.css" rel="stylesheet">

    <link href="_libs/styles2.css" rel="stylesheet">

    <!-- fhmm styles-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>

<body>

	<!-- MENU PRINCIPAL -->
<?php include ('_inc/menu.php');?>

<!-- CARRUSEL -->

<div class="row">
        <!-- The carousel -->
        <div id="transition-timer-carousel" class="carousel slide transition-timer-carousel" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#transition-timer-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#transition-timer-carousel" data-slide-to="1"></li>
        <li data-target="#transition-timer-carousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
                    <img src="imagenes/manizales_1.jpg" />
                    <div class="carousel-caption">
                        <h1 class="carousel-caption-header">Manizales</h1>
                        <p class="carousel-caption-text hidden-sm hidden-xs">
                            Muchos lugares increibles por descubrir, ven y visitalo ya!!
                        </p>
                    </div>
                </div>
                
                <div class="item">
                    <img src="imagenes/manizales_2.jpg" />
                    <div class="carousel-caption">
                        <h1 class="carousel-caption-header">Torre al cielo</h1>
                        <p class="carousel-caption-text hidden-sm hidden-xs">
                            Una aventura extrema, para que conozcas Manizales desde las alturas.
                        </p>
                    </div>
                </div>
                
                <div class="item">
                    <img src="imagenes/manizales_3.jpg" />
                    <div class="carousel-caption">
                        <h1 class="carousel-caption-header">Mirador de chipre</h1>
                        <p class="carousel-caption-text hidden-sm hidden-xs">
                            Para que te deleites con sus esplendidos paisajes.
                        </p>
                    </div>
                </div>
            </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#transition-timer-carousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#transition-timer-carousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
            
            <!-- Timer "progress bar" -->
            <hr class="transition-timer-carousel-progress-bar animate" />
    </div>
    </div>
</div>

<!-- FIN CARRUSEL -->

<!-- ******************** PESTAÑAS ************************ -->



<div class="container">
  <br>
  <!-- <h3>DESTACADOS</h3> -->
  <div class="container well">
    <h4><center>DESTACADOS</center></42>
</div>

<hr style="height: 20px; background: url(../../imagenes/redstar_hr.png) no-repeat center; border: none;">

  <div class="row clearfix">
    <div class="col-md-12 column">
      <div class="tabbable" id="tabs-54490">
        <ul class="nav nav-tabs">
          <li class="active">
            <a href="#municipios" data-toggle="tab">Municipios</a>
          </li>
          <li >
            <a href="#s_interes" data-toggle="tab">Sitios de interes</a>
          </li>
          <li>
            <a href="#eventos" data-toggle="tab">Eventos</a>
          </li>
          <li>
            <a href="#alojamiento" data-toggle="tab">Alojamiento</a>
          </li>
          <li>
            <a href="#restaurantes" data-toggle="tab">Restaurantes</a>
          </li>
          <li>
            <a href="#fiestas_cel" data-toggle="tab">Fiestas / Celebraciones</a>
          </li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane" id="municipios"><br>
            
            <div class="row">
        <div class="col-md-4">
          <div class="thumbnail">
            <img alt="300x200" src="http://lorempixel.com/600/200/people">
            <div class="caption">
              <h3>
                Thumbnail label
              </h3>
              <p>
                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
              </p>
              <p>
                <a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <img alt="300x200" src="http://lorempixel.com/600/200/city">
            <div class="caption">
              <h3>
                Thumbnail label
              </h3>
              <p>
                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
              </p>
              <p>
                <a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <img alt="300x200" src="http://lorempixel.com/600/200/sports">
            <div class="caption">
              <h3>
                Thumbnail label
              </h3>
              <p>
                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
              </p>
              <p>
                <a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
              </p>
            </div>
          </div>
        </div>
      </div>

      <br>

      <div class="row">
        <div class="col-md-4">
          <div class="thumbnail">
            <img alt="300x200" src="http://lorempixel.com/600/200/people">
            <div class="caption">
              <h3>
                Thumbnail label
              </h3>
              <p>
                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
              </p>
              <p>
                <a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <img alt="300x200" src="http://lorempixel.com/600/200/city">
            <div class="caption">
              <h3>
                Thumbnail label
              </h3>
              <p>
                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
              </p>
              <p>
                <a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <img alt="300x200" src="http://lorempixel.com/600/200/sports">
            <div class="caption">
              <h3>
                Thumbnail label
              </h3>
              <p>
                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
              </p>
              <p>
                <a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
              </p>
            </div>
          </div>
        </div>
      </div>




          </div>
          <div class="tab-pane" id="s_interes"><br>
            
            <div class="row">
        <div class="col-md-4">
          <div class="thumbnail">
            <img alt="300x200" src="http://lorempixel.com/600/200/people">
            <div class="caption">
              <h3>
                Thumbnail label
              </h3>
              <p>
                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
              </p>
              <p>
                <a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <img alt="300x200" src="http://lorempixel.com/600/200/city">
            <div class="caption">
              <h3>
                Thumbnail label
              </h3>
              <p>
                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
              </p>
              <p>
                <a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <img alt="300x200" src="http://lorempixel.com/600/200/sports">
            <div class="caption">
              <h3>
                Thumbnail label
              </h3>
              <p>
                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
              </p>
              <p>
                <a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
              </p>
            </div>
          </div>
        </div>
      </div>
          </div>
          <div class="tab-pane" id="eventos"><br>
            
            <div class="row">
        <div class="col-md-4">
          <div class="thumbnail">
            <img alt="300x200" src="http://lorempixel.com/600/200/people">
            <div class="caption">
              <h3>
                Thumbnail label
              </h3>
              <p>
                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
              </p>
              <p>
                <a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <img alt="300x200" src="http://lorempixel.com/600/200/city">
            <div class="caption">
              <h3>
                Thumbnail label
              </h3>
              <p>
                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
              </p>
              <p>
                <a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <img alt="300x200" src="http://lorempixel.com/600/200/sports">
            <div class="caption">
              <h3>
                Thumbnail label
              </h3>
              <p>
                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
              </p>
              <p>
                <a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
              </p>
            </div>
          </div>
        </div>
      </div>
          </div>
          <div class="tab-pane" id="alojamiento"><br>
            
            <div class="row">
        <div class="col-md-4">
          <div class="thumbnail">
            <img alt="300x200" src="http://lorempixel.com/600/200/people">
            <div class="caption">
              <h3>
                Thumbnail label
              </h3>
              <p>
                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
              </p>
              <p>
                <a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <img alt="300x200" src="http://lorempixel.com/600/200/city">
            <div class="caption">
              <h3>
                Thumbnail label
              </h3>
              <p>
                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
              </p>
              <p>
                <a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <img alt="300x200" src="http://lorempixel.com/600/200/sports">
            <div class="caption">
              <h3>
                Thumbnail label
              </h3>
              <p>
                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
              </p>
              <p>
                <a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
              </p>
            </div>
          </div>
        </div>
      </div>
          </div>
          <div class="tab-pane" id="restaurantes"><br>
            
            <div class="row">
        <div class="col-md-4">
          <div class="thumbnail">
            <img alt="300x200" src="http://lorempixel.com/600/200/people">
            <div class="caption">
              <h3>
                Thumbnail label
              </h3>
              <p>
                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
              </p>
              <p>
                <a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <img alt="300x200" src="http://lorempixel.com/600/200/city">
            <div class="caption">
              <h3>
                Thumbnail label
              </h3>
              <p>
                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
              </p>
              <p>
                <a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <img alt="300x200" src="http://lorempixel.com/600/200/sports">
            <div class="caption">
              <h3>
                Thumbnail label
              </h3>
              <p>
                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
              </p>
              <p>
                <a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
              </p>
            </div>
          </div>
        </div>
      </div>
          </div>
          <div class="tab-pane" id="fiestas_cel"><br>
            
            <div class="row">
        <div class="col-md-4">
          <div class="thumbnail">
            <img alt="300x200" src="http://lorempixel.com/600/200/people">
            <div class="caption">
              <h3>
                Thumbnail label
              </h3>
              <p>
                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
              </p>
              <p>
                <a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <img alt="300x200" src="http://lorempixel.com/600/200/city">
            <div class="caption">
              <h3>
                Thumbnail label
              </h3>
              <p>
                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
              </p>
              <p>
                <a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <img alt="300x200" src="http://lorempixel.com/600/200/sports">
            <div class="caption">
              <h3>
                Thumbnail label
              </h3>
              <p>
                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
              </p>
              <p>
                <a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
              </p>
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
<!-- ******************** FIN PESTAÑAS ******************** -->

    <hr class="divisor">

<!-- FOOTER -->

<div id="footer">
    <div class="container">
        <div class="row">
            <center>
            <h3 class="footertext">Mapa del sitio</h3>
            </center>
            <br>
              <div class="col-md-4">
                <center>
                  <!-- <img src="http://oi60.tinypic.com/w8lycl.jpg" class="img-circle" alt="the-brains"> -->
                  <br>
                  <h4 class="footertext">¿Qué hacer?</h4>
                  <a href=""><p class="footertext">Vida nocturna</a><br>
                  <a href=""><p class="footertext">Compras</a><br>
                  <a href=""><p class="footertext">En familia</a><br>
                  <a href=""><p class="footertext">Con amigos</a><br>
                  <a href=""><p class="footertext">Ecoturismo</a><br>
                  <a href=""><p class="footertext">Agroturismo</a><br>
                  <a href=""><p class="footertext">Parques temáticos</a><br>
                  <a href=""><p class="footertext">Aventura</a><br>
                  <a href=""><p class="footertext">Extremo</a><br>
                  <a href=""><p class="footertext">Calendario de eventos</a><br>
                </center>
              </div>
              <div class="col-md-4">
                <center>
                  <!-- <img src="http://oi60.tinypic.com/2z7enpc.jpg" class="img-circle" alt="..."> -->
                  <br>
                  <h4 class="footertext">¿Dónde alojarse?</h4>
                    <a href=""><p class="footertext"> Hoteles </a><br>
                    <a href=""><p class="footertext">Hostales</a><br>
                    <a href=""><p class="footertext">Cabañas</a><br>
                    <a href=""><p class="footertext">Fincas / Haciendas</a><br>
                    <a href=""><p class="footertext">Por tarifa</a><br>
                    <a href=""><p class="footertext">Por capacidad</a><br>
                    <a href=""><p class="footertext">Ver todos </a><br>
                </center>
              </div>
              <div class="col-md-4">
                <center>
                  <!-- <img src="http://oi61.tinypic.com/307n6ux.jpg" class="img-circle" alt="..."> -->
                  <br>
                  <h4 class="footertext">¿Dónde comer?</h4>
                    <a href=""><p class="footertext"> Restaurantes </a><br>   
                    <a href=""><p class="footertext">Bares</a><br>
                    <a href=""><p class="footertext">Fuera de la ciudad</a><br>
                    <a href=""><p class="footertext">Paraderos</a><br>
                    <a href=""><p class="footertext">Comida tipica</a><br>
                    <a href=""><p class="footertext">Postres</a><br>
                    <a href=""><p class="footertext">Ver todos </a><br>
                </center>
              </div>
            </div>
            <div class="row">
            <p><center><a href="#"></a> <p class="footertext">SITUR CALDAS 2014</p></center></p>
        </div>
    </div>
</div>

<footer>
    
</footer>

    <!-- Bootstrap core JavaScript-->
    <script src="_libs/js/jquery-1.10.2.min.js"></script>
    <script src="_libs/js/bootstrap.min.js"></script>
    <script src="_libs/js/bootstrap-hover-dropdown.js"></script>
    <script src="_libs/js/fitdivs.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="_libs/js/jquery.gmap.js"></script>
    <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?lang=css"></script>
    <script src="_libs/js/bootslider.js"></script>

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

	</body>
</html>