<?php

//set up


//includes
include( get_theme_file_path( 'includes/front/enqueue.php' ) );

//hooks
add_action( 'wp_enqueue_scripts', 'dd_my_theme_enqueue_styles' );

//shortcodes