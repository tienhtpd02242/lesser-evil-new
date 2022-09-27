<?php
/**
 * Defined
 */
define( 'PJ_DIR', __DIR__ );
define( 'PJ_URI', get_stylesheet_directory_uri() . '/package-main/' );
define( 'PJ_DIR_URL', get_stylesheet_directory() . '/package-main/' );
define( 'PJ_VERSION', '1.0.1' );
define( 'PJ_DEV_MODE', true ); // enable to compiler scssphp

/**
* Includes
*/
require( PJ_DIR_URL . '/vendor/autoload.php' );
require( PJ_DIR . '/static.php' );
require( PJ_DIR . '/hooks.php' );
require( PJ_DIR . '/functions.php' );

/**
 * Create Pressure360 Options
 */
if ( function_exists( 'acf_add_options_page' ) ) {
    acf_add_options_page( array(
        'page_title' => 'Lesser Evil Options',
        'menu_title' => 'Lesser Evil Options',
        'menu_slug'  => 'Lesser Evil-options',
        'capability' => 'edit_posts',
        'redirect'   => false
    ) );
}

/**
* Compiler Scss
*
*/
add_action( 'init', function() {
   if( true != PJ_DEV_MODE ) return;
   pj_scss_compiler(
       file_get_contents( PJ_DIR_URL . '/assets/css/pj.scss' ),
       PJ_DIR_URL . '/assets/css/pj.css',
       PJ_DIR_URL . '/assets/css/',
       'ScssPhp\ScssPhp\Formatter\Compressed',
       false
   );
} );
