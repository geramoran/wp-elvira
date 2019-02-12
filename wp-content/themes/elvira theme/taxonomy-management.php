 <?php get_header(); ?>
		<?php 
			//$titulo = $wp_query->query["management"];
			$titulo = get_query_var( 'management' );
		?>
		<div class="bloque-rojo no-bloque-rojo"></div>
		<div class="col-lg-10 about-us" style="float: none; margin-right: auto; margin-left: auto; margin-bottom: 0; text-align: center;">
			<h1 class="title title-tax"><?php echo $titulo; ?></h1>
		</div>
<?php get_footer(); ?>