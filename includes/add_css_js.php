<?php 

/* Load CSS Files  */
function wpmziq_theme_styles()
{
    wp_enqueue_style('font', "https://fonts.googleapis.com/css?family=Lato:300,400,700|Poppins:300,400,700");
    wp_enqueue_style('style_css', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('slick_theme', get_template_directory_uri() . '/vendor/slick-1.9.0/slick-theme.min.css');
    wp_enqueue_style('slick', get_template_directory_uri() . '/vendor/slick-1.9.0/slick.min.css');
}
add_action('wp_enqueue_scripts', 'wpmziq_theme_styles');

/* Load JS Files */
function wpmziq_theme_js()
{
    wp_enqueue_script('slick_js', get_template_directory_uri() .'/vendor/slick-1.9.0/slick.min.js', array('jquery'), VERSION, true);
    wp_enqueue_script('main_js', get_template_directory_uri() .'/js/main.js', array('jquery'), VERSION, true);
}
add_action('wp_enqueue_scripts', 'wpmziq_theme_js');
?>