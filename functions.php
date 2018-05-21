<?php
function nirvana_child_enqueue_styles() {

  $parent_style = 'nirvanas';
  wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
  wp_enqueue_style('nirvana_child',
    get_stylesheet_directory_uri() . '/style.css',
    array($parent_style), 
    wp_get_theme()->get('Version')
  );
}

add_action('wp_enqueue_scripts', 'nirvana_child_enqueue_styles');
?>
