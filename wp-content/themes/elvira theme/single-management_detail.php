<?php get_header(); ?>
		<div class="bloque-rojo"></div>
		<div class="col-lg-10 about-us" style="float: none; margin-right: auto; margin-left: auto; margin-bottom: 0; text-align: center;">
			<?php
				while (have_posts()) : the_post();
			?>
			<div class="container actor-container">
				<div class="row">
					<!--IMG Actor-->
					<div class="col-span-4 slider-for slider">
						<div><img src="<?php echo the_field('thumbnail');?>"></div>
						<?php
							$carrousel = acf_photo_gallery('carrousel', $post->ID);
							if (count($carrousel)):
								foreach ($carrousel as $imagen):
									?>
										<div><img src="<?php echo $imagen['full_image_url'];?>"></div>
									<?php
								endforeach;
							endif;
						?>
					</div>
					<!--/End/ IMG Actor-->
					<div class="col-4 slider-change-1">
						<div class="slider-nav slider">
							<div><img src="<?php echo the_field('thumbnail');?>"></div>
							<?php
								$carrousel = acf_photo_gallery('carrousel', $post->ID);
								if (count($carrousel)):
									foreach ($carrousel as $imagen):
										?>
											<div><img src="<?php echo $imagen['full_image_url'];?>"></div>
										<?php
									endforeach;
								endif;
							?>
						</div>
					</div>
					<div class="col-8 taller-info actor-info">
					<h2><?php the_field('nombre_actor'); ?></h2>
					<p class="taller-descripcion"><?php echo the_field('descripcion');?></p>
					<br>
					<a href="<?php echo get_template_directory_uri() . "/cv/" . $post->ID . ".php" ;?>">Ver CV completo</a>
					<!--inicia div de carrusel-->
					<div class="slider-nav slider slider-change-2">
						<div><img src="<?php echo the_field('thumbnail');?>"></div>
						<?php
							$carrousel = acf_photo_gallery('carrousel', $post->ID);
							if (count($carrousel)):
								foreach ($carrousel as $imagen):
									?>
										<div><img src="<?php echo $imagen['full_image_url'];?>"></div>
									<?php
								endforeach;
							endif;
						?>
					</div>
					<!--termina div de carrusel-->
					</div>
					<div class="col-md-8 slider-change-3">
						<div class="slider-nav slider">
							<div><img src="<?php echo the_field('thumbnail');?>"></div>
							<?php
								$carrousel = acf_photo_gallery('carrousel', $post->ID);
								if (count($carrousel)):
									foreach ($carrousel as $imagen):
										?>
											<div><img src="<?php echo $imagen['full_image_url'];?>"></div>
										<?php
									endforeach;
								endif;
							?>
						</div>
					</div>
				</div>
				<div class="demo-reel">
					<?php echo the_field('demo_reel');?>
				</div>
			</div>
			<?php
				endwhile;
				wp_reset_postdata();
			?>
		</div>
<?php get_footer(); ?>