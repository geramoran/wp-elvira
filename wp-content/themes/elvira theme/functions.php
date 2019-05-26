<?php
	//importaciones de librerias css
	function elvira_styleroot() {
		wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), '4.1.1');
		wp_register_style('bootstrap-grid', get_template_directory_uri().'/css/bootstrap-grid.min.css', array(), '4.1.1');
		wp_register_style('bootstrap-reboot', get_template_directory_uri().'/css/bootstrap-reboot.min.css', array(), '4.1.1');
		wp_register_style('slick', get_template_directory_uri().'/css/slick.css', array(), '1.1');
		wp_register_style('style', get_template_directory_uri().'/style.css', array('bootstrap', 'bootstrap-grid', 'bootstrap-reboot', 'slick'), '1.0');
		wp_enqueue_style('bootstrap');
		wp_enqueue_style('bootstrap-grid');
		wp_enqueue_style('bootstrap-reboot');
		wp_enqueue_style('slick');
		wp_enqueue_style('style');
	}
	//importaciones de librerias js
	function elvira_scriptroot(){
		wp_register_script('jquery-3.1', get_template_directory_uri().'/js/jquery-3.3.1.min.js', array(), '3.3.1', true);
		wp_register_script('jquery-1.11', get_template_directory_uri().'/js/jquery-1.11.0.min.js', array(), '1.11.0', true);
		wp_register_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery-1.11'), '4.1.1', true);		
		wp_register_script('bootstrap-bundle', get_template_directory_uri().'/js/bootstrap.bundle.min.js', array('jquery-1.11'), '4.1.1', true);		
		wp_register_script('jquery-migrate', get_template_directory_uri().'/js/jquery-migrate-1.2.1.min.js', array('jquery-1.11'), '1.2.1', true);
		wp_register_script('slick', get_template_directory_uri().'/js/slick.min.js', array('jquery-1.11'), '1.1', true);
		wp_register_script('slick-custom', get_template_directory_uri().'/js/slick-custom.js', array('jquery-1.11'), '1.0', true);
		wp_register_script('scripts', get_template_directory_uri().'/js/scripts.js', array('jquery-3.1', 'jquery-1.11', 'bootstrap', 'bootstrap-bundle', 'jquery-migrate', 'slick', 'slick-custom'), '2.0', true);
		wp_enqueue_script('jquery-3.1');
		wp_enqueue_script('jquery-1.11');
		wp_enqueue_script('bootstrap');
		wp_enqueue_script('bootstrap-bundle');
		wp_enqueue_script('jquery-migrate');
		wp_enqueue_script('slick');
		wp_enqueue_script('slick-custom');
		wp_enqueue_script('scripts');		
	}

	//el css y el js se agregan aqui
	add_action('wp_enqueue_scripts', 'elvira_styleroot');
	add_action('wp_enqueue_scripts', 'elvira_scriptroot');

	//opciones de menú
	function elvira_menus(){
		register_nav_menus( 
			array(
				'header_root' => __('Menu Principal', 'elvirarichards'),
				'social' => __('Redes sociales', 'elvirarichards')
			)
		);
	};
	add_action('init', 'elvira_menus');

	function add_classes_on_li($classes, $item, $args) {
		$classes[] = 'nav-item';
		return $classes;
	}
	add_filter('nav_menu_css_class','add_classes_on_li',1,3);

	add_filter( 'upload_mimes', 'custom_upload_mimes' );
	function custom_upload_mimes( $existing_mimes = array() ) {
		$existing_mimes['svg'] = 'image/svg+xml';
		return $existing_mimes;
	}

	add_action( 'init', 'elvira_management' );
	function elvira_management() {
		register_taxonomy(
		    'management',
		    'post',
		    array(
				'label' => __('Talento'),
				'sort' => true,
				'rewrite' => array('slug' => 'management_tax'),
				'hierarchical' => true,
		    )
		 );

		$labels = array(
			'name'               => _x( 'Management', 'elvira' ),
			'singular_name'      => _x( 'Management', 'post type singular name', 'elvira' ),
			'menu_name'          => _x( 'Management', 'admin menu', 'elvira' ),
			'name_admin_bar'     => _x( 'Management', 'add new on admin bar', 'elvira' ),
			'add_new'            => _x( 'Agregar actor/actriz', 'book', 'elvira' ),
			'add_new_item'       => __( 'Nuevo actor/actriz', 'elvira' ),
			'new_item'           => __( 'Nuevo actor/actriz', 'elvira' ),
			'edit_item'          => __( 'Editar actor/actriz', 'elvira' ),
			'view_item'          => __( 'Ver actor/actriz', 'elvira' ),
			'all_items'          => __( 'Todos los Actores/actrices', 'elvira' ),
			'search_items'       => __( 'Buscar actores/actrices', 'elvira' ),
			'parent_item_colon'  => __( 'Actor/Actriz principal', 'elvira' ),
			'not_found'          => __( 'Sin actores/actrices.', 'elvira' ),
			'not_found_in_trash' => __( 'Sin actores/actrices en la basura.', 'elvira' )
		);

		$args = array(
			'labels'             => $labels,
	    	'description'        => __( 'Descripción.', 'elvira' ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'management_detail' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			'supports'           => array( 'title' ),
	    	'taxonomies'         => array( 'management' ),
		);

		register_post_type( 'management_detail', $args );
	}

	add_action( 'init', 'elvira_services' );
	function elvira_services() {
		$labels = array(
			'name'               => _x( 'Servicios', 'elvira' ),
			'singular_name'      => _x( 'Servicios', 'post type singular name', 'elvira' ),
			'menu_name'          => _x( 'Servicios', 'admin menu', 'elvira' ),
			'name_admin_bar'     => _x( 'Servicios', 'add new on admin bar', 'elvira' ),
			'add_new'            => _x( 'Agregar Nuevo servicio', 'book', 'elvira' ),
			'add_new_item'       => __( 'Nuevo servicio', 'elvira' ),
			'new_item'           => __( 'Nuevo servicio', 'elvira' ),
			'edit_item'          => __( 'Editar servicio', 'elvira' ),
			'view_item'          => __( 'Ver servicio', 'elvira' ),
			'all_items'          => __( 'Todos los servicios', 'elvira' ),
			'search_items'       => __( 'Buscar servicios', 'elvira' ),
			'parent_item_colon'  => __( 'servicio principal', 'elvira' ),
			'not_found'          => __( 'Sin servicios.', 'elvira' ),
			'not_found_in_trash' => __( 'Sin servicios en la basura.', 'elvira' )
		);

		$args = array(
			'labels'             => $labels,
	    	'description'        => __( 'Descripción.', 'elvira' ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'servicios_detail' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			'supports'           => array( 'title' ),
		);

		register_post_type( 'servicios_detalle', $args );
	}

	add_action( 'init', 'elvira_social' );
	function elvira_social() {
		$labels = array(
			'name'               => _x( 'Redes sociales Elvira', 'elvira' ),
			'singular_name'      => _x( 'Redes sociales Elvira', 'post type singular name', 'elvira' ),
			'menu_name'          => _x( 'Redes sociales Elvira', 'admin menu', 'elvira' ),
			'name_admin_bar'     => _x( 'Redes sociales Elvira', 'add new on admin bar', 'elvira' ),
			'add_new'            => _x( 'Agregar Nueva red social', 'book', 'elvira' ),
			'add_new_item'       => __( 'Nueva red social', 'elvira' ),
			'new_item'           => __( 'Nueva red social', 'elvira' ),
			'edit_item'          => __( 'Editar red social', 'elvira' ),
			'view_item'          => __( 'Ver red social', 'elvira' ),
			'all_items'          => __( 'Todas las redes sociales', 'elvira' ),
			'search_items'       => __( 'Buscar red social', 'elvira' ),
			'not_found'          => __( 'Sin red social.', 'elvira' ),
			'not_found_in_trash' => __( 'Sin redes sociales en la basura.', 'elvira' )
		);

		$args = array(
			'labels'             => $labels,
	    	'description'        => __( 'Descripción.', 'elvira' ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'socialred_elvira' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			'supports'           => array( 'title' ),
		);

		register_post_type( 'socialred_detalle', $args );
	}
	
	add_action( 'init', 'elvira_trailers' );
	function elvira_trailers() {
		$labels = array(
			'name'               => _x( 'Trailers Elvira', 'elvira' ),
			'singular_name'      => _x( 'Trailers Elvira', 'post type singular name', 'elvira' ),
			'menu_name'          => _x( 'Trailers Elvira', 'admin menu', 'elvira' ),
			'name_admin_bar'     => _x( 'Trailers Elvira', 'add new on admin bar', 'elvira' ),
			'add_new'            => _x( 'Agregar Nuevo Trailer', 'book', 'elvira' ),
			'add_new_item'       => __( 'Nuevo Trailer', 'elvira' ),
			'new_item'           => __( 'Nuevo Trailer', 'elvira' ),
			'edit_item'          => __( 'Editar Trailer', 'elvira' ),
			'view_item'          => __( 'Ver Trailer', 'elvira' ),
			'all_items'          => __( 'Todas los Trailers', 'elvira' ),
			'search_items'       => __( 'Buscar Trailer', 'elvira' ),
			'not_found'          => __( 'Sin Trailer.', 'elvira' ),
			'not_found_in_trash' => __( 'Sin Trailer en la basura.', 'elvira' )
		);

		$args = array(
			'labels'             => $labels,
	    	'description'        => __( 'Descripción.', 'elvira' ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'trailer_elvira' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			'supports'           => array( 'title' ),
		);

		register_post_type( 'trailer_elvira', $args );
	}

	add_action( 'init', 'elvira_taller' );
	function elvira_taller() {
		$labels = array(
			'name'               => _x( 'Taller', 'elvira' ),
			'singular_name'      => _x( 'Taller', 'post type singular name', 'elvira' ),
			'menu_name'          => _x( 'Taller', 'admin menu', 'elvira' ),
			'name_admin_bar'     => _x( 'Taller', 'add new on admin bar', 'elvira' ),
			'add_new'            => _x( 'Agregar Nuevo Taller', 'book', 'elvira' ),
			'add_new_item'       => __( 'Nuevo Taller', 'elvira' ),
			'new_item'           => __( 'Nuevo Taller', 'elvira' ),
			'edit_item'          => __( 'Editar Taller', 'elvira' ),
			'view_item'          => __( 'Ver Taller', 'elvira' ),
			'all_items'          => __( 'Todos los Talleres', 'elvira' ),
			'search_items'       => __( 'Buscar Taller', 'elvira' ),
			'not_found'          => __( 'Sin Taller.', 'elvira' ),
			'not_found_in_trash' => __( 'Sin Taller en la basura.', 'elvira' )
		);

		$args = array(
			'labels'             => $labels,
	    	'description'        => __( 'Descripción.', 'elvira' ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'taller_info' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			'supports'           => array( 'title' ),
		);

		register_post_type( 'taller_info', $args );
	}

	add_action( 'init', 'elvira_noticia' );
	function elvira_noticia() {
		$labels = array(
			'name'               => _x( 'Noticias', 'elvira' ),
			'singular_name'      => _x( 'Noticias', 'post type singular name', 'elvira' ),
			'menu_name'          => _x( 'Noticias', 'admin menu', 'elvira' ),
			'name_admin_bar'     => _x( 'Noticias', 'add new on admin bar', 'elvira' ),
			'add_new'            => _x( 'Agregar Nueva Noticia', 'book', 'elvira' ),
			'add_new_item'       => __( 'Nueva Noticias', 'elvira' ),
			'new_item'           => __( 'Nueva Noticia', 'elvira' ),
			'edit_item'          => __( 'Editar Noticia', 'elvira' ),
			'view_item'          => __( 'Ver Noticia', 'elvira' ),
			'all_items'          => __( 'Todas las Noticias', 'elvira' ),
			'search_items'       => __( 'Buscar Noticia', 'elvira' ),
			'not_found'          => __( 'Sin Noticia.', 'elvira' ),
			'not_found_in_trash' => __( 'Sin Noticia en la basura.', 'elvira' )
		);

		$args = array(
			'labels'             => $labels,
	    	'description'        => __( 'Descripción.', 'elvira' ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'noticia_detalle' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			'supports'           => array( 'title', 'editor', 'author', 'post-thumbnail'),
		);

		register_post_type( 'noticia_detalle', $args );
	}	

	function custom_query_vars_filter($vars) {
		$vars[] .= 'actores';
		$vars[] .= 'actrices';
		return $vars;
	}
	add_filter( 'query_vars', 'custom_query_vars_filter' );

	add_theme_support( 'title-tag' );

	flush_rewrite_rules();
?>