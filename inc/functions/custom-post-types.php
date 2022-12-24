<?php
// Register Custom Post Type Testimonial
	function create_institution_cpt() {

		$labels = array(
			'name'                  => _x( 'Institutions', 'Post Type General Name', 'textdomain' ),
			'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'textdomain' ),
			'menu_name'             => _x( 'Institutions', 'Admin Menu text', 'textdomain' ),
			'name_admin_bar'        => _x( 'Testimonial', 'Add New on Toolbar', 'textdomain' ),
			'archives'              => __( 'Testimonial Archives', 'textdomain' ),
			'attributes'            => __( 'Testimonial Attributes', 'textdomain' ),
			'parent_item_colon'     => __( 'Parent Testimonial:', 'textdomain' ),
			'all_items'             => __( 'All Institutions', 'textdomain' ),
			'add_new_item'          => __( 'Add New Testimonial', 'textdomain' ),
			'add_new'               => __( 'Add New', 'textdomain' ),
			'new_item'              => __( 'New Testimonial', 'textdomain' ),
			'edit_item'             => __( 'Edit Testimonial', 'textdomain' ),
			'update_item'           => __( 'Update Testimonial', 'textdomain' ),
			'view_item'             => __( 'View Testimonial', 'textdomain' ),
			'view_items'            => __( 'View Institutions', 'textdomain' ),
			'search_items'          => __( 'Search Testimonial', 'textdomain' ),
			'not_found'             => __( 'Not found', 'textdomain' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'textdomain' ),
			'featured_image'        => __( 'Featured Image', 'textdomain' ),
			'set_featured_image'    => __( 'Set featured image', 'textdomain' ),
			'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
			'use_featured_image'    => __( 'Use as featured image', 'textdomain' ),
			'insert_into_item'      => __( 'Insert into Testimonial', 'textdomain' ),
			'uploaded_to_this_item' => __( 'Uploaded to this Testimonial', 'textdomain' ),
			'items_list'            => __( 'Institutions list', 'textdomain' ),
			'items_list_navigation' => __( 'Institutions list navigation', 'textdomain' ),
			'filter_items_list'     => __( 'Filter Institutions list', 'textdomain' ),
		);
		$args   = array(
			'label'               => __( 'Testimonial', 'textdomain' ),
			'description'         => __( '', 'textdomain' ),
			'labels'              => $labels,
			'menu_icon'           => 'dashicons-id-alt',
			'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
			'taxonomies'          => array('category', 'post_tag'),
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 10,
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => true,
			'hierarchical'        => true,
			'exclude_from_search' => false,
			'show_in_rest'        => true,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
		);
		register_post_type( 'institution', $args );

	}

	add_action( 'init', 'create_institution_cpt', 0 );




	// Register Taxonomy Country
function create_country_tax() {

	$labels = array(
		'name'              => _x( 'Country', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Country', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search Country', 'textdomain' ),
		'all_items'         => __( 'All Country', 'textdomain' ),
		'parent_item'       => __( 'Parent Country', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Country:', 'textdomain' ),
		'edit_item'         => __( 'Edit Country', 'textdomain' ),
		'update_item'       => __( 'Update Country', 'textdomain' ),
		'add_new_item'      => __( 'Add New Country', 'textdomain' ),
		'new_item_name'     => __( 'New Country Name', 'textdomain' ),
		'menu_name'         => __( 'Country', 'textdomain' ),
	);
	$args = array(
		'labels' => $labels,
		'description' => __( '', 'textdomain' ),
		'hierarchical' => true,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_tagcloud' => true,
		'show_in_quick_edit' => true,
		'show_admin_column' => true,
		'show_in_rest' => true,
	);
	register_taxonomy( 'country', array('institution'), $args );

}
add_action( 'init', 'create_country_tax' );

//testimonial cpt
// Register Custom Post Type Testimonial
function create_testimonial_cpt() {

	$labels = array(
		'name' => _x( 'Testimonials', 'Post Type General Name', 'textdmoain' ),
		'singular_name' => _x( 'Testimonial', 'Post Type Singular Name', 'textdmoain' ),
		'menu_name' => _x( 'Testimonials', 'Admin Menu text', 'textdmoain' ),
		'name_admin_bar' => _x( 'Testimonial', 'Add New on Toolbar', 'textdmoain' ),
		'archives' => __( 'Testimonial Archives', 'textdmoain' ),
		'attributes' => __( 'Testimonial Attributes', 'textdmoain' ),
		'parent_item_colon' => __( 'Parent Testimonial:', 'textdmoain' ),
		'all_items' => __( 'All Testimonials', 'textdmoain' ),
		'add_new_item' => __( 'Add New Testimonial', 'textdmoain' ),
		'add_new' => __( 'Add New', 'textdmoain' ),
		'new_item' => __( 'New Testimonial', 'textdmoain' ),
		'edit_item' => __( 'Edit Testimonial', 'textdmoain' ),
		'update_item' => __( 'Update Testimonial', 'textdmoain' ),
		'view_item' => __( 'View Testimonial', 'textdmoain' ),
		'view_items' => __( 'View Testimonials', 'textdmoain' ),
		'search_items' => __( 'Search Testimonial', 'textdmoain' ),
		'not_found' => __( 'Not found', 'textdmoain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdmoain' ),
		'featured_image' => __( 'Featured Image', 'textdmoain' ),
		'set_featured_image' => __( 'Set featured image', 'textdmoain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdmoain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdmoain' ),
		'insert_into_item' => __( 'Insert into Testimonial', 'textdmoain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Testimonial', 'textdmoain' ),
		'items_list' => __( 'Testimonials list', 'textdmoain' ),
		'items_list_navigation' => __( 'Testimonials list navigation', 'textdmoain' ),
		'filter_items_list' => __( 'Filter Testimonials list', 'textdmoain' ),
	);
	$args = array(
		'label' => __( 'Testimonial', 'textdmoain' ),
		'description' => __( 'This is testimonial custom post type', 'textdmoain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-post',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'comments', 'trackbacks', 'page-attributes', 'post-formats', 'custom-fields'),
		'taxonomies' => array('testimonial'),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => true,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'testimonial', $args );

}
add_action( 'init', 'create_testimonial_cpt', 0 );