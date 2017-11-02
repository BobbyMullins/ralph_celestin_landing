<?php

function landing_enqueue_assets() {
    wp_enqueue_style('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array ( 'style', 'jquery' ), '3.3.7', 'all'); 
    wp_enqueue_style('bootstrap_optional_theme', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css', array ( 'style', 'jquery' ), '3.3.7', 'all');
    wp_enqueue_style('style’, get_template_directory_uri() . ‘./style.css', false, '1.1', 'all'); 
    wp_enqueue_script('bootstrap_js', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array ( 'jquery' ), null, true); 
    wp_enqueue_script('custom_js', get_template_directory_uri() . '/landing.js', array ( 'jquery' ), null, true); 
    
    wp_localize_script( 'custom_js', 'myScript', array( 'template_url' => get_bloginfo('template_url') ) );
    // $script_data = array(
    //     'image_path' => get_template_directory_uri() . '/images/'
    // );
    // wp_localize_script(
    //     'custom_js',
    //     'custom_js_data',
    //     $script_data
    // );
    // $translation_array = array( 'template_directory_uri' => get_template_directory_uri());
    // wp_localize_script( 'jquery', 'custom_js', $translation_array );
    // wp_localize_script('custom_js', 'custom_js', array(
    // 'theme_directory' => get_template_directory_uri()));  
}
add_action( 'wp_enqueue_scripts', 'landing_enqueue_assets');
?>
