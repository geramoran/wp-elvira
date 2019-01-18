<?php get_header(); ?>
		<?php 
			$idpost = $_GET['post_id'];
			$post = get_post($idpost);
			setup_postdata($post);	
		?>
		<div class="bloque-rojo no-bloque-rojo">
		</div>
		<div class="col-lg-10 about-us" style="float: none; margin-right: auto; margin-left: auto; margin-bottom: 0; text-align: center;">
			<h1 class="title"><?php echo the_field("nombre_actor");?></h1>
			<br><br>
			<?php echo the_field('cv'); ?>
			<br>
			<a href="<?php echo the_permalink(); ?>">Regresar</a>
		</div>
		<?php
			//endwhile;
			wp_reset_postdata();
		?>
<?php get_footer(); ?>