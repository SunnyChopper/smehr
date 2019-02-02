<?php

define('FS_METHOD', 'direct');
add_theme_support( 'post-thumbnails' );

// Hide the admin bar
show_admin_bar( false );

/* ------------------------- *\
	Scripts for Theme
\* ------------------------- */

function theme_enqueue_scripts() {
	wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css');
	$dependencies = array('bootstrap');
	wp_enqueue_style('bootstrap', get_stylesheet_uri(), $dependencies);
	wp_enqueue_style('layouts', get_template_directory_uri() . "/layouts.css");
	wp_enqueue_style('core', get_template_directory_uri() . '/style.css' );
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array(), '3.3.1', true );
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');

/* ------------------------- *\
	Dynamic Menu
\* ------------------------- */

function dynamic_menu() {
	register_nav_menus(
		array(
			'main-menu' => __('Main Menu'),
			'footer-menu' => __('Footer Menu')
		)
	);
}
add_action('init', 'dynamic_menu');

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active';
    }
    return $classes;
}
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function add_classes_on_li($classes, $item, $args) {
    $classes[] = 'nav-item';
    return $classes;
}
add_filter('nav_menu_css_class', 'add_classes_on_li', 1, 3);

function add_classes_on_a($ulclass) {
    return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
}
add_filter('wp_nav_menu', 'add_classes_on_a');

/* ------------------------- *\
	Elementor
\* ------------------------- */

function theme_prefix_register_elementor_locations( $elementor_theme_manager ) {
	$elementor_theme_manager->register_all_core_location();
}
add_action('elementor/theme/register_locations', 'theme_prefix_register_elementor_locations');

/* ------------------------- *\
	Sidebar
\* ------------------------- */
function post_sidebar() {
    register_sidebar(
        array (
            'name' => __( 'Post Sidebar', 'Steve Mehr Injury Lawyers' ),
            'id' => 'post-side-bar',
            'description' => __( 'Post Sidebar', 'your-theme-domain' ),
            'before_widget' => '<div class="widget-content">',
            'after_widget' => "</div>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
}
add_action( 'widgets_init', 'post_sidebar' );

/* ------------------------- *\
	Global Modules
\* ------------------------- */

// Adding the basic structure to the admin page
function theme_settings_page() {
	?>
		<div class="wrap">
			<h1>Global Modules</h1>
			<form method="POST" action="options.php">
				<?php
					settings_fields("bottom-cta");
					settings_fields("results");
					do_settings_sections("theme-options");
					submit_button();
				?>
			</form>
		</div>
	<?php
}

// Adding sections
function display_bottom_cta_phone() {
	?>
		<input type="text" name="bottom_cta_phone" id="bottom_cta_phone" value="<?php echo get_option('bottom_cta_phone'); ?>" />
	<?php
}

function display_result_image_1() {
	?>
		<input type="file" name="result_image_1" required>
		<?php echo get_option('result_image_1'); ?>
	<?php
}

function handle_result_1_image_upload() {
	if (!empty($_FILES['result_image_1']['tmp_name'])) {
		$urls = wp_handle_upload($_FILES['result_image_1'], array('test_form' => FALSE));
		$temp = $urls["url"];
		return $temp;
	}

	return $option;
}

function display_theme_panel_fields() {
	add_settings_section("bottom-cta", "Bottom Call-to-Action Row", null, "theme-options");
	add_settings_field("bottom_cta_phone", "Phone Number", "display_bottom_cta_phone", "theme-options", "bottom-cta");
	register_setting("bottom-cta", "bottom_cta_phone");

	add_settings_section("results", "Results/Settlements", null, "theme-options");
	add_settings_field("result_image_1", "Result Image 1", "display_result_image_1", "theme-options", "results");
	register_setting("results", "result_image_1", "handle_result_1_image_upload");
}
add_action("admin_init", "display_theme_panel_fields");

// Adding the menu item to the navbar
function add_theme_menu_item() {
	add_menu_page("Global Modules", "Global Modules", "manage_options", "theme-panel", "theme_settings_page", null, 99);
}
add_action("admin_menu", "add_theme_menu_item");

?>