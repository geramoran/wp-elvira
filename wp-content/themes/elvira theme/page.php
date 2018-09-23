<!--
		<link rel="stylesheet" href="css/bootstrap-grid.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap-reboot.css">
		<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/style.css">
-->
<?php get_header(); ?>
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
				<div class="container-fluid ">
					<a class="navbar-brand" href="<?php echo esc_url(home_url('')); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/img/SVG-logo/logo-bullet.svg" width="30px" height="30px" alt="logo">
						<img src="<?php echo get_template_directory_uri(); ?>/img/SVG-logo/logo-typo.svg" height="30px" alt="elvira richards">
					</a>
					<button id="buttonResponsive" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="" data-target="#navbarSidebar" aria-controls="navbarSidebar" aria-expanded="false" aria-label="Toggle navigation"> 
	          			<span class="navbar-toggler-icon"></span>
	        		</button>
					<!--<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="nav navbar-nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="index.html" title="">Inicio</a></li>
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
							<li class="nav-item"><a class="nav-link" href="contacto.html" title="">Contacto</a></li>
						</ul>
					</div>-->
					<?php
						$args = array(
							'theme_location' => 'header_root',
							'container' => 'div',
							'container_id' => 'navbarSidebar',
							'container_class' => 'sidebar',
							'menu_class' => 'nav navbar-nav ml-auto'
						);
						wp_nav_menu($args);
					?>
				</div>
			</nav>
		</header>
		<div class="bloque-rojo">
		</div>
		<div class="col-lg-10 about-us" style="float: none; margin-right: auto; margin-left: auto; margin-bottom: 0; text-align: center;">
			<h1 class="title">Casting</h1>
			<div class="row" style="padding-bottom: 30px">
				<iframe class="video-hero-noticias" src="https://player.vimeo.com/video/281020757" width="560" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			<br>
			<div class="elvira-info">
				<br>
				<br>
			<h2>Elvira Richards</h2>
			<p>Directora de casting con más de 80 créditos en cine y televisión, entre ellos “El Estudiante”, “Campeones”, “MalaCopa”, “Nesio”, “Espiral”, “La Mitad del Mundo”, “Familia Gang”, “La Ruta Blanca”.
			Galardonada con el premio “Pantalla de Cristal” por Mejor Dirección de Casting con la película “La Cebra”.</p>
			<br>
			<a href="#">Ver CV completo</a>
			<br>
			</div>
			<br>
			</div>
			<div class="row">
				<img src="img/elvira-casting/carousel-simulado.png" style="width: 100%; height: auto;">
			</div>
				<br>
				<h2>contacto</h2>
				<br>
			<div class="row">
				<div class="col-2"></div>
					<div class="col-5 casting-data">
						<p>Dinamarca #50-D, Col. Juárez
						Delg. Cuauhtémoc C.P. 06600 CDMX
						Tels. 2455-1954 y 3330-2694 </p>
					</div>
					<div class="col casting-redes">
						<div class="socialnet sn-fb">
							<img src="img/redes/facebook.svg"><p>Elvira Richards</p>
						</div>
						<div class="w-100"></div>
						<div class="socialnet sn-tw">
							<img src="img/redes/twitter.svg"><p>@ElviraRichards</p>
						</div>
						<div class="w-100"></div>
						<div class="socialnet sn-ig">
							<img src="img/redes/instagram.svg"><p>ElviraRichards</p>
						</div>
						<div class="w-100"></div>
						<div class="socialnet sn-imdb">
							<img src="img/redes/imdb.svg"><p>ElviraRichards</p>
						</div>
					</div>
				<div class="col-2"></div>
			</div>
			<br><h2>Tráilers de Películas</h2><br>
			<div class="row trailer-caja">
				<div class="col trailers"><iframe src="https://www.youtube.com/embed/4r2bXXldY_I?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
				<div class="col trailers"><iframe src="https://www.youtube.com/embed/XejBS35dB-w?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
				<div class="col trailers"><iframe src="https://www.youtube.com/embed/PCrXZgrKAQ8?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
				<div class="col trailers"><iframe src="https://www.youtube.com/embed/Gdu0hgQkkTE?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
				<div class="col trailers"><iframe src="https://www.youtube.com/embed/pYe3aXuOoCo?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
				<div class="col trailers"><iframe src="https://www.youtube.com/embed/mUIDwL6M0bg?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
				<div class="col trailers"><iframe src="https://www.youtube.com/embed/tATzM5OKsoI?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
				<div class="col trailers"><iframe src="https://www.youtube.com/embed/2CYw27C7woo?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
			</div>
		</div>
		<footer class="footer-index">
			<div class="container">
				<hr align="right">
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
					<div  class="redes-bullets">
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
		<script src="js/scripts.js"></script>
-->
<?php get_footer(); ?>