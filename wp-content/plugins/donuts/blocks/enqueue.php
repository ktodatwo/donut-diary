<?php

function d_enqueue_block_editor_assets(){

    wp_enqueue_script( 'd_blocks_bundle' );
        wp_register_script(
        'd_blocks_bundle',
        plugins_url( '/blocks/dist/bundle.js', DONUT_PLUGIN_URL ),
        [ 'wp-i18n', 'wp-element', 'wp-blocks', 'wp-components', 'wp-editor', 'wp-api' ],
        filemtime( plugin_dir_path( DONUT_PLUGIN_URL ) . '/blocks/dist/bundle.js' )    
    );

    wp_enqueue_script( 'd_blocks_bundle' );

}