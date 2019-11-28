<?php
function activities_theme_supports() {
	//post thumbnails support
	add_theme_support('post-thumbnails');
	//gutenberg styles
	add_theme_support('wp-block-styles');
	//image width
	add_theme_support('align-wide');
	//custom logo
	add_theme_support( 'custom-logo' );
}
add_action('after_setup_theme', 'activities_theme_supports');
