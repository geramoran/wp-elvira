<?php get_header(); ?>
		<div class="bloque-rojo"></div>
		<div class="col-lg-10 about-us" style="float: none; margin-right: auto; margin-left: auto; margin-bottom: 0; text-align: center;">
			<h1 class="title">Talleres</h1>
			<br><br>
			<div class="container">
				<?php
					$args = array(
						'post_type' => 'taller_info'
					);
					$allTaller = new WP_Query( $args );
					while ($allTaller->have_posts()) : $allTaller->the_post();
				?>
				<div class="row">
					<div class="col-span-4 taller-img">
						<?php if(get_field('visualizar') == 'video'):
							echo the_field('video');
						endif;?>
						<?php if (get_field('visualizar') == 'cartel'):
							?> <img src=" <?php echo the_field('cartel'); ?>"><?php
						endif;?>
					</div>
					<div class="col-8 taller-info">
						<h2><?php echo the_field('nombre') ?></h2>
						<?php echo the_field('info'); ?>
					</div>
				</div>
				<?php
					endwhile;
					wp_reset_postdata();
				?>
			</div>
		</div>
<?php get_footer(); ?>