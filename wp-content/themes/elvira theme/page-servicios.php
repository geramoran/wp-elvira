<?php get_header(); ?>
		<div class="bloque-rojo"></div>
		<div class="col-lg-10 about-us" style="float: none; margin-right: auto; margin-left: auto; margin-bottom: 0; text-align: center;">
			<h1 class="title">Servicios</h1>
			<br><br>
			<?php
				$args = array(
					'post_type' => 'servicios_detalle'
				);
				$allPersonas = new WP_Query( $args );
				while ($allPersonas->have_posts()) : $allPersonas->the_post();
			?>
			<div>
				<a href="<?php the_field('page'); ?>">
					<img class="logo-servicios" src="<?php the_field('foto_destacada'); ?>">
				</a>
				<h2><?php the_title(); ?></h2>
				<br>
				<p class="servicios-texto"><?php the_field('descripcion'); ?></p>
			</div>
			<br><br>
			<?php
				endwhile;
				wp_reset_postdata();
			?>
		</div>
<?php get_footer(); ?>