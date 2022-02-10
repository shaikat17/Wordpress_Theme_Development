<?php 
function simple_theme_setup() {
	// Feature Image Support
	add_theme_support('post-thumbnails');

	// Menus
	register_nav_menus(array(
		// code...
		'primary' => __('Primary Menu')
	));
}

add_action('after_setup_theme','simple_theme_setup');

// excerpt length
function set_excerpt_length() {
	return 25;
}

add_filter('excerpt_length','set_excerpt_length');

?>