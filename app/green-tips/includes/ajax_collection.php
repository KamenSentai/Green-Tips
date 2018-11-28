<?php

add_action('wp_ajax_ajax-collection', 'ajax_collection');
add_action('wp_ajax_nopriv_ajax-collection', 'ajax_collection');

function ajax_collection()
{
  global $wpdb, $_POST;
  $pagination = $_POST['pagination'];

  $enquetes = array(
    'post_type' => 'enquete',
    'posts_per_page' => 3,
    'paged' => $pagination,
  );
  $the_query = new WP_Query( $enquetes );
  $width_in_row = 4;
  include LAYOUTS_PATH . '/card.php';

  die();
}
