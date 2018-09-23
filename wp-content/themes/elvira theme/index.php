<?php get_header(); ?>
	<title>Elvira Richards</title>
<!--
	<link rel="stylesheet" href="css/bootstrap-grid.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-reboot.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="style.css">
-->
</head>
<body>
	<div id="fb-root">
	</div>
	<script>
		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.0';
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
			<div class="container-fluid">
				<a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/img/SVG-logo/logo-bullet.svg" width="30px" height="30px" alt="logo">
					<img src="<?php echo get_template_directory_uri(); ?>/img/SVG-logo/logo-typo.svg" height="30px" alt="elvira richards">
				</a>
				<button id="buttonResponsive" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="" data-target="#navbarSidebar" aria-controls="navbarSidebar" aria-expanded="false" aria-label="Toggle navigation">
          			<span class="navbar-toggler-icon"></span>
        		</button>
				<div class="sidebar" id="navbarSidebar">
					<ul class="nav navbar-nav ml-auto">
						<!--<li class="nav-item active"><a class="nav-link" href="index.html" title="">Inicio</a></li>
						<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="management.html" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="">Management</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="management.html">Actrices</a>
								<a class="dropdown-item" href="management.html">Actores</a>
								<a class="dropdown-item" href="management.html">Talento Joven</a>
								<a class="dropdown-item" href="management.html">Internacional</a>
								<a class="dropdown-item" href="management.html">Más Talento</a>
							</div>
         				</li>
						<li class="nav-item"><a class="nav-link" href="casting.html" title="">Casting</a></li>
						<li class="nav-item"><a class="nav-link" href="talleres.html" title="">Talleres</a></li>
						<li class="nav-item"><a class="nav-link" href="servicios.html" title="">Servicios</a></li>
						<li class="nav-item"><a class="nav-link" href="noticias.html" title="">Noticias</a></li>
						<li class="nav-item"><a class="nav-link" href="contacto.html" title="">Contacto</a></li>-->

						<?php 
							$args = array(
								'theme_location' => 'header_root',
								'container' => 'ul',
								'container_class' => 'navbar'
							);
							wp_nav_menu($args);
						?>
					</ul>
										
				</div>
			</div>
		</nav>
	</header>
	<div>
		<div id="carouselExample" class="carousel slide carousel-fade" data-ride="carousel">
		 	<div class="carousel-inner">
		    	<div class="carousel-item active">
		      		<img class="d-block w-100" src="img/SLIDER1.png?auto=yes&bg=777&fg=555&text=First slide" alt="First slide">
		    	</div>
		    	<div class="carousel-item">
		      		<img class="d-block w-100" src="img/SLIDER2.png?auto=yes&bg=666&fg=444&text=Second slide" alt="Second slide">
		    	</div>
		    	<div class="carousel-item"> 
					<img class="d-block w-100" src="img/SLIDER3.png" alt="Imagen 3" style="animation-play-state: paused;">
				</div>
			</div>
		  	<a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Anterior</span>
		    </a>
  			<a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
    			<span class="carousel-control-next-icon" aria-hidden="true"></span>
    			<span class="sr-only">Siguiente</span>
  			</a>
		</div>
		<div class="col-lg-10 about-us" style="float: none; margin-right: auto; margin-left: auto; margin-bottom: 0;">
			<h1 class="title">Nosotros</h1>
			<br><br>
			<p>"Everything you can imagine is real"</p>
			<p class="Picasso"><i>—Pablo Picasso</i></p>
		</div>
		<div class="container management">
			<div class="d-flex justify-content-start align-items-center flex-wrap">
				<div class="man-item">
					<img src="img/actores curado/12 GABRIELA STECK.jpg">
					<div class="text">
						<div class="text2">picture 12 GABRIELA STECK</div> 
					</div>
				</div>
				<div class="man-item">
					<img src="img/actores curado/3 ANABEL.JPG">
					<div class="text">
						<div class="text2">picture 3 ANABEL</div>
					</div>
				</div>
				<div class="man-item">
					<img src="img/actores curado/3 JORGE.jpg">
					<div class="text"> 
						<div class="text2">picture 3 JORGE</div>
					</div> 
				</div>
				<div class="man-item">
					<img src="img/actores curado/4 ADRIANA CARDEÑA.jpg">
					<div class="text"> 
						<div class="text2">picture 4 ADRIANA CARDEÑA</div> 
					</div> 
				</div>
				<div class="man-item">
					<img src="img/actores curado/4.jpg">
					<div class="text"> 
						<div class="text2">picture 4</div> 
					</div> 
				</div>
				<div class="man-item">
					<img src="img/actores curado/5 ELPIDIA CARRILLO.jpg">
					<div class="text"> 
						<div class="text2">picture 5 ELPIDIA CARRILLO</div> 
					</div> 
				</div>
				<div class="man-item">
					<img src="img/actores curado/8 DUNIA.jpg">
					<div class="text"> 
						<div class="text2">picture 8 DUNIA</div> 
					</div> 
				</div>
				<div class="man-item">
					<img src="img/actores curado/Adriana Roel.jpg">
					<div class="text"> 
						<div class="text2">picture Adriana Roel</div> 
					</div> 
				</div>
				<div class="man-item">
					<img src="img/actores curado/ALEJANDRA LEMUS 7.jpg">
					<div class="text"> 
						<div class="text2">picture ALEJANDRA LEMUS</div> 
					</div> 
				</div>
				<div class="man-item">
					<img src="img/actores curado/ALEX PEÑA 5.jpg">
					<div class="text"> 
						<div class="text2">picture ALEX PEÑA</div> 
					</div> 
				</div>
				<div class="man-item">
					<img src="img/actores curado/ANA LAVERDE (3).jpg">
					<div class="text"> 
						<div class="text2">picture ANA LAVERDE</div> 
					</div> 
				</div>
			</div>
		</div>
	</div>
	
	<footer class="footer-index">
		<div class="container">
			<hr text-align="right">
			<div class="row">
				<div class="col-lg-4 d-flex justify-content-around align-items-center">
					<img src="img/SVG-logo/logo-vertical.svg" alt="Elvira Richards" width="186px" height="152px">
				</div>
				<div class="col-lg-4 d-flex justify-content-around align-items-center social-net">
					<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FElviraRichardsManagement%2F&tabs=timeline&width=340&height=300&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="340" height="200" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
				</div>
				<div class="col-lg-4 d-flex justify-content-around align-items-center social-net">
					<a class="twitter-timeline" data-lang="es" data-width="340" data-height="200" href="https://twitter.com/ElviRichards?ref_src=twsrc%5Etfw">Tweets by ElviRichards</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
				</div>
			</div>
			<div class="d-flex footer-end">
				<div>
					<p class="correct-align-footer"><i class="far fa-copyright"></i> Elvira Richards - 2018</p>
				</div>
				<div class="ml-auto">
					<p class="correct-align-footer">Síguenos</p>
				</div>
				<div class="redes-bullets">
					<!--
						<img class="footer-alinear" src="img/redes/facebook.svg">
						<img class="footer-alinear" src="img/redes/twitter.svg">
						<img class="footer-alinear" src="img/redes/instagram.svg">
					-->
					<?php
						$args = array(
							'theme_location' => 'social',
							'container' => 'img',
							'container_class' => 'footer-alinear'
						);
						wp_nav_menu($args);
					?>
				</div>
			</div>
		</div>
	</footer>
<!--
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/slick.min.js"></script>
	<script src="js/scripts.js"></script>
-->
<?php get_footer(); ?>