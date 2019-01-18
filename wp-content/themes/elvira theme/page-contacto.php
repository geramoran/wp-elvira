<?php get_header(); ?>
		<div class="bloque-rojo"></div>
		<div class="col-lg-10 about-us contacto" style="float: none; margin-right: auto; margin-left: auto; margin-bottom: 0; text-align: center;">
			<h1 class="title">Contacto</h1>
			<div class="container">
				<br><br>
				<?php echo do_shortcode( '[contact-form-7 id="60" title="Contact form 1"]' ); ?>
			</div>
			<br><br>
			<div class="container">
				<?php 
					while (have_posts()):the_post();
				?>
				<div class="row">
					<div class="col-sm">
						<h2>Dirección</h2>
						<p><?php echo the_field('direccion_1') ?></p>
						<p><?php echo the_field('direccion_2') ?></p>
						<p><?php echo the_field('direccion_3') ?></p>
					</div>
					<div class="col-sm">
						<h2>Teléfonos</h2>
						<p>Fijo: <?php echo the_field('telefono_1'); if (get_field('telefono_2') != "") { echo ", " . get_field('telefono_2');}if(get_field('telefono_3') != "") { echo ", " . get_field('telefono_3');}?> - Celular: <?php echo the_field('celular_1'); if (get_field('celular_2') != "") { echo ', ' . get_field('celular_2');} if(get_field('celular_3') != "") { echo ', ' . get_field('celular_3');}?></p>
					</div>
					<div class="col-sm">
						<h2>Correos</h2>
						<p><?php echo the_field('correo_1') ?></p>
						<p><?php echo the_field('correo_2') ?></p>
						<p><?php echo the_field('correo_3') ?></p>
					</div>
				</div> <!-- 3 columnas -->
				<br><br>
				<?php echo the_field('maps');?>
				<?php 
					endwhile;
					wp_reset_postdata();
				?>
			</div> <!-- *col-lg-10-->
		</div>
<?php get_footer(); ?>