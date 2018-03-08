<?php

  require_once('wp-bootstrap-navwalker.php');

  register_nav_menus( array(
    'primary' => __( 'Primary Menu', ''),
  ) );

  function new_excerpt_more($more) {
      return '';
  }
  add_filter('excerpt_more', 'new_excerpt_more', 30 );

  function the_excerpt_more_link( $excerpt ){
      $post = get_post();
      $excerpt .= '<a href="'. get_permalink($post->ID) . '">Full Article</a>';
      return $excerpt;
  }
  add_filter( 'the_excerpt', 'the_excerpt_more_link', 30 );
