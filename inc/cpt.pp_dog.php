<?php

function cptui_register_my_cpts() {

	/**
	 * Post Type: Dogs.
	 */

	$labels = array(
		"name" => __( "Dogs", "twentysixteen" ),
		"singular_name" => __( "Dog", "twentysixteen" ),
	);

	$args = array(
		"label" => __( "Dogs", "twentysixteen" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "pp_dog", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-buddicons-activity",
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "pp_dog", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );
