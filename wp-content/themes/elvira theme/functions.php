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
?>