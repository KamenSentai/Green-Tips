<?php

add_action('wp_ajax_ajax-enquetes', 'ajax_enquetes');
add_action('wp_ajax_nopriv_ajax-enquetes', 'ajax_enquetes');

function ajax_enquetes() {
  global $wpdb, $_POST;
  $pagination = $_POST['pagination'];

  $enquetes = array(
    'post_type' => 'enquete',
    'posts_per_page' => 6,
    'paged' => $pagination,
  );
  $the_query = new WP_Query( $enquetes );
  $width_in_row = 6;
  include LAYOUTS_PATH . '/card.php';

  die();
}