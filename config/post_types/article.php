<?php

	function register_article() {

	$labels = array(
	'name'               => _x( "Artículos", 'post type general name' ),
	'singular_name'      => _x( 'Artículo', 'post type singular name' ),
	'add_new'            => _x( 'Nuevo Artículo', 'library item' ),
	'add_new_item'       => __( 'Añadir Artículo', 'activities' ),
	'edit_item'          => __( 'Editar Artículo', 'activities' ),
	'new_item'           => __( 'Nuevo Artículo', 'activities' ),
	'view_item'          => __( "Ver Artículos", 'activities' ),
	'search_items'       => __( "Buscar en Artículos", 'activities' ),
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
	'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' )
	);

	register_post_type( 'article', $args );
	}

	add_action( 'init', 'register_article' );