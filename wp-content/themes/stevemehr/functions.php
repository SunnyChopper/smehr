<?php

define('FS_METHOD', 'direct');
add_theme_support( 'post-thumbnails' );

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

function sm_custom_meta() {
    add_meta_box('sm_meta', __( 'Featured Posts', 'sm-textdomain' ), 'sm_meta_callback', 'post' );
}

function sm_meta_callback( $post ) {
    $featured = get_post_meta( $post->ID );
    ?>

	<p>
		<div class="sm-row-content">
	        <label for="meta-checkbox">
	            <input type="checkbox" name="meta-checkbox" id="meta-checkbox" value="yes" <?php if ( isset ( $featured['meta-checkbox'] ) ) checked( $featured['meta-checkbox'][0], 'yes' ); ?> />
	            <?php _e( 'Feature this post', 'sm-textdomain' )?>
	        </label>
	    </div>
	</p>
 
    <?php
}

add_action( 'add_meta_boxes', 'sm_custom_meta' );

function sm_meta_save( $post_id ) {
 
    // Checks save status
    $is_autosave = wp_is_post_autosave( $post_id );
    $is_revision = wp_is_post_revision( $post_id );
    $is_valid_nonce = ( isset( $_POST[ 'sm_nonce' ] ) && wp_verify_nonce( $_POST[ 'sm_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
 
    // Exits script depending on save status
    if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
        return;
    }
 
	// Checks for input and saves
	if( isset( $_POST[ 'meta-checkbox' ] ) ) {
	    update_post_meta( $post_id, 'meta-checkbox', 'yes' );
	} else {
	    update_post_meta( $post_id, 'meta-checkbox', '' );
	}
}

add_action( 'save_post', 'sm_meta_save' );

?>