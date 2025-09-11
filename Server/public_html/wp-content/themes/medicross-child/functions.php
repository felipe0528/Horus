<?php

/**
 * Child Theme
 * 
 * @author Case-Themes
 * @since 1.0.0
 */
 
function medicross_child_enqueue_styles(){
    $parent_style = 'pxl-style'; 
    wp_enqueue_style('pxl-style-child', get_stylesheet_directory_uri() . '/style.css', array(
        $parent_style
    ));
}
add_action( 'wp_enqueue_scripts', 'medicross_child_enqueue_styles', 99);


add_filter('upload_mimes', function($mimes) {
  $mimes['ico'] = 'image/vnd.microsoft.icon';
  return $mimes;
});


