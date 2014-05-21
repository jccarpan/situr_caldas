<!doctype html>
<html class="no-js" lang="en">
	<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Premium Responsive Mega Menu for Bootstrap 3">
    <meta name="author" content="@mediadesigning">
    <title>HOME | SITUR CALDAS</title>
    <!-- Bootstrap and demo CSS -->

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fhmm.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">    
    <link href="css/bootslider.css" rel="stylesheet">

    <link href="carrusel_municipio.css" rel="stylesheet">
    <link href="menu_lateral.css" rel="stylesheet">

    <!-- fhmm styles-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->


<!-- ESTILO CARRUSEL -->

<style type="text/css">
        
.transition-timer-carousel .carousel-caption {
    background: -moz-linear-gradient(top,  rgba(0,0,0,0) 0%, rgba(0,0,0,0.1) 4%, rgba(0,0,0,0.5) 32%, rgba(0,0,0,1) 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(4%,rgba(0,0,0,0.1)), color-stop(32%,rgba(0,0,0,0.5)), color-stop(100%,rgba(0,0,0,1))); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.1) 4%,rgba(0,0,0,0.5) 32%,rgba(0,0,0,1) 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.1) 4%,rgba(0,0,0,0.5) 32%,rgba(0,0,0,1) 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.1) 4%,rgba(0,0,0,0.5) 32%,rgba(0,0,0,1) 100%); /* IE10+ */
    background: linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.1) 4%,rgba(0,0,0,0.5) 32%,rgba(0,0,0,1) 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000', endColorstr='#000000',GradientType=0 ); /* IE6-9 */
  width: 100%;
  left: 0px;
  right: 0px;
  bottom: 0px;
  text-align: left;
  padding-top: 5px;
  padding-left: 15%;
  padding-right: 15%;
}

.transition-timer-carousel .carousel-caption .carousel-caption-header {
  margin-top: 10px;
  font-size: 24px;
}

@media (min-width: 970px) {
    /* Lower the font size of the carousel caption header so that our caption
    doesn't take up the full image/slide on smaller screens */
  .transition-timer-carousel .carousel-caption .carousel-caption-header {
    font-size: 36px;
  }
}
.transition-timer-carousel .carousel-indicators {
  bottom: 0px;
  margin-bottom: 5px;
}
.transition-timer-carousel .carousel-control {
  z-index: 11;
}
.transition-timer-carousel .transition-timer-carousel-progress-bar {
    height: 5px;
    background-color: #D3F822;
    width: 0%;
    margin: -5px 0px 0px 0px;
    border: none;
    z-index: 11;
    position: relative;
}
.transition-timer-carousel .transition-timer-carousel-progress-bar.animate{
    /* We make the transition time shorter to avoid the slide transitioning
    before the timer bar is "full" - change the 4.25s here to fit your
    carousel's transition time */
    -webkit-transition: width 4.25s linear;
  -moz-transition: width 4.25s linear;
  -o-transition: width 4.25s linear;
  transition: width 4.25s linear;
}

/* divisor footer*/

.divisor {
    width: 84.5%;
    height: 4px;
    background-color:#C3FF68;
    color:#C3FF68;
    border: 0 none;
    margin: 9px auto;
}

</style>




</head>
<body>

	<div class="jumbotron">
		<div class="container">
			<p class="lead">Green Edition</p>
            <nav class="navbar navbar-green fhmm navbar-fixed-top" role="navigation">
                <div class="navbar-header">
          			<button type="button" data-toggle="collapse" data-target="#greenmenu" class="navbar-toggle">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand"><i class="fa fa-home"></i></a>
				</div><!-- end navbar-header -->
        
            <div id="greenmenu" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="contact.html">Home</a></li>	
                    <!-- Mega Menu -->
					<li class="dropdown fhmm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Caldas <b class="caret"></b></a>
                        <ul class="dropdown-menu fullwidth">
                            <li class="fhmm-content">
                                <div class="row">
                                    <div class="col-sm-4">
                                  		<h3 class="title">Visita Manizales</h3>
										<iframe src="http://www.youtube.com/embed/ItUX8pGpUHQ?title=0&amp;byline=0&amp;portrait=0" width="400" height="225" frameborder="0"></iframe>
                                    </div><!-- end col-4 -->
                                    <div class="col-sm-4">
                                  		<h3 class="title">Variedad de eventos y fiestas</h3>
                                        <ul class="media-list">
                                            <li class="media"><a href="#" class="pull-right"><img src="imagenes/feria_manizales.jpg" alt="" width="70" class="img-thumbnail media-object"></a>
                                                <div class="media-body">
                                                    <p>La Feria de Manizales, realizada anualmente en la ciudad colombiana de Manizales, reconocida por su temporada taurina, <a href="">Ver mas...</a> </p>
                                                </div>
                                            </li>
                                            <li class="media"><a href="#" class="pull-right"><img src="imagenes/noche_fuego.jpg" alt="" width="70" class="img-thumbnail media-object"></a>
                                                <div class="media-body">
                                                    <p>Una de las festividades más importantes para el municipio de Salamina es la “Noche del Fuego”, festividad que tiene 10 años de antigüedad <a href="">Ver mas...</a></p>
                                                </div>
                                            </li>
                                            <li class="media"><a href="#" class="pull-right"><img src="imagenes/festival_teatro.jpg" alt="" width="70" class="img-thumbnail media-object"></a>
                                                <div class="media-body">
                                                    <p>El Festival de Teatro de Manizales es una fiesta cultural que se realiza anualmente durante el mes de septiembre <a href="">Ver mas...</a></p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div><!-- end col-4 -->
                                    <div class="col-sm-4">
                                  		<h3 class="title">Ubicación</h3>
                                    		<div id="googlemaps6" class="google-map hidden-xs"></div>
                                    </div><!-- end col-4 -->
                                </div><!-- end row -->
                                <hr>
                                <div class="row">
                                	<div class="col-sm-4">
                                  		<h3 class="title">¿qué hacer?</h3>
                                    	<button type="button" class="btn btn-info">Vida Nocturna</button>
                                        <button type="button" class="btn btn-info">En Familia</button>
                                        <button type="button" class="btn btn-info">Con Amigos</button>
                                        <button type="button" class="btn btn-info">Ecoturismo</button>
                                        <button type="button" class="btn btn-info">Agroturismo</button>
                                        <button type="button" class="btn btn-info">Aventura</button>
                                        <button type="button" class="btn btn-info">Extremo</button>
                                        <button type="button" class="btn btn-info">Compras</button>
                                        <button type="button" class="btn btn-info">Parques Temáticos</button>
                                        <button type="button" class="btn btn-info">Calendario de eventos</button>
                                    </div><!-- end col-6 -->
                                	<div class="col-sm-4">
                                  		<h3 class="title">¿dónde alojarse?</h3>
                                    	<button type="button" class="btn btn-info">Hoteles</button>
                                        <button type="button" class="btn btn-info">Hostales</button>
                                        <button type="button" class="btn btn-info">Cabañas</button>
                                        <button type="button" class="btn btn-info">Fincas / Haciendas</button>
                                        <button type="button" class="btn btn-info">Por tarifa</button>
                                        <button type="button" class="btn btn-info">Por capacidad</button>
                                        <button type="button" class="btn btn-info">Ver todos</button>
                                    </div><!-- end col-3 -->
                                	<div class="col-sm-4">
                                  		<h3 class="title">¿dónde comer?</h3>
                                    	<button type="button" class="btn btn-info">Restaurantes</button>
                                        <button type="button" class="btn btn-info">Bares</button>
                                        <button type="button" class="btn btn-info">Fuera de la ciudad</button>
                                        <button type="button" class="btn btn-info">Paraderos</button>
                                        <button type="button" class="btn btn-info">Comida tipica</button>
                                        <button type="button" class="btn btn-info">Postres</button>
                                        <button type="button" class="btn btn-info">Ver todos</button>
                                    </div><!-- end col-3 -->                
                                </div><!-- end row -->
							</li><!-- fhmm-content -->
                        </ul><!-- dropdown-menu -->
                    </li><!-- mega menu -->
                    <!-- list elements -->
					<li class="dropdown fhmm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Destinos <b class="caret"></b></a>
                        <ul class="dropdown-menu fullwidth">
                            <li class="fhmm-content withdesc">
                                <div class="row">
                                    <div class="col-sm-2">
                                    	<h3 class="title">Alto Occidente</h3>
                                        <ul>
                                        	<li><a data-description="Descripción" href="#">Filadelfia</a></li>
                                        	<li><a data-description="Descripción" href="#">La Merced</a></li>
                                        	<li><a data-description="Descripción" href="#">Marmato</a></li>
                                        	<li><a data-description="Descripción" href="#">Riosucio</a></li>
                                        	<li><a data-description="Descripción" href="#">Supia</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-2">
                                    	<h3 class="title">Alto Oriente</h3>
                                        <ul>
                                        	<li><a data-description="Descripción" href="#">Manzanares</a></li>
                                        	<li><a data-description="Descripción" href="#">Marquetalia</a></li>
                                        	<li><a data-description="Descripción" href="#">Marulanda</a></li>
                                        	<li><a data-description="Descripción" href="#">Pensilvania</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-2">
                                    	<h3 class="title">Bajo Occidente</h3>
                                        <ul>
                                        	<li><a data-description="Descripción" href="#">Anserma</a></li>
                                        	<li><a data-description="Descripción" href="#">Belalcazar</a></li>
                                        	<li><a data-description="Descripción" href="#">Risaralda</a></li>
                                        	<li><a data-description="Descripción" href="#">San Jose</a></li>
                                        	<li><a data-description="Descripción" href="#">Viterbo</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-2">
                                    	<h3 class="title">Centro Sur</h3>
                                        <ul>
                                        	<li><a data-description="Descripción" href="#">Chinchica</a></li>
                                        	<li><a data-description="Descripción" href="#">Manizales</a></li>
                                        	<li><a data-description="Descripción" href="#">Neira</a></li>
                                        	<li><a data-description="Descripción" href="#">Palestina</a></li>
                                        	<li><a data-description="Descripción" href="#">Villamaria</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-2">
                                    	<h3 class="title">Magdalena Caldense</h3>
                                        <ul>
                                        	<li><a data-description="Descripción" href="#">La Dorada</a></li>
                                        	<li><a data-description="Descripción" href="#">Norcasia</a></li>
                                        	<li><a data-description="Descripción" href="#">Samana</a></li>
                                        	<li><a data-description="Descripción" href="#">Victoria</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-2">
                                    	<h3 class="title">Norte</h3>
                                        <ul>
                                        	<li><a data-description="Descripción" href="#">Aguadas</a></li>
                                        	<li><a data-description="Descripción" href="#">Aranzazu</a></li>
                                        	<li><a data-description="Descripción" href="#">Pacora</a></li>
                                        	<li><a data-description="Descripción" href="#">Salamina</a></li>
                                        </ul>
                                    </div>
                                </div><!-- end row -->
                            </li><!-- end grid demo -->
                        </ul><!-- end drop down menu -->
					</li><!-- end list elements -->
                    <!-- list elements -->
					<li class="dropdown fhmm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Mega Menu (Half) <b class="caret"></b></a>
                        <ul class="dropdown-menu half">
                            <li class="fhmm-content withoutdesc">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <ul>
                                        	<li><a href="#"><i class="fa fa-laptop"></i> Laptop icon</a></li>
                                        	<li><a href="#"><i class="fa fa-desktop"></i> Desktop icon</a></li>
                                        	<li><a href="#"><i class="fa fa-android"></i> Android icon</a></li>
                                        	<li><a href="#"><i class="fa fa-apple"></i> Apple icon</a></li>
                                        	<li><a href="#"><i class="fa fa-windows"></i> Windows icon</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4">
                                        <ul>
                                        	<li><a href="#"><i class="fa fa-leaf"></i> Leaf icon</a></li>
                                        	<li><a href="#"><i class="fa fa-heart-o"></i> Heart icon</a></li>
                                        	<li><a href="#"><i class="fa fa-gear"></i> Gear icon</a></li>
                                        	<li><a href="#"><i class="fa fa-camera-retro"></i> Camera icon</a></li>
                                        	<li><a href="#"><i class="fa fa-bars"></i> Bars icon</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4">
                                        <ul>
                                        	<li><a href="#"><i class="fa fa-beer"></i> Beer icon</a></li>
                                        	<li><a href="#"><i class="fa fa-code"></i> Code icon</a></li>
                                        	<li><a href="#"><i class="fa fa-envelope-o"></i> Envelope icon</a></li>
                                        	<li><a href="#"><i class="fa fa-flag-o"></i> Flag icon</a></li>
                                        	<li><a href="#"><i class="fa fa-key"></i> Key icon</a></li>
                                        </ul>
                                    </div>
                                </div><!-- end row -->
                                <hr>
                                <div class="row">
                                	<div class="col-sm-12">
                                    	<p>Font Awesome gives you scalable vector icons that can instantly be customized — size, color, drop shadow, and anything that can be done with the power of CSS.</p>
                                        <p>Font Awesome font licensed under <a href="http://scripts.sil.org/OFL">SIL OFL 1.1</a> Code licensed under <a href="http://opensource.org/licenses/mit-license.html">MIT License</a> Documentation licensed under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a></p>
                                    </div>
                                </div><!-- end row -->
                            </li><!-- end grid demo -->
                        </ul><!-- end drop down menu -->
					</li><!-- end list elements -->
                    <!-- standard drop down -->
					<li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Flyout <b class="caret"></b></a>
                        <ul class="dropdown-menu" role="menu">
							<li><a href="#">ThemeForest</a></li>
							<li><a href="#">GraphicRiver</a></li>
							<li><a href="#">PhotoDune</a></li>
                            <li class="dropdown-submenu">
                                <a href="#">Envato Sites</a>
								<ul class="dropdown-menu">
									<li class="dropdown-submenu"><a href="#">Tuts+</a>
										<ul class="dropdown-menu">
											<li><a href="#">PSD Tuts</a></li>
											<li><a href="#">CODE Tuts</a></li>
										</ul>
									</li><!-- end dropdown-submenu -->
									<li><a href="#">We are Envato</a></li>
									<li><a href="#">Support Center</a></li>
								</ul><!-- end dropdown-menu -->
                            </li><!-- end dropdown-submenu -->
							<li><a href="#">Creattica</a></li>
							<li><a href="#">Microlancer</a></li>
							<li><a href="#">ActiveDen</a></li>
                        </ul><!-- end dropdown-menu -->
					</li><!-- end standard drop down -->

                    <!-- grid view -->
					<li class="dropdown fhmm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Recomendados <b class="caret"></b></a>
						<ul class="dropdown-menu">
                <li>
                  <div class="yamm-content">
                    <div class="row">
                      <div class="col-sm-3">
                          <div class="thumbnail"><img alt="260x130" src="imagenes/cultura_cafetera_1.png">
                            <div class="caption">
                              <h3>Cultura cafetera</h3>
                              <p>Mazagran doppio half and half aftertaste organic, rich doppio</p>
                              <p><a href="#" class="btn btn-primary">Mas...</a> <!-- <a href="#" class="btn btn-default">Action</a> --></p>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="thumbnail"><img alt="260x130" src="imagenes/salamina_1.jpg">
                            <div class="caption">
                              <h3>Salamina: ciudad luz</h3>
                              <p>Mazagran doppio half and half aftertaste organic, rich doppio</p>
                              <p><a href="#" class="btn btn-primary">Mas...</a> <!-- <a href="#" class="btn btn-default">Action</a> --></p>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="thumbnail"><img alt="260x130" src="imagenes/salamina_2.jpg">
                            <div class="caption">
                              <h3>Fiestas religiosas</h3>
                              <p>Mazagran doppio half and half aftertaste organic, rich doppio</p>
                              <p><a href="#" class="btn btn-primary">Mas...</a> <!-- <a href="#" class="btn btn-default">Action</a> --></p>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="thumbnail"><img alt="260x130" src="imagenes/nevado_ruiz_1.png">
                            <div class="caption">
                              <h3>Nevado del ruiz</h3>
                              <p>Mazagran doppio half and half aftertaste organic, rich doppio</p>
                              <p><a href="#" class="btn btn-primary">Mas...</a> <!-- <a href="#" class="btn btn-default">Action</a> --></p>
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
                </li>
              </ul>
					</li><!-- end dropdown fhmm-fw -->
                </ul><!-- end nav navbar-nav -->
                
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Contact Form<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <form id="contact6" action="#" name="contactform" method="post">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <input type="text" name="name" id="name6" class="form-control" placeholder="Name"> 
                                        <input type="text" name="email" id="email6" class="form-control" placeholder="Email"> 
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <input type="text" name="phone" id="phone6" class="form-control" placeholder="Phone">
                                        <input type="text" name="subject" id="subject6" class="form-control" placeholder="Subject"> 
                                    </div>
                                    <div class="clearfix"></div>                   
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <textarea class="form-control" name="comments" id="comments6" rows="6" placeholder="Your Message ..."></textarea>
                                    </div>   
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="pull-right">
                                            <input type="submit" value="SEND" id="submit6" class="btn btn-primary small">
                                        </div>  
                                    </div>
                                </form>
                            </li>
                        </ul>
					</li>
				</ul><!-- end nav navbar-nav navbar-right -->
			</div><!-- end #navbar-collapse-1 -->
            
			</nav><!-- end navbar navbar-default fhmm -->
		</div><!-- end container -->
	</div><!-- end jumbo -->

<!-- FIN MENU -->

<div class="span8">
    <div class="col-sm-2 col-sm-offset-1">
        <h2>MANIZALES</h2>
    </div>
</div>

<!-- CARRUSEL -->

<div class="container">
        <div id="main_area">
                <!-- Slider -->
                <div class="row">
                    <div class="span12" id="slider">
                        <!-- Top part of the slider -->
                        <div class="row">
                            <div class="span8" id="carousel-bounding-box">
                                <div class="carousel slide" id="myCarousel">
                                    <!-- Carousel items -->
                                    <div class="carousel-inner">
                                        <div class="active item" data-slide-number="0">
                                        <img src="imagenes/manizales_1.jpg"></div>

                                        <div class="item" data-slide-number="1">
                                        <img src="imagenes/manizales_3.jpg"></div>

                                        <div class="item" data-slide-number="2">
                                        <img src="imagenes/manizales_2.jpg"></div>

                                        <div class="item" data-slide-number="3">
                                        <img src="imagenes/festival_teatro.jpg"></div>

                                        <div class="item" data-slide-number="4">
                                        <img src="http://placehold.it/770x300&text=five"></div>

                                        <div class="item" data-slide-number="5">
                                        <img src="http://placehold.it/770x300&text=six"></div>
                                    </div><!-- Carousel nav -->
                                    <a class="carousel-control left" data-slide="prev" href="#myCarousel">‹</a> 
                                    <a class="carousel-control right" data-slide="next" href="#myCarousel">›</a>
                                </div>
                            </div>

                            <div class="span4" id="carousel-text"></div>

                            <div id="slide-content" style="display: none;">
                                <div id="slide-content-0">
                                    <h2>Slider One</h2>
                                    <p>Lorem Ipsum Dolor</p>
                                    <p class="sub-text">October 24 2012 - <a href="#">Read more</a></p>
                                </div>

                                <div id="slide-content-1">
                                    <h2>Slider Two</h2>
                                    <p>Lorem Ipsum Dolor</p>
                                    <p class="sub-text">October 24 2012 - <a href="#">Read more</a></p>
                                </div>

                                <div id="slide-content-2">
                                    <h2>Slider Three</h2>
                                    <p>Lorem Ipsum Dolor</p>
                                    <p class="sub-text">October 24 2012 - <a href="#">Read more</a></p>
                                </div>

                                <div id="slide-content-3">
                                    <h2>Slider Four</h2>
                                    <p>Lorem Ipsum Dolor</p>
                                    <p class="sub-text">October 24 2012 - <a href="#">Read more</a></p>
                                </div>

                                <div id="slide-content-4">
                                    <h2>Slider Five</h2>
                                    <p>Lorem Ipsum Dolor</p>
                                    <p class="sub-text">October 24 2012 - <a href="#">Read more</a></p>
                                </div>

                                <div id="slide-content-5">
                                    <h2>Slider Six</h2>
                                    <p>Lorem Ipsum Dolor</p>
                                    <p class="sub-text">October 24 2012 - <a href="#">Read more</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/Slider-->

                <div class="row hidden-phone" id="slider-thumbs">
                    <div class="span12">
                        <!-- Bottom switcher of slider -->

                        <ul class="thumbnails">
                            <li class="span2">
                                <a class="thumbnail" id="carousel-selector-0"><img src="imagenes/manizales_1.jpg" width="170 px" height="100 px"></a>
                            </li>

                            <li class="span2">
                                <a class="thumbnail" id="carousel-selector-1"><img src="http://placehold.it/170x100&text=two"></a>
                            </li>

                            <li class="span2">
                                <a class="thumbnail" id="carousel-selector-2"><img src="http://placehold.it/170x100&text=three"></a>
                            </li>

                            <li class="span2">
                                <a class="thumbnail" id="carousel-selector-3"><img src="imagenes/festival_teatro.jpg"></a>
                            </li>

                            <li class="span2">
                                <a class="thumbnail" id="carousel-selector-4"><img src="http://placehold.it/170x100&text=five"></a>
                            </li>

                            <li class="span2">
                                <a class="thumbnail" id="carousel-selector-5"><img src="http://placehold.it/170x100&text=six"></a>
                            </li>
                        </ul>
                    </div>
                </div>
        </div>
</div>
<!-- FIN CARRUSEL -->

<!-- MENU LATERRAL -->

<div class="container">
    <div class="row">
             <div class="col-sm-2 paddingTop20">
            <nav class="nav-sidebar">
                <ul class="nav">
                    <li class="active"><a href="javascript:;"><span class="glyphicon glyphicon-star"></span> Informacion general</a></li>
                    <li><a href="javascript:;"> Atractivos</a></li>
                    <li><a href="javascript:;">Hospedaje</a></li>
                    <li><a href="javascript:;">Restaurantes</a></li>
                    <li><a href="javascript:;">Bares</a></li>
                    <li><a href="javascript:;">Puntos de informacion</a></li>
                    <li class="nav-divider"></li>
                    <li><a href="javascript:;"><i class="glyphicon glyphicon-off"></i> Salir</a></li>
                </ul>
            </nav>
        </div>  
    
     <div class="col-md-10 blogShort">
                     <h1>Title 1</h1>
                     <img src="http://joern-duwe.de/aquaristik/images/skalare00.jpg" alt="post img" class="pull-left img-responsive postImg img-thumbnail margin10">
                     <article><p>
                         Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                         ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only 
                         five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
                         of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of
                         Lorem Ipsum.
                         </p>
                     <p>
                         Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                         ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only 
                         five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
                         of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of
                         Lorem Ipsum.
                         </p>
                           <h2>It is so easy</h2>
                       <p>
                         Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                         ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only 
                         five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
                         of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of
                         Lorem Ipsum.
                         </p>
                         <h3>How to lose 20 pounds in 1 week!</h3>
                          <br>
                         <iframe width="100%" height="480" src="//www.youtube.com/embed/Bn_d-ghQ5HA" frameborder="0" allowfullscreen></iframe>
                         
                         <p>
                         Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                         ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only 
                         five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
                         of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of
                         Lorem Ipsum.
                         </p>
                        <h4>It is so easy</h4>
                       <p>
                         Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                         ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only 
                         five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
                         of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of
                         Lorem Ipsum.
                         </p>
                         
                     
                     
                     </article>
                
                 </div>
    </div>
</div>

<!-- FIN MENU LATERRAL -->



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
    jQuery(document).ready(function($) {
 
        $('#myCarousel').carousel({
                interval: 5000
        });
 
        $('#carousel-text').html($('#slide-content-0').html());
 
        //Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click( function(){
                var id_selector = $(this).attr("id");
                var id = id_selector.substr(id_selector.length -1);
                var id = parseInt(id);
                $('#myCarousel').carousel(id);
        });
 
 
        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid', function (e) {
                var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });
});
</script>


	</body>
</html>