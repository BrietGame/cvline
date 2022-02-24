<?php


/**
 * Register a custom post type called "collaborateur".
 *
 * @see get_post_type_labels() for label keys.
 */

function wpdocs_codex_collaborateur_init() {
    $labels = array(
        'name'                  => _x( 'collaborateurs', 'Post type general name', 'cvline' ),
        'singular_name'         => _x( 'collaborateur', 'Post type singular name', 'cvline' ),
        'menu_name'             => _x( 'collaborateurs', 'Admin Menu text', 'cvline' ),
        'name_admin_bar'        => _x( 'collaborateur', 'Add New on Toolbar', 'cvline' ),
        'add_new'               => __( 'Add New', 'cvline' ),
        'add_new_item'          => __( 'Add New collaborateur', 'cvline' ),
        'new_item'              => __( 'New collaborateur', 'cvline' ),
        'edit_item'             => __( 'Edit collaborateur', 'cvline' ),
        'view_item'             => __( 'View collaborateur', 'cvline' ),
        'all_items'             => __( 'All collaborateurs', 'cvline' ),
        'search_items'          => __( 'Search collaborateurs', 'cvline' ),
        'parent_item_colon'     => __( 'Parent collaborateurs:', 'cvline' ),
        'not_found'             => __( 'No collaborateurs found.', 'cvline' ),
        'not_found_in_trash'    => __( 'No collaborateurs found in Trash.', 'cvline' ),
        'featured_image'        => _x( 'collaborateur Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'cvline' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'cvline' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'cvline' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'cvline' ),
        'archives'              => _x( 'collaborateur archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'cvline' ),
        'insert_into_item'      => _x( 'Insert into collaborateur', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'cvline' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this collaborateur', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'cvline' ),
        'filter_items_list'     => _x( 'Filter collaborateurs list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'cvline' ),
        'items_list_navigation' => _x( 'collaborateurs list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'cvline' ),
        'items_list'            => _x( 'collaborateurs list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'cvline' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'collaborateur' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-format-chat',
        'supports'           => array( 'title', 'editor', 'author',  'excerpt', 'comments'),
    );

    register_post_type( 'collaborateur', $args );
}

add_action( 'init', 'wpdocs_codex_collaborateur_init' );
