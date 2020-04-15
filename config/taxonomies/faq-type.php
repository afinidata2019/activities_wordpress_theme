<?php

// editions for catalogs

function create_taxonomy_faq_type() {

	$labels = array(
		'name'                       => _x( 'Tipos FAQ', 'Taxonomy General Name' ),
		'singular_name'              => _x( 'Tipo FAQ', 'Taxonomy Singular Name'),
		'menu_name'                  => __( 'Tipos FAQ', 'activities' ),
		'all_items'                  => __( 'Todas los Tipos FAQ', 'activities'),
		'parent_item'                => __( 'Tipo FAQ Padre', 'activities' ),
		'parent_item_colon'          => __( 'Tipo FAQ Padre:', 'activities' ),
		'new_item_name'              => __( 'Nombre Tipo FAQ', 'activities' ),
		'add_new_item'               => __( 'Añadir Tipo FAQ', 'activities' ),
		'edit_item'                  => __( 'Editar Tipo FAQ','activities' ),
		'update_item'                => __( 'Actualizar Tipo FAQ','activities' ),
		'view_item'                  => __( 'Ver Tipo FAQ','activities' ),
		'separate_items_with_commas' => __( 'Separar en comas','activities' ),
		'add_or_remove_items'        => __( 'Añadir o Eliminar Tipos FAQ','activities' ),
		'choose_from_most_used'      => __( 'Elegir Tipos FAQ más usadas','activities' ),
		'popular_items'              => __( 'Tipos FAQ populares','activities' ),
		'search_items'               => __( 'Buscar en Tipos FAQ','activities' ),
		'not_found'                  => __( 'Tipo FAQ no encontrada','activities' ),
		'no_terms'                   => __( 'Sin Tipos FAQ','activities' ),
		'items_list'                 => __( 'Tipos FAQ','activities' ),
		'items_list_navigation'      => __( 'Tipo FAQ','activities' ),
	);
	$rewrite = array(
		'slug'                       => 'faqtype',
		'with_front'                 => true,
		'hierarchical'               => true,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
		'show_in_rest'               => true
	);
	register_taxonomy( 'faqtype', array( 'faq' ), $args );

}
add_action( 'init', 'create_taxonomy_faq_type', 0 );