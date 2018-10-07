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
					<?php
						$args = array(
							'post_type' => 'management'
						);
						$allPersonas = new WP_Query( $args );
						while ($allPersonas->have_posts()) : $allPersonas->the_post();
					?>
					<div class="man-item">
						<a href="<?php the_permalink(); ?>">
							<img src="<?php echo the_field('thumbnail');?>">
							<div class="text">
								<div class="text2"> 
									<?php the_field('nombre'); ?>		
								</div> 
							</div>
						</a>
					</div>
					<?php
						endwhile;
						wp_reset_postdata();
					?>
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
<!--
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>
-->
<?php get_footer(); ?>