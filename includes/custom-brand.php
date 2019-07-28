<?php
function support_custom_logo()
{
  add_theme_support('custom-logo', array(
    'height'      => 100,
    'width'       => 400,
    'flex-width' => true,
  ));
}
add_action('after_setup_theme', 'support_custom_logo');
function theme_prefix_the_custom_logo()
{
  if (function_exists('the_custom_logo')) {
    the_custom_logo();
  }
}
