<?php get_header(); ?>
		<div class="bloque-rojo"></div>
		<?php
			while (have_posts()):the_post();
		?>
		<div class="col-lg-10 about-us" style="float: none; margin-right: auto; margin-left: auto; margin-bottom: 0; text-align: center;">
			<h1 class="title"><?php echo the_title(); ?></h1>
			<p>Por <?php echo get_the_author(); ?> - <?php echo the_date(); ?></p>
			<br><br>
			<?php echo the_content(); ?>
		</div>
		<?php
			endwhile;
			wp_reset_postdata(); 
		?>
<?php get_footer(); ?>