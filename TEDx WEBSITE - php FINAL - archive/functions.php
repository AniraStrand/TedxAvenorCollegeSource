<?php 
function my_custom_theme_enqueue() { 
    wp_enqueue_style( 'my-wordpress-theme', get_stylesheet_uri() ); 
} 
add_action( 'wp_enqueue_scripts', 'my_custom_theme_enqueue' ); 
add_theme_support( 'post-thumbnails'); 