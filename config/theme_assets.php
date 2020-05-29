<?php

function add_theme_assets() {
	wp_enqueue_style('style', get_template_directory_uri() . "/assets/stylesheets/style.css");
	wp_enqueue_style('datepicker-css',
		get_template_directory_uri() . "/assets/datepicker/dist/css/datepicker.css");
	wp_enqueue_script('datepicker-js',
		get_template_directory_uri() . "/assets/datepicker/dist/js/datepicker.min.js");
	wp_enqueue_script('main', get_template_directory_uri() . "/assets/js/main.js");
}
add_action( 'wp_enqueue_scripts', 'add_theme_assets' );