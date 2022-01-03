<?php
/*
function recipe_init() {
    $labels = array(
        'name'                  => _x( 'Recipes', 'Post type general name', 'recipe' ),
        'singular_name'         => _x( 'Recipe', 'Post type singular name', 'recipe' ),
        'menu_name'             => _x( 'Recipes', 'Admin Menu text', 'recipe' ),
        'name_admin_bar'        => _x( 'Recipe', 'Add New on Toolbar', 'recipe' ),
        'add_new'               => __( 'Add New', 'recipe' ),
        'add_new_item'          => __( 'Add New Recipe', 'recipe' ),
        'new_item'              => __( 'New Recipe', 'recipe' ),
        'edit_item'             => __( 'Edit Recipe', 'recipe' ),
        'view_item'             => __( 'View Recipe', 'recipe' ),
        'all_items'             => __( 'All Recipes', 'recipe' ),
        'search_items'          => __( 'Search Recipes', 'recipe' ),
        'parent_item_colon'     => __( 'Parent Recipes:', 'recipe' ),
        'not_found'             => __( 'No recipes found.', 'recipe' ),
        'not_found_in_trash'    => __( 'No recipes found in Trash.', 'recipe' ),
        'featured_image'        => _x( 'Recipe Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'recipe' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'recipe' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'recipe' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'recipe' ),
        'archives'              => _x( 'Recipe archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'recipe' ),
        'insert_into_item'      => _x( 'Insert into recipe', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'recipe' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this recipe', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'recipe' ),
        'filter_items_list'     => _x( 'Filter recipes list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'recipe' ),
        'items_list_navigation' => _x( 'Recipes list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'recipe' ),
        'items_list'            => _x( 'Recipes list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'recipe' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'description'        => 'A custom post type for recipes',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'recipe' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => [ 'title', 'editor', 'author', 'thumbnail' ],
        'taxonomies'         => [ 'category', 'post_tag' ],
        'show_in_rest'       => true
    );
 
    register_post_type( 'recipe', $args );
}
*/
 
function donut_init() {
    $labels = array(
        'name'                  => _x( 'Donuts', 'Post type general name', 'donut' ),
        'singular_name'         => _x( 'Donut', 'Post type singular name', 'donut' ),
        'menu_name'             => _x( 'Donuts', 'Admin Menu text', 'donut' ),
        'name_admin_bar'        => _x( 'Donut', 'Add New on Toolbar', 'donut' ),
        'add_new'               => __( 'Add New', 'donut' ),
        'add_new_item'          => __( 'Add New Donut', 'donut' ),
        'new_item'              => __( 'New Donut', 'donut' ),
        'edit_item'             => __( 'Edit Donut', 'donut' ),
        'view_item'             => __( 'View Donut', 'donut' ),
        'all_items'             => __( 'All Donuts', 'donut' ),
        'search_items'          => __( 'Search Donuts', 'donut' ),
        'parent_item_colon'     => __( 'Parent Donuts:', 'donut' ),
        'not_found'             => __( 'No Donuts found.', 'donut' ),
        'not_found_in_trash'    => __( 'No Donuts found in Trash.', 'donut' ),
        'featured_image'        => _x( 'Donut Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'donut' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'donut' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'donut' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'donut' ),
        'archives'              => _x( 'Donut archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'donut' ),
        'insert_into_item'      => _x( 'Insert into Donut', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'donut' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Donut', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'donut' ),
        'filter_items_list'     => _x( 'Filter Donuts list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'donut' ),
        'items_list_navigation' => _x( 'Donuts list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'donut' ),
        'items_list'            => _x( 'Donuts list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'donut' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'description'        => 'A custom post type for donuts',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'donut' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 10,
        'supports'           => [ 'title', 'editor', 'author', 'thumbnail' ],
        'taxonomies'         => [ 'categories', 'post_tag' ],
        'show_in_rest'       => true
    );
 
    register_post_type( 'donut', $args );
}
