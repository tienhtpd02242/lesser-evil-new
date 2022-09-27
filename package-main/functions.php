<?php
/*
* Function
*/
use ScssPhp\ScssPhp\Compiler;

if( ! function_exists( 'pj_scss_compiler' ) ) {
    /**
     * Scss Compiler
     *
     * @param string $in
     * @param string $out
     * @param string $import_path
     * @param string $formatter (default: ScssPhp\ScssPhp\Formatter\Compressed)
     * @param boolean $source_map (SOURCE_MAP_INLINE)
     *
     * @return void
     */
    function pj_scss_compiler( $scss_string, $out, $import_path = '', $formatter = 'ScssPhp\ScssPhp\Formatter\Compressed', $source_map = false ) {
        $scss = new Compiler();
        if( ! empty( $import_path ) ) $scss->setImportPaths( $import_path );
        if( ! empty( $formatter ) ) $scss->setFormatter( $formatter );
        if( true == $source_map ) $scss->setSourceMap( Compiler::SOURCE_MAP_INLINE );
        file_put_contents( $out, $scss->compile( $scss_string ) );
    }
}

function package_main_types_to_uploads($file_types){
  $new_filetypes = array();
  $new_filetypes['svg'] = 'image/svg+xml';
  $file_types = array_merge($file_types, $new_filetypes );

  return $file_types;
}
add_filter('upload_mimes', 'package_main_types_to_uploads');

add_filter('acf/settings/save_json', 'lesser_evil_acf_json_save_point');
function lesser_evil_acf_json_save_point( $path ) {
    
    // update path
    $path = get_stylesheet_directory() . '/package-main/acf-json';
    
    // return
    return $path;
}

add_filter('acf/settings/load_json', 'lesser_evil_json_load_point');
function lesser_evil_json_load_point( $paths ) {
    
    // remove original path (optional)
    unset($paths[0]);

    // append path
    $paths[] = get_stylesheet_directory() . '/package-main/acf-json';
    
    // return
    return $paths;
}
