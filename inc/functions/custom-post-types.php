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