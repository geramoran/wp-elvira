<?php get_header(); ?>
		<div>
			<?php while (have_posts()): the_post(); ?>
				<div id="carouselExample" class="carousel slide carousel-fade" data-ride="carousel">
				 	<div class="carousel-inner">
						<?php
							$slider = acf_photo_gallery('sliderimg', $post->ID);
							$init = 0;
							$fin = count($slider);
							foreach ($slider as $img):?>
								<div class="carousel-item <?php if($init <= 0):?>active<?php endif; ?>"> 
									<img class="d-block w-100" src="<?php echo $img['full_image_url']; ?>" alt="img" <?php if($init < $fin): ?>style="animation-play-state: paused;"<?php endif; ?>>
								</div>
							<?php $init = $init + 1; endforeach;
						?>
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
								'post_type' => 'management_detail'
							);
							$allPersonas = new WP_Query( $args );
							while ($allPersonas->have_posts()) : $allPersonas->the_post();
						?>
						<div class="man-item">
							<a href="<?php the_permalink(); ?>">
								<img src="<?php echo the_field('thumbnail');?>">
								<div class="text">
									<div class="text2"> 
										<?php the_field('nombre_actor'); ?>		
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
			<?php 
				endwhile;
				wp_reset_postdata();
			?>
		</div>
<?php get_footer(); ?>