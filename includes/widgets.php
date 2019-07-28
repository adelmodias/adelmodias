<?php
// Widgets
if (function_exists('register_sidebar')) {
  function startertheme_widgets_init()
  {
    register_sidebar(array(
      'name'          => __('Sidebar Widgets', 'startertheme'),
      'id'            => 'sidebar-primary',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    ));
  }
  add_action('widgets_init', 'startertheme_widgets_init');
}
