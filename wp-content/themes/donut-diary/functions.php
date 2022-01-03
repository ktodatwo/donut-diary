<?php


function donuts_on_blog_page( $query ) {
    if ( $query->is_home() && $query->is_main_query() ) {
        $query->set( 'post_type', array( 'post', 'donut' ) );
    }
}

//set up


//includes
include( get_theme_file_path( 'includes/front/enqueue.php' ) );

//hooks
add_action( 'wp_enqueue_scripts', 'dd_my_theme_enqueue_styles' );
add_action( 'pre_get_posts', 'donuts_on_blog_page' );

//shortcodes
