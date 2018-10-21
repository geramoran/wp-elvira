<?php get_header(); ?>
		<div class="bloque-rojo"></div>
		<?php 
			while (have_posts()): the_post();
		?>
		<div class="col-lg-10 about-us" style="float: none; margin-right: auto; margin-left: auto; margin-bottom: 0; text-align: center;">
			<h1 class="title">Casting</h1>	
			<div class="row" style="padding-bottom: 30px">
				<?php echo the_field('demo_reel'); ?>
				<br>
				<div class="elvira-info">
					<br>
					<br>
					<h2><?php echo the_field('nombre'); ?></h2>
					<?php echo the_field('descripcion'); ?>
					<br>
					<a href="#">Ver CV completo</a>
					<br>
				</div>
				<br>
			</div>
			<div class="row">
				<?php
					$carrousel = acf_photo_gallery('cartelera', $post->ID);
					if (count($carrousel)):
						foreach ($carrousel as $imagen):
							?>
								<img src="<?php echo $imagen['full_image_url'];?>" style="width: 100%; height: auto;">
							<?php
						endforeach;
					endif;
				?>
			</div>
			<br>
			<h2>contacto</h2>
			<br>
			<div class="row">
				<div class="col-2"></div>				
				<div class="col-5 casting-data">
					<?php echo the_field('direccion'); ?>
				</div>
				<div class="col casting-redes">
					<?php
						$args = array(
							'post_type' => 'socialred_detalle'
						);
						$allnet = new WP_Query( $args );
						while ($allnet->have_posts()) : $allnet->the_post();
					?>
					<div class="socialnet">
						<a href="<?php echo the_field('url') ?>" ><img src="<?php echo the_field('icono'); ?>"><p><?php echo the_field('socialnet_name'); ?></p></a>
					</div>
					<?php
						endwhile;
						wp_reset_postdata();
					?>
				</div>
				<div class="col-2"></div>
			</div>
			<br><h2>Tráilers de Películas</h2><br>
			<div class="row trailer-caja">
				<?php
					$args = array(
						'post_type' => 'trailer_elvira'
					);
					$allnet = new WP_Query( $args );
					while ($allnet->have_posts()) : $allnet->the_post();
				?>
				<div class="col trailers"><?php echo the_field('url') ?></div>
				<?php
					endwhile;
					wp_reset_postdata();
				?>
			</div>
		</div>
		<?php 
			endwhile;
		?>
<?php get_footer(); ?>
<script>
	$('.about-us .row iframe').addClass('video-hero-noticias');
</script>	