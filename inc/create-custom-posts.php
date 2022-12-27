<?php
function create_post_type() {
  register_post_type( 'sites',
    array(
      'labels' => array(
        'name' => 'Сайти',
        'singular_name' => 'Сайт'
      ),
      'public' => true,
      'has_archive' => true,
      'hierarchical' => true,
      'show_in_rest' => false,
      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    )
  );
}

add_action( 'init', 'create_post_type' );