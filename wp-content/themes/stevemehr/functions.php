<?php

define('FS_METHOD', 'direct');
add_theme_support( 'post-thumbnails' );
show_admin_bar( false );

function dynamic_menu() {
	register_nav_menus(
		array(
			'main-menu' => __('Main Menu'),
			'footer-menu' => __('Footer Menu')
		)
	);
}

add_action('init', 'dynamic_menu');

function theme_enqueue_scripts() {
	wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css');
	$dependencies = array('bootstrap');
	wp_enqueue_style('bootstrap', get_stylesheet_uri(), $dependencies);
	wp_enqueue_style('layouts', get_template_directory_uri() . "/layouts.css");
	wp_enqueue_style('core', get_template_directory_uri() . '/style.css' );
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array(), '3.3.1', true );
}

add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');


function add_classes_on_li($classes, $item, $args) {
    $classes[] = 'nav-item';

    return $classes;
}

add_filter('nav_menu_css_class', 'add_classes_on_li', 1, 3);


function add_classes_on_a($ulclass) {
    return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
}

add_filter('wp_nav_menu', 'add_classes_on_a');

function theme_prefix_register_elementor_locations( $elementor_theme_manager ) {
	$elementor_theme_manager->register_all_core_location();
}

add_action('elementor/theme/register_locations', 'theme_prefix_register_elementor_locations');


function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active';
    }
    return $classes;
}

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

?>