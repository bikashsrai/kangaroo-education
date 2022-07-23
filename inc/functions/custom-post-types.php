<?php

function create_institution_function(){
$labels                 = array(
'name'                  => _x('Institutions', 'post type general name', 'textdomain'),
'singular_name'         => _x('institution', 'post type Singular name', 'textdomain'),
'add_new'               => _x('Add institution', '', 'textdomain'),
'add_new_item'          => __('Add New institution', 'textdomain'),
'edit_item'             => __('Edit institution', 'textdomain'),
'update_item'           => __( 'Update institution', 'textdomain' ),
'new_item'              => __('New institution', 'textdomain'),
'all_items'             => __('All Institutions', 'textdomain'),
'view_item'             => __('View Institutions', 'textdomain'),
'view_items'            => __( 'View Institutions', 'textdomain' ),
'search_items'          => __('Search institution', 'textdomain'),
'not_found'             => __('No institution found', 'textdomain'),
'not_found_in_trash'    => __('No institution on trash', 'textdomain'),
'parent_item_colon'     => __( 'Parent institution:', 'textdomain' ),
'name_admin_bar'        => _x( 'institution', 'Add New on Toolbar', 'textdomain' ),
'archives'              => __( 'institution Archives', 'textdomain' ),
'attributes'            => __( 'institution Attributes', 'textdomain' ),
'featured_image'        => __( 'Featured Image', 'textdomain' ),
'set_featured_image'    => __( 'Set featured image', 'textdomain' ),
'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
'use_featured_image'    => __( 'Use as featured image', 'textdomain' ),
'insert_into_item'      => __( 'Insert into institution', 'textdomain' ),
'uploaded_to_this_item' => __( 'Uploaded to this institution', 'textdomain' ),
'items_list'            => __( 'Institutions list', 'textdomain' ),
'items_list_navigation' => __( 'Institutions list navigation', 'textdomain' ),
'filter_items_list'     => __( 'Filter Institutions list', 'textdomain' ),
'menu_name'             => __('Institutions', 'Admin Menu text','textdomain'),
);
$args = array(
'labels'              => $labels,
'public'              => true,
'publicly_queryable'  => true,
'show_ui'             => true,
'show_in_menu'        => true,
'query_var'           => true,
'rewrite'             => array('slug' => 'institution'),
'capability_type'     => 'post',
'has_archive'         => true,
'hierarchical'        => true,
'menu_position'       => 6,
'show_in_admin_bar'   => true,
'show_in_nav_menus'   => true,
'can_export'          => true,
'exclude_from_search' => false,
'show_in_rest'        => true,
'menu_icon'           => 'dashicons-format-gallery',
'supports'            => array('title','editor', 'thumbnail'),


);
$labels = array(
'name'              => __('Category'),
'singular_name'     => __('Category'),
'search_items'      => __('Search'),
'popular_items'     => __('More Used'),
'all_items'         => __('All Categories'),
'parent_item'       => null,
'parent_item_colon' => null,
'edit_item'         => __('Add new'),
'update_item'       => __('Update'),
'add_new_item'      => __('Add new Category'),
'new_item_name'     => __('New'),

);
register_taxonomy('institution_category', array('institution'), array(
'hierarchical'   => true,
'labels'         => $labels,
'singular_label' => 'institution_category',
'all_items'      => 'Category',
'query_var'      => true,

'rewrite'        => array('slug' => 'cat'))
);
register_post_type('institution', $args);
flush_rewrite_rules();
  add_theme_support('post-thumbnails');
}
add_action('init', 'create_institution_function');