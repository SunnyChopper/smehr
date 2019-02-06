<?php

define('FS_METHOD', 'direct');
add_theme_support( 'post-thumbnails' );

// Hide the admin bar
show_admin_bar( false );

/* ------------------------- *\
	Scripts for Theme
\* ------------------------- */

require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';


function theme_enqueue_scripts() {
	wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css');
	$dependencies = array('bootstrap');
	wp_enqueue_style('bootstrap', get_stylesheet_uri(), $dependencies);
	wp_enqueue_style('layouts', get_template_directory_uri() . "/layouts.css");
	wp_enqueue_style('core', get_template_directory_uri() . '/style.css' );
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array(), '3.3.1', true );
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');

function load_wp_media_files() {
    wp_enqueue_media();
}
add_action('admin_enqueue_scripts', 'load_wp_media_files');

/* ------------------------- *\
	Dynamic Menu
\* ------------------------- */

function dynamic_menu() {
	register_nav_menus(
		array(
			'main-menu' => __('Main Menu', 'Steve Mehr'),
			'footer-menu' => __('Footer Menu', 'Steve Mehr')
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
		<input id="result_image_1" type="text" name="result_image_1" size="60" value="<?php echo get_option('result_image_1'); ?>">
		<a href="#" id="1" class="result_image_upload">Upload</a>

		<script type="text/javascript">
			$(document).ready(function(){
				$(".result_image_upload").on('click', function(e) {
					var result_id = $(this).id;
					e.preventDefault();

					var custom_uploader = wp.media({
						title: 'Result Image',
						button: { text: 'Upload Image' },
						multiple: false
					}).on('select', function() {
						var attachment = custom_uploader.state().get('selection').first().toJSON();
						var result_image_id = 'input[name=result_image_' + result_id + ']';
						$(result_image_id).val(attachment.url);
						console.log(attachment.url);
					}).open(); 
				});
			});
		</script>
	<?php
}

function display_result_amount_1() {
	?>
		<input type="text" name="result_amount_1" id="result_amount_1" value="<?php echo get_option('result_amount_1') ?>" >
	<?php
}

function display_result_type_1() {
	?>
		<input type="text" name="result_type_1" id="result_type_1" value="<?php echo get_option('result_type_1'); ?>" >
	<?php
}

function display_result_claim_1() {
	?>
		<input type="text" name="result_claim_1" id="result_claim_1" value="<?php echo get_option('result_claim_1'); ?>" >
	<?php
}

function handle_result_1_image_upload($option) {
	if (isset($_FILES['result_image_1']) && !empty($_FILES['result_image_1']['name'])) {
		$urls = wp_handle_upload($_FILES['result_image_1'], array('test_form' => FALSE));
		$temp = $urls["url"];
		return $temp;
	}

	return $option;
}

function display_result_image_2() {
	?>
		<input type="file" name="result_image_2" >
		<?php echo get_option('result_image_2'); ?>
	<?php
}

function display_result_amount_2() {
	?>
		<input type="text" name="result_amount_2" id="result_amount_2" value="<?php echo get_option('result_amount_2') ?>" >
	<?php
}

function display_result_type_2() {
	?>
		<input type="text" name="result_type_2" id="result_type_2" value="<?php echo get_option('result_type_2'); ?>" >
	<?php
}

function display_result_claim_2() {
	?>
		<input type="text" name="result_claim_2" id="result_claim_2" value="<?php echo get_option('result_claim_2'); ?>" >
	<?php
}

function handle_result_2_image_upload($option) {
	if (!empty($_FILES['result_image_2']['tmp_name'])) {
		$urls = wp_handle_upload($_FILES['result_image_2'], array('test_form' => FALSE));
		$temp = $urls["url"];
		return $temp;
	}

	return $option;
}

function display_result_image_3() {
	?>
		<input type="file" name="result_image_3" >
		<?php echo get_option('result_image_3'); ?>
	<?php
}

function display_result_amount_3() {
	?>
		<input type="text" name="result_amount_3" id="result_amount_3" value="<?php echo get_option('result_amount_3') ?>" >
	<?php
}

function display_result_type_3() {
	?>
		<input type="text" name="result_type_3" id="result_type_3" value="<?php echo get_option('result_type_3'); ?>" >
	<?php
}

function display_result_claim_3() {
	?>
		<input type="text" name="result_claim_3" id="result_claim_3" value="<?php echo get_option('result_claim_3'); ?>" >
	<?php
}

function handle_result_3_image_upload($option) {
	if (!empty($_FILES['result_image_3']['tmp_name'])) {
		$urls = wp_handle_upload($_FILES['result_image_3'], array('test_form' => FALSE));
		$temp = $urls["url"];
		return $temp;
	}

	return $option;
}

function display_result_image_4() {
	?>
		<input type="file" name="result_image_4" >
		<?php echo get_option('result_image_4'); ?>
	<?php
}

function display_result_amount_4() {
	?>
		<input type="text" name="result_amount_4" id="result_amount_4" value="<?php echo get_option('result_amount_4') ?>" >
	<?php
}

function display_result_type_4() {
	?>
		<input type="text" name="result_type_4" id="result_type_4" value="<?php echo get_option('result_type_4'); ?>" >
	<?php
}

function display_result_claim_4() {
	?>
		<input type="text" name="result_claim_4" id="result_claim_4" value="<?php echo get_option('result_claim_4'); ?>" >
	<?php
}

function handle_result_4_image_upload($option) {
	if (!empty($_FILES['result_image_4']['tmp_name'])) {
		$urls = wp_handle_upload($_FILES['result_image_4'], array('test_form' => FALSE));
		$temp = $urls["url"];
		return $temp;
	}

	return $option;
}

function display_result_image_5() {
	?>
		<input type="file" name="result_image_5" >
		<?php echo get_option('result_image_5'); ?>
	<?php
}

function display_result_amount_5() {
	?>
		<input type="text" name="result_amount_5" id="result_amount_5" value="<?php echo get_option('result_amount_5') ?>" >
	<?php
}

function display_result_type_5() {
	?>
		<input type="text" name="result_type_5" id="result_type_5" value="<?php echo get_option('result_type_5'); ?>" >
	<?php
}

function display_result_claim_5() {
	?>
		<input type="text" name="result_claim_5" id="result_claim_5" value="<?php echo get_option('result_claim_5'); ?>" >
	<?php
}

function handle_result_5_image_upload($option) {
	if (!empty($_FILES['result_image_5']['tmp_name'])) {
		$urls = wp_handle_upload($_FILES['result_image_5'], array('test_form' => FALSE));
		$temp = $urls["url"];
		return $temp;
	}

	return $option;
}

function display_result_image_6() {
	?>
		<input type="file" name="result_image_6" >
		<?php echo get_option('result_image_4'); ?>
	<?php
}

function display_result_amount_6() {
	?>
		<input type="text" name="result_amount_6" id="result_amount_6" value="<?php echo get_option('result_amount_6') ?>" >
	<?php
}

function display_result_type_6() {
	?>
		<input type="text" name="result_type_6" id="result_type_6" value="<?php echo get_option('result_type6'); ?>" >
	<?php
}

function display_result_claim_6() {
	?>
		<input type="text" name="result_claim_6" id="result_claim_6" value="<?php echo get_option('result_claim_6'); ?>" >
	<?php
}

function handle_result_6_image_upload($option) {
	if (!empty($_FILES['result_image_6']['tmp_name'])) {
		$urls = wp_handle_upload($_FILES['result_image_6'], array('test_form' => FALSE));
		$temp = $urls["url"];
		return $temp;
	}

	return $option;
}

function display_testimonial_1_image() {
	?>
		<input type="file" name="testimonial_image_1" >
		<?php echo get_option('testimonial_image_1'); ?>
	<?php
}

function display_testimonial_1_text() {
	?>
		<input type="text" name="testimonial_quote_1" id="testimonial_quote_1" value="<?php echo get_option('testimonial_quote_1'); ?>" >
	<?php
}

function handle_testimonial_1_image_upload($option) {
	if (!empty($_FILES['testimonial_image_1']['tmp_name'])) {
		$urls = wp_handle_upload($_FILES['testimonial_image_1'], array('test_form' => FALSE));
		$temp = $urls["url"];
		return $temp;
	}

	return $option;
}

function display_testimonial_2_image() {
	?>
		<input type="file" name="testimonial_image_2" >
		<?php echo get_option('testimonial_image_2'); ?>
	<?php
}

function display_testimonial_2_text() {
	?>
		<input type="text" name="testimonial_quote_2" id="testimonial_quote_2" value="<?php echo get_option('testimonial_quote_2'); ?>" >
	<?php
}

function handle_testimonial_2_image_upload($option) {
	if (!empty($_FILES['testimonial_image_2']['tmp_name'])) {
		$urls = wp_handle_upload($_FILES['testimonial_image_2'], array('test_form' => FALSE));
		$temp = $urls["url"];
		return $temp;
	}

	return $option;
}

function display_testimonial_3_image() {
	?>
		<input type="file" name="testimonial_image_3" >
		<?php echo get_option('testimonial_image_3'); ?>
	<?php
}

function display_testimonial_3_text() {
	?>
		<input type="text" name="testimonial_quote_3" id="testimonial_quote_3" value="<?php echo get_option('testimonial_quote_3'); ?>" >
	<?php
}

function handle_testimonial_3_image_upload($option) {
	if (!empty($_FILES['testimonial_image_3']['tmp_name'])) {
		$urls = wp_handle_upload($_FILES['testimonial_image_3'], array('test_form' => FALSE));
		$temp = $urls["url"];
		return $temp;
	}

	return $option;
}

function display_testimonial_4_image() {
	?>
		<input type="file" name="testimonial_image_4" >
		<?php echo get_option('testimonial_image_4'); ?>
	<?php
}

function display_testimonial_4_text() {
	?>
		<input type="text" name="testimonial_quote_4" id="testimonial_quote_4" value="<?php echo get_option('testimonial_quote_4'); ?>" >
	<?php
}

function handle_testimonial_4_image_upload($option) {
	if (!empty($_FILES['testimonial_image_4']['tmp_name'])) {
		$urls = wp_handle_upload($_FILES['testimonial_image_4'], array('test_form' => FALSE));
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

	add_settings_field("result_image_1", "Result 1 Image", "display_result_image_1", "theme-options", "results");
	add_settings_field("result_amount_1", "Result 1 Amount", "display_result_amount_1", "theme-options", "results");
	add_settings_field("result_type_1", "Result 1 Type", "display_result_type_1", "theme-options", "results");
	add_settings_field("result_claim_1", "Result 1 Claim", "display_result_claim_1", "theme-options", "results");
	register_setting("results", "result_image_1", "handle_result_1_image_upload");
	register_setting("results", "result_amount_1");
	register_setting("results", "result_type_1");
	register_setting("results", "result_claim_1");

	add_settings_field("result_image_2", "Result 2 Image", "display_result_image_2", "theme-options", "results");
	add_settings_field("result_amount_2", "Result 2 Amount", "display_result_amount_2", "theme-options", "results");
	add_settings_field("result_type_2", "Result 2 Type", "display_result_type_2", "theme-options", "results");
	add_settings_field("result_claim_2", "Result 2 Claim", "display_result_claim_2", "theme-options", "results");
	register_setting("results", "result_image_2", "handle_result_2_image_upload");
	register_setting("results", "result_amount_2");
	register_setting("results", "result_type_2");
	register_setting("results", "result_claim_2");

	add_settings_field("result_image_3", "Result 3 Image", "display_result_image_3", "theme-options", "results");
	add_settings_field("result_amount_3", "Result 3 Amount", "display_result_amount_3", "theme-options", "results");
	add_settings_field("result_type_3", "Result 3 Type", "display_result_type_3", "theme-options", "results");
	add_settings_field("result_claim_3", "Result 3 Claim", "display_result_claim_3", "theme-options", "results");
	register_setting("results", "result_image_3", "handle_result_3_image_upload");
	register_setting("results", "result_amount_3");
	register_setting("results", "result_type_3");
	register_setting("results", "result_claim_3");

	add_settings_field("result_image_4", "Result 4 Image", "display_result_image_4", "theme-options", "results");
	add_settings_field("result_amount_4", "Result 4 Amount", "display_result_amount_4", "theme-options", "results");
	add_settings_field("result_type_4", "Result 4 Type", "display_result_type_4", "theme-options", "results");
	add_settings_field("result_claim_4", "Result 4 Claim", "display_result_claim_4", "theme-options", "results");
	register_setting("results", "result_image_4", "handle_result_4_image_upload");
	register_setting("results", "result_amount_4");
	register_setting("results", "result_type_4");
	register_setting("results", "result_claim_4");

	add_settings_field("result_image_5", "Result 5 Image", "display_result_image_5", "theme-options", "results");
	add_settings_field("result_amount_5", "Result 5 Amount", "display_result_amount_5", "theme-options", "results");
	add_settings_field("result_type_5", "Result 5 Type", "display_result_type_5", "theme-options", "results");
	add_settings_field("result_claim_5", "Result 5 Claim", "display_result_claim_5", "theme-options", "results");
	register_setting("results", "result_image_5", "handle_result_5_image_upload");
	register_setting("results", "result_amount_5");
	register_setting("results", "result_type_5");
	register_setting("results", "result_claim_5");

	add_settings_field("result_image_6", "Result 6 Image", "display_result_image_6", "theme-options", "results");
	add_settings_field("result_amount_6", "Result 6 Amount", "display_result_amount_6", "theme-options", "results");
	add_settings_field("result_type_6", "Result 6 Type", "display_result_type_6", "theme-options", "results");
	add_settings_field("result_claim_6", "Result 6 Claim", "display_result_claim_6", "theme-options", "results");
	register_setting("results", "result_image_6", "handle_result_6_image_upload");
	register_setting("results", "result_amount_6");
	register_setting("results", "result_type_6");
	register_setting("results", "result_claim_6");

	add_settings_section("testimonials", "Testimonials", null, "theme-options");

	add_settings_field("testimonial_image_1", "Testimonial 1 Image", "display_testimonial_1_image", "theme-options", "testimonials");
	add_settings_field("testimonial_quote_1", "Testimonial 1 Quote", "display_testimonial_1_text", "theme-options", "testimonials");
	register_setting("testimonials", "testimonial_image_1", "handle_testimonial_1_image_upload");
	register_setting("testimonials", "testimonial_quote_1");

	add_settings_field("testimonial_image_2", "Testimonial 2 Image", "display_testimonial_2_image", "theme-options", "testimonials");
	add_settings_field("testimonial_quote_2", "Testimonial 2 Quote", "display_testimonial_2_text", "theme-options", "testimonials");
	register_setting("testimonials", "testimonial_image_2", "handle_testimonial_2_image_upload");
	register_setting("testimonials", "testimonial_quote_2");

	add_settings_field("testimonial_image_3", "Testimonial 3 Image", "display_testimonial_3_image", "theme-options", "testimonials");
	add_settings_field("testimonial_quote_3", "Testimonial 3 Quote", "display_testimonial_3_text", "theme-options", "testimonials");
	register_setting("testimonials", "testimonial_image_3", "handle_testimonial_3_image_upload");
	register_setting("testimonials", "testimonial_quote_3");

	add_settings_field("testimonial_image_4", "Testimonial 4 Image", "display_testimonial_4_image", "theme-options", "testimonials");
	add_settings_field("testimonial_quote_4", "Testimonial 4 Quote", "display_testimonial_4_text", "theme-options", "testimonials");
	register_setting("testimonials", "testimonial_image_4", "handle_testimonial_4_image_upload");
	register_setting("testimonials", "testimonial_quote_4");
}
add_action("admin_init", "display_theme_panel_fields");

// Adding the menu item to the navbar
function add_theme_menu_item() {
	add_menu_page("Global Modules", "Global Modules", "manage_options", "theme-panel", "theme_settings_page", null, 99);
}
add_action("admin_menu", "add_theme_menu_item");

?>