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
		<div class="bloque-rojo"></div>
				<div class="col-lg-10 about-us" style="float: none; margin-right: auto; margin-left: auto; margin-bottom: 0; text-align: center;">
			<div class="container actor-container">
				<div class="row">
					<!--IMG Actor-->
					<div class="col-span-4 slider-for slider">
						<div><img src="img/actores curado/HECTOR KOTSIFAKIS 3.jpg"></div>
					</div>
					<!--/End/ IMG Actor-->
					<div class="col-4 slider-change-1">
						<div class="slider-nav slider">
							<div><img src="img/actores curado/HECTOR KOTSIFAKIS 3.jpg"></div>
						</div>
					</div>
					<div class="col-8 taller-info actor-info">
						<h2>Héctor Kotsifakis</h2>
						<p class="taller-descripcion">Most people consider hair combing a routine activity. There are people who keep a particular hair style throughout their life. On the other hand, younger generations adopt new hair styles according to new trends. To have a healthy hair, proper nutrition is required. General health has direct relation with the quality and quantity of hair. In order to make your hair beautiful, you need regular washing, use of hair oil, proper combing, etc.</p>
						<a href="#">Ver CV completo</a>
						<!--inicia div de carrusel-->
						<div class="slider-nav slider slider-change-2">
							<div><img src="img/actores curado/HECTOR KOTSIFAKIS 3.jpg"></div>
						</div>
						<!--termina div de carrusel-->
					</div>
					<div class="col-md-8 slider-change-3">
						<div class="slider-nav slider">
							<div><img src="img/actores curado/HECTOR KOTSIFAKIS 3.jpg"></div>
						</div>
					</div>
				</div>
				<div class="demo-reel">
					<iframe src="" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				</div>
			</div>
		</div>
		<footer class="footer-index">
			<div class="container">
				<hr align="right">
				<div class="row">
					<div class="col-lg-4 d-flex justify-content-around align-items-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/SVG-logo/logo-vertical.svg" alt="Elvira Richards" width="186px" height="152px">
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
<?php get_footer(); ?>