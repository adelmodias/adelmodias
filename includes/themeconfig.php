<?php 
/** Add theme support for menus **/
add_theme_support('menus');

/** Register Theme's menus **/
function register_theme_menus()
{
    register_nav_menus(
        array(
            'primary-menu'    => __('Primary Menu', 'primary-menu'),
        )
    );
}
add_action('init', 'register_theme_menus');
?>