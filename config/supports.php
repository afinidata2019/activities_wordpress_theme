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

	function template_chooser($template)
	{
		global $wp_query;
		$post_type = get_query_var('post_type');
		if( $wp_query->is_search && $post_type == 'faq' )
		{
			return locate_template('search.php');
		}
		return $template;
	}
	add_filter('template_include', 'template_chooser');
}
add_action('after_setup_theme', 'activities_theme_supports');
