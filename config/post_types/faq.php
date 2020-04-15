<?php

function register_faq() {

	$labels = array(
		'name'               => _x( "FAQ'S", 'post type general name' ),
		'singular_name'      => _x( 'FAQ', 'post type singular name' ),
		'add_new'            => _x( 'Nuevo FAQ', 'library item' ),
		'add_new_item'       => __( 'Añadir FAQ', 'activities' ),
		'edit_item'          => __( 'Editar FAQ', 'activities' ),
		'new_item'           => __( 'Nuevo FAQ', 'activities' ),
		'view_item'          => __( "Ver FAQ'S", 'activities' ),
		'search_items'       => __( "Buscar en FAQ'S", 'activities' ),
		'not_found'          => __( 'Nada por mostrar.', 'activities' ),
		'not_found_in_trash' => __( 'Nada por mostrar en papelera.', 'activities' ),
		'parent_item_colon'  => ''
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'hierarchical'       => false,
		'menu_position'      => null,
		'show_in_rest'       => true,
		'supports'           => array( 'title', 'editor', 'thumbnail' )
	);

	register_post_type( 'faq', $args );
}

add_action( 'init', 'register_faq' );