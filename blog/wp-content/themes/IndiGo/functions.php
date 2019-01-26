<?php
//Adds thumbnails to post
add_theme_support('post-thumbnails');

//Adds menus
add_theme_support('menus');

register_sidebar(array(
  'name' => __( 'Right Hand Sidebar' ),
  'id' => 'right-sidebar',
  'description' => __( 'Widgets in this area will be shown on the right-hand side.' ),
  'before_title' => '<h5>',
  'after_title' => '</h5>'
));

