<?php  
add_action( 'wp_enqueue_scripts', 'ajt_enqueue_styles' );
function ajt_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style));
    wp_enqueue_style( 'main-style', get_stylesheet_directory_uri() . '/main.css', array( $parent_style, 'child-style'));
  wp_enqueue_style('lobster-font', '//fonts.googleapis.com/css?family=Lobster');

}



?>