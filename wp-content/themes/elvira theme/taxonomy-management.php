 <?php get_header(); ?>
		<?php $titulo = get_query_var( 'management' );?>
		<div class="bloque-rojo no-bloque-rojo"></div>
		<div class="col-lg-10 about-us" style="float: none; margin-right: auto; margin-left: auto; margin-bottom: 0; text-align: center;">
			<h1 class="title title-tax"><?php echo $titulo;?></h1>
		</div>
		<div class="container management">
			<div class="d-flex justify-content-start align-items-center flex-wrap">
 				<?php
				 	if(!empty($post->ID)){
						//$term = strip_tags(get_the_term_list( $post->ID, "management"));
						//$term = get_query_var('management');
						//var_dump($term);
						$args = array(
							'post_type' => 'management_detail',
							'tax_query' => array(
								array (  
									'taxonomy' => 'management',
									'field' => 'slug',
									'terms' => $titulo,
								),
							),
						);
						$allPersonas = new WP_Query( $args );
						//var_dump($allPersonas);
						while ($allPersonas->have_posts()) : $allPersonas->the_post(); 
					?>
					<div class="man-item">
						<a href="<?php the_permalink(); ?>">
							<img src="<?php echo the_field('thumbnail');?>">
							<div class="text">
								<div class="text2"><strong>
									<?php the_field('nombre_actor'); ?>		
								</strong></div> 
							</div>
						</a>
					</div>
					<?php
						endwhile;
						wp_reset_postdata();
					} else{
						echo "Sin " . $titulo;
					}
				?>
			</div>
		</div>
<?php get_footer(); ?>