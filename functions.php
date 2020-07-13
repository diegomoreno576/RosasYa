<?php


function init_template(){

    add_theme_support('post-thumbnails');
    add_theme_support( 'title-tag');

    register_nav_menus(
        array(
            'top_menu' => 'Menú Principal'
        )
    );

}
add_action('init', 'init_template');


// Register Custom Post Type
function banner() {

	$labels = array(
		'name'                  => _x( 'banners', 'Post Type General Name', 'apk' ),
		'singular_name'         => _x( 'banner', 'Post Type Singular Name', 'apk' ),
		'menu_name'             => __( 'Banner', 'apk' ),
		'name_admin_bar'        => __( 'Banner', 'apk' ),
		'archives'              => __( 'Item Archives', 'apk' ),
		'attributes'            => __( 'Item Attributes', 'apk' ),
		'parent_item_colon'     => __( 'Parent Item:', 'apk' ),
		'all_items'             => __( 'All Items', 'apk' ),
		'add_new_item'          => __( 'Add New Item', 'apk' ),
		'add_new'               => __( 'Add New', 'apk' ),
		'new_item'              => __( 'New Item', 'apk' ),
		'edit_item'             => __( 'Edit Item', 'apk' ),
		'update_item'           => __( 'Update Item', 'apk' ),
		'view_item'             => __( 'View Item', 'apk' ),
		'view_items'            => __( 'View Items', 'apk' ),
		'search_items'          => __( 'Search Item', 'apk' ),
		'not_found'             => __( 'Not found', 'apk' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'apk' ),
		'featured_image'        => __( 'Featured Image', 'apk' ),
		'set_featured_image'    => __( 'Set featured image', 'apk' ),
		'remove_featured_image' => __( 'Remove featured image', 'apk' ),
		'use_featured_image'    => __( 'Use as featured image', 'apk' ),
		'insert_into_item'      => __( 'Insert into item', 'apk' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'apk' ),
		'items_list'            => __( 'Items list', 'apk' ),
		'items_list_navigation' => __( 'Items list navigation', 'apk' ),
		'filter_items_list'     => __( 'Filter items list', 'apk' ),
	);
	$args = array(
		'label'                 => __( 'banner', 'apk' ),
		'description'           => __( 'banner de RosasYa', 'apk' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-home',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'banner', $args );

}
add_action( 'init', 'banner', 0 );

