<?php
 /**
  * Load scripts
  *
  */
add_action( 'wp_enqueue_scripts', 'package_main_scripts');
if( ! function_exists( 'package_main_scripts' ) ) {
    function package_main_scripts() {

        wp_enqueue_style( 'pj-css', PJ_URI . 'assets/css/pj.css', false, PJ_VERSION );

        wp_enqueue_style( 'fontawesome', PJ_URI . 'assets/lib/font-awesome/css/font-awesome.min.css', false, PJ_VERSION );
        
        wp_enqueue_script( 'circletype', PJ_URI . 'assets/js/circletype.min.js', ['jquery'], PJ_VERSION, true );
        
        wp_enqueue_script( 'home', PJ_URI . 'assets/js/home.js', ['jquery'], PJ_VERSION, true );
    }
}
