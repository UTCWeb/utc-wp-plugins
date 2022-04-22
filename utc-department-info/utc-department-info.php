<?php
/**
 * Plugin Name: UTC Department Info
 * Plugin URI: https://github.com/UTCWeb/utc-wp-plugins/
 * Description: A custom UTC plugin that extends Genesis Custom Blocks to add a custom department info block
 * Version: 1.0.0
 * Author: Bridget Hornsby
 * Author URI: https://github.com/UTCWeb/utc-wp-plugins/
 * Text Domain: gcb
 * Requires at least: 5.6
 * Requires PHP: 7.0
 * Dependency: Genesis Custom Blocks
 */

use function Genesis\CustomBlocks\add_block;

function add_department_info_block() {
    
    // One long array with lots defined. 
    add_block(
        'department-info', 
        array( 
            'title'    => 'Department Footer Info', 
            'category' => 'common', 
            'icon'     => 'account_circle', 
            'keywords' => array( 'utc', 'department', 'dept', 'school', 'college' ), 
            'fields'   => [
                'utc-section'       => [
                    'name'        => 'UTC Organizational Section',
                    'label'       => __( 'UTC Organizational Section', 'genesis-custom-blocks' ),
                    'control'     => 'text',
                    'type'        => 'string',
                    'location'    => 'editor',
                    'order'       => 0,
                    'help'        => __( '', 'genesis-custom-blocks' ),
                    'default'     => 'The University of Tennessee at Chattanooga',
                    'placeholder' => 'UTC Organizational Section',
                    'maxlength'   => null,
                ],
                'building'       => [
                    'name'        => 'Section Suite and Building',
                    'label'       => __( 'Section Suite and Building', 'genesis-custom-blocks' ),
                    'control'     => 'text',
                    'type'        => 'string',
                    'location'    => 'editor',
                    'order'       => 0,
                    'help'        => __( 'Enter like this: 203 Founders Hall', 'genesis-custom-blocks' ),
                    'default'     => '',
                    'placeholder' => '',
                    'maxlength'   => null,
                ],
                'mail-code'       => [
                    'name'        => 'Dept No',
                    'label'       => __( 'Dept No', 'genesis-custom-blocks' ),
                    'control'     => 'text',
                    'type'        => 'string',
                    'location'    => 'editor',
                    'order'       => 0,
                    'help'        => __( '', 'genesis-custom-blocks' ),
                    'default'     => '',
                    'placeholder' => '',
                    'maxlength'   => null,
                ],
                'street-address'       => [
                    'name'        => 'Section Street Address',
                    'label'       => __( 'Section Street Address', 'genesis-custom-blocks' ),
                    'control'     => 'text',
                    'type'        => 'string',
                    'location'    => 'editor',
                    'order'       => 0,
                    'help'        => __( 'Do not include city, state, or zip. This will be done for you.', 'genesis-custom-blocks' ),
                    'default'     => '615 McCallie Ave',
                    'placeholder' => '615 McCallie Ave',
                    'maxlength'   => null,
                ],
                'phone'       => [
                    'name'        => 'Section Phone',
                    'label'       => __( 'Section Phone', 'genesis-custom-blocks' ),
                    'control'     => 'text',
                    'type'        => 'string',
                    'location'    => 'editor',
                    'order'       => 0,
                    'help'        => __( '', 'genesis-custom-blocks' ),
                    'default'     => '423-425-4111',
                    'placeholder' => '423-425-4111',
                    'maxlength'   => null,
                ],
                'email'       => [
                    'name'        => 'Section Email',
                    'label'       => __( 'Section Email', 'genesis-custom-blocks' ),
                    'control'     => 'text',
                    'type'        => 'string',
                    'location'    => 'editor',
                    'order'       => 0,
                    'help'        => __( '', 'genesis-custom-blocks' ),
                    'default'     => '',
                    'placeholder' => '',
                    'maxlength'   => null,
                ],
                'webpage-url'       => [
                    'name'        => 'Section Webpage URL',
                    'label'       => __( 'Section Webpage URL', 'genesis-custom-blocks' ),
                    'control'     => 'text',
                    'type'        => 'string',
                    'location'    => 'editor',
                    'order'       => 0,
                    'help'        => __( '', 'genesis-custom-blocks' ),
                    'default'     => 'https://www.utc.edu',
                    'placeholder' => 'https://www.utc.edu',
                    'maxlength'   => null,
                ],
                'blog-page-url'       => [
                    'name'        => 'Section Blog Page URL',
                    'label'       => __( 'Section Blog Page URL', 'genesis-custom-blocks' ),
                    'control'     => 'text',
                    'type'        => 'string',
                    'location'    => 'editor',
                    'order'       => 0,
                    'help'        => __( '', 'genesis-custom-blocks' ),
                    'default'     => 'https://blog.utc.edu/news/',
                    'placeholder' => 'https://blog.utc.edu/news/',
                    'maxlength'   => null,
                ],
                'linkedin-url'       => [
                    'name'        => 'Section LinkedIn URL',
                    'label'       => __( 'Section LinkedIn URL', 'genesis-custom-blocks' ),
                    'control'     => 'text',
                    'type'        => 'string',
                    'location'    => 'editor',
                    'order'       => 0,
                    'help'        => __( '', 'genesis-custom-blocks' ),
                    'default'     => 'https://www.linkedin.com/school/27384/',
                    'placeholder' => 'https://www.linkedin.com/school/27384/',
                    'maxlength'   => null,
                ],
                'youtube-url'       => [
                    'name'        => 'Section YouTube URL',
                    'label'       => __( 'Section YouTube URL', 'genesis-custom-blocks' ),
                    'control'     => 'text',
                    'type'        => 'string',
                    'location'    => 'editor',
                    'order'       => 0,
                    'help'        => __( '', 'genesis-custom-blocks' ),
                    'default'     => 'https://www.youtube.com/UTChattanooga',
                    'placeholder' => 'https://www.youtube.com/UTChattanooga',
                    'maxlength'   => null,
                ],
                'twitter-url'       => [
                    'name'        => 'Section Twitter URL',
                    'label'       => __( 'Section Twitter URL', 'genesis-custom-blocks' ),
                    'control'     => 'text',
                    'type'        => 'string',
                    'location'    => 'editor',
                    'order'       => 0,
                    'help'        => __( '', 'genesis-custom-blocks' ),
                    'default'     => 'https://www.twitter.com/UTChattanooga',
                    'placeholder' => 'https://www.twitter.com/UTChattanooga',
                    'maxlength'   => null,
                ],
                'instagram-url'       => [
                    'name'        => 'Section Instagram URL',
                    'label'       => __( 'Section Instagram URL', 'genesis-custom-blocks' ),
                    'control'     => 'text',
                    'type'        => 'string',
                    'location'    => 'editor',
                    'order'       => 0,
                    'help'        => __( '', 'genesis-custom-blocks' ),
                    'default'     => 'https://www.instagram.com/utchattanooga',
                    'placeholder' => 'https://www.instagram.com/utchattanooga',
                    'maxlength'   => null,
                ],
                'facebook-url'       => [
                    'name'        => 'Section Facebook URL',
                    'label'       => __( 'Section Facebook URL', 'genesis-custom-blocks' ),
                    'control'     => 'text',
                    'type'        => 'string',
                    'location'    => 'editor',
                    'order'       => 0,
                    'help'        => __( '', 'genesis-custom-blocks' ),
                    'default'     => 'https://www.facebook.com/UTChattanooga',
                    'placeholder' => 'https://www.facebook.com/UTChattanooga',
                    'maxlength'   => null,
                ],
                'days-open'       => [
                    'name'        => 'Days Open',
                    'label'       => __( 'Days Open', 'genesis-custom-blocks' ),
                    'control'     => 'text',
                    'type'        => 'string',
                    'location'    => 'editor',
                    'order'       => 0,
                    'help'        => __( 'Example: Monday - Friday', 'genesis-custom-blocks' ),
                    'default'     => 'Monday - Friday',
                    'placeholder' => 'Monday - Friday',
                    'maxlength'   => null,
                ],
                'hours-open'       => [
                    'name'        => 'Hours Open',
                    'label'       => __( 'Hours Open', 'genesis-custom-blocks' ),
                    'control'     => 'text',
                    'type'        => 'string',
                    'location'    => 'editor',
                    'order'       => 0,
                    'help'        => __( 'Example: 8:00 am-5:00 pm', 'genesis-custom-blocks' ),
                    'default'     => '8:00 am-5:00 pm',
                    'placeholder' => '8:00 am-5:00 pm',
                    'maxlength'   => null,
                ],
                
            ],

        ) 
    ); 
}
add_action( 'genesis_custom_blocks_add_blocks', 'add_department_info_block');

function department_info_block_get_alternate_template_path( $path ) {
    unset( $path );
    return __DIR__;
}

add_filter( 'genesis_custom_blocks_template_path', 'department_info_block_get_alternate_template_path' );