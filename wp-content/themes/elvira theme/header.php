<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="Elivira Richads">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
	<title><?php echo the_title(); ?></title>
	<?php wp_head(); ?>	
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