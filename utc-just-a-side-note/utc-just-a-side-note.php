<?php
/**
 * Plugin Name: UTC Department Info
 * Plugin URI: https://github.com/UTCWeb/utc-wp-plugins/utc-just-a-side-note/
 * Description: A custom UTC plugin that extends Genesis Custom Blocks to add a custom department info block
 * Version: 1.0.0
 * Author: Bridget Hornsby
 * Author URI: https://github.com/UTCWeb/utc-wp-plugins/utc-just-a-side-note/
 * Text Domain: gcb
 * Requires at least: 5.6
 * Requires PHP: 7.0
 * Dependency: Genesis Custom Blocks
 */

use function Genesis\CustomBlocks\add_block;

function add_department_info_block() {
    
    // One long array with lots defined. 
    add_block(
        'just-a-side-note', 
        array( 
            'title'    => 'Just a side note...', 
            'category' => 'common', 
            'icon'     => 'account_circle', 
            'keywords' => array( 'utc', 'note', 'links', 'contact', 'info' ), 
            'fields'   => [
                'side-note'       => [
                    'name'        => 'Side Note',
                    'label'       => __( 'Side Note', 'genesis-custom-blocks' ),
                    'control'     => 'inner-block',
                    'type'        => 'string',
                    'location'    => 'editor',
                    'order'       => 0,
                    'help'        => __( '', 'genesis-custom-blocks' ),
                    'default'     => '',
                    'placeholder' => '',
                    'maxlength'   => null,
                ],
                
            ],

        ) 
    ); 
}
add_action( 'genesis_custom_blocks_add_blocks', 'add_side_note_block');

function side_note_block_get_alternate_template_path( $path ) {
    unset( $path );
    return __DIR__;
}

add_filter( 'genesis_custom_blocks_template_path', 'side_note_block_get_alternate_template_path' );