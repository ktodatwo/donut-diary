<?php
/*
* Plugin Name: Donuts
* Description: A simple WordPress plugin that allows users to review donuts
* Version: 1.0
* Author: Katherine Keller
* Author URI: katkeller.com
* text domain: donut
*/


//functions
if( !function_exists( 'add_action' ) ){
    echo "Hi there! I'm just a plugin, not much I can do when called directly.";
    exit;
}

// setup
define( 'DONUT_PLUGIN_URL', __FILE__ );

// includes
include( 'includes/activate.php' );
include( 'includes/init.php' );
include( 'blocks/enqueue.php' );


// hooks
register_activation_hook( __FILE__, 'd_activate_plugin' );
add_action( 'init', 'donut_init' );
add_action( 'enqueue_block_editor_assets', 'd_enqueue_block_editor_assets' );



