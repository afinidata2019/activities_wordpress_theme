<?php

function add_theme_assets() {
	wp_enqueue_style('style', get_template_directory_uri() . "/assets/stylesheets/style.css");
	wp_enqueue_style('datepicker-css',
		get_template_directory_uri() . "/assets/datepicker/dist/css/datepicker.css");
	wp_enqueue_script('datepicker-js',
		get_template_directory_uri() . "/assets/datepicker/dist/js/datepicker-full.min.js");
	wp_enqueue_script('datepicker-local-es',
		get_template_directory_uri() . "/assets/datepicker/dist/js/locales/es.js");
	wp_enqueue_script('datepicker-local-ar',
		get_template_directory_uri() . "/assets/datepicker/dist/js/locales/ar.js");
	wp_enqueue_script('datepicker-local-hy',
		get_template_directory_uri() . "/assets/datepicker/dist/js/locales/hy.js");
	wp_enqueue_script('datepicker-local-az',
		get_template_directory_uri() . "/assets/datepicker/dist/js/locales/az.js");
	wp_enqueue_script('datepicker-local-bs',
		get_template_directory_uri() . "/assets/datepicker/dist/js/locales/bs.js");
	wp_enqueue_script('datepicker-local-hr',
		get_template_directory_uri() . "/assets/datepicker/dist/js/locales/hr.js");
	wp_enqueue_script('datepicker-local-ka',
		get_template_directory_uri() . "/assets/datepicker/dist/js/locales/ka.js");
	wp_enqueue_script('datepicker-local-kk',
		get_template_directory_uri() . "/assets/datepicker/dist/js/locales/kk.js");
	wp_enqueue_script('datepicker-local-mk',
		get_template_directory_uri() . "/assets/datepicker/dist/js/locales/mk.js");
	wp_enqueue_script('datepicker-local-ro',
		get_template_directory_uri() . "/assets/datepicker/dist/js/locales/ro.js");
	wp_enqueue_script('datepicker-local-sr',
		get_template_directory_uri() . "/assets/datepicker/dist/js/locales/sr.js");
	wp_enqueue_script('datepicker-local-tg',
		get_template_directory_uri() . "/assets/datepicker/dist/js/locales/tg.js");
	wp_enqueue_script('datepicker-local-tr',
		get_template_directory_uri() . "/assets/datepicker/dist/js/locales/tr.js");
	wp_enqueue_script('datepicker-local-tk',
		get_template_directory_uri() . "/assets/datepicker/dist/js/locales/tk.js");
	wp_enqueue_script('datepicker-local-uk',
		get_template_directory_uri() . "/assets/datepicker/dist/js/locales/uk.js");
	wp_enqueue_script('datepicker-local-uz-cyrl',
		get_template_directory_uri() . "/assets/datepicker/dist/js/locales/uz-cyrl.js");
	wp_enqueue_script('main', get_template_directory_uri() . "/assets/js/main.js");
}
add_action( 'wp_enqueue_scripts', 'add_theme_assets' );