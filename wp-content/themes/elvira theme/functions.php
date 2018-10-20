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
	
	flush_rewrite_rules();
?>