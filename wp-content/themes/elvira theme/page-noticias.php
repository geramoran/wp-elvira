<?php get_header(); ?>
		<div class="bloque-rojo no-bloque-rojo">
		</div>
		<div class="col-lg-10 about-us" style="float: none; margin-right: auto; margin-left: auto; margin-bottom: 0; text-align: center;">
			<h1 class="title ">Noticias</h1>
			<div class="row">
				<?php
					$args = array(
						'post_type' => 'noticia_detalle'
					);
					$allNoticias = new WP_Query( $args );
					while ($allNoticias->have_posts()) : $allNoticias->the_post();
				?>
				<div class="card">
					<img class="card-img-top" src="<?php echo the_field('thumbnail_img'); ?>" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title"><?php echo the_title(); ?></h5>
						<h6 class="noticias-fecha"><?php echo the_date(); ?></h6>
						<p class="card-text"><?php echo wp_trim_words(get_the_content(), 25 , "..."); ?></p>
						<a href="<?php echo the_permalink(); ?>">Ver más >></a>
					</div>
				</div>
				<?php 
					endwhile;
					wp_reset_postdata();
				?>
			</div>
		</div>
<?php get_footer(); ?>