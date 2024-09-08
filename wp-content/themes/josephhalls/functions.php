<?php 
function mytheme_enqueue_styles() {
    // Enqueue the main stylesheet
    wp_enqueue_style('mytheme-style', get_stylesheet_uri(), array(), '1.0');
    
    // Enqueue your custom JavaScript file
    wp_enqueue_script('mytheme-script', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');

function mytheme_setup() {
    // Enable support for post thumbnails and menus
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'mytheme'),
    ));
}
add_action('after_setup_theme', 'mytheme_setup');
?>