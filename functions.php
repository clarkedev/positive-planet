<?php 

// Theme Setup
if (!function_exists('pp_theme_setup')) {
    function pp_theme_setup() {
        add_theme_support('wp-block-styles');
        add_theme_support('post-thumbnails');
        remove_image_size('1536x1536');
        remove_image_size('2048x2048');
    }
}
add_action('after_setup_theme', 'pp_theme_setup');

// Enqueue Stylesheet
function pp_stylesheet() {
    wp_enqueue_style('style', get_stylesheet_uri(), [], wp_get_theme()->get('Version'));
}
add_action('wp_enqueue_scripts', 'pp_stylesheet');