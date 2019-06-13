<?php

function cptui_register_my_taxes() {

	/**
	 * Taxonomy: Sizes.
	 */

	$labels = array(
		"name" => __( "Sizes", "twentysixteen" ),
		"singular_name" => __( "Size", "twentysixteen" ),
	);

	$args = array(
		"label" => __( "Sizes", "twentysixteen" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'pp_dogsize', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "pp_dogsize",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		);
	register_taxonomy( "pp_dogsize", array( "pp_dog" ), $args );
}
add_action( 'init', 'cptui_register_my_taxes' );
