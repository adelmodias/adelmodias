<?php
// Theme Setup (based on twentythirteen: http://make.wordpress.org/core/tag/twentythirteen/)
function startertheme_setup()
{
  add_theme_support('automatic-feed-links');
  add_theme_support('structured-post-formats', array('link', 'video'));
  add_theme_support('post-formats', array('aside', 'audio', 'chat', 'gallery', 'image', 'quote', 'status'));
  register_nav_menu('primary', __('Main menu', 'startertheme'));
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'startertheme_setup');
